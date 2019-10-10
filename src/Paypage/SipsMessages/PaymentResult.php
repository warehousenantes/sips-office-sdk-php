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
    protected $acceptanceSystemApplicationId;
    /**
     * @var null|string
     */
    protected $acquirerContractNumber;
    /**
     * @var null|string
     */
    protected $acquirerNativeResponseCode;
    /**
     * @var null|string
     */
    protected $acquirerResponseCode;
    /**
     * @var null|string
     */
    protected $acquirerResponseIdentifier;
    /**
     * @var null|string
     */
    protected $acquirerResponseMessage;
    /**
     * @var null|string
     */
    protected $additionalAuthorisationNumber;
    /**
     * @var null|string
     */
    protected $amount;
    /**
     * @var null|string
     */
    protected $authorisationId;
    /**
     * @var null|string
     */
    protected $authorisationTypeLabel;
    /**
     * @var null|string
     */
    protected $autherMessageReference;
    /**
     * @var null|string
     */
    protected $avsAdressResponseCode;
    /**
     * @var null|string
     */
    protected $avsPostcodeResponseCode;
    /**
     * @var null|string
     */
    protected $captureDay;
    /**
     * @var null|string
     */
    protected $captureLimitData;
    /**
     * @var null|string
     */
    protected $captureMode;
    /**
     * @var null|string
     */
    protected $cardCSCResultCode;
    /**
     * @var null|string
     */
    protected $cardProductCode;
    /**
     * @var null|string
     */
    protected $cardProductName;
    /**
     * @var null|string
     */
    protected $cardProductProfile;
    /**
     * @var null|string
     */
    protected $cardProductUsageLAbel;
    /**
     * @var null|string
     */
    protected $complementaryCode;
    /**
     * @var null|string
     */
    protected $creditorId;
    /**
     * @var null|string
     */
    protected $currencyCode;
    /**
     * @var null|string
     */
    protected $customerBusinessName;
    /**
     * @var null|string
     */
    protected $customerCompanyName;
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
    protected $customerIpAddress;
    /**
     * @var null|string
     */
    protected $customerLegalId;
    /**
     * @var null|string
     */
    protected $customerMobilePhone;
    /**
     * @var null|string
     */
    protected $customerPositionOccupied;
    /**
     * @var null|string
     */
    protected $dccAmount;
    /**
     * @var null|string
     */
    protected $dccCurrencyCode;
    /**
     * @var null|string
     */
    protected $dccExchangeRate;
    /**
     * @var null|string
     */
    protected $dccEchangeRateValidity;
    /**
     * @var null|string
     */
    protected $dccProvider;
    /**
     * @var null|string
     */
    protected $dccStatus;
    /**
     * @var null|string
     */
    protected $dccResponseCode;
    /**
     * @var null|string
     */
    protected $dueDate;
    /**
     * @var null|string
     */
    protected $guaranteeIndicator;
    /**
     * @var null|string
     */
    protected $hashPan1;
    /**
     * @var null|string
     */
    protected $hashPan2;
    /**
     * @var null|string
     */
    protected $holderAuthentMethod;
    /**
     * @var null|string
     */
    protected $holderAuthentProgram;
    /**
     * @var null|string
     */
    protected $holderAuthentRelegation;
    /**
     * @var null|string
     */
    protected $holderAuthentStatus;
    /**
     * @var null|string
     */
    protected $holderAuthentType;
    /**
     * @var null|string
     */
    protected $holderContactEmail;
    /**
     * @var null|string
     */
    protected $instalmentAmountsList;
    /**
     * @var null|string
     */
    protected $instalmentDatesList;
    /**
     * @var null|string
     */
    protected $instalmentNumber;
    /**
     * @var null|string
     */
    protected $instalmentTransactionReferencesList;
    /**
     * @var null|string
     */
    protected $interfaceVersion;
    /**
     * @var null|string
     */
    protected $intermediateServiceProviderOperationId;
    /**
     * @var null|string
     */
    protected $invoiceReference;
    /**
     * @var null|string
     */
    protected $issuerCode;
    /**
     * @var null|string
     */
    protected $issuerCountryCode;
    /**
     * @var null|string
     */
    protected $issuerEnrollementIndicator;
    /**
     * @var null|string
     */
    protected $issuerWalletInformation;
    /**
     * @var null|string
     */
    protected $keyVersion;
    /**
     * @var null|string
     */
    protected $mandateAuthentMethod;
    /**
     * @var null|string
     */
    protected $mandateCertificationType;
    /**
     * @var null|string
     */
    protected $mandateId;
    /**
     * @var null|string
     */
    protected $mandateUsage;
    /**
     * @var null|string
     */
    protected $maskedPan;
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
    protected $merchantTransactionDataTime;
    /**
     * @var null|string
     */
    protected $merchantWalletId;
    /**
     * @var null|string
     */
    protected $orderChannel;
    /**
     * @var null|string
     */
    protected $orderId;
    /**
     * @var null|string
     */
    protected $panEntryMode;
    /**
     * @var null|string
     */
    protected $panExpireDate;
    /**
     * @var null|string
     */
    protected $paymentAttemptNumber;
    /**
     * @var null|string
     */
    protected $paymentMeanBrand;
    /**
     * @var null|string
     */
    protected $paymentMeanBrandSelectionStatus;
    /**
     * @var null|string
     */
    protected $paymentMeanData;
    /**
     * @var null|string
     */
    protected $paymentMeanId;
    /**
     * @var null|string
     */
    protected $paymentMeanTradingName;
    /**
     * @var null|string
     */
    protected $paymentMeanType;
    /**
     * @var null|string
     */
    protected $paymentPattern;
    /**
     * @var null|string
     */
    protected $preAuthenticationColor;
    /**
     * @var null|string
     */
    protected $preAuthenticationInfo;
    /**
     * @var null|string
     */
    protected $preAuthenticationProfile;
    /**
     * @var null|string
     */
    protected $preAuthenticationProfileValue;
    /**
     * @var null|string
     */
    protected $preAuthenticationRuleResultList;
    /**
     * @var null|string
     */
    protected $preAuthorisationThreshold;
    /**
     * @var null|string
     */
    protected $preAuthenticationValue;
    /**
     * @var null|string
     */
    protected $preAuthorisationProfile;
    /**
     * @var null|string
     */
    protected $preAuthorisationProfileValue;
    /**
     * @var null|string
     */
    protected $preAuthorisationRuleResultList;
    /**
     * @var null|string
     */
    protected $responseCode;
    /**
     * @var null|string
     */
    protected $returnContext;
    /**
     * @var null|string
     */
    protected $s10TransactionId;
    /**
     * @var null|string
     */
    protected $s10TransactionIdDate;
    /**
     * @var null|string
     */
    protected $s10TransactionIdsList;
    /**
     * @var null|string
     */
    protected $scoreColor;
    /**
     * @var null|string
     */
    protected $scoreInfo;
    /**
     * @var null|string
     */
    protected $scoreProfile;
    /**
     * @var null|string
     */
    protected $scoreThreshold;
    /**
     * @var null|string
     */
    protected $scoreValue;
    /**
     * @var null|string
     */
    protected $settlementMode;
    /**
     * @var null|string
     */
    protected $settlementModeComplement;
    /**
     * @var null|string
     */
    protected $statementReference;
    /**
     * @var null|string
     */
    protected $tokenPan;
    /**
     * @var null|string
     */
    protected $transactionActors;
    /**
     * @var null|string
     */
    protected $transactionDateTime;
    /**
     * @var null|string
     */
    protected $transactionOrigin;
    /**
     * @var null|string
     */
    protected $transactionPlatform;
    /**
     * @var null|string
     */
    protected $transactionReference;
    /**
     * @var null|string
     */
    protected $walletType;

    /**
     * PaypageResult constructor.
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
    public function getAvsAdressResponseCode(): ?string
    {
        return $this->avsAdressResponseCode;
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
    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
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
    public function getCaptureLimitData(): ?string
    {
        return $this->captureLimitData;
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
    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
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
    public function getDccExchangeRate(): ?string
    {
        return $this->dccExchangeRate;
    }

    /**
     * @return string|null
     */
    public function getDccEchangeRateValidity(): ?string
    {
        return $this->dccEchangeRateValidity;
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
    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
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
    public function getMerchantTransactionDataTime(): ?string
    {
        return $this->merchantTransactionDataTime;
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
    public function getPanExpireDate(): ?string
    {
        return $this->panExpireDate;
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
    public function getPreAuthorisationThreshold(): ?string
    {
        return $this->preAuthorisationThreshold;
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
    public function getS10TransactionIdsList(): ?string
    {
        return $this->s10TransactionIdsList;
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
    public function getAuthorisationTypeLabel(): ?string
    {
        return $this->authorisationTypeLabel;
    }

    /**
     * @return string|null
     */
    public function getAutherMessageReference(): ?string
    {
        return $this->autherMessageReference;
    }

    /**
     * @return string|null
     */
    public function getCardProductUsageLAbel(): ?string
    {
        return $this->cardProductUsageLAbel;
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
    public function getDueDate(): ?string
    {
        return $this->dueDate;
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
    public function getHolderContactEmail(): ?string
    {
        return $this->holderContactEmail;
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
    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    /**
     * @return string|null
     */
    public function getTransactionPlatform(): ?string
    {
        return $this->transactionPlatform;
    }
    
}
