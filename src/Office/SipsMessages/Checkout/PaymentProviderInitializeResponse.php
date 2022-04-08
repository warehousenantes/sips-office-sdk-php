<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentProviderInitializeResponse.
 */
class PaymentProviderInitializeResponse extends SipsMessage
{
    private ?string $responseCode = null;

    private ?string $redirectionUrl = null;

    private ?string $redirectionData = null;

    private ?string $messageVersion = null;

    private ?string $paymentProviderSessionId = null;

    private ?string $outerRedirectionUrl = null;

    private ?string $acquirerNativeResponseCode = null;

    private ?string $acquirerResponseIdentifier = null;

    private ?string $acquirerResponseMessage = null;

    private ?string $seal = null;

    private ?string $errorFieldName = null;

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(
        ?string $responseCode
    ): self {
        $this->responseCode = $responseCode;

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

    public function getMessageVersion(): ?string
    {
        return $this->messageVersion;
    }

    public function setMessageVersion(
        ?string $messageVersion
    ): self {
        $this->messageVersion = $messageVersion;

        return $this;
    }

    public function getPaymentProviderSessionId(): ?string
    {
        return $this->paymentProviderSessionId;
    }

    public function setPaymentProviderSessionId(
        ?string $paymentProviderSessionId
    ): self {
        $this->paymentProviderSessionId = $paymentProviderSessionId;

        return $this;
    }

    public function getOuterRedirectionUrl(): ?string
    {
        return $this->outerRedirectionUrl;
    }

    public function setOuterRedirectionUrl(
        ?string $outerRedirectionUrl
    ): self {
        $this->outerRedirectionUrl = $outerRedirectionUrl;

        return $this;
    }

    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    public function setAcquirerNativeResponseCode(
        ?string $acquirerNativeResponseCode
    ): self {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;

        return $this;
    }

    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    public function setAcquirerResponseIdentifier(
        ?string $acquirerResponseIdentifier
    ): self {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;

        return $this;
    }

    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    public function setAcquirerResponseMessage(
        ?string $acquirerResponseMessage
    ): self {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

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
}
