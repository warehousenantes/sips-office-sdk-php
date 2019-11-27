<?php


namespace Worldline\Sips\Office\SipsMessages\Token;


use Worldline\Sips\Common\Fields\PanDataList;
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
    protected $responseCode;

    /**
     * @var null|PanDataList
     */
    protected $responseTokenPanDataList;

    /**
     * @var null|string
     */
    protected $seal;

    /**
     * @var null|string
     */
    protected $errorFieldName;

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @return PanDataList|null
     */
    public function getResponseTokenPanDataList(): ?PanDataList
    {
        return $this->responseTokenPanDataList;
    }

    /**
     * @param PanDataList|null $responseTokenPanDataList
     *
     * @return PanToTokenResponse
     */
    public function setResponseTokenPanDataList(?PanDataList $responseTokenPanDataList
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
