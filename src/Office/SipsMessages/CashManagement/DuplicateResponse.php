<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\Fields\CardData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class DuplicateResponse
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class DuplicateResponse extends SipsMessage
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
    private $complementaryCode;
    
    /**
     * @var null|string
     */
    private $complementaryInfo;
    
    /**
     * @var null|string
     */
    private $maskedPan;
    
    /**
     * @var null|string
     */
    private $panExpiryDate;
    
    /**
     * @var null|string
     */
    private $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    private $scoreValue;
    
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
    private $responseCode;
    
    /**
     * @var null|string
     */
    private $transactionDateTime;
    
    /**
     * @var null|S10TransactionReference
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
    private $paymentMeanBrandSelectionStatus;
    
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
    private $transactionPlatform;
    
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
    private $errorFieldName;

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
     * @return DuplicateResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): DuplicateResponse {
        $this->authorisationId = $authorisationId;

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
     * @return DuplicateResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setComplementaryInfo(?string $complementaryInfo
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setMaskedPan(?string $maskedPan): DuplicateResponse
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
     * @return DuplicateResponse
     */
    public function setPanExpiryDate(?string $panExpiryDate): DuplicateResponse
    {
        $this->panExpiryDate = $panExpiryDate;

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
     * @return DuplicateResponse
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): DuplicateResponse {
        $this->paymentMeanBrand = $paymentMeanBrand;

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
     * @return DuplicateResponse
     */
    public function setScoreValue(?string $scoreValue): DuplicateResponse
    {
        $this->scoreValue = $scoreValue;

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
     * @return DuplicateResponse
     */
    public function setScoreColor(?string $scoreColor): DuplicateResponse
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
     * @return DuplicateResponse
     */
    public function setScoreInfo(?string $scoreInfo): DuplicateResponse
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
     * @return DuplicateResponse
     */
    public function setScoreProfile(?string $scoreProfile): DuplicateResponse
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
     * @return DuplicateResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): DuplicateResponse {
        $this->scoreThreshold = $scoreThreshold;

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
     * @return DuplicateResponse
     */
    public function setResponseCode(?string $responseCode): DuplicateResponse
    {
        $this->responseCode = $responseCode;

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
     * @return DuplicateResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): DuplicateResponse {
        $this->transactionDateTime = $transactionDateTime;

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
     * @return DuplicateResponse
     */
    public function setS10TransactionReference(?S10TransactionReference $s10TransactionReference
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setCardData(?CardData $cardData): DuplicateResponse
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
     * @return DuplicateResponse
     */
    public function setSeal(?string $seal): DuplicateResponse
    {
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
     * @return DuplicateResponse
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setTransactionPlatform(?string $transactionPlatform
    ): DuplicateResponse {
        $this->transactionPlatform = $transactionPlatform;

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
     * @return DuplicateResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): DuplicateResponse {
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
     * @return DuplicateResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): DuplicateResponse {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

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
     * @return DuplicateResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): DuplicateResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
