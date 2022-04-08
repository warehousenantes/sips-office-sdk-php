<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Checkout;

use Worldline\Sips\Common\Fields\CardData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class PaymentProviderFinalizeResponse.
 */
class PaymentProviderFinalizeResponse extends SipsMessage
{
    private ?string $merchantId = null;

    private ?string $transactionReference = null;

    private ?int $amount = null;

    private ?string $currencyCode = null;

    private ?string $captureMode = null;

    private ?int $captureDay = null;

    private ?string $orderChannel = null;

    private ?string $paymentPattern = null;

    private ?string $customerId = null;

    private ?string $customerIpAddress = null;

    private ?string $returnContext = null;

    private ?string $statementReference = null;

    private ?string $invoiceReference = null;

    private ?string $merchantTransactionDateTime = null;

    private ?string $acquirerResponseCode = null;

    private ?string $avsPostcodeResponseCode = null;

    private ?string $avsAddressResponseCode = null;

    private ?string $authorisationId = null;

    private ?string $guaranteeIndicator = null;

    private ?string $transactionStatus = null;

    private ?string $panEntryMode = null;

    private ?string $paymentMeanBrand = null;

    private ?string $maskedPan = null;

    private ?string $cardExpiryDate = null;

    private ?string $cardCSCResultCode = null;

    private ?string $walletType = null;

    private ?string $transactionDateTime = null;

    private ?string $holderAuthentMethod = null;

    private ?string $holderAuthentStatus = null;

    private ?string $holderAuthentProgram = null;

    private ?string $scoreColor = null;

    private ?string $scoreInfo = null;

    private ?string $scoreProfile = null;

    private ?string $scoreThreshold = null;

    private ?string $scoreValue = null;

    private ?string $complementaryCode = null;

    private ?string $complementaryInfo = null;

    private ?string $responseCode = null;

    private ?string $issuerWalletInformation = null;

    private ?S10TransactionReference $s10TransactionReference = null;

    private ?string $orderId = null;

    private ?string $acquirerResponseMessage = null;

    private ?CardData $cardData = null;

    private ?string $acquirerNativeResponseCode = null;

    private ?string $acquirerResponseIdentifier = null;

    private ?string $seal = null;

    private ?string $preAuthorisationProfile = null;

    private ?string $preAuthorisationProfileValue = null;

    private ?array $preAuthorisationRuleResultList = null;

    private ?string $transactionPlatform = null;

    private ?string $errorFieldName = null;

    private ?string $issuerWalletId = null;

    private ?string $intermediateServiceProviderOperationId = null;

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(
        ?string $merchantId
    ): self {
        $this->merchantId = $merchantId;

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

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(
        ?string $currencyCode
    ): self {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCaptureMode(): ?string
    {
        return $this->captureMode;
    }

    public function setCaptureMode(
        ?string $captureMode
    ): self {
        $this->captureMode = $captureMode;

        return $this;
    }

    public function getCaptureDay(): ?int
    {
        return $this->captureDay;
    }

    public function setCaptureDay(
        ?int $captureDay
    ): self {
        $this->captureDay = $captureDay;

        return $this;
    }

    public function getOrderChannel(): ?string
    {
        return $this->orderChannel;
    }

    public function setOrderChannel(
        ?string $orderChannel
    ): self {
        $this->orderChannel = $orderChannel;

        return $this;
    }

    public function getPaymentPattern(): ?string
    {
        return $this->paymentPattern;
    }

    public function setPaymentPattern(
        ?string $paymentPattern
    ): self {
        $this->paymentPattern = $paymentPattern;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(
        ?string $customerId
    ): self {
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

    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    public function setInvoiceReference(
        ?string $invoiceReference
    ): self {
        $this->invoiceReference = $invoiceReference;

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

    public function getAcquirerResponseCode(): ?string
    {
        return $this->acquirerResponseCode;
    }

    public function setAcquirerResponseCode(
        ?string $acquirerResponseCode
    ): self {
        $this->acquirerResponseCode = $acquirerResponseCode;

        return $this;
    }

    public function getAvsPostcodeResponseCode(): ?string
    {
        return $this->avsPostcodeResponseCode;
    }

    public function setAvsPostcodeResponseCode(
        ?string $avsPostcodeResponseCode
    ): self {
        $this->avsPostcodeResponseCode = $avsPostcodeResponseCode;

        return $this;
    }

    public function getAvsAddressResponseCode(): ?string
    {
        return $this->avsAddressResponseCode;
    }

    public function setAvsAddressResponseCode(
        ?string $avsAddressResponseCode
    ): self {
        $this->avsAddressResponseCode = $avsAddressResponseCode;

        return $this;
    }

    public function getAuthorisationId(): ?string
    {
        return $this->authorisationId;
    }

    public function setAuthorisationId(
        ?string $authorisationId
    ): self {
        $this->authorisationId = $authorisationId;

        return $this;
    }

    public function getGuaranteeIndicator(): ?string
    {
        return $this->guaranteeIndicator;
    }

    public function setGuaranteeIndicator(
        ?string $guaranteeIndicator
    ): self {
        $this->guaranteeIndicator = $guaranteeIndicator;

        return $this;
    }

    public function getTransactionStatus(): ?string
    {
        return $this->transactionStatus;
    }

    public function setTransactionStatus(
        ?string $transactionStatus
    ): self {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    public function getPanEntryMode(): ?string
    {
        return $this->panEntryMode;
    }

    public function setPanEntryMode(
        ?string $panEntryMode
    ): self {
        $this->panEntryMode = $panEntryMode;

        return $this;
    }

    public function getPaymentMeanBrand(): ?string
    {
        return $this->paymentMeanBrand;
    }

    public function setPaymentMeanBrand(
        ?string $paymentMeanBrand
    ): self {
        $this->paymentMeanBrand = $paymentMeanBrand;

        return $this;
    }

    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    public function setMaskedPan(
        ?string $maskedPan
    ): self {
        $this->maskedPan = $maskedPan;

        return $this;
    }

    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    public function setCardExpiryDate(
        ?string $cardExpiryDate
    ): self {
        $this->cardExpiryDate = $cardExpiryDate;

        return $this;
    }

    public function getCardCSCResultCode(): ?string
    {
        return $this->cardCSCResultCode;
    }

    public function setCardCSCResultCode(
        ?string $cardCSCResultCode
    ): self {
        $this->cardCSCResultCode = $cardCSCResultCode;

        return $this;
    }

    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    public function setWalletType(
        ?string $walletType
    ): self {
        $this->walletType = $walletType;

        return $this;
    }

    public function getTransactionDateTime(): ?string
    {
        return $this->transactionDateTime;
    }

    public function setTransactionDateTime(
        ?string $transactionDateTime
    ): self {
        $this->transactionDateTime = $transactionDateTime;

        return $this;
    }

    public function getHolderAuthentMethod(): ?string
    {
        return $this->holderAuthentMethod;
    }

    public function setHolderAuthentMethod(
        ?string $holderAuthentMethod
    ): self {
        $this->holderAuthentMethod = $holderAuthentMethod;

        return $this;
    }

    public function getHolderAuthentStatus(): ?string
    {
        return $this->holderAuthentStatus;
    }

    public function setHolderAuthentStatus(
        ?string $holderAuthentStatus
    ): self {
        $this->holderAuthentStatus = $holderAuthentStatus;

        return $this;
    }

    public function getHolderAuthentProgram(): ?string
    {
        return $this->holderAuthentProgram;
    }

    public function setHolderAuthentProgram(
        ?string $holderAuthentProgram
    ): self {
        $this->holderAuthentProgram = $holderAuthentProgram;

        return $this;
    }

    public function getScoreColor(): ?string
    {
        return $this->scoreColor;
    }

    public function setScoreColor(
        ?string $scoreColor
    ): self {
        $this->scoreColor = $scoreColor;

        return $this;
    }

    public function getScoreInfo(): ?string
    {
        return $this->scoreInfo;
    }

    public function setScoreInfo(
        ?string $scoreInfo
    ): self {
        $this->scoreInfo = $scoreInfo;

        return $this;
    }

    public function getScoreProfile(): ?string
    {
        return $this->scoreProfile;
    }

    public function setScoreProfile(
        ?string $scoreProfile
    ): self {
        $this->scoreProfile = $scoreProfile;

        return $this;
    }

    public function getScoreThreshold(): ?string
    {
        return $this->scoreThreshold;
    }

    public function setScoreThreshold(
        ?string $scoreThreshold
    ): self {
        $this->scoreThreshold = $scoreThreshold;

        return $this;
    }

    public function getScoreValue(): ?string
    {
        return $this->scoreValue;
    }

    public function setScoreValue(
        ?string $scoreValue
    ): self {
        $this->scoreValue = $scoreValue;

        return $this;
    }

    public function getComplementaryCode(): ?string
    {
        return $this->complementaryCode;
    }

    public function setComplementaryCode(
        ?string $complementaryCode
    ): self {
        $this->complementaryCode = $complementaryCode;

        return $this;
    }

    public function getComplementaryInfo(): ?string
    {
        return $this->complementaryInfo;
    }

    public function setComplementaryInfo(
        ?string $complementaryInfo
    ): self {
        $this->complementaryInfo = $complementaryInfo;

        return $this;
    }

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(
        ?string $responseCode
    ): self {
        $this->responseCode = $responseCode;

        return $this;
    }

    public function getIssuerWalletInformation(): ?string
    {
        return $this->issuerWalletInformation;
    }

    public function setIssuerWalletInformation(
        ?string $issuerWalletInformation
    ): self {
        $this->issuerWalletInformation = $issuerWalletInformation;

        return $this;
    }

    public function getS10TransactionReference(): ?S10TransactionReference
    {
        return $this->s10TransactionReference;
    }

    public function setS10TransactionReference(
        ?S10TransactionReference $s10TransactionReference
    ): self {
        $this->s10TransactionReference = $s10TransactionReference;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(
        ?string $orderId
    ): self {
        $this->orderId = $orderId;

        return $this;
    }

    public function getAcquirerResponseMessage(): ?string
    {
        return $this->acquirerResponseMessage;
    }

    public function setAcquirerResponseMessage(
        ?string $acquirerResponseMessage
    ): self {
        $this->acquirerResponseMessage = $acquirerResponseMessage;

        return $this;
    }

    public function getCardData(): ?CardData
    {
        return $this->cardData;
    }

    public function setCardData(
        ?CardData $cardData
    ): self {
        $this->cardData = $cardData;

        return $this;
    }

    public function getAcquirerNativeResponseCode(): ?string
    {
        return $this->acquirerNativeResponseCode;
    }

    public function setAcquirerNativeResponseCode(
        ?string $acquirerNativeResponseCode
    ): self {
        $this->acquirerNativeResponseCode = $acquirerNativeResponseCode;

        return $this;
    }

    public function getAcquirerResponseIdentifier(): ?string
    {
        return $this->acquirerResponseIdentifier;
    }

    public function setAcquirerResponseIdentifier(
        ?string $acquirerResponseIdentifier
    ): self {
        $this->acquirerResponseIdentifier = $acquirerResponseIdentifier;

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

    public function getPreAuthorisationProfile(): ?string
    {
        return $this->preAuthorisationProfile;
    }

    public function setPreAuthorisationProfile(
        ?string $preAuthorisationProfile
    ): self {
        $this->preAuthorisationProfile = $preAuthorisationProfile;

        return $this;
    }

    public function getPreAuthorisationProfileValue(): ?string
    {
        return $this->preAuthorisationProfileValue;
    }

    public function setPreAuthorisationProfileValue(
        ?string $preAuthorisationProfileValue
    ): self {
        $this->preAuthorisationProfileValue = $preAuthorisationProfileValue;

        return $this;
    }

    public function getPreAuthorisationRuleResultList(): ?array
    {
        return $this->preAuthorisationRuleResultList;
    }

    public function setPreAuthorisationRuleResultList(
        ?array $preAuthorisationRuleResultList
    ): self {
        $this->preAuthorisationRuleResultList = $preAuthorisationRuleResultList;

        return $this;
    }

    public function getTransactionPlatform(): ?string
    {
        return $this->transactionPlatform;
    }

    public function setTransactionPlatform(
        ?string $transactionPlatform
    ): self {
        $this->transactionPlatform = $transactionPlatform;

        return $this;
    }

    public function getErrorFieldName(): ?string
    {
        return $this->errorFieldName;
    }

    public function setErrorFieldName(
        ?string $errorFieldName
    ): self {
        $this->errorFieldName = $errorFieldName;

        return $this;
    }

    public function getIssuerWalletId(): ?string
    {
        return $this->issuerWalletId;
    }

    public function setIssuerWalletId(
        ?string $issuerWalletId
    ): self {
        $this->issuerWalletId = $issuerWalletId;

        return $this;
    }

    public function getIntermediateServiceProviderOperationId(): ?string
    {
        return $this->intermediateServiceProviderOperationId;
    }

    public function setIntermediateServiceProviderOperationId(
        ?string $intermediateServiceProviderOperationId
    ): self {
        $this->intermediateServiceProviderOperationId = $intermediateServiceProviderOperationId;

        return $this;
    }
}
