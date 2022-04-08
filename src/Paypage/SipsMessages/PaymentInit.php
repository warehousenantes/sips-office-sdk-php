<?php

declare(strict_types=1);

namespace Worldline\Sips\Paypage\SipsMessages;

use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\AuthenticationData;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerAccountHistoric;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\DeliveryData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\Fields\HolderData;
use Worldline\Sips\Common\Fields\InstalmentData;
use Worldline\Sips\Common\Fields\OrderContext;
use Worldline\Sips\Common\Fields\PaymentMeanData;
use Worldline\Sips\Common\Fields\PaypageData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\Fields\ShoppingCartDetail;
use Worldline\Sips\Common\Fields\TravelContext;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentInit.
 */
class PaymentInit extends SipsMessage
{
    private string $serviceUrl = 'rs-services/v2/paymentInit/';

    private ?int $amount = null;

    private ?string $automaticResponseUrl = null;

    private ?string $captureDay = null;

    private ?string $captureMode = null;

    private ?string $currencyCode = null;

    private ?string $customerEmail = null;

    private ?string $customerId = null;

    private ?string $customerLanguage = null;

    private ?FraudData $fraudData = null;

    private ?string $hashSalt1 = null;

    private ?string $hashSalt2 = null;

    private ?string $hashAlgorithm1 = null;

    private ?string $hashAlgorithm2 = null;

    private ?string $interfaceVersion = null;

    private ?string $merchantId = null;

    private ?string $merchantSessionId = null;

    private ?string $merchantTransactionDateTime = null;

    private ?string $merchantWalletId = null;

    private ?string $normalReturnUrl = null;

    private ?string $orderChannel = null;

    private ?string $orderId = null;

    private ?array $paymentMeanBrandList = null;

    private ?PaymentMeanData $paymentMeanData = null;

    private ?int $responseKeyVersion = null;

    private ?string $returnContext = null;

    private ?string $templateName = null;

    private ?string $transactionActors = null;

    private ?string $transactionReference = null;

    private ?string $transactionOrigin = null;

    private ?string $invoiceReference = null;

    private ?string $bypassReceiptPage = null;

    private ?string $customerIpAddress = null;

    private ?string $customerTimestampIpAddress = null;

    private ?string $bypassDcc = null;

    private ?InstalmentData $instalmentData = null;

    private ?Address $billingAddress = null;

    private ?Contact $billingContact = null;

    private ?Address $customerAddress = null;

    private ?Contact $customerContact = null;

    private ?Address $deliveryAddress = null;

    private ?Contact $deliveryContact = null;

    private ?Address $holderAddress = null;

    private ?Contact $holderContact = null;

    private ?CustomerData $customerData = null;

    private ?string $paymentPattern = null;

    private ?string $statementReference = null;

    private ?AuthenticationData $authenticationData = null;

    private ?string $mandateId = null;

    private ?string $billingFirstDate = null;

    private ?string $customer3DSTransactionDate = null;

    private ?string $customerBillingNb = null;

    private ?string $customerDeliverySuccessFlag = null;

    private ?string $customerPhoneValidationMethod = null;

    private ?string $customerRegistrationDateOnline = null;

    private ?string $customerRegistrationDateProxi = null;

    private ?string $deliveryFirstDate = null;

    private ?string $evidenceAcquisitionDate = null;

    private ?string $evidenceNumber = null;

    private ?string $evidenceType = null;

    private ?string $valueDate = null;

    private ?DeliveryData $deliveryData = null;

    private ?ShoppingCartDetail $shoppingCartDetail = null;

    private ?HolderData $holderData = null;

    private ?S10TransactionReference $s10TransactionReference = null;

    private ?string $holderAdditionalReference = null;

    private ?array $riskManagementCustomDataList = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $seal = null;

    private ?string $keyVersion = null;

    private ?string $sealAlgorithm = null;

    private ?PaypageData $paypageData = null;

    private ?string $subMerchantId = null;

    private ?string $subMerchantShortName = null;

    private ?string $subMerchantCategoryCode = null;

    private ?string $subMerchantLegalId = null;

    private ?Address $subMerchantAddress = null;

    private ?OrderContext $orderContext = null;

    private ?TravelContext $travelContext = null;

    private ?string $responseEncoding = null;

    private ?string $subMerchantName = null;

    private ?string $subMerchantContractNumber = null;

    private ?CustomerAccountHistoric $customerAccountHistoric = null;

    private ?string $merchantName = null;

    /**
     * PaymentInit constructor.
     */
    public function __construct()
    {
        $this->setInterfaceVersion('IR_WS_2.27');
        $this->setTransactionReference($this->generateReference());
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

    public function getAutomaticResponseUrl(): ?string
    {
        return $this->automaticResponseUrl;
    }

    public function setAutomaticResponseUrl(
        ?string $automaticResponseUrl
    ): self {
        $this->automaticResponseUrl = $automaticResponseUrl;

        return $this;
    }

    public function getCaptureDay(): ?string
    {
        return $this->captureDay;
    }

    public function setCaptureDay(?string $captureDay): self
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

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;

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

    public function getCustomerLanguage(): ?string
    {
        return $this->customerLanguage;
    }

    public function setCustomerLanguage(?string $customerLanguage): self
    {
        $this->customerLanguage = $customerLanguage;

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

    public function getHashSalt1(): ?string
    {
        return $this->hashSalt1;
    }

    public function setHashSalt1(?string $hashSalt1): self
    {
        $this->hashSalt1 = $hashSalt1;

        return $this;
    }

    public function getHashSalt2(): ?string
    {
        return $this->hashSalt2;
    }

    public function setHashSalt2(?string $hashSalt2): self
    {
        $this->hashSalt2 = $hashSalt2;

        return $this;
    }

    public function getHashAlgorithm1(): ?string
    {
        return $this->hashAlgorithm1;
    }

    public function setHashAlgorithm1(?string $hashAlgorithm1): self
    {
        $this->hashAlgorithm1 = $hashAlgorithm1;

        return $this;
    }

    public function getHashAlgorithm2(): ?string
    {
        return $this->hashAlgorithm2;
    }

    public function setHashAlgorithm2(?string $hashAlgorithm2): self
    {
        $this->hashAlgorithm2 = $hashAlgorithm2;

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

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getMerchantSessionId(): ?string
    {
        return $this->merchantSessionId;
    }

    public function setMerchantSessionId(
        ?string $merchantSessionId
    ): self {
        $this->merchantSessionId = $merchantSessionId;

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

    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    public function setMerchantWalletId(?string $merchantWalletId): self
    {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    public function getNormalReturnUrl(): ?string
    {
        return $this->normalReturnUrl;
    }

    public function setNormalReturnUrl(?string $normalReturnUrl): self
    {
        $this->normalReturnUrl = $normalReturnUrl;

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

    public function getPaymentMeanBrandList(): ?array
    {
        return $this->paymentMeanBrandList;
    }

    public function setPaymentMeanBrandList(
        ?array $paymentMeanBrandList
    ): self {
        $this->paymentMeanBrandList = $paymentMeanBrandList;

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

    public function getResponseKeyVersion(): ?int
    {
        return $this->responseKeyVersion;
    }

    public function setResponseKeyVersion(?int $responseKeyVersion): self
    {
        $this->responseKeyVersion = $responseKeyVersion;

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

    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;

        return $this;
    }

    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    public function setTransactionActors(
        ?string $transactionActors
    ): self {
        $this->transactionActors = $transactionActors;

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

    public function setTransactionOrigin(
        ?string $transactionOrigin
    ): self {
        $this->transactionOrigin = $transactionOrigin;

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

    public function getBypassReceiptPage(): ?string
    {
        return $this->bypassReceiptPage;
    }

    public function setBypassReceiptPage(
        ?string $bypassReceiptPage
    ): self {
        $this->bypassReceiptPage = $bypassReceiptPage;

        return $this;
    }

    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    public function setCustomerIpAddress(
        ?string $customerIpAddress
    ): self {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    public function getCustomerTimestampIpAddress(): ?string
    {
        return $this->customerTimestampIpAddress;
    }

    public function setCustomerTimestampIpAddress(
        ?string $customerTimestampIpAddress
    ): self {
        $this->customerTimestampIpAddress = $customerTimestampIpAddress;

        return $this;
    }

    public function getBypassDcc(): ?string
    {
        return $this->bypassDcc;
    }

    public function setBypassDcc(?string $bypassDcc): self
    {
        $this->bypassDcc = $bypassDcc;

        return $this;
    }

    public function getInstalmentData(
    ): ?InstalmentData {
        return $this->instalmentData;
    }

    public function setInstalmentData(
        ?InstalmentData $instalmentData
    ): self {
        $this->instalmentData = $instalmentData;

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

    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    public function setPaymentPattern(?string $paymentPattern): self
    {
        $this->paymentPattern = $paymentPattern;

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

    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    public function setMandateId(?string $mandateId): self
    {
        $this->mandateId = $mandateId;

        return $this;
    }

    public function getBillingFirstDate(): ?string
    {
        return $this->billingFirstDate;
    }

    public function setBillingFirstDate(?string $billingFirstDate): self
    {
        $this->billingFirstDate = $billingFirstDate;

        return $this;
    }

    public function getCustomer3DSTransactionDate(): ?string
    {
        return $this->customer3DSTransactionDate;
    }

    public function setCustomer3DSTransactionDate(
        ?string $customer3DSTransactionDate
    ): self {
        $this->customer3DSTransactionDate = $customer3DSTransactionDate;

        return $this;
    }

    public function getCustomerBillingNb(): ?string
    {
        return $this->customerBillingNb;
    }

    public function setCustomerBillingNb(
        ?string $customerBillingNb
    ): self {
        $this->customerBillingNb = $customerBillingNb;

        return $this;
    }

    public function getCustomerDeliverySuccessFlag(): ?string
    {
        return $this->customerDeliverySuccessFlag;
    }

    public function setCustomerDeliverySuccessFlag(
        ?string $customerDeliverySuccessFlag
    ): self {
        $this->customerDeliverySuccessFlag = $customerDeliverySuccessFlag;

        return $this;
    }

    public function getCustomerPhoneValidationMethod(): ?string
    {
        return $this->customerPhoneValidationMethod;
    }

    public function setCustomerPhoneValidationMethod(
        ?string $customerPhoneValidationMethod
    ): self {
        $this->customerPhoneValidationMethod = $customerPhoneValidationMethod;

        return $this;
    }

    public function getCustomerRegistrationDateOnline(): ?string
    {
        return $this->customerRegistrationDateOnline;
    }

    public function setCustomerRegistrationDateOnline(
        ?string $customerRegistrationDateOnline
    ): self {
        $this->customerRegistrationDateOnline = $customerRegistrationDateOnline;

        return $this;
    }

    public function getCustomerRegistrationDateProxi(): ?string
    {
        return $this->customerRegistrationDateProxi;
    }

    public function setCustomerRegistrationDateProxi(
        ?string $customerRegistrationDateProxi
    ): self {
        $this->customerRegistrationDateProxi = $customerRegistrationDateProxi;

        return $this;
    }

    public function getDeliveryFirstDate(): ?string
    {
        return $this->deliveryFirstDate;
    }

    public function setDeliveryFirstDate(
        ?string $deliveryFirstDate
    ): self {
        $this->deliveryFirstDate = $deliveryFirstDate;

        return $this;
    }

    public function getEvidenceAcquisitionDate(): ?string
    {
        return $this->evidenceAcquisitionDate;
    }

    public function setEvidenceAcquisitionDate(
        ?string $evidenceAcquisitionDate
    ): self {
        $this->evidenceAcquisitionDate = $evidenceAcquisitionDate;

        return $this;
    }

    public function getEvidenceNumber(): ?string
    {
        return $this->evidenceNumber;
    }

    public function setEvidenceNumber(?string $evidenceNumber): self
    {
        $this->evidenceNumber = $evidenceNumber;

        return $this;
    }

    public function getEvidenceType(): ?string
    {
        return $this->evidenceType;
    }

    public function setEvidenceType(?string $evidenceType): self
    {
        $this->evidenceType = $evidenceType;

        return $this;
    }

    public function getValueDate(): ?string
    {
        return $this->valueDate;
    }

    public function setValueDate(?string $valueDate): self
    {
        $this->valueDate = $valueDate;

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

    public function getHolderAdditionalReference(): ?string
    {
        return $this->holderAdditionalReference;
    }

    public function setHolderAdditionalReference(
        ?string $holderAdditionalReference
    ): self {
        $this->holderAdditionalReference = $holderAdditionalReference;

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

    public function getPaypageData(): ?PaypageData
    {
        return $this->paypageData;
    }

    public function setPaypageData(?PaypageData $paypageData): self
    {
        $this->paypageData = $paypageData;

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

    public function getResponseEncoding(): ?string
    {
        return $this->responseEncoding;
    }

    public function setResponseEncoding(?string $responseEncoding): self
    {
        $this->responseEncoding = $responseEncoding;

        return $this;
    }

    public function getSubMerchantName(): ?string
    {
        return $this->subMerchantName;
    }

    public function setSubMerchantName(?string $subMerchantName): self
    {
        $this->subMerchantName = $subMerchantName;

        return $this;
    }

    public function getSubMerchantContractNumber(): ?string
    {
        return $this->subMerchantContractNumber;
    }

    public function setSubMerchantContractNumber(
        ?string $subMerchantContractNumber
    ): self {
        $this->subMerchantContractNumber = $subMerchantContractNumber;

        return $this;
    }

    public function getCustomerAccountHistoric(): ?CustomerAccountHistoric
    {
        return $this->customerAccountHistoric;
    }

    public function setCustomerAccountHistoric(
        ?CustomerAccountHistoric $customerAccountHistoric
    ): self {
        $this->customerAccountHistoric = $customerAccountHistoric;

        return $this;
    }

    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    public function setMerchantName(?string $merchantName): self
    {
        $this->merchantName = $merchantName;

        return $this;
    }
}
