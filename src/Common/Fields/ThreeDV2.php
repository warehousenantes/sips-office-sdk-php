<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class ThreeDV2
 * @package Worldline\Sips\Common\Fields
 */
class ThreeDV2
{
    /**
     * @var null|string
     */
    protected $cavv;
    /**
     * @var null|string
     */
    protected $cavvAlgorithm;
    /**
     * @var null|string
     */
    protected $securityIndicator;
    /**
     * @var null|string
     */
    protected $eci;
    /**
     * @var null|string
     */
    protected $txStatus;
    /**
     * @var null|string
     */
    protected $authentTransStatusReason;
    /**
     * @var null|string
     */
    protected $authentDsTransId;
    /**
     * @var null|string
     */
    protected $authentAmount;
    /**
     * @var null|string
     */
    protected $authentAcsTransId;
    /**
     * @var null|string
     */
    protected $authentDateTime;
    /**
     * @var null|string
     */
    protected $holderAuthentType;
    /**
     * @var null|string
     */
    protected $authentScoreValue;
    /**
     * @var null|string
     */
    protected $challengeMode3DS;
    /**
     * @var null|string
     */
    protected $authentCancelReason;

    /**
     * @return string|null
     */
    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    /**
     * @param string|null $cavv
     * @return ThreeDV2
     */
    public function setCavv(?string $cavv): ThreeDV2
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
     * @return ThreeDV2
     */
    public function setCavvAlgorithm(?string $cavvAlgorithm): ThreeDV2
    {
        $this->cavvAlgorithm = $cavvAlgorithm;
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
     * @return ThreeDV2
     */
    public function setSecurityIndicator(?string $securityIndicator): ThreeDV2
    {
        $this->securityIndicator = $securityIndicator;
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
     * @return ThreeDV2
     */
    public function setEci(?string $eci): ThreeDV2
    {
        $this->eci = $eci;
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
     * @return ThreeDV2
     */
    public function setTxStatus(?string $txStatus): ThreeDV2
    {
        $this->txStatus = $txStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentTransStatusReason(): ?string
    {
        return $this->authentTransStatusReason;
    }

    /**
     * @param string|null $authentTransStatusReason
     * @return ThreeDV2
     */
    public function setAuthentTransStatusReason(?string $authentTransStatusReason): ThreeDV2
    {
        $this->authentTransStatusReason = $authentTransStatusReason;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentDsTransId(): ?string
    {
        return $this->authentDsTransId;
    }

    /**
     * @param string|null $authentDsTransId
     * @return ThreeDV2
     */
    public function setAuthentDsTransId(?string $authentDsTransId): ThreeDV2
    {
        $this->authentDsTransId = $authentDsTransId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentAmount(): ?string
    {
        return $this->authentAmount;
    }

    /**
     * @param string|null $authentAmount
     * @return ThreeDV2
     */
    public function setAuthentAmount(?string $authentAmount): ThreeDV2
    {
        $this->authentAmount = $authentAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentAcsTransId(): ?string
    {
        return $this->authentAcsTransId;
    }

    /**
     * @param string|null $authentAcsTransId
     * @return ThreeDV2
     */
    public function setAuthentAcsTransId(?string $authentAcsTransId): ThreeDV2
    {
        $this->authentAcsTransId = $authentAcsTransId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentDateTime(): ?string
    {
        return $this->authentDateTime;
    }

    /**
     * @param string|null $authentDateTime
     * @return ThreeDV2
     */
    public function setAuthentDateTime(?string $authentDateTime): ThreeDV2
    {
        $this->authentDateTime = $authentDateTime;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentType(): ?string
    {
        return $this->holderAuthentType;
    }

    /**
     * @param string|null $holderAuthentType
     * @return ThreeDV2
     */
    public function setHolderAuthentType(?string $holderAuthentType): ThreeDV2
    {
        $this->holderAuthentType = $holderAuthentType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentScoreValue(): ?string
    {
        return $this->authentScoreValue;
    }

    /**
     * @param string|null $authentScoreValue
     * @return ThreeDV2
     */
    public function setAuthentScoreValue(?string $authentScoreValue): ThreeDV2
    {
        $this->authentScoreValue = $authentScoreValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChallengeMode3DS(): ?string
    {
        return $this->challengeMode3DS;
    }

    /**
     * @param string|null $challengeMode3DS
     * @return ThreeDV2
     */
    public function setChallengeMode3DS(?string $challengeMode3DS): ThreeDV2
    {
        $this->challengeMode3DS = $challengeMode3DS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthentCancelReason(): ?string
    {
        return $this->authentCancelReason;
    }

    /**
     * @param string|null $authentCancelReason
     * @return ThreeDV2
     */
    public function setAuthentCancelReason(?string $authentCancelReason): ThreeDV2
    {
        $this->authentCancelReason = $authentCancelReason;
        return $this;
    }

    
}