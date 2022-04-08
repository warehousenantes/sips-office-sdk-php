<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class CustomerData.
 */
class CustomerData extends Field
{
    private ?string $birthCity = null;

    private ?string $birthCountry = null;

    private ?string $birthDate = null;

    private ?string $birthZipCode = null;

    private ?string $nationalityCountry = null;

    private ?string $newPwd = null;

    private ?string $pwd = null;

    private ?string $maidenName = null;

    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    public function setBirthCity(?string $birthCity): self
    {
        $this->birthCity = $birthCity;

        return $this;
    }

    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    public function setBirthCountry(?string $birthCountry): self
    {
        $this->birthCountry = $birthCountry;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBirthZipCode(): ?string
    {
        return $this->birthZipCode;
    }

    public function setBirthZipCode(?string $birthZipCode): self
    {
        $this->birthZipCode = $birthZipCode;

        return $this;
    }

    public function getNationalityCountry(): ?string
    {
        return $this->nationalityCountry;
    }

    public function setNationalityCountry(
        ?string $nationalityCountry
    ): self {
        $this->nationalityCountry = $nationalityCountry;

        return $this;
    }

    public function getNewPwd(): ?string
    {
        return $this->newPwd;
    }

    public function setNewPwd(?string $newPwd): self
    {
        $this->newPwd = $newPwd;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(?string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    public function setMaidenName(?string $maidenName): self
    {
        $this->maidenName = $maidenName;

        return $this;
    }
}
