<?php

namespace Worldline\Sips\Common\Fields;


/**
 * Class CustomerAccountHistoric
 * @package Worldline\Sips\Common\Fields
 */
class CustomerAccountHistoric extends Field
{
    
     /**
     * @var null|string
     */
    protected $creationDate;
    
     /**
     * @var null|int
     */
    protected $numberOfAttemptsAddCard24Hours;
    
     /**
     * @var null|int
     */
    protected $numberOfPurchase;
    
     /**
     * @var null|int
     */
    protected $numberOfPurchase180Days;
    
     /**
     * @var null|int
     */
    protected $numberOfTransaction24Hours;
    
     /**
     * @var null|int
     */
    protected $suspiciousActivityIndicator;
    
     /**
     * @var null|string
     */
    protected $firstPurchaseDate;
    
     /**
     * @var null|string
     */
    protected $lastPurchaseDate;

    /**
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    /**
     * @param string|null $creationDate
     *
     * @return CustomerAccountHistoric
     */
    public function setCreationDate(?string $creationDate
    ): CustomerAccountHistoric {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfAttemptsAddCard24Hours(): ?int
    {
        return $this->numberOfAttemptsAddCard24Hours;
    }

    /**
     * @param int|null $numberOfAttemptsAddCard24Hours
     *
     * @return CustomerAccountHistoric
     */
    public function setNumberOfAttemptsAddCard24Hours(
        ?int $numberOfAttemptsAddCard24Hours
    ): CustomerAccountHistoric {
        $this->numberOfAttemptsAddCard24Hours = $numberOfAttemptsAddCard24Hours;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPurchase(): ?int
    {
        return $this->numberOfPurchase;
    }

    /**
     * @param int|null $numberOfPurchase
     *
     * @return CustomerAccountHistoric
     */
    public function setNumberOfPurchase(?int $numberOfPurchase
    ): CustomerAccountHistoric {
        $this->numberOfPurchase = $numberOfPurchase;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPurchase180Days(): ?int
    {
        return $this->numberOfPurchase180Days;
    }

    /**
     * @param int|null $numberOfPurchase180Days
     *
     * @return CustomerAccountHistoric
     */
    public function setNumberOfPurchase180Days(?int $numberOfPurchase180Days
    ): CustomerAccountHistoric {
        $this->numberOfPurchase180Days = $numberOfPurchase180Days;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfTransaction24Hours(): ?int
    {
        return $this->numberOfTransaction24Hours;
    }

    /**
     * @param int|null $numberOfTransaction24Hours
     *
     * @return CustomerAccountHistoric
     */
    public function setNumberOfTransaction24Hours(
        ?int $numberOfTransaction24Hours
    ): CustomerAccountHistoric {
        $this->numberOfTransaction24Hours = $numberOfTransaction24Hours;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSuspiciousActivityIndicator(): ?int
    {
        return $this->suspiciousActivityIndicator;
    }

    /**
     * @param int|null $suspiciousActivityIndicator
     *
     * @return CustomerAccountHistoric
     */
    public function setSuspiciousActivityIndicator(
        ?int $suspiciousActivityIndicator
    ): CustomerAccountHistoric {
        $this->suspiciousActivityIndicator = $suspiciousActivityIndicator;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstPurchaseDate(): ?string
    {
        return $this->firstPurchaseDate;
    }

    /**
     * @param string|null $firstPurchaseDate
     *
     * @return CustomerAccountHistoric
     */
    public function setFirstPurchaseDate(?string $firstPurchaseDate
    ): CustomerAccountHistoric {
        $this->firstPurchaseDate = $firstPurchaseDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastPurchaseDate(): ?string
    {
        return $this->lastPurchaseDate;
    }

    /**
     * @param string|null $lastPurchaseDate
     *
     * @return CustomerAccountHistoric
     */
    public function setLastPurchaseDate(?string $lastPurchaseDate
    ): CustomerAccountHistoric {
        $this->lastPurchaseDate = $lastPurchaseDate;

        return $this;
    }
    
}
