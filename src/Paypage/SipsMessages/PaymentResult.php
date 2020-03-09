<?php


namespace Worldline\Sips\Paypage\SipsMessages;


use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentResult
 * @package Worldline\Sips\Paypage\SipsMessages
 */
class PaymentResult extends SipsMessage
{
    /**
     * @var null|string
     */
    private $acceptanceSystemApplicationId;
    /**
     * @var null|string
     */
    private $acquirerContractNumber;
    /**
     * @var null|string
     */
    private $acquirerNativeResponseCode;
    /**
     * @var null|string
     */
    private $acquirerResponseCode;
    /**
     * @var null|string
     */
    private $acquirerResponseIdentifier;
    /**
     * @var null|string
     */
    private $acquirerResponseMessage;
    /**
     * @var null|string
     */
    private $additionalAuthorisationNumber;
    /**
     * @var null|string
     */
    private $amount;
    /**
     * @var null|string
     */
    private $authorisationId;
    /**
     * @var null|string
     */
    private $authorisationTypeLabel;
    /**
     * @var null|string
     */
    private $authorMessageReference;
    /**
     * @var null|string
     */
    private $avsAddressResponseCode;
    /**
     * @var null|string
     */
    private $avsPostcodeResponseCode;
    /**
     * @var null|string
     */
    private $captureDay;
    /**
     * @var null|string
     */
    private $captureLimitDate;
    /**
     * @var null|string
     */
    private $captureMode;
    /**
     * @var null|string
     */
    private $cardCSCResultCode;
    /**
     * @var null|string
     */
    private $cardProductCode;
    /**
     * @var null|string
     */
    private $cardProductName;
    /**
     * @var null|string
     */
    private $cardProductProfile;
    /**
     * @var null|string
     */
    private $cardProductUsageLabel;
    /**
     * @var null|string
     */
    private $complementaryCode;
    /**
     * @var null|string
     */
    private $complementaryInfo;
    /**
     * @var null|string
     */
    private $creditorId;
    /**
     * @var null|string
     */
    private $currencyCode;
    /**
     * @var null|string
     */
    private $customerBusinessName;
    /**
     * @var null|string
     */
    private $customerCompanyName;
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
     * @var null|string
     */
    private $customerLegalId;
    /**
     * @var null|string
     */
    private $customerMobilePhone;
    /**
     * @var null|string
     */
    private $customerPositionOccupied;
    /**
     * @var null|string
     */
    private $dccAmount;
    /**
     * @var null|string
     */
    private $dccCurrencyCode;
    /**
     * @var null|string
     */
    private $dccExchangeRate;
    /**
     * @var null|string
     */
    private $dccExchangeRateValidity;
    /**
     * @var null|string
     */
    private $dccProvider;
    /**
     * @var null|string
     */
    private $dccStatus;
    /**
     * @var null|string
     */
    private $dccResponseCode;
    /**
     * @var null|string
     */
    private $dueDate;
    /**
     * @var null|string
     */
    private $guaranteeIndicator;
    /**
     * @var null|string
     */
    private $hashPan1;
    /**
     * @var null|string
     */
    private $hashPan2;
    /**
     * @var null|string
     */
    private $holderAuthentMethod;
    /**
     * @var null|string
     */
    private $holderAuthentProgram;
    /**
     * @var null|string
     */
    private $holderAuthentRelegation;
    /**
     * @var null|string
     */
    private $holderContactEmail;
    /**
     * @var null|string
     */
    private $holderAuthentStatus;
    /**
     * @var null|string
     */
    private $holderAuthentType;
    /**
     * @var null|string
     */
    private $instalmentAmountsList;
    /**
     * @var null|string
     */
    private $instalmentDatesList;
    /**
     * @var null|string
     */
    private $instalmentNumber;
    /**
     * @var null|string
     */
    private $instalmentTransactionReferencesList;
    /**
     * @var null|string
     */
    private $interfaceVersion;
    /**
     * @var null|string
     */
    private $intermediateServiceProviderOperationId;
    /**
     * @var null|string
     */
    private $invoiceReference;
    /**
     * @var null|string
     */
    private $issuerCode;
    /**
     * @var null|string
     */
    private $issuerCountryCode;
    /**
     * @var null|string
     */
    private $issuerEnrollementIndicator;
    /**
     * @var null|string
     */
    private $issuerWalletInformation;
    /**
     * @var null|string
     */
    private $keyVersion;
    /**
     * @var null|string
     */
    private $mandateAuthentMethod;
    /**
     * @var null|string
     */
    private $mandateCertificationType;
    /**
     * @var null|string
     */
    private $mandateId;
    /**
     * @var null|string
     */
    private $mandateUsage;
    /**
     * @var null|string
     */
    private $maskedPan;
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
    private $orderChannel;
    /**
     * @var null|string
     */
    private $orderId;
    /**
     * @var null|string
     */
    private $panEntryMode;
    /**
     * @var null|string
     */
    private $panExpiryDate;
    /**
     * @var null|string
     */
    private $paymentAttemptNumber;
    /**
     * @var null|string
     */
    private $paymentMeanBrand;
    /**
     * @var null|string
     */
    private $paymentMeanBrandSelectionStatus;
    /**
     * @var null|string
     */
    private $paymentMeanData;
    /**
     * @var null|string
     */
    private $paymentMeanId;
    /**
     * @var null|string
     */
    private $paymentMeanTradingName;
    /**
     * @var null|string
     */
    private $paymentMeanType;
    /**
     * @var null|string
     */
    private $paymentPattern;
    /**
     * @var null|string
     */
    private $preAuthenticationColor;
    /**
     * @var null|string
     */
    private $preAuthenticationInfo;
    /**
     * @var null|string
     */
    private $preAuthenticationProfile;
    /**
     * @var null|string
     */
    private $preAuthenticationProfileValue;
    /**
     * @var null|string
     */
    private $preAuthenticationRuleResultList;
    /**
     * @var null|string
     */
    private $preAuthenticationThreshold;
    /**
     * @var null|string
     */
    private $preAuthenticationValue;
    /**
     * @var null|string
     */
    private $preAuthorisationProfile;
    /**
     * @var null|string
     */
    private $preAuthorisationProfileValue;
    /**
     * @var null|string
     */
    private $preAuthorisationRuleResultList;
    /**
     * @var null|string
     */
    private $responseCode;
    /**
     * @var null|string
     */
    private $returnContext;
    /**
     * @var null|string
     */
    private $s10TransactionId;
    /**
     * @var null|string
     */
    private $s10TransactionIdDate;
    /**
     * @var null|string
     */
    private $s10transactionIdsList;
    /**
     * @var null|string
     */
    private $scoreColor;
    /**
     * @var null|string
     */
    private $scoreInfo;
    /**
     * @var null|string
     */
    private $scoreProfile;
    /**
     * @var null|string
     */
    private $scoreThreshold;
    /**
     * @var null|string
     */
    private $scoreValue;
    /**
     * @var null|string
     */
    private $secureReference;
    /**
     * @var null|string
     */
    private $settlementMode;
    /**
     * @var null|string
     */
    private $settlementModeComplement;
    /**
     * @var null|string
     */
    private $statementReference;
    /**
     * @var null|string
     */
    private $tokenPan;
    /**
     * @var null|string
     */
    private $transactionActors;
    /**
     * @var null|string
     */
    private $transactionDateTime;
    /**
     * @var null|string
     */
    private $transactionOrigin;
    /**
     * @var null|string
     */
    private $transactionPlatform;
    /**
     * @var null|string
     */
    private $transactionReference;
    /**
     * @var null|string
     */
    private $walletType;

    /**
     * PaymentResult constructor.
     *
     * @param string $data
     */
    public function __construct(string $data)
    {
        $data = explode('|', $data);
        $dataArray = [];
        foreach ($data as $value) {
            $value = explode('=', $value, 2);
            $dataArray[$value[0]] = $value[1];
        }
        foreach ($dataArray as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * @return string|null
     */
    public function getAcceptanceSystemApplicationId(): ?string
    {
        return $this->acceptanceSystemApplicationId;
    }

    /**
     * @return string|null
     */
    public function getAcquirerContractNumber(): ?string
    {
        return $this->acquirerContractNumber;
    }

    /**
     * @return string|null
     */
    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    /**
     * @return string|null
     */
    public function getAdditionalAuthorisationNumber(): ?string
    {
        return $this->additionalAuthorisationNumber;
    }

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationTypeLabel(): ?string
    {
        return $this->authorisationTypeLabel;
    }

    /**
     * @return string|null
     */
    public function getAuthorMessageReference(): ?string
    {
        return $this->authorMessageReference;
    }

    /**
     * @return string|null
     */
    public function getAvsAddressResponseCode(): ?string
    {
        return $this->avsAddressResponseCode;
    }

    /**
     * @return string|null
     */
    public function getAvsPostcodeResponseCode(): ?string
    {
        return $this->avsPostcodeResponseCode;
    }

    /**
     * @return string|null
     */
    public function getCaptureDay(): ?string
    {
        return $this->captureDay;
    }

    /**
     * @return string|null
     */
    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    /**
     * @return string|null
     */
    public function getCaptureMode(): ?string
    {
        return $this->captureMode;
    }

    /**
     * @return string|null
     */
    public function getCardCSCResultCode(): ?string
    {
        return $this->cardCSCResultCode;
    }

    /**
     * @return string|null
     */
    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    /**
     * @return string|null
     */
    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    /**
     * @return string|null
     */
    public function getCardProductProfile(): ?string
    {
        return $this->cardProductProfile;
    }

    /**
     * @return string|null
     */
    public function getCardProductUsageLabel(): ?string
    {
        return $this->cardProductUsageLabel;
    }

    /**
     * @return string|null
     */
    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    /**
     * @return string|null
     */
    public function getComplementaryInfo(): ?string
    {
        return $this->complementaryInfo;
    }

    /**
     * @return string|null
     */
    public function getCreditorId(): ?string
    {
        return $this->creditorId;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @return string|null
     */
    public function getCustomerBusinessName(): ?string
    {
        return $this->customerBusinessName;
    }

    /**
     * @return string|null
     */
    public function getCustomerCompanyName(): ?string
    {
        return $this->customerCompanyName;
    }

    /**
     * @return string|null
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @return string|null
     */
    public function getCustomerIpAddress(): ?string
    {
        return $this->customerIpAddress;
    }

    /**
     * @return string|null
     */
    public function getCustomerLegalId(): ?string
    {
        return $this->customerLegalId;
    }

    /**
     * @return string|null
     */
    public function getCustomerMobilePhone(): ?string
    {
        return $this->customerMobilePhone;
    }

    /**
     * @return string|null
     */
    public function getCustomerPositionOccupied(): ?string
    {
        return $this->customerPositionOccupied;
    }

    /**
     * @return string|null
     */
    public function getDccAmount(): ?string
    {
        return $this->dccAmount;
    }

    /**
     * @return string|null
     */
    public function getDccCurrencyCode(): ?string
    {
        return $this->dccCurrencyCode;
    }

    /**
     * @return string|null
     */
    public function getDccExchangeRate(): ?string
    {
        return $this->dccExchangeRate;
    }

    /**
     * @return string|null
     */
    public function getDccExchangeRateValidity(): ?string
    {
        return $this->dccExchangeRateValidity;
    }

    /**
     * @return string|null
     */
    public function getDccProvider(): ?string
    {
        return $this->dccProvider;
    }

    /**
     * @return string|null
     */
    public function getDccStatus(): ?string
    {
        return $this->dccStatus;
    }

    /**
     * @return string|null
     */
    public function getDccResponseCode(): ?string
    {
        return $this->dccResponseCode;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @return string|null
     */
    public function getGuaranteeIndicator(): ?string
    {
        return $this->guaranteeIndicator;
    }

    /**
     * @return string|null
     */
    public function getHashPan1(): ?string
    {
        return $this->hashPan1;
    }

    /**
     * @return string|null
     */
    public function getHashPan2(): ?string
    {
        return $this->hashPan2;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentRelegation(): ?string
    {
        return $this->holderAuthentRelegation;
    }

    /**
     * @return string|null
     */
    public function getHolderContactEmail(): ?string
    {
        return $this->holderContactEmail;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentType(): ?string
    {
        return $this->holderAuthentType;
    }

    /**
     * @return string|null
     */
    public function getInstalmentAmountsList(): ?string
    {
        return $this->instalmentAmountsList;
    }

    /**
     * @return string|null
     */
    public function getInstalmentDatesList(): ?string
    {
        return $this->instalmentDatesList;
    }

    /**
     * @return string|null
     */
    public function getInstalmentNumber(): ?string
    {
        return $this->instalmentNumber;
    }

    /**
     * @return string|null
     */
    public function getInstalmentTransactionReferencesList(): ?string
    {
        return $this->instalmentTransactionReferencesList;
    }

    /**
     * @return string|null
     */
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     * @return string|null
     */
    public function getIntermediateServiceProviderOperationId(): ?string
    {
        return $this->intermediateServiceProviderOperationId;
    }

    /**
     * @return string|null
     */
    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    /**
     * @return string|null
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @return string|null
     */
    public function getIssuerCountryCode(): ?string
    {
        return $this->issuerCountryCode;
    }

    /**
     * @return string|null
     */
    public function getIssuerEnrollementIndicator(): ?string
    {
        return $this->issuerEnrollementIndicator;
    }

    /**
     * @return string|null
     */
    public function getIssuerWalletInformation(): ?string
    {
        return $this->issuerWalletInformation;
    }

    /**
     * @return string|null
     */
    public function getKeyVersion(): ?string
    {
        return $this->keyVersion;
    }

    /**
     * @return string|null
     */
    public function getMandateAuthentMethod(): ?string
    {
        return $this->mandateAuthentMethod;
    }

    /**
     * @return string|null
     */
    public function getMandateCertificationType(): ?string
    {
        return $this->mandateCertificationType;
    }

    /**
     * @return string|null
     */
    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    /**
     * @return string|null
     */
    public function getMandateUsage(): ?string
    {
        return $this->mandateUsage;
    }

    /**
     * @return string|null
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * @return string|null
     */
    public function getMerchantSessionId(): ?string
    {
        return $this->merchantSessionId;
    }

    /**
     * @return string|null
     */
    public function getMerchantTransactionDateTime(): ?string
    {
        return $this->merchantTransactionDateTime;
    }

    /**
     * @return string|null
     */
    public function getMerchantWalletId(): ?string
    {
        return $this->merchantWalletId;
    }

    /**
     * @return string|null
     */
    public function getOrderChannel(): ?string
    {
        return $this->orderChannel;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @return string|null
     */
    public function getPanEntryMode(): ?string
    {
        return $this->panEntryMode;
    }

    /**
     * @return string|null
     */
    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    /**
     * @return string|null
     */
    public function getPaymentAttemptNumber(): ?string
    {
        return $this->paymentAttemptNumber;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanData(): ?string
    {
        return $this->paymentMeanData;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanTradingName(): ?string
    {
        return $this->paymentMeanTradingName;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanType(): ?string
    {
        return $this->paymentMeanType;
    }

    /**
     * @return string|null
     */
    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationInfo(): ?string
    {
        return $this->preAuthenticationInfo;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationRuleResultList(): ?string
    {
        return $this->preAuthenticationRuleResultList;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationThreshold(): ?string
    {
        return $this->preAuthenticationThreshold;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationRuleResultList(): ?string
    {
        return $this->preAuthorisationRuleResultList;
    }

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @return string|null
     */
    public function getReturnContext(): ?string
    {
        return $this->returnContext;
    }

    /**
     * @return string|null
     */
    public function getS10TransactionId(): ?string
    {
        return $this->s10TransactionId;
    }

    /**
     * @return string|null
     */
    public function getS10TransactionIdDate(): ?string
    {
        return $this->s10TransactionIdDate;
    }

    /**
     * @return string|null
     */
    public function getS10transactionIdsList(): ?string
    {
        return $this->s10transactionIdsList;
    }

    /**
     * @return string|null
     */
    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    /**
     * @return string|null
     */
    public function getScoreInfo(): ?string
    {
        return $this->scoreInfo;
    }

    /**
     * @return string|null
     */
    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    /**
     * @return string|null
     */
    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    /**
     * @return string|null
     */
    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    /**
     * @return string|null
     */
    public function getSecureReference(): ?string
    {
        return $this->secureReference;
    }

    /**
     * @return string|null
     */
    public function getSettlementMode(): ?string
    {
        return $this->settlementMode;
    }

    /**
     * @return string|null
     */
    public function getSettlementModeComplement(): ?string
    {
        return $this->settlementModeComplement;
    }

    /**
     * @return string|null
     */
    public function getStatementReference(): ?string
    {
        return $this->statementReference;
    }

    /**
     * @return string|null
     */
    public function getTokenPan(): ?string
    {
        return $this->tokenPan;
    }

    /**
     * @return string|null
     */
    public function getTransactionActors(): ?string
    {
        return $this->transactionActors;
    }

    /**
     * @return string|null
     */
    public function getTransactionDateTime(): ?string
    {
        return $this->transactionDateTime;
    }

    /**
     * @return string|null
     */
    public function getTransactionOrigin(): ?string
    {
        return $this->transactionOrigin;
    }

    /**
     * @return string|null
     */
    public function getTransactionPlatform(): ?string
    {
        return $this->transactionPlatform;
    }

    /**
     * @return string|null
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * @return string|null
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }


}
