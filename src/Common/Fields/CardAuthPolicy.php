<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class CardAuthPolicy
 * @package Worldline\Sips\Common\Fields
 */
class CardAuthPolicy extends Field
{
    /**
     * @var null|string
     */
    private $checkAVS;
    
    /**
     * @var null|string
     */
    private $ignorePostCodeCheckResult;
    
    /**
     * @var null|string
     */
    private $ignoreAddressCheckResult;
    
    /**
     * @var null|string
     */
    private $automaticReverse;
    
    /**
     * @return string|null
     */
    public function getCheckAVS(): ?string
    {
        return $this->checkAVS;
    }

    /**
     * @param string|null $checkAVS
     *
     * @return CardAuthPolicy
     */
    public function setCheckAVS(?string $checkAVS): CardAuthPolicy
    {
        $this->checkAVS = $checkAVS;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIgnorePostCodeCheckResult(): ?string
    {
        return $this->ignorePostCodeCheckResult;
    }

    /**
     * @param string|null $ignorePostCodeCheckResult
     *
     * @return CardAuthPolicy
     */
    public function setIgnorePostCodeCheckResult(
        ?string $ignorePostCodeCheckResult
    ): CardAuthPolicy {
        $this->ignorePostCodeCheckResult = $ignorePostCodeCheckResult;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIgnoreAddressCheckResult(): ?string
    {
        return $this->ignoreAddressCheckResult;
    }

    /**
     * @param string|null $ignoreAddressCheckResult
     *
     * @return CardAuthPolicy
     */
    public function setIgnoreAddressCheckResult(
        ?string $ignoreAddressCheckResult
    ): CardAuthPolicy {
        $this->ignoreAddressCheckResult = $ignoreAddressCheckResult;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAutomaticReverse(): ?string
    {
        return $this->automaticReverse;
    }

    /**
     * @param string|null $automaticReverse
     *
     * @return CardAuthPolicy
     */
    public function setAutomaticReverse(?string $automaticReverse
    ): CardAuthPolicy {
        $this->automaticReverse = $automaticReverse;

        return $this;
    }
    
}