<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetPaymentMeanDataResponse
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class GetPaymentMeanDataResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $errorFieldName;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|array
     */
    private $walletPaymentMeanData;
    
    /**
     * @var null|string
     */
    private $walletResponseCode;
    
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
     * @return GetPaymentMeanDataResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): GetPaymentMeanDataResponse {
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
     * @return GetPaymentMeanDataResponse
     */
    public function setSeal(?string $seal): GetPaymentMeanDataResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getWalletPaymentMeanData(): ?array
    {
        return $this->walletPaymentMeanData;
    }

    /**
     * @param array|null $walletPaymentMeanData
     *
     * @return GetPaymentMeanDataResponse
     */
    public function setWalletPaymentMeanData(?array $walletPaymentMeanData
    ): GetPaymentMeanDataResponse {
        $this->walletPaymentMeanData = $walletPaymentMeanData;

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
     * @return GetPaymentMeanDataResponse
     */
    public function setWalletResponseCode(?string $walletResponseCode
    ): GetPaymentMeanDataResponse {
        $this->walletResponseCode = $walletResponseCode;

        return $this;
    }
    
}
