<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class CustomerData
 *
 * @package Worldline\Sips\Common\Fields
 */
class CustomerData extends Field
{

    /**
     *@var null|string
     */
    protected $birthCity;

    /**
     *@var null|string
     */
    protected $birthCountry;

    /**
     *@var null|string
     */
    protected $birthDate;

    /**
     *@var null|string
     */
    protected $birthZipCode;

    /**
     *@var null|string
     */
    protected $nationalityCountry;

    /**
     *@var null|string
     */
    protected $newPwd;

    /**
     *@var null|string
     */
    protected $pwd;

    /**
     *@var null|string
     */
    protected $maidenName;

    /**
     * @return string|null
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * @param string|null $birthCity
     *
     * @return CustomerData
     */
    public function setBirthCity(?string $birthCity): CustomerData
    {
        $this->birthCity = $birthCity;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    /**
     * @param string|null $birthCountry
     *
     * @return CustomerData
     */
    public function setBirthCountry(?string $birthCountry): CustomerData
    {
        $this->birthCountry = $birthCountry;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @param string|null $birthDate
     *
     * @return CustomerData
     */
    public function setBirthDate(?string $birthDate): CustomerData
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthZipCode(): ?string
    {
        return $this->birthZipCode;
    }

    /**
     * @param string|null $birthZipCode
     *
     * @return CustomerData
     */
    public function setBirthZipCode(?string $birthZipCode): CustomerData
    {
        $this->birthZipCode = $birthZipCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationalityCountry(): ?string
    {
        return $this->nationalityCountry;
    }

    /**
     * @param string|null $nationalityCountry
     *
     * @return CustomerData
     */
    public function setNationalityCountry(?string $nationalityCountry
    ): CustomerData {
        $this->nationalityCountry = $nationalityCountry;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewPwd(): ?string
    {
        return $this->newPwd;
    }

    /**
     * @param string|null $newPwd
     *
     * @return CustomerData
     */
    public function setNewPwd(?string $newPwd): CustomerData
    {
        $this->newPwd = $newPwd;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    /**
     * @param string|null $pwd
     *
     * @return CustomerData
     */
    public function setPwd(?string $pwd): CustomerData
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    /**
     * @param string|null $maidenName
     *
     * @return CustomerData
     */
    public function setMaidenName(?string $maidenName): CustomerData
    {
        $this->maidenName = $maidenName;

        return $this;
    }
    
}
