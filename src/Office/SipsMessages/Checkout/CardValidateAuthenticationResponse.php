<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\ThreeD;
use Worldline\Sips\Common\Fields\ThreeDV2;

/**
 * Class CardValidateAuthenticationResponse
 * @package Worldline\Sips\Office\SipsMessages\Checkout
 */
class CardValidateAuthenticationResponse
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
     * @var null|ThreeD
     */
    protected $threeD;
    /**
     * @var null|ThreeDV2
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
     * @return string|null
     */
    public function getHolderAuthentResponseCode(): ?string
    {
        return $this->holderAuthentResponseCode;
    }

    /**
     * @return string|null
     */
    public function getSeal(): ?string
    {
        return $this->seal;
    }

    /**
     * @return string|null
     */
    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @return ThreeD|null
     */
    public function getThreeD(): ?ThreeD
    {
        return $this->threeD;
    }

    /**
     * @return ThreeDV2|null
     */
    public function getThreeDV2(): ?ThreeDV2
    {
        return $this->threeDV2;
    }
    
}
