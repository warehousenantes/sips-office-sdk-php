<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class PanData.
 */
class PanData
{
    private ?string $panId = null;

    private ?string $pan = null;

    public function getPanId(): ?string
    {
        return $this->panId;
    }

    public function setPanId(?string $panId): self
    {
        $this->panId = $panId;

        return $this;
    }

    public function getPan(): ?string
    {
        return $this->pan;
    }

    public function setPan(?string $pan): self
    {
        $this->pan = $pan;

        return $this;
    }
}
