<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class HolderData
 * @package Worldline\Sips\Common\Fields
 */
class HolderData extends Field
{
    /**
     * @var null|string
     */
    protected $birthCity;

    /**
     * @var null|string
     */
    protected $birthCountry;

    /**
     * @var null|string
     */
    protected $birthDate;

    /**
     * @var null|string
     */
    protected $birthZipCode;

    /**
     * @var null|string
     */
    protected $nationalityCountry;

    /**
     * @var null|string
     */
    protected $newPassword;

    /**
     * @var null|string
     */
    protected $password;

    /**
     * @var null|string
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
     * @return HolderData
     */
    public function setBirthCity(?string $birthCity): HolderData
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
     * @return HolderData
     */
    public function setBirthCountry(?string $birthCountry): HolderData
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
     * @return HolderData
     */
    public function setBirthDate(?string $birthDate): HolderData
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
     * @return HolderData
     */
    public function setBirthZipCode(?string $birthZipCode): HolderData
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
     * @return HolderData
     */
    public function setNationalityCountry(?string $nationalityCountry
    ): HolderData {
        $this->nationalityCountry = $nationalityCountry;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    /**
     * @param string|null $newPassword
     *
     * @return HolderData
     */
    public function setNewPassword(?string $newPassword): HolderData
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     *
     * @return HolderData
     */
    public function setPassword(?string $password): HolderData
    {
        $this->password = $password;

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
     * @return HolderData
     */
    public function setMaidenName(?string $maidenName): HolderData
    {
        $this->maidenName = $maidenName;

        return $this;
    }
    
}
