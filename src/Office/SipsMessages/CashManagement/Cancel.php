<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class Cancel
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class Cancel extends SipsMessage
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
     * @var null|Contact
     */
    protected $customerContact;

    /**
     * Cancel constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/cashManagement/cancel";
        $this->setInterfaceVersion("CR_WS_2.27");
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
     *
     * @return Cancel
     */
    public function setOperationAmount(?int $operationAmount): Cancel
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
     *
     * @return Cancel
     */
    public function setCurrencyCode(?string $currencyCode): Cancel
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
     *
     * @return Cancel
     */
    public function setMerchantId(?string $merchantId): Cancel
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
     *
     * @return Cancel
     */
    public function setInterfaceVersion(?string $interfaceVersion): Cancel
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
     *
     * @return Cancel
     */
    public function setTransactionReference(?string $transactionReference
    ): Cancel {
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
     *
     * @return Cancel
     */
    public function setOperationOrigin(?string $operationOrigin): Cancel
    {
        $this->operationOrigin = $operationOrigin;

        return $this;
    }

    /**
     * @return S10TransactionReference|null
     */
    public function getS10TransactionReference(
    ): ?S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    /**
     * @param S10TransactionReference|null $s10TransactionReference
     *
     * @return Cancel
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): Cancel {
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
     *
     * @return Cancel
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): Cancel {
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
     *
     * @return Cancel
     */
    public function setSeal(?string $seal): Cancel
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
     *
     * @return Cancel
     */
    public function setKeyVersion(?string $keyVersion): Cancel
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
     *
     * @return Cancel
     */
    public function setSealAlgorithm(?string $sealAlgorithm): Cancel
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getCustomerContact(): ?Contact
    {
        return $this->customerContact;
    }

    /**
     * @param Contact|null $customerContact
     *
     * @return Cancel
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): Cancel {
        $this->customerContact = $customerContact;

        return $this;
    }
    
}
