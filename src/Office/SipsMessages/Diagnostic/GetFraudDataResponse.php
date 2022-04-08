<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Diagnostic;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetFraudDataResponse.
 */
class GetFraudDataResponse extends SipsMessage
{
    private ?string $complementaryCode = null;

    private ?string $fraudResponseCode = null;

    private ?string $preAuthenticationColor = null;

    private ?string $preAuthenticationProfile = null;

    private ?string $preAuthenticationProfileValue = null;

    private ?array $preAuthenticationRuleResultList = null;

    private ?string $preAuthenticationThreshold = null;

    private ?string $preAuthenticationValue = null;

    private ?string $preAuthorisationProfile = null;

    private ?string $preAuthorisationProfileValue = null;

    private ?array $preAuthorisationRuleResultList = null;

    private ?string $scoreColor = null;

    private ?string $scoreProfile = null;

    private ?string $scoreThreshold = null;

    private ?string $scoreValue = null;

    private ?string $seal = null;

    private ?string $errorFieldName = null;

    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    public function setComplementaryCode(
        ?string $complementaryCode
    ): self {
        $this->complementaryCode = $complementaryCode;

        return $this;
    }

    public function getFraudResponseCode(): ?string
    {
        return $this->fraudResponseCode;
    }

    public function setFraudResponseCode(
        ?string $fraudResponseCode
    ): self {
        $this->fraudResponseCode = $fraudResponseCode;

        return $this;
    }

    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    public function setPreAuthenticationColor(
        ?string $preAuthenticationColor
    ): self {
        $this->preAuthenticationColor = $preAuthenticationColor;

        return $this;
    }

    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    public function setPreAuthenticationProfile(
        ?string $preAuthenticationProfile
    ): self {
        $this->preAuthenticationProfile = $preAuthenticationProfile;

        return $this;
    }

    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    public function setPreAuthenticationProfileValue(
        ?string $preAuthenticationProfileValue
    ): self {
        $this->preAuthenticationProfileValue = $preAuthenticationProfileValue;

        return $this;
    }

    public function getPreAuthenticationRuleResultList(): ?array
    {
        return $this->preAuthenticationRuleResultList;
    }

    public function setPreAuthenticationRuleResultList(
        ?array $preAuthenticationRuleResultList
    ): self {
        $this->preAuthenticationRuleResultList = $preAuthenticationRuleResultList;

        return $this;
    }

    public function getPreAuthenticationThreshold(): ?string
    {
        return $this->preAuthenticationThreshold;
    }

    public function setPreAuthenticationThreshold(
        ?string $preAuthenticationThreshold
    ): self {
        $this->preAuthenticationThreshold = $preAuthenticationThreshold;

        return $this;
    }

    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    public function setPreAuthenticationValue(
        ?string $preAuthenticationValue
    ): self {
        $this->preAuthenticationValue = $preAuthenticationValue;

        return $this;
    }

    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    public function setPreAuthorisationProfile(
        ?string $preAuthorisationProfile
    ): self {
        $this->preAuthorisationProfile = $preAuthorisationProfile;

        return $this;
    }

    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): self {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;

        return $this;
    }

    public function getPreAuthorisationRuleResultList(): ?array
    {
        return $this->preAuthorisationRuleResultList;
    }

    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): self {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

        return $this;
    }

    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    public function setScoreColor(?string $scoreColor): self
    {
        $this->scoreColor = $scoreColor;

        return $this;
    }

    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    public function setScoreProfile(?string $scoreProfile): self
    {
        $this->scoreProfile = $scoreProfile;

        return $this;
    }

    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    public function setScoreThreshold(
        ?string $scoreThreshold
    ): self {
        $this->scoreThreshold = $scoreThreshold;

        return $this;
    }

    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    public function setScoreValue(?string $scoreValue): self
    {
        $this->scoreValue = $scoreValue;

        return $this;
    }

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(
        ?string $errorFieldName
    ): self {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
}
