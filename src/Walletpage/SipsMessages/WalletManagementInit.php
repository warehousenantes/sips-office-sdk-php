<?php


namespace Worldline\Sips\WalletPage\SipsMessages;


use Worldline\Sips\Common\Fields\Address;
use Worldline\Sips\Common\Fields\Contact;
use Worldline\Sips\Common\Fields\CustomerData;
use Worldline\Sips\Common\Fields\FraudData;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class WalletManagementInit
 * @package Worldline\Sips\WalletPage\SipsMessages
 */
class WalletManagementInit extends SipsMessage
{
    /**
     * @var string
     */
    private $serviceUrl;
    
    /**
     * @var null|string
     */
    protected $automaticResponseURL;
    
    /**
     * @var null|string
     */
    protected $customerId;
    
    /**
     * @var null|string
     */
    protected $customerIpAddress;
    
    /**
     * @var null|string
     */
    protected $customerLAnguage;
    
    /**
     * @var null|string
     */
    protected $intermediateServiceProviderId;
    
    /**
     * @var null|string
     */
    protected $interfaceVersion;
    
    /**
     * @var null|string
     */
    protected $keyVersion;
    
    /**
     * @var null|string
     */
    protected $mandateId;
    
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
    protected $merchantWalletId;
    
    /**
     * @var null|string
     */
    protected $normalReturnUrl;
    
    /**
     * @var null|string
     */
    protected $paymentMeanBrandList;
    
    /**
     * @var null|string
     */
    protected $paymentMeanData;
    
    /**
     * @var null|string
     */
    protected $requestDateTime;
    
    /**
     * @var null|string
     */
    protected $responseEncoding;
    
    /**
     * @var null|string
     */
    protected $returnContext;
    
    /**
     * @var null|string
     */
    protected $seal;
    
    /**
     * @var null|string
     */
    protected $sealAlgorithm;
    
    /**
     * @var null|string
     */
    protected $templateName;
    
    /**
     * @var null|string
     */
    protected $transactionActors;
    
    /**
     * @var null|array
     */
    protected $walletActionNameList;
    
    /**
     * @var null|FraudData
     */
    protected $fraudData;
    
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
     * WalletManagementInit constructor.
     */
    public function __construct()
    {
        $this->serviceUrl = "rs-services/v2/walletManagementInit";
        $this->setinterfaceVersion("WMR_WS_2.5");
    }

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return string|null
     */
    public function getAutomaticResponseURL(): ?string
    {
        return $this->automaticResponseURL;
    }

    /**
     * @param string|null $automaticResponseURL
     *
     * @return WalletManagementInit
     */
    public function setAutomaticResponseURL(?string $automaticResponseURL
    ): WalletManagementInit {
        $this->automaticResponseURL = $automaticResponseURL;

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
     * @return WalletManagementInit
     */
    public function setCustomerId(?string $customerId): WalletManagementInit
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
     * @return WalletManagementInit
     */
    public function setCustomerIpAddress(?string $customerIpAddress
    ): WalletManagementInit {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerLAnguage(): ?string
    {
        return $this->customerLAnguage;
    }

    /**
     * @param string|null $customerLAnguage
     *
     * @return WalletManagementInit
     */
    public function setCustomerLAnguage(?string $customerLAnguage
    ): WalletManagementInit {
        $this->customerLAnguage = $customerLAnguage;

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
     * @return WalletManagementInit
     */
    public function setIntermediateServiceProviderId(
        ?string $intermediateServiceProviderId
    ): WalletManagementInit {
        $this->intermediateServiceProviderId = $intermediateServiceProviderId;

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
     * @return WalletManagementInit
     */
    public function setInterfaceVersion(?string $interfaceVersion
    ): WalletManagementInit {
        $this->interfaceVersion = $interfaceVersion;

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
     * @return WalletManagementInit
     */
    public function setKeyVersion(?string $keyVersion): WalletManagementInit
    {
        $this->keyVersion = $keyVersion;

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
     * @return WalletManagementInit
     */
    public function setMandateId(?string $mandateId): WalletManagementInit
    {
        $this->mandateId = $mandateId;

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
     * @return WalletManagementInit
     */
    public function setMerchantId(?string $merchantId): WalletManagementInit
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
     * @return WalletManagementInit
     */
    public function setMerchantSessionId(?string $merchantSessionId
    ): WalletManagementInit {
        $this->merchantSessionId = $merchantSessionId;

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
     * @return WalletManagementInit
     */
    public function setMerchantWalletId(?string $merchantWalletId
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setNormalReturnUrl(?string $normalReturnUrl
    ): WalletManagementInit {
        $this->normalReturnUrl = $normalReturnUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrandList(): ?string
    {
        return $this->paymentMeanBrandList;
    }

    /**
     * @param string|null $paymentMeanBrandList
     *
     * @return WalletManagementInit
     */
    public function setPaymentMeanBrandList(?string $paymentMeanBrandList
    ): WalletManagementInit {
        $this->paymentMeanBrandList = $paymentMeanBrandList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanData(): ?string
    {
        return $this->paymentMeanData;
    }

    /**
     * @param string|null $paymentMeanData
     *
     * @return WalletManagementInit
     */
    public function setPaymentMeanData(?string $paymentMeanData
    ): WalletManagementInit {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestDateTime(): ?string
    {
        return $this->requestDateTime;
    }

    /**
     * @param string|null $requestDateTime
     *
     * @return WalletManagementInit
     */
    public function setRequestDateTime(?string $requestDateTime
    ): WalletManagementInit {
        $this->requestDateTime = $requestDateTime;

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
     * @return WalletManagementInit
     */
    public function setResponseEncoding(?string $responseEncoding
    ): WalletManagementInit {
        $this->responseEncoding = $responseEncoding;

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
     * @return WalletManagementInit
     */
    public function setReturnContext(?string $returnContext
    ): WalletManagementInit {
        $this->returnContext = $returnContext;

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
     * @return WalletManagementInit
     */
    public function setSeal(?string $seal): WalletManagementInit
    {
        $this->seal = $seal;

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
     * @return WalletManagementInit
     */
    public function setSealAlgorithm(?string $sealAlgorithm
    ): WalletManagementInit {
        $this->sealAlgorithm = $sealAlgorithm;

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
     * @return WalletManagementInit
     */
    public function setTemplateName(?string $templateName): WalletManagementInit
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
     * @return WalletManagementInit
     */
    public function setTransactionActors(?string $transactionActors
    ): WalletManagementInit {
        $this->transactionActors = $transactionActors;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getWalletActionNameList(): ?array
    {
        return $this->walletActionNameList;
    }

    /**
     * @param array|null $walletActionNameList
     *
     * @return WalletManagementInit
     */
    public function setWalletActionNameList(?array $walletActionNameList
    ): WalletManagementInit {
        $this->walletActionNameList = $walletActionNameList;

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
     * @return WalletManagementInit
     */
    public function setFraudData(
        ?FraudData $fraudData
    ): WalletManagementInit {
        $this->fraudData = $fraudData;

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
     * @return WalletManagementInit
     */
    public function setCustomerAddress(
        ?Address $customerAddress
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setCustomerContact(
        ?Contact $customerContact
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setCustomerData(
        ?CustomerData $customerData
    ): WalletManagementInit {
        $this->customerData = $customerData;

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
     * @return WalletManagementInit
     */
    public function setBillingAddress(
        ?Address $billingAddress
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setBillingContact(
        ?Contact $billingContact
    ): WalletManagementInit {
        $this->billingContact = $billingContact;

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
     * @return WalletManagementInit
     */
    public function setDeliveryAddress(
        ?Address $deliveryAddress
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setDeliveryContact(
        ?Contact $deliveryContact
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setHolderAddress(
        ?Address $holderAddress
    ): WalletManagementInit {
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
     * @return WalletManagementInit
     */
    public function setHolderContact(
        ?Contact $holderContact
    ): WalletManagementInit {
        $this->holderContact = $holderContact;

        return $this;
    }
    
}
