<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class S10TransactionReference.
 */
class S10TransactionReference extends Field
{
    private ?string $s10TransactionId = null;

    private ?string $s10TransactionIdDate = null;

    public function getS10TransactionId(): ?string
    {
        return $this->s10TransactionId;
    }

    public function setS10TransactionId(
        ?string $s10TransactionId
    ): self {
        $this->s10TransactionId = $s10TransactionId;

        return $this;
    }

    public function getS10TransactionIdDate(): ?string
    {
        return $this->s10TransactionIdDate;
    }

    public function setS10TransactionIdDate(
        ?string $s10TransactionIdDate
    ): self {
        $this->s10TransactionIdDate = $s10TransactionIdDate;

        return $this;
    }
}
