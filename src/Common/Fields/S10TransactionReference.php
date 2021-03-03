<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class S10TransactionReference
 * @package Worldline\Sips\Common\Fields
 */
class S10TransactionReference extends Field
{
    /**
     * @var null|string
     */
    private $s10TransactionId;
    /**
     * @var null|string
     */
    private $s10TransactionIdDate;

    /**
     * @return string|null
     */
    public function getS10TransactionId(): ?string
    {
        return $this->s10TransactionId;
    }

    /**
     * @param string|null $s10TransactionId
     *
     * @return S10TransactionReference
     */
    public function setS10TransactionId(?string $s10TransactionId
    ): S10TransactionReference {
        $this->s10TransactionId = $s10TransactionId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getS10TransactionIdDate(): ?string
    {
        return $this->s10TransactionIdDate;
    }

    /**
     * @param string|null $s10TransactionIdDate
     *
     * @return S10TransactionReference
     */
    public function setS10TransactionIdDate(?string $s10TransactionIdDate
    ): S10TransactionReference {
        $this->s10TransactionIdDate = $s10TransactionIdDate;

        return $this;
    }
    
}
