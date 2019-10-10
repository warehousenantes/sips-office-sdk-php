<?php

namespace Worldline\Sips\Common\Fields;


/**
 * Class PaypageData
 *
 * @package Worldline\Sips\Common\Fields
 */
class PaypageData extends Field
{

    /**
     * @var null|string
     */
    protected $bypassReceiptPage;

    /**
     * @return string|null
     */
    public function getBypassReceiptPage(): ?string
    {
        return $this->bypassReceiptPage;
    }

    /**
     * @param string|null $bypassReceiptPage
     *
     * @return PaypageData
     */
    public function setBypassReceiptPage(?string $bypassReceiptPage
    ): PaypageData {
        $this->bypassReceiptPage = $bypassReceiptPage;

        return $this;
    }
    
}
