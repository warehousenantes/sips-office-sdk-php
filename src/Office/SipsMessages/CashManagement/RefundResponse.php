<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class RefundResponse
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class RefundResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;
    
    /**
     * @var null|string
     */
    protected $authorisationId;
    
    /**
     * @var null|int
     */
    protected $newAmount;
    
    /**
     * @var null|string
     */
    protected $newStatus;
    
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
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $errorFieldName;

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
     * @return RefundResponse
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode
    ): RefundResponse {
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
     *
     * @return RefundResponse
     */
    public function setAuthorisationId(?string $authorisationId): RefundResponse
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
     *
     * @return RefundResponse
     */
    public function setNewAmount(?int $newAmount): RefundResponse
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
     *
     * @return RefundResponse
     */
    public function setNewStatus(?string $newStatus): RefundResponse
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
     *
     * @return RefundResponse
     */
    public function setOperationDateTime(?string $operationDateTime
    ): RefundResponse {
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
     * @return RefundResponse
     */
    public function setResponseCode(?string $responseCode): RefundResponse
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
     * @return RefundResponse
     */
    public function setSeal(?string $seal): RefundResponse
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
     * @return RefundResponse
     */
    public function setErrorFieldName(?string $errorFieldName): RefundResponse
    {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

}
