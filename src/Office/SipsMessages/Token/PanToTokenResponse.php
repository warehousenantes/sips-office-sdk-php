<?php


namespace Worldline\Sips\Office\SipsMessages\Token;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PanToTokenResponse
 *
 * @package Worldline\Sips\Office\SipsMessages\Token
 */
class PanToTokenResponse extends SipsMessage
{
    /**
     * @var null|string
     */
    private $responseCode;

    /**
     * @var null|array
     */
    private $responseTokenPanDataList;

    /**
     * @var null|string
     */
    private $seal;

    /**
     * @var null|string
     */
    private $errorFieldName;

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @return array|null
     */
    public function getResponseTokenPanDataList(): ?array
    {
        return $this->responseTokenPanDataList;
    }

    /**
     * @param array|null $responseTokenPanDataList
     *
     * @return PanToTokenResponse
     */
    public function setResponseTokenPanDataList(?array $responseTokenPanDataList
    ): PanToTokenResponse {
        $this->responseTokenPanDataList = $responseTokenPanDataList;

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
     * @return PanToTokenResponse
     */
    public function setSeal(?string $seal): PanToTokenResponse
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    /**
     * @param string|null $errorFieldName
     *
     * @return PanToTokenResponse
     */
    public function setErrorFieldName(?string $errorFieldName
    ): PanToTokenResponse {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
    
}
