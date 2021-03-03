<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class ThreeD
 * @package Worldline\Sips\Common\Fields
 */
class ThreeD extends Field
{
    /**
     * @var null|string
     */
    private $cavv;
    /**
     * @var null|string
     */
    private $cavvAlgorithm;
    /**
     * @var null|string
     */
    private $eci;
    /**
     * @var null|string
     */
    private $securityIndicator;
    /**
     * @var null|string
     */
    private $txStatus;
    /**
     * @var null|string
     */
    private $xd;

    /**
     * @return string|null
     */
    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    /**
     * @param string|null $cavv
     *
     * @return ThreeD
     */
    public function setCavv(?string $cavv): ThreeD
    {
        $this->cavv = $cavv;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCavvAlgorithm(): ?string
    {
        return $this->cavvAlgorithm;
    }

    /**
     * @param string|null $cavvAlgorithm
     *
     * @return ThreeD
     */
    public function setCavvAlgorithm(?string $cavvAlgorithm): ThreeD
    {
        $this->cavvAlgorithm = $cavvAlgorithm;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEci(): ?string
    {
        return $this->eci;
    }

    /**
     * @param string|null $eci
     *
     * @return ThreeD
     */
    public function setEci(?string $eci): ThreeD
    {
        $this->eci = $eci;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecurityIndicator(): ?string
    {
        return $this->securityIndicator;
    }

    /**
     * @param string|null $securityIndicator
     *
     * @return ThreeD
     */
    public function setSecurityIndicator(?string $securityIndicator): ThreeD
    {
        $this->securityIndicator = $securityIndicator;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTxStatus(): ?string
    {
        return $this->txStatus;
    }

    /**
     * @param string|null $txStatus
     *
     * @return ThreeD
     */
    public function setTxStatus(?string $txStatus): ThreeD
    {
        $this->txStatus = $txStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getxid(): ?string
    {
        return $this->xid;
    }

    /**
     * @param string|null $xid
     *
     * @return ThreeD
     */
    public function setxid(?string $xid): ThreeD
    {
        $this->xid = $xid;

        return $this;
    }
    
}