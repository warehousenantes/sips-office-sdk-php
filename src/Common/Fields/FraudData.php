<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class FraudData.
 */
class FraudData extends Field
{
    private ?string $allowedCardArea = null;

    private ?array $allowedCardCountryList = null;

    private ?string $allowedIpArea = null;

    private ?array $allowedIpCountryList = null;

    private ?string $bypass3DS = null;

    private ?array $bypassCtrlList = null;

    private ?array $bypassInfoList = null;

    private ?string $deniedCardArea = null;

    private ?array $deniedCardCountryList = null;

    private ?string $deniedIpArea = null;

    private ?array $deniedIpCountryList = null;

    public function getAllowedCardArea(): ?string
    {
        return $this->allowedCardArea;
    }

    public function setAllowedCardArea(?string $allowedCardArea): self
    {
        $this->allowedCardArea = $allowedCardArea;

        return $this;
    }

    public function getAllowedCardCountryList(): ?array
    {
        return $this->allowedCardCountryList;
    }

    public function setAllowedCardCountryList(
        ?array $allowedCardCountryList
    ): self {
        $this->allowedCardCountryList = $allowedCardCountryList;

        return $this;
    }

    public function getAllowedIpArea(): ?string
    {
        return $this->allowedIpArea;
    }

    public function setAllowedIpArea(?string $allowedIpArea): self
    {
        $this->allowedIpArea = $allowedIpArea;

        return $this;
    }

    public function getAllowedIpCountryList(): ?array
    {
        return $this->allowedIpCountryList;
    }

    public function setAllowedIpCountryList(
        ?array $allowedIpCountryList
    ): self {
        $this->allowedIpCountryList = $allowedIpCountryList;

        return $this;
    }

    public function getBypass3DS(): ?string
    {
        return $this->bypass3DS;
    }

    public function setBypass3DS(?string $bypass3DS): self
    {
        $this->bypass3DS = $bypass3DS;

        return $this;
    }

    public function getBypassCtrlList(): ?array
    {
        return $this->bypassCtrlList;
    }

    public function setBypassCtrlList(?array $bypassCtrlList): self
    {
        $this->bypassCtrlList = $bypassCtrlList;

        return $this;
    }

    public function getBypassInfoList(): ?array
    {
        return $this->bypassInfoList;
    }

    public function setBypassInfoList(?array $bypassInfoList): self
    {
        $this->bypassInfoList = $bypassInfoList;

        return $this;
    }

    public function getDeniedCardArea(): ?string
    {
        return $this->deniedCardArea;
    }

    public function setDeniedCardArea(?string $deniedCardArea): self
    {
        $this->deniedCardArea = $deniedCardArea;

        return $this;
    }

    public function getDeniedCardCountryList(): ?array
    {
        return $this->deniedCardCountryList;
    }

    public function setDeniedCardCountryList(
        ?array $deniedCardCountryList
    ): self {
        $this->deniedCardCountryList = $deniedCardCountryList;

        return $this;
    }

    public function getDeniedIpArea(): ?string
    {
        return $this->deniedIpArea;
    }

    public function setDeniedIpArea(?string $deniedIpArea): self
    {
        $this->deniedIpArea = $deniedIpArea;

        return $this;
    }

    public function getDeniedIpCountryList(): ?array
    {
        return $this->deniedIpCountryList;
    }

    public function setDeniedIpCountryList(
        ?array $deniedIpCountryList
    ): self {
        $this->deniedIpCountryList = $deniedIpCountryList;

        return $this;
    }
}
