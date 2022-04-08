<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class CardAuthPolicy.
 */
class CardAuthPolicy extends Field
{
    private ?string $checkAVS = null;

    private ?string $ignorePostCodeCheckResult = null;

    private ?string $ignoreAddressCheckResult = null;

    private ?string $automaticReverse = null;

    public function getCheckAVS(): ?string
    {
        return $this->checkAVS;
    }

    public function setCheckAVS(?string $checkAVS): self
    {
        $this->checkAVS = $checkAVS;

        return $this;
    }

    public function getIgnorePostCodeCheckResult(): ?string
    {
        return $this->ignorePostCodeCheckResult;
    }

    public function setIgnorePostCodeCheckResult(
        ?string $ignorePostCodeCheckResult
    ): self {
        $this->ignorePostCodeCheckResult = $ignorePostCodeCheckResult;

        return $this;
    }

    public function getIgnoreAddressCheckResult(): ?string
    {
        return $this->ignoreAddressCheckResult;
    }

    public function setIgnoreAddressCheckResult(
        ?string $ignoreAddressCheckResult
    ): self {
        $this->ignoreAddressCheckResult = $ignoreAddressCheckResult;

        return $this;
    }

    public function getAutomaticReverse(): ?string
    {
        return $this->automaticReverse;
    }

    public function setAutomaticReverse(
        ?string $automaticReverse
    ): self {
        $this->automaticReverse = $automaticReverse;

        return $this;
    }
}
