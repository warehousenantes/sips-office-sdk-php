<?php


namespace Worldline\Sips\WalletPage\SipsMessages;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class WalletManagementInitResponse
 * @package Worldline\Sips\WalletPage\SipsMessages
 */
class WalletManagementInitResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    protected $redirectionData;
    
    /**
     * @var null|string
     */
    protected $redirectionStatusCode;
    
    /**
     * @var null|string
     */
    protected $redirectionStatusMessage;
    
    /**
     * @var null|string
     */
    protected $redirectionUrl;
    
    /**
     * @var null|string
     */
    protected $redirectionVersion;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $errorfieldName;

    /**
     * @return string|null
     */
    public function getRedirectionData(): ?string
    {
        return $this->redirectionData;
    }

    /**
     * @param string|null $redirectionData
     *
     * @return WalletManagementInitResponse
     */
    public function setRedirectionData(?string $redirectionData
    ): WalletManagementInitResponse {
        $this->redirectionData = $redirectionData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionStatusCode(): ?string
    {
        return $this->redirectionStatusCode;
    }

    /**
     * @param string|null $redirectionStatusCode
     *
     * @return WalletManagementInitResponse
     */
    public function setRedirectionStatusCode(?string $redirectionStatusCode
    ): WalletManagementInitResponse {
        $this->redirectionStatusCode = $redirectionStatusCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionStatusMessage(): ?string
    {
        return $this->redirectionStatusMessage;
    }

    /**
     * @param string|null $redirectionStatusMessage
     *
     * @return WalletManagementInitResponse
     */
    public function setRedirectionStatusMessage(
        ?string $redirectionStatusMessage
    ): WalletManagementInitResponse {
        $this->redirectionStatusMessage = $redirectionStatusMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionUrl(): ?string
    {
        return $this->redirectionUrl;
    }

    /**
     * @param string|null $redirectionUrl
     *
     * @return WalletManagementInitResponse
     */
    public function setRedirectionUrl(?string $redirectionUrl
    ): WalletManagementInitResponse {
        $this->redirectionUrl = $redirectionUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectionVersion(): ?string
    {
        return $this->redirectionVersion;
    }

    /**
     * @param string|null $redirectionVersion
     *
     * @return WalletManagementInitResponse
     */
    public function setRedirectionVersion(?string $redirectionVersion
    ): WalletManagementInitResponse {
        $this->redirectionVersion = $redirectionVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeal(): ?string
    {
        return $this->seal;
    }

    /**
     * @param string|null $seal
     *
     * @return WalletManagementInitResponse
     */
    public function setSeal(?string $seal): WalletManagementInitResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorfieldName(): ?string
    {
        return $this->errorfieldName;
    }

    /**
     * @param string|null $errorfieldName
     *
     * @return WalletManagementInitResponse
     */
    public function setErrorfieldName(?string $errorfieldName
    ): WalletManagementInitResponse {
        $this->errorfieldName = $errorfieldName;

        return $this;
    }
    
}