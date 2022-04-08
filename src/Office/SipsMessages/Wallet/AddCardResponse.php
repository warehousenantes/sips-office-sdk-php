<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Wallet;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class AddCardResponse.
 */
class AddCardResponse extends SipsMessage
{
    private ?string $walletActionDateTime = null;

    private ?string $paymentMeanId = null;

    private ?string $maskedPan = null;

    private ?string $walletResponseCode = null;

    private ?string $errorFieldName = null;

    private ?string $seal = null;

    public function getWalletActionDateTime(): ?string
    {
        return $this->walletActionDateTime;
    }

    public function setWalletActionDateTime(
        ?string $walletActionDateTime
    ): self {
        $this->walletActionDateTime = $walletActionDateTime;

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

    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    public function setMaskedPan(?string $maskedPan): self
    {
        $this->maskedPan = $maskedPan;

        return $this;
    }

    public function getWalletResponseCode(): ?string
    {
        return $this->walletResponseCode;
    }

    public function setWalletResponseCode(
        ?string $walletResponseCode
    ): self {
        $this->walletResponseCode = $walletResponseCode;

        return $this;
    }

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(?string $errorFieldName): self
    {
        $this->errorFieldName = $errorFieldName;

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
}
