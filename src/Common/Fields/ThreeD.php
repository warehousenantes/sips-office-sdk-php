<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class ThreeD.
 */
class ThreeD extends Field
{
    /**
     * @var mixed|string|null
     */
    public $xid;

    private ?string $cavv = null;

    private ?string $cavvAlgorithm = null;

    private ?string $eci = null;

    private ?string $securityIndicator = null;

    private ?string $txStatus = null;

    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    public function setCavv(?string $cavv): self
    {
        $this->cavv = $cavv;

        return $this;
    }

    public function getCavvAlgorithm(): ?string
    {
        return $this->cavvAlgorithm;
    }

    public function setCavvAlgorithm(?string $cavvAlgorithm): self
    {
        $this->cavvAlgorithm = $cavvAlgorithm;

        return $this;
    }

    public function getEci(): ?string
    {
        return $this->eci;
    }

    public function setEci(?string $eci): self
    {
        $this->eci = $eci;

        return $this;
    }

    public function getSecurityIndicator(): ?string
    {
        return $this->securityIndicator;
    }

    public function setSecurityIndicator(?string $securityIndicator): self
    {
        $this->securityIndicator = $securityIndicator;

        return $this;
    }

    public function getTxStatus(): ?string
    {
        return $this->txStatus;
    }

    public function setTxStatus(?string $txStatus): self
    {
        $this->txStatus = $txStatus;

        return $this;
    }

    public function getxid(): ?string
    {
        return $this->xid;
    }

    public function setxid(?string $xid): self
    {
        $this->xid = $xid;

        return $this;
    }
}
