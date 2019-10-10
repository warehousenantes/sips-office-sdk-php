<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class WalletOrderResponse
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class WalletOrderResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;

    /**
     * @var null|string
     */
    protected $authorisationId;

    /**
     * @var null|string
     */
    protected $cardScheme;

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
    protected $maskedPan;

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
    protected $transactionDateTime;

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
    protected $transactionReference;

    /**
     * @var null|array
     */
    protected $cardData;

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
     * @var null|array
     */
    protected $preAuthorisationRuleResultList;

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
    protected $transactionPlatform;

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
    protected $authorMessageReference;

    /**
     * @var null|string
     */
    protected $authorisationTypeLabel;

    /**
     * @var null|string
     */
    protected $acquirerResponseMessage;

    /**
     * @var null|string
     */
    protected $recurringResponseCode;

    /**
     * @var null|string
     */
    protected $holderAuthentRelegationCode;

    /**
     * @var null|string
     */
    protected $holderAuthentStatus;

    /**
     * @var null|string
     */
    protected $guaranteeIndicator;

    /**
     * @var null|string
     */
    protected $acceptanceSystemApplicationId;

    /**
     * @var null|string
     */
    protected $errorFieldName;

    /**
     * @var null|string
     */
    protected $intermediateServiceProviderOperationId;

    /**
     * @var null|string
     */
    protected $orderId;

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
     * @return WalletOrderResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): WalletOrderResponse {
        $this->acquirerResponseCode = $acquirerResponseCode;

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
     * @return WalletOrderResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): WalletOrderResponse {
        $this->authorisationId = $authorisationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardScheme(): ?string
    {
        return $this->cardScheme;
    }

    /**
     * @param string|null $cardScheme
     *
     * @return WalletOrderResponse
     */
    public function setCardScheme(?string $cardScheme): WalletOrderResponse
    {
        $this->cardScheme = $cardScheme;

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
     * @return WalletOrderResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setComplementaryInfo(?string $complementaryInfo
    ): WalletOrderResponse {
        $this->complementaryInfo = $complementaryInfo;

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
     * @return WalletOrderResponse
     */
    public function setMaskedPan(?string $maskedPan): WalletOrderResponse
    {
        $this->maskedPan = $maskedPan;

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
     * @return WalletOrderResponse
     */
    public function setResponseCode(?string $responseCode): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setReturnContext(?string $returnContext
    ): WalletOrderResponse {
        $this->returnContext = $returnContext;

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
     * @return WalletOrderResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): WalletOrderResponse {
        $this->transactionDateTime = $transactionDateTime;

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
     * @return WalletOrderResponse
     */
    public function setTokenPan(?string $tokenPan): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setScoreColor(?string $scoreColor): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setScoreInfo(?string $scoreInfo): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setScoreProfile(?string $scoreProfile): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setScoreValue(?string $scoreValue): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setS10TransactionReference(?array $s10TransactionReference
    ): WalletOrderResponse {
        $this->s10TransactionReference = $s10TransactionReference;

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
     * @return WalletOrderResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setCardData(?array $cardData): WalletOrderResponse
    {
        $this->cardData = $cardData;

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
     * @return WalletOrderResponse
     */
    public function setSeal(?string $seal): WalletOrderResponse
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
     * @return WalletOrderResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): WalletOrderResponse {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPreAuthorisationRuleResultList(): ?array
    {
        return $this->preAuthorisationRuleResultList;
    }

    /**
     * @param array|null $preAuthorisationRuleResultList
     *
     * @return WalletOrderResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): WalletOrderResponse {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

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
     * @return WalletOrderResponse
     */
    public function setCaptureDay(?string $captureDay): WalletOrderResponse
    {
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
     * @return WalletOrderResponse
     */
    public function setCaptureMode(?string $captureMode): WalletOrderResponse
    {
        $this->captureMode = $captureMode;

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
     * @return WalletOrderResponse
     */
    public function setTransactionPlatform(?string $transactionPlatform
    ): WalletOrderResponse {
        $this->transactionPlatform = $transactionPlatform;

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
     * @return WalletOrderResponse
     */
    public function setCardCSCResultCode(?string $cardCSCResultCode
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): WalletOrderResponse {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

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
     * @return WalletOrderResponse
     */
    public function setAuthorMessageReference(?string $authorMessageReference
    ): WalletOrderResponse {
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
     * @return WalletOrderResponse
     */
    public function setAuthorisationTypeLabel(?string $authorisationTypeLabel
    ): WalletOrderResponse {
        $this->authorisationTypeLabel = $authorisationTypeLabel;

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
     * @return WalletOrderResponse
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage
    ): WalletOrderResponse {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecurringResponseCode(): ?string
    {
        return $this->recurringResponseCode;
    }

    /**
     * @param string|null $recurringResponseCode
     *
     * @return WalletOrderResponse
     */
    public function setRecurringResponseCode(?string $recurringResponseCode
    ): WalletOrderResponse {
        $this->recurringResponseCode = $recurringResponseCode;

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
     * @return WalletOrderResponse
     */
    public function setHolderAuthentRelegationCode(
        ?string $holderAuthentRelegationCode
    ): WalletOrderResponse {
        $this->holderAuthentRelegationCode = $holderAuthentRelegationCode;

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
     * @return WalletOrderResponse
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus
    ): WalletOrderResponse {
        $this->holderAuthentStatus = $holderAuthentStatus;

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
     * @return WalletOrderResponse
     */
    public function setGuaranteeIndicator(?string $guaranteeIndicator
    ): WalletOrderResponse {
        $this->guaranteeIndicator = $guaranteeIndicator;

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
     * @return WalletOrderResponse
     */
    public function setAcceptanceSystemApplicationId(
        ?string $acceptanceSystemApplicationId
    ): WalletOrderResponse {
        $this->acceptanceSystemApplicationId = $acceptanceSystemApplicationId;

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
     * @return WalletOrderResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): WalletOrderResponse {
        $this->errorFieldName = $errorFieldName;

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
     * @return WalletOrderResponse
     */
    public function setIntermediateServiceProviderOperationId(
        ?string $intermediateServiceProviderOperationId
    ): WalletOrderResponse {
        $this->intermediateServiceProviderOperationId = $intermediateServiceProviderOperationId;

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
     * @return WalletOrderResponse
     */
    public function setOrderId(?string $orderId): WalletOrderResponse
    {
        $this->orderId = $orderId;

        return $this;
    }
    
}
