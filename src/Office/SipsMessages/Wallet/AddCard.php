<?php


namespace Worldline\Sips\Office\SipsMessages\Wallet;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class AddCard
 * @package Worldline\Sips\Office\SipsMessages\Wallet
 */
class AddCard extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;
    
    /**
     * @var null|string
     */
    private $merchantId;
    
    /**
     * @var null|string
     */
    private $interfaceVersion;
    
    /**
     * @var null|string
     */
    private $cardNumber;
    
    /**
     * @var null|string
     */
    private $cardExpiryDate;
    
    /**
     * @var null|string
     */
    private $merchantWalletId;
    
    /**
     * @var null|string
     */
    private $paymentMeanAlias;
    
    /**
     * @var null|string
     */
    private $paymentMeanBrand;
    
    /**
     * @var null|string
     */
    private $intermediateServiceProviderId;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|string
     */
    private $keyVersion;
    
    /**
     * @var null|string
     */
    private $sealAlgorithm;

    /**
     * AddCard constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/wallet/addCard";
        $this->setInterfaceVersion("WR_WS_2.27");
    }

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $merchantId
     *
     * @return AddCard
     */
    public function setMerchantId(?string $merchantId): AddCard
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     * @param string|null $interfaceVersion
     *
     * @return AddCard
     */
    public function setInterfaceVersion(?string $interfaceVersion): AddCard
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param string|null $cardNumber
     *
     * @return AddCard
     */
    public function setCardNumber(?string $cardNumber): AddCard
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    /**
     * @param string|null $cardExpiryDate
     *
     * @return AddCard
     */
    public function setCardExpiryDate(?string $cardExpiryDate): AddCard
    {
        $this->cardExpiryDate = $cardExpiryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    /**
     * @param string|null $merchantWalletId
     *
     * @return AddCard
     */
    public function setMerchantWalletId(?string $merchantWalletId): AddCard
    {
        $this->merchantWalletId = $merchantWalletId;

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
     *
     * @return AddCard
     */
    public function setPaymentMeanAlias(?string $paymentMeanAlias): AddCard
    {
        $this->paymentMeanAlias = $paymentMeanAlias;

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
     *
     * @return AddCard
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand): AddCard
    {
        $this->paymentMeanBrand = $paymentMeanBrand;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntermediateServiceProviderId(): ?string
    {
        return $this->intermediateServiceProviderId;
    }

    /**
     * @param string|null $intermediateServiceProviderId
     *
     * @return AddCard
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): AddCard {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

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
     * @return AddCard
     */
    public function setSeal(?string $seal): AddCard
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    /**
     * @param string|null $keyVersion
     *
     * @return AddCard
     */
    public function setKeyVersion(?string $keyVersion): AddCard
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    /**
     * @param string|null $sealAlgorithm
     *
     * @return AddCard
     */
    public function setSealAlgorithm(?string $sealAlgorithm): AddCard
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

}
