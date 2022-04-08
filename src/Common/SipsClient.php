<?php

declare(strict_types=1);

namespace Worldline\Sips\Common;

use Exception;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Worldline\Sips\Common\Seal\JsonSealCalculator;
use Worldline\Sips\Common\Seal\PostSealCalculator;
use Worldline\Sips\Common\SipsMessages\SipsMessage;
use Worldline\Sips\Office\SipsMessages\CashManagement\Cancel;
use Worldline\Sips\Office\SipsMessages\CashManagement\Duplicate;
use Worldline\Sips\Office\SipsMessages\CashManagement\DuplicateResponse;
use Worldline\Sips\Office\SipsMessages\CashManagement\Refund;
use Worldline\Sips\Office\SipsMessages\Checkout\CardOrder;
use Worldline\Sips\Office\SipsMessages\Checkout\CardOrderResponse;
use Worldline\Sips\Office\SipsMessages\Checkout\PaymentProviderFinalize;
use Worldline\Sips\Office\SipsMessages\Checkout\PaymentProviderFinalizeResponse;
use Worldline\Sips\Office\SipsMessages\Checkout\PaymentProviderInitialize;
use Worldline\Sips\Office\SipsMessages\Checkout\WalletOrder;
use Worldline\Sips\Office\SipsMessages\Checkout\WalletOrderResponse;
use Worldline\Sips\Office\SipsMessages\Diagnostic\GetTransactionData;
use Worldline\Sips\Office\SipsMessages\Diagnostic\GetTransactionDataResponse;
use Worldline\Sips\Office\SipsMessages\Wallet\AddCard;
use Worldline\Sips\Office\SipsMessages\Wallet\AddCardResponse;
use Worldline\Sips\Office\SipsMessages\Wallet\DeletePaymentMean;
use Worldline\Sips\Office\SipsMessages\Wallet\DeletePaymentMeanResponse;
use Worldline\Sips\Office\SipsMessages\Wallet\GetPaymentMeanData;
use Worldline\Sips\Office\SipsMessages\Wallet\GetPaymentMeanDataResponse;
use Worldline\Sips\Office\SipsMessages\Wallet\GetWalletData;
use Worldline\Sips\Office\SipsMessages\Wallet\GetWalletDataResponse;
use Worldline\Sips\Office\SipsMessages\Wallet\SignOff;
use Worldline\Sips\Office\SipsMessages\Wallet\SignOffResponse;
use Worldline\Sips\Paypage\SipsMessages\PaymentResult;

class SipsClient
{
    private SipsEnvironment $environment;

    private string $merchantId;

    private string $secretKey;

    private int $keyVersion;

    private ?string $lastRequestAsJson = null;

    private ?string $lastResponseAsJson = null;

    private Serializer $serializer;

    /**
     * SipsClient constructor.
     */
    public function __construct(
        SipsEnvironment $environment,
        string $merchantId,
        string $secretKey,
        int $keyVersion
    ) {
        $this->setEnvironment($environment);
        $this->setMerchantId($merchantId);
        $this->setSecretKey($secretKey);
        $this->setKeyVersion($keyVersion);

        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizers = [new ArrayDenormalizer(), new ObjectNormalizer(null, null, null, $extractor)];
        $encoders = [new JsonEncoder()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function setEnvironment(SipsEnvironment $environment): void
    {
        $this->environment = $environment;
    }

    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    public function setSecretKey(string $secretKey): void
    {
        $this->secretKey = $secretKey;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function setMerchantId(string $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    public function getKeyVersion(): int
    {
        return $this->keyVersion;
    }

    public function setKeyVersion(int $keyVersion): void
    {
        $this->keyVersion = $keyVersion;
    }

    /**
     * @param bool $prettyPrint
     */
    public function getLastRequestAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastRequestAsJson, true, 512, \JSON_THROW_ON_ERROR), \JSON_PRETTY_PRINT);
        }

        return $this->lastRequestAsJson;
    }

    /**
     * @param bool $prettyPrint
     */
    public function getLastResponseAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastResponseAsJson, true, 512, \JSON_THROW_ON_ERROR), \JSON_PRETTY_PRINT);
        }

        return $this->lastResponseAsJson;
    }

    /**
     * @throws Exception
     */
    public function doCardOrder(
        int $amount,
        string $currencyCode,
        string $cardNumber,
        string $cardExpiryDate,
        string $cardCSCValue,
        string $orderChannel = null,
        string $statementReference = null,
        string $captureMode = null,
        int $captureDay = null,
        string $transactionReference = null
    ): CardOrderResponse {
        $cardOrder = new CardOrder();
        $cardOrder->setAmount($amount);
        $cardOrder->setCurrencyCode($currencyCode);
        $cardOrder->setCardNumber($cardNumber);
        $cardOrder->setCardExpiryDate($cardExpiryDate);
        $cardOrder->setCardCSCValue($cardCSCValue);
        if (isset($statementReference)) {
            $cardOrder->setStatementReference($statementReference);
        }

        if (isset($transactionReference)) {
            $cardOrder->setTransactionReference($transactionReference);
        }

        if (isset($captureMode)) {
            $cardOrder->setCaptureMode($captureMode);
        }

        if (isset($captureDay)) {
            $cardOrder->setCaptureDay($captureDay);
        }

        if (isset($orderChannel)) {
            $cardOrder->setOrderChannel($orderChannel);
        }

        return $this->send($cardOrder);
    }

    public function doWalletOrder(
        int $amount,
        string $currencyCode,
        string $merchantWalletId,
        $paymentMeanId = '1',
        string $statementReference = null,
        string $transactionReference = null,
        string $orderChannel = null
    ): WalletOrderResponse {
        $walletOrder = new WalletOrder();
        $walletOrder->setAmount($amount)
          ->setCurrencyCode($currencyCode)
          ->setMerchantWalletId($merchantWalletId)
          ->setPaymentMeanId($paymentMeanId);
        if (isset($statementReference)) {
            $walletOrder->setStatementReference($statementReference);
        }

        if (isset($transactionReference)) {
            $walletOrder->setTransactionReference($transactionReference);
        }

        $walletOrder->setOrderChannel($orderChannel);
        try {
            $result = $this->send($walletOrder);
        } catch (Exception) {
            $result = new WalletOrderResponse();
            $result->setErrorFieldName('Seal: seal does not match')
                ->setResponseCode('34');
        }

        return $result;
    }

    /**
     * @throws \Exception
     */
    public function doGetBcmcIntent(
        int $amount,
        string $merchantReturnUrl,
        string $transactionReference = null,
        string $statementReference = null,
        string $orderId = null
    ): string {
        $paymentProviderInitialize = new PaymentProviderInitialize();
        $paymentProviderInitialize->setAmount($amount);
        $paymentProviderInitialize->setMerchantReturnUrl($merchantReturnUrl);
        if (null !== $transactionReference) {
            $paymentProviderInitialize->setTransactionReference(
                $transactionReference
            );
        }

        if (null !== $statementReference) {
            $paymentProviderInitialize->setStatementReference(
                $statementReference
            );
        }

        if (null !== $orderId) {
            $paymentProviderInitialize->setOrderId($orderId);
        }

        $paymentProviderInitialize->setCurrencyCode('978');
        $paymentProviderInitialize->setOrderChannel('INTERNET');
        $paymentProviderInitialize->setPaymentMeanBrand('BCMCMOBILE');
        $paymentProviderInitialize->setResponseKeyVersion(1);

        $result = $this->send($paymentProviderInitialize);

        return $result->getRedirectionUrl();
    }

    /**
     * @throws \Exception
     */
    public function doGetBcmcQR(
        int $amount,
        string $merchantReturnUrl,
        string $transactionReference = null,
        string $statementReference = null,
        string $orderId = null
    ): string {
        $paymentProviderInitialize = new PaymentProviderInitialize();
        $paymentProviderInitialize->setAmount($amount);
        $paymentProviderInitialize->setMerchantReturnUrl($merchantReturnUrl);
        if (null !== $transactionReference) {
            $paymentProviderInitialize->setTransactionReference(
                $transactionReference
            );
        }

        if (null !== $statementReference) {
            $paymentProviderInitialize->setStatementReference(
                $statementReference
            );
        }

        if (null !== $orderId) {
            $paymentProviderInitialize->setOrderId($orderId);
        }

        $paymentProviderInitialize->setCurrencyCode('978');
        $paymentProviderInitialize->setOrderChannel('INTERNET');
        $paymentProviderInitialize->setPaymentMeanBrand('BCMCMOBILE');
        $paymentProviderInitialize->setResponseKeyVersion(1);

        $result = $this->send($paymentProviderInitialize);

        return 'https://chart.googleapis.com/chart?chs=400x400&cht=qr&chl='.$result->getOuterRedirectionUrl(
            );
    }

    /**
     * @throws \Exception
     */
    public function doPaymentProviderFinalize(): PaymentProviderFinalizeResponse
    {
        $sealCalculator = new PostSealCalculator();
        if (!$sealCalculator->isCorrectSeal(
            $_POST['Seal'],
            $_POST['Data'],
            $this->getSecretKey()
        )) {
            throw new Exception('Invalid seal in response. Response not trusted.');
        }

        $data = [];
        foreach (explode('|', base64_decode($_POST['Data'], true)) as $var) {
            $var = explode('=', $var, 2);
            $data[$var[0]] = $var[1];
        }

        $paymentProviderFinalize = new PaymentProviderFinalize();
        $paymentProviderFinalize->setTransactionReference(
            $data['transactionReference']
        );
        $paymentProviderFinalize->setMessageVersion(
            $data['messageVersion']
        );
        $paymentProviderFinalize->setRedirectionData(
            $data['redirectionData']
        );

        return $this->send($paymentProviderFinalize);
    }

    /**
     * @throws \Exception
     */
    public function doGetTransactionData(
        string $transactionReference
    ): GetTransactionDataResponse {
        $getTransactionData = new GetTransactionData();
        $getTransactionData->setTransactionReference($transactionReference);

        return $this->send($getTransactionData);
    }

    /**
     * @throws \Exception
     */
    public function doRefund(
        string $transactionReference,
        int $amount = null
    ): SipsMessage {
        $transactionInfo = $this->doGetTransactionData($transactionReference);
        if (null === $amount) {
            $amount = $transactionInfo->getCurrentAmount();
        }

        if ('00' === $transactionInfo->getGetTransDataResponseCode()) {
            if ('TO_CAPTURE' === $transactionInfo->getTransactionStatus(
                ) || 'CAPTURED' === $transactionInfo->getTransactionStatus(
                )) {
                if ('TO_CAPTURE' === $transactionInfo->getTransactionStatus()) {
                    $request = new Cancel();
                    $request->setTransactionReference($transactionReference);
                    $request->setCurrencyCode(
                        $transactionInfo->getCurrencyCode()
                    );
                    $request->setOperationAmount($amount);
                }

                if ('CAPTURED' === $transactionInfo->getTransactionStatus()) {
                    $request = new Refund();
                    $request->setTransactionReference($transactionReference);
                    $request->setCurrencyCode(
                        $transactionInfo->getCurrencyCode()
                    );
                    $request->setOperationAmount($amount);
                }

                return $this->send($request);
            }

            throw new Exception('Transaction is in a non-refundable state. Status : '.$transactionInfo->getTransactionStatus());
        } else {
            throw new Exception('TransactionData could not be fetched. getTransDataResponseCode =  '.$transactionInfo->getGetTransDataResponseCode());
        }
    }

    /**
     * @throws \Exception
     */
    public function doDuplicate(
        string $fromTransactionReference,
        int $amount = null,
        string $transactionReference = null
    ): DuplicateResponse {
        $transactionInfo = $this->doGetTransactionData(
            $fromTransactionReference
        );
        if (null === $amount) {
            $amount = $transactionInfo->getOriginAmount();
        }

        $request = new Duplicate();
        $request->setFromMerchantId($this->getMerchantId());
        $request->setFromTransactionReference($fromTransactionReference);
        $request->setAmount($amount);
        $request->setCurrencyCode($transactionInfo->getCurrencyCode());
        if (null !== $transactionReference) {
            $request->setTransactionReference($transactionReference);
        }

        return $this->send($request);
    }

    /**
     * @throws \Exception
     */
    public function doAddCard(
        string $merchantWalletId,
        string $cardNumber,
        string $cardExpiryDate,
        string $paymentMeanAlias = null,
        string $paymentMeanBrand = null
    ): AddCardResponse {
        $request = new AddCard();
        $request->setMerchantWalletId($merchantWalletId)
            ->setCardNumber($cardNumber)
            ->setCardExpiryDate($cardExpiryDate);
        if (null !== $paymentMeanAlias) {
            $request->setPaymentMeanAlias($paymentMeanAlias);
        }

        if (null !== $paymentMeanBrand) {
            $request->setPaymentMeanBrand($paymentMeanBrand);
        }

        return $this->send($request);
    }

    /**
     * @throws \Exception
     */
    public function doGetWalletData(
        string $merchantWalletId
    ): GetWalletDataResponse {
        $request = new GetWalletData();
        $request->setMerchantWalletId($merchantWalletId);

        return $this->send($request);
    }

    public function doGetPaymentMean(
        string $merchantWalletId,
        string $paymentMeanId
    ): GetPaymentMeanDataResponse {
        $request = new GetPaymentMeanData();
        $request->setMerchantWalletId($merchantWalletId)
            ->setPaymentMeanId($paymentMeanId);
        try {
            $result = $this->send($request);
        } catch (Exception) {
            $result = new GetPaymentMeanDataResponse();
            $result->setErrorFieldName('Seal: seal does not match')
                ->setWalletResponseCode('34');
        }

        return $result;
    }

    /**
     * @throws \Exception
     */
    public function doDeletePaymentMean(
        string $merchantWalletId,
        string $paymentMeanId
    ): DeletePaymentMeanResponse {
        $request = new DeletePaymentMean();
        $request->setMerchantWalletId($merchantWalletId)
            ->setPaymentMeanId($paymentMeanId);

        return $this->send($request);
    }

    /**
     * @throws \Exception
     */
    public function doSignOffWallet(string $mercahntWalletId): SignOffResponse
    {
        $request = new SignOff();
        $request->setMerchantWalletId($mercahntWalletId);

        return $this->send($request);
    }

    /**
     * @throws \Exception
     */
    public function finalizeTransaction(): PaymentResult
    {
        $data = $_POST['Data'];
        $seal = $_POST['Seal'];
        $sealCalculator = new PostSealCalculator();
        if (!$sealCalculator->isCorrectSeal($seal, $data, $this->secretKey)) {
            throw new Exception('Invalid seal in response. Response not trusted.');
        }

        $data = explode('|', $data);
        $dataArray = [];
        foreach ($data as $value) {
            $value = explode('=', $value, 2);
            $dataArray[$value[0]] = $value[1];
        }

        return $this->serializer->denormalize($dataArray, PaymentResult::class);
    }

    /**
     * @throws \Exception
     *
     * @return mixed
     */
    public function send(SipsMessage &$request)
    {
        $className = $request::class.'Response';
        $request->setMerchantId($this->getMerchantId());
        $request->setKeyVersion($this->getKeyVersion());

        $sealCalculator = new JsonSealCalculator();
        $sealCalculator->calculateSeal($request, $this->getSecretKey());

        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $json = $this->serializer->serialize(
            $request,
            'json',
            [
                'ignored_attributes' => ['serviceUrl'],
                'skip_null_values' => true,
            ]
        );
        $this->lastRequestAsJson = $json;

        $client = HttpClientDiscovery::find();
        $messageFactory = MessageFactoryDiscovery::find();

        $response = $client->sendRequest(
            $messageFactory->createRequest(
                'POST',
                $this->environment->getEnvironment().$request->getServiceUrl(),
                $headers,
                $json
            )
        );

        $json = $response->getBody()->getContents();
        $this->lastResponseAsJson = $json;
        $obj = $this->serializer->deserialize($json, $className, 'json');

        if (null !== $obj->getSeal()) {
            $validSeal = $sealCalculator->isCorrectSeal(
                $obj,
                $this->getSecretKey()
            );
            if (!$validSeal) {
                throw new Exception('Invalid seal in response. Response not trusted.');
            }
        }

        return $obj;
    }
}
