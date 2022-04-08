<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class PaymentMeanData.
 */
class PaymentMeanData extends Field
{
    private ?BcmcMobile $bcmcMobile = null;

    public function getBcmcMobile(): ?BcmcMobile
    {
        return $this->bcmcMobile;
    }

    public function setBcmcMobile(
        ?BcmcMobile $bcmcMobile
    ): self {
        $this->bcmcMobile = $bcmcMobile;

        return $this;
    }
}
