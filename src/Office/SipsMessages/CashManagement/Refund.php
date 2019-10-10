<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\Fields\ShoppingCartDetail;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class Refund
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class Refund extends SipsMessage
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
     * @var null|PaymentMeanData
     */
    protected $paymentMeanData;
    
    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;
    
    /**
     * @var null|ShoppingCartDetail
     */
    protected $shoppingCartDetail;
    
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
     * Refund constructor.
     */
    public function __construct()
    {
        $this->serviceUrl  = "rs-services/v2/cashManagement/refund";
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
     * @return Refund
     */
    public function setOperationAmount(?int $operationAmount): Refund
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
     * @return Refund
     */
    public function setCurrencyCode(?string $currencyCode): Refund
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
     * @return Refund
     */
    public function setMerchantId(?string $merchantId): Refund
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
     * @return Refund
     */
    public function setInterfaceVersion(?string $interfaceVersion): Refund
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
     * @return Refund
     */
    public function setTransactionReference(?string $transactionReference
    ): Refund {
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
     * @return Refund
     */
    public function setOperationOrigin(?string $operationOrigin): Refund
    {
        $this->operationOrigin = $operationOrigin;

        return $this;
    }

    /**
     * @return PaymentMeanData|null
     */
    public function getPaymentMeanData(): ?PaymentMeanData
    {
        return $this->paymentMeanData;
    }

    /**
     * @param PaymentMeanData|null $paymentMeanData
     *
     * @return Refund
     */
    public function setPaymentMeanData(?PaymentMeanData $paymentMeanData): Refund
    {
        $this->paymentMeanData = $paymentMeanData;

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
     * @return Refund
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): Refund {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return ShoppingCartDetail|null
     */
    public function getShoppingCartDetail(
    ): ?ShoppingCartDetail
    {
        return $this->shoppingCartDetail;
    }

    /**
     * @param ShoppingCartDetail|null $shoppingCartDetail
     *
     * @return Refund
     */
    public function setShoppingCartDetail(
        ?ShoppingCartDetail $shoppingCartDetail
    ): Refund {
        $this->shoppingCartDetail = $shoppingCartDetail;

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
     * @return Refund
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): Refund {
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
     * @return Refund
     */
    public function setSeal(?string $seal): Refund
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
     * @return Refund
     */
    public function setKeyVersion(?string $keyVersion): Refund
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
     * @return Refund
     */
    public function setSealAlgorithm(?string $sealAlgorithm): Refund
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
     * @return Refund
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): Refund {
        $this->customerContact = $customerContact;

        return $this;
    }
    
}
