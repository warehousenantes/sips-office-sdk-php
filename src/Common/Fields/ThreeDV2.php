<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class ThreeDV2.
 */
class ThreeDV2
{
    private ?string $cavv = null;

    private ?string $cavvAlgorithm = null;

    private ?string $securityIndicator = null;

    private ?string $eci = null;

    private ?string $txStatus = null;

    private ?string $authentTransStatusReason = null;

    private ?string $authentDsTransId = null;

    private ?string $authentAmount = null;

    private ?string $authentAcsTransId = null;

    private ?string $authentDateTime = null;

    private ?string $holderAuthentType = null;

    private ?string $authentScoreValue = null;

    private ?string $challengeMode3DS = null;

    private ?string $authentCancelReason = null;

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

    public function getSecurityIndicator(): ?string
    {
        return $this->securityIndicator;
    }

    public function setSecurityIndicator(?string $securityIndicator): self
    {
        $this->securityIndicator = $securityIndicator;

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

    public function getTxStatus(): ?string
    {
        return $this->txStatus;
    }

    public function setTxStatus(?string $txStatus): self
    {
        $this->txStatus = $txStatus;

        return $this;
    }

    public function getAuthentTransStatusReason(): ?string
    {
        return $this->authentTransStatusReason;
    }

    public function setAuthentTransStatusReason(?string $authentTransStatusReason): self
    {
        $this->authentTransStatusReason = $authentTransStatusReason;

        return $this;
    }

    public function getAuthentDsTransId(): ?string
    {
        return $this->authentDsTransId;
    }

    public function setAuthentDsTransId(?string $authentDsTransId): self
    {
        $this->authentDsTransId = $authentDsTransId;

        return $this;
    }

    public function getAuthentAmount(): ?string
    {
        return $this->authentAmount;
    }

    public function setAuthentAmount(?string $authentAmount): self
    {
        $this->authentAmount = $authentAmount;

        return $this;
    }

    public function getAuthentAcsTransId(): ?string
    {
        return $this->authentAcsTransId;
    }

    public function setAuthentAcsTransId(?string $authentAcsTransId): self
    {
        $this->authentAcsTransId = $authentAcsTransId;

        return $this;
    }

    public function getAuthentDateTime(): ?string
    {
        return $this->authentDateTime;
    }

    public function setAuthentDateTime(?string $authentDateTime): self
    {
        $this->authentDateTime = $authentDateTime;

        return $this;
    }

    public function getHolderAuthentType(): ?string
    {
        return $this->holderAuthentType;
    }

    public function setHolderAuthentType(?string $holderAuthentType): self
    {
        $this->holderAuthentType = $holderAuthentType;

        return $this;
    }

    public function getAuthentScoreValue(): ?string
    {
        return $this->authentScoreValue;
    }

    public function setAuthentScoreValue(?string $authentScoreValue): self
    {
        $this->authentScoreValue = $authentScoreValue;

        return $this;
    }

    public function getChallengeMode3DS(): ?string
    {
        return $this->challengeMode3DS;
    }

    public function setChallengeMode3DS(?string $challengeMode3DS): self
    {
        $this->challengeMode3DS = $challengeMode3DS;

        return $this;
    }

    public function getAuthentCancelReason(): ?string
    {
        return $this->authentCancelReason;
    }

    public function setAuthentCancelReason(?string $authentCancelReason): self
    {
        $this->authentCancelReason = $authentCancelReason;

        return $this;
    }
}
