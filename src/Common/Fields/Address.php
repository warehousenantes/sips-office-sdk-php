<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class Address
 *
 * @package Worldline\Sips\Common\Fields
 */
class Address extends Field
{

    /**
     * @var null|string
     */
    protected $addressAdditional1;
    
    /**
     * @var null|string
     */
    protected $addressAdditional2;

    /**
     * @var null|string
     */
    protected $addressAdditional3;

    /**
     * @var null|string
     */
    protected $city;

    /**
     * @var null|string
     */
    protected $company;

    /**
     * @var null|string
     */
    protected $country;

    /**
     * @var null|string
     */
    protected $postBox;

    /**
     * @var null|string
     */
    protected $state;

    /**
     * @var null|string
     */
    protected $street;

    /**
     * @var null|string
     */
    protected $streetNumber;

    /**
     * @var null|string
     */
    protected $zipCode;

    /**
     * @var null|string
     */
    protected $businessName;

    /**
     * @return string|null
     */
    public function getAddressAdditional1(): ?string
    {
        return $this->addressAdditional1;
    }

    /**
     * @param string|null $addressAdditional1
     *
     * @return Address
     */
    public function setAddressAdditional1(?string $addressAdditional1): Address
    {
        $this->addressAdditional1 = $addressAdditional1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressAdditional2(): ?string
    {
        return $this->addressAdditional2;
    }

    /**
     * @param string|null $addressAdditional2
     *
     * @return Address
     */
    public function setAddressAdditional2(?string $addressAdditional2): Address
    {
        $this->addressAdditional2 = $addressAdditional2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressAdditional3(): ?string
    {
        return $this->addressAdditional3;
    }

    /**
     * @param string|null $addressAdditional3
     *
     * @return Address
     */
    public function setAddressAdditional3(?string $addressAdditional3): Address
    {
        $this->addressAdditional3 = $addressAdditional3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     *
     * @return Address
     */
    public function setCity(?string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $company
     *
     * @return Address
     */
    public function setCompany(?string $company): Address
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     *
     * @return Address
     */
    public function setCountry(?string $country): Address
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostBox(): ?string
    {
        return $this->postBox;
    }

    /**
     * @param string|null $postBox
     *
     * @return Address
     */
    public function setPostBox(?string $postBox): Address
    {
        $this->postBox = $postBox;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return Address
     */
    public function setState(?string $state): Address
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     *
     * @return Address
     */
    public function setStreet(?string $street): Address
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @param string|null $streetNumber
     *
     * @return Address
     */
    public function setStreetNumber(?string $streetNumber): Address
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     *
     * @return Address
     */
    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    /**
     * @param string|null $businessName
     *
     * @return Address
     */
    public function setBusinessName(?string $businessName): Address
    {
        $this->businessName = $businessName;

        return $this;
    }
    
}
