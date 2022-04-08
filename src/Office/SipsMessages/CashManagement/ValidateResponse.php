<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\CashManagement;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class ValidateResponse.
 */
class ValidateResponse extends SipsMessage
{
    private ?string $acquirerResponseCode = null;

    private ?string $authorisationId = null;

    private ?int $newAmount = null;

    private ?string $newStatus = null;

    private ?string $operationDateTime = null;

    private ?string $responseCode = null;

    private ?string $captureLimitDate = null;

    private ?string $seal = null;

    private ?string $errorFieldName = null;

    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    public function setAcquirerResponseCode(?string $acquirerResponseCode): self
    {
        $this->acquirerResponseCode = $acquirerResponseCode;

        return $this;
    }

    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    public function setAuthorisationId(?string $authorisationId): self
    {
        $this->authorisationId = $authorisationId;

        return $this;
    }

    public function getNewAmount(): ?int
    {
        return $this->newAmount;
    }

    public function setNewAmount(?int $newAmount): self
    {
        $this->newAmount = $newAmount;

        return $this;
    }

    public function getNewStatus(): ?string
    {
        return $this->newStatus;
    }

    public function setNewStatus(?string $newStatus): self
    {
        $this->newStatus = $newStatus;

        return $this;
    }

    public function getOperationDateTime(): ?string
    {
        return $this->operationDateTime;
    }

    public function setOperationDateTime(?string $operationDateTime): self
    {
        $this->operationDateTime = $operationDateTime;

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

    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    public function setCaptureLimitDate(?string $captureLimitDate): self
    {
        $this->captureLimitDate = $captureLimitDate;

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

    public function setErrorFieldName(?string $errorFieldName): self
    {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
}
