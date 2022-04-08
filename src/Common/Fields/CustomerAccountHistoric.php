<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class CustomerAccountHistoric.
 */
class CustomerAccountHistoric extends Field
{
    private ?string $creationDate = null;

    private ?int $numberOfAttemptsAddCard24Hours = null;

    private ?int $numberOfPurchase = null;

    private ?int $numberOfPurchase180Days = null;

    private ?int $numberOfTransaction24Hours = null;

    private ?int $suspiciousActivityIndicator = null;

    private ?string $firstPurchaseDate = null;

    private ?string $lastPurchaseDate = null;

    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    public function setCreationDate(
        ?string $creationDate
    ): self {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getNumberOfAttemptsAddCard24Hours(): ?int
    {
        return $this->numberOfAttemptsAddCard24Hours;
    }

    public function setNumberOfAttemptsAddCard24Hours(
        ?int $numberOfAttemptsAddCard24Hours
    ): self {
        $this->numberOfAttemptsAddCard24Hours = $numberOfAttemptsAddCard24Hours;

        return $this;
    }

    public function getNumberOfPurchase(): ?int
    {
        return $this->numberOfPurchase;
    }

    public function setNumberOfPurchase(
        ?int $numberOfPurchase
    ): self {
        $this->numberOfPurchase = $numberOfPurchase;

        return $this;
    }

    public function getNumberOfPurchase180Days(): ?int
    {
        return $this->numberOfPurchase180Days;
    }

    public function setNumberOfPurchase180Days(
        ?int $numberOfPurchase180Days
    ): self {
        $this->numberOfPurchase180Days = $numberOfPurchase180Days;

        return $this;
    }

    public function getNumberOfTransaction24Hours(): ?int
    {
        return $this->numberOfTransaction24Hours;
    }

    public function setNumberOfTransaction24Hours(
        ?int $numberOfTransaction24Hours
    ): self {
        $this->numberOfTransaction24Hours = $numberOfTransaction24Hours;

        return $this;
    }

    public function getSuspiciousActivityIndicator(): ?int
    {
        return $this->suspiciousActivityIndicator;
    }

    public function setSuspiciousActivityIndicator(
        ?int $suspiciousActivityIndicator
    ): self {
        $this->suspiciousActivityIndicator = $suspiciousActivityIndicator;

        return $this;
    }

    public function getFirstPurchaseDate(): ?string
    {
        return $this->firstPurchaseDate;
    }

    public function setFirstPurchaseDate(
        ?string $firstPurchaseDate
    ): self {
        $this->firstPurchaseDate = $firstPurchaseDate;

        return $this;
    }

    public function getLastPurchaseDate(): ?string
    {
        return $this->lastPurchaseDate;
    }

    public function setLastPurchaseDate(
        ?string $lastPurchaseDate
    ): self {
        $this->lastPurchaseDate = $lastPurchaseDate;

        return $this;
    }
}
