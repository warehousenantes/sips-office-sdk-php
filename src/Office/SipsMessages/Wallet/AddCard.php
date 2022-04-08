<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Wallet;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class AddCard.
 */
class AddCard extends SipsMessage
{
    private string $serviceUrl;

    private ?string $merchantId = null;

    private ?string $interfaceVersion = null;

    private ?string $cardNumber = null;

    private ?string $cardExpiryDate = null;

    private ?string $merchantWalletId = null;

    private ?string $paymentMeanAlias = null;

    private ?string $paymentMeanBrand = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $seal = null;

    private ?int $keyVersion = null;

    private ?string $sealAlgorithm = null;

    /**
     * AddCard constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/wallet/addCard';
        $this->setInterfaceVersion('WR_WS_2.27');
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
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

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    public function setCardExpiryDate(?string $cardExpiryDate): self
    {
        $this->cardExpiryDate = $cardExpiryDate;

        return $this;
    }

    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    public function setMerchantWalletId(?string $merchantWalletId): self
    {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    public function getPaymentMeanAlias(): ?string
    {
        return $this->paymentMeanAlias;
    }

    public function setPaymentMeanAlias(?string $paymentMeanAlias): self
    {
        $this->paymentMeanAlias = $paymentMeanAlias;

        return $this;
    }

    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    public function setPaymentMeanBrand(?string $paymentMeanBrand): self
    {
        $this->paymentMeanBrand = $paymentMeanBrand;

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
}
