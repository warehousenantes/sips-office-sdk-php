<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class AuthenticationData.
 */
class AuthenticationData extends Field
{
    private ?CardAuthPolicy $cardAuthPolicy = null;

    private ?ThreeD $threeD = null;

    private ?ThreeDV2 $threeDV2 = null;

    private ?string $holderAuthentProgram = null;

    public function getCardAuthPolicy(): ?CardAuthPolicy
    {
        return $this->cardAuthPolicy;
    }

    public function setCardAuthPolicy(?CardAuthPolicy $cardAuthPolicy): self
    {
        $this->cardAuthPolicy = $cardAuthPolicy;

        return $this;
    }

    public function getThreeD(): ?ThreeD
    {
        return $this->threeD;
    }

    public function setThreeD(?ThreeD $threeD): self
    {
        $this->threeD = $threeD;

        return $this;
    }

    public function getThreeDV2(): ?ThreeDV2
    {
        return $this->threeDV2;
    }

    public function setThreeDV2(?ThreeDV2 $threeDV2): self
    {
        $this->threeDV2 = $threeDV2;

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
}
