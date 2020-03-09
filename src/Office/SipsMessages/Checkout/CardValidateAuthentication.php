<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardValidateAuthentication
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardValidateAuthentication extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;

    /**
     * @var null|string
     */
    private $interfaceVersion;

    /**
     * @var null|string
     */
    private $messageVersion;

    /**
     * @var null|string
     */
    private $merchantId;

    /**
     * @var null|string
     */
    private $redirectionData;

    /**
     * @var null|string
     */
    private $transactionReference;

    /**
     * @var null|string
     */
    private $s10TransactionReference;

    /**
     * @var null|string
     */
    private $paResMessage;

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
     * CardValidateAuthentication constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/cardValidateAuthentication";
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
     * @return cardValidateAuthentication
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setMessageVersion(?string $messageVersion
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setMerchantId(?string $merchantId
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setRedirectionData(?string $redirectionData
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setTransactionReference(?string $transactionReference
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setS10TransactionReference(?string $s10TransactionReference
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setPaResMessage(?string $paResMessage
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setSeal(?string $seal): cardValidateAuthentication
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
     * @return cardValidateAuthentication
     */
    public function setKeyVersion(?string $keyVersion
    ): cardValidateAuthentication {
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
     * @return cardValidateAuthentication
     */
    public function setSealAlgorithm(?string $sealAlgorithm
    ): cardValidateAuthentication {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

}
