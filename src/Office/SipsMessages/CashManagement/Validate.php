<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class Validate
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class Validate extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;
    /**
     * @var null|int
     */
    protected $operationAmount;
    /**
     * @var null|string
     */
    protected $currencyCode;
    /**
     * @var null|string
     */
    protected $merchantId;
    /**
     * @var null|string
     */
    protected $interfaceVersion;
    /**
     * @var null|string
     */
    protected $transactionReference;
    /**
     * @var null|string
     */
    protected $operationOrigin;
    /**
     * @var null|string
     */
    protected $lastRecoveryIndicator;
    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;
    /**
     * @var null|string
     */
    protected $intermediateServiceProviderId;
    /**
     * @var null|string
     */
    protected $seal;
    /**
     * @var null|string
     */
    protected $keyVersion;
    /**
     * @var null|string
     */
    protected $sealAlgorithm;
    /**
     * @var null|string
     */
    protected $subMerchantId;
    /**
     * @var null|string
     */
    protected $subMerchantShortName;
    /**
     * @var null|string
     */
    protected $subMerchantCategoryCode;
    /**
     * @var null|string
     */
    protected $subMerchantLegalId;
    /**
     * @var null|Address
     */
    protected $subMerchantAddress;

    /**
     * Validate constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/cashManagement/validate";
        $this->setInterfaceVersion("CR_WS_2.27")
            ->setTransactionReference($this->generateReference());
    }

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return int|null
     */
    public function getOperationAmount(): ?int
    {
        return $this->operationAmount;
    }

    /**
     * @param int|null $operationAmount
     * @return Validate
     */
    public function setOperationAmount(?int $operationAmount): Validate
    {
        $this->operationAmount = $operationAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $currencyCode
     * @return Validate
     */
    public function setCurrencyCode(?string $currencyCode): Validate
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @param string|null $merchantId
     * @return Validate
     */
    public function setMerchantId(?string $merchantId): Validate
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     * @param string|null $interfaceVersion
     * @return Validate
     */
    public function setInterfaceVersion(?string $interfaceVersion): Validate
    {
        $this->interfaceVersion = $interfaceVersion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * @param string|null $transactionReference
     * @return Validate
     */
    public function setTransactionReference(?string $transactionReference): Validate
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperationOrigin(): ?string
    {
        return $this->operationOrigin;
    }

    /**
     * @param string|null $operationOrigin
     * @return Validate
     */
    public function setOperationOrigin(?string $operationOrigin): Validate
    {
        $this->operationOrigin = $operationOrigin;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastRecoveryIndicator(): ?string
    {
        return $this->lastRecoveryIndicator;
    }

    /**
     * @param string|null $lastRecoveryIndicator
     * @return Validate
     */
    public function setLastRecoveryIndicator(?string $lastRecoveryIndicator): Validate
    {
        $this->lastRecoveryIndicator = $lastRecoveryIndicator;
        return $this;
    }

    /**
     * @return S10TransactionReference|null
     */
    public function getS10TransactionReference(): ?S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    /**
     * @param S10TransactionReference|null $s10TransactionReference
     * @return Validate
     */
    public function setS10TransactionReference(?S10TransactionReference $s10TransactionReference): Validate
    {
        $this->s10TransactionReference = $s10TransactionReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntermediateServiceProviderId(): ?string
    {
        return $this->intermediateServiceProviderId;
    }

    /**
     * @param string|null $intermediateServiceProviderId
     * @return Validate
     */
    public function setIntermediateServiceProviderId(?string $intermediateServiceProviderId): Validate
    {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;
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
     * @return Validate
     */
    public function setSeal(?string $seal): Validate
    {
        $this->seal = $seal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    /**
     * @param string|null $keyVersion
     * @return Validate
     */
    public function setKeyVersion(?string $keyVersion): Validate
    {
        $this->keyVersion = $keyVersion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    /**
     * @param string|null $sealAlgorithm
     * @return Validate
     */
    public function setSealAlgorithm(?string $sealAlgorithm): Validate
    {
        $this->sealAlgorithm = $sealAlgorithm;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantId(): ?string
    {
        return $this->subMerchantId;
    }

    /**
     * @param string|null $subMerchantId
     * @return Validate
     */
    public function setSubMerchantId(?string $subMerchantId): Validate
    {
        $this->subMerchantId = $subMerchantId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantShortName(): ?string
    {
        return $this->subMerchantShortName;
    }

    /**
     * @param string|null $subMerchantShortName
     * @return Validate
     */
    public function setSubMerchantShortName(?string $subMerchantShortName): Validate
    {
        $this->subMerchantShortName = $subMerchantShortName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantCategoryCode(): ?string
    {
        return $this->subMerchantCategoryCode;
    }

    /**
     * @param string|null $subMerchantCategoryCode
     * @return Validate
     */
    public function setSubMerchantCategoryCode(?string $subMerchantCategoryCode): Validate
    {
        $this->subMerchantCategoryCode = $subMerchantCategoryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantLegalId(): ?string
    {
        return $this->subMerchantLegalId;
    }

    /**
     * @param string|null $subMerchantLegalId
     * @return Validate
     */
    public function setSubMerchantLegalId(?string $subMerchantLegalId): Validate
    {
        $this->subMerchantLegalId = $subMerchantLegalId;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getSubMerchantAddress(): ?Address
    {
        return $this->subMerchantAddress;
    }

    /**
     * @param Address|null $subMerchantAddress
     * @return Validate
     */
    public function setSubMerchantAddress(?Address $subMerchantAddress): Validate
    {
        $this->subMerchantAddress = $subMerchantAddress;
        return $this;
    }
    
    
}
