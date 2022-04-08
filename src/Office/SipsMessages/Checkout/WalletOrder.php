<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class WalletOrder.
 */
class WalletOrder extends SipsMessage
{
    private string $serviceUrl;

    private ?int $amount = null;

    private ?int $captureDay = null;

    private ?string $captureMode = null;

    private ?string $currencyCode = null;

    private ?string $customerId = null;

    private ?string $customerIpAddress = null;

    private ?string $customerLanguage = null;

    private ?string $cardCSCValue = null;

    private ?string $invoiceReference = null;

    private ?string $interfaceVersion = null;

    private ?string $intermediateServiceProviderId = null;

    private ?int $keyVersion = null;

    private ?string $merchantId = null;

    private ?string $merchantTransactionDateTime = null;

    private ?string $merchantWalletId = null;

    private ?string $orderChannel = null;

    private ?string $orderId = null;

    private ?string $paymentMeanId = null;

    private ?string $returnContext = null;

    private ?string $seal = null;

    private ?string $sealAlgorithm = null;

    private ?string $statementReference = null;

    private ?string $transactionOrigin = null;

    private ?string $paymentPattern = null;

    private ?Address $billingAddess = null;

    private ?Contact $billingContact = null;

    private ?Address $customerAddress = null;

    private ?Contact $customerContact = null;

    private ?Address $deliveryAddress = null;

    private ?Contact $deliveryContact = null;

    private ?FraudData $fraudData = null;

    private ?Address $holderAddress = null;

    private ?Contact $holderContact = null;

    private ?AuthenticationData $authenticationData = null;

    private ?string $transactionReference = null;

    /**
     * WalletOrder constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/checkout/walletOrder';
        $this->setInterfaceVersion('IR_WS_2.27')
            ->setTransactionReference($this->generateReference());
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCaptureDay(): int
    {
        return $this->captureDay;
    }

    public function setCaptureDay(int $captureDay): self
    {
        $this->captureDay = $captureDay;

        return $this;
    }

    public function getCaptureMode(): string
    {
        return $this->captureMode;
    }

    public function setCaptureMode(string $captureMode): self
    {
        $this->captureMode = $captureMode;

        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getCustomerIpAddress(): string
    {
        return $this->customerIpAddress;
    }

    public function setCustomerIpAddress(string $customerIpAddress): self
    {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    public function getCustomerLanguage(): string
    {
        return $this->customerLanguage;
    }

    public function setCustomerLanguage(string $customerLanguage): self
    {
        $this->customerLanguage = $customerLanguage;

        return $this;
    }

    public function getCardCSCValue(): string
    {
        return $this->cardCSCValue;
    }

    public function setCardCSCValue(string $cardCSCValue): self
    {
        $this->cardCSCValue = $cardCSCValue;

        return $this;
    }

    public function getInvoiceReference(): string
    {
        return $this->invoiceReference;
    }

    public function setInvoiceReference(string $invoiceReference): self
    {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    public function getInterfaceVersion(): string
    {
        return $this->interfaceVersion;
    }

    public function setInterfaceVersion(string $interfaceVersion): self
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    public function getIntermediateServiceProviderId(): string
    {
        return $this->intermediateServiceProviderId;
    }

    public function setIntermediateServiceProviderId(
        string $intermediateServiceProviderId
    ): self {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

        return $this;
    }

    public function getKeyVersion(): int
    {
        return $this->keyVersion;
    }

    public function setKeyVersion(int $keyVersion): self
    {
        $this->keyVersion = $keyVersion;

        return $this;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function setMerchantId(string $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getMerchantTransactionDateTime(): string
    {
        return $this->merchantTransactionDateTime;
    }

    public function setMerchantTransactionDateTime(
        string $merchantTransactionDateTime
    ): self {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    public function getMerchantWalletId(): string
    {
        return $this->merchantWalletId;
    }

    public function setMerchantWalletId(string $merchantWalletId): self
    {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    public function getOrderChannel(): string
    {
        return $this->orderChannel;
    }

    public function setOrderChannel(string $orderChannel): self
    {
        $this->orderChannel = $orderChannel;

        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getPaymentMeanId(): string
    {
        return $this->paymentMeanId;
    }

    public function setPaymentMeanId(string $paymentMeanId): self
    {
        $this->paymentMeanId = $paymentMeanId;

        return $this;
    }

    public function getReturnContext(): string
    {
        return $this->returnContext;
    }

    public function setReturnContext(string $returnContext): self
    {
        $this->returnContext = $returnContext;

        return $this;
    }

    public function getSeal(): string
    {
        return $this->seal;
    }

    public function setSeal(string $seal): self
    {
        $this->seal = $seal;

        return $this;
    }

    public function getSealAlgorithm(): string
    {
        return $this->sealAlgorithm;
    }

    public function setSealAlgorithm(string $sealAlgorithm): self
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    public function getStatementReference(): string
    {
        return $this->statementReference;
    }

    public function setStatementReference(
        string $statementReference
    ): self {
        $this->statementReference = $statementReference;

        return $this;
    }

    public function getTransactionOrigin(): string
    {
        return $this->transactionOrigin;
    }

    public function setTransactionOrigin(string $transactionOrigin): self
    {
        $this->transactionOrigin = $transactionOrigin;

        return $this;
    }

    public function getPaymentPattern(): string
    {
        return $this->paymentPattern;
    }

    public function setPaymentPattern(string $paymentPattern): self
    {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    public function getBillingAddess(): Address
    {
        return $this->billingAddess;
    }

    public function setBillingAddess(
        Address $billingAddess
    ): self {
        $this->billingAddess = $billingAddess;

        return $this;
    }

    public function getBillingContact(): Contact
    {
        return $this->billingContact;
    }

    public function setBillingContact(
        Contact $billingContact
    ): self {
        $this->billingContact = $billingContact;

        return $this;
    }

    public function getCustomerAddress(): Address
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress(
        Address $customerAddress
    ): self {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    public function getCustomerContact(): Contact
    {
        return $this->customerContact;
    }

    public function setCustomerContact(
        Contact $customerContact
    ): self {
        $this->customerContact = $customerContact;

        return $this;
    }

    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(
        Address $deliveryAddress
    ): self {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDeliveryContact(): Contact
    {
        return $this->deliveryContact;
    }

    public function setDeliveryContact(
        Contact $deliveryContact
    ): self {
        $this->deliveryContact = $deliveryContact;

        return $this;
    }

    public function getFraudData(): FraudData
    {
        return $this->fraudData;
    }

    public function setFraudData(
        FraudData $fraudData
    ): self {
        $this->fraudData = $fraudData;

        return $this;
    }

    public function getHolderAddress(): Address
    {
        return $this->holderAddress;
    }

    public function setHolderAddress(
        Address $holderAddress
    ): self {
        $this->holderAddress = $holderAddress;

        return $this;
    }

    public function getHolderContact(): Contact
    {
        return $this->holderContact;
    }

    public function setHolderContact(
        Contact $holderContact
    ): self {
        $this->holderContact = $holderContact;

        return $this;
    }

    public function getAuthenticationData(
    ): AuthenticationData {
        return $this->authenticationData;
    }

    public function setAuthenticationData(
        AuthenticationData $authenticationData
    ): self {
        $this->authenticationData = $authenticationData;

        return $this;
    }

    public function getTransactionReference(): string
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(
        string $transactionReference
    ): self {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
