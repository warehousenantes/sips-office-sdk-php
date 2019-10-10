<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class DeletePaymentMeanResponse
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class DeletePaymentMeanResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $walletActionDateTime;

    /**
     * @var null|string
     */
    protected $walletResponseCode;

    /**
     * @var null|string
     */
    protected $errorFieldName;

    /**
     * @var null|string
     */
    protected $seal;

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
     * @return DeletePaymentMeanResponse
     */
    public function setWalletActionDateTime(?string $walletActionDateTime
    ): DeletePaymentMeanResponse {
        $this->walletActionDateTime = $walletActionDateTime;

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
     * @return DeletePaymentMeanResponse
     */
    public function setWalletResponseCode(?string $walletResponseCode
    ): DeletePaymentMeanResponse {
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
     * @return DeletePaymentMeanResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): DeletePaymentMeanResponse {
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
     * @return DeletePaymentMeanResponse
     */
    public function setSeal(?string $seal): DeletePaymentMeanResponse
    {
        $this->seal = $seal;

        return $this;
    }
    
}
