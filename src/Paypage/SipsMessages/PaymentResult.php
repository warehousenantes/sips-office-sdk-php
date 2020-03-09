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
     * @return string|null
     */
    public function getAcceptanceSystemApplicationId(): ?string
    {
        return $this->acceptanceSystemApplicationId;
    }

    /**
     * @param string|null $acceptanceSystemApplicationId
     * @return PaymentResult
     */
    public function setAcceptanceSystemApplicationId(?string $acceptanceSystemApplicationId): PaymentResult
    {
        $this->acceptanceSystemApplicationId = $acceptanceSystemApplicationId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerContractNumber(): ?string
    {
        return $this->acquirerContractNumber;
    }

    /**
     * @param string|null $acquirerContractNumber
     * @return PaymentResult
     */
    public function setAcquirerContractNumber(?string $acquirerContractNumber): PaymentResult
    {
        $this->acquirerContractNumber = $acquirerContractNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    /**
     * @param string|null $acquirerNativeResponseCode
     * @return PaymentResult
     */
    public function setAcquirerNativeResponseCode(?string $acquirerNativeResponseCode): PaymentResult
    {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    /**
     * @param string|null $acquirerResponseCode
     * @return PaymentResult
     */
    public function setAcquirerResponseCode(?string $acquirerResponseCode): PaymentResult
    {
        $this->acquirerResponseCode = $acquirerResponseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    /**
     * @param string|null $acquirerResponseIdentifier
     * @return PaymentResult
     */
    public function setAcquirerResponseIdentifier(?string $acquirerResponseIdentifier): PaymentResult
    {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    /**
     * @param string|null $acquirerResponseMessage
     * @return PaymentResult
     */
    public function setAcquirerResponseMessage(?string $acquirerResponseMessage): PaymentResult
    {
        $this->acquirerResponseMessage = $acquirerResponseMessage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdditionalAuthorisationNumber(): ?string
    {
        return $this->additionalAuthorisationNumber;
    }

    /**
     * @param string|null $additionalAuthorisationNumber
     * @return PaymentResult
     */
    public function setAdditionalAuthorisationNumber(?string $additionalAuthorisationNumber): PaymentResult
    {
        $this->additionalAuthorisationNumber = $additionalAuthorisationNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string|null $amount
     * @return PaymentResult
     */
    public function setAmount(?string $amount): PaymentResult
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    /**
     * @param string|null $authorisationId
     * @return PaymentResult
     */
    public function setAuthorisationId(?string $authorisationId): PaymentResult
    {
        $this->authorisationId = $authorisationId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorisationTypeLabel(): ?string
    {
        return $this->authorisationTypeLabel;
    }

    /**
     * @param string|null $authorisationTypeLabel
     * @return PaymentResult
     */
    public function setAuthorisationTypeLabel(?string $authorisationTypeLabel): PaymentResult
    {
        $this->authorisationTypeLabel = $authorisationTypeLabel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorMessageReference(): ?string
    {
        return $this->authorMessageReference;
    }

    /**
     * @param string|null $authorMessageReference
     * @return PaymentResult
     */
    public function setAuthorMessageReference(?string $authorMessageReference): PaymentResult
    {
        $this->authorMessageReference = $authorMessageReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvsAddressResponseCode(): ?string
    {
        return $this->avsAddressResponseCode;
    }

    /**
     * @param string|null $avsAddressResponseCode
     * @return PaymentResult
     */
    public function setAvsAddressResponseCode(?string $avsAddressResponseCode): PaymentResult
    {
        $this->avsAddressResponseCode = $avsAddressResponseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvsPostcodeResponseCode(): ?string
    {
        return $this->avsPostcodeResponseCode;
    }

    /**
     * @param string|null $avsPostcodeResponseCode
     * @return PaymentResult
     */
    public function setAvsPostcodeResponseCode(?string $avsPostcodeResponseCode): PaymentResult
    {
        $this->avsPostcodeResponseCode = $avsPostcodeResponseCode;
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
     * @return PaymentResult
     */
    public function setCaptureDay(?string $captureDay): PaymentResult
    {
        $this->captureDay = $captureDay;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    /**
     * @param string|null $captureLimitDate
     * @return PaymentResult
     */
    public function setCaptureLimitDate(?string $captureLimitDate): PaymentResult
    {
        $this->captureLimitDate = $captureLimitDate;
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
     * @return PaymentResult
     */
    public function setCaptureMode(?string $captureMode): PaymentResult
    {
        $this->captureMode = $captureMode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardCSCResultCode(): ?string
    {
        return $this->cardCSCResultCode;
    }

    /**
     * @param string|null $cardCSCResultCode
     * @return PaymentResult
     */
    public function setCardCSCResultCode(?string $cardCSCResultCode): PaymentResult
    {
        $this->cardCSCResultCode = $cardCSCResultCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductCode(): ?string
    {
        return $this->cardProductCode;
    }

    /**
     * @param string|null $cardProductCode
     * @return PaymentResult
     */
    public function setCardProductCode(?string $cardProductCode): PaymentResult
    {
        $this->cardProductCode = $cardProductCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductName(): ?string
    {
        return $this->cardProductName;
    }

    /**
     * @param string|null $cardProductName
     * @return PaymentResult
     */
    public function setCardProductName(?string $cardProductName): PaymentResult
    {
        $this->cardProductName = $cardProductName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductProfile(): ?string
    {
        return $this->cardProductProfile;
    }

    /**
     * @param string|null $cardProductProfile
     * @return PaymentResult
     */
    public function setCardProductProfile(?string $cardProductProfile): PaymentResult
    {
        $this->cardProductProfile = $cardProductProfile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardProductUsageLabel(): ?string
    {
        return $this->cardProductUsageLabel;
    }

    /**
     * @param string|null $cardProductUsageLabel
     * @return PaymentResult
     */
    public function setCardProductUsageLabel(?string $cardProductUsageLabel): PaymentResult
    {
        $this->cardProductUsageLabel = $cardProductUsageLabel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    /**
     * @param string|null $complementaryCode
     * @return PaymentResult
     */
    public function setComplementaryCode(?string $complementaryCode): PaymentResult
    {
        $this->complementaryCode = $complementaryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplementaryInfo(): ?string
    {
        return $this->complementaryInfo;
    }

    /**
     * @param string|null $complementaryInfo
     * @return PaymentResult
     */
    public function setComplementaryInfo(?string $complementaryInfo): PaymentResult
    {
        $this->complementaryInfo = $complementaryInfo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreditorId(): ?string
    {
        return $this->creditorId;
    }

    /**
     * @param string|null $creditorId
     * @return PaymentResult
     */
    public function setCreditorId(?string $creditorId): PaymentResult
    {
        $this->creditorId = $creditorId;
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
     * @return PaymentResult
     */
    public function setCurrencyCode(?string $currencyCode): PaymentResult
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerBusinessName(): ?string
    {
        return $this->customerBusinessName;
    }

    /**
     * @param string|null $customerBusinessName
     * @return PaymentResult
     */
    public function setCustomerBusinessName(?string $customerBusinessName): PaymentResult
    {
        $this->customerBusinessName = $customerBusinessName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerCompanyName(): ?string
    {
        return $this->customerCompanyName;
    }

    /**
     * @param string|null $customerCompanyName
     * @return PaymentResult
     */
    public function setCustomerCompanyName(?string $customerCompanyName): PaymentResult
    {
        $this->customerCompanyName = $customerCompanyName;
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
     * @return PaymentResult
     */
    public function setCustomerEmail(?string $customerEmail): PaymentResult
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
     * @return PaymentResult
     */
    public function setCustomerId(?string $customerId): PaymentResult
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
     * @return PaymentResult
     */
    public function setCustomerIpAddress(?string $customerIpAddress): PaymentResult
    {
        $this->customerIpAddress = $customerIpAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerLegalId(): ?string
    {
        return $this->customerLegalId;
    }

    /**
     * @param string|null $customerLegalId
     * @return PaymentResult
     */
    public function setCustomerLegalId(?string $customerLegalId): PaymentResult
    {
        $this->customerLegalId = $customerLegalId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerMobilePhone(): ?string
    {
        return $this->customerMobilePhone;
    }

    /**
     * @param string|null $customerMobilePhone
     * @return PaymentResult
     */
    public function setCustomerMobilePhone(?string $customerMobilePhone): PaymentResult
    {
        $this->customerMobilePhone = $customerMobilePhone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerPositionOccupied(): ?string
    {
        return $this->customerPositionOccupied;
    }

    /**
     * @param string|null $customerPositionOccupied
     * @return PaymentResult
     */
    public function setCustomerPositionOccupied(?string $customerPositionOccupied): PaymentResult
    {
        $this->customerPositionOccupied = $customerPositionOccupied;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccAmount(): ?string
    {
        return $this->dccAmount;
    }

    /**
     * @param string|null $dccAmount
     * @return PaymentResult
     */
    public function setDccAmount(?string $dccAmount): PaymentResult
    {
        $this->dccAmount = $dccAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccCurrencyCode(): ?string
    {
        return $this->dccCurrencyCode;
    }

    /**
     * @param string|null $dccCurrencyCode
     * @return PaymentResult
     */
    public function setDccCurrencyCode(?string $dccCurrencyCode): PaymentResult
    {
        $this->dccCurrencyCode = $dccCurrencyCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccExchangeRate(): ?string
    {
        return $this->dccExchangeRate;
    }

    /**
     * @param string|null $dccExchangeRate
     * @return PaymentResult
     */
    public function setDccExchangeRate(?string $dccExchangeRate): PaymentResult
    {
        $this->dccExchangeRate = $dccExchangeRate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccExchangeRateValidity(): ?string
    {
        return $this->dccExchangeRateValidity;
    }

    /**
     * @param string|null $dccExchangeRateValidity
     * @return PaymentResult
     */
    public function setDccExchangeRateValidity(?string $dccExchangeRateValidity): PaymentResult
    {
        $this->dccExchangeRateValidity = $dccExchangeRateValidity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccProvider(): ?string
    {
        return $this->dccProvider;
    }

    /**
     * @param string|null $dccProvider
     * @return PaymentResult
     */
    public function setDccProvider(?string $dccProvider): PaymentResult
    {
        $this->dccProvider = $dccProvider;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccStatus(): ?string
    {
        return $this->dccStatus;
    }

    /**
     * @param string|null $dccStatus
     * @return PaymentResult
     */
    public function setDccStatus(?string $dccStatus): PaymentResult
    {
        $this->dccStatus = $dccStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDccResponseCode(): ?string
    {
        return $this->dccResponseCode;
    }

    /**
     * @param string|null $dccResponseCode
     * @return PaymentResult
     */
    public function setDccResponseCode(?string $dccResponseCode): PaymentResult
    {
        $this->dccResponseCode = $dccResponseCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string|null $dueDate
     * @return PaymentResult
     */
    public function setDueDate(?string $dueDate): PaymentResult
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGuaranteeIndicator(): ?string
    {
        return $this->guaranteeIndicator;
    }

    /**
     * @param string|null $guaranteeIndicator
     * @return PaymentResult
     */
    public function setGuaranteeIndicator(?string $guaranteeIndicator): PaymentResult
    {
        $this->guaranteeIndicator = $guaranteeIndicator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashPan1(): ?string
    {
        return $this->hashPan1;
    }

    /**
     * @param string|null $hashPan1
     * @return PaymentResult
     */
    public function setHashPan1(?string $hashPan1): PaymentResult
    {
        $this->hashPan1 = $hashPan1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashPan2(): ?string
    {
        return $this->hashPan2;
    }

    /**
     * @param string|null $hashPan2
     * @return PaymentResult
     */
    public function setHashPan2(?string $hashPan2): PaymentResult
    {
        $this->hashPan2 = $hashPan2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    /**
     * @param string|null $holderAuthentMethod
     * @return PaymentResult
     */
    public function setHolderAuthentMethod(?string $holderAuthentMethod): PaymentResult
    {
        $this->holderAuthentMethod = $holderAuthentMethod;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    /**
     * @param string|null $holderAuthentProgram
     * @return PaymentResult
     */
    public function setHolderAuthentProgram(?string $holderAuthentProgram): PaymentResult
    {
        $this->holderAuthentProgram = $holderAuthentProgram;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentRelegation(): ?string
    {
        return $this->holderAuthentRelegation;
    }

    /**
     * @param string|null $holderAuthentRelegation
     * @return PaymentResult
     */
    public function setHolderAuthentRelegation(?string $holderAuthentRelegation): PaymentResult
    {
        $this->holderAuthentRelegation = $holderAuthentRelegation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderContactEmail(): ?string
    {
        return $this->holderContactEmail;
    }

    /**
     * @param string|null $holderContactEmail
     * @return PaymentResult
     */
    public function setHolderContactEmail(?string $holderContactEmail): PaymentResult
    {
        $this->holderContactEmail = $holderContactEmail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    /**
     * @param string|null $holderAuthentStatus
     * @return PaymentResult
     */
    public function setHolderAuthentStatus(?string $holderAuthentStatus): PaymentResult
    {
        $this->holderAuthentStatus = $holderAuthentStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderAuthentType(): ?string
    {
        return $this->holderAuthentType;
    }

    /**
     * @param string|null $holderAuthentType
     * @return PaymentResult
     */
    public function setHolderAuthentType(?string $holderAuthentType): PaymentResult
    {
        $this->holderAuthentType = $holderAuthentType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstalmentAmountsList(): ?string
    {
        return $this->instalmentAmountsList;
    }

    /**
     * @param string|null $instalmentAmountsList
     * @return PaymentResult
     */
    public function setInstalmentAmountsList(?string $instalmentAmountsList): PaymentResult
    {
        $this->instalmentAmountsList = $instalmentAmountsList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstalmentDatesList(): ?string
    {
        return $this->instalmentDatesList;
    }

    /**
     * @param string|null $instalmentDatesList
     * @return PaymentResult
     */
    public function setInstalmentDatesList(?string $instalmentDatesList): PaymentResult
    {
        $this->instalmentDatesList = $instalmentDatesList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstalmentNumber(): ?string
    {
        return $this->instalmentNumber;
    }

    /**
     * @param string|null $instalmentNumber
     * @return PaymentResult
     */
    public function setInstalmentNumber(?string $instalmentNumber): PaymentResult
    {
        $this->instalmentNumber = $instalmentNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstalmentTransactionReferencesList(): ?string
    {
        return $this->instalmentTransactionReferencesList;
    }

    /**
     * @param string|null $instalmentTransactionReferencesList
     * @return PaymentResult
     */
    public function setInstalmentTransactionReferencesList(?string $instalmentTransactionReferencesList): PaymentResult
    {
        $this->instalmentTransactionReferencesList = $instalmentTransactionReferencesList;
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
     * @return PaymentResult
     */
    public function setInterfaceVersion(?string $interfaceVersion): PaymentResult
    {
        $this->interfaceVersion = $interfaceVersion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntermediateServiceProviderOperationId(): ?string
    {
        return $this->intermediateServiceProviderOperationId;
    }

    /**
     * @param string|null $intermediateServiceProviderOperationId
     * @return PaymentResult
     */
    public function setIntermediateServiceProviderOperationId(?string $intermediateServiceProviderOperationId): PaymentResult
    {
        $this->intermediateServiceProviderOperationId = $intermediateServiceProviderOperationId;
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
     * @return PaymentResult
     */
    public function setInvoiceReference(?string $invoiceReference): PaymentResult
    {
        $this->invoiceReference = $invoiceReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @param string|null $issuerCode
     * @return PaymentResult
     */
    public function setIssuerCode(?string $issuerCode): PaymentResult
    {
        $this->issuerCode = $issuerCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerCountryCode(): ?string
    {
        return $this->issuerCountryCode;
    }

    /**
     * @param string|null $issuerCountryCode
     * @return PaymentResult
     */
    public function setIssuerCountryCode(?string $issuerCountryCode): PaymentResult
    {
        $this->issuerCountryCode = $issuerCountryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerEnrollementIndicator(): ?string
    {
        return $this->issuerEnrollementIndicator;
    }

    /**
     * @param string|null $issuerEnrollementIndicator
     * @return PaymentResult
     */
    public function setIssuerEnrollementIndicator(?string $issuerEnrollementIndicator): PaymentResult
    {
        $this->issuerEnrollementIndicator = $issuerEnrollementIndicator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerWalletInformation(): ?string
    {
        return $this->issuerWalletInformation;
    }

    /**
     * @param string|null $issuerWalletInformation
     * @return PaymentResult
     */
    public function setIssuerWalletInformation(?string $issuerWalletInformation): PaymentResult
    {
        $this->issuerWalletInformation = $issuerWalletInformation;
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
     * @return PaymentResult
     */
    public function setKeyVersion(?string $keyVersion): PaymentResult
    {
        $this->keyVersion = $keyVersion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandateAuthentMethod(): ?string
    {
        return $this->mandateAuthentMethod;
    }

    /**
     * @param string|null $mandateAuthentMethod
     * @return PaymentResult
     */
    public function setMandateAuthentMethod(?string $mandateAuthentMethod): PaymentResult
    {
        $this->mandateAuthentMethod = $mandateAuthentMethod;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandateCertificationType(): ?string
    {
        return $this->mandateCertificationType;
    }

    /**
     * @param string|null $mandateCertificationType
     * @return PaymentResult
     */
    public function setMandateCertificationType(?string $mandateCertificationType): PaymentResult
    {
        $this->mandateCertificationType = $mandateCertificationType;
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
     * @return PaymentResult
     */
    public function setMandateId(?string $mandateId): PaymentResult
    {
        $this->mandateId = $mandateId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandateUsage(): ?string
    {
        return $this->mandateUsage;
    }

    /**
     * @param string|null $mandateUsage
     * @return PaymentResult
     */
    public function setMandateUsage(?string $mandateUsage): PaymentResult
    {
        $this->mandateUsage = $mandateUsage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @param string|null $maskedPan
     * @return PaymentResult
     */
    public function setMaskedPan(?string $maskedPan): PaymentResult
    {
        $this->maskedPan = $maskedPan;
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
     * @return PaymentResult
     */
    public function setMerchantId(?string $merchantId): PaymentResult
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
     * @return PaymentResult
     */
    public function setMerchantSessionId(?string $merchantSessionId): PaymentResult
    {
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
     * @return PaymentResult
     */
    public function setMerchantTransactionDateTime(?string $merchantTransactionDateTime): PaymentResult
    {
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
     * @return PaymentResult
     */
    public function setMerchantWalletId(?string $merchantWalletId): PaymentResult
    {
        $this->merchantWalletId = $merchantWalletId;
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
     * @return PaymentResult
     */
    public function setOrderChannel(?string $orderChannel): PaymentResult
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
     * @return PaymentResult
     */
    public function setOrderId(?string $orderId): PaymentResult
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPanEntryMode(): ?string
    {
        return $this->panEntryMode;
    }

    /**
     * @param string|null $panEntryMode
     * @return PaymentResult
     */
    public function setPanEntryMode(?string $panEntryMode): PaymentResult
    {
        $this->panEntryMode = $panEntryMode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    /**
     * @param string|null $panExpiryDate
     * @return PaymentResult
     */
    public function setPanExpiryDate(?string $panExpiryDate): PaymentResult
    {
        $this->panExpiryDate = $panExpiryDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentAttemptNumber(): ?string
    {
        return $this->paymentAttemptNumber;
    }

    /**
     * @param string|null $paymentAttemptNumber
     * @return PaymentResult
     */
    public function setPaymentAttemptNumber(?string $paymentAttemptNumber): PaymentResult
    {
        $this->paymentAttemptNumber = $paymentAttemptNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    /**
     * @param string|null $paymentMeanBrand
     * @return PaymentResult
     */
    public function setPaymentMeanBrand(?string $paymentMeanBrand): PaymentResult
    {
        $this->paymentMeanBrand = $paymentMeanBrand;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanBrandSelectionStatus(): ?string
    {
        return $this->paymentMeanBrandSelectionStatus;
    }

    /**
     * @param string|null $paymentMeanBrandSelectionStatus
     * @return PaymentResult
     */
    public function setPaymentMeanBrandSelectionStatus(?string $paymentMeanBrandSelectionStatus): PaymentResult
    {
        $this->paymentMeanBrandSelectionStatus = $paymentMeanBrandSelectionStatus;
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
     * @return PaymentResult
     */
    public function setPaymentMeanData(?string $paymentMeanData): PaymentResult
    {
        $this->paymentMeanData = $paymentMeanData;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanId(): ?string
    {
        return $this->paymentMeanId;
    }

    /**
     * @param string|null $paymentMeanId
     * @return PaymentResult
     */
    public function setPaymentMeanId(?string $paymentMeanId): PaymentResult
    {
        $this->paymentMeanId = $paymentMeanId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanTradingName(): ?string
    {
        return $this->paymentMeanTradingName;
    }

    /**
     * @param string|null $paymentMeanTradingName
     * @return PaymentResult
     */
    public function setPaymentMeanTradingName(?string $paymentMeanTradingName): PaymentResult
    {
        $this->paymentMeanTradingName = $paymentMeanTradingName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMeanType(): ?string
    {
        return $this->paymentMeanType;
    }

    /**
     * @param string|null $paymentMeanType
     * @return PaymentResult
     */
    public function setPaymentMeanType(?string $paymentMeanType): PaymentResult
    {
        $this->paymentMeanType = $paymentMeanType;
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
     * @return PaymentResult
     */
    public function setPaymentPattern(?string $paymentPattern): PaymentResult
    {
        $this->paymentPattern = $paymentPattern;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    /**
     * @param string|null $preAuthenticationColor
     * @return PaymentResult
     */
    public function setPreAuthenticationColor(?string $preAuthenticationColor): PaymentResult
    {
        $this->preAuthenticationColor = $preAuthenticationColor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationInfo(): ?string
    {
        return $this->preAuthenticationInfo;
    }

    /**
     * @param string|null $preAuthenticationInfo
     * @return PaymentResult
     */
    public function setPreAuthenticationInfo(?string $preAuthenticationInfo): PaymentResult
    {
        $this->preAuthenticationInfo = $preAuthenticationInfo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    /**
     * @param string|null $preAuthenticationProfile
     * @return PaymentResult
     */
    public function setPreAuthenticationProfile(?string $preAuthenticationProfile): PaymentResult
    {
        $this->preAuthenticationProfile = $preAuthenticationProfile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    /**
     * @param string|null $preAuthenticationProfileValue
     * @return PaymentResult
     */
    public function setPreAuthenticationProfileValue(?string $preAuthenticationProfileValue): PaymentResult
    {
        $this->preAuthenticationProfileValue = $preAuthenticationProfileValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationRuleResultList(): ?string
    {
        return $this->preAuthenticationRuleResultList;
    }

    /**
     * @param string|null $preAuthenticationRuleResultList
     * @return PaymentResult
     */
    public function setPreAuthenticationRuleResultList(?string $preAuthenticationRuleResultList): PaymentResult
    {
        $this->preAuthenticationRuleResultList = $preAuthenticationRuleResultList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationThreshold(): ?string
    {
        return $this->preAuthenticationThreshold;
    }

    /**
     * @param string|null $preAuthenticationThreshold
     * @return PaymentResult
     */
    public function setPreAuthenticationThreshold(?string $preAuthenticationThreshold): PaymentResult
    {
        $this->preAuthenticationThreshold = $preAuthenticationThreshold;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    /**
     * @param string|null $preAuthenticationValue
     * @return PaymentResult
     */
    public function setPreAuthenticationValue(?string $preAuthenticationValue): PaymentResult
    {
        $this->preAuthenticationValue = $preAuthenticationValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    /**
     * @param string|null $preAuthorisationProfile
     * @return PaymentResult
     */
    public function setPreAuthorisationProfile(?string $preAuthorisationProfile): PaymentResult
    {
        $this->preAuthorisationProfile = $preAuthorisationProfile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    /**
     * @param string|null $preAuthorisationProfileValue
     * @return PaymentResult
     */
    public function setPreAuthorisationProfileValue(?string $preAuthorisationProfileValue): PaymentResult
    {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreAuthorisationRuleResultList(): ?string
    {
        return $this->preAuthorisationRuleResultList;
    }

    /**
     * @param string|null $preAuthorisationRuleResultList
     * @return PaymentResult
     */
    public function setPreAuthorisationRuleResultList(?string $preAuthorisationRuleResultList): PaymentResult
    {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @param string|null $responseCode
     * @return PaymentResult
     */
    public function setResponseCode(?string $responseCode): PaymentResult
    {
        $this->responseCode = $responseCode;
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
     * @return PaymentResult
     */
    public function setReturnContext(?string $returnContext): PaymentResult
    {
        $this->returnContext = $returnContext;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getS10TransactionId(): ?string
    {
        return $this->s10TransactionId;
    }

    /**
     * @param string|null $s10TransactionId
     * @return PaymentResult
     */
    public function setS10TransactionId(?string $s10TransactionId): PaymentResult
    {
        $this->s10TransactionId = $s10TransactionId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getS10TransactionIdDate(): ?string
    {
        return $this->s10TransactionIdDate;
    }

    /**
     * @param string|null $s10TransactionIdDate
     * @return PaymentResult
     */
    public function setS10TransactionIdDate(?string $s10TransactionIdDate): PaymentResult
    {
        $this->s10TransactionIdDate = $s10TransactionIdDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getS10transactionIdsList(): ?string
    {
        return $this->s10transactionIdsList;
    }

    /**
     * @param string|null $s10transactionIdsList
     * @return PaymentResult
     */
    public function setS10transactionIdsList(?string $s10transactionIdsList): PaymentResult
    {
        $this->s10transactionIdsList = $s10transactionIdsList;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    /**
     * @param string|null $scoreColor
     * @return PaymentResult
     */
    public function setScoreColor(?string $scoreColor): PaymentResult
    {
        $this->scoreColor = $scoreColor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreInfo(): ?string
    {
        return $this->scoreInfo;
    }

    /**
     * @param string|null $scoreInfo
     * @return PaymentResult
     */
    public function setScoreInfo(?string $scoreInfo): PaymentResult
    {
        $this->scoreInfo = $scoreInfo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    /**
     * @param string|null $scoreProfile
     * @return PaymentResult
     */
    public function setScoreProfile(?string $scoreProfile): PaymentResult
    {
        $this->scoreProfile = $scoreProfile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    /**
     * @param string|null $scoreThreshold
     * @return PaymentResult
     */
    public function setScoreThreshold(?string $scoreThreshold): PaymentResult
    {
        $this->scoreThreshold = $scoreThreshold;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    /**
     * @param string|null $scoreValue
     * @return PaymentResult
     */
    public function setScoreValue(?string $scoreValue): PaymentResult
    {
        $this->scoreValue = $scoreValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecureReference(): ?string
    {
        return $this->secureReference;
    }

    /**
     * @param string|null $secureReference
     * @return PaymentResult
     */
    public function setSecureReference(?string $secureReference): PaymentResult
    {
        $this->secureReference = $secureReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSettlementMode(): ?string
    {
        return $this->settlementMode;
    }

    /**
     * @param string|null $settlementMode
     * @return PaymentResult
     */
    public function setSettlementMode(?string $settlementMode): PaymentResult
    {
        $this->settlementMode = $settlementMode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSettlementModeComplement(): ?string
    {
        return $this->settlementModeComplement;
    }

    /**
     * @param string|null $settlementModeComplement
     * @return PaymentResult
     */
    public function setSettlementModeComplement(?string $settlementModeComplement): PaymentResult
    {
        $this->settlementModeComplement = $settlementModeComplement;
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
     * @return PaymentResult
     */
    public function setStatementReference(?string $statementReference): PaymentResult
    {
        $this->statementReference = $statementReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenPan(): ?string
    {
        return $this->tokenPan;
    }

    /**
     * @param string|null $tokenPan
     * @return PaymentResult
     */
    public function setTokenPan(?string $tokenPan): PaymentResult
    {
        $this->tokenPan = $tokenPan;
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
     * @return PaymentResult
     */
    public function setTransactionActors(?string $transactionActors): PaymentResult
    {
        $this->transactionActors = $transactionActors;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionDateTime(): ?string
    {
        return $this->transactionDateTime;
    }

    /**
     * @param string|null $transactionDateTime
     * @return PaymentResult
     */
    public function setTransactionDateTime(?string $transactionDateTime): PaymentResult
    {
        $this->transactionDateTime = $transactionDateTime;
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
     * @return PaymentResult
     */
    public function setTransactionOrigin(?string $transactionOrigin): PaymentResult
    {
        $this->transactionOrigin = $transactionOrigin;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionPlatform(): ?string
    {
        return $this->transactionPlatform;
    }

    /**
     * @param string|null $transactionPlatform
     * @return PaymentResult
     */
    public function setTransactionPlatform(?string $transactionPlatform): PaymentResult
    {
        $this->transactionPlatform = $transactionPlatform;
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
     * @return PaymentResult
     */
    public function setTransactionReference(?string $transactionReference): PaymentResult
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    /**
     * @param string|null $walletType
     * @return PaymentResult
     */
    public function setWalletType(?string $walletType): PaymentResult
    {
        $this->walletType = $walletType;
        return $this;
    }
    
}
