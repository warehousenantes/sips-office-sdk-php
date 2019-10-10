<?php

namespace Worldline\Sips\Common\Fields;


/**
 * Class PanData
 * @package Worldline\Sips\Common\Fields
 */
class PanData
{
    /**
     * @var null|string
     */
    private $panId;

    /**
     * @var null|string
     */
    private $pan;

    /**
     * @return string|null
     */
    public function getPanId(): ?string
    {
        return $this->panId;
    }

    /**
     * @param string|null $panId
     *
     * @return PanData
     */
    public function setPanId(?string $panId): PanData
    {
        $this->panId = $panId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPan(): ?string
    {
        return $this->pan;
    }

    /**
     * @param string|null $pan
     *
     * @return PanData
     */
    public function setPan(?string $pan): PanData
    {
        $this->pan = $pan;

        return $this;
    }
    
}
