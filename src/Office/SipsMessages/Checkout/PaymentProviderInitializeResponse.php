<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentProviderInitializeResponse
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class PaymentProviderInitializeResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $responseCode;

    /**
     * @var null|string
     */
    private $redirectionUrl;

    /**
     * @var null|string
     */
    private $redirectionData;

    /**
     * @var null|string
     */
    private $messageVersion;

    /**
     * @var null|string
     */
    private $paymentProviderSessionId;

    /**
     * @var null|string
     */
    private $outerRedirectionUrl;

    /**
     * @var null|string
     */
    private $acquirerNativeResponseCode;

    /**
     * @var null|string
     */
    private $acquirerResponseIdentifier;

    /**
     * @var null|string
     */
    private $acquirerResponseMessage;

    /**
     * @var null|string
     */
    private $seal;

    /**
     * @var null|string
     */
    private $errorFieldName;

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @param string|null $responseCode
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setResponseCode(?string $responseCode
    ): PaymentProviderInitializeResponse {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionUrl(): ?string
    {
        return $this->redirectionUrl;
    }

    /**
     * @param string|null $redirectionUrl
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setRedirectionUrl(?string $redirectionUrl
    ): PaymentProviderInitializeResponse {
        $this->redirectionUrl = $redirectionUrl;

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
     * @return PaymentProviderInitializeResponse
     */
    public function setRedirectionData(?string $redirectionData
    ): PaymentProviderInitializeResponse {
        $this->redirectionData = $redirectionData;

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
     * @return PaymentProviderInitializeResponse
     */
    public function setMessageVersion(?string $messageVersion
    ): PaymentProviderInitializeResponse {
        $this->messageVersion = $messageVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentProviderSessionId(): ?string
    {
        return $this->paymentProviderSessionId;
    }

    /**
     * @param string|null $paymentProviderSessionId
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setPaymentProviderSessionId(
        ?string $paymentProviderSessionId
    ): PaymentProviderInitializeResponse {
        $this->paymentProviderSessionId = $paymentProviderSessionId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOuterRedirectionUrl(): ?string
    {
        return $this->outerRedirectionUrl;
    }

    /**
     * @param string|null $outerRedirectionUrl
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setOuterRedirectionUrl(?string $outerRedirectionUrl
    ): PaymentProviderInitializeResponse {
        $this->outerRedirectionUrl = $outerRedirectionUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    /**
     * @param string|null $acquirerNativeResponseCode
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setAcquirerNativeResponseCode(
        ?string $acquirerNativeResponseCode
    ): PaymentProviderInitializeResponse {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    /**
     * @param string|null $acquirerResponseIdentifier
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setAcquirerResponseIdentifier(
        ?string $acquirerResponseIdentifier
    ): PaymentProviderInitializeResponse {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    /**
     * @param string|null $acquirerResponseMessage
     *
     * @return PaymentProviderInitializeResponse
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage
    ): PaymentProviderInitializeResponse {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

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
     * @return PaymentProviderInitializeResponse
     */
    public function setSeal(?string $seal): PaymentProviderInitializeResponse
    {
        $this->seal = $seal;

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
     * @return PaymentProviderInitializeResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): PaymentProviderInitializeResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
