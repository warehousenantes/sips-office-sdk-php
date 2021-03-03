<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class OrderContext
 *
 * @package Worldline\Sips\Common\Fields
 */
class OrderContext extends Field
{

    /**
     * @var null|string
     */
    private $customerHostName;

    /**
     * @var null|string
     */
    private $customerBrowserType;

    /**
     * @var null|string
     */
    private $customerANI;

    /**
     * @var null|string
     */
    private $customerANIInformationIdentifier;

    /**
     * @return string|null
     */
    public function getCustomerHostName(): ?string
    {
        return $this->customerHostName;
    }

    /**
     * @param string|null $customerHostName
     *
     * @return OrderContext
     */
    public function setCustomerHostName(?string $customerHostName): OrderContext
    {
        $this->customerHostName = $customerHostName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerBrowserType(): ?string
    {
        return $this->customerBrowserType;
    }

    /**
     * @param string|null $customerBrowserType
     *
     * @return OrderContext
     */
    public function setCustomerBrowserType(?string $customerBrowserType
    ): OrderContext {
        $this->customerBrowserType = $customerBrowserType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerANI(): ?string
    {
        return $this->customerANI;
    }

    /**
     * @param string|null $customerANI
     *
     * @return OrderContext
     */
    public function setCustomerANI(?string $customerANI): OrderContext
    {
        $this->customerANI = $customerANI;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerANIInformationIdentifier(): ?string
    {
        return $this->customerANIInformationIdentifier;
    }

    /**
     * @param string|null $customerANIInformationIdentifier
     *
     * @return OrderContext
     */
    public function setCustomerANIInformationIdentifier(
        ?string $customerANIInformationIdentifier
    ): OrderContext {
        $this->customerANIInformationIdentifier = $customerANIInformationIdentifier;

        return $this;
    }
    
}
