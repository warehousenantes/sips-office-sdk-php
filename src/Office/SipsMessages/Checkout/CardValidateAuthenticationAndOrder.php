<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardValidateAuthenticationAndOrder
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardValidateAuthenticationAndOrder extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;
    
    /**
     * @var null|string
     */
    protected $interfaceVersion="";
    
    /**
     * @var null|string
     */
    protected $messageVersion="";
    
    /**
     * @var null|string
     */
    protected $merchantId="";
    
    /**
     * @var null|string
     */
    protected $redirectionData="";
    
    /**
     * @var null|string
     */
    protected $transactionReference="";
    
    /**
     * @var null|string
     */
    protected $s10TransactionReference="";
    
    /**
     * @var null|string
     */
    protected $paResMessage="";
    
    /**
     * @var null|string
     */
    protected $intermediateServiceProviderId="";
    
    /**
     * @var null|string
     */
    protected $seal="";
    
    /**
     * @var null|string
     */
    protected $keyVersion="";
    
    /**
     * @var null|string
     */
    protected $sealAlgorithm="";

    /**
     * CardValidateAuthenticationAndOrder constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/cardValidateAuthenticationAndOrder";
        $this->setInterfaceVersion("IR_WS_2.27");
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
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     * @param string|null $interfaceVersion
     *
     * @return CardValidateAuthenticationAndOrder
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): CardValidateAuthenticationAndOrder {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessageVersion(): ?string
    {
        return $this->messageVersion;
    }

    /**
     * @param string|null $messageVersion
     *
     * @return CardValidateAuthenticationAndOrder
     */
    public function setMessageVersion(?string $messageVersion
    ): CardValidateAuthenticationAndOrder {
        $this->messageVersion = $messageVersion;

        return $this;
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
     * @return CardValidateAuthenticationAndOrder
     */
    public function setMerchantId(?string $merchantId
    ): CardValidateAuthenticationAndOrder {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionData(): ?string
    {
        return $this->redirectionData;
    }

    /**
     * @param string|null $redirectionData
     *
     * @return CardValidateAuthenticationAndOrder
     */
    public function setRedirectionData(?string $redirectionData
    ): CardValidateAuthenticationAndOrder {
        $this->redirectionData = $redirectionData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * @param string|null $transactionReference
     *
     * @return CardValidateAuthenticationAndOrder
     */
    public function setTransactionReference(?string $transactionReference
    ): CardValidateAuthenticationAndOrder {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getS10TransactionReference(): ?string
    {
        return $this->s10TransactionReference;
    }

    /**
     * @param string|null $s10TransactionReference
     *
     * @return CardValidateAuthenticationAndOrder
     */
    public function setS10TransactionReference(?string $s10TransactionReference
    ): CardValidateAuthenticationAndOrder {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaResMessage(): ?string
    {
        return $this->paResMessage;
    }

    /**
     * @param string|null $paResMessage
     *
     * @return CardValidateAuthenticationAndOrder
     */
    public function setPaResMessage(?string $paResMessage
    ): CardValidateAuthenticationAndOrder {
        $this->paResMessage = $paResMessage;

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
     * @return CardValidateAuthenticationAndOrder
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): CardValidateAuthenticationAndOrder {
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
     * @return CardValidateAuthenticationAndOrder
     */
    public function setSeal(?string $seal): CardValidateAuthenticationAndOrder
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
     * @return CardValidateAuthenticationAndOrder
     */
    public function setKeyVersion(?string $keyVersion
    ): CardValidateAuthenticationAndOrder {
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
     * @return CardValidateAuthenticationAndOrder
     */
    public function setSealAlgorithm(?string $sealAlgorithm
    ): CardValidateAuthenticationAndOrder {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

}
