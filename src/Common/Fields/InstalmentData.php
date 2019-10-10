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
    protected $number;

    /**
     * @var null|array
     */
    protected $datesList;

    /**
     * @var null|array
     */
    protected $transactionReferenceList;

    /**
     * @var null|array
     */
    protected $amountsList;

    /**
     * @var null|array
     */
    protected $s10TransactionIdsList;

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
    public function getTransactionReferenceList(): ?array
    {
        return $this->transactionReferenceList;
    }

    /**
     * @param array|null $transactionReferenceList
     *
     * @return InstalmentData
     */
    public function setTransactionReferenceList(?array $transactionReferenceList
    ): InstalmentData {
        $this->transactionReferenceList = $transactionReferenceList;

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
