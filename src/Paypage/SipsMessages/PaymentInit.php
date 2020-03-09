<?php


namespace Worldline\Sips\Paypage\SipsMessages;


use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\CustomerAccountHistoric;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\DeliveryData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\Fields\HolderData;
use Worldline\Sips\Common\Fields\InstalmentData;
use Worldline\Sips\Common\Fields\OrderContext;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\PaypageData;
use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\Fields\ShoppingCartDetail;
use Worldline\Sips\Common\Fields\TravelContext;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentInit
 * @package Worldline\Sips\Paypage\SipsMessages
 */
class PaymentInit extends SipsMessage
{

    /**
     * @var string
     */
    private $serviceUrl = "rs-services/v2/paymentInit/";

    /**
     * @var null|int
     */
    private $amount;

    /**
     * @var null|string
     */
    private $automaticResponseUrl;

    /**
     * @var null|string
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
    private $customerLanguage;

    /**
     * @var null|FraudData
     */
    private $fraudData;

    /**
     * @var null|string
     */
    private $hashSalt1;

    /**
     * @var null|string
     */
    private $hashSalt2;

    /**
     * @var null|string
     */
    private $hashAlgorithm1;

    /**
     * @var null|string
     */
    private $hashAlgorithm2;

    /**
     * @var null|string
     */
    private $interfaceVersion;

    /**
     * @var null|string
     */
    private $merchantId;

    /**
     * @var null|string
     */
    private $merchantSessionId;

    /**
     * @var null|string
     */
    private $merchantTransactionDateTime;

    /**
     * @var null|string
     */
    private $merchantWalletId;

    /**
     * @var null|string
     */
    private $normalReturnUrl;

    /**
     * @var null|string
     */
    private $orderChannel;

    /**
     * @var null|string
     */
    private $orderId;

    /**
     * @var null|array
     */
    private $paymentMeanBrandList;

    /**
     * @var null|PaymentMeanData
     */
    private $paymentMeanData;

    /**
     * @var null|int
     */
    private $responseKeyVersion;

    /**
     * @var null|string
     */
    private $returnContext;

    /**
     * @var null|string
     */
    private $templateName;

    /**
     * @var null|string
     */
    private $transactionActors;

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
    private $invoiceReference;

    /**
     * @var null|string
     */
    private $bypassReceiptPage;

    /**
     * @var null|string
     */
    private $customerIpAddress;

    /**
     * @var null|string
     */
    private $customerTimestampIpAddress;

    /**
     * @var null|string
     */
    private $bypassDcc;

    /**
     * @var null|InstalmentData
     */
    private $instalmentData;

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
    private $holderAddress;

    /**
     * @var null|Contact
     */
    private $holderContact;

    /**
     * @var null|CustomerData
     */
    private $customerData;

    /**
     * @var null|string
     */
    private $paymentPattern;

    /**
     * @var null|string
     */
    private $statementReference;

    /**
     * @var null|AuthenticationData
     */
    private $authenticationData;

    /**
     * @var null|string
     */
    private $mandateId;

    /**
     * @var null|string
     */
    private $billingFirstDate;

    /**
     * @var null|string
     */
    private $customer3DSTransactionDate;

    /**
     * @var null|string
     */
    private $customerBillingNb;

    /**
     * @var null|string
     */
    private $customerDeliverySuccessFlag;

    /**
     * @var null|string
     */
    private $customerPhoneValidationMethod;

    /**
     * @var null|string
     */
    private $customerRegistrationDateOnline;

    /**
     * @var null|string
     */
    private $customerRegistrationDateProxi;

    /**
     * @var null|string
     */
    private $deliveryFirstDate;

    /**
     * @var null|string
     */
    private $evidenceAcquisitionDate;

    /**
     * @var null|string
     */
    private $evidenceNumber;

    /**
     * @var null|string
     */
    private $evidenceType;

    /**
     * @var null|string
     */
    private $valueDate;

    /**
     * @var null|DeliveryData
     */
    private $deliveryData;

    /**
     * @var null|ShoppingCartDetail
     */
    private $shoppingCartDetail;

    /**
     * @var null|HolderData
     */
    private $holderData;

    /**
     * @var null|S10TransactionReference
     */
    private $s10TransactionReference;

    /**
     * @var null|string
     */
    private $holderAdditionalReference;

    /**
     * @var null|array
     */
    private $riskManagementCustomDataList;

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
     * @var null|PaypageData
     */
    private $paypageData;

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
     * @var null|OrderContext
     */
    private $orderContext;

    /**
     * @var null|TravelContext
     */
    private $travelContext;

    /**
     * @var null|string
     */
    private $responseEncoding;

    /**
     * @var null|string
     */
    private $subMerchantName;

    /**
     * @var null|string
     */
    private $subMerchantContractNumber;

    /**
     * @var null|CustomerAccountHistoric
     */
    private $customerAccountHistoric;

    /**
     * @var null|string
     */
    private $merchantName;

    /**
     * PaymentInit constructor.
     */
    public function __construct()
    {
        $this->setInterfaceVersion("IR_WS_2.27");
        $this->setTransactionReference($this->generateReference());
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
     * @return PaymentInit
     */
    public function setAmount(?int $amount): PaymentInit
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAutomaticResponseUrl(): ?string
    {
        return $this->automaticResponseUrl;
    }

    /**
     * @param string|null $automaticResponseUrl
     *
     * @return PaymentInit
     */
    public function setAutomaticResponseUrl(?string $automaticResponseUrl
    ): PaymentInit {
        $this->automaticResponseUrl = $automaticResponseUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureDay(): ?string
    {
        return $this->captureDay;
    }

    /**
     * @param string|null $captureDay
     *
     * @return PaymentInit
     */
    public function setCaptureDay(?string $captureDay): PaymentInit
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
     * @return PaymentInit
     */
    public function setCaptureMode(?string $captureMode): PaymentInit
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
     * @return PaymentInit
     */
    public function setCurrencyCode(?string $currencyCode): PaymentInit
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
     * @return PaymentInit
     */
    public function setCustomerEmail(?string $customerEmail): PaymentInit
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
     * @return PaymentInit
     */
    public function setCustomerId(?string $customerId): PaymentInit
    {
        $this->customerId = $customerId;

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
     * @return PaymentInit
     */
    public function setCustomerLanguage(?string $customerLanguage): PaymentInit
    {
        $this->customerLanguage = $customerLanguage;

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
     * @return PaymentInit
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): PaymentInit {
        $this->fraudData = $fraudData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashSalt1(): ?string
    {
        return $this->hashSalt1;
    }

    /**
     * @param string|null $hashSalt1
     *
     * @return PaymentInit
     */
    public function setHashSalt1(?string $hashSalt1): PaymentInit
    {
        $this->hashSalt1 = $hashSalt1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashSalt2(): ?string
    {
        return $this->hashSalt2;
    }

    /**
     * @param string|null $hashSalt2
     *
     * @return PaymentInit
     */
    public function setHashSalt2(?string $hashSalt2): PaymentInit
    {
        $this->hashSalt2 = $hashSalt2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashAlgorithm1(): ?string
    {
        return $this->hashAlgorithm1;
    }

    /**
     * @param string|null $hashAlgorithm1
     *
     * @return PaymentInit
     */
    public function setHashAlgorithm1(?string $hashAlgorithm1): PaymentInit
    {
        $this->hashAlgorithm1 = $hashAlgorithm1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashAlgorithm2(): ?string
    {
        return $this->hashAlgorithm2;
    }

    /**
     * @param string|null $hashAlgorithm2
     *
     * @return PaymentInit
     */
    public function setHashAlgorithm2(?string $hashAlgorithm2): PaymentInit
    {
        $this->hashAlgorithm2 = $hashAlgorithm2;

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
     * @return PaymentInit
     */
    public function setInterfaceVersion(?string $interfaceVersion): PaymentInit
    {
        $this->interfaceVersion = $interfaceVersion;

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
     * @return PaymentInit
     */
    public function setMerchantId(?string $merchantId): PaymentInit
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantSessionId(): ?string
    {
        return $this->merchantSessionId;
    }

    /**
     * @param string|null $merchantSessionId
     *
     * @return PaymentInit
     */
    public function setMerchantSessionId(?string $merchantSessionId
    ): PaymentInit {
        $this->merchantSessionId = $merchantSessionId;

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
     * @return PaymentInit
     */
    public function setMerchantTransactionDateTime(
        ?string $merchantTransactionDateTime
    ): PaymentInit {
        $this->merchantTransactionDateTime = $merchantTransactionDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    /**
     * @param string|null $merchantWalletId
     *
     * @return PaymentInit
     */
    public function setMerchantWalletId(?string $merchantWalletId): PaymentInit
    {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNormalReturnUrl(): ?string
    {
        return $this->normalReturnUrl;
    }

    /**
     * @param string|null $normalReturnUrl
     *
     * @return PaymentInit
     */
    public function setNormalReturnUrl(?string $normalReturnUrl): PaymentInit
    {
        $this->normalReturnUrl = $normalReturnUrl;

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
     * @return PaymentInit
     */
    public function setOrderChannel(?string $orderChannel): PaymentInit
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
     * @return PaymentInit
     */
    public function setOrderId(?string $orderId): PaymentInit
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPaymentMeanBrandList(): ?array
    {
        return $this->paymentMeanBrandList;
    }

    /**
     * @param array|null $paymentMeanBrandList
     *
     * @return PaymentInit
     */
    public function setPaymentMeanBrandList(?array $paymentMeanBrandList
    ): PaymentInit {
        $this->paymentMeanBrandList = $paymentMeanBrandList;

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
     * @return PaymentInit
     */
    public function setPaymentMeanData(
        ?PaymentMeanData $paymentMeanData
    ): PaymentInit {
        $this->paymentMeanData = $paymentMeanData;

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
     * @return PaymentInit
     */
    public function setResponseKeyVersion(?int $responseKeyVersion): PaymentInit
    {
        $this->responseKeyVersion = $responseKeyVersion;

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
     * @return PaymentInit
     */
    public function setReturnContext(?string $returnContext): PaymentInit
    {
        $this->returnContext = $returnContext;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * @param string|null $templateName
     *
     * @return PaymentInit
     */
    public function setTemplateName(?string $templateName): PaymentInit
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    /**
     * @param string|null $transactionActors
     *
     * @return PaymentInit
     */
    public function setTransactionActors(?string $transactionActors
    ): PaymentInit {
        $this->transactionActors = $transactionActors;

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
     * @return PaymentInit
     */
    public function setTransactionReference(?string $transactionReference
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setTransactionOrigin(?string $transactionOrigin
    ): PaymentInit {
        $this->transactionOrigin = $transactionOrigin;

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
     * @return PaymentInit
     */
    public function setInvoiceReference(?string $invoiceReference): PaymentInit
    {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBypassReceiptPage(): ?string
    {
        return $this->bypassReceiptPage;
    }

    /**
     * @param string|null $bypassReceiptPage
     *
     * @return PaymentInit
     */
    public function setBypassReceiptPage(?string $bypassReceiptPage
    ): PaymentInit {
        $this->bypassReceiptPage = $bypassReceiptPage;

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
     * @return PaymentInit
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): PaymentInit {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerTimestampIpAddress(): ?string
    {
        return $this->customerTimestampIpAddress;
    }

    /**
     * @param string|null $customerTimestampIpAddress
     *
     * @return PaymentInit
     */
    public function setCustomerTimestampIpAddress(
        ?string $customerTimestampIpAddress
    ): PaymentInit {
        $this->customerTimestampIpAddress = $customerTimestampIpAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBypassDcc(): ?string
    {
        return $this->bypassDcc;
    }

    /**
     * @param string|null $bypassDcc
     *
     * @return PaymentInit
     */
    public function setBypassDcc(?string $bypassDcc): PaymentInit
    {
        $this->bypassDcc = $bypassDcc;

        return $this;
    }

    /**
     * @return InstalmentData|null
     */
    public function getInstalmentData(
    ): ?InstalmentData
    {
        return $this->instalmentData;
    }

    /**
     * @param InstalmentData|null $instalmentData
     *
     * @return PaymentInit
     */
    public function setInstalmentData(
        ?InstalmentData $instalmentData
    ): PaymentInit {
        $this->instalmentData = $instalmentData;

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
     * @return PaymentInit
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): PaymentInit {
        $this->deliveryContact = $deliveryContact;

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
     * @return PaymentInit
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): PaymentInit {
        $this->customerData = $customerData;

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
     * @return PaymentInit
     */
    public function setPaymentPattern(?string $paymentPattern): PaymentInit
    {
        $this->paymentPattern = $paymentPattern;

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
     * @return PaymentInit
     */
    public function setStatementReference(?string $statementReference
    ): PaymentInit {
        $this->statementReference = $statementReference;

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
     * @return PaymentInit
     */
    public function setAuthenticationData(
        ?AuthenticationData $authenticationData
    ): PaymentInit {
        $this->authenticationData = $authenticationData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    /**
     * @param string|null $mandateId
     *
     * @return PaymentInit
     */
    public function setMandateId(?string $mandateId): PaymentInit
    {
        $this->mandateId = $mandateId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBillingFirstDate(): ?string
    {
        return $this->billingFirstDate;
    }

    /**
     * @param string|null $billingFirstDate
     *
     * @return PaymentInit
     */
    public function setBillingFirstDate(?string $billingFirstDate): PaymentInit
    {
        $this->billingFirstDate = $billingFirstDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomer3DSTransactionDate(): ?string
    {
        return $this->customer3DSTransactionDate;
    }

    /**
     * @param string|null $customer3DSTransactionDate
     *
     * @return PaymentInit
     */
    public function setCustomer3DSTransactionDate(
        ?string $customer3DSTransactionDate
    ): PaymentInit {
        $this->customer3DSTransactionDate = $customer3DSTransactionDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerBillingNb(): ?string
    {
        return $this->customerBillingNb;
    }

    /**
     * @param string|null $customerBillingNb
     *
     * @return PaymentInit
     */
    public function setCustomerBillingNb(?string $customerBillingNb
    ): PaymentInit {
        $this->customerBillingNb = $customerBillingNb;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerDeliverySuccessFlag(): ?string
    {
        return $this->customerDeliverySuccessFlag;
    }

    /**
     * @param string|null $customerDeliverySuccessFlag
     *
     * @return PaymentInit
     */
    public function setCustomerDeliverySuccessFlag(
        ?string $customerDeliverySuccessFlag
    ): PaymentInit {
        $this->customerDeliverySuccessFlag = $customerDeliverySuccessFlag;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerPhoneValidationMethod(): ?string
    {
        return $this->customerPhoneValidationMethod;
    }

    /**
     * @param string|null $customerPhoneValidationMethod
     *
     * @return PaymentInit
     */
    public function setCustomerPhoneValidationMethod(
        ?string $customerPhoneValidationMethod
    ): PaymentInit {
        $this->customerPhoneValidationMethod = $customerPhoneValidationMethod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerRegistrationDateOnline(): ?string
    {
        return $this->customerRegistrationDateOnline;
    }

    /**
     * @param string|null $customerRegistrationDateOnline
     *
     * @return PaymentInit
     */
    public function setCustomerRegistrationDateOnline(
        ?string $customerRegistrationDateOnline
    ): PaymentInit {
        $this->customerRegistrationDateOnline = $customerRegistrationDateOnline;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerRegistrationDateProxi(): ?string
    {
        return $this->customerRegistrationDateProxi;
    }

    /**
     * @param string|null $customerRegistrationDateProxi
     *
     * @return PaymentInit
     */
    public function setCustomerRegistrationDateProxi(
        ?string $customerRegistrationDateProxi
    ): PaymentInit {
        $this->customerRegistrationDateProxi = $customerRegistrationDateProxi;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryFirstDate(): ?string
    {
        return $this->deliveryFirstDate;
    }

    /**
     * @param string|null $deliveryFirstDate
     *
     * @return PaymentInit
     */
    public function setDeliveryFirstDate(?string $deliveryFirstDate
    ): PaymentInit {
        $this->deliveryFirstDate = $deliveryFirstDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEvidenceAcquisitionDate(): ?string
    {
        return $this->evidenceAcquisitionDate;
    }

    /**
     * @param string|null $evidenceAcquisitionDate
     *
     * @return PaymentInit
     */
    public function setEvidenceAcquisitionDate(?string $evidenceAcquisitionDate
    ): PaymentInit {
        $this->evidenceAcquisitionDate = $evidenceAcquisitionDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEvidenceNumber(): ?string
    {
        return $this->evidenceNumber;
    }

    /**
     * @param string|null $evidenceNumber
     *
     * @return PaymentInit
     */
    public function setEvidenceNumber(?string $evidenceNumber): PaymentInit
    {
        $this->evidenceNumber = $evidenceNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEvidenceType(): ?string
    {
        return $this->evidenceType;
    }

    /**
     * @param string|null $evidenceType
     *
     * @return PaymentInit
     */
    public function setEvidenceType(?string $evidenceType): PaymentInit
    {
        $this->evidenceType = $evidenceType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValueDate(): ?string
    {
        return $this->valueDate;
    }

    /**
     * @param string|null $valueDate
     *
     * @return PaymentInit
     */
    public function setValueDate(?string $valueDate): PaymentInit
    {
        $this->valueDate = $valueDate;

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
     * @return PaymentInit
     */
    public function setDeliveryData(
        ?DeliveryData $deliveryData
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setShoppingCartDetail(
        ?ShoppingCartDetail $shoppingCartDetail
    ): PaymentInit {
        $this->shoppingCartDetail = $shoppingCartDetail;

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
     * @return PaymentInit
     */
    public function setHolderData(
        ?HolderData $holderData
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): PaymentInit {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAdditionalReference(): ?string
    {
        return $this->holderAdditionalReference;
    }

    /**
     * @param string|null $holderAdditionalReference
     *
     * @return PaymentInit
     */
    public function setHolderAdditionalReference(
        ?string $holderAdditionalReference
    ): PaymentInit {
        $this->holderAdditionalReference = $holderAdditionalReference;

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
     * @return PaymentInit
     */
    public function setRiskManagementCustomDataList(
        ?array $riskManagementCustomDataList
    ): PaymentInit {
        $this->riskManagementCustomDataList = $riskManagementCustomDataList;

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
     * @return PaymentInit
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setSeal(?string $seal): PaymentInit
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
     * @return PaymentInit
     */
    public function setKeyVersion(?string $keyVersion): PaymentInit
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
     * @return PaymentInit
     */
    public function setSealAlgorithm(?string $sealAlgorithm): PaymentInit
    {
        $this->sealAlgorithm = $sealAlgorithm;

        return $this;
    }

    /**
     * @return PaypageData|null
     */
    public function getPaypageData(): ?PaypageData
    {
        return $this->paypageData;
    }

    /**
     * @param PaypageData|null $paypageData
     *
     * @return PaymentInit
     */
    public function setPaypageData(
        ?PaypageData $paypageData
    ): PaymentInit {
        $this->paypageData = $paypageData;

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
     * @return PaymentInit
     */
    public function setSubMerchantId(?string $subMerchantId): PaymentInit
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
     * @return PaymentInit
     */
    public function setSubMerchantShortName(?string $subMerchantShortName
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setSubMerchantCategoryCode(?string $subMerchantCategoryCode
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setSubMerchantLegalId(?string $subMerchantLegalId
    ): PaymentInit {
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
     * @return PaymentInit
     */
    public function setSubMerchantAddress(
        ?Address $subMerchantAddress
    ): PaymentInit {
        $this->subMerchantAddress = $subMerchantAddress;

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
     * @return PaymentInit
     */
    public function setOrderContext(
        ?OrderContext $orderContext
    ): PaymentInit {
        $this->orderContext = $orderContext;

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
     * @return PaymentInit
     */
    public function setTravelContext(
        ?TravelContext $travelContext
    ): PaymentInit {
        $this->travelContext = $travelContext;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseEncoding(): ?string
    {
        return $this->responseEncoding;
    }

    /**
     * @param string|null $responseEncoding
     *
     * @return PaymentInit
     */
    public function setResponseEncoding(?string $responseEncoding): PaymentInit
    {
        $this->responseEncoding = $responseEncoding;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantName(): ?string
    {
        return $this->subMerchantName;
    }

    /**
     * @param string|null $subMerchantName
     *
     * @return PaymentInit
     */
    public function setSubMerchantName(?string $subMerchantName): PaymentInit
    {
        $this->subMerchantName = $subMerchantName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubMerchantContractNumber(): ?string
    {
        return $this->subMerchantContractNumber;
    }

    /**
     * @param string|null $subMerchantContractNumber
     *
     * @return PaymentInit
     */
    public function setSubMerchantContractNumber(
        ?string $subMerchantContractNumber
    ): PaymentInit {
        $this->subMerchantContractNumber = $subMerchantContractNumber;

        return $this;
    }

    /**
     * @return CustomerAccountHistoric|null
     */
    public function getCustomerAccountHistoric(): ?CustomerAccountHistoric
    {
        return $this->customerAccountHistoric;
    }

    /**
     * @param CustomerAccountHistoric|null $customerAccountHistoric
     *
     * @return PaymentInit
     */
    public function setCustomerAccountHistoric(?CustomerAccountHistoric $customerAccountHistoric
    ): PaymentInit {
        $this->customerAccountHistoric = $customerAccountHistoric;

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
     * @return PaymentInit
     */
    public function setMerchantName(?string $merchantName): PaymentInit
    {
        $this->merchantName = $merchantName;

        return $this;
    }

}
