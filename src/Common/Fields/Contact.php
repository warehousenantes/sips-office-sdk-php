<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class Contact
 * @package Worldline\Sips\Common\Fields
 */
class Contact extends Field
{
    /**
     *@var null|string
     */
    protected $email;
    
    /**
     *@var null|string
     */
    protected $firstname;
    
    /**
     *@var null|string
     */
    protected $gender;
    
    /**
     *@var null|string
     */
    protected $lastname;
    
    /**
     *@var null|string
     */
    protected $legalId;
    
    /**
     *@var null|string
     */
    protected $mobile;
    
    /**
     *@var null|string
     */
    protected $phone;
    
    /**
     *@var null|string
     */
    protected $title;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return Contact
     */
    public function setEmail(?string $email): Contact
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     *
     * @return Contact
     */
    public function setFirstname(?string $firstname): Contact
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     *
     * @return Contact
     */
    public function setGender(?string $gender): Contact
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     *
     * @return Contact
     */
    public function setLastname(?string $lastname): Contact
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegalId(): ?string
    {
        return $this->legalId;
    }

    /**
     * @param string|null $legalId
     *
     * @return Contact
     */
    public function setLegalId(?string $legalId): Contact
    {
        $this->legalId = $legalId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string|null $mobile
     *
     * @return Contact
     */
    public function setMobile(?string $mobile): Contact
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     *
     * @return Contact
     */
    public function setPhone(?string $phone): Contact
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return Contact
     */
    public function setTitle(?string $title): Contact
    {
        $this->title = $title;

        return $this;
    }
    
}
