<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\CardData;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardOrderResponse
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardOrderResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $acquirerResponseCode;
    
    /**
     * @var null|string
     */
    private $authorisationId;
    
    /**
     * @var null|string
     */
    private $cardScheme;
    
    /**
     * @var null|string
     */
    private $complementaryCode;
    
    /**
     * @var null|string
     */
    private $complementaryInfo;
    
    /**
     * @var null|string
     */
    private $guaranteeIndicator;
    
    /**
     * @var null|string
     */
    private $holderAuthentRelegationCode;
    
    /**
     * @var null|string
     */
    private $holderAuthentStatus;
    
    /**
     * @var null|string
     */
    private $maskedPan;
    
    /**
     * @var null|string
     */
    private $responseCode;
    
    /**
     * @var null|string
     */
    private $returnContext;
    
    /**
     * @var null|string
     */
    private $scoreColor;
    
    /**
     * @var null|string
     */
    private $scoreInfo;
    
    /**
     * @var null|string
     */
    private $scoreProfile;
    
    /**
     * @var null|string
     */
    private $scoreThreshold;
    
    /**
     * @var null|string
     */
    private $scoreValue;
    
    /**
     * @var null|string
     */
    private $transactionDateTime;
    
    /**
     * @var null|string
     */
    private $tokenPan;
    
    /**
     * @var null|string
     */
    private $cardCSCResultCode;
    
    /**
     * @var null|string
     */
    private $avsPostcodeResponseCode;
    
    /**
     * @var null|string
     */
    private $avsAddressResponseCode;
    
    /**
     * @var null|string
     */
    private $recurringResponseCode;
    
    /**
     * @var null|string
     */
    private $acquirerResponseIdentifier;
    
    /**
     * @var null|string
     */
    private $acquirerResponseMessage;
    
    /**
     * @var null|string
     */
    private $paymentMeanTradingName;
    
    /**
     * @var null|PaymentMeanData
     */
    private $paymentMeanData;
    
    /**
     * @var S10TransactionReference|null
     */
    private $s10TransactionReference;
    
    /**
     * @var null|string
     */
    private $transactionReference;
    
    /**
     * @var null|CardData
     */
    private $cardData;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|string
     */
    private $preAuthorisationProfile;
    
    /**
     * @var null|string
     */
    private $preAuthorisationProfileValue;
    
    /**
     * @var null|array
     */
    private $preAuthorisationRuleResultList;
    
    /**
     * @var null|string
     */
    private $paymentMeanBrandSelectionStatus;
    
    /**
     * @var null|int
     */
    private $captureDay;
    
    /**
     * @var null|string
     */
    private $captureMode;
    
    /**
     * @var null|string
     */
    private $transactionPlatform;
    
    /**
     * @var null|string
     */
    private $authorMessageReference;
    
    /**
     * @var null|string
     */
    private $authorisationTypeLabel;
    
    /**
     * @var null|string
     */
    private $acceptanceSystemApplicationId;
    
    /**
     * @var null|string
     */
    private $errorFieldName;
    
    /**
     * @var null|string
     */
    private $panEntryMode;
    
    /**
     * @var null|string
     */
    private $walletType;
    
    /**
     * @var null|string
     */
    private $issuerWalletInformation;
    
    /**
     * @var null|string
     */
    private $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    private $intermediateServiceProviderOperationId;
    
    /**
     * @var null|string
     */
    private $orderId;

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
     * @return CardOrderResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setCardScheme(?string $cardScheme): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setComplementaryInfo(?string $complementaryInfo
    ): CardOrderResponse {
        $this->complementaryInfo = $complementaryInfo;

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
     * @return CardOrderResponse
     */
    public function setGuaranteeIndicator(?string $guaranteeIndicator
    ): CardOrderResponse {
        $this->guaranteeIndicator = $guaranteeIndicator;

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
     * @return CardOrderResponse
     */
    public function setHolderAuthentRelegationCode(
        ?string $holderAuthentRelegationCode
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus
    ): CardOrderResponse {
        $this->holderAuthentStatus = $holderAuthentStatus;

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
     * @return CardOrderResponse
     */
    public function setMaskedPan(?string $maskedPan): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setResponseCode(?string $responseCode): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setReturnContext(?string $returnContext): CardOrderResponse
    {
        $this->returnContext = $returnContext;

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
     * @return CardOrderResponse
     */
    public function setScoreColor(?string $scoreColor): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setScoreInfo(?string $scoreInfo): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setScoreProfile(?string $scoreProfile): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setScoreValue(?string $scoreValue): CardOrderResponse
    {
        $this->scoreValue = $scoreValue;

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
     * @return CardOrderResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setTokenPan(?string $tokenPan): CardOrderResponse
    {
        $this->tokenPan = $tokenPan;

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
     * @return CardOrderResponse
     */
    public function setCardCSCResultCode(?string $cardCSCResultCode
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): CardOrderResponse {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

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
     * @return CardOrderResponse
     */
    public function setRecurringResponseCode(?string $recurringResponseCode
    ): CardOrderResponse {
        $this->recurringResponseCode = $recurringResponseCode;

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
     * @return CardOrderResponse
     */
    public function setAcquirerResponseIdentifier(
        ?string $acquirerResponseIdentifier
    ): CardOrderResponse {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;

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
     * @return CardOrderResponse
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage
    ): CardOrderResponse {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanTradingName(): ?string
    {
        return $this->paymentMeanTradingName;
    }

    /**
     * @param string|null $paymentMeanTradingName
     *
     * @return CardOrderResponse
     */
    public function setPaymentMeanTradingName(?string $paymentMeanTradingName
    ): CardOrderResponse {
        $this->paymentMeanTradingName = $paymentMeanTradingName;

        return $this;
    }

    /**
     * @return PaymentMeanData|null
     */
    public function getPaymentMeanData(): ?PaymentMeanData
    {
        return $this->paymentMeanData;
    }

    /**
     * @param PaymentMeanData|null $paymentMeanData
     *
     * @return CardOrderResponse
     */
    public function setPaymentMeanData(?PaymentMeanData $paymentMeanData
    ): CardOrderResponse {
        $this->paymentMeanData = $paymentMeanData;

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
     * @return CardOrderResponse
     */
    public function setS10TransactionReference(?S10TransactionReference $s10TransactionReference
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): CardOrderResponse {
        $this->transactionReference = $transactionReference;

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
     * @return CardOrderResponse
     */
    public function setCardData(?CardData $cardData): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setSeal(?string $seal): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): CardOrderResponse {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

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
     * @return CardOrderResponse
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): CardOrderResponse {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

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
     * @return CardOrderResponse
     */
    public function setCaptureDay(?int $captureDay): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setCaptureMode(?string $captureMode): CardOrderResponse
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
     * @return CardOrderResponse
     */
    public function setTransactionPlatform(?string $transactionPlatform
    ): CardOrderResponse {
        $this->transactionPlatform = $transactionPlatform;

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
     * @return CardOrderResponse
     */
    public function setAuthorMessageReference(?string $authorMessageReference
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setAuthorisationTypeLabel(?string $authorisationTypeLabel
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setAcceptanceSystemApplicationId(
        ?string $acceptanceSystemApplicationId
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): CardOrderResponse {
        $this->errorFieldName = $errorFieldName;

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
     * @return CardOrderResponse
     */
    public function setPanEntryMode(?string $panEntryMode): CardOrderResponse
    {
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
     * @return CardOrderResponse
     */
    public function setWalletType(?string $walletType): CardOrderResponse
    {
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
     * @return CardOrderResponse
     */
    public function setIssuerWalletInformation(?string $issuerWalletInformation
    ): CardOrderResponse {
        $this->issuerWalletInformation = $issuerWalletInformation;

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
     * @return CardOrderResponse
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): CardOrderResponse {
        $this->paymentMeanBrand = $paymentMeanBrand;

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
     * @return CardOrderResponse
     */
    public function setIntermediateServiceProviderOperationId(
        ?string $intermediateServiceProviderOperationId
    ): CardOrderResponse {
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
     * @return CardOrderResponse
     */
    public function setOrderId(?string $orderId): CardOrderResponse
    {
        $this->orderId = $orderId;

        return $this;
    }
    
}
