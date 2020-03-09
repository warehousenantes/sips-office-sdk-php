<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\Fields\CardData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentProviderFinalizeResponse
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class PaymentProviderFinalizeResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $merchantId;
    
    /**
     * @var null|string
     */
    protected $transactionReference;
    
    /**
     * @var null|int
     */
    protected $amount;
    
    /**
     * @var null|string
     */
    protected $currencyCode;
    
    /**
     * @var null|string
     */
    protected $captureMode;
    
    /**
     * @var null|int
     */
    protected $captureDay;
    
    /**
     * @var null|string
     */
    protected $orderChannel;
    
    /**
     * @var null|string
     */
    protected $paymentPattern;
    
    /**
     * @var null|string
     */
    protected $customerId;
    
    /**
     * @var null|string
     */
    protected $customerIpAddress;
    
    /**
     * @var null|string
     */
    protected $returnContext;
    
    /**
     * @var null|string
     */
    protected $statementReference;
    
    /**
     * @var null|string
     */
    protected $invoiceReference;
    
    /**
     * @var null|string
     */
    protected $merchantTransactionDateTime;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;
    
    /**
     * @var null|string
     */
    protected $avsPostcodeResponseCode;
    
    /**
     * @var null|string
     */
    protected $avsAddressResponseCode;
    
    /**
     * @var null|string
     */
    protected $authorisationId;
    
    /**
     * @var null|string
     */
    protected $guaranteeIndicator;
    
    /**
     * @var null|string
     */
    protected $transactionStatus;
    
    /**
     * @var null|string
     */
    protected $panEntryMode;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    protected $maskedPan;
    
    /**
     * @var null|string
     */
    protected $cardExpiryDate;
    
    /**
     * @var null|string
     */
    protected $cardCSCResultCode;
    
    /**
     * @var null|string
     */
    protected $walletType;
    
    /**
     * @var null|string
     */
    protected $transactionDateTime;
    
    /**
     * @var null|string
     */
    protected $holderAuthentMethod;
    
    /**
     * @var null|string
     */
    protected $holderAuthentStatus;
    
    /**
     * @var null|string
     */
    protected $holderAuthentProgram;
    
    /**
     * @var null|string
     */
    protected $scoreColor;
    
    /**
     * @var null|string
     */
    protected $scoreInfo;
    
    /**
     * @var null|string
     */
    protected $scoreProfile;
    
    /**
     * @var null|string
     */
    protected $scoreThreshold;
    
    /**
     * @var null|string
     */
    protected $scoreValue;
    
    /**
     * @var null|string
     */
    protected $complementaryCode;
    
    /**
     * @var null|string
     */
    protected $complementaryInfo;
    
    /**
     * @var null|string
     */
    protected $responseCode;
    
    /**
     * @var null|string
     */
    protected $issuerWalletInformation;
    
    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;
    
    /**
     * @var null|string
     */
    protected $orderId;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseMessage;
    
    /**
     * @var null|CardData
     */
    protected $cardData;
    
    /**
     * @var null|string
     */
    protected $acquirerNativeResponseCode;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseIdentifier;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $preAuthorisationProfile;
    
    /**
     * @var null|string
     */
    protected $preAuthorisationProfileValue;
    
    /**
     * @var null|string
     */
    protected $preAuthorisationRuleResultList;
    
    /**
     * @var null|string
     */
    protected $transactionPlatform;
    
    /**
     * @var null|string
     */
    protected $errorFieldName;
    
    /**
     * @var null|string
     */
    protected $issuerWalletId;
    
    /**
     * @var null|string
     */
    protected $intermediateServiceProviderOperationId;

    /**
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $merchantId
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setMerchantId(?string $merchantId
    ): PaymentProviderFinalizeResponse {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * @param string|null $transactionReference
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): PaymentProviderFinalizeResponse {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAmount(?int $amount): PaymentProviderFinalizeResponse
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $currencyCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCurrencyCode(?string $currencyCode
    ): PaymentProviderFinalizeResponse {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureMode(): ?string
    {
        return $this->captureMode;
    }

    /**
     * @param string|null $captureMode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCaptureMode(?string $captureMode
    ): PaymentProviderFinalizeResponse {
        $this->captureMode = $captureMode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaptureDay(): ?int
    {
        return $this->captureDay;
    }

    /**
     * @param int|null $captureDay
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCaptureDay(?int $captureDay
    ): PaymentProviderFinalizeResponse {
        $this->captureDay = $captureDay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderChannel(): ?string
    {
        return $this->orderChannel;
    }

    /**
     * @param string|null $orderChannel
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setOrderChannel(?string $orderChannel
    ): PaymentProviderFinalizeResponse {
        $this->orderChannel = $orderChannel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    /**
     * @param string|null $paymentPattern
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setPaymentPattern(?string $paymentPattern
    ): PaymentProviderFinalizeResponse {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCustomerId(?string $customerId
    ): PaymentProviderFinalizeResponse {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    /**
     * @param string|null $customerIpAddress
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): PaymentProviderFinalizeResponse {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    /**
     * @param string|null $returnContext
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setReturnContext(?string $returnContext
    ): PaymentProviderFinalizeResponse {
        $this->returnContext = $returnContext;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatementReference(): ?string
    {
        return $this->statementReference;
    }

    /**
     * @param string|null $statementReference
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setStatementReference(?string $statementReference
    ): PaymentProviderFinalizeResponse {
        $this->statementReference = $statementReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    /**
     * @param string|null $invoiceReference
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setInvoiceReference(?string $invoiceReference
    ): PaymentProviderFinalizeResponse {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantTransactionDateTime(): ?string
    {
        return $this->merchantTransactionDateTime;
    }

    /**
     * @param string|null $merchantTransactionDateTime
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): PaymentProviderFinalizeResponse {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @param string|null $acquirerResponseCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): PaymentProviderFinalizeResponse {
        $this->acquirerResponseCode = $acquirerResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvsPostcodeResponseCode(): ?string
    {
        return $this->avsPostcodeResponseCode;
    }

    /**
     * @param string|null $avsPostcodeResponseCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): PaymentProviderFinalizeResponse {
        $this->avsPostcodeResponseCode = $avsPostcodeResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvsAddressResponseCode(): ?string
    {
        return $this->avsAddressResponseCode;
    }

    /**
     * @param string|null $avsAddressResponseCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): PaymentProviderFinalizeResponse {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    /**
     * @param string|null $authorisationId
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): PaymentProviderFinalizeResponse {
        $this->authorisationId = $authorisationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGuaranteeIndicator(): ?string
    {
        return $this->guaranteeIndicator;
    }

    /**
     * @param string|null $guaranteeIndicator
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setGuaranteeIndicator(?string $guaranteeIndicator
    ): PaymentProviderFinalizeResponse {
        $this->guaranteeIndicator = $guaranteeIndicator;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionStatus(): ?string
    {
        return $this->transactionStatus;
    }

    /**
     * @param string|null $transactionStatus
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setTransactionStatus(?string $transactionStatus
    ): PaymentProviderFinalizeResponse {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPanEntryMode(): ?string
    {
        return $this->panEntryMode;
    }

    /**
     * @param string|null $panEntryMode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setPanEntryMode(?string $panEntryMode
    ): PaymentProviderFinalizeResponse {
        $this->panEntryMode = $panEntryMode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @param string|null $paymentMeanBrand
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): PaymentProviderFinalizeResponse {
        $this->paymentMeanBrand = $paymentMeanBrand;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @param string|null $maskedPan
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setMaskedPan(?string $maskedPan
    ): PaymentProviderFinalizeResponse {
        $this->maskedPan = $maskedPan;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    /**
     * @param string|null $cardExpiryDate
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCardExpiryDate(?string $cardExpiryDate
    ): PaymentProviderFinalizeResponse {
        $this->cardExpiryDate = $cardExpiryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardCSCResultCode(): ?string
    {
        return $this->cardCSCResultCode;
    }

    /**
     * @param string|null $cardCSCResultCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCardCSCResultCode(?string $cardCSCResultCode
    ): PaymentProviderFinalizeResponse {
        $this->cardCSCResultCode = $cardCSCResultCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    /**
     * @param string|null $walletType
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setWalletType(?string $walletType
    ): PaymentProviderFinalizeResponse {
        $this->walletType = $walletType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionDateTime(): ?string
    {
        return $this->transactionDateTime;
    }

    /**
     * @param string|null $transactionDateTime
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): PaymentProviderFinalizeResponse {
        $this->transactionDateTime = $transactionDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @param string|null $holderAuthentMethod
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setHolderAuthentMethod(?string $holderAuthentMethod
    ): PaymentProviderFinalizeResponse {
        $this->holderAuthentMethod = $holderAuthentMethod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    /**
     * @param string|null $holderAuthentStatus
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus
    ): PaymentProviderFinalizeResponse {
        $this->holderAuthentStatus = $holderAuthentStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @param string|null $holderAuthentProgram
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setHolderAuthentProgram(?string $holderAuthentProgram
    ): PaymentProviderFinalizeResponse {
        $this->holderAuthentProgram = $holderAuthentProgram;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    /**
     * @param string|null $scoreColor
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setScoreColor(?string $scoreColor
    ): PaymentProviderFinalizeResponse {
        $this->scoreColor = $scoreColor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreInfo(): ?string
    {
        return $this->scoreInfo;
    }

    /**
     * @param string|null $scoreInfo
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setScoreInfo(?string $scoreInfo
    ): PaymentProviderFinalizeResponse {
        $this->scoreInfo = $scoreInfo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    /**
     * @param string|null $scoreProfile
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setScoreProfile(?string $scoreProfile
    ): PaymentProviderFinalizeResponse {
        $this->scoreProfile = $scoreProfile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    /**
     * @param string|null $scoreThreshold
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): PaymentProviderFinalizeResponse {
        $this->scoreThreshold = $scoreThreshold;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    /**
     * @param string|null $scoreValue
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setScoreValue(?string $scoreValue
    ): PaymentProviderFinalizeResponse {
        $this->scoreValue = $scoreValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    /**
     * @param string|null $complementaryCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): PaymentProviderFinalizeResponse {
        $this->complementaryCode = $complementaryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplementaryInfo(): ?string
    {
        return $this->complementaryInfo;
    }

    /**
     * @param string|null $complementaryInfo
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setComplementaryInfo(?string $complementaryInfo
    ): PaymentProviderFinalizeResponse {
        $this->complementaryInfo = $complementaryInfo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @param string|null $responseCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setResponseCode(?string $responseCode
    ): PaymentProviderFinalizeResponse {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerWalletInformation(): ?string
    {
        return $this->issuerWalletInformation;
    }

    /**
     * @param string|null $issuerWalletInformation
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setIssuerWalletInformation(?string $issuerWalletInformation
    ): PaymentProviderFinalizeResponse {
        $this->issuerWalletInformation = $issuerWalletInformation;

        return $this;
    }

    /**
     * @return S10TransactionReference|null
     */
    public function getS10TransactionReference(): ?S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    /**
     * @param S10TransactionReference|null $s10TransactionReference
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setS10TransactionReference(?S10TransactionReference $s10TransactionReference
    ): PaymentProviderFinalizeResponse {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string|null $orderId
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setOrderId(?string $orderId
    ): PaymentProviderFinalizeResponse {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    /**
     * @param string|null $acquirerResponseMessage
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage
    ): PaymentProviderFinalizeResponse {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

        return $this;
    }

    /**
     * @return CardData|null
     */
    public function getCardData(): ?CardData
    {
        return $this->cardData;
    }

    /**
     * @param CardData|null $cardData
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setCardData(?CardData $cardData
    ): PaymentProviderFinalizeResponse {
        $this->cardData = $cardData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    /**
     * @param string|null $acquirerNativeResponseCode
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAcquirerNativeResponseCode(
        ?string $acquirerNativeResponseCode
    ): PaymentProviderFinalizeResponse {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    /**
     * @param string|null $acquirerResponseIdentifier
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setAcquirerResponseIdentifier(
        ?string $acquirerResponseIdentifier
    ): PaymentProviderFinalizeResponse {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeal(): ?string
    {
        return $this->seal;
    }

    /**
     * @param string|null $seal
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setSeal(?string $seal): PaymentProviderFinalizeResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    /**
     * @param string|null $preAuthorisationProfile
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): PaymentProviderFinalizeResponse {
        $this->preAuthorisationProfile = $preAuthorisationProfile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    /**
     * @param string|null $preAuthorisationProfileValue
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): PaymentProviderFinalizeResponse {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationRuleResultList(): ?string
    {
        return $this->preAuthorisationRuleResultList;
    }

    /**
     * @param string|null $preAuthorisationRuleResultList
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?string $preAuthorisationRuleResultList
    ): PaymentProviderFinalizeResponse {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionPlatform(): ?string
    {
        return $this->transactionPlatform;
    }

    /**
     * @param string|null $transactionPlatform
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setTransactionPlatform(?string $transactionPlatform
    ): PaymentProviderFinalizeResponse {
        $this->transactionPlatform = $transactionPlatform;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    /**
     * @param string|null $errorFieldName
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): PaymentProviderFinalizeResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerWalletId(): ?string
    {
        return $this->issuerWalletId;
    }

    /**
     * @param string|null $issuerWalletId
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setIssuerWalletId(?string $issuerWalletId
    ): PaymentProviderFinalizeResponse {
        $this->issuerWalletId = $issuerWalletId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntermediateServiceProviderOperationId(): ?string
    {
        return $this->intermediateServiceProviderOperationId;
    }

    /**
     * @param string|null $intermediateServiceProviderOperationId
     *
     * @return PaymentProviderFinalizeResponse
     */
    public function setIntermediateServiceProviderOperationId(
        ?string $intermediateServiceProviderOperationId
    ): PaymentProviderFinalizeResponse {
        $this->intermediateServiceProviderOperationId = $intermediateServiceProviderOperationId;

        return $this;
    }
    
}
