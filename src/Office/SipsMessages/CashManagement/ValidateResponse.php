<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class ValidateResponse
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class ValidateResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $acquirerResponseCode;
    /**
     * @var null|string
     */
    private $authorisationId;
    /**
     * @var null|int
     */
    private $newAmount;
    /**
     * @var null|string
     */
    private $newStatus;
    /**
     * @var null|string
     */
    private $operationDateTime;
    /**
     * @var null|string
     */
    private $responseCode;
    /**
     * @var null|string
     */
    private $captureLimitDate;
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
    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @param string|null $acquirerResponseCode
     * @return ValidateResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode): ValidateResponse
    {
        $this->acquirerResponseCode = $acquirerResponseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    /**
     * @param string|null $authorisationId
     * @return ValidateResponse
     */
    public function setAuthorisationId(?string $authorisationId): ValidateResponse
    {
        $this->authorisationId = $authorisationId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNewAmount(): ?int
    {
        return $this->newAmount;
    }

    /**
     * @param int|null $newAmount
     * @return ValidateResponse
     */
    public function setNewAmount(?int $newAmount): ValidateResponse
    {
        $this->newAmount = $newAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewStatus(): ?string
    {
        return $this->newStatus;
    }

    /**
     * @param string|null $newStatus
     * @return ValidateResponse
     */
    public function setNewStatus(?string $newStatus): ValidateResponse
    {
        $this->newStatus = $newStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperationDateTime(): ?string
    {
        return $this->operationDateTime;
    }

    /**
     * @param string|null $operationDateTime
     * @return ValidateResponse
     */
    public function setOperationDateTime(?string $operationDateTime): ValidateResponse
    {
        $this->operationDateTime = $operationDateTime;
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
     * @return ValidateResponse
     */
    public function setResponseCode(?string $responseCode): ValidateResponse
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    /**
     * @param string|null $captureLimitDate
     * @return ValidateResponse
     */
    public function setCaptureLimitDate(?string $captureLimitDate): ValidateResponse
    {
        $this->captureLimitDate = $captureLimitDate;
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
     * @return ValidateResponse
     */
    public function setSeal(?string $seal): ValidateResponse
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
     * @return ValidateResponse
     */
    public function setErrorFieldName(?string $errorFieldName): ValidateResponse
    {
        $this->errorFieldName = $errorFieldName;
        return $this;
    }
}
