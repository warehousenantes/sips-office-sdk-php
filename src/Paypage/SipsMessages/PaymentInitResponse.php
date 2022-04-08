<?php

declare(strict_types=1);

namespace Worldline\Sips\Paypage\SipsMessages;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentInitResponse.
 */
class PaymentInitResponse extends SipsMessage
{
    private ?string $errorFieldName = null;

    private ?string $redirectionData = null;

    private ?string $redirectionStatusCode = null;

    private ?string $redirectionStatusMessage = null;

    private ?string $redirectionUrl = null;

    private ?string $redirectionVersion = null;

    private ?string $responseCode = null;

    private ?string $seal = null;

    private ?string $responseEncoding = null;

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(
        ?string $errorFieldName
    ): self {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

    public function getRedirectionData(): ?string
    {
        return $this->redirectionData;
    }

    public function setRedirectionData(
        ?string $redirectionData
    ): self {
        $this->redirectionData = $redirectionData;

        return $this;
    }

    public function getRedirectionStatusCode(): ?string
    {
        return $this->redirectionStatusCode;
    }

    public function setRedirectionStatusCode(
        ?string $redirectionStatusCode
    ): self {
        $this->redirectionStatusCode = $redirectionStatusCode;

        return $this;
    }

    public function getRedirectionStatusMessage(): ?string
    {
        return $this->redirectionStatusMessage;
    }

    public function setRedirectionStatusMessage(
        ?string $redirectionStatusMessage
    ): self {
        $this->redirectionStatusMessage = $redirectionStatusMessage;

        return $this;
    }

    public function getRedirectionUrl(): ?string
    {
        return $this->redirectionUrl;
    }

    public function setRedirectionUrl(
        ?string $redirectionUrl
    ): self {
        $this->redirectionUrl = $redirectionUrl;

        return $this;
    }

    public function getRedirectionVersion(): ?string
    {
        return $this->redirectionVersion;
    }

    public function setRedirectionVersion(
        ?string $redirectionVersion
    ): self {
        $this->redirectionVersion = $redirectionVersion;

        return $this;
    }

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(?string $responseCode): self
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getResponseEncoding(): ?string
    {
        return $this->responseEncoding;
    }

    public function setResponseEncoding(
        ?string $responseEncoding
    ): self {
        $this->responseEncoding = $responseEncoding;

        return $this;
    }
}
