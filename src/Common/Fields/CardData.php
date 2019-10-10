<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class CardData
 *
 * @package Worldline\Sips\Common\Fields
 */
class CardData extends Field
{
    /**
     * @var null|string
     */
    protected $cardProductCode;

    /**
     * @var null|string
     */
    protected $cardProductName;

    /**
     * @var null|string
     */
    protected $cardProductProfile;

    /**
     * @var null|string
     */
    protected $cardScheme;

    /**
     * @var null|string
     */
    protected $issuerCode;

    /**
     * @var null|string
     */
    protected $issuerCountryCode;

    /**
     * @var null|string
     */
    protected $cardProductUsageLabel;

    /**
     * @return string|null
     */
    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    /**
     * @param string $cardProductCode
     * @return CardData
     */
    public function setCardProductCode(string $cardProductCode): CardData
    {
        $this->cardProductCode = $cardProductCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    /**
     * @param string $cardProductName
     * @return CardData
     */
    public function setCardProductName(string $cardProductName): CardData
    {
        $this->cardProductName = $cardProductName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductProfile(): ?string
    {
        return $this->cardProductProfile;
    }

    /**
     * @param string $cardProductProfile
     * @return CardData
     */
    public function setCardProductProfile(string $cardProductProfile): CardData
    {
        $this->cardProductProfile = $cardProductProfile;
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
     * @param string $cardScheme
     * @return CardData
     */
    public function setCardScheme(string $cardScheme): CardData
    {
        $this->cardScheme = $cardScheme;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @param string $issuerCode
     * @return CardData
     */
    public function setIssuerCode(string $issuerCode): CardData
    {
        $this->issuerCode = $issuerCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerCountryCode(): ?string
    {
        return $this->issuerCountryCode;
    }

    /**
     * @param string $issuerCountryCode
     * @return CardData
     */
    public function setIssuerCountryCode(string $issuerCountryCode): CardData
    {
        $this->issuerCountryCode = $issuerCountryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductUsageLabel(): ?string
    {
        return $this->cardProductUsageLabel;
    }

    /**
     * @param string $cardProductUsageLabel
     * @return CardData
     */
    public function setCardProductUsageLabel(string $cardProductUsageLabel): CardData
    {
        $this->cardProductUsageLabel = $cardProductUsageLabel;
        return $this;
    }
    
}
