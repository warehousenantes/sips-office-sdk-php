<?php

declare(strict_types=1);

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
 * Class CardOrder.
 */
class CardOrder extends SipsMessage
{
    private string $serviceUrl;

    private ?int $amount = null;

    private ?int $captureDay = null;

    private ?string $captureMode = null;

    private ?string $cardCSCValue = null;

    private ?string $cardEffectiveDate = null;

    private ?string $cardExpiryDate = null;

    private ?string $cardNumber = null;

    private ?string $cardSeqNumber = null;

    private ?string $currencyCode = null;

    private ?string $customerId = null;

    private ?string $customerIpAddress = null;

    private ?FraudData $fraudData = null;

    private ?string $merchantId = null;

    private ?string $merchantTransactionDateTime = null;

    private ?string $orderChannel = null;

    private ?string $orderId = null;

    private ?string $interfaceVersion = null;

    private ?string $returnContext = null;

    private ?string $transactionReference = null;

    private ?string $transactionOrigin = null;

    private ?Address $billingAddress = null;

    private ?Contact $billingContact = null;

    private ?Address $customerAddress = null;

    private ?Contact $customerContact = null;

    private ?Address $deliveryAddress = null;

    private ?Contact $deliveryContact = null;

    private ?DeliveryData $deliveryData = null;

    private ?Address $holderAddress = null;

    private ?Contact $holderContact = null;

    private ?CustomerData $customerData = null;

    private ?AuthenticationData $authenticationData = null;

    private ?string $invoiceReference = null;

    private ?string $statementReference = null;

    private ?string $paymentPattern = null;

    private ?string $panType = null;

    private ?string $paymentMeanBrand = null;

    private ?PaymentMeanData $paymentMeanData = null;

    private ?HolderData $holderData = null;

    private ?S10TransactionReference $s10TransactionReference = null;

    private ?array $riskManagementCustomDataList = null;

    private ?ShoppingCartDetail $shoppingCartDetail = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $seal = null;

    private ?string $keyVersion = null;

    private ?string $sealAlgorithm = null;

    private ?string $paymentMeanBrandSelectionStatus = null;

    private ?string $subMerchantId = null;

    private ?string $subMerchantShortName = null;

    private ?string $subMerchantCategoryCode = null;

    private ?string $subMerchantLegalId = null;

    private ?Address $subMerchantAddress = null;

    private ?string $customerLanguage = null;

    private ?TravelContext $travelContext = null;

    private ?OrderContext $orderContext = null;

    /**
     * CardOrder constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/checkout/cardOrder';
        $this->setTransactionReference($this->generateReference())
            ->setInterfaceVersion('IR_WS_2.27');
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCaptureDay(): ?int
    {
        return $this->captureDay;
    }

    public function setCaptureDay(?int $captureDay): self
    {
        $this->captureDay = $captureDay;

        return $this;
    }

    public function getCaptureMode(): ?string
    {
        return $this->captureMode;
    }

    public function setCaptureMode(?string $captureMode): self
    {
        $this->captureMode = $captureMode;

        return $this;
    }

    public function getCardCSCValue(): ?string
    {
        return $this->cardCSCValue;
    }

    public function setCardCSCValue(?string $cardCSCValue): self
    {
        $this->cardCSCValue = $cardCSCValue;

        return $this;
    }

    public function getCardEffectiveDate(): ?string
    {
        return $this->cardEffectiveDate;
    }

    public function setCardEffectiveDate(?string $cardEffectiveDate): self
    {
        $this->cardEffectiveDate = $cardEffectiveDate;

        return $this;
    }

    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    public function setCardExpiryDate(?string $cardExpiryDate): self
    {
        $this->cardExpiryDate = $cardExpiryDate;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getCardSeqNumber(): ?string
    {
        return $this->cardSeqNumber;
    }

    public function setCardSeqNumber(?string $cardSeqNumber): self
    {
        $this->cardSeqNumber = $cardSeqNumber;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    public function setCustomerIpAddress(?string $customerIpAddress): self
    {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    public function getFraudData(): ?FraudData
    {
        return $this->fraudData;
    }

    public function setFraudData(
        ?FraudData $fraudData
    ): self {
        $this->fraudData = $fraudData;

        return $this;
    }

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getMerchantTransactionDateTime(): ?string
    {
        return $this->merchantTransactionDateTime;
    }

    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): self {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    public function getOrderChannel(): ?string
    {
        return $this->orderChannel;
    }

    public function setOrderChannel(?string $orderChannel): self
    {
        $this->orderChannel = $orderChannel;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    public function setInterfaceVersion(?string $interfaceVersion): self
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    public function setReturnContext(?string $returnContext): self
    {
        $this->returnContext = $returnContext;

        return $this;
    }

    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(
        ?string $transactionReference
    ): self {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    public function getTransactionOrigin(): ?string
    {
        return $this->transactionOrigin;
    }

    public function setTransactionOrigin(?string $transactionOrigin): self
    {
        $this->transactionOrigin = $transactionOrigin;

        return $this;
    }

    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(
        ?Address $billingAddress
    ): self {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    public function getBillingContact(): ?Contact
    {
        return $this->billingContact;
    }

    public function setBillingContact(
        ?Contact $billingContact
    ): self {
        $this->billingContact = $billingContact;

        return $this;
    }

    public function getCustomerAddress(): ?Address
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress(
        ?Address $customerAddress
    ): self {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    public function getCustomerContact(): ?Contact
    {
        return $this->customerContact;
    }

    public function setCustomerContact(
        ?Contact $customerContact
    ): self {
        $this->customerContact = $customerContact;

        return $this;
    }

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): self {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDeliveryContact(): ?Contact
    {
        return $this->deliveryContact;
    }

    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): self {
        $this->deliveryContact = $deliveryContact;

        return $this;
    }

    public function getDeliveryData(
    ): ?DeliveryData {
        return $this->deliveryData;
    }

    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): self {
        $this->deliveryData = $deliveryData;

        return $this;
    }

    public function getHolderAddress(): ?Address
    {
        return $this->holderAddress;
    }

    public function setHolderAddress(
        ?Address $holderAddress
    ): self {
        $this->holderAddress = $holderAddress;

        return $this;
    }

    public function getHolderContact(): ?Contact
    {
        return $this->holderContact;
    }

    public function setHolderContact(
        ?Contact $holderContact
    ): self {
        $this->holderContact = $holderContact;

        return $this;
    }

    public function getCustomerData(
    ): ?CustomerData {
        return $this->customerData;
    }

    public function setCustomerData(
        ?CustomerData $customerData
    ): self {
        $this->customerData = $customerData;

        return $this;
    }

    public function getAuthenticationData(
    ): ?AuthenticationData {
        return $this->authenticationData;
    }

    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): self {
        $this->authenticationData = $authenticationData;

        return $this;
    }

    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    public function setInvoiceReference(?string $invoiceReference): self
    {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    public function getStatementReference(): ?string
    {
        return $this->statementReference;
    }

    public function setStatementReference(
        ?string $statementReference
    ): self {
        $this->statementReference = $statementReference;

        return $this;
    }

    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    public function setPaymentPattern(?string $paymentPattern): self
    {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    public function getPanType(): ?string
    {
        return $this->panType;
    }

    public function setPanType(?string $panType): self
    {
        $this->panType = $panType;

        return $this;
    }

    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    public function setPaymentMeanBrand(?string $paymentMeanBrand): self
    {
        $this->paymentMeanBrand = $paymentMeanBrand;

        return $this;
    }

    public function getPaymentMeanData(
    ): ?PaymentMeanData {
        return $this->paymentMeanData;
    }

    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): self {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    public function getHolderData(): ?HolderData
    {
        return $this->holderData;
    }

    public function setHolderData(
        ?HolderData $holderData
    ): self {
        $this->holderData = $holderData;

        return $this;
    }

    public function getS10TransactionReference(
    ): ?S10TransactionReference {
        return $this->s10TransactionReference;
    }

    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): self {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    public function getRiskManagementCustomDataList(): ?array
    {
        return $this->riskManagementCustomDataList;
    }

    public function setRiskManagementCustomDataList(
        ?array $riskManagementCustomDataList
    ): self {
        $this->riskManagementCustomDataList = $riskManagementCustomDataList;

        return $this;
    }

    public function getShoppingCartDetail(
    ): ?ShoppingCartDetail {
        return $this->shoppingCartDetail;
    }

    public function setShoppingCartDetail(
        ?ShoppingCartDetail $shoppingCartDetail
    ): self {
        $this->shoppingCartDetail = $shoppingCartDetail;

        return $this;
    }

    public function getIntermediateServiceProviderId(): ?string
    {
        return $this->intermediateServiceProviderId;
    }

    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): self {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

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

    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    public function setKeyVersion(?string $keyVersion): self
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    public function setSealAlgorithm(?string $sealAlgorithm): self
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    public function setPaymentMeanBrandSelectionStatus(
        ?string $paymentMeanBrandSelectionStatus
    ): self {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

        return $this;
    }

    public function getSubMerchantId(): ?string
    {
        return $this->subMerchantId;
    }

    public function setSubMerchantId(?string $subMerchantId): self
    {
        $this->subMerchantId = $subMerchantId;

        return $this;
    }

    public function getSubMerchantShortName(): ?string
    {
        return $this->subMerchantShortName;
    }

    public function setSubMerchantShortName(
        ?string $subMerchantShortName
    ): self {
        $this->subMerchantShortName = $subMerchantShortName;

        return $this;
    }

    public function getSubMerchantCategoryCode(): ?string
    {
        return $this->subMerchantCategoryCode;
    }

    public function setSubMerchantCategoryCode(
        ?string $subMerchantCategoryCode
    ): self {
        $this->subMerchantCategoryCode = $subMerchantCategoryCode;

        return $this;
    }

    public function getSubMerchantLegalId(): ?string
    {
        return $this->subMerchantLegalId;
    }

    public function setSubMerchantLegalId(
        ?string $subMerchantLegalId
    ): self {
        $this->subMerchantLegalId = $subMerchantLegalId;

        return $this;
    }

    public function getSubMerchantAddress(
    ): ?Address {
        return $this->subMerchantAddress;
    }

    public function setSubMerchantAddress(
        ?Address $subMerchantAddress
    ): self {
        $this->subMerchantAddress = $subMerchantAddress;

        return $this;
    }

    public function getCustomerLanguage(): ?string
    {
        return $this->customerLanguage;
    }

    public function setCustomerLanguage(?string $customerLanguage): self
    {
        $this->customerLanguage = $customerLanguage;

        return $this;
    }

    public function getTravelContext(
    ): ?TravelContext {
        return $this->travelContext;
    }

    public function setTravelContext(
        ?TravelContext $travelContext
    ): self {
        $this->travelContext = $travelContext;

        return $this;
    }

    public function getOrderContext(
    ): ?OrderContext {
        return $this->orderContext;
    }

    public function setOrderContext(
        ?OrderContext $orderContext
    ): self {
        $this->orderContext = $orderContext;

        return $this;
    }
}
