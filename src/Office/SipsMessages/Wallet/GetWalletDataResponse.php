<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Wallet;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetWalletDataResponse.
 */
class GetWalletDataResponse extends SipsMessage
{
    private ?string $walletCreationDateTime = null;

    private ?string $walletLAstActionDateTime = null;

    private ?string $walletResponseCode = null;

    private ?array $walletPaymentMeanDataList = null;

    private ?string $errorFieldName = null;

    private ?string $seal = null;

    public function getWalletCreationDateTime(): ?string
    {
        return $this->walletCreationDateTime;
    }

    public function setWalletCreationDateTime(
        ?string $walletCreationDateTime
    ): self {
        $this->walletCreationDateTime = $walletCreationDateTime;

        return $this;
    }

    public function getWalletLAstActionDateTime(): ?string
    {
        return $this->walletLAstActionDateTime;
    }

    public function setWalletLAstActionDateTime(
        ?string $walletLAstActionDateTime
    ): self {
        $this->walletLAstActionDateTime = $walletLAstActionDateTime;

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

    public function getWalletPaymentMeanDataList(): ?array
    {
        return $this->walletPaymentMeanDataList;
    }

    public function setWalletPaymentMeanDataList(
        ?array $walletPaymentMeanDataList
    ): self {
        $this->walletPaymentMeanDataList = $walletPaymentMeanDataList;

        return $this;
    }

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
}
