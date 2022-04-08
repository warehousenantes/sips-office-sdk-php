<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class OrderContext.
 */
class OrderContext extends Field
{
    private ?string $customerHostName = null;

    private ?string $customerBrowserType = null;

    private ?string $customerANI = null;

    private ?string $customerANIInformationIdentifier = null;

    public function getCustomerHostName(): ?string
    {
        return $this->customerHostName;
    }

    public function setCustomerHostName(?string $customerHostName): self
    {
        $this->customerHostName = $customerHostName;

        return $this;
    }

    public function getCustomerBrowserType(): ?string
    {
        return $this->customerBrowserType;
    }

    public function setCustomerBrowserType(
        ?string $customerBrowserType
    ): self {
        $this->customerBrowserType = $customerBrowserType;

        return $this;
    }

    public function getCustomerANI(): ?string
    {
        return $this->customerANI;
    }

    public function setCustomerANI(?string $customerANI): self
    {
        $this->customerANI = $customerANI;

        return $this;
    }

    public function getCustomerANIInformationIdentifier(): ?string
    {
        return $this->customerANIInformationIdentifier;
    }

    public function setCustomerANIInformationIdentifier(
        ?string $customerANIInformationIdentifier
    ): self {
        $this->customerANIInformationIdentifier = $customerANIInformationIdentifier;

        return $this;
    }
}
