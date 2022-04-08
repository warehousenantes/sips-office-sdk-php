<?php

declare(strict_types=1);

namespace Worldline\Sips\Paypage\SipsMessages;

use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentResult.
 */
class PaymentResult extends SipsMessage
{
    private ?string $acceptanceSystemApplicationId = null;

    private ?string $acquirerContractNumber = null;

    private ?string $acquirerNativeResponseCode = null;

    private ?string $acquirerResponseCode = null;

    private ?string $acquirerResponseIdentifier = null;

    private ?string $acquirerResponseMessage = null;

    private ?string $additionalAuthorisationNumber = null;

    private ?string $amount = null;

    private ?string $authorisationId = null;

    private ?string $authorisationTypeLabel = null;

    private ?string $authorMessageReference = null;

    private ?string $avsAddressResponseCode = null;

    private ?string $avsPostcodeResponseCode = null;

    private ?string $captureDay = null;

    private ?string $captureLimitDate = null;

    private ?string $captureMode = null;

    private ?string $cardCSCResultCode = null;

    private ?string $cardProductCode = null;

    private ?string $cardProductName = null;

    private ?string $cardProductProfile = null;

    private ?string $cardProductUsageLabel = null;

    private ?string $complementaryCode = null;

    private ?string $complementaryInfo = null;

    private ?string $creditorId = null;

    private ?string $currencyCode = null;

    private ?string $customerBusinessName = null;

    private ?string $customerCompanyName = null;

    private ?string $customerEmail = null;

    private ?string $customerId = null;

    private ?string $customerIpAddress = null;

    private ?string $customerLegalId = null;

    private ?string $customerMobilePhone = null;

    private ?string $customerPositionOccupied = null;

    private ?string $dccAmount = null;

    private ?string $dccCurrencyCode = null;

    private ?string $dccExchangeRate = null;

    private ?string $dccExchangeRateValidity = null;

    private ?string $dccProvider = null;

    private ?string $dccStatus = null;

    private ?string $dccResponseCode = null;

    private ?string $dueDate = null;

    private ?string $guaranteeIndicator = null;

    private ?string $hashPan1 = null;

    private ?string $hashPan2 = null;

    private ?string $holderAuthentMethod = null;

    private ?string $holderAuthentProgram = null;

    private ?string $holderAuthentRelegation = null;

    private ?string $holderContactEmail = null;

    private ?string $holderAuthentStatus = null;

    private ?string $holderAuthentType = null;

    private ?string $instalmentAmountsList = null;

    private ?string $instalmentDatesList = null;

    private ?string $instalmentNumber = null;

    private ?string $instalmentTransactionReferencesList = null;

    private ?string $interfaceVersion = null;

    private ?string $intermediateServiceProviderOperationId = null;

    private ?string $invoiceReference = null;

    private ?string $issuerCode = null;

    private ?string $issuerCountryCode = null;

    private ?string $issuerEnrollementIndicator = null;

    private ?string $issuerWalletInformation = null;

    private ?string $keyVersion = null;

    private ?string $mandateAuthentMethod = null;

    private ?string $mandateCertificationType = null;

    private ?string $mandateId = null;

    private ?string $mandateUsage = null;

    private ?string $maskedPan = null;

    private ?string $merchantId = null;

    private ?string $merchantSessionId = null;

    private ?string $merchantTransactionDateTime = null;

    private ?string $merchantWalletId = null;

    private ?string $orderChannel = null;

    private ?string $orderId = null;

    private ?string $panEntryMode = null;

    private ?string $panExpiryDate = null;

    private ?string $paymentAttemptNumber = null;

    private ?string $paymentMeanBrand = null;

    private ?string $paymentMeanBrandSelectionStatus = null;

    private ?string $paymentMeanData = null;

    private ?string $paymentMeanId = null;

    private ?string $paymentMeanTradingName = null;

    private ?string $paymentMeanType = null;

    private ?string $paymentPattern = null;

    private ?string $preAuthenticationColor = null;

    private ?string $preAuthenticationInfo = null;

    private ?string $preAuthenticationProfile = null;

    private ?string $preAuthenticationProfileValue = null;

    private ?string $preAuthenticationRuleResultList = null;

    private ?string $preAuthenticationThreshold = null;

    private ?string $preAuthenticationValue = null;

    private ?string $preAuthorisationProfile = null;

    private ?string $preAuthorisationProfileValue = null;

    private ?string $preAuthorisationRuleResultList = null;

    private ?string $responseCode = null;

    private ?string $returnContext = null;

    private ?string $s10TransactionId = null;

    private ?string $s10TransactionIdDate = null;

    private ?string $s10transactionIdsList = null;

    private ?string $scoreColor = null;

    private ?string $scoreInfo = null;

    private ?string $scoreProfile = null;

    private ?string $scoreThreshold = null;

    private ?string $scoreValue = null;

    private ?string $secureReference = null;

    private ?string $settlementMode = null;

    private ?string $settlementModeComplement = null;

    private ?string $statementReference = null;

    private ?string $tokenPan = null;

    private ?string $transactionActors = null;

    private ?string $transactionDateTime = null;

    private ?string $transactionOrigin = null;

    private ?string $transactionPlatform = null;

    private ?string $transactionReference = null;

    private ?string $walletType = null;

    public function getAcceptanceSystemApplicationId(): ?string
    {
        return $this->acceptanceSystemApplicationId;
    }

    public function setAcceptanceSystemApplicationId(?string $acceptanceSystemApplicationId): self
    {
        $this->acceptanceSystemApplicationId = $acceptanceSystemApplicationId;

        return $this;
    }

    public function getAcquirerContractNumber(): ?string
    {
        return $this->acquirerContractNumber;
    }

    public function setAcquirerContractNumber(?string $acquirerContractNumber): self
    {
        $this->acquirerContractNumber = $acquirerContractNumber;

        return $this;
    }

    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    public function setAcquirerNativeResponseCode(?string $acquirerNativeResponseCode): self
    {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;

        return $this;
    }

    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    public function setAcquirerResponseCode(?string $acquirerResponseCode): self
    {
        $this->acquirerResponseCode = $acquirerResponseCode;

        return $this;
    }

    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    public function setAcquirerResponseIdentifier(?string $acquirerResponseIdentifier): self
    {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;

        return $this;
    }

    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    public function setAcquirerResponseMessage(?string $acquirerResponseMessage): self
    {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

        return $this;
    }

    public function getAdditionalAuthorisationNumber(): ?string
    {
        return $this->additionalAuthorisationNumber;
    }

    public function setAdditionalAuthorisationNumber(?string $additionalAuthorisationNumber): self
    {
        $this->additionalAuthorisationNumber = $additionalAuthorisationNumber;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    public function setAuthorisationId(?string $authorisationId): self
    {
        $this->authorisationId = $authorisationId;

        return $this;
    }

    public function getAuthorisationTypeLabel(): ?string
    {
        return $this->authorisationTypeLabel;
    }

    public function setAuthorisationTypeLabel(?string $authorisationTypeLabel): self
    {
        $this->authorisationTypeLabel = $authorisationTypeLabel;

        return $this;
    }

    public function getAuthorMessageReference(): ?string
    {
        return $this->authorMessageReference;
    }

    public function setAuthorMessageReference(?string $authorMessageReference): self
    {
        $this->authorMessageReference = $authorMessageReference;

        return $this;
    }

    public function getAvsAddressResponseCode(): ?string
    {
        return $this->avsAddressResponseCode;
    }

    public function setAvsAddressResponseCode(?string $avsAddressResponseCode): self
    {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

        return $this;
    }

    public function getAvsPostcodeResponseCode(): ?string
    {
        return $this->avsPostcodeResponseCode;
    }

    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode): self
    {
        $this->avsPostcodeResponseCode = $avsPostcodeResponseCode;

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

    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    public function setCaptureLimitDate(?string $captureLimitDate): self
    {
        $this->captureLimitDate = $captureLimitDate;

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

    public function getCardCSCResultCode(): ?string
    {
        return $this->cardCSCResultCode;
    }

    public function setCardCSCResultCode(?string $cardCSCResultCode): self
    {
        $this->cardCSCResultCode = $cardCSCResultCode;

        return $this;
    }

    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    public function setCardProductCode(?string $cardProductCode): self
    {
        $this->cardProductCode = $cardProductCode;

        return $this;
    }

    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    public function setCardProductName(?string $cardProductName): self
    {
        $this->cardProductName = $cardProductName;

        return $this;
    }

    public function getCardProductProfile(): ?string
    {
        return $this->cardProductProfile;
    }

    public function setCardProductProfile(?string $cardProductProfile): self
    {
        $this->cardProductProfile = $cardProductProfile;

        return $this;
    }

    public function getCardProductUsageLabel(): ?string
    {
        return $this->cardProductUsageLabel;
    }

    public function setCardProductUsageLabel(?string $cardProductUsageLabel): self
    {
        $this->cardProductUsageLabel = $cardProductUsageLabel;

        return $this;
    }

    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    public function setComplementaryCode(?string $complementaryCode): self
    {
        $this->complementaryCode = $complementaryCode;

        return $this;
    }

    public function getComplementaryInfo(): ?string
    {
        return $this->complementaryInfo;
    }

    public function setComplementaryInfo(?string $complementaryInfo): self
    {
        $this->complementaryInfo = $complementaryInfo;

        return $this;
    }

    public function getCreditorId(): ?string
    {
        return $this->creditorId;
    }

    public function setCreditorId(?string $creditorId): self
    {
        $this->creditorId = $creditorId;

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

    public function getCustomerBusinessName(): ?string
    {
        return $this->customerBusinessName;
    }

    public function setCustomerBusinessName(?string $customerBusinessName): self
    {
        $this->customerBusinessName = $customerBusinessName;

        return $this;
    }

    public function getCustomerCompanyName(): ?string
    {
        return $this->customerCompanyName;
    }

    public function setCustomerCompanyName(?string $customerCompanyName): self
    {
        $this->customerCompanyName = $customerCompanyName;

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

    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    public function setCustomerIpAddress(?string $customerIpAddress): self
    {
        $this->customerIpAddress = $customerIpAddress;

        return $this;
    }

    public function getCustomerLegalId(): ?string
    {
        return $this->customerLegalId;
    }

    public function setCustomerLegalId(?string $customerLegalId): self
    {
        $this->customerLegalId = $customerLegalId;

        return $this;
    }

    public function getCustomerMobilePhone(): ?string
    {
        return $this->customerMobilePhone;
    }

    public function setCustomerMobilePhone(?string $customerMobilePhone): self
    {
        $this->customerMobilePhone = $customerMobilePhone;

        return $this;
    }

    public function getCustomerPositionOccupied(): ?string
    {
        return $this->customerPositionOccupied;
    }

    public function setCustomerPositionOccupied(?string $customerPositionOccupied): self
    {
        $this->customerPositionOccupied = $customerPositionOccupied;

        return $this;
    }

    public function getDccAmount(): ?string
    {
        return $this->dccAmount;
    }

    public function setDccAmount(?string $dccAmount): self
    {
        $this->dccAmount = $dccAmount;

        return $this;
    }

    public function getDccCurrencyCode(): ?string
    {
        return $this->dccCurrencyCode;
    }

    public function setDccCurrencyCode(?string $dccCurrencyCode): self
    {
        $this->dccCurrencyCode = $dccCurrencyCode;

        return $this;
    }

    public function getDccExchangeRate(): ?string
    {
        return $this->dccExchangeRate;
    }

    public function setDccExchangeRate(?string $dccExchangeRate): self
    {
        $this->dccExchangeRate = $dccExchangeRate;

        return $this;
    }

    public function getDccExchangeRateValidity(): ?string
    {
        return $this->dccExchangeRateValidity;
    }

    public function setDccExchangeRateValidity(?string $dccExchangeRateValidity): self
    {
        $this->dccExchangeRateValidity = $dccExchangeRateValidity;

        return $this;
    }

    public function getDccProvider(): ?string
    {
        return $this->dccProvider;
    }

    public function setDccProvider(?string $dccProvider): self
    {
        $this->dccProvider = $dccProvider;

        return $this;
    }

    public function getDccStatus(): ?string
    {
        return $this->dccStatus;
    }

    public function setDccStatus(?string $dccStatus): self
    {
        $this->dccStatus = $dccStatus;

        return $this;
    }

    public function getDccResponseCode(): ?string
    {
        return $this->dccResponseCode;
    }

    public function setDccResponseCode(?string $dccResponseCode): self
    {
        $this->dccResponseCode = $dccResponseCode;

        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getGuaranteeIndicator(): ?string
    {
        return $this->guaranteeIndicator;
    }

    public function setGuaranteeIndicator(?string $guaranteeIndicator): self
    {
        $this->guaranteeIndicator = $guaranteeIndicator;

        return $this;
    }

    public function getHashPan1(): ?string
    {
        return $this->hashPan1;
    }

    public function setHashPan1(?string $hashPan1): self
    {
        $this->hashPan1 = $hashPan1;

        return $this;
    }

    public function getHashPan2(): ?string
    {
        return $this->hashPan2;
    }

    public function setHashPan2(?string $hashPan2): self
    {
        $this->hashPan2 = $hashPan2;

        return $this;
    }

    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    public function setHolderAuthentMethod(?string $holderAuthentMethod): self
    {
        $this->holderAuthentMethod = $holderAuthentMethod;

        return $this;
    }

    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    public function setHolderAuthentProgram(?string $holderAuthentProgram): self
    {
        $this->holderAuthentProgram = $holderAuthentProgram;

        return $this;
    }

    public function getHolderAuthentRelegation(): ?string
    {
        return $this->holderAuthentRelegation;
    }

    public function setHolderAuthentRelegation(?string $holderAuthentRelegation): self
    {
        $this->holderAuthentRelegation = $holderAuthentRelegation;

        return $this;
    }

    public function getHolderContactEmail(): ?string
    {
        return $this->holderContactEmail;
    }

    public function setHolderContactEmail(?string $holderContactEmail): self
    {
        $this->holderContactEmail = $holderContactEmail;

        return $this;
    }

    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    public function setHolderAuthentStatus(?string $holderAuthentStatus): self
    {
        $this->holderAuthentStatus = $holderAuthentStatus;

        return $this;
    }

    public function getHolderAuthentType(): ?string
    {
        return $this->holderAuthentType;
    }

    public function setHolderAuthentType(?string $holderAuthentType): self
    {
        $this->holderAuthentType = $holderAuthentType;

        return $this;
    }

    public function getInstalmentAmountsList(): ?string
    {
        return $this->instalmentAmountsList;
    }

    public function setInstalmentAmountsList(?string $instalmentAmountsList): self
    {
        $this->instalmentAmountsList = $instalmentAmountsList;

        return $this;
    }

    public function getInstalmentDatesList(): ?string
    {
        return $this->instalmentDatesList;
    }

    public function setInstalmentDatesList(?string $instalmentDatesList): self
    {
        $this->instalmentDatesList = $instalmentDatesList;

        return $this;
    }

    public function getInstalmentNumber(): ?string
    {
        return $this->instalmentNumber;
    }

    public function setInstalmentNumber(?string $instalmentNumber): self
    {
        $this->instalmentNumber = $instalmentNumber;

        return $this;
    }

    public function getInstalmentTransactionReferencesList(): ?string
    {
        return $this->instalmentTransactionReferencesList;
    }

    public function setInstalmentTransactionReferencesList(?string $instalmentTransactionReferencesList): self
    {
        $this->instalmentTransactionReferencesList = $instalmentTransactionReferencesList;

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

    public function getIntermediateServiceProviderOperationId(): ?string
    {
        return $this->intermediateServiceProviderOperationId;
    }

    public function setIntermediateServiceProviderOperationId(?string $intermediateServiceProviderOperationId): self
    {
        $this->intermediateServiceProviderOperationId = $intermediateServiceProviderOperationId;

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

    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    public function setIssuerCode(?string $issuerCode): self
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }

    public function getIssuerCountryCode(): ?string
    {
        return $this->issuerCountryCode;
    }

    public function setIssuerCountryCode(?string $issuerCountryCode): self
    {
        $this->issuerCountryCode = $issuerCountryCode;

        return $this;
    }

    public function getIssuerEnrollementIndicator(): ?string
    {
        return $this->issuerEnrollementIndicator;
    }

    public function setIssuerEnrollementIndicator(?string $issuerEnrollementIndicator): self
    {
        $this->issuerEnrollementIndicator = $issuerEnrollementIndicator;

        return $this;
    }

    public function getIssuerWalletInformation(): ?string
    {
        return $this->issuerWalletInformation;
    }

    public function setIssuerWalletInformation(?string $issuerWalletInformation): self
    {
        $this->issuerWalletInformation = $issuerWalletInformation;

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

    public function getMandateAuthentMethod(): ?string
    {
        return $this->mandateAuthentMethod;
    }

    public function setMandateAuthentMethod(?string $mandateAuthentMethod): self
    {
        $this->mandateAuthentMethod = $mandateAuthentMethod;

        return $this;
    }

    public function getMandateCertificationType(): ?string
    {
        return $this->mandateCertificationType;
    }

    public function setMandateCertificationType(?string $mandateCertificationType): self
    {
        $this->mandateCertificationType = $mandateCertificationType;

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

    public function getMandateUsage(): ?string
    {
        return $this->mandateUsage;
    }

    public function setMandateUsage(?string $mandateUsage): self
    {
        $this->mandateUsage = $mandateUsage;

        return $this;
    }

    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    public function setMaskedPan(?string $maskedPan): self
    {
        $this->maskedPan = $maskedPan;

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

    public function setMerchantSessionId(?string $merchantSessionId): self
    {
        $this->merchantSessionId = $merchantSessionId;

        return $this;
    }

    public function getMerchantTransactionDateTime(): ?string
    {
        return $this->merchantTransactionDateTime;
    }

    public function setMerchantTransactionDateTime(?string $merchantTransactionDateTime): self
    {
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

    public function getPanEntryMode(): ?string
    {
        return $this->panEntryMode;
    }

    public function setPanEntryMode(?string $panEntryMode): self
    {
        $this->panEntryMode = $panEntryMode;

        return $this;
    }

    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    public function setPanExpiryDate(?string $panExpiryDate): self
    {
        $this->panExpiryDate = $panExpiryDate;

        return $this;
    }

    public function getPaymentAttemptNumber(): ?string
    {
        return $this->paymentAttemptNumber;
    }

    public function setPaymentAttemptNumber(?string $paymentAttemptNumber): self
    {
        $this->paymentAttemptNumber = $paymentAttemptNumber;

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

    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    public function setPaymentMeanBrandSelectionStatus(?string $paymentMeanBrandSelectionStatus): self
    {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;

        return $this;
    }

    public function getPaymentMeanData(): ?string
    {
        return $this->paymentMeanData;
    }

    public function setPaymentMeanData(?string $paymentMeanData): self
    {
        $this->paymentMeanData = $paymentMeanData;

        return $this;
    }

    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    public function setPaymentMeanId(?string $paymentMeanId): self
    {
        $this->paymentMeanId = $paymentMeanId;

        return $this;
    }

    public function getPaymentMeanTradingName(): ?string
    {
        return $this->paymentMeanTradingName;
    }

    public function setPaymentMeanTradingName(?string $paymentMeanTradingName): self
    {
        $this->paymentMeanTradingName = $paymentMeanTradingName;

        return $this;
    }

    public function getPaymentMeanType(): ?string
    {
        return $this->paymentMeanType;
    }

    public function setPaymentMeanType(?string $paymentMeanType): self
    {
        $this->paymentMeanType = $paymentMeanType;

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

    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    public function setPreAuthenticationColor(?string $preAuthenticationColor): self
    {
        $this->preAuthenticationColor = $preAuthenticationColor;

        return $this;
    }

    public function getPreAuthenticationInfo(): ?string
    {
        return $this->preAuthenticationInfo;
    }

    public function setPreAuthenticationInfo(?string $preAuthenticationInfo): self
    {
        $this->preAuthenticationInfo = $preAuthenticationInfo;

        return $this;
    }

    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    public function setPreAuthenticationProfile(?string $preAuthenticationProfile): self
    {
        $this->preAuthenticationProfile = $preAuthenticationProfile;

        return $this;
    }

    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    public function setPreAuthenticationProfileValue(?string $preAuthenticationProfileValue): self
    {
        $this->preAuthenticationProfileValue = $preAuthenticationProfileValue;

        return $this;
    }

    public function getPreAuthenticationRuleResultList(): ?string
    {
        return $this->preAuthenticationRuleResultList;
    }

    public function setPreAuthenticationRuleResultList(?string $preAuthenticationRuleResultList): self
    {
        $this->preAuthenticationRuleResultList = $preAuthenticationRuleResultList;

        return $this;
    }

    public function getPreAuthenticationThreshold(): ?string
    {
        return $this->preAuthenticationThreshold;
    }

    public function setPreAuthenticationThreshold(?string $preAuthenticationThreshold): self
    {
        $this->preAuthenticationThreshold = $preAuthenticationThreshold;

        return $this;
    }

    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    public function setPreAuthenticationValue(?string $preAuthenticationValue): self
    {
        $this->preAuthenticationValue = $preAuthenticationValue;

        return $this;
    }

    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    public function setPreAuthorisationProfile(?string $preAuthorisationProfile): self
    {
        $this->preAuthorisationProfile = $preAuthorisationProfile;

        return $this;
    }

    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    public function setPreAuthorisationProfileValue(?string $preAuthorisationProfileValue): self
    {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;

        return $this;
    }

    public function getPreAuthorisationRuleResultList(): ?string
    {
        return $this->preAuthorisationRuleResultList;
    }

    public function setPreAuthorisationRuleResultList(?string $preAuthorisationRuleResultList): self
    {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

        return $this;
    }

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(?string $responseCode): self
    {
        $this->responseCode = $responseCode;

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

    public function getS10TransactionId(): ?string
    {
        return $this->s10TransactionId;
    }

    public function setS10TransactionId(?string $s10TransactionId): self
    {
        $this->s10TransactionId = $s10TransactionId;

        return $this;
    }

    public function getS10TransactionIdDate(): ?string
    {
        return $this->s10TransactionIdDate;
    }

    public function setS10TransactionIdDate(?string $s10TransactionIdDate): self
    {
        $this->s10TransactionIdDate = $s10TransactionIdDate;

        return $this;
    }

    public function getS10transactionIdsList(): ?string
    {
        return $this->s10transactionIdsList;
    }

    public function setS10transactionIdsList(?string $s10transactionIdsList): self
    {
        $this->s10transactionIdsList = $s10transactionIdsList;

        return $this;
    }

    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    public function setScoreColor(?string $scoreColor): self
    {
        $this->scoreColor = $scoreColor;

        return $this;
    }

    public function getScoreInfo(): ?string
    {
        return $this->scoreInfo;
    }

    public function setScoreInfo(?string $scoreInfo): self
    {
        $this->scoreInfo = $scoreInfo;

        return $this;
    }

    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    public function setScoreProfile(?string $scoreProfile): self
    {
        $this->scoreProfile = $scoreProfile;

        return $this;
    }

    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    public function setScoreThreshold(?string $scoreThreshold): self
    {
        $this->scoreThreshold = $scoreThreshold;

        return $this;
    }

    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    public function setScoreValue(?string $scoreValue): self
    {
        $this->scoreValue = $scoreValue;

        return $this;
    }

    public function getSecureReference(): ?string
    {
        return $this->secureReference;
    }

    public function setSecureReference(?string $secureReference): self
    {
        $this->secureReference = $secureReference;

        return $this;
    }

    public function getSettlementMode(): ?string
    {
        return $this->settlementMode;
    }

    public function setSettlementMode(?string $settlementMode): self
    {
        $this->settlementMode = $settlementMode;

        return $this;
    }

    public function getSettlementModeComplement(): ?string
    {
        return $this->settlementModeComplement;
    }

    public function setSettlementModeComplement(?string $settlementModeComplement): self
    {
        $this->settlementModeComplement = $settlementModeComplement;

        return $this;
    }

    public function getStatementReference(): ?string
    {
        return $this->statementReference;
    }

    public function setStatementReference(?string $statementReference): self
    {
        $this->statementReference = $statementReference;

        return $this;
    }

    public function getTokenPan(): ?string
    {
        return $this->tokenPan;
    }

    public function setTokenPan(?string $tokenPan): self
    {
        $this->tokenPan = $tokenPan;

        return $this;
    }

    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    public function setTransactionActors(?string $transactionActors): self
    {
        $this->transactionActors = $transactionActors;

        return $this;
    }

    public function getTransactionDateTime(): ?string
    {
        return $this->transactionDateTime;
    }

    public function setTransactionDateTime(?string $transactionDateTime): self
    {
        $this->transactionDateTime = $transactionDateTime;

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

    public function getTransactionPlatform(): ?string
    {
        return $this->transactionPlatform;
    }

    public function setTransactionPlatform(?string $transactionPlatform): self
    {
        $this->transactionPlatform = $transactionPlatform;

        return $this;
    }

    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(?string $transactionReference): self
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    public function setWalletType(?string $walletType): self
    {
        $this->walletType = $walletType;

        return $this;
    }
}
