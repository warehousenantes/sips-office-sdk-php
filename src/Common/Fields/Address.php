<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class Address.
 */
class Address extends Field
{
    private ?string $addressAdditional1 = null;

    private ?string $addressAdditional2 = null;

    private ?string $addressAdditional3 = null;

    private ?string $city = null;

    private ?string $company = null;

    private ?string $country = null;

    private ?string $postBox = null;

    private ?string $state = null;

    private ?string $street = null;

    private ?string $streetNumber = null;

    private ?string $zipCode = null;

    private ?string $businessName = null;

    public function getAddressAdditional1(): ?string
    {
        return $this->addressAdditional1;
    }

    public function setAddressAdditional1(?string $addressAdditional1): self
    {
        $this->addressAdditional1 = $addressAdditional1;

        return $this;
    }

    public function getAddressAdditional2(): ?string
    {
        return $this->addressAdditional2;
    }

    public function setAddressAdditional2(?string $addressAdditional2): self
    {
        $this->addressAdditional2 = $addressAdditional2;

        return $this;
    }

    public function getAddressAdditional3(): ?string
    {
        return $this->addressAdditional3;
    }

    public function setAddressAdditional3(?string $addressAdditional3): self
    {
        $this->addressAdditional3 = $addressAdditional3;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPostBox(): ?string
    {
        return $this->postBox;
    }

    public function setPostBox(?string $postBox): self
    {
        $this->postBox = $postBox;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(?string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    public function setBusinessName(?string $businessName): self
    {
        $this->businessName = $businessName;

        return $this;
    }
}
