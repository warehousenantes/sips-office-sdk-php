<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentProviderFinalize
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class PaymentProviderFinalize extends SipsMessage
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
    private $transactionReference;
    
    /**
     * @var null|string
     */
    private $interfaceVersion;
    
    /**
     * @var null|string
     */
    private $redirectionData;
    
    /**
     * @var null|string
     */
    private $messageVersion;
    
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
     * PaymentProviderFinalize constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/paymentProviderFinalize";
        $this->setInterfaceVersion("IR_WS_2.27");
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
     * @return PaymentProviderFinalize
     */
    public function setMerchantId(?string $merchantId): PaymentProviderFinalize
    {
        $this->merchantId = $merchantId;

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
     * @return PaymentProviderFinalize
     */
    public function setTransactionReference(?string $transactionReference
    ): PaymentProviderFinalize {
        $this->transactionReference = $transactionReference;

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
     * @return PaymentProviderFinalize
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): PaymentProviderFinalize {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionData(): ?string
    {
        return $this->redirectionData;
    }

    /**
     * @param string|null $redirectionData
     *
     * @return PaymentProviderFinalize
     */
    public function setRedirectionData(?string $redirectionData
    ): PaymentProviderFinalize {
        $this->redirectionData = $redirectionData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessageVersion(): ?string
    {
        return $this->messageVersion;
    }

    /**
     * @param string|null $messageVersion
     *
     * @return PaymentProviderFinalize
     */
    public function setMessageVersion(?string $messageVersion
    ): PaymentProviderFinalize {
        $this->messageVersion = $messageVersion;

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
     * @return PaymentProviderFinalize
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): PaymentProviderFinalize {
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
     * @return PaymentProviderFinalize
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): PaymentProviderFinalize {
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
     * @return PaymentProviderFinalize
     */
    public function setSeal(?string $seal): PaymentProviderFinalize
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
     * @return PaymentProviderFinalize
     */
    public function setKeyVersion(?string $keyVersion): PaymentProviderFinalize
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
     * @return PaymentProviderFinalize
     */
    public function setSealAlgorithm(?string $sealAlgorithm
    ): PaymentProviderFinalize {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
    
}
