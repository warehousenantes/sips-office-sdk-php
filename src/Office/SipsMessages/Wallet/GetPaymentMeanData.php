<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetPaymentMeanData
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class GetPaymentMeanData extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;
    
    /**
     * @var null|int
     */
    protected $keyVersion;
    
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
    protected $intermediateServiceProviderId;
    
    /**
     * @var null|string
     */
    protected $merchantWalletId;
    
    /**
     * @var null|string
     */
    protected $paymentMeanId;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $sealAlgorithm;

    /**
     * GetPaymentMean constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/wallet/getPaymentMeanData";
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
     * @return GetPaymentMeanData
     */
    public function setKeyVersion(?int $keyVersion): GetPaymentMeanData
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
     * @return GetPaymentMeanData
     */
    public function setMerchantId(?string $merchantId): GetPaymentMeanData
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
     * @return GetPaymentMeanData
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): GetPaymentMeanData {
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
     * @return GetPaymentMeanData
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): GetPaymentMeanData {
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
     * @return GetPaymentMeanData
     */
    public function setMerchantWalletId(?string $merchantWalletId
    ): GetPaymentMeanData {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    /**
     * @param string|null $paymentMeanId
     *
     * @return GetPaymentMeanData
     */
    public function setPaymentMeanId(?string $paymentMeanId): GetPaymentMeanData
    {
        $this->paymentMeanId = $paymentMeanId;

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
     * @return GetPaymentMeanData
     */
    public function setSeal(?string $seal): GetPaymentMeanData
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
     * @return GetPaymentMeanData
     */
    public function setSealAlgorithm(?string $sealAlgorithm): GetPaymentMeanData
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
        
}
