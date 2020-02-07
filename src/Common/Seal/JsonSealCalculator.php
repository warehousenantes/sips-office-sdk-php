<?php


namespace Worldline\Sips\Common\Seal;




use Symfony\Component\Serializer\Serializer;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

class JsonSealCalculator
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * JsonSealCalculator constructor.
     */
    public function __construct() {
        $normalizers = [new SealDataNormalizer()];
        $this->serializer = new Serializer($normalizers);
    }

    /**
     * @param SipsMessage $sipsRequest
     * @param $secretKey
     */
    public function calculateSeal(SipsMessage &$sipsRequest, $secretKey)
    {
        $seal = $this->encrypt($this->getSealData($sipsRequest), $secretKey);
        $sipsRequest->setSeal($seal);
    }

    /**
     * @param string $sealData
     * @param string $secretKey
     *
     * @return string
     */
    public function encrypt(string $sealData, string $secretKey): string
    {
        if (mb_detect_encoding($sealData, 'UTF-8', true) != "UTF-8") {
            $sealData = utf8_encode($sealData);
        }
        $secretKey = utf8_encode($secretKey);
        $seal = hash_hmac("sha256", $sealData, $secretKey);
        return $seal;
    }

    /**
     * @param SipsMessage $array
     *
     * @return string
     */
    public function getSealData(SipsMessage $array): string
    {
        return $this->serializer->normalize($array, null, ['ignored_attributes' => ['serviceUrl','keyVersion','sealAlgorithm','seal'], 'skip_null_values' => true]);
    }

    /**
     * @param SipsMessage $sipsResponse
     * @param $secretKey
     *
     * @return bool
     */
    public function isCorrectSeal(SipsMessage $sipsResponse, $secretKey): bool
    {

        $seal = $this->encrypt($this->getSealData($sipsResponse), $secretKey);
        if ($seal == $sipsResponse->getSeal()) {
            return true;
        } else {
            return false;
        }
    }
}