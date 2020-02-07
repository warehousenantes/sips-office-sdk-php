<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\ThreeD;
use Worldline\Sips\Common\Fields\ThreeDV2;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardValidateAuthenticationResponse
 * @package Worldline\Sips\Office\SipsMessages\Checkout
 */
class CardValidateAuthenticationResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $responseCode;
    /**
     * @var null|string
     */
    protected $holderAuthentResponseCode;
    /**
     * @var null|string
     */
    protected $seal;
    /**
     * @var null|string
     */
    protected $errorFieldName;
    /**
     * @var null|string
     */
    protected $holderAuthentStatus;
    /**
     * @var null|string
     */
    protected $holderAuthentMethod;
    /**
     * @var null|string
     */
    protected $holderAuthentProgram;
    /**
     * @var null|array
     */
    protected $threeD;
    /**
     * @var null|array
     */
    protected $threeDV2;

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @param string|null $responseCode
     * @return CardValidateAuthenticationResponse
     */
    public function setResponseCode(?string $responseCode): CardValidateAuthenticationResponse
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentResponseCode(): ?string
    {
        return $this->holderAuthentResponseCode;
    }

    /**
     * @param string|null $holderAuthentResponseCode
     * @return CardValidateAuthenticationResponse
     */
    public function setHolderAuthentResponseCode(?string $holderAuthentResponseCode): CardValidateAuthenticationResponse
    {
        $this->holderAuthentResponseCode = $holderAuthentResponseCode;
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
     * @return CardValidateAuthenticationResponse
     */
    public function setSeal(?string $seal): CardValidateAuthenticationResponse
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
     * @return CardValidateAuthenticationResponse
     */
    public function setErrorFieldName(?string $errorFieldName): CardValidateAuthenticationResponse
    {
        $this->errorFieldName = $errorFieldName;
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
     * @return CardValidateAuthenticationResponse
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus): CardValidateAuthenticationResponse
    {
        $this->holderAuthentStatus = $holderAuthentStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @param string|null $holderAuthentMethod
     * @return CardValidateAuthenticationResponse
     */
    public function setHolderAuthentMethod(?string $holderAuthentMethod): CardValidateAuthenticationResponse
    {
        $this->holderAuthentMethod = $holderAuthentMethod;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @param string|null $holderAuthentProgram
     * @return CardValidateAuthenticationResponse
     */
    public function setHolderAuthentProgram(?string $holderAuthentProgram): CardValidateAuthenticationResponse
    {
        $this->holderAuthentProgram = $holderAuthentProgram;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getThreeD(): ?array
    {
        return $this->threeD;
    }

    /**
     * @param ThreeD|null $threeD
     * @return CardValidateAuthenticationResponse
     */
    public function setThreeD(?array $threeD): CardValidateAuthenticationResponse
    {
        $this->threeD = $threeD;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getThreeDV2(): ?array
    {
        return $this->threeDV2;
    }

    /**
     * @param array|null $threeDV2
     * @return CardValidateAuthenticationResponse
     */
    public function setThreeDV2(?array $threeDV2): CardValidateAuthenticationResponse
    {
        $this->threeDV2 = $threeDV2;
        return $this;
    }


}
