<?php


namespace Worldline\Sips\Office\SipsMessages\Diagnostic;


use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetFraudData
 * @package Worldline\Sips\Office\SipsMessages\Diagnostic
 */
class GetFraudData extends SipsMessage
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
    protected $transactionReference;
    
     /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;
    
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
     * GetFraudData constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/diagnostic/getFraudData";
        $this->setInterfaceVersion("DR_WS_2.27");
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
     * @return GetFraudData
     */
    public function setMerchantId(?string $merchantId): GetFraudData
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
     * @return GetFraudData
     */
    public function setInterfaceVersion(?string $interfaceVersion): GetFraudData
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * @param string|null $transactionReference
     *
     * @return GetFraudData
     */
    public function setTransactionReference(?string $transactionReference
    ): GetFraudData {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * @return S10TransactionReference|null
     */
    public function getS10TransactionReference(
    ): ?S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    /**
     * @param S10TransactionReference|null $s10TransactionReference
     *
     * @return GetFraudData
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): GetFraudData {
        $this->s10TransactionReference = $s10TransactionReference;

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
     * @return GetFraudData
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): GetFraudData {
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
     * @return GetFraudData
     */
    public function setSeal(?string $seal): GetFraudData
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
     * @return GetFraudData
     */
    public function setKeyVersion(?string $keyVersion): GetFraudData
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
     * @return GetFraudData
     */
    public function setSealAlgorithm(?string $sealAlgorithm): GetFraudData
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

}
