<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Seal;

class PostSealCalculator
{
    public function calculateSeal(string $data, string $secretKey): string
    {
        return hash('sha256', $data.$secretKey);
    }

    public function isCorrectSeal(string $seal, string $data, string $secretKey): bool
    {
        return $this->calculateSeal($data, $secretKey) === $seal;
    }
}
