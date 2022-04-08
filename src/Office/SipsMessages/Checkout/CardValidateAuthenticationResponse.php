<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\Fields\ThreeD;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardValidateAuthenticationResponse.
 */
class CardValidateAuthenticationResponse extends SipsMessage
{
    private ?string $responseCode = null;

    private ?string $holderAuthentResponseCode = null;

    private ?string $seal = null;

    private ?string $errorFieldName = null;

    private ?string $holderAuthentStatus = null;

    private ?string $holderAuthentMethod = null;

    private ?string $holderAuthentProgram = null;

    private ?array $threeD = null;

    private ?array $threeDV2 = null;

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(?string $responseCode): self
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    public function getHolderAuthentResponseCode(): ?string
    {
        return $this->holderAuthentResponseCode;
    }

    public function setHolderAuthentResponseCode(?string $holderAuthentResponseCode): self
    {
        $this->holderAuthentResponseCode = $holderAuthentResponseCode;

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

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(?string $errorFieldName): self
    {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    public function setHolderAuthentStatus(?string $holderAuthentStatus): self
    {
        $this->holderAuthentStatus = $holderAuthentStatus;

        return $this;
    }

    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    public function setHolderAuthentMethod(?string $holderAuthentMethod): self
    {
        $this->holderAuthentMethod = $holderAuthentMethod;

        return $this;
    }

    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    public function setHolderAuthentProgram(?string $holderAuthentProgram): self
    {
        $this->holderAuthentProgram = $holderAuthentProgram;

        return $this;
    }

    public function getThreeD(): ?array
    {
        return $this->threeD;
    }

    /**
     * @param ThreeD|null $threeD
     */
    public function setThreeD(?array $threeD): self
    {
        $this->threeD = $threeD;

        return $this;
    }

    public function getThreeDV2(): ?array
    {
        return $this->threeDV2;
    }

    public function setThreeDV2(?array $threeDV2): self
    {
        $this->threeDV2 = $threeDV2;

        return $this;
    }
}
