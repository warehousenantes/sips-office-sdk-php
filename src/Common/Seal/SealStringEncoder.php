<?php


namespace Worldline\Sips\Common\Seal;


use Symfony\Component\Serializer\Encoder\EncoderInterface;

class SealStringEncoder implements EncoderInterface
{
    public function encode($data, $format, array $context = [])
    {
        return $this->handleArray($data);
    }

    public function supportsEncoding($format)
    {
        return "sealstring" === $format;
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