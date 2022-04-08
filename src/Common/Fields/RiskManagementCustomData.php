<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class RiskManagementCustomData.
 */
class RiskManagementCustomData extends Field
{
    private ?int $riskManagementCustomSequence = null;

    private ?string $risktManagementCustomValue = null;

    public function getRiskManagementCustomSequence(): ?int
    {
        return $this->riskManagementCustomSequence;
    }

    public function setRiskManagementCustomSequence(
        ?int $riskManagementCustomSequence
    ): self {
        $this->riskManagementCustomSequence = $riskManagementCustomSequence;

        return $this;
    }

    public function getRisktManagementCustomValue(): ?string
    {
        return $this->risktManagementCustomValue;
    }

    public function setRisktManagementCustomValue(
        ?string $risktManagementCustomValue
    ): self {
        $this->risktManagementCustomValue = $risktManagementCustomValue;

        return $this;
    }
}
