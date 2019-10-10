<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerAccountHistoric;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\DeliveryData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\Fields\OrderContext;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\Fields\ShoppingCartDetail;
use Worldline\Sips\Common\Fields\TravelContext;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardCheckEnrollment
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardCheckEnrollment extends SipsMessage
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
    protected $cardCSCValue;

    /**
     * @var null|string
     */
    protected $cardExpiryDate;

    /**
     * @var null|string
     */
    protected $cardNumber;

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
    protected $invoiceReference;

    /**
     * @var null|string
     */
    protected $merchantId;

    /**
     * @var null|string
     */
    protected $merchantName;

    /**
     * @var null|string
     */
    protected $merchantReturnUrl;

    /**
     * @var null|string
     */
    protected $merchantUrl;

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
    protected $returnContext;

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
    protected $transactionOrigin;

    /**
     * @var null|string
     */
    protected $statementReference;

    /**
     * @var null|string
     */
    protected $paymentPattern;

    /**
     * @var null|string
     */
    protected $customerIpAddress;

    /**
     * @var null|string
     */
    protected $customerLanguage;

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
     * @var null|Address
     */
    protected $holderAddress;

    /**
     * @var null|Contact
     */
    protected $holderContact;

    /**
     * @var null|CustomerData
     */
    protected $customerData;

    /**
     * @var null|ShoppingCartDetail
     */
    protected $shoppingCartDetail;

    /**
     * @var null|FraudData
     */
    protected $fraudData;

    /**
     * @var null|AuthenticationData
     */
    protected $authenticationData;

    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;

    /**
     * @var null|string
     */
    protected $panType;

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
    protected $paymentMeanBrand;

    /**
     * @var null|string
     */
    protected $paymentMeanBrandSelectionStatus;

    /**
     * @var null|TravelContext
     */
    protected $travelContext;

    /**
     * @var null|OrderContext
     */
    protected $orderContext;

    /**
     * @var null|PaymentMeanData
     */
    protected $paymentMeanData;

    /**
     * @var null|CustomerAccountHistoric
     */
    protected $customerAccountHistoric;


    /**
     * CardCheckEnrollment constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/cardCheckEnrollment";
        $this->setTransactionReference($this->generateReference())
            ->setInterfaceVersion("IR_WS_2.27");
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
     * @return CardCheckEnrollment
     */
    public function setAmount(?int $amount): CardCheckEnrollment
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
     * @return CardCheckEnrollment
     */
    public function setCaptureDay(?int $captureDay): CardCheckEnrollment
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
     * @return CardCheckEnrollment
     */
    public function setCaptureMode(?string $captureMode): CardCheckEnrollment
    {
        $this->captureMode = $captureMode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardCSCValue(): ?string
    {
        return $this->cardCSCValue;
    }

    /**
     * @param string|null $cardCSCValue
     *
     * @return CardCheckEnrollment
     */
    public function setCardCSCValue(?string $cardCSCValue): CardCheckEnrollment
    {
        $this->cardCSCValue = $cardCSCValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    /**
     * @param string|null $cardExpiryDate
     *
     * @return CardCheckEnrollment
     */
    public function setCardExpiryDate(?string $cardExpiryDate
    ): CardCheckEnrollment {
        $this->cardExpiryDate = $cardExpiryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param string|null $cardNumber
     *
     * @return CardCheckEnrollment
     */
    public function setCardNumber(?string $cardNumber): CardCheckEnrollment
    {
        $this->cardNumber = $cardNumber;

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
     * @return CardCheckEnrollment
     */
    public function setCurrencyCode(?string $currencyCode): CardCheckEnrollment
    {
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
     * @return CardCheckEnrollment
     */
    public function setCustomerId(?string $customerId): CardCheckEnrollment
    {
        $this->customerId = $customerId;

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
     * @return CardCheckEnrollment
     */
    public function setInvoiceReference(?string $invoiceReference
    ): CardCheckEnrollment {
        $this->invoiceReference = $invoiceReference;

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
     * @return CardCheckEnrollment
     */
    public function setMerchantId(?string $merchantId): CardCheckEnrollment
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
     * @param string|null $merchantName
     *
     * @return CardCheckEnrollment
     */
    public function setMerchantName(?string $merchantName): CardCheckEnrollment
    {
        $this->merchantName = $merchantName;

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
     * @return CardCheckEnrollment
     */
    public function setMerchantReturnUrl(?string $merchantReturnUrl
    ): CardCheckEnrollment {
        $this->merchantReturnUrl = $merchantReturnUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantUrl(): ?string
    {
        return $this->merchantUrl;
    }

    /**
     * @param string|null $merchantUrl
     *
     * @return CardCheckEnrollment
     */
    public function setMerchantUrl(?string $merchantUrl): CardCheckEnrollment
    {
        $this->merchantUrl = $merchantUrl;

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
     * @return CardCheckEnrollment
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setOrderChannel(?string $orderChannel): CardCheckEnrollment
    {
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
     * @return CardCheckEnrollment
     */
    public function setOrderId(?string $orderId): CardCheckEnrollment
    {
        $this->orderId = $orderId;

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
     * @return CardCheckEnrollment
     */
    public function setReturnContext(?string $returnContext
    ): CardCheckEnrollment {
        $this->returnContext = $returnContext;

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
     * @return CardCheckEnrollment
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setTransactionReference(?string $transactionReference
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setTransactionOrigin(?string $transactionOrigin
    ): CardCheckEnrollment {
        $this->transactionOrigin = $transactionOrigin;

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
     * @return CardCheckEnrollment
     */
    public function setStatementReference(?string $statementReference
    ): CardCheckEnrollment {
        $this->statementReference = $statementReference;

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
     * @return CardCheckEnrollment
     */
    public function setPaymentPattern(?string $paymentPattern
    ): CardCheckEnrollment {
        $this->paymentPattern = $paymentPattern;

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
     * @return CardCheckEnrollment
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setCustomerLanguage(?string $customerLanguage
    ): CardCheckEnrollment {
        $this->customerLanguage = $customerLanguage;

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
     * @return CardCheckEnrollment
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): CardCheckEnrollment {
        $this->deliveryData = $deliveryData;

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
     * @return CardCheckEnrollment
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): CardCheckEnrollment {
        $this->holderContact = $holderContact;

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
     * @return CardCheckEnrollment
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): CardCheckEnrollment {
        $this->customerData = $customerData;

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
     * @return CardCheckEnrollment
     */
    public function setShoppingCartDetail(
        ?ShoppingCartDetail $shoppingCartDetail
    ): CardCheckEnrollment {
        $this->shoppingCartDetail = $shoppingCartDetail;

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
     * @return CardCheckEnrollment
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): CardCheckEnrollment {
        $this->fraudData = $fraudData;

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
     * @return CardCheckEnrollment
     */
    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): CardCheckEnrollment {
        $this->authenticationData = $authenticationData;

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
     * @return CardCheckEnrollment
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): CardCheckEnrollment {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPanType(): ?string
    {
        return $this->panType;
    }

    /**
     * @param string|null $panType
     *
     * @return CardCheckEnrollment
     */
    public function setPanType(?string $panType): CardCheckEnrollment
    {
        $this->panType = $panType;

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
     * @return CardCheckEnrollment
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): CardCheckEnrollment {
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
     * @return CardCheckEnrollment
     */
    public function setSeal(?string $seal): CardCheckEnrollment
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
     * @return CardCheckEnrollment
     */
    public function setKeyVersion(?string $keyVersion): CardCheckEnrollment
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
     * @return CardCheckEnrollment
     */
    public function setSealAlgorithm(?string $sealAlgorithm
    ): CardCheckEnrollment {
        $this->sealAlgorithm = $sealAlgorithm;

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
     * @return CardCheckEnrollment
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand
    ): CardCheckEnrollment {
        $this->paymentMeanBrand = $paymentMeanBrand;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @param string|null $paymentMeanBrandSelectionStatus
     *
     * @return CardCheckEnrollment
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): CardCheckEnrollment {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

        return $this;
    }

    /**
     * @return TravelContext|null
     */
    public function getTravelContext(
    ): ?TravelContext
    {
        return $this->travelContext;
    }

    /**
     * @param TravelContext|null $travelContext
     *
     * @return CardCheckEnrollment
     */
    public function setTravelContext(
        ?TravelContext $travelContext
    ): CardCheckEnrollment {
        $this->travelContext = $travelContext;

        return $this;
    }

    /**
     * @return OrderContext|null
     */
    public function getOrderContext(
    ): ?OrderContext
    {
        return $this->orderContext;
    }

    /**
     * @param OrderContext|null $orderContext
     *
     * @return CardCheckEnrollment
     */
    public function setOrderContext(
        ?OrderContext $orderContext
    ): CardCheckEnrollment {
        $this->orderContext = $orderContext;

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
     * @return CardCheckEnrollment
     */
    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): CardCheckEnrollment {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    /**
     * @return CustomerAccountHistoric|null
     */
    public function getCustomerAccountHistoric(
    ): ?CustomerAccountHistoric
    {
        return $this->customerAccountHistoric;
    }

    /**
     * @param CustomerAccountHistoric|null $customerAccountHistoric
     *
     * @return CardCheckEnrollment
     */
    public function setCustomerAccountHistoric(
        ?CustomerAccountHistoric $customerAccountHistoric
    ): CardCheckEnrollment {
        $this->customerAccountHistoric = $customerAccountHistoric;

        return $this;
    }

 }
