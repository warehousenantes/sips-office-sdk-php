<?php

namespace Worldline\Sips\Common\Fields;

/**
 * Class PaymentMeanData
 *
 * @package Worldline\Sips\Common\Fields
 */
class PaymentMeanData extends Field
{

    /**
     * @var null|BcmcMobile
     */
    protected $bcmcMobile;

    /**
     * @return BcmcMobile|null
     */
    public function getBcmcMobile(): ?BcmcMobile
    {
        return $this->bcmcMobile;
    }

    /**
     * @param BcmcMobile|null $bcmcMobile
     *
     * @return PaymentMeanData
     */
    public function setBcmcMobile(
        ?BcmcMobile $bcmcMobile
    ): PaymentMeanData {
        $this->bcmcMobile = $bcmcMobile;

        return $this;
    }
    
}
