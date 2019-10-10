<?php

namespace Worldline\Sips\Common\Fields;


/**
 * Class RiskManagementCustomData
 * @package Worldline\Sips\Common\Fields
 */
class RiskManagementCustomData extends Field
{
    /**
     * @var null|int
     */
    protected $riskManagementCustomSequence;
    
    /**
     * @var null|string
     */
    protected $risktManagementCustomValue;

    /**
     * @return int|null
     */
    public function getRiskManagementCustomSequence(): ?int
    {
        return $this->riskManagementCustomSequence;
    }

    /**
     * @param int|null $riskManagementCustomSequence
     *
     * @return RiskManagementCustomData
     */
    public function setRiskManagementCustomSequence(
        ?int $riskManagementCustomSequence
    ): RiskManagementCustomData {
        $this->riskManagementCustomSequence = $riskManagementCustomSequence;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRisktManagementCustomValue(): ?string
    {
        return $this->risktManagementCustomValue;
    }

    /**
     * @param string|null $risktManagementCustomValue
     *
     * @return RiskManagementCustomData
     */
    public function setRisktManagementCustomValue(
        ?string $risktManagementCustomValue
    ): RiskManagementCustomData {
        $this->risktManagementCustomValue = $risktManagementCustomValue;

        return $this;
    }

}
