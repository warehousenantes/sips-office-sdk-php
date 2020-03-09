<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class UpdatePaymentMeanResponse
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class UpdatePaymentMeanResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $walletActionDateTime;
    
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
     * @return UpdatePaymentMeanResponse
     */
    public function setWalletActionDateTime(?string $walletActionDateTime
    ): UpdatePaymentMeanResponse {
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
     * @return UpdatePaymentMeanResponse
     */
    public function setWalletResponseCode(?string $walletResponseCode
    ): UpdatePaymentMeanResponse {
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
     * @return UpdatePaymentMeanResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): UpdatePaymentMeanResponse {
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
     * @return UpdatePaymentMeanResponse
     */
    public function setSeal(?string $seal): UpdatePaymentMeanResponse
    {
        $this->seal = $seal;

        return $this;
    }
    
}
