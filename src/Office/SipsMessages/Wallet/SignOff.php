<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class SignOff
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class SignOff extends SipsMessage
{
    
    /**
     * @var string
     */
    private $serviceUrl;
    
    /**
     * @var null|string
     */
    private $interfaceVersion;
    
    /**
     * @var null|string
     */
    private $intermediateServiceProviderId;
    
    /**
     * @var null|int
     */
    private $keyVersion;
    
    /**
     * @var null|string
     */
    private $merchantId;
    
    /**
     * @var null|string
     */
    private $merchantWalletId;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|string
     */
    private $sealAlgorithm;

    /**
     * SignOff constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/wallet/signOff";
        $this->setInterfaceVersion("WR_WS_2.27");
    }

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return string|null
     */
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     * @param string|null $interfaceVersion
     *
     * @return SignOff
     */
    public function setInterfaceVersion(?string $interfaceVersion): SignOff
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntermediateServiceProviderId(): ?string
    {
        return $this->intermediateServiceProviderId;
    }

    /**
     * @param string|null $intermediateServiceProviderId
     *
     * @return SignOff
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): SignOff {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getKeyVersion(): ?int
    {
        return $this->keyVersion;
    }

    /**
     * @param int|null $keyVersion
     *
     * @return SignOff
     */
    public function setKeyVersion(?int $keyVersion): SignOff
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $merchantId
     *
     * @return SignOff
     */
    public function setMerchantId(?string $merchantId): SignOff
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    /**
     * @param string|null $merchantWalletId
     *
     * @return SignOff
     */
    public function setMerchantWalletId(?string $merchantWalletId): SignOff
    {
        $this->merchantWalletId = $merchantWalletId;

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
     *
     * @return SignOff
     */
    public function setSeal(?string $seal): SignOff
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    /**
     * @param string|null $sealAlgorithm
     *
     * @return SignOff
     */
    public function setSealAlgorithm(?string $sealAlgorithm): SignOff
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

}