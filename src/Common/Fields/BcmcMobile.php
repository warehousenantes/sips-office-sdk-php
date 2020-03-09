<?php

namespace Worldline\Sips\Common\Fields;

/**
 * Class BcmcMobile
 *
 * @package Worldline\Sips\Common\Fields
 */
class BcmcMobile extends Field
{

    /**
     * @var null|string
     */
    private $defaultRedirectUrl;

    /**
     * @var null|string
     */
    private $completionRedirectUrl;

    /**
     * @return string|null
     */
    public function getDefaultRedirectUrl(): ?string
    {
        return $this->defaultRedirectUrl;
    }

    /**
     * @param string|null $defaultRedirectUrl
     *
     * @return BcmcMobile
     */
    public function setDefaultRedirectUrl(?string $defaultRedirectUrl): BcmcMobile
    {
        $this->defaultRedirectUrl = $defaultRedirectUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompletionRedirectUrl(): ?string
    {
        return $this->completionRedirectUrl;
    }

    /**
     * @param string|null $completionRedirectUrl
     *
     * @return BcmcMobile
     */
    public function setCompletionRedirectUrl(?string $completionRedirectUrl): BcmcMobile
    {
        $this->completionRedirectUrl = $completionRedirectUrl;
        return $this;
    }

}
