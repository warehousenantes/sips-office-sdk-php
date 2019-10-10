<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class AuthenticationData
 * @package Worldline\Sips\Common\Fields
 */
class AuthenticationData extends Field
{
    /**
     * @var null|CardAuthPolicy
     */
    protected $cardAuthPolicy;
    
    /**
     * @var null|ThreeD
     */
    protected $threeD;

    /**
     * @return CardAuthPolicy|null
     */
    public function getCardAuthPolicy(): ?CardAuthPolicy
    {
        return $this->cardAuthPolicy;
    }

    /**
     * @param CardAuthPolicy|null $cardAuthPolicy
     *
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
     *
     * @return AuthenticationData
     */
    public function setThreeD(?ThreeD $threeD): AuthenticationData
    {
        $this->threeD = $threeD;

        return $this;
    }


}