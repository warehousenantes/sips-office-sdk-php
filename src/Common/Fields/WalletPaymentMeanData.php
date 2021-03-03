<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class WalletPaymentMeanData
 * @package Worldline\Sips\Common\Fields
 */
class WalletPaymentMeanData extends Field
{
    /**
     * @var null| string
     */
    private $paymentMeanId;
    /**
     * @var null| string
     */
    private $maskedPan;
    /**
     * @var null| string
     */
    private $paymentMeanAlias;
    /**
     * @var null| string
     */
    private $panExpiryDate;
    /**
     * @var null| string
     */
    private $paymentMeanBrand;
    /**
     * @var null| string
     */
    private $transactionActors;
    /**
     * @var null| PspData
     */
    private $pspData;
    /**
     * @var null| string
     */
    private $mandateId;
    /**
     * @var null| string
     */
    private $issuerWalletId;
    /**
     * @var null| string
     */
    private $issuerWalletType;

    /**
     * @return string|null
     */
    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    /**
     * @param string|null $paymentMeanId
     * @return WalletPaymentMeanData
     */
    public function setPaymentMeanId(?string $paymentMeanId): WalletPaymentMeanData
    {
        $this->paymentMeanId = $paymentMeanId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @param string|null $maskedPan
     * @return WalletPaymentMeanData
     */
    public function setMaskedPan(?string $maskedPan): WalletPaymentMeanData
    {
        $this->maskedPan = $maskedPan;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanAlias(): ?string
    {
        return $this->paymentMeanAlias;
    }

    /**
     * @param string|null $paymentMeanAlias
     * @return WalletPaymentMeanData
     */
    public function setPaymentMeanAlias(?string $paymentMeanAlias): WalletPaymentMeanData
    {
        $this->paymentMeanAlias = $paymentMeanAlias;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    /**
     * @param string|null $panExpiryDate
     * @return WalletPaymentMeanData
     */
    public function setPanExpiryDate(?string $panExpiryDate): WalletPaymentMeanData
    {
        $this->panExpiryDate = $panExpiryDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @param string|null $paymentMeanBrand
     * @return WalletPaymentMeanData
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand): WalletPaymentMeanData
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    /**
     * @param string|null $transactionActors
     * @return WalletPaymentMeanData
     */
    public function setTransactionActors(?string $transactionActors): WalletPaymentMeanData
    {
        $this->transactionActors = $transactionActors;
        return $this;
    }

    /**
     * @return PspData|null
     */
    public function getPspData(): ?PspData
    {
        return $this->pspData;
    }

    /**
     * @param PspData|null $pspData
     * @return WalletPaymentMeanData
     */
    public function setPspData(?PspData $pspData): WalletPaymentMeanData
    {
        $this->pspData = $pspData;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    /**
     * @param string|null $mandateId
     * @return WalletPaymentMeanData
     */
    public function setMandateId(?string $mandateId): WalletPaymentMeanData
    {
        $this->mandateId = $mandateId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerWalletId(): ?string
    {
        return $this->issuerWalletId;
    }

    /**
     * @param string|null $issuerWalletId
     * @return WalletPaymentMeanData
     */
    public function setIssuerWalletId(?string $issuerWalletId): WalletPaymentMeanData
    {
        $this->issuerWalletId = $issuerWalletId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerWalletType(): ?string
    {
        return $this->issuerWalletType;
    }

    /**
     * @param string|null $issuerWalletType
     * @return WalletPaymentMeanData
     */
    public function setIssuerWalletType(?string $issuerWalletType): WalletPaymentMeanData
    {
        $this->issuerWalletType = $issuerWalletType;
        return $this;
    }


}