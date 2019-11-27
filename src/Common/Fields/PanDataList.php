<?php


namespace Worldline\Sips\Common\Fields;


use http\Exception\InvalidArgumentException;

class PanDataList extends \ArrayObject
{
    public function offsetSet($index, $newval)
    {
        if ($newval instanceof PanData) {
            return parent::offsetSet($index, $newval);
        } else {
            throw new InvalidArgumentException("Value must be of type PanData.");
        }
    }
}