<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class ValidateResponse
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class ValidateResponse extends SipsMessage
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
    protected $panExpiryDate;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    protected $scoreValue;
    
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
    protected $responseCode;
    
    /**
     * @var null|string
     */
    protected $transactionDateTime;
    
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
     * @var null|array
     */
    protected $preAuthorisationRuleResultList;
    
    /**
     * @var null|string
     */
    protected $transactionPlatform;
    
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
    protected $errorFieldName;

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
     * @return ValidateResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setAuthorisationId(?string $authorisationId
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setComplementaryInfo(?string $complementaryInfo
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setMaskedPan(?string $maskedPan): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setPanExpiryDate(?string $panExpiryDate): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setScoreValue(?string $scoreValue): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setScoreColor(?string $scoreColor): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setScoreInfo(?string $scoreInfo): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setScoreProfile(?string $scoreProfile): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setScoreThreshold(?string $scoreThreshold): ValidateResponse
    {
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
     * @return ValidateResponse
     */
    public function setResponseCode(?string $responseCode): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setTransactionDateTime(?string $transactionDateTime
    ): ValidateResponse {
        $this->transactionDateTime = $transactionDateTime;

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
     * @return ValidateResponse
     */
    public function setS10TransactionReference(?array $s10TransactionReference
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setTransactionReference(?string $transactionReference
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setCardData(?array $cardData): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setSeal(?string $seal): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setTransactionPlatform(?string $transactionPlatform
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode
    ): ValidateResponse {
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
     * @return ValidateResponse
     */
    public function setErrorFieldName(?string $errorFieldName): ValidateResponse
    {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
