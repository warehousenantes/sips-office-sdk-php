<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Wallet;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class SignOffResponse.
 */
class SignOffResponse extends SipsMessage
{
    private ?string $walletActionDateTime = null;

    private ?string $walletOrderResponseCode = null;

    private ?string $errorFieldName = null;

    private ?string $seal = null;

    public function getWalletActionDateTime(): ?string
    {
        return $this->walletActionDateTime;
    }

    public function setWalletActionDateTime(
        ?string $walletActionDateTime
    ): self {
        $this->walletActionDateTime = $walletActionDateTime;

        return $this;
    }

    public function getWalletOrderResponseCode(): ?string
    {
        return $this->walletOrderResponseCode;
    }

    public function setWalletOrderResponseCode(
        ?string $walletOrderResponseCode
    ): self {
        $this->walletOrderResponseCode = $walletOrderResponseCode;

        return $this;
    }

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(?string $errorFieldName): self
    {
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
}
