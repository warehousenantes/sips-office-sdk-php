<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\DeliveryData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentProviderInitialize
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class PaymentProviderInitialize extends SipsMessage
{
     /**
     * @var string
     */
    private $serviceUrl;
    
     /**
     * @var null|int
     */
    protected $amount;
    
     /**
     * @var null|int
     */
    protected $captureDay;
    
     /**
     * @var null|string
     */
    protected $captureMode;
    
     /**
     * @var null|string
     */
    protected $currencyCode;
    
     /**
     * @var null|string
     */
    protected $customerId;
    
     /**
     * @var null|string
     */
    protected $customerIpAddress;
    
     /**
     * @var null|string
     */
    protected $customerLanguage;
    
     /**
     * @var null|string
     */
    protected $interfaceVersion;
    
     /**
     * @var null|string
     */
    protected $intermediateServiceProviderId;
    
     /**
     * @var null|string
     */
    protected $invoiceReference;
    
     /**
     * @var null|int
     */
    protected $keyVersion;
    
     /**
     * @var null|string
     */
    protected $merchantId;
    
     /**
     * @var null|string
     */
    protected $merchantReturnUrl;
    
     /**
     * @var null|string
     */
    protected $merchantTransactionDateTime;
    
     /**
     * @var null|string
     */
    protected $orderChannel;
    
     /**
     * @var null|string
     */
    protected $orderId;
    
     /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    
     /**
     * @var null|string
     */
    protected $paymentPattern;
    
     /**
     * @var null|string
     */
    protected $returnContext;
    
     /**
     * @var null|string
     */
    protected $seal;
    
     /**
     * @var null|string
     */
    protected $sealAlgorithm;
    
     /**
     * @var null|string
     */
    protected $statementReference;
    
     /**
     * @var null|string
     */
    protected $transactionReference;
    
     /**
     * @var null|string
     */
    protected $transactionOrigin;
    
     /**
     * @var null|Address
     */
    protected $billingAddress;
    
     /**
     * @var null|Contact
     */
    protected $billingContact;
    
     /**
     * @var null|Address
     */
    protected $customerAddress;
    
     /**
     * @var null|Contact
     */
    protected $customerContact;
    
     /**
     * @var null|Address
     */
    protected $deliveryAddress;
    
     /**
     * @var null|Contact
     */
    protected $deliveryContact;
    
     /**
     * @var null|DeliveryData
     */
    protected $deliveryData;
    
     /**
     * @var null|AuthenticationData
     */
    protected $authenticationData;
    
     /**
     * @var null|CustomerData
     */
    protected $customerData;
    
     /**
     * @var null|FraudData
     */
    protected $fraudData;
    
     /**
     * @var null|Address
     */
    protected $holderAddress;
    
     /**
     * @var null|Contact
     */
    protected $holderContact;
    
     /**
     * @var null|int
     */
    protected $responseKeyVersion;
    
     /**
     * @var null|PaymentMeanData
     */
    protected $paymentMeanData;

    /**
     * PaymentProviderInitialize constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/paymentProviderInitialize";
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
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return PaymentProviderInitialize
     */
    public function setAmount(?int $amount): PaymentProviderInitialize
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCaptureDay(): ?int
    {
        return $this->captureDay;
    }

    /**
     * @param int|null $captureDay
     *
     * @return PaymentProviderInitialize
     */
    public function setCaptureDay(?int $captureDay): PaymentProviderInitialize
    {
        $this->captureDay = $captureDay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureMode(): ?string
    {
        return $this->captureMode;
    }

    /**
     * @param string|null $captureMode
     *
     * @return PaymentProviderInitialize
     */
    public function setCaptureMode(?string $captureMode
    ): PaymentProviderInitialize {
        $this->captureMode = $captureMode;

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
     * @return PaymentProviderInitialize
     */
    public function setCurrencyCode(?string $currencyCode
    ): PaymentProviderInitialize {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     *
     * @return PaymentProviderInitialize
     */
    public function setCustomerId(?string $customerId
    ): PaymentProviderInitialize {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    /**
     * @param string|null $customerIpAddress
     *
     * @return PaymentProviderInitialize
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): PaymentProviderInitialize {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerLanguage(): ?string
    {
        return $this->customerLanguage;
    }

    /**
     * @param string|null $customerLanguage
     *
     * @return PaymentProviderInitialize
     */
    public function setCustomerLanguage(?string $customerLanguage
    ): PaymentProviderInitialize {
        $this->customerLanguage = $customerLanguage;

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
     * @return PaymentProviderInitialize
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): PaymentProviderInitialize {
        $this->interfaceVersion = $interfaceVersion;

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
     * @return PaymentProviderInitialize
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): PaymentProviderInitialize {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    /**
     * @param string|null $invoiceReference
     *
     * @return PaymentProviderInitialize
     */
    public function setInvoiceReference(?string $invoiceReference
    ): PaymentProviderInitialize {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getKeyVersion(): ?int
    {
        return $this->keyVersion;
    }

    /**
     * @param int|null $keyVersion
     *
     * @return PaymentProviderInitialize
     */
    public function setKeyVersion(?int $keyVersion): PaymentProviderInitialize
    {
        $this->keyVersion = $keyVersion;

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
     * @return PaymentProviderInitialize
     */
    public function setMerchantId(?string $merchantId
    ): PaymentProviderInitialize {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantReturnUrl(): ?string
    {
        return $this->merchantReturnUrl;
    }

    /**
     * @param string|null $merchantReturnUrl
     *
     * @return PaymentProviderInitialize
     */
    public function setMerchantReturnUrl(?string $merchantReturnUrl
    ): PaymentProviderInitialize {
        $this->merchantReturnUrl = $merchantReturnUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantTransactionDateTime(): ?string
    {
        return $this->merchantTransactionDateTime;
    }

    /**
     * @param string|null $merchantTransactionDateTime
     *
     * @return PaymentProviderInitialize
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): PaymentProviderInitialize {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderChannel(): ?string
    {
        return $this->orderChannel;
    }

    /**
     * @param string|null $orderChannel
     *
     * @return PaymentProviderInitialize
     */
    public function setOrderChannel(?string $orderChannel
    ): PaymentProviderInitialize {
        $this->orderChannel = $orderChannel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string|null $orderId
     *
     * @return PaymentProviderInitialize
     */
    public function setOrderId(?string $orderId): PaymentProviderInitialize
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @param string|null $paymentMeanBrand
     *
     * @return PaymentProviderInitialize
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): PaymentProviderInitialize {
        $this->paymentMeanBrand = $paymentMeanBrand;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    /**
     * @param string|null $paymentPattern
     *
     * @return PaymentProviderInitialize
     */
    public function setPaymentPattern(?string $paymentPattern
    ): PaymentProviderInitialize {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    /**
     * @param string|null $returnContext
     *
     * @return PaymentProviderInitialize
     */
    public function setReturnContext(?string $returnContext
    ): PaymentProviderInitialize {
        $this->returnContext = $returnContext;

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
     * @return PaymentProviderInitialize
     */
    public function setSeal(?string $seal): PaymentProviderInitialize
    {
        $this->seal = $seal;

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
     * @return PaymentProviderInitialize
     */
    public function setSealAlgorithm(?string $sealAlgorithm
    ): PaymentProviderInitialize {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatementReference(): ?string
    {
        return $this->statementReference;
    }

    /**
     * @param string|null $statementReference
     *
     * @return PaymentProviderInitialize
     */
    public function setStatementReference(?string $statementReference
    ): PaymentProviderInitialize {
        $this->statementReference = $statementReference;

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
     * @return PaymentProviderInitialize
     */
    public function setTransactionReference(?string $transactionReference
    ): PaymentProviderInitialize {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionOrigin(): ?string
    {
        return $this->transactionOrigin;
    }

    /**
     * @param string|null $transactionOrigin
     *
     * @return PaymentProviderInitialize
     */
    public function setTransactionOrigin(?string $transactionOrigin
    ): PaymentProviderInitialize {
        $this->transactionOrigin = $transactionOrigin;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address|null $billingAddress
     *
     * @return PaymentProviderInitialize
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): PaymentProviderInitialize {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getBillingContact(): ?Contact
    {
        return $this->billingContact;
    }

    /**
     * @param Contact|null $billingContact
     *
     * @return PaymentProviderInitialize
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): PaymentProviderInitialize {
        $this->billingContact = $billingContact;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getCustomerAddress(): ?Address
    {
        return $this->customerAddress;
    }

    /**
     * @param Address|null $customerAddress
     *
     * @return PaymentProviderInitialize
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): PaymentProviderInitialize {
        $this->customerAddress = $customerAddress;

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
     * @return PaymentProviderInitialize
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): PaymentProviderInitialize {
        $this->customerContact = $customerContact;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    /**
     * @param Address|null $deliveryAddress
     *
     * @return PaymentProviderInitialize
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): PaymentProviderInitialize {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getDeliveryContact(): ?Contact
    {
        return $this->deliveryContact;
    }

    /**
     * @param Contact|null $deliveryContact
     *
     * @return PaymentProviderInitialize
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): PaymentProviderInitialize {
        $this->deliveryContact = $deliveryContact;

        return $this;
    }

    /**
     * @return DeliveryData|null
     */
    public function getDeliveryData(
    ): ?DeliveryData
    {
        return $this->deliveryData;
    }

    /**
     * @param DeliveryData|null $deliveryData
     *
     * @return PaymentProviderInitialize
     */
    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): PaymentProviderInitialize {
        $this->deliveryData = $deliveryData;

        return $this;
    }

    /**
     * @return AuthenticationData|null
     */
    public function getAuthenticationData(
    ): ?AuthenticationData
    {
        return $this->authenticationData;
    }

    /**
     * @param AuthenticationData|null $authenticationData
     *
     * @return PaymentProviderInitialize
     */
    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): PaymentProviderInitialize {
        $this->authenticationData = $authenticationData;

        return $this;
    }

    /**
     * @return CustomerData|null
     */
    public function getCustomerData(
    ): ?CustomerData
    {
        return $this->customerData;
    }

    /**
     * @param CustomerData|null $customerData
     *
     * @return PaymentProviderInitialize
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): PaymentProviderInitialize {
        $this->customerData = $customerData;

        return $this;
    }

    /**
     * @return FraudData|null
     */
    public function getFraudData(): ?FraudData
    {
        return $this->fraudData;
    }

    /**
     * @param FraudData|null $fraudData
     *
     * @return PaymentProviderInitialize
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): PaymentProviderInitialize {
        $this->fraudData = $fraudData;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getHolderAddress(): ?Address
    {
        return $this->holderAddress;
    }

    /**
     * @param Address|null $holderAddress
     *
     * @return PaymentProviderInitialize
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): PaymentProviderInitialize {
        $this->holderAddress = $holderAddress;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getHolderContact(): ?Contact
    {
        return $this->holderContact;
    }

    /**
     * @param Contact|null $holderContact
     *
     * @return PaymentProviderInitialize
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): PaymentProviderInitialize {
        $this->holderContact = $holderContact;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getResponseKeyVersion(): ?int
    {
        return $this->responseKeyVersion;
    }

    /**
     * @param int|null $responseKeyVersion
     *
     * @return PaymentProviderInitialize
     */
    public function setResponseKeyVersion(?int $responseKeyVersion
    ): PaymentProviderInitialize {
        $this->responseKeyVersion = $responseKeyVersion;

        return $this;
    }

    /**
     * @return PaymentMeanData|null
     */
    public function getPaymentMeanData(
    ): ?PaymentMeanData
    {
        return $this->paymentMeanData;
    }

    /**
     * @param PaymentMeanData|null $paymentMeanData
     *
     * @return PaymentProviderInitialize
     */
    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): PaymentProviderInitialize {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

}
