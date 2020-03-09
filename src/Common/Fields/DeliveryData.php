<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class DeliveryData
 * @package Worldline\Sips\Common\Fields
 */
class DeliveryData extends Field
{
    /**
     * @var null|int
     */
    private $deliveryChargeAmount;

    /**
     * @var null|string
     */
    private $deliveryMethod;

    /**
     * @var null|string
     */
    private $deliveryMode;

    /**
     * @var null|string
     */
    private $deliveryOperator;

    /**
     * @var null|string
     */
    private $estimatedDeliveryDate;

    /**
     * @var null|string
     */
    private $deliveryAddressCreationDate;

    /**
     * @var null|string
     */
    private $estimatedDeliveryDelay;

    /**
     * @var null|string
     */
    private $electronicDeliveryIndicator;

    /**
     * @return int|null
     */
    public function getDeliveryChargeAmount(): ?int
    {
        return $this->deliveryChargeAmount;
    }

    /**
     * @param int|null $deliveryChargeAmount
     *
     * @return DeliveryData
     */
    public function setDeliveryChargeAmount(?int $deliveryChargeAmount
    ): DeliveryData {
        $this->deliveryChargeAmount = $deliveryChargeAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryMethod(): ?string
    {
        return $this->deliveryMethod;
    }

    /**
     * @param string|null $deliveryMethod
     *
     * @return DeliveryData
     */
    public function setDeliveryMethod(?string $deliveryMethod): DeliveryData
    {
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param string|null $deliveryMode
     *
     * @return DeliveryData
     */
    public function setDeliveryMode(?string $deliveryMode): DeliveryData
    {
        $this->deliveryMode = $deliveryMode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryOperator(): ?string
    {
        return $this->deliveryOperator;
    }

    /**
     * @param string|null $deliveryOperator
     *
     * @return DeliveryData
     */
    public function setDeliveryOperator(?string $deliveryOperator): DeliveryData
    {
        $this->deliveryOperator = $deliveryOperator;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * @param string|null $estimatedDeliveryDate
     *
     * @return DeliveryData
     */
    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate
    ): DeliveryData {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryAddressCreationDate(): ?string
    {
        return $this->deliveryAddressCreationDate;
    }

    /**
     * @param string|null $deliveryAddressCreationDate
     *
     * @return DeliveryData
     */
    public function setDeliveryAddressCreationDate(
        ?string $deliveryAddressCreationDate
    ): DeliveryData {
        $this->deliveryAddressCreationDate = $deliveryAddressCreationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstimatedDeliveryDelay(): ?string
    {
        return $this->estimatedDeliveryDelay;
    }

    /**
     * @param string|null $estimatedDeliveryDelay
     *
     * @return DeliveryData
     */
    public function setEstimatedDeliveryDelay(?string $estimatedDeliveryDelay
    ): DeliveryData {
        $this->estimatedDeliveryDelay = $estimatedDeliveryDelay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getElectronicDeliveryIndicator(): ?string
    {
        return $this->electronicDeliveryIndicator;
    }

    /**
     * @param string|null $electronicDeliveryIndicator
     *
     * @return DeliveryData
     */
    public function setElectronicDeliveryIndicator(
        ?string $electronicDeliveryIndicator
    ): DeliveryData {
        $this->electronicDeliveryIndicator = $electronicDeliveryIndicator;

        return $this;
    }
    
}
