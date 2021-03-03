<?php


namespace Worldline\Sips\Office\SipsMessages\Diagnostic;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetFraudDataResponse
 * @package Worldline\Sips\Office\SipsMessages\Diagnostic
 */
class GetFraudDataResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $complementaryCode;
    
    /**
     * @var null|string
     */
    private $fraudResponseCode;
    
    /**
     * @var null|string
     */
    private $preAuthenticationColor;
    
    /**
     * @var null|string
     */
    private $preAuthenticationProfile;
    
    /**
     * @var null|string
     */
    private $preAuthenticationProfileValue;
    
    /**
     * @var null|array
     */
    private $preAuthenticationRuleResultList;
    
    /**
     * @var null|string
     */
    private $preAuthenticationThreshold;
    
    /**
     * @var null|string
     */
    private $preAuthenticationValue;
    
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
    private $scoreColor;
    
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
    private $seal;
    
    /**
     * @var null|string
     */
    private $errorFieldName;

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
     * @return GetFraudDataResponse
     */
    public function setComplementaryCode(?string $complementaryCode
    ): GetFraudDataResponse {
        $this->complementaryCode = $complementaryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFraudResponseCode(): ?string
    {
        return $this->fraudResponseCode;
    }

    /**
     * @param string|null $fraudResponseCode
     *
     * @return GetFraudDataResponse
     */
    public function setFraudResponseCode(?string $fraudResponseCode
    ): GetFraudDataResponse {
        $this->fraudResponseCode = $fraudResponseCode;

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
     * @return GetFraudDataResponse
     */
    public function setPreAuthenticationColor(?string $preAuthenticationColor
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setPreAuthenticationProfile(
        ?string $preAuthenticationProfile
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setPreAuthenticationProfileValue(
        ?string $preAuthenticationProfileValue
    ): GetFraudDataResponse {
        $this->preAuthenticationProfileValue = $preAuthenticationProfileValue;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPreAuthenticationRuleResultList(): ?array
    {
        return $this->preAuthenticationRuleResultList;
    }

    /**
     * @param array|null $preAuthenticationRuleResultList
     *
     * @return GetFraudDataResponse
     */
    public function setPreAuthenticationRuleResultList(
        ?array $preAuthenticationRuleResultList
    ): GetFraudDataResponse {
        $this->preAuthenticationRuleResultList = $preAuthenticationRuleResultList;

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
     * @return GetFraudDataResponse
     */
    public function setPreAuthenticationThreshold(
        ?string $preAuthenticationThreshold
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setPreAuthenticationValue(?string $preAuthenticationValue
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): GetFraudDataResponse {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

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
     * @return GetFraudDataResponse
     */
    public function setScoreColor(?string $scoreColor): GetFraudDataResponse
    {
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
     * @return GetFraudDataResponse
     */
    public function setScoreProfile(?string $scoreProfile): GetFraudDataResponse
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
     * @return GetFraudDataResponse
     */
    public function setScoreThreshold(?string $scoreThreshold
    ): GetFraudDataResponse {
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
     * @return GetFraudDataResponse
     */
    public function setScoreValue(?string $scoreValue): GetFraudDataResponse
    {
        $this->scoreValue = $scoreValue;

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
     * @return GetFraudDataResponse
     */
    public function setSeal(?string $seal): GetFraudDataResponse
    {
        $this->seal = $seal;

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
     * @return GetFraudDataResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): GetFraudDataResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
