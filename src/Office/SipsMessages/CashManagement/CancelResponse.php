<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CancelResponse
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class CancelResponse extends SipsMessage
{
    /**
     * @var null|int
     */
    protected $newAmount;
    
    /**
     * @var null|string
     */
    protected $operationDateTime;
    
    /**
     * @var null|string
     */
    protected $responseCode;
    
    /**
     * @var null|string
     */
    protected $newStatus;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;
    
    /**
     * @var null|string
     */
    protected $errorFieldName;
    
    /**
     * @return string|null
     */
    public function getNewAmount(): ?string
    {
        return $this->newAmount;
    }

    /**
     * @param int|null $newAmount
     *
     * @return CancelResponse
     */
    public function setNewAmount(?int $newAmount): CancelResponse
    {
        $this->newAmount = $newAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOperationDateTime(): ?int
    {
        return $this->operationDateTime;
    }

    /**
     * @param string|null $operationDateTime
     *
     * @return CancelResponse
     */
    public function setOperationDateTime(?string $operationDateTime
    ): CancelResponse {
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
     *
     * @return CancelResponse
     */
    public function setResponseCode(?string $responseCode): CancelResponse
    {
        $this->responseCode = $responseCode;

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
     *
     * @return CancelResponse
     */
    public function setNewStatus(?string $newStatus): CancelResponse
    {
        $this->newStatus = $newStatus;

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
     * @return CancelResponse
     */
    public function setSeal(?string $seal): CancelResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @param string|null $acquirerResponseCode
     *
     * @return CancelResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): CancelResponse {
        $this->acquirerResponseCode = $acquirerResponseCode;

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
     * @return CancelResponse
     */
    public function setErrorFieldName(?string $errorFieldName): CancelResponse
    {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
