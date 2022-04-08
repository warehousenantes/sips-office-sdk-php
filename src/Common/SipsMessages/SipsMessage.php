<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\SipsMessages;

class SipsMessage
{
    public function generateReference(): string
    {
        $microtime = explode(' ', microtime());
        $microtime[0] *= 1_000_000;

        return $microtime[1].$microtime[0];
    }
}
