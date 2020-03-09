<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class UpdatePaymentMean
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class UpdatePaymentMean extends SipsMessage
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
    private $paymentMeanAlias;
    
    /**
     * @var null|string
     */
    private $paymentMeanId;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|string
     */
    private $sealAlgorithm;

    /**
     * UpdatePaymentMean constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/wallet/updatePaymentMean";
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
     * @param string $serviceUrl
     *
     * @return UpdatePaymentMean
     */
    public function setServiceUrl(string $serviceUrl): UpdatePaymentMean
    {
        $this->serviceUrl = $serviceUrl;

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
     * @return UpdatePaymentMean
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): UpdatePaymentMean {
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
     * @return UpdatePaymentMean
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): UpdatePaymentMean {
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
     * @return UpdatePaymentMean
     */
    public function setKeyVersion(?int $keyVersion): UpdatePaymentMean
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
     * @return UpdatePaymentMean
     */
    public function setMerchantId(?string $merchantId): UpdatePaymentMean
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
     * @return UpdatePaymentMean
     */
    public function setMerchantWalletId(?string $merchantWalletId
    ): UpdatePaymentMean {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanAlias(): ?string
    {
        return $this->paymentMeanAlias;
    }

    /**
     * @param string|null $paymentMeanAlias
     *
     * @return UpdatePaymentMean
     */
    public function setPaymentMeanAlias(?string $paymentMeanAlias
    ): UpdatePaymentMean {
        $this->paymentMeanAlias = $paymentMeanAlias;

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
     * @return UpdatePaymentMean
     */
    public function setPaymentMeanId(?string $paymentMeanId): UpdatePaymentMean
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
     * @return UpdatePaymentMean
     */
    public function setSeal(?string $seal): UpdatePaymentMean
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
     * @return UpdatePaymentMean
     */
    public function setSealAlgorithm(?string $sealAlgorithm): UpdatePaymentMean
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
    
}
