<?php


namespace Worldline\Sips\Common\Seal;


class PostSealCalculator
{
    /**
     * @param string $data
     * @param string $secretKey
     * @return string
     */
    public function calculateSeal(string $data, string $secretKey) : string
    {
        $seal = hash("sha256", $data . $secretKey);
        return $seal;
    }

    public function isCorrectSeal(string $seal, string $data, string $secretKey) : bool
    {
        if ($this->calculateSeal($data, $secretKey) == $seal) {
            return true;
        } else {
            return false;
        }
    }
}
