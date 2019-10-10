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
     * @return \Worldline\Sips\Common\Fields\BcmcMobile|null
     */
    public function getBcmcMobile(): ?\Worldline\Sips\Common\Fields\BcmcMobile
    {
        return $this->bcmcMobile;
    }

    /**
     * @param \Worldline\Sips\Common\Fields\BcmcMobile|null $bcmcMobile
     *
     * @return PaymentMeanData
     */
    public function setBcmcMobile(
        ?\Worldline\Sips\Common\Fields\BcmcMobile $bcmcMobile
    ): PaymentMeanData {
        $this->bcmcMobile = $bcmcMobile;

        return $this;
    }
    
}
