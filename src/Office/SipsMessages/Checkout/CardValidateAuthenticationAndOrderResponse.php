<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardValidateAuthenticationAndOrderResponse
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardValidateAuthenticationAndOrderResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseMessage;
    
    /**
     * @var null|string
     */
    protected $amount;
    
    /**
     * @var null|string
     */
    protected $authorisationId;
    
    /**
     * @var null|string
     */
    protected $avsAddressResponseCode;
    
    /**
     * @var null|string
     */
    protected $avsPostcodeResponseCode;
    
    /**
     * @var null|string
     */
    protected $captureDay;
    
    /**
     * @var null|string
     */
    protected $captureMode;
    
    /**
     * @var null|string
     */
    protected $cardCSCResultCode;
    
    /**
     * @var null|string
     */
    protected $cardExpiryDate;
    
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
    protected $currencyCode;
    
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
    protected $errorFieldName;
    
    /**
     * @var null|string
     */
    protected $holderAuthentMethod;
    
    /**
     * @var null|string
     */
    protected $holderAuthentRelegation;
    
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
    protected $invoiceReference;
    
    /**
     * @var null|string
     */
    protected $guaranteeIndicator;
    
    /**
     * @var null|string
     */
    protected $maskedPan;
    
    /**
     * @var null|string
     */
    protected $merchantTransactionDateTime;
    
    /**
     * @var null|string
     */
    protected $merchantId;
    
    /**
     * @var null|string
     */
    protected $orderChannel;
    
    /**
     * @var null|string
     */
    protected $orderId;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    protected $paymentPattern;
    
    /**
     * @var null|string
     */
    protected $responseCode;
    
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
    protected $holderAuthentResponseCode;
    
    /**
     * @var null|string
     */
    protected $transactionDateTime;
    
    /**
     * @var null|string
     */
    protected $transactionReference;
    
    /**
     * @var null|string
     */
    protected $tokenPan;
    
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
     * @var null|array
     */
    protected $s10TransactionReference;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrandSelectionStatus;
    
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
    protected $acquirerNativeResponseCode;
    
    /**
     * @var null|string
     */
    protected $transactionPlatform;
    
    /**
     * @var null|string
     */
    protected $holderAuthentRelegationCode;
    
    /**
     * @var null|array
     */
    protected $cardData;
    
    /**
     * @var null|string
     */
    protected $authorMessageReference;
    
    /**
     * @var null|string
     */
    protected $authorisationTypeLabel;
    
    /**
     * @var null|string
     */
    protected $acceptanceSystemApplicationId;
    
    /**
     * @var null|string
     */
    protected $panEntryMode;
    
    /**
     * @var null|string
     */
    protected $walletType;
    
    /**
     * @var null|string
     */
    protected $issuerWalletInformation;
    
    /**
     * @var null|string
     */
    protected $intermediateServiceProviderOperationId;
    
    /**
     * @var null|string
     */
    protected $holderAuthentType;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->acquirerResponseCode = $acquirerResponseCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage
    ): CardValidateAuthenticationAndOrderResponse {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string|null $amount
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAmount(?string $amount
    ): CardValidateAuthenticationAndOrderResponse {
        $this->amount = $amount;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): CardValidateAuthenticationAndOrderResponse {
        $this->authorisationId = $authorisationId;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->avsPostcodeResponseCode = $avsPostcodeResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureDay(): ?string
    {
        return $this->captureDay;
    }

    /**
     * @param string|null $captureDay
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCaptureDay(?string $captureDay
    ): CardValidateAuthenticationAndOrderResponse {
        $this->captureDay = $captureDay;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCaptureMode(?string $captureMode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->captureMode = $captureMode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCardCSCResultCode(?string $cardCSCResultCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->cardCSCResultCode = $cardCSCResultCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCardExpiryDate(?string $cardExpiryDate
    ): CardValidateAuthenticationAndOrderResponse {
        $this->cardExpiryDate = $cardExpiryDate;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setComplementaryInfo(?string $complementaryInfo
    ): CardValidateAuthenticationAndOrderResponse {
        $this->complementaryInfo = $complementaryInfo;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCurrencyCode(?string $currencyCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->currencyCode = $currencyCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCustomerId(?string $customerId
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): CardValidateAuthenticationAndOrderResponse {
        $this->customerIpAddress = $customerIpAddress;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): CardValidateAuthenticationAndOrderResponse {
        $this->errorFieldName = $errorFieldName;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentMethod(?string $holderAuthentMethod
    ): CardValidateAuthenticationAndOrderResponse {
        $this->holderAuthentMethod = $holderAuthentMethod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentRelegation(): ?string
    {
        return $this->holderAuthentRelegation;
    }

    /**
     * @param string|null $holderAuthentRelegation
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentRelegation(?string $holderAuthentRelegation
    ): CardValidateAuthenticationAndOrderResponse {
        $this->holderAuthentRelegation = $holderAuthentRelegation;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentProgram(?string $holderAuthentProgram
    ): CardValidateAuthenticationAndOrderResponse {
        $this->holderAuthentProgram = $holderAuthentProgram;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setInvoiceReference(?string $invoiceReference
    ): CardValidateAuthenticationAndOrderResponse {
        $this->invoiceReference = $invoiceReference;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setGuaranteeIndicator(?string $guaranteeIndicator
    ): CardValidateAuthenticationAndOrderResponse {
        $this->guaranteeIndicator = $guaranteeIndicator;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setMaskedPan(?string $maskedPan
    ): CardValidateAuthenticationAndOrderResponse {
        $this->maskedPan = $maskedPan;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): CardValidateAuthenticationAndOrderResponse {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setMerchantId(?string $merchantId
    ): CardValidateAuthenticationAndOrderResponse {
        $this->merchantId = $merchantId;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setOrderChannel(?string $orderChannel
    ): CardValidateAuthenticationAndOrderResponse {
        $this->orderChannel = $orderChannel;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setOrderId(?string $orderId
    ): CardValidateAuthenticationAndOrderResponse {
        $this->orderId = $orderId;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): CardValidateAuthenticationAndOrderResponse {
        $this->paymentMeanBrand = $paymentMeanBrand;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPaymentPattern(?string $paymentPattern
    ): CardValidateAuthenticationAndOrderResponse {
        $this->paymentPattern = $paymentPattern;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setResponseCode(?string $responseCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->responseCode = $responseCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setReturnContext(?string $returnContext
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setStatementReference(?string $statementReference
    ): CardValidateAuthenticationAndOrderResponse {
        $this->statementReference = $statementReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentResponseCode(): ?string
    {
        return $this->holderAuthentResponseCode;
    }

    /**
     * @param string|null $holderAuthentResponseCode
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentResponseCode(
        ?string $holderAuthentResponseCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->holderAuthentResponseCode = $holderAuthentResponseCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): CardValidateAuthenticationAndOrderResponse {
        $this->transactionDateTime = $transactionDateTime;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): CardValidateAuthenticationAndOrderResponse {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenPan(): ?string
    {
        return $this->tokenPan;
    }

    /**
     * @param string|null $tokenPan
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setTokenPan(?string $tokenPan
    ): CardValidateAuthenticationAndOrderResponse {
        $this->tokenPan = $tokenPan;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setScoreColor(?string $scoreColor
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setScoreInfo(?string $scoreInfo
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setScoreProfile(?string $scoreProfile
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setScoreValue(?string $scoreValue
    ): CardValidateAuthenticationAndOrderResponse {
        $this->scoreValue = $scoreValue;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getS10TransactionReference(): ?array
    {
        return $this->s10TransactionReference;
    }

    /**
     * @param array|null $s10TransactionReference
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setS10TransactionReference(?array $s10TransactionReference
    ): CardValidateAuthenticationAndOrderResponse {
        $this->s10TransactionReference = $s10TransactionReference;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setSeal(?string $seal
    ): CardValidateAuthenticationAndOrderResponse {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @param string|null $paymentMeanBrandSelectionStatus
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): CardValidateAuthenticationAndOrderResponse {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): CardValidateAuthenticationAndOrderResponse {
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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?string $preAuthorisationRuleResultList
    ): CardValidateAuthenticationAndOrderResponse {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAcquirerNativeResponseCode(
        ?string $acquirerNativeResponseCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setTransactionPlatform(?string $transactionPlatform
    ): CardValidateAuthenticationAndOrderResponse {
        $this->transactionPlatform = $transactionPlatform;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentRelegationCode(): ?string
    {
        return $this->holderAuthentRelegationCode;
    }

    /**
     * @param string|null $holderAuthentRelegationCode
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentRelegationCode(
        ?string $holderAuthentRelegationCode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->holderAuthentRelegationCode = $holderAuthentRelegationCode;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getCardData(): ?array
    {
        return $this->cardData;
    }

    /**
     * @param array|null $cardData
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setCardData(?array $cardData
    ): CardValidateAuthenticationAndOrderResponse {
        $this->cardData = $cardData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorMessageReference(): ?string
    {
        return $this->authorMessageReference;
    }

    /**
     * @param string|null $authorMessageReference
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAuthorMessageReference(?string $authorMessageReference
    ): CardValidateAuthenticationAndOrderResponse {
        $this->authorMessageReference = $authorMessageReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationTypeLabel(): ?string
    {
        return $this->authorisationTypeLabel;
    }

    /**
     * @param string|null $authorisationTypeLabel
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAuthorisationTypeLabel(?string $authorisationTypeLabel
    ): CardValidateAuthenticationAndOrderResponse {
        $this->authorisationTypeLabel = $authorisationTypeLabel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcceptanceSystemApplicationId(): ?string
    {
        return $this->acceptanceSystemApplicationId;
    }

    /**
     * @param string|null $acceptanceSystemApplicationId
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setAcceptanceSystemApplicationId(
        ?string $acceptanceSystemApplicationId
    ): CardValidateAuthenticationAndOrderResponse {
        $this->acceptanceSystemApplicationId = $acceptanceSystemApplicationId;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setPanEntryMode(?string $panEntryMode
    ): CardValidateAuthenticationAndOrderResponse {
        $this->panEntryMode = $panEntryMode;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setWalletType(?string $walletType
    ): CardValidateAuthenticationAndOrderResponse {
        $this->walletType = $walletType;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setIssuerWalletInformation(?string $issuerWalletInformation
    ): CardValidateAuthenticationAndOrderResponse {
        $this->issuerWalletInformation = $issuerWalletInformation;

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
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setIntermediateServiceProviderOperationId(
        ?string $intermediateServiceProviderOperationId
    ): CardValidateAuthenticationAndOrderResponse {
        $this->intermediateServiceProviderOperationId = $intermediateServiceProviderOperationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentType(): ?string
    {
        return $this->holderAuthentType;
    }

    /**
     * @param string|null $holderAuthentType
     *
     * @return CardValidateAuthenticationAndOrderResponse
     */
    public function setHolderAuthentType(?string $holderAuthentType
    ): CardValidateAuthenticationAndOrderResponse {
        $this->holderAuthentType = $holderAuthentType;

        return $this;
    }
    
}
