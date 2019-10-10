<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class WalletOrder
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class WalletOrder extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;

    /**
     * @var int
     */
    protected $amount;
    /**
     * @var int
     */
    protected $captureDay;
    /**
     * @var string
     */
    protected $captureMode;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $customerIpAddress;
    /**
     * @var string
     */
    protected $customerLanguage;
    /**
     * @var string
     */
    protected $cardCSCValue;
    /**
     * @var string
     */
    protected $invoiceReference;
    /**
     * @var string
     */
    protected $interfaceVersion;
    /**
     * @var string
     */
    protected $intermediateServiceProviderId;
    /**
     * @var int
     */
    protected $keyVersion;
    /**
     * @var string
     */
    protected $merchantId;
    /**
     * @var string
     */
    protected $merchantTransactionDateTime;
    /**
     * @var string
     */
    protected $merchantWalletId;
    /**
     * @var string
     */
    protected $orderChannel;
    /**
     * @var string
     */
    protected $orderId;
    /**
     * @var string
     */
    protected $paymentMeanId;
    /**
     * @var string
     */
    protected $returnContext;
    /**
     * @var string
     */
    protected $seal;
    /**
     * @var string
     */
    protected $sealAlgorithm;
    /**
     * @var string
     */
    protected $statementReference;
    /**
     * @var string
     */
    protected $transactionOrigin;
    /**
     * @var string
     */
    protected $paymentPattern;
    /**
     * @var Address
     */
    protected $billingAddess;
    /**
     * @var Contact
     */
    protected $billingContact;
    /**
     * @var Address
     */
    protected $customerAddress;
    /**
     * @var Contact
     */
    protected $customerContact;
    /**
     * @var Address
     */
    protected $deliveryAddress;
    /**
     * @var Contact
     */
    protected $deliveryContact;
    /**
     * @var FraudData
     */
    protected $fraudData;
    /**
     * @var Address
     */
    protected $holderAddress;
    /**
     * @var Contact
     */
    protected $holderContact;
    /**
     * @var AuthenticationData
     */
    protected $authenticationData;
    /**
     * @var string
     */
    protected $transactionReference;

    /**
     * WalletOrder constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/walletOrder";
        $this->setInterfaceVersion("IR_WS_2.27")
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
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return WalletOrder
     */
    public function setAmount(int $amount): WalletOrder
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getCaptureDay(): int
    {
        return $this->captureDay;
    }

    /**
     * @param int $captureDay
     *
     * @return WalletOrder
     */
    public function setCaptureDay(int $captureDay): WalletOrder
    {
        $this->captureDay = $captureDay;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaptureMode(): string
    {
        return $this->captureMode;
    }

    /**
     * @param string $captureMode
     *
     * @return WalletOrder
     */
    public function setCaptureMode(string $captureMode): WalletOrder
    {
        $this->captureMode = $captureMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return WalletOrder
     */
    public function setCurrencyCode(string $currencyCode): WalletOrder
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     *
     * @return WalletOrder
     */
    public function setCustomerId(string $customerId): WalletOrder
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerIpAddress(): string
    {
        return $this->customerIpAddress;
    }

    /**
     * @param string $customerIpAddress
     *
     * @return WalletOrder
     */
    public function setCustomerIpAddress(string $customerIpAddress): WalletOrder
    {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLanguage(): string
    {
        return $this->customerLanguage;
    }

    /**
     * @param string $customerLanguage
     *
     * @return WalletOrder
     */
    public function setCustomerLanguage(string $customerLanguage): WalletOrder
    {
        $this->customerLanguage = $customerLanguage;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardCSCValue(): string
    {
        return $this->cardCSCValue;
    }

    /**
     * @param string $cardCSCValue
     *
     * @return WalletOrder
     */
    public function setCardCSCValue(string $cardCSCValue): WalletOrder
    {
        $this->cardCSCValue = $cardCSCValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceReference(): string
    {
        return $this->invoiceReference;
    }

    /**
     * @param string $invoiceReference
     *
     * @return WalletOrder
     */
    public function setInvoiceReference(string $invoiceReference): WalletOrder
    {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getInterfaceVersion(): string
    {
        return $this->interfaceVersion;
    }

    /**
     * @param string $interfaceVersion
     *
     * @return WalletOrder
     */
    public function setInterfaceVersion(string $interfaceVersion): WalletOrder
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getIntermediateServiceProviderId(): string
    {
        return $this->intermediateServiceProviderId;
    }

    /**
     * @param string $intermediateServiceProviderId
     *
     * @return WalletOrder
     */
    public function setIntermediateServiceProviderId(
        string $intermediateServiceProviderId
    ): WalletOrder {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }

    /**
     * @return int
     */
    public function getKeyVersion(): int
    {
        return $this->keyVersion;
    }

    /**
     * @param int $keyVersion
     *
     * @return WalletOrder
     */
    public function setKeyVersion(int $keyVersion): WalletOrder
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     *
     * @return WalletOrder
     */
    public function setMerchantId(string $merchantId): WalletOrder
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionDateTime(): string
    {
        return $this->merchantTransactionDateTime;
    }

    /**
     * @param string $merchantTransactionDateTime
     *
     * @return WalletOrder
     */
    public function setMerchantTransactionDateTime(
        string $merchantTransactionDateTime
    ): WalletOrder {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantWalletId(): string
    {
        return $this->merchantWalletId;
    }

    /**
     * @param string $merchantWalletId
     *
     * @return WalletOrder
     */
    public function setMerchantWalletId(string $merchantWalletId): WalletOrder
    {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderChannel(): string
    {
        return $this->orderChannel;
    }

    /**
     * @param string $orderChannel
     *
     * @return WalletOrder
     */
    public function setOrderChannel(string $orderChannel): WalletOrder
    {
        $this->orderChannel = $orderChannel;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     *
     * @return WalletOrder
     */
    public function setOrderId(string $orderId): WalletOrder
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMeanId(): string
    {
        return $this->paymentMeanId;
    }

    /**
     * @param string $paymentMeanId
     *
     * @return WalletOrder
     */
    public function setPaymentMeanId(string $paymentMeanId): WalletOrder
    {
        $this->paymentMeanId = $paymentMeanId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnContext(): string
    {
        return $this->returnContext;
    }

    /**
     * @param string $returnContext
     *
     * @return WalletOrder
     */
    public function setReturnContext(string $returnContext): WalletOrder
    {
        $this->returnContext = $returnContext;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeal(): string
    {
        return $this->seal;
    }

    /**
     * @param string $seal
     *
     * @return WalletOrder
     */
    public function setSeal(string $seal): WalletOrder
    {
        $this->seal = $seal;

        return $this;
    }

    /**
     * @return string
     */
    public function getSealAlgorithm(): string
    {
        return $this->sealAlgorithm;
    }

    /**
     * @param string $sealAlgorithm
     *
     * @return WalletOrder
     */
    public function setSealAlgorithm(string $sealAlgorithm): WalletOrder
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatementReference(): string
    {
        return $this->statementReference;
    }

    /**
     * @param string $statementReference
     *
     * @return WalletOrder
     */
    public function setStatementReference(string $statementReference
    ): WalletOrder {
        $this->statementReference = $statementReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionOrigin(): string
    {
        return $this->transactionOrigin;
    }

    /**
     * @param string $transactionOrigin
     *
     * @return WalletOrder
     */
    public function setTransactionOrigin(string $transactionOrigin): WalletOrder
    {
        $this->transactionOrigin = $transactionOrigin;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentPattern(): string
    {
        return $this->paymentPattern;
    }

    /**
     * @param string $paymentPattern
     *
     * @return WalletOrder
     */
    public function setPaymentPattern(string $paymentPattern): WalletOrder
    {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddess(): Address
    {
        return $this->billingAddess;
    }

    /**
     * @param Address $billingAddess
     *
     * @return WalletOrder
     */
    public function setBillingAddess(
        Address $billingAddess
    ): WalletOrder {
        $this->billingAddess = $billingAddess;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getBillingContact(): Contact
    {
        return $this->billingContact;
    }

    /**
     * @param Contact $billingContact
     *
     * @return WalletOrder
     */
    public function setBillingContact(
        Contact $billingContact
    ): WalletOrder {
        $this->billingContact = $billingContact;

        return $this;
    }

    /**
     * @return Address
     */
    public function getCustomerAddress(): Address
    {
        return $this->customerAddress;
    }

    /**
     * @param Address $customerAddress
     *
     * @return WalletOrder
     */
    public function setCustomerAddress(
        Address $customerAddress
    ): WalletOrder {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getCustomerContact(): Contact
    {
        return $this->customerContact;
    }

    /**
     * @param Contact $customerContact
     *
     * @return WalletOrder
     */
    public function setCustomerContact(
        Contact $customerContact
    ): WalletOrder {
        $this->customerContact = $customerContact;

        return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    /**
     * @param Address $deliveryAddress
     *
     * @return WalletOrder
     */
    public function setDeliveryAddress(
        Address $deliveryAddress
    ): WalletOrder {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getDeliveryContact(): Contact
    {
        return $this->deliveryContact;
    }

    /**
     * @param Contact $deliveryContact
     *
     * @return WalletOrder
     */
    public function setDeliveryContact(
        Contact $deliveryContact
    ): WalletOrder {
        $this->deliveryContact = $deliveryContact;

        return $this;
    }

    /**
     * @return FraudData
     */
    public function getFraudData(): FraudData
    {
        return $this->fraudData;
    }

    /**
     * @param FraudData $fraudData
     *
     * @return WalletOrder
     */
    public function setFraudData(
        FraudData $fraudData
    ): WalletOrder {
        $this->fraudData = $fraudData;

        return $this;
    }

    /**
     * @return Address
     */
    public function getHolderAddress(): Address
    {
        return $this->holderAddress;
    }

    /**
     * @param Address $holderAddress
     *
     * @return WalletOrder
     */
    public function setHolderAddress(
        Address $holderAddress
    ): WalletOrder {
        $this->holderAddress = $holderAddress;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getHolderContact(): Contact
    {
        return $this->holderContact;
    }

    /**
     * @param Contact $holderContact
     *
     * @return WalletOrder
     */
    public function setHolderContact(
        Contact $holderContact
    ): WalletOrder {
        $this->holderContact = $holderContact;

        return $this;
    }

    /**
     * @return AuthenticationData
     */
    public function getAuthenticationData(
    ): AuthenticationData
    {
        return $this->authenticationData;
    }

    /**
     * @param AuthenticationData $authenticationData
     *
     * @return WalletOrder
     */
    public function setAuthenticationData(
        AuthenticationData $authenticationData
    ): WalletOrder {
        $this->authenticationData = $authenticationData;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionReference(): string
    {
        return $this->transactionReference;
    }

    /**
     * @param string $transactionReference
     *
     * @return WalletOrder
     */
    public function setTransactionReference(string $transactionReference
    ): WalletOrder {
        $this->transactionReference = $transactionReference;

        return $this;
    }

}
