<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class AuthenticationData
 * @package Worldline\Sips\Common\Fields
 */
class AuthenticationData extends Field
{
    /**
     * @var CardAuthPolicy|null
     */
    private $cardAuthPolicy;
    /**
     * @var ThreeD|null
     */
    private $threeD;
    /**
     * @var ThreeDV2|null
     */
    private $threeDV2;
    /**
     * @var string|null
     */
    private $holderAuthentProgram;

    /**
     * @return CardAuthPolicy|null
     */
    public function getCardAuthPolicy(): ?CardAuthPolicy
    {
        return $this->cardAuthPolicy;
    }

    /**
     * @param CardAuthPolicy|null $cardAuthPolicy
     * @return AuthenticationData
     */
    public function setCardAuthPolicy(?CardAuthPolicy $cardAuthPolicy): AuthenticationData
    {
        $this->cardAuthPolicy = $cardAuthPolicy;
        return $this;
    }

    /**
     * @return ThreeD|null
     */
    public function getThreeD(): ?ThreeD
    {
        return $this->threeD;
    }

    /**
     * @param ThreeD|null $threeD
     * @return AuthenticationData
     */
    public function setThreeD(?ThreeD $threeD): AuthenticationData
    {
        $this->threeD = $threeD;
        return $this;
    }

    /**
     * @return ThreeDV2|null
     */
    public function getThreeDV2(): ?ThreeDV2
    {
        return $this->threeDV2;
    }

    /**
     * @param ThreeDV2|null $threeDV2
     * @return AuthenticationData
     */
    public function setThreeDV2(?ThreeDV2 $threeDV2): AuthenticationData
    {
        $this->threeDV2 = $threeDV2;
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
     * @return AuthenticationData
     */
    public function setHolderAuthentProgram(?string $holderAuthentProgram): AuthenticationData
    {
        $this->holderAuthentProgram = $holderAuthentProgram;
        return $this;
    }


}