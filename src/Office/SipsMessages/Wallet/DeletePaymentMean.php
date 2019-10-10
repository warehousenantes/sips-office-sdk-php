<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class DeletePaymentMean
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class DeletePaymentMean extends SipsMessage
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
    protected $merchantWalletId;
    
     /**
     * @var null|string
     */
    protected $paymentMeanId;
    
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
     * DeletePaymentMean constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/wallet/deletePaymentMean";
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
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $merchantId
     *
     * @return DeletePaymentMean
     */
    public function setMerchantId(?string $merchantId): DeletePaymentMean
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
     * @return DeletePaymentMean
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): DeletePaymentMean {
        $this->interfaceVersion = $interfaceVersion;

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
     * @return DeletePaymentMean
     */
    public function setMerchantWalletId(?string $merchantWalletId
    ): DeletePaymentMean {
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
     * @return DeletePaymentMean
     */
    public function setPaymentMeanId(?string $paymentMeanId): DeletePaymentMean
    {
        $this->paymentMeanId = $paymentMeanId;

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
     * @return DeletePaymentMean
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): DeletePaymentMean {
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
     * @return DeletePaymentMean
     */
    public function setSeal(?string $seal): DeletePaymentMean
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
     * @return DeletePaymentMean
     */
    public function setKeyVersion(?string $keyVersion): DeletePaymentMean
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
     * @return DeletePaymentMean
     */
    public function setSealAlgorithm(?string $sealAlgorithm): DeletePaymentMean
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
    
}
