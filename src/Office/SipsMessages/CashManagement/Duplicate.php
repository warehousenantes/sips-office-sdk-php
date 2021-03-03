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
use Worldline\Sips\Common\Fields\ShoppingCartDetail;
use Worldline\Sips\Common\Fields\TravelContext;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class Duplicate
 * @package Worldline\Sips\Office\SipsMessages\CashManagement
 */
class Duplicate extends SipsMessage
{
    
    /**
     * @var string
     */
    private $serviceUrl;
    
    /**
     * @var null|int
     */
    private $amount;
    
    /**
     * @var null|int
     */
    private $captureDay;
    
    /**
     * @var null|string
     */
    private $captureMode;
    
    /**
     * @var null|string
     */
    private $currencyCode;
    
    /**
     * @var null|string
     */
    private $customerEmail;
    
    /**
     * @var null|string
     */
    private $customerId;
    
    /**
     * @var null|string
     */
    private $customerIpAddress;
    
    /**
     * @var null|FraudData
     */
    private $fraudData;
    
    /**
     * @var null|string
     */
    private $fromTransactionReference;
    
    /**
     * @var null|string
     */
    private $merchantId;
    
    /**
     * @var null|string
     */
    private $merchantTransactionDateTime;
    
    /**
     * @var null|string
     */
    private $orderChannel;
    
    /**
     * @var null|string
     */
    private $orderId;
    
    /**
     * @var null|string
     */
    private $interfaceVersion;
    
    /**
     * @var null|string
     */
    private $returnContext;
    
    /**
     * @var null|string
     */
    private $transactionReference;
    
    /**
     * @var null|string
     */
    private $transactionOrigin;
    
    /**
     * @var null|string
     */
    private $fromMerchantId;
    
    /**
     * @var null|Address
     */
    private $deliveryAddress;
    
    /**
     * @var null|Contact
     */
    private $deliveryContact;
    
    /**
     * @var null|Address
     */
    private $billingAddress;
    
    /**
     * @var null|Contact
     */
    private $billingContact;
    
    /**
     * @var null|Address
     */
    private $customerAddress;
    
    /**
     * @var null|Contact
     */
    private $customerContact;
    
    /**
     * @var null|CustomerData
     */
    private $customerData;
    
    /**
     * @var null|string
     */
    private $statementReference;
    
    /**
     * @var null|DeliveryData
     */
    private $deliveryData;
    
    /**
     * @var null|ShoppingCartDetail
     */
    private $shoppingCartDetail;
    
    /**
     * @var null|S10TransactionReference
     */
    private $s10TransactionReference;
    
    /**
     * @var null|S10TransactionReference
     */
    private $s10FromTransactionReference;
    
    /**
     * @var null|PaymentMeanData
     */
    private $paymentMeanData;
    
    /**
     * @var null|string
     */
    private $intermediateServiceProviderId;
    
    /**
     * @var null|string
     */
    private $seal;
    
    /**
     * @var null|string
     */
    private $keyVersion;
    
    /**
     * @var null|string
     */
    private $sealAlgorithm;
    
    /**
     * @var null|string
     */
    private $subMerchantId;
    
    /**
     * @var null|string
     */
    private $subMerchantShortName;
    
    /**
     * @var null|string
     */
    private $subMerchantCategoryCode;
    
    /**
     * @var null|string
     */
    private $subMerchantLegalId;
    
    /**
     * @var null|Address
     */
    private $subMerchantAddress;
    
    /**
     * @var null|Address
     */
    private $holderAddress;
    
    /**
     * @var null|Contact
     */
    private $holderContact;
    
    /**
     * @var null|AuthenticationData
     */
    private $authenticationData;
    
    /**
     * @var null|TravelContext
     */
    private $travelContext;
    
    /**
     * @var null|OrderContext
     */
    private $orderContext;

    /**
     * Duplicate constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/cashManagement/duplicate";
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
     * @return Duplicate
     */
    public function setAmount(?int $amount): Duplicate
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
     * @return Duplicate
     */
    public function setCaptureDay(?int $captureDay): Duplicate
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
     * @return Duplicate
     */
    public function setCaptureMode(?string $captureMode): Duplicate
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
     * @return Duplicate
     */
    public function setCurrencyCode(?string $currencyCode): Duplicate
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
     * @return Duplicate
     */
    public function setCustomerEmail(?string $customerEmail): Duplicate
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
     * @return Duplicate
     */
    public function setCustomerId(?string $customerId): Duplicate
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
     * @return Duplicate
     */
    public function setCustomerIpAddress(?string $customerIpAddress): Duplicate
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
     * @return Duplicate
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setFromTransactionReference(
        ?string $fromTransactionReference
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setMerchantId(?string $merchantId): Duplicate
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
     * @return Duplicate
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setOrderChannel(?string $orderChannel): Duplicate
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
     * @return Duplicate
     */
    public function setOrderId(?string $orderId): Duplicate
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
     * @return Duplicate
     */
    public function setInterfaceVersion(?string $interfaceVersion): Duplicate
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
     * @return Duplicate
     */
    public function setReturnContext(?string $returnContext): Duplicate
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
     * @return Duplicate
     */
    public function setTransactionReference(?string $transactionReference
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setTransactionOrigin(?string $transactionOrigin): Duplicate
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
     * @return Duplicate
     */
    public function setFromMerchantId(?string $fromMerchantId): Duplicate
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
     * @return Duplicate
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setStatementReference(?string $statementReference
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): Duplicate {
        $this->deliveryData = $deliveryData;

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
     * @return Duplicate
     */
    public function setShoppingCartDetail(
        ?ShoppingCartDetail $shoppingCartDetail
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setS10FromTransactionReference(
        ?S10TransactionReference $s10FromTransactionReference
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setSeal(?string $seal): Duplicate
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
     * @return Duplicate
     */
    public function setKeyVersion(?string $keyVersion): Duplicate
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
     * @return Duplicate
     */
    public function setSealAlgorithm(?string $sealAlgorithm): Duplicate
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
     * @return Duplicate
     */
    public function setSubMerchantId(?string $subMerchantId): Duplicate
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
     * @return Duplicate
     */
    public function setSubMerchantShortName(?string $subMerchantShortName
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setSubMerchantCategoryCode(?string $subMerchantCategoryCode
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setSubMerchantLegalId(?string $subMerchantLegalId
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setSubMerchantAddress(
        ?Address $subMerchantAddress
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setTravelContext(
        ?TravelContext $travelContext
    ): Duplicate {
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
     * @return Duplicate
     */
    public function setOrderContext(
        ?OrderContext $orderContext
    ): Duplicate {
        $this->orderContext = $orderContext;

        return $this;
    }
    
}
