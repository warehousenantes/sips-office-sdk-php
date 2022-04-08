<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class DeliveryData.
 */
class DeliveryData extends Field
{
    private ?int $deliveryChargeAmount = null;

    private ?string $deliveryMethod = null;

    private ?string $deliveryMode = null;

    private ?string $deliveryOperator = null;

    private ?string $estimatedDeliveryDate = null;

    private ?string $deliveryAddressCreationDate = null;

    private ?string $estimatedDeliveryDelay = null;

    private ?string $electronicDeliveryIndicator = null;

    public function getDeliveryChargeAmount(): ?int
    {
        return $this->deliveryChargeAmount;
    }

    public function setDeliveryChargeAmount(
        ?int $deliveryChargeAmount
    ): self {
        $this->deliveryChargeAmount = $deliveryChargeAmount;

        return $this;
    }

    public function getDeliveryMethod(): ?string
    {
        return $this->deliveryMethod;
    }

    public function setDeliveryMethod(?string $deliveryMethod): self
    {
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }

    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;

        return $this;
    }

    public function getDeliveryOperator(): ?string
    {
        return $this->deliveryOperator;
    }

    public function setDeliveryOperator(?string $deliveryOperator): self
    {
        $this->deliveryOperator = $deliveryOperator;

        return $this;
    }

    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->estimatedDeliveryDate;
    }

    public function setEstimatedDeliveryDate(
        ?string $estimatedDeliveryDate
    ): self {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        return $this;
    }

    public function getDeliveryAddressCreationDate(): ?string
    {
        return $this->deliveryAddressCreationDate;
    }

    public function setDeliveryAddressCreationDate(
        ?string $deliveryAddressCreationDate
    ): self {
        $this->deliveryAddressCreationDate = $deliveryAddressCreationDate;

        return $this;
    }

    public function getEstimatedDeliveryDelay(): ?string
    {
        return $this->estimatedDeliveryDelay;
    }

    public function setEstimatedDeliveryDelay(
        ?string $estimatedDeliveryDelay
    ): self {
        $this->estimatedDeliveryDelay = $estimatedDeliveryDelay;

        return $this;
    }

    public function getElectronicDeliveryIndicator(): ?string
    {
        return $this->electronicDeliveryIndicator;
    }

    public function setElectronicDeliveryIndicator(
        ?string $electronicDeliveryIndicator
    ): self {
        $this->electronicDeliveryIndicator = $electronicDeliveryIndicator;

        return $this;
    }
}
