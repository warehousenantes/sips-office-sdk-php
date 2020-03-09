<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class FraudData
 *
 * @package Worldline\Sips\Common\Fields
 */
class FraudData extends Field
{

    /**
     * @var null|string
     */
    private $allowedCardArea;

    /**
     * @var null|array
     */
    private $allowedCardCountryList;

    /**
     * @var null|string
     */
    private $allowedIpArea;

    /**
     * @var null|array
     */
    private $allowedIpCountryList;

    /**
     * @var null|string
     */
    private $bypass3DS;

    /**
     * @var null|array
     */
    private $bypassCtrlList;

    /**
     * @var null|array
     */
    private $bypassInfoList;

    /**
     * @var null|string
     */
    private $deniedCardArea;

    /**
     * @var null|array
     */
    private $deniedCardCountryList;

    /**
     * @var null|string
     */
    private $deniedIpArea;

    /**
     * @var null|array
     */
    private $deniedIpCountryList;

    /**
     * @return string|null
     */
    public function getAllowedCardArea(): ?string
    {
        return $this->allowedCardArea;
    }

    /**
     * @param string|null $allowedCardArea
     *
     * @return FraudData
     */
    public function setAllowedCardArea(?string $allowedCardArea): FraudData
    {
        $this->allowedCardArea = $allowedCardArea;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getAllowedCardCountryList(): ?array
    {
        return $this->allowedCardCountryList;
    }

    /**
     * @param array|null $allowedCardCountryList
     *
     * @return FraudData
     */
    public function setAllowedCardCountryList(?array $allowedCardCountryList
    ): FraudData {
        $this->allowedCardCountryList = $allowedCardCountryList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllowedIpArea(): ?string
    {
        return $this->allowedIpArea;
    }

    /**
     * @param string|null $allowedIpArea
     *
     * @return FraudData
     */
    public function setAllowedIpArea(?string $allowedIpArea): FraudData
    {
        $this->allowedIpArea = $allowedIpArea;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getAllowedIpCountryList(): ?array
    {
        return $this->allowedIpCountryList;
    }

    /**
     * @param array|null $allowedIpCountryList
     *
     * @return FraudData
     */
    public function setAllowedIpCountryList(?array $allowedIpCountryList
    ): FraudData {
        $this->allowedIpCountryList = $allowedIpCountryList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBypass3DS(): ?string
    {
        return $this->bypass3DS;
    }

    /**
     * @param string|null $bypass3DS
     *
     * @return FraudData
     */
    public function setBypass3DS(?string $bypass3DS): FraudData
    {
        $this->bypass3DS = $bypass3DS;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getBypassCtrlList(): ?array
    {
        return $this->bypassCtrlList;
    }

    /**
     * @param array|null $bypassCtrlList
     *
     * @return FraudData
     */
    public function setBypassCtrlList(?array $bypassCtrlList): FraudData
    {
        $this->bypassCtrlList = $bypassCtrlList;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getBypassInfoList(): ?array
    {
        return $this->bypassInfoList;
    }

    /**
     * @param array|null $bypassInfoList
     *
     * @return FraudData
     */
    public function setBypassInfoList(?array $bypassInfoList): FraudData
    {
        $this->bypassInfoList = $bypassInfoList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeniedCardArea(): ?string
    {
        return $this->deniedCardArea;
    }

    /**
     * @param string|null $deniedCardArea
     *
     * @return FraudData
     */
    public function setDeniedCardArea(?string $deniedCardArea): FraudData
    {
        $this->deniedCardArea = $deniedCardArea;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getDeniedCardCountryList(): ?array
    {
        return $this->deniedCardCountryList;
    }

    /**
     * @param array|null $deniedCardCountryList
     *
     * @return FraudData
     */
    public function setDeniedCardCountryList(?array $deniedCardCountryList
    ): FraudData {
        $this->deniedCardCountryList = $deniedCardCountryList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeniedIpArea(): ?string
    {
        return $this->deniedIpArea;
    }

    /**
     * @param string|null $deniedIpArea
     *
     * @return FraudData
     */
    public function setDeniedIpArea(?string $deniedIpArea): FraudData
    {
        $this->deniedIpArea = $deniedIpArea;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getDeniedIpCountryList(): ?array
    {
        return $this->deniedIpCountryList;
    }

    /**
     * @param array|null $deniedIpCountryList
     *
     * @return FraudData
     */
    public function setDeniedIpCountryList(?array $deniedIpCountryList
    ): FraudData {
        $this->deniedIpCountryList = $deniedIpCountryList;

        return $this;
    }
    
}
