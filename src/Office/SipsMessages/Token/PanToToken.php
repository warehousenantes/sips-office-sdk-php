<?php

namespace Worldline\Sips\Office\SipsMessages\Token;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PanToToken
 *
 * @package Worldline\Sips\Office\SipsMessages\Token
 */
class PanToToken extends SipsMessage
{
     /**
     * @var string
     */
    private $serviceUrl;
    
     /**
     * @var null|string
     */
    protected $merchantId;
    
     /**
     * @var null|string
     */
    protected $interfaceVersion;
    
     /**
     * @var null|string
     */
    protected $userId;
    
     /**
     * @var null|array
     */
    protected $panDataList;
    
     /**
     * @var null|string
     */
    protected $intermediateServiceProviderId;
    
     /**
     * @var null|string
     */
    protected $seal;
    
     /**
     * @var null|string
     */
    protected $keyVersion;
    
     /**
     * @var null|string
     */
    protected $sealAlgorithm;

    /**
     * PanToToken constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/token/panToToken";
        $this->setInterfaceVersion("TR_WS_2.27");
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
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $merchantId
     *
     * @return PanToToken
     */
    public function setMerchantId(?string $merchantId): PanToToken
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
     * @return PanToToken
     */
    public function setInterfaceVersion(?string $interfaceVersion): PanToToken
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string|null $userId
     *
     * @return PanToToken
     */
    public function setUserId(?string $userId): PanToToken
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPanDataList(): ?array
    {
        return $this->panDataList;
    }

    /**
     * @param array|null $panDataList
     *
     * @return PanToToken
     */
    public function setPanDataList(?array $panDataList): PanToToken
    {
        $this->panDataList = $panDataList;

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
     * @return PanToToken
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): PanToToken {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

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
     * @return PanToToken
     */
    public function setSeal(?string $seal): PanToToken
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    /**
     * @param string|null $keyVersion
     *
     * @return PanToToken
     */
    public function setKeyVersion(?string $keyVersion): PanToToken
    {
        $this->keyVersion = $keyVersion;

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
     * @return PanToToken
     */
    public function setSealAlgorithm(?string $sealAlgorithm): PanToToken
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
    
}
