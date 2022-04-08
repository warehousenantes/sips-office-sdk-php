<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\CashManagement;

use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class Validate.
 */
class Validate extends SipsMessage
{
    private string $serviceUrl;

    private ?int $operationAmount = null;

    private ?string $currencyCode = null;

    private ?string $merchantId = null;

    private ?string $interfaceVersion = null;

    private ?string $transactionReference = null;

    private ?string $operationOrigin = null;

    private ?string $lastRecoveryIndicator = null;

    private ?S10TransactionReference $s10TransactionReference = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $seal = null;

    private ?int $keyVersion = null;

    private ?string $sealAlgorithm = null;

    private ?string $subMerchantId = null;

    private ?string $subMerchantShortName = null;

    private ?string $subMerchantCategoryCode = null;

    private ?string $subMerchantLegalId = null;

    private ?Address $subMerchantAddress = null;

    /**
     * Validate constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/cashManagement/validate';
        $this->setInterfaceVersion('CR_WS_2.27')
            ->setTransactionReference($this->generateReference());
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

    public function setTransactionReference(?string $transactionReference): self
    {
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

    public function getLastRecoveryIndicator(): ?string
    {
        return $this->lastRecoveryIndicator;
    }

    public function setLastRecoveryIndicator(?string $lastRecoveryIndicator): self
    {
        $this->lastRecoveryIndicator = $lastRecoveryIndicator;

        return $this;
    }

    public function getS10TransactionReference(): ?S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    public function setS10TransactionReference(?S10TransactionReference $s10TransactionReference): self
    {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    public function getIntermediateServiceProviderId(): ?string
    {
        return $this->intermediateServiceProviderId;
    }

    public function setIntermediateServiceProviderId(?string $intermediateServiceProviderId): self
    {
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

    public function getSubMerchantId(): ?string
    {
        return $this->subMerchantId;
    }

    public function setSubMerchantId(?string $subMerchantId): self
    {
        $this->subMerchantId = $subMerchantId;

        return $this;
    }

    public function getSubMerchantShortName(): ?string
    {
        return $this->subMerchantShortName;
    }

    public function setSubMerchantShortName(?string $subMerchantShortName): self
    {
        $this->subMerchantShortName = $subMerchantShortName;

        return $this;
    }

    public function getSubMerchantCategoryCode(): ?string
    {
        return $this->subMerchantCategoryCode;
    }

    public function setSubMerchantCategoryCode(?string $subMerchantCategoryCode): self
    {
        $this->subMerchantCategoryCode = $subMerchantCategoryCode;

        return $this;
    }

    public function getSubMerchantLegalId(): ?string
    {
        return $this->subMerchantLegalId;
    }

    public function setSubMerchantLegalId(?string $subMerchantLegalId): self
    {
        $this->subMerchantLegalId = $subMerchantLegalId;

        return $this;
    }

    public function getSubMerchantAddress(): ?Address
    {
        return $this->subMerchantAddress;
    }

    public function setSubMerchantAddress(?Address $subMerchantAddress): self
    {
        $this->subMerchantAddress = $subMerchantAddress;

        return $this;
    }
}
