<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class PspData.
 */
class PspData extends Field
{
    private ?string $pspData1 = null;

    public function getPspData1(): ?string
    {
        return $this->pspData1;
    }

    public function setPspData1(?string $pspData1): self
    {
        $this->pspData1 = $pspData1;

        return $this;
    }
}
