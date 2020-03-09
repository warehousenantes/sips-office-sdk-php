<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class PspData
 * @package Worldline\Sips\Common\Fields
 */
class PspData extends Field
{
    /**
     * @var string|null
     */
    private $pspData1;

    /**
     * @return string|null
     */
    public function getPspData1(): ?string
    {
        return $this->pspData1;
    }

    /**
     * @param string|null $pspData1
     * @return PspData
     */
    public function setPspData1(?string $pspData1): PspData
    {
        $this->pspData1 = $pspData1;
        return $this;
    }


}