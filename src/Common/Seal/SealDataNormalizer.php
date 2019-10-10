<?php


namespace Worldline\Sips\Common\Seal;


use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class SealDataNormalizer extends ObjectNormalizer
{
    public function normalize($object, $format = NULL, array $context = []) {
        $data =  parent::normalize($object, $format, $context);
        $sealString = $this->handleArray($data);
        
        return $sealString;
    }

    private function handleArray($data) {
        $sealString = "";
        ksort($data);
        foreach ($data as $value) {
            if(!is_array($value))
            {
                $sealString .= $value;
            } else {
                $sealString .= $this->handleArray($value);
            }
        }

        return $sealString;
    }
}