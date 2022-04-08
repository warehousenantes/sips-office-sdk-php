<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class WalletPaymentMeanData.
 */
class WalletPaymentMeanData extends Field
{
    private ?string $paymentMeanId = null;

    private ?string $maskedPan = null;

    private ?string $paymentMeanAlias = null;

    private ?string $panExpiryDate = null;

    private ?string $paymentMeanBrand = null;

    private ?string $transactionActors = null;

    private ?PspData $pspData = null;

    private ?string $mandateId = null;

    private ?string $issuerWalletId = null;

    private ?string $issuerWalletType = null;

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

    public function getPaymentMeanAlias(): ?string
    {
        return $this->paymentMeanAlias;
    }

    public function setPaymentMeanAlias(?string $paymentMeanAlias): self
    {
        $this->paymentMeanAlias = $paymentMeanAlias;

        return $this;
    }

    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    public function setPanExpiryDate(?string $panExpiryDate): self
    {
        $this->panExpiryDate = $panExpiryDate;

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

    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    public function setTransactionActors(?string $transactionActors): self
    {
        $this->transactionActors = $transactionActors;

        return $this;
    }

    public function getPspData(): ?PspData
    {
        return $this->pspData;
    }

    public function setPspData(?PspData $pspData): self
    {
        $this->pspData = $pspData;

        return $this;
    }

    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    public function setMandateId(?string $mandateId): self
    {
        $this->mandateId = $mandateId;

        return $this;
    }

    public function getIssuerWalletId(): ?string
    {
        return $this->issuerWalletId;
    }

    public function setIssuerWalletId(?string $issuerWalletId): self
    {
        $this->issuerWalletId = $issuerWalletId;

        return $this;
    }

    public function getIssuerWalletType(): ?string
    {
        return $this->issuerWalletType;
    }

    public function setIssuerWalletType(?string $issuerWalletType): self
    {
        $this->issuerWalletType = $issuerWalletType;

        return $this;
    }
}
