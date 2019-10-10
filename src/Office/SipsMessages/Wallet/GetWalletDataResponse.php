<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetWalletDataResponse
 * @package Worldline\Sips\Office\Common\SipsMessages\Wallet
 */
class GetWalletDataResponse extends SipsMessage
{

    /**
     * @var null|string
     */
    protected $walletCreationDateTime;
    
    /**
     * @var null|string
     */
    protected $walletLAstActionDateTime;
    
    /**
     * @var null|string
     */
    protected $walletResponseCode;
    
    /**
     * @var null|array
     */
    protected $walletPaymentMeanDataList;
    
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
    public function getWalletCreationDateTime(): ?string
    {
        return $this->walletCreationDateTime;
    }

    /**
     * @param string|null $walletCreationDateTime
     *
     * @return GetWalletDataResponse
     */
    public function setWalletCreationDateTime(?string $walletCreationDateTime
    ): GetWalletDataResponse {
        $this->walletCreationDateTime = $walletCreationDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWalletLAstActionDateTime(): ?string
    {
        return $this->walletLAstActionDateTime;
    }

    /**
     * @param string|null $walletLAstActionDateTime
     *
     * @return GetWalletDataResponse
     */
    public function setWalletLAstActionDateTime(
        ?string $walletLAstActionDateTime
    ): GetWalletDataResponse {
        $this->walletLAstActionDateTime = $walletLAstActionDateTime;

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
     * @return GetWalletDataResponse
     */
    public function setWalletResponseCode(?string $walletResponseCode
    ): GetWalletDataResponse {
        $this->walletResponseCode = $walletResponseCode;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getWalletPaymentMeanDataList(): ?array
    {
        return $this->walletPaymentMeanDataList;
    }

    /**
     * @param array|null $walletPaymentMeanDataList
     *
     * @return GetWalletDataResponse
     */
    public function setWalletPaymentMeanDataList(
        ?array $walletPaymentMeanDataList
    ): GetWalletDataResponse {
        $this->walletPaymentMeanDataList = $walletPaymentMeanDataList;

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
     * @return GetWalletDataResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): GetWalletDataResponse {
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
     * @return GetWalletDataResponse
     */
    public function setSeal(?string $seal): GetWalletDataResponse
    {
        $this->seal = $seal;

        return $this;
    }
    
}
