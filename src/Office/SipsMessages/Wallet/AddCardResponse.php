<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class AddCardResponse
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class AddCardResponse extends SipsMessage
{
    
    /**
     * @var null|string
     */
    private $walletActionDateTime;

    /**
     * @var null|string
     */
    private $paymentMeanId;

    /**
     * @var null|string
     */
    private $maskedPan;

    /**
     * @var null|string
     */
    private $walletResponseCode;

    /**
     * @var null|string
     */
    private $errorFieldName;

    /**
     * @var null|string
     */
    private $seal;

    /**
     * @return string|null
     */
    public function getWalletActionDateTime(): ?string
    {
        return $this->walletActionDateTime;
    }

    /**
     * @param string|null $walletActionDateTime
     *
     * @return AddCardResponse
     */
    public function setWalletActionDateTime(?string $walletActionDateTime
    ): AddCardResponse {
        $this->walletActionDateTime = $walletActionDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    /**
     * @param string|null $paymentMeanId
     *
     * @return AddCardResponse
     */
    public function setPaymentMeanId(?string $paymentMeanId): AddCardResponse
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
     *
     * @return AddCardResponse
     */
    public function setMaskedPan(?string $maskedPan): AddCardResponse
    {
        $this->maskedPan = $maskedPan;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWalletResponseCode(): ?string
    {
        return $this->walletResponseCode;
    }

    /**
     * @param string|null $walletResponseCode
     *
     * @return AddCardResponse
     */
    public function setWalletResponseCode(?string $walletResponseCode
    ): AddCardResponse {
        $this->walletResponseCode = $walletResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    /**
     * @param string|null $errorFieldName
     *
     * @return AddCardResponse
     */
    public function setErrorFieldName(?string $errorFieldName): AddCardResponse
    {
        $this->errorFieldName = $errorFieldName;

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
     * @return AddCardResponse
     */
    public function setSeal(?string $seal): AddCardResponse
    {
        $this->seal = $seal;

        return $this;
    }
    
}
