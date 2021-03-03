<?php


namespace Worldline\Sips\Office\SipsMessages\Diagnostic;


use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetTransactionData
 * @package Worldline\Sips\Office\SipsMessages\Diagnostic
 */
class GetTransactionData extends SipsMessage
{
    
    /**
     * @var string
     */
    private $serviceUrl;
    
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
    private $transactionReference;
    
    /**
     * @var null|S10TransactionReference
     */
    private $s10TransactionReference;
    
    /**
     * @var null|string
     */
    private $intermediateServiceProviderId;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|string
     */
    private $keyVersion;
    
    /**
     * @var null|string
     */
    private $sealAlgorithm;

    /**
     * GetTransactionData constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/diagnostic/getTransactionData";
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
     * @return GetTransactionData
     */
    public function setMerchantId(?string $merchantId): GetTransactionData
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
     * @return GetTransactionData
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): GetTransactionData {
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
     * @return GetTransactionData
     */
    public function setTransactionReference(?string $transactionReference
    ): GetTransactionData {
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
     * @return GetTransactionData
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): GetTransactionData {
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
     * @return GetTransactionData
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): GetTransactionData {
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
     * @return GetTransactionData
     */
    public function setSeal(?string $seal): GetTransactionData
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
     * @return GetTransactionData
     */
    public function setKeyVersion(?string $keyVersion): GetTransactionData
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
     * @return GetTransactionData
     */
    public function setSealAlgorithm(?string $sealAlgorithm): GetTransactionData
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

}
