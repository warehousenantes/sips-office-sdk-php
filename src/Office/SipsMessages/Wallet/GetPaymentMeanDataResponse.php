<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Wallet;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetPaymentMeanDataResponse.
 */
class GetPaymentMeanDataResponse extends SipsMessage
{
    private ?string $errorFieldName = null;

    private ?string $seal = null;

    private ?array $walletPaymentMeanData = null;

    private ?string $walletResponseCode = null;

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(
        ?string $errorFieldName
    ): self {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getWalletPaymentMeanData(): ?array
    {
        return $this->walletPaymentMeanData;
    }

    public function setWalletPaymentMeanData(
        ?array $walletPaymentMeanData
    ): self {
        $this->walletPaymentMeanData = $walletPaymentMeanData;

        return $this;
    }

    public function getWalletResponseCode(): ?string
    {
        return $this->walletResponseCode;
    }

    public function setWalletResponseCode(
        ?string $walletResponseCode
    ): self {
        $this->walletResponseCode = $walletResponseCode;

        return $this;
    }
}
