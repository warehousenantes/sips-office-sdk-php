<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class BcmcMobile.
 */
class BcmcMobile extends Field
{
    private ?string $defaultRedirectUrl = null;

    private ?string $completionRedirectUrl = null;

    public function getDefaultRedirectUrl(): ?string
    {
        return $this->defaultRedirectUrl;
    }

    public function setDefaultRedirectUrl(?string $defaultRedirectUrl): self
    {
        $this->defaultRedirectUrl = $defaultRedirectUrl;

        return $this;
    }

    public function getCompletionRedirectUrl(): ?string
    {
        return $this->completionRedirectUrl;
    }

    public function setCompletionRedirectUrl(?string $completionRedirectUrl): self
    {
        $this->completionRedirectUrl = $completionRedirectUrl;

        return $this;
    }
}
