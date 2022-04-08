<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Seal;

use Symfony\Component\Serializer\Encoder\EncoderInterface;

class SealStringEncoder implements EncoderInterface
{
    public function encode(mixed $data, string $format, array $context = []): string
    {
        return $this->handleArray($data);
    }

    public function supportsEncoding($format): bool
    {
        return 'sealstring' === $format;
    }

    private function handleArray($data)
    {
        $sealString = '';
        ksort($data);
        foreach ($data as $value) {
            if (!\is_array($value)) {
                $sealString .= $value;
            } else {
                $sealString .= $this->handleArray($value);
            }
        }

        return $sealString;
    }
}
