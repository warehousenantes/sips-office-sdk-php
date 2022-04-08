<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardCheckEnrollmentResponse.
 */
class CardCheckEnrollmentResponse extends SipsMessage
{
    private ?string $redirectionUrl = null;

    private ?string $errorFieldName = null;

    private ?string $paReqMessage = null;

    private ?string $redirectionData = null;

    private ?string $redirectionStatusCode = null;

    private ?string $messageVersion = null;

    private ?string $seal = null;

    private ?string $paymentMeanBrandSelectionStatus = null;

    private ?string $responseCode = null;

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

    public function getPaReqMessage(): ?string
    {
        return $this->paReqMessage;
    }

    public function setPaReqMessage(
        ?string $paReqMessage
    ): self {
        $this->paReqMessage = $paReqMessage;

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

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): self {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

        return $this;
    }

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
}
