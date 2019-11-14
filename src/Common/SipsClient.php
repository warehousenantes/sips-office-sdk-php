<?php


namespace Worldline\Sips\Common;


use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Worldline\Sips\Common\Seal\JsonSealCalculator;
use Worldline\Sips\Common\Seal\PostSealCalculator;
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
use Worldline\Sips\Common\SipsMessages\SipsMessage;
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

    private $environment;

    private $merchantId;

    private $secretKey;

    private $keyVersion;

    private $lastRequestAsJson;

    private $lastResponseAsJson;

    private $serializer;

    /**
     * SipsClient constructor.
     *
     * @param SipsEnvironment $environment
     * @param string $merchantId
     * @param string $secretKey
     * @param int $keyVersion
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
        $normalizers = [new ObjectNormalizer()];
        $encoders = [new JsonEncoder()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param SipsEnvironment $environment
     */
    public function setEnvironment(SipsEnvironment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey(string $secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     */
    public function setMerchantId(string $merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return int
     */
    public function getKeyVersion(): int
    {
        return $this->keyVersion;
    }

    /**
     * @param int $keyVersion
     */
    public function setKeyVersion(int $keyVersion)
    {
        $this->keyVersion = $keyVersion;
    }

    /**
     * @param bool $prettyPrint
     * @return string
     */
    public function getLastRequestAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastRequestAsJson,true),JSON_PRETTY_PRINT);
        } else {
            return $this->lastRequestAsJson;
        }
    }

    /**
     * @param bool $prettyPrint
     * @return string
     */
    public function getLastResponseAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastResponseAsJson,true),JSON_PRETTY_PRINT);
        } else {
            return $this->lastResponseAsJson;
        }
    }

    /**
     * @param int $amount
     * @param string $currencyCode
     * @param string $cardNumber
     * @param string $cardExpiryDate
     * @param string $cardCSCValue
     * @param string|null $statementReference
     * @param string|null $transactionReference
     * @param string|null $captureMode
     * @param int|null $captureDay
     * @param string|null $orderChannel
     *
     * @return CardOrderResponse
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
        $result = $this->send($cardOrder);

        return $result;
    }

    public function doWalletOrder(
        int $amount,
        string $currencyCode,
        string $merchantWalletId,
        $paymentMeanId = "1",
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
        } catch (Exception $e) {
            $result = new WalletOrderResponse();
            $result->setErrorFieldName("Seal: seal does not match")
                ->setResponseCode("34");
        }

        return $result;
    }

    /**
     * @param int $amount
     * @param string $merchantReturnUrl
     * @param string|null $transactionReference
     * @param string|null $statementReference
     * @param string|null $orderId
     *
     * @return string
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
        if (!is_null($transactionReference)) {
            $paymentProviderInitialize->setTransactionReference(
                $transactionReference
            );
        }
        if (!is_null($statementReference)) {
            $paymentProviderInitialize->setStatementReference(
                $statementReference
            );
        }
        if (!is_null($orderId)) {
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
     * @param int $amount
     * @param string $merchantReturnUrl
     * @param string|null $transactionReference
     * @param string|null $statementReference
     * @param string|null $orderId
     *
     * @return string
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
        if (!is_null($transactionReference)) {
            $paymentProviderInitialize->setTransactionReference(
                $transactionReference
            );
        }
        if (!is_null($statementReference)) {
            $paymentProviderInitialize->setStatementReference(
                $statementReference
            );
        }
        if (!is_null($orderId)) {
            $paymentProviderInitialize->setOrderId($orderId);
        }
        $paymentProviderInitialize->setCurrencyCode('978');
        $paymentProviderInitialize->setOrderChannel('INTERNET');
        $paymentProviderInitialize->setPaymentMeanBrand('BCMCMOBILE');
        $paymentProviderInitialize->setResponseKeyVersion(1);
        $result = $this->send($paymentProviderInitialize);


        return "https://chart.googleapis.com/chart?chs=400x400&cht=qr&chl=".$result->getOuterRedirectionUrl(
            );
    }

    /**
     * @return PaymentProviderFinalizeResponse
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
            throw new Exception(
                "Invalid seal in response. Response not trusted."
            );
        } else {
            $data = [];
            foreach (explode('|', base64_decode($_POST['Data'])) as $var) {
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
            $result = $this->send($paymentProviderFinalize);
        }

        return $result;
    }

    /**
     * @param string $transactionReference
     *
     * @return GetTransactionDataResponse
     * @throws \Exception
     */
    public function doGetTransactionData(string $transactionReference
    ): GetTransactionDataResponse {
        $getTransactionData = new GetTransactionData();
        $getTransactionData->setTransactionReference($transactionReference);
        $result = $this->send($getTransactionData);

        return $result;
    }

    /**
     * @param string $transactionReference
     * @param int|null $amount
     *
     * @return SipsMessage
     * @throws \Exception
     */
    public function doRefund(
        string $transactionReference,
        int $amount = null
    ): SipsMessage {
        $transactionInfo = $this->doGetTransactionData($transactionReference);
        if (is_null($amount)) {
            $amount = $transactionInfo->getCurrentAmount();
        }
        if ($transactionInfo->getGetTransDataResponseCode() == "00") {
            if ($transactionInfo->getTransactionStatus(
                ) == "TO_CAPTURE" or $transactionInfo->getTransactionStatus(
                ) == "CAPTURED") {
                if ($transactionInfo->getTransactionStatus() == "TO_CAPTURE") {
                    $request = new Cancel();
                    $request->setTransactionReference($transactionReference);
                    $request->setCurrencyCode(
                        $transactionInfo->getCurrencyCode()
                    );
                    $request->setOperationAmount($amount);
                }
                if ($transactionInfo->getTransactionStatus() == "CAPTURED") {
                    $request = new Refund();
                    $request->setTransactionReference($transactionReference);
                    $request->setCurrencyCode(
                        $transactionInfo->getCurrencyCode()
                    );
                    $request->setOperationAmount($amount);
                }
                $response = $this->send($request);

                return $response;
            } else {
                throw new Exception(
                    "Transaction is in a non-refundable state. Status : ".$transactionInfo->getTransactionStatus(
                    )
                );
            }
        } else {
            throw new Exception(
                "TransactionData could not be fetched. getTransDataResponseCode =  ".$transactionInfo->getGetTransDataResponseCode(
                )
            );
        }
    }

    /**
     * @param string $fromTransactionReference
     * @param int|null $amount
     * @param string|null $transactionReference
     *
     * @return DuplicateResponse
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
        if (is_null($amount)) {
            $amount = $transactionInfo->getOriginAmount();
        }
        $request = new Duplicate();
        $request->setFromMerchantId($this->getMerchantId());
        $request->setFromTransactionReference($fromTransactionReference);
        $request->setAmount($amount);
        $request->setCurrencyCode($transactionInfo->getCurrencyCode());
        if (!is_null($transactionReference)) {
            $request->setTransactionReference($transactionReference);
        }
        $response = $this->send($request);

        return $response;
    }

    /**
     * @param string $merchantWalletId
     * @param string $cardNumber
     * @param string $cardExpiryDate
     * @param string|null $paymentMeanAlias
     * @param string|null $paymentMeanBrand
     *
     * @return AddCardResponse
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
        if (!is_null($paymentMeanAlias)) {
            $request->setPaymentMeanAlias($paymentMeanAlias);
        }
        if (!is_null($paymentMeanBrand)) {
            $request->setPaymentMeanBrand($paymentMeanBrand);
        }
        $response = $this->send($request);

        return $response;
    }

    /**
     * @param string $merchantWalletId
     *
     * @return GetWalletDataResponse
     * @throws \Exception
     */
    public function doGetWalletData(string $merchantWalletId
    ): GetWalletDataResponse {
        $request = new GetWalletData();
        $request->setMerchantWalletId($merchantWalletId);
        $result = $this->send($request);

        return $result;
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
        } catch (Exception $e) {
            $result = new GetPaymentMeanDataResponse();
            $result->setErrorFieldName("Seal: seal does not match")
                ->setWalletResponseCode("34");
        }

        return $result;
    }

    /**
     * @param string $merchantWalletId
     * @param string $paymentMeanId
     *
     * @return DeletePaymentMeanResponse
     * @throws \Exception
     */
    public function doDeletePaymentMean(
        string $merchantWalletId,
        string $paymentMeanId
    ): DeletePaymentMeanResponse {
        $request = new DeletePaymentMean();
        $request->setMerchantWalletId($merchantWalletId)
            ->setPaymentMeanId($paymentMeanId);
        $response = $this->send($request);

        return $response;
    }

    /**
     * @param string $mercahntWalletId
     *
     * @return SignOffResponse
     * @throws \Exception
     */
    public function doSignOffWallet(string $mercahntWalletId): SignOffResponse
    {
        $request = new SignOff();
        $request->setMerchantWalletId($mercahntWalletId);
        $response = $this->send($request);

        return $response;
    }

    /**
     * @return PaymentResult
     * @throws \Exception
     */
    public function finalizeTransaction(): PaymentResult
    {
        $data = $_POST['Data'];
        $seal = $_POST['Seal'];
        $sealCalculator = new PostSealCalculator();
        if (!$sealCalculator->isCorrectSeal($seal, $data, $this->secretKey)) {
            throw new Exception(
                "Invalid seal in response. Response not trusted."
            );
        }
        $result = new PaymentResult($data);

        return $result;
    }

    /**
     * @param SipsMessage $request
     *
     * @return mixed
     * @throws \Exception
     */
    public function send(SipsMessage &$request)
    {
        $className = get_class($request)."Response";
        $request->setMerchantId($this->getMerchantId());
        $request->setKeyVersion($this->getKeyVersion());
        $sealCalculator = new JsonSealCalculator();
        $sealCalculator->calculateSeal($request, $this->getSecretKey());
        $client = new Client(
            ['base_uri' => $this->environment->getEnvironment()]
        );
        $headers = [
            "Content-Type" => "application/json",
            "Accept" => "application/json",
        ];
        $json = $this->serializer->serialize($request, 'json', ['ignored_attributes' => ['serviceUrl'], 'skip_null_values' => true]);
        $this->lastRequestAsJson = $json;
        $guzzleRequest = new Request(
            "POST",
            $request->getServiceUrl(),
            $headers,
            $json
        );
        $response = $client->send($guzzleRequest);
        $json = $response->getBody()->getContents();
        $this->lastResponseAsJson = $json;
        $obj = $this->serializer->deserialize($json, $className, 'json');
        if (null !== $obj->getSeal()) {
            $validSeal = $sealCalculator->isCorrectSeal(
                $obj,
                $this->getSecretKey()
            );
            if (!$validSeal) {
                throw new Exception(
                    "Invalid seal in response. Response not trusted."
                );
            }
        }

        return $obj;
    }

}
