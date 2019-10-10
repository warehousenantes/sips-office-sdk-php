<?php


namespace Worldline\Sips\Paypage\SipsMessages;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentInitResponse
 * @package Worldline\Sips\Paypage\SipsMessages
 */
class PaymentInitResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $errorFieldName;

    /**
     * @var null|string
     */
    protected $redirectionData;

    /**
     * @var null|string
     */
    protected $redirectionStatusCode;

    /**
     * @var null|string
     */
    protected $redirectionStatusMessage;

    /**
     * @var null|string
     */
    protected $redirectionUrl;

    /**
     * @var null|string
     */
    protected $redirectionVersion;

    /**
     * @var null|string
     */
    protected $responseCode;

    /**
     * @var null|string
     */
    protected $seal;

    /**
     * @var null|string
     */
    protected $responseEncoding;

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
     * @return PaymentInitResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): PaymentInitResponse {
        $this->errorFieldName = $errorFieldName;

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
     * @return PaymentInitResponse
     */
    public function setRedirectionData(?string $redirectionData
    ): PaymentInitResponse {
        $this->redirectionData = $redirectionData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionStatusCode(): ?string
    {
        return $this->redirectionStatusCode;
    }

    /**
     * @param string|null $redirectionStatusCode
     *
     * @return PaymentInitResponse
     */
    public function setRedirectionStatusCode(?string $redirectionStatusCode
    ): PaymentInitResponse {
        $this->redirectionStatusCode = $redirectionStatusCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionStatusMessage(): ?string
    {
        return $this->redirectionStatusMessage;
    }

    /**
     * @param string|null $redirectionStatusMessage
     *
     * @return PaymentInitResponse
     */
    public function setRedirectionStatusMessage(
        ?string $redirectionStatusMessage
    ): PaymentInitResponse {
        $this->redirectionStatusMessage = $redirectionStatusMessage;

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
     * @return PaymentInitResponse
     */
    public function setRedirectionUrl(?string $redirectionUrl
    ): PaymentInitResponse {
        $this->redirectionUrl = $redirectionUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionVersion(): ?string
    {
        return $this->redirectionVersion;
    }

    /**
     * @param string|null $redirectionVersion
     *
     * @return PaymentInitResponse
     */
    public function setRedirectionVersion(?string $redirectionVersion
    ): PaymentInitResponse {
        $this->redirectionVersion = $redirectionVersion;

        return $this;
    }

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
     * @return PaymentInitResponse
     */
    public function setResponseCode(?string $responseCode): PaymentInitResponse
    {
        $this->responseCode = $responseCode;

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
     * @return PaymentInitResponse
     */
    public function setSeal(?string $seal): PaymentInitResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseEncoding(): ?string
    {
        return $this->responseEncoding;
    }

    /**
     * @param string|null $responseEncoding
     *
     * @return PaymentInitResponse
     */
    public function setResponseEncoding(?string $responseEncoding
    ): PaymentInitResponse {
        $this->responseEncoding = $responseEncoding;

        return $this;
    }

}
