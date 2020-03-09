<?php


namespace Worldline\Sips\Common\Fields;


/**@
 * Class InstalmentData
 * @package Worldline\Sips\Common\Fields
 */
class InstalmentData extends Field
{
    /**
     * @var null|int
     */
    private $number;

    /**
     * @var null|array
     */
    private $datesList;

    /**
     * @var null|array
     */
    private $transactionReferencesList;

    /**
     * @var null|array
     */
    private $amountsList;

    /**
     * @var null|array
     */
    private $s10TransactionIdsList;

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     *
     * @return InstalmentData
     */
    public function setNumber(?int $number): InstalmentData
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getDatesList(): ?array
    {
        return $this->datesList;
    }

    /**
     * @param array|null $datesList
     *
     * @return InstalmentData
     */
    public function setDatesList(?array $datesList): InstalmentData
    {
        $this->datesList = $datesList;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTransactionReferencesList(): ?array
    {
        return $this->transactionReferencesList;
    }

    /**
     * @param array|null $transactionReferencesList
     *
     * @return InstalmentData
     */
    public function setTransactionReferencesList(?array $transactionReferencesList
    ): InstalmentData {
        $this->transactionReferencesList = $transactionReferencesList;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getAmountsList(): ?array
    {
        return $this->amountsList;
    }

    /**
     * @param array|null $amountsList
     *
     * @return InstalmentData
     */
    public function setAmountsList(?array $amountsList): InstalmentData
    {
        $this->amountsList = $amountsList;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getS10TransactionIdsList(): ?array
    {
        return $this->s10TransactionIdsList;
    }

    /**
     * @param array|null $s10TransactionIdsList
     *
     * @return InstalmentData
     */
    public function setS10TransactionIdsList(?array $s10TransactionIdsList
    ): InstalmentData {
        $this->s10TransactionIdsList = $s10TransactionIdsList;

        return $this;
    }
    
}
