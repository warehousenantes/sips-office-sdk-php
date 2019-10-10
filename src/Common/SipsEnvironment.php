<?php

namespace Worldline\Sips\Common;


class SipsEnvironment
{

    protected $environment;


    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->environment;
    }
}