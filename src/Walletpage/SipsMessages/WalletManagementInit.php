<?php

declare(strict_types=1);

namespace Worldline\Sips\Walletpage\SipsMessages;

use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class WalletManagementInit.
 */
class WalletManagementInit extends SipsMessage
{
    private string $serviceUrl;

    private ?string $automaticResponseURL = null;

    private ?string $customerId = null;

    private ?string $customerIpAddress = null;

    private ?string $customerLAnguage = null;

    private ?string $intermediateServiceProviderId = null;

    private ?string $interfaceVersion = null;

    private ?string $keyVersion = null;

    private ?string $mandateId = null;

    private ?string $merchantId = null;

    private ?string $merchantSessionId = null;

    private ?string $merchantWalletId = null;

    private ?string $normalReturnUrl = null;

    private ?string $paymentMeanBrandList = null;

    private ?string $paymentMeanData = null;

    private ?string $requestDateTime = null;

    private ?string $responseEncoding = null;

    private ?string $returnContext = null;

    private ?string $seal = null;

    private ?string $sealAlgorithm = null;

    private ?string $templateName = null;

    private ?string $transactionActors = null;

    private ?array $walletActionNameList = null;

    private ?FraudData $fraudData = null;

    private ?Address $customerAddress = null;

    private ?Contact $customerContact = null;

    private ?CustomerData $customerData = null;

    private ?Address $billingAddress = null;

    private ?Contact $billingContact = null;

    private ?Address $deliveryAddress = null;

    private ?Contact $deliveryContact = null;

    private ?Address $holderAddress = null;

    private ?Contact $holderContact = null;

    /**
     * WalletManagementInit constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = 'rs-services/v2/walletManagementInit';
        $this->setinterfaceVersion('WMR_WS_2.5');
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function getAutomaticResponseURL(): ?string
    {
        return $this->automaticResponseURL;
    }

    public function setAutomaticResponseURL(
        ?string $automaticResponseURL
    ): self {
        $this->automaticResponseURL = $automaticResponseURL;

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

    public function setCustomerIpAddress(
        ?string $customerIpAddress
    ): self {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    public function getCustomerLAnguage(): ?string
    {
        return $this->customerLAnguage;
    }

    public function setCustomerLAnguage(
        ?string $customerLAnguage
    ): self {
        $this->customerLAnguage = $customerLAnguage;

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

    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    public function setInterfaceVersion(
        ?string $interfaceVersion
    ): self {
        $this->interfaceVersion = $interfaceVersion;

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

    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    public function setMandateId(?string $mandateId): self
    {
        $this->mandateId = $mandateId;

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

    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    public function setMerchantWalletId(
        ?string $merchantWalletId
    ): self {
        $this->merchantWalletId = $merchantWalletId;

        return $this;
    }

    public function getNormalReturnUrl(): ?string
    {
        return $this->normalReturnUrl;
    }

    public function setNormalReturnUrl(
        ?string $normalReturnUrl
    ): self {
        $this->normalReturnUrl = $normalReturnUrl;

        return $this;
    }

    public function getPaymentMeanBrandList(): ?string
    {
        return $this->paymentMeanBrandList;
    }

    public function setPaymentMeanBrandList(
        ?string $paymentMeanBrandList
    ): self {
        $this->paymentMeanBrandList = $paymentMeanBrandList;

        return $this;
    }

    public function getPaymentMeanData(): ?string
    {
        return $this->paymentMeanData;
    }

    public function setPaymentMeanData(
        ?string $paymentMeanData
    ): self {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    public function getRequestDateTime(): ?string
    {
        return $this->requestDateTime;
    }

    public function setRequestDateTime(
        ?string $requestDateTime
    ): self {
        $this->requestDateTime = $requestDateTime;

        return $this;
    }

    public function getResponseEncoding(): ?string
    {
        return $this->responseEncoding;
    }

    public function setResponseEncoding(
        ?string $responseEncoding
    ): self {
        $this->responseEncoding = $responseEncoding;

        return $this;
    }

    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    public function setReturnContext(
        ?string $returnContext
    ): self {
        $this->returnContext = $returnContext;

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

    public function getSealAlgorithm(): ?string
    {
        return $this->sealAlgorithm;
    }

    public function setSealAlgorithm(
        ?string $sealAlgorithm
    ): self {
        $this->sealAlgorithm = $sealAlgorithm;

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

    public function getWalletActionNameList(): ?array
    {
        return $this->walletActionNameList;
    }

    public function setWalletActionNameList(
        ?array $walletActionNameList
    ): self {
        $this->walletActionNameList = $walletActionNameList;

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
}
