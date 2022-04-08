<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardValidateAuthentication.
 */
class CardValidateAuthentication extends SipsMessage
{
    private string $serviceUrl;

    private ?string $interfaceVersion = null;

    private ?string $messageVersion = null;

    private ?string $merchantId = null;

    private ?string $redirectionData = null;

    private ?string $transactionReference = null;

    private ?string $s10TransactionReference = null;

    private ?string $paResMessage = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $seal = null;

    private ?string $keyVersion = null;

    private ?string $sealAlgorithm = null;

    /**
     * CardValidateAuthentication constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/checkout/cardValidateAuthentication';
        $this->setInterfaceVersion('IR_WS_2.27');
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    public function setInterfaceVersion(
        ?string $interfaceVersion
    ): self {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    public function getMessageVersion(): ?string
    {
        return $this->messageVersion;
    }

    public function setMessageVersion(
        ?string $messageVersion
    ): self {
        $this->messageVersion = $messageVersion;

        return $this;
    }

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(
        ?string $merchantId
    ): self {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getRedirectionData(): ?string
    {
        return $this->redirectionData;
    }

    public function setRedirectionData(
        ?string $redirectionData
    ): self {
        $this->redirectionData = $redirectionData;

        return $this;
    }

    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(
        ?string $transactionReference
    ): self {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    public function getS10TransactionReference(): ?string
    {
        return $this->s10TransactionReference;
    }

    public function setS10TransactionReference(
        ?string $s10TransactionReference
    ): self {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    public function getPaResMessage(): ?string
    {
        return $this->paResMessage;
    }

    public function setPaResMessage(
        ?string $paResMessage
    ): self {
        $this->paResMessage = $paResMessage;

        return $this;
    }

    public function getIntermediateServiceProviderId(): ?string
    {
        return $this->intermediateServiceProviderId;
    }

    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): self {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    public function setKeyVersion(?string $keyVersion): self
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    public function setSealAlgorithm(
        ?string $sealAlgorithm
    ): self {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
}
