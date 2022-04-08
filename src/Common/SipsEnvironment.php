<?php

declare(strict_types=1);

namespace Worldline\Sips\Common;

class SipsEnvironment implements \Stringable
{
    protected $environment;

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function __toString(): string
    {
        return $this->environment;
    }
}
