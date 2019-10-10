<?php


namespace Worldline\Sips\Common\Fields;


class Field
{
    /**
     * @return array
     */
    public function toArray() : array
    {
        $array = [];
        // TODO implement check if value is int, string, array or object.
        foreach ($this as $key => $value) {
            if ($value != null) {
                if (is_int($value) || is_string($value) || is_array($value)) {
                    $array[$key] = $value;
                } else {
                    $array[$key] = $value->toArray();
                }
            }
        }
        ksort($array);
        return $array;
    }
}