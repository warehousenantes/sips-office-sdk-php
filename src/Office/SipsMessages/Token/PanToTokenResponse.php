<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Token;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PanToTokenResponse.
 */
class PanToTokenResponse extends SipsMessage
{
    private ?string $responseCode = null;

    private ?array $responseTokenPanDataList = null;

    private ?string $seal = null;

    private ?string $errorFieldName = null;

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function getResponseTokenPanDataList(): ?array
    {
        return $this->responseTokenPanDataList;
    }

    public function setResponseTokenPanDataList(
        ?array $responseTokenPanDataList
    ): self {
        $this->responseTokenPanDataList = $responseTokenPanDataList;

        return $this;
    }

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(
        ?string $errorFieldName
    ): self {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }
}
