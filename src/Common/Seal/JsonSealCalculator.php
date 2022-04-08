<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Seal;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

class JsonSealCalculator
{
    private Serializer $serializer;

    /**
     * JsonSealCalculator constructor.
     */
    public function __construct()
    {
        $encoders = [new SealStringEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param $secretKey
     */
    public function calculateSeal(SipsMessage &$sipsRequest, $secretKey): void
    {
        $seal = $this->encrypt($this->getSealData($sipsRequest), $secretKey);
        $sipsRequest->setSeal($seal);
    }

    public function encrypt(string $sealData, string $secretKey): string
    {
        if ('UTF-8' !== mb_detect_encoding($sealData, 'UTF-8', true)) {
            $sealData = utf8_encode($sealData);
        }

        $secretKey = utf8_encode($secretKey);

        return hash_hmac('sha256', $sealData, $secretKey);
    }

    public function getSealData(SipsMessage $array): string
    {
        return $this->serializer->serialize($array, 'sealstring', ['ignored_attributes' => ['serviceUrl', 'keyVersion', 'sealAlgorithm', 'seal'], 'skip_null_values' => true]);
        // return $this->serializer->normalize($array, null, ['ignored_attributes' => ['serviceUrl','keyVersion','sealAlgorithm','seal'], 'skip_null_values' => true]);
    }

    /**
     * @param $secretKey
     */
    public function isCorrectSeal(SipsMessage $sipsResponse, $secretKey): bool
    {
        $seal = $this->encrypt($this->getSealData($sipsResponse), $secretKey);

        return $seal === $sipsResponse->getSeal();
    }
}
