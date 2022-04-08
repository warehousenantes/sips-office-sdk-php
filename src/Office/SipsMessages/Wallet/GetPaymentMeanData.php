<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Wallet;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetPaymentMeanData.
 */
class GetPaymentMeanData extends SipsMessage
{
    private string $serviceUrl;

    private ?string $keyVersion = null;

    private ?string $merchantId = null;

    private ?string $interfaceVersion = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $merchantWalletId = null;

    private ?string $paymentMeanId = null;

    private ?string $seal = null;

    private ?string $sealAlgorithm = null;

    /**
     * GetPaymentMean constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/wallet/getPaymentMeanData';
        $this->setInterfaceVersion('WR_WS_2.27');
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
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

    public function setInterfaceVersion(
        ?string $interfaceVersion
    ): self {
        $this->interfaceVersion = $interfaceVersion;

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

    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    public function setMerchantWalletId(
        ?string $merchantWalletId
    ): self {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    public function setPaymentMeanId(?string $paymentMeanId): self
    {
        $this->paymentMeanId = $paymentMeanId;

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

    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    public function setSealAlgorithm(?string $sealAlgorithm): self
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }
}
