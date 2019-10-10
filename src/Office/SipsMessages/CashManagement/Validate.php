<?php


namespace Worldline\Sips\Office\SipsMessages\CashManagement;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\DeliveryData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\Fields\OrderContext;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\Fields\TravelContext;
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
    protected $customerEmail;

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
    protected $fromTransactionReference;

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
     * @var null|string
     */
    protected $fromMerchantId;

    /**
     * @var null|Address
     */
    protected $deliveryAddress;

    /**
     * @var null|Contact
     */
    protected $deliveryContact;

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
     * @var null|CustomerData
     */
    protected $customerData;

    /**
     * @var null|string
     */
    protected $statementReference;

    /**
     * @var null|DeliveryData
     */
    protected $deliveryData;

    /**
     * @var null|string
     */
    protected $shoppingCartDetail;

    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;

    /**
     * @var null|S10TransactionReference
     */
    protected $s10FromTransactionReference;

    /**
     * @var null|PaymentMeanData
     */
    protected $paymentMeanData;

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
     * @var null|Address
     */
    protected $holderAddress;

    /**
     * @var null|Contact
     */
    protected $holderContact;

    /**
     * @var null|AuthenticationData
     */
    protected $authenticationData;

    /**
     * @var null|TravelContext
     */
    protected $travelContext;

    /**
     * @var null|OrderContext
     */
    protected $orderContext;

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
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return Validate
     */
    public function setAmount(?int $amount): Validate
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
     * @return Validate
     */
    public function setCaptureDay(?int $captureDay): Validate
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
     * @return Validate
     */
    public function setCaptureMode(?string $captureMode): Validate
    {
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
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * @param string|null $customerEmail
     *
     * @return Validate
     */
    public function setCustomerEmail(?string $customerEmail): Validate
    {
        $this->customerEmail = $customerEmail;

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
     * @return Validate
     */
    public function setCustomerId(?string $customerId): Validate
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
     * @return Validate
     */
    public function setCustomerIpAddress(?string $customerIpAddress): Validate
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
     * @return Validate
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): Validate {
        $this->fraudData = $fraudData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromTransactionReference(): ?string
    {
        return $this->fromTransactionReference;
    }

    /**
     * @param string|null $fromTransactionReference
     *
     * @return Validate
     */
    public function setFromTransactionReference(
        ?string $fromTransactionReference
    ): Validate {
        $this->fromTransactionReference = $fromTransactionReference;

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
    public function getMerchantTransactionDateTime(): ?string
    {
        return $this->merchantTransactionDateTime;
    }

    /**
     * @param string|null $merchantTransactionDateTime
     *
     * @return Validate
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): Validate {
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
     * @return Validate
     */
    public function setOrderChannel(?string $orderChannel): Validate
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
     * @return Validate
     */
    public function setOrderId(?string $orderId): Validate
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
    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    /**
     * @param string|null $returnContext
     *
     * @return Validate
     */
    public function setReturnContext(?string $returnContext): Validate
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
     * @return Validate
     */
    public function setTransactionReference(?string $transactionReference
    ): Validate {
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
     * @return Validate
     */
    public function setTransactionOrigin(?string $transactionOrigin): Validate
    {
        $this->transactionOrigin = $transactionOrigin;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromMerchantId(): ?string
    {
        return $this->fromMerchantId;
    }

    /**
     * @param string|null $fromMerchantId
     *
     * @return Validate
     */
    public function setFromMerchantId(?string $fromMerchantId): Validate
    {
        $this->fromMerchantId = $fromMerchantId;

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
     * @return Validate
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): Validate {
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
     * @return Validate
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): Validate {
        $this->deliveryContact = $deliveryContact;

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
     * @return Validate
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): Validate {
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
     * @return Validate
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): Validate {
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
     * @return Validate
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): Validate {
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
     * @return Validate
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): Validate {
        $this->customerContact = $customerContact;

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
     * @return Validate
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): Validate {
        $this->customerData = $customerData;

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
     * @return Validate
     */
    public function setStatementReference(?string $statementReference): Validate
    {
        $this->statementReference = $statementReference;

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
     * @return Validate
     */
    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): Validate {
        $this->deliveryData = $deliveryData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShoppingCartDetail(): ?string
    {
        return $this->shoppingCartDetail;
    }

    /**
     * @param string|null $shoppingCartDetail
     *
     * @return Validate
     */
    public function setShoppingCartDetail(?string $shoppingCartDetail): Validate
    {
        $this->shoppingCartDetail = $shoppingCartDetail;

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
     * @return Validate
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): Validate {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return S10TransactionReference|null
     */
    public function getS10FromTransactionReference(
    ): ?S10TransactionReference
    {
        return $this->s10FromTransactionReference;
    }

    /**
     * @param S10TransactionReference|null $s10FromTransactionReference
     *
     * @return Validate
     */
    public function setS10FromTransactionReference(
        ?S10TransactionReference $s10FromTransactionReference
    ): Validate {
        $this->s10FromTransactionReference = $s10FromTransactionReference;

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
     * @return Validate
     */
    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): Validate {
        $this->paymentMeanData = $paymentMeanData;

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
     * @return Validate
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): Validate {
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
     *
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
     *
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
     *
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
     *
     * @return Validate
     */
    public function setSubMerchantShortName(?string $subMerchantShortName
    ): Validate {
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
     * @return Validate
     */
    public function setSubMerchantCategoryCode(?string $subMerchantCategoryCode
    ): Validate {
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
    public function getSubMerchantAddress(
    ): ?Address
    {
        return $this->subMerchantAddress;
    }

    /**
     * @param Address|null $subMerchantAddress
     *
     * @return Validate
     */
    public function setSubMerchantAddress(
        ?Address $subMerchantAddress
    ): Validate {
        $this->subMerchantAddress = $subMerchantAddress;

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
     * @return Validate
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): Validate {
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
     * @return Validate
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): Validate {
        $this->holderContact = $holderContact;

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
     * @return Validate
     */
    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): Validate {
        $this->authenticationData = $authenticationData;

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
     * @return Validate
     */
    public function setTravelContext(
        ?TravelContext $travelContext
    ): Validate {
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
     * @return Validate
     */
    public function setOrderContext(
        ?OrderContext $orderContext
    ): Validate {
        $this->orderContext = $orderContext;

        return $this;
    }
    
}
