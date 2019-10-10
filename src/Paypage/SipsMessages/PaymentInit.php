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
    protected $amount;

    /**
     * @var null|string
     */
    protected $automaticResponseUrl;

    /**
     * @var null|string
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
    protected $customerLanguage;

    /**
     * @var null|FraudData
     */
    protected $fraudData;

    /**
     * @var null|string
     */
    protected $hashSalt1;

    /**
     * @var null|string
     */
    protected $hashSalt2;

    /**
     * @var null|string
     */
    protected $hashAlgorithm1;

    /**
     * @var null|string
     */
    protected $hashAlgorithm2;

    /**
     * @var null|string
     */
    protected $interfaceVersion;

    /**
     * @var null|string
     */
    protected $merchantId;

    /**
     * @var null|string
     */
    protected $merchantSessionId;

    /**
     * @var null|string
     */
    protected $merchantTransactionDateTime;

    /**
     * @var null|string
     */
    protected $merchantWalletId;

    /**
     * @var null|string
     */
    protected $normalReturnUrl;

    /**
     * @var null|string
     */
    protected $orderChannel;

    /**
     * @var null|string
     */
    protected $orderId;

    /**
     * @var null|array
     */
    protected $paymentMeanBrandList;

    /**
     * @var null|PaymentMeanData
     */
    protected $paymentMeanData;

    /**
     * @var null|int
     */
    protected $responseKeyVersion;

    /**
     * @var null|string
     */
    protected $returnContext;

    /**
     * @var null|string
     */
    protected $templateName;

    /**
     * @var null|string
     */
    protected $transactionActors;

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
    protected $invoiceReference;

    /**
     * @var null|string
     */
    protected $bypassReceiptPage;

    /**
     * @var null|string
     */
    protected $customerIpAddress;

    /**
     * @var null|string
     */
    protected $customerTimestampIpAddress;

    /**
     * @var null|string
     */
    protected $bypassDcc;

    /**
     * @var null|InstalmentData
     */
    protected $instalmentData;

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
     * @var null|string
     */
    protected $paymentPattern;

    /**
     * @var null|string
     */
    protected $statementReference;

    /**
     * @var null|AuthenticationData
     */
    protected $authenticationData;

    /**
     * @var null|string
     */
    protected $mandateId;

    /**
     * @var null|string
     */
    protected $billingFirstDate;

    /**
     * @var null|string
     */
    protected $customer3DSTransactionDate;

    /**
     * @var null|string
     */
    protected $customerBillingNb;

    /**
     * @var null|string
     */
    protected $customerDeliverySuccessFlag;

    /**
     * @var null|string
     */
    protected $customerPhoneValidationMethod;

    /**
     * @var null|string
     */
    protected $customerRegistrationDateOnline;

    /**
     * @var null|string
     */
    protected $customerRegistrationDateProxi;

    /**
     * @var null|string
     */
    protected $deliveryFirstDate;

    /**
     * @var null|string
     */
    protected $evidenceAcquisitionDate;

    /**
     * @var null|string
     */
    protected $evidenceNumber;

    /**
     * @var null|string
     */
    protected $evidenceType;

    /**
     * @var null|string
     */
    protected $valueDate;

    /**
     * @var null|DeliveryData
     */
    protected $deliveryData;

    /**
     * @var null|ShoppingCartDetail
     */
    protected $shoppingCartDetail;

    /**
     * @var null|HolderData
     */
    protected $holderData;

    /**
     * @var null|S10TransactionReference
     */
    protected $s10TransactionReference;

    /**
     * @var null|string
     */
    protected $holderAdditionalReference;

    /**
     * @var null|array
     */
    protected $riskManagementCustomDataList;

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
     * @var null|PaypageData
     */
    protected $paypageData;

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
     * @var null|OrderContext
     */
    protected $orderContext;

    /**
     * @var null|TravelContext
     */
    protected $travelContext;

    /**
     * @var null|string
     */
    protected $responseEncoding;

    /**
     * @var null|string
     */
    protected $subMerchantName;

    /**
     * @var null|string
     */
    protected $subMerchantContractNumber;

    /**
     * @var null|string
     */
    protected $customerAccountHistoric;

    /**
     * @var null|string
     */
    protected $merchantName;

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
     * @return string|null
     */
    public function getCustomerAccountHistoric(): ?string
    {
        return $this->customerAccountHistoric;
    }

    /**
     * @param string|null $customerAccountHistoric
     *
     * @return PaymentInit
     */
    public function setCustomerAccountHistoric(?string $customerAccountHistoric
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
