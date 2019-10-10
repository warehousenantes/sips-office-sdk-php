<?php


namespace Worldline\Sips\Office\SipsMessages\Checkout;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\DeliveryData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\Fields\HolderData;
use Worldline\Sips\Common\Fields\OrderContext;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\Fields\ShoppingCartDetail;
use Worldline\Sips\Common\Fields\TravelContext;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class CardOrder
 * @package Worldline\Sips\Common\SipsMessages\Checkout
 */
class CardOrder extends SipsMessage
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
    protected $cardEffectiveDate;
    
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
    protected $cardSeqNumber;
    
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
     * @var null|FraudData
     */
    protected $fraudData;
    
    /**
     * @var null|string
     */
    protected $merchantId;
    
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
    protected $interfaceVersion;
    
    /**
     * @var null|string
     */
    protected $returnContext;
    
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
     * @var null|AuthenticationData
     */
    protected $authenticationData;
    
    /**
     * @var null|string
     */
    protected $invoiceReference;
    
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
    protected $panType;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    
    /**
     * @var null|PaymentMeanData
     */
    protected $paymentMeanData;
    
    /**
     * @var null|HolderData
     */
    protected $holderData;
    
    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;
    
    /**
     * @var null|array
     */
    protected $riskManagementCustomDataList;
    
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
     * @var null|string
     */
    protected $paymentMeanBrandSelectionStatus;
    
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
     * @var null|string
     */
    protected $customerLanguage;
    
    /**
     * @var null|TravelContext
     */
    protected $travelContext;
    
    /**
     * @var null|OrderContext
     */
    protected $orderContext;

    /**
     * CardOrder constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/checkout/cardOrder";
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
     * @return CardOrder
     */
    public function setAmount(?int $amount): CardOrder
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
     * @return CardOrder
     */
    public function setCaptureDay(?int $captureDay): CardOrder
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
     * @return CardOrder
     */
    public function setCaptureMode(?string $captureMode): CardOrder
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
     * @return CardOrder
     */
    public function setCardCSCValue(?string $cardCSCValue): CardOrder
    {
        $this->cardCSCValue = $cardCSCValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardEffectiveDate(): ?string
    {
        return $this->cardEffectiveDate;
    }

    /**
     * @param string|null $cardEffectiveDate
     *
     * @return CardOrder
     */
    public function setCardEffectiveDate(?string $cardEffectiveDate): CardOrder
    {
        $this->cardEffectiveDate = $cardEffectiveDate;

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
     * @return CardOrder
     */
    public function setCardExpiryDate(?string $cardExpiryDate): CardOrder
    {
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
     * @return CardOrder
     */
    public function setCardNumber(?string $cardNumber): CardOrder
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardSeqNumber(): ?string
    {
        return $this->cardSeqNumber;
    }

    /**
     * @param string|null $cardSeqNumber
     *
     * @return CardOrder
     */
    public function setCardSeqNumber(?string $cardSeqNumber): CardOrder
    {
        $this->cardSeqNumber = $cardSeqNumber;

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
     * @return CardOrder
     */
    public function setCurrencyCode(?string $currencyCode): CardOrder
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
     * @return CardOrder
     */
    public function setCustomerId(?string $customerId): CardOrder
    {
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
     * @return CardOrder
     */
    public function setCustomerIpAddress(?string $customerIpAddress): CardOrder
    {
        $this->customerIpAddress = $customerIpAddress;

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
     * @return CardOrder
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): CardOrder {
        $this->fraudData = $fraudData;

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
     * @return CardOrder
     */
    public function setMerchantId(?string $merchantId): CardOrder
    {
        $this->merchantId = $merchantId;

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
     * @return CardOrder
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setOrderChannel(?string $orderChannel): CardOrder
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
     * @return CardOrder
     */
    public function setOrderId(?string $orderId): CardOrder
    {
        $this->orderId = $orderId;

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
     * @return CardOrder
     */
    public function setInterfaceVersion(?string $interfaceVersion): CardOrder
    {
        $this->interfaceVersion = $interfaceVersion;

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
     * @return CardOrder
     */
    public function setReturnContext(?string $returnContext): CardOrder
    {
        $this->returnContext = $returnContext;

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
     * @return CardOrder
     */
    public function setTransactionReference(?string $transactionReference
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setTransactionOrigin(?string $transactionOrigin): CardOrder
    {
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
     * @return CardOrder
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): CardOrder {
        $this->customerData = $customerData;

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
     * @return CardOrder
     */
    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): CardOrder {
        $this->authenticationData = $authenticationData;

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
     * @return CardOrder
     */
    public function setInvoiceReference(?string $invoiceReference): CardOrder
    {
        $this->invoiceReference = $invoiceReference;

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
     * @return CardOrder
     */
    public function setStatementReference(?string $statementReference
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setPaymentPattern(?string $paymentPattern): CardOrder
    {
        $this->paymentPattern = $paymentPattern;

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
     * @return CardOrder
     */
    public function setPanType(?string $panType): CardOrder
    {
        $this->panType = $panType;

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
     * @return CardOrder
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand): CardOrder
    {
        $this->paymentMeanBrand = $paymentMeanBrand;

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
     * @return CardOrder
     */
    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): CardOrder {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    /**
     * @return HolderData|null
     */
    public function getHolderData(): ?HolderData
    {
        return $this->holderData;
    }

    /**
     * @param HolderData|null $holderData
     *
     * @return CardOrder
     */
    public function setHolderData(
        ?HolderData $holderData
    ): CardOrder {
        $this->holderData = $holderData;

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
     * @return CardOrder
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): CardOrder {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRiskManagementCustomDataList(): ?array
    {
        return $this->riskManagementCustomDataList;
    }

    /**
     * @param array|null $riskManagementCustomDataList
     *
     * @return CardOrder
     */
    public function setRiskManagementCustomDataList(
        ?array $riskManagementCustomDataList
    ): CardOrder {
        $this->riskManagementCustomDataList = $riskManagementCustomDataList;

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
     * @return CardOrder
     */
    public function setShoppingCartDetail(
        ?ShoppingCartDetail $shoppingCartDetail
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setSeal(?string $seal): CardOrder
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
     * @return CardOrder
     */
    public function setKeyVersion(?string $keyVersion): CardOrder
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
     * @return CardOrder
     */
    public function setSealAlgorithm(?string $sealAlgorithm): CardOrder
    {
        $this->sealAlgorithm = $sealAlgorithm;

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
     * @return CardOrder
     */
    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): CardOrder {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

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
     *
     * @return CardOrder
     */
    public function setSubMerchantId(?string $subMerchantId): CardOrder
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
     *
     * @return CardOrder
     */
    public function setSubMerchantShortName(?string $subMerchantShortName
    ): CardOrder {
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
     *
     * @return CardOrder
     */
    public function setSubMerchantCategoryCode(?string $subMerchantCategoryCode
    ): CardOrder {
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
     *
     * @return CardOrder
     */
    public function setSubMerchantLegalId(?string $subMerchantLegalId
    ): CardOrder {
        $this->subMerchantLegalId = $subMerchantLegalId;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getSubMerchantAddress(
    ): ?Address
    {
        return $this->subMerchantAddress;
    }

    /**
     * @param Address|null $subMerchantAddress
     *
     * @return CardOrder
     */
    public function setSubMerchantAddress(
        ?Address $subMerchantAddress
    ): CardOrder {
        $this->subMerchantAddress = $subMerchantAddress;

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
     * @return CardOrder
     */
    public function setCustomerLanguage(?string $customerLanguage): CardOrder
    {
        $this->customerLanguage = $customerLanguage;

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
     * @return CardOrder
     */
    public function setTravelContext(
        ?TravelContext $travelContext
    ): CardOrder {
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
     * @return CardOrder
     */
    public function setOrderContext(
        ?OrderContext $orderContext
    ): CardOrder {
        $this->orderContext = $orderContext;

        return $this;
    }

}
