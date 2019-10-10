<?php


namespace Worldline\Sips\Office\SipsMessages\Diagnostic;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetTransactionDataResponse
 * @package Worldline\Sips\Office\SipsMessages\Diagnostic
 */
class GetTransactionDataResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $automaticResponseStatus;
    
    /**
     * @var null|string
     */
    protected $authorisationId;
    
    /**
     * @var null|string
     */
    protected $captureLimitDate;
    
    /**
     * @var null|string
     */
    protected $paymentMeanType;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    protected $currencyCode;
    
    /**
     * @var null|string
     */
    protected $currentAmount;
    
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
    protected $lastOperationDateTime;
    
    /**
     * @var null|string
     */
    protected $lastOperationName;
    
    /**
     * @var null|string
     */
    protected $orderId;
    
    /**
     * @var null|string
     */
    protected $originAmount;
    
    /**
     * @var null|string
     */
    protected $transactionDateTime;
    
    /**
     * @var null|string
     */
    protected $responseCode;
    
    /**
     * @var null|string
     */
    protected $tokenPan;
    
    /**
     * @var null|string
     */
    protected $transactionStatus;
    
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
    protected $merchantId;
    
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
    protected $dccStatus;
    
    /**
     * @var null|string
     */
    protected $remainingAmount;
    
    /**
     * @var null|string
     */
    protected $fromTransactionReference;
    
    /**
     * @var null|string
     */
    protected $maskedPan;
    
    /**
     * @var null|string
     */
    protected $panExpiryDate;
    
    /**
     * @var null|array
     */
    protected $s10TransactionReference;
    
    /**
     * @var null|array
     */
    protected $s10FromTransactionReference;
    
    /**
     * @var null|string
     */
    protected $transactionReference;
    
    /**
     * @var null|array
     */
    protected $cardData;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseMessage;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $complementaryCode;
    
    /**
     * @var null|string
     */
    protected $preAuthenticationColor;
    
    /**
     * @var null|string
     */
    protected $preAuthenticationProfile;
    
    /**
     * @var null|string
     */
    protected $preAuthenticationProfileValue;
    
    /**
     * @var null|string
     */
    protected $preAuthenticationThreshold;
    
    /**
     * @var null|string
     */
    protected $preAuthenticationValue;
    
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
    protected $scoreColor;
    
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
    protected $cardCSCResultCode;
    
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
    protected $getTransDataResponseCode;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;
    
    /**
     * @var null|string
     */
    protected $paymentAttemptNumber;
    
    /**
     * @var null|string
     */
    protected $errorFieldName;

    /**
     * @return string|null
     */
    public function getAutomaticResponseStatus(): ?string
    {
        return $this->automaticResponseStatus;
    }

    /**
     * @param string|null $automaticResponseStatus
     *
     * @return GetTransactionDataResponse
     */
    public function setAutomaticResponseStatus(?string $automaticResponseStatus
    ): GetTransactionDataResponse {
        $this->automaticResponseStatus = $automaticResponseStatus;

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
     * @return GetTransactionDataResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): GetTransactionDataResponse {
        $this->authorisationId = $authorisationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    /**
     * @param string|null $captureLimitDate
     *
     * @return GetTransactionDataResponse
     */
    public function setCaptureLimitDate(?string $captureLimitDate
    ): GetTransactionDataResponse {
        $this->captureLimitDate = $captureLimitDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanType(): ?string
    {
        return $this->paymentMeanType;
    }

    /**
     * @param string|null $paymentMeanType
     *
     * @return GetTransactionDataResponse
     */
    public function setPaymentMeanType(?string $paymentMeanType
    ): GetTransactionDataResponse {
        $this->paymentMeanType = $paymentMeanType;

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
     * @return GetTransactionDataResponse
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): GetTransactionDataResponse {
        $this->paymentMeanBrand = $paymentMeanBrand;

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
     * @return GetTransactionDataResponse
     */
    public function setCurrencyCode(?string $currencyCode
    ): GetTransactionDataResponse {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrentAmount(): ?string
    {
        return $this->currentAmount;
    }

    /**
     * @param string|null $currentAmount
     *
     * @return GetTransactionDataResponse
     */
    public function setCurrentAmount(?string $currentAmount
    ): GetTransactionDataResponse {
        $this->currentAmount = $currentAmount;

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
     * @return GetTransactionDataResponse
     */
    public function setCustomerId(?string $customerId
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): GetTransactionDataResponse {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastOperationDateTime(): ?string
    {
        return $this->lastOperationDateTime;
    }

    /**
     * @param string|null $lastOperationDateTime
     *
     * @return GetTransactionDataResponse
     */
    public function setLastOperationDateTime(?string $lastOperationDateTime
    ): GetTransactionDataResponse {
        $this->lastOperationDateTime = $lastOperationDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastOperationName(): ?string
    {
        return $this->lastOperationName;
    }

    /**
     * @param string|null $lastOperationName
     *
     * @return GetTransactionDataResponse
     */
    public function setLastOperationName(?string $lastOperationName
    ): GetTransactionDataResponse {
        $this->lastOperationName = $lastOperationName;

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
     * @return GetTransactionDataResponse
     */
    public function setOrderId(?string $orderId): GetTransactionDataResponse
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginAmount(): ?string
    {
        return $this->originAmount;
    }

    /**
     * @param string|null $originAmount
     *
     * @return GetTransactionDataResponse
     */
    public function setOriginAmount(?string $originAmount
    ): GetTransactionDataResponse {
        $this->originAmount = $originAmount;

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
     * @return GetTransactionDataResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): GetTransactionDataResponse {
        $this->transactionDateTime = $transactionDateTime;

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
     * @return GetTransactionDataResponse
     */
    public function setResponseCode(?string $responseCode
    ): GetTransactionDataResponse {
        $this->responseCode = $responseCode;

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
     * @return GetTransactionDataResponse
     */
    public function setTokenPan(?string $tokenPan): GetTransactionDataResponse
    {
        $this->tokenPan = $tokenPan;

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
     * @return GetTransactionDataResponse
     */
    public function setTransactionStatus(?string $transactionStatus
    ): GetTransactionDataResponse {
        $this->transactionStatus = $transactionStatus;

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
     * @return GetTransactionDataResponse
     */
    public function setOrderChannel(?string $orderChannel
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setPaymentPattern(?string $paymentPattern
    ): GetTransactionDataResponse {
        $this->paymentPattern = $paymentPattern;

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
     * @return GetTransactionDataResponse
     */
    public function setMerchantId(?string $merchantId
    ): GetTransactionDataResponse {
        $this->merchantId = $merchantId;

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
     * @return GetTransactionDataResponse
     */
    public function setPanEntryMode(?string $panEntryMode
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setWalletType(?string $walletType
    ): GetTransactionDataResponse {
        $this->walletType = $walletType;

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
     * @return GetTransactionDataResponse
     */
    public function setHolderAuthentMethod(?string $holderAuthentMethod
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setHolderAuthentProgram(?string $holderAuthentProgram
    ): GetTransactionDataResponse {
        $this->holderAuthentProgram = $holderAuthentProgram;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccStatus(): ?string
    {
        return $this->dccStatus;
    }

    /**
     * @param string|null $dccStatus
     *
     * @return GetTransactionDataResponse
     */
    public function setDccStatus(?string $dccStatus): GetTransactionDataResponse
    {
        $this->dccStatus = $dccStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRemainingAmount(): ?string
    {
        return $this->remainingAmount;
    }

    /**
     * @param string|null $remainingAmount
     *
     * @return GetTransactionDataResponse
     */
    public function setRemainingAmount(?string $remainingAmount
    ): GetTransactionDataResponse {
        $this->remainingAmount = $remainingAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromTransactionReference(): ?string
    {
        return $this->fromTransactionReference;
    }

    /**
     * @param string|null $fromTransactionReference
     *
     * @return GetTransactionDataResponse
     */
    public function setFromTransactionReference(
        ?string $fromTransactionReference
    ): GetTransactionDataResponse {
        $this->fromTransactionReference = $fromTransactionReference;

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
     * @return GetTransactionDataResponse
     */
    public function setMaskedPan(?string $maskedPan): GetTransactionDataResponse
    {
        $this->maskedPan = $maskedPan;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    /**
     * @param string|null $panExpiryDate
     *
     * @return GetTransactionDataResponse
     */
    public function setPanExpiryDate(?string $panExpiryDate
    ): GetTransactionDataResponse {
        $this->panExpiryDate = $panExpiryDate;

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
     * @return GetTransactionDataResponse
     */
    public function setS10TransactionReference(?array $s10TransactionReference
    ): GetTransactionDataResponse {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getS10FromTransactionReference(): ?array
    {
        return $this->s10FromTransactionReference;
    }

    /**
     * @param array|null $s10FromTransactionReference
     *
     * @return GetTransactionDataResponse
     */
    public function setS10FromTransactionReference(
        ?array $s10FromTransactionReference
    ): GetTransactionDataResponse {
        $this->s10FromTransactionReference = $s10FromTransactionReference;

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
     * @return GetTransactionDataResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): GetTransactionDataResponse {
        $this->transactionReference = $transactionReference;

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
     * @return GetTransactionDataResponse
     */
    public function setCardData(?array $cardData): GetTransactionDataResponse
    {
        $this->cardData = $cardData;

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
     * @return GetTransactionDataResponse
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage
    ): GetTransactionDataResponse {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

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
     * @return GetTransactionDataResponse
     */
    public function setSeal(?string $seal): GetTransactionDataResponse
    {
        $this->seal = $seal;

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
     * @return GetTransactionDataResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): GetTransactionDataResponse {
        $this->complementaryCode = $complementaryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    /**
     * @param string|null $preAuthenticationColor
     *
     * @return GetTransactionDataResponse
     */
    public function setPreAuthenticationColor(?string $preAuthenticationColor
    ): GetTransactionDataResponse {
        $this->preAuthenticationColor = $preAuthenticationColor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    /**
     * @param string|null $preAuthenticationProfile
     *
     * @return GetTransactionDataResponse
     */
    public function setPreAuthenticationProfile(
        ?string $preAuthenticationProfile
    ): GetTransactionDataResponse {
        $this->preAuthenticationProfile = $preAuthenticationProfile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    /**
     * @param string|null $preAuthenticationProfileValue
     *
     * @return GetTransactionDataResponse
     */
    public function setPreAuthenticationProfileValue(
        ?string $preAuthenticationProfileValue
    ): GetTransactionDataResponse {
        $this->preAuthenticationProfileValue = $preAuthenticationProfileValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationThreshold(): ?string
    {
        return $this->preAuthenticationThreshold;
    }

    /**
     * @param string|null $preAuthenticationThreshold
     *
     * @return GetTransactionDataResponse
     */
    public function setPreAuthenticationThreshold(
        ?string $preAuthenticationThreshold
    ): GetTransactionDataResponse {
        $this->preAuthenticationThreshold = $preAuthenticationThreshold;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    /**
     * @param string|null $preAuthenticationValue
     *
     * @return GetTransactionDataResponse
     */
    public function setPreAuthenticationValue(?string $preAuthenticationValue
    ): GetTransactionDataResponse {
        $this->preAuthenticationValue = $preAuthenticationValue;

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
     * @return GetTransactionDataResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): GetTransactionDataResponse {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;

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
     * @return GetTransactionDataResponse
     */
    public function setScoreColor(?string $scoreColor
    ): GetTransactionDataResponse {
        $this->scoreColor = $scoreColor;

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
     * @return GetTransactionDataResponse
     */
    public function setScoreProfile(?string $scoreProfile
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setScoreValue(?string $scoreValue
    ): GetTransactionDataResponse {
        $this->scoreValue = $scoreValue;

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
     * @return GetTransactionDataResponse
     */
    public function setCardCSCResultCode(?string $cardCSCResultCode
    ): GetTransactionDataResponse {
        $this->cardCSCResultCode = $cardCSCResultCode;

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
     * @return GetTransactionDataResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): GetTransactionDataResponse {
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
     * @return GetTransactionDataResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): GetTransactionDataResponse {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGetTransDataResponseCode(): ?string
    {
        return $this->getTransDataResponseCode;
    }

    /**
     * @param string|null $getTransDataResponseCode
     *
     * @return GetTransactionDataResponse
     */
    public function setGetTransDataResponseCode(
        ?string $getTransDataResponseCode
    ): GetTransactionDataResponse {
        $this->getTransDataResponseCode = $getTransDataResponseCode;

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
     * @return GetTransactionDataResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): GetTransactionDataResponse {
        $this->acquirerResponseCode = $acquirerResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentAttemptNumber(): ?string
    {
        return $this->paymentAttemptNumber;
    }

    /**
     * @param string|null $paymentAttemptNumber
     *
     * @return GetTransactionDataResponse
     */
    public function setPaymentAttemptNumber(?string $paymentAttemptNumber
    ): GetTransactionDataResponse {
        $this->paymentAttemptNumber = $paymentAttemptNumber;

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
     * @return GetTransactionDataResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): GetTransactionDataResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
