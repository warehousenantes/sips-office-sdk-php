<?php

namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetWalletData
 * @package Worldline\Sips\Office\Common\SipsMessages\Wallet
 */
class GetWalletData extends SipsMessage
{
    
    /**
     * @var string
     */
    private $serviceUrl;
    
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
    private $interfaceVersion;
    
    /**
     * @var null|string
     */
    private $intermediateServiceProviderId;
    
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
     * GetWalletData constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/wallet/getWalletData";
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
     * @return int|null
     */
    public function getKeyVersion(): ?int
    {
        return $this->keyVersion;
    }

    /**
     * @param int|null $keyVersion
     *
     * @return GetWalletData
     */
    public function setKeyVersion(?int $keyVersion): GetWalletData
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
     * @return GetWalletData
     */
    public function setMerchantId(?string $merchantId): GetWalletData
    {
        $this->merchantId = $merchantId;

        return $this;
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
     * @return GetWalletData
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): GetWalletData {
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
     * @return GetWalletData
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): GetWalletData {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

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
     * @return GetWalletData
     */
    public function setMerchantWalletId(?string $merchantWalletId
    ): GetWalletData {
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
     * @return GetWalletData
     */
    public function setSeal(?string $seal): GetWalletData
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
     * @return GetWalletData
     */
    public function setSealAlgorithm(?string $sealAlgorithm): GetWalletData
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
    
}
