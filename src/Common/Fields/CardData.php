<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class CardData.
 */
class CardData extends Field
{
    private ?string $cardProductCode = null;

    private ?string $cardProductName = null;

    private ?string $cardProductProfile = null;

    private ?string $cardScheme = null;

    private ?string $issuerCode = null;

    private ?string $issuerCountryCode = null;

    private ?string $cardProductUsageLabel = null;

    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    public function setCardProductCode(string $cardProductCode): self
    {
        $this->cardProductCode = $cardProductCode;

        return $this;
    }

    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    public function setCardProductName(string $cardProductName): self
    {
        $this->cardProductName = $cardProductName;

        return $this;
    }

    public function getCardProductProfile(): ?string
    {
        return $this->cardProductProfile;
    }

    public function setCardProductProfile(string $cardProductProfile): self
    {
        $this->cardProductProfile = $cardProductProfile;

        return $this;
    }

    public function getCardScheme(): ?string
    {
        return $this->cardScheme;
    }

    public function setCardScheme(string $cardScheme): self
    {
        $this->cardScheme = $cardScheme;

        return $this;
    }

    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    public function setIssuerCode(string $issuerCode): self
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }

    public function getIssuerCountryCode(): ?string
    {
        return $this->issuerCountryCode;
    }

    public function setIssuerCountryCode(string $issuerCountryCode): self
    {
        $this->issuerCountryCode = $issuerCountryCode;

        return $this;
    }

    public function getCardProductUsageLabel(): ?string
    {
        return $this->cardProductUsageLabel;
    }

    public function setCardProductUsageLabel(string $cardProductUsageLabel): self
    {
        $this->cardProductUsageLabel = $cardProductUsageLabel;

        return $this;
    }
}
