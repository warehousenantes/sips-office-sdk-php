<?php


namespace Worldline\Sips\Common\SipsMessages;


class SipsMessage
{

    public function generateReference(): string
    {
        $microtime = explode(' ', microtime());
        $microtime[0] = $microtime[0] * 1000000;
        $transactionReference = $microtime[1].$microtime[0];

        return $transactionReference;
    }
}
