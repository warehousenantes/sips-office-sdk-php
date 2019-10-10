<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class SignOffResponse
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class SignOffResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $walletActionDateTime;
    
    /**
     * @var null|string
     */
    protected $walletOrderResponseCode;
    
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
     * @return SignOffResponse
     */
    public function setWalletActionDateTime(?string $walletActionDateTime
    ): SignOffResponse {
        $this->walletActionDateTime = $walletActionDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWalletOrderResponseCode(): ?string
    {
        return $this->walletOrderResponseCode;
    }

    /**
     * @param string|null $walletOrderResponseCode
     *
     * @return SignOffResponse
     */
    public function setWalletOrderResponseCode(?string $walletOrderResponseCode
    ): SignOffResponse {
        $this->walletOrderResponseCode = $walletOrderResponseCode;

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
     * @return SignOffResponse
     */
    public function setErrorFieldName(?string $errorFieldName): SignOffResponse
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
     * @return SignOffResponse
     */
    public function setSeal(?string $seal): SignOffResponse
    {
        $this->seal = $seal;

        return $this;
    }
    
}
