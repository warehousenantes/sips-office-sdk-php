<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardCheckEnrollmentResponse
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardCheckEnrollmentResponse extends SipsMessage
{
     /**
     * @var null|string
     */
    protected $redirectionUrl;
    
     /**
     * @var null|string
     */
    protected $errorFieldName;
    
     /**
     * @var null|string
     */
    protected $paReqMessage;
    
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
    protected $messageVersion;
    
     /**
     * @var null|string
     */
    protected $seal;
    
     /**
     * @var null|string
     */
    protected $paymentMeanBrandSelectionStatus;
    
     /**
     * @var null|string
     */
    protected $responseCode;

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
     * @return CardCheckEnrollmentResponse
     */
    public function setRedirectionUrl(?string $redirectionUrl
    ): CardCheckEnrollmentResponse {
        $this->redirectionUrl = $redirectionUrl;

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
     * @return CardCheckEnrollmentResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): CardCheckEnrollmentResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaReqMessage(): ?string
    {
        return $this->paReqMessage;
    }

    /**
     * @param string|null $paReqMessage
     *
     * @return CardCheckEnrollmentResponse
     */
    public function setPaReqMessage(?string $paReqMessage
    ): CardCheckEnrollmentResponse {
        $this->paReqMessage = $paReqMessage;

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
     * @return CardCheckEnrollmentResponse
     */
    public function setRedirectionData(?string $redirectionData
    ): CardCheckEnrollmentResponse {
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
     * @return CardCheckEnrollmentResponse
     */
    public function setRedirectionStatusCode(?string $redirectionStatusCode
    ): CardCheckEnrollmentResponse {
        $this->redirectionStatusCode = $redirectionStatusCode;

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
     * @return CardCheckEnrollmentResponse
     */
    public function setMessageVersion(?string $messageVersion
    ): CardCheckEnrollmentResponse {
        $this->messageVersion = $messageVersion;

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
     * @return CardCheckEnrollmentResponse
     */
    public function setSeal(?string $seal): CardCheckEnrollmentResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @param string|null $paymentMeanBrandSelectionStatus
     *
     * @return CardCheckEnrollmentResponse
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): CardCheckEnrollmentResponse {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

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
     * @return CardCheckEnrollmentResponse
     */
    public function setResponseCode(?string $responseCode
    ): CardCheckEnrollmentResponse {
        $this->responseCode = $responseCode;

        return $this;
    }
    
}
