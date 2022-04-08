<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\CashManagement;

use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class Cancel.
 */
class Cancel extends SipsMessage
{
    private string $serviceUrl;

    private ?int $operationAmount = null;

    private ?string $currencyCode = null;

    private ?string $merchantId = null;

    private ?string $interfaceVersion = null;

    private ?string $transactionReference = null;

    private ?string $operationOrigin = null;

    private ?S10TransactionReference $s10TransactionReference = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $seal = null;

    private ?int $keyVersion = null;

    private ?string $sealAlgorithm = null;

    private ?Contact $customerContact = null;

    /**
     * Cancel constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/cashManagement/cancel';
        $this->setInterfaceVersion('CR_WS_2.27');
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function getOperationAmount(): ?int
    {
        return $this->operationAmount;
    }

    public function setOperationAmount(?int $operationAmount): self
    {
        $this->operationAmount = $operationAmount;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    public function setInterfaceVersion(?string $interfaceVersion): self
    {
        $this->interfaceVersion = $interfaceVersion;

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

    public function getOperationOrigin(): ?string
    {
        return $this->operationOrigin;
    }

    public function setOperationOrigin(?string $operationOrigin): self
    {
        $this->operationOrigin = $operationOrigin;

        return $this;
    }

    public function getS10TransactionReference(
    ): ?S10TransactionReference {
        return $this->s10TransactionReference;
    }

    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): self {
        $this->s10TransactionReference = $s10TransactionReference;

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

    public function getKeyVersion(): ?int
    {
        return $this->keyVersion;
    }

    public function setKeyVersion(?int $keyVersion): self
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    public function setSealAlgorithm(?string $sealAlgorithm): self
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    public function getCustomerContact(): ?Contact
    {
        return $this->customerContact;
    }

    public function setCustomerContact(
        ?Contact $customerContact
    ): self {
        $this->customerContact = $customerContact;

        return $this;
    }
}
