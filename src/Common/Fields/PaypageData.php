<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class PaypageData.
 */
class PaypageData extends Field
{
    private ?string $bypassReceiptPage = null;

    public function getBypassReceiptPage(): ?string
    {
        return $this->bypassReceiptPage;
    }

    public function setBypassReceiptPage(
        ?string $bypassReceiptPage
    ): self {
        $this->bypassReceiptPage = $bypassReceiptPage;

        return $this;
    }
}
