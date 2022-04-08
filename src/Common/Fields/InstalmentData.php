<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**@
 * Class InstalmentData
 * @package Worldline\Sips\Common\Fields
 */
class InstalmentData extends Field
{
    private ?int $number = null;

    private ?array $datesList = null;

    private ?array $transactionReferencesList = null;

    private ?array $amountsList = null;

    private ?array $s10TransactionIdsList = null;

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getDatesList(): ?array
    {
        return $this->datesList;
    }

    public function setDatesList(?array $datesList): self
    {
        $this->datesList = $datesList;

        return $this;
    }

    public function getTransactionReferencesList(): ?array
    {
        return $this->transactionReferencesList;
    }

    public function setTransactionReferencesList(
        ?array $transactionReferencesList
    ): self {
        $this->transactionReferencesList = $transactionReferencesList;

        return $this;
    }

    public function getAmountsList(): ?array
    {
        return $this->amountsList;
    }

    public function setAmountsList(?array $amountsList): self
    {
        $this->amountsList = $amountsList;

        return $this;
    }

    public function getS10TransactionIdsList(): ?array
    {
        return $this->s10TransactionIdsList;
    }

    public function setS10TransactionIdsList(
        ?array $s10TransactionIdsList
    ): self {
        $this->s10TransactionIdsList = $s10TransactionIdsList;

        return $this;
    }
}
