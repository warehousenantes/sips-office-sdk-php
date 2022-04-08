<?php

declare(strict_types=1);

namespace Worldline\Sips\Office\SipsMessages\Diagnostic;

use Worldline\Sips\Common\Fields\CardData;
use Worldline\Sips\Common\Fields\S10TransactionReference;
use Worldline\Sips\Common\SipsMessages\SipsMessage;

/**
 * Class GetTransactionDataResponse.
 */
class GetTransactionDataResponse extends SipsMessage
{
    private ?string $automaticResponseStatus = null;

    private ?string $authorisationId = null;

    private ?string $captureLimitDate = null;

    private ?string $paymentMeanType = null;

    private ?string $paymentMeanBrand = null;

    private ?string $currencyCode = null;

    private ?int $currentAmount = null;

    private ?string $customerId = null;

    private ?string $customerIpAddress = null;

    private ?string $lastOperationDateTime = null;

    private ?string $lastOperationName = null;

    private ?string $orderId = null;

    private ?int $originAmount = null;

    private ?string $transactionDateTime = null;

    private ?string $responseCode = null;

    private ?string $tokenPan = null;

    private ?string $transactionStatus = null;

    private ?string $orderChannel = null;

    private ?string $paymentPattern = null;

    private ?string $merchantId = null;

    private ?string $panEntryMode = null;

    private ?string $walletType = null;

    private ?string $holderAuthentMethod = null;

    private ?string $holderAuthentStatus = null;

    private ?string $holderAuthentProgram = null;

    private ?string $dccStatus = null;

    private ?int $remainingAmount = null;

    private ?string $fromTransactionReference = null;

    private ?string $maskedPan = null;

    private ?string $panExpiryDate = null;

    private ?S10TransactionReference $s10TransactionReference = null;

    private ?S10TransactionReference $s10FromTransactionReference = null;

    private ?string $transactionReference = null;

    private ?CardData $cardData = null;

    private ?string $acquirerResponseMessage = null;

    private ?string $seal = null;

    private ?string $complementaryCode = null;

    private ?string $preAuthenticationColor = null;

    private ?string $preAuthenticationProfile = null;

    private ?string $preAuthenticationProfileValue = null;

    private ?string $preAuthenticationThreshold = null;

    private ?string $preAuthenticationValue = null;

    private ?string $preAuthorisationProfile = null;

    private ?string $preAuthorisationProfileValue = null;

    private ?string $scoreColor = null;

    private ?string $scoreProfile = null;

    private ?string $scoreThreshold = null;

    private ?string $scoreValue = null;

    private ?string $cardCSCResultCode = null;

    private ?string $avsPostcodeResponseCode = null;

    private ?string $avsAddressResponseCode = null;

    private ?string $getTransDataResponseCode = null;

    private ?string $acquirerResponseCode = null;

    private ?int $paymentAttemptNumber = null;

    private ?string $errorFieldName = null;

    public function getAutomaticResponseStatus(): ?string
    {
        return $this->automaticResponseStatus;
    }

    public function setAutomaticResponseStatus(
        ?string $automaticResponseStatus
    ): self {
        $this->automaticResponseStatus = $automaticResponseStatus;

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

    public function getCaptureLimitDate(): ?string
    {
        return $this->captureLimitDate;
    }

    public function setCaptureLimitDate(
        ?string $captureLimitDate
    ): self {
        $this->captureLimitDate = $captureLimitDate;

        return $this;
    }

    public function getPaymentMeanType(): ?string
    {
        return $this->paymentMeanType;
    }

    public function setPaymentMeanType(
        ?string $paymentMeanType
    ): self {
        $this->paymentMeanType = $paymentMeanType;

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

    public function getCurrentAmount(): ?int
    {
        return $this->currentAmount;
    }

    public function setCurrentAmount(
        ?int $currentAmount
    ): self {
        $this->currentAmount = $currentAmount;

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

    public function getLastOperationDateTime(): ?string
    {
        return $this->lastOperationDateTime;
    }

    public function setLastOperationDateTime(
        ?string $lastOperationDateTime
    ): self {
        $this->lastOperationDateTime = $lastOperationDateTime;

        return $this;
    }

    public function getLastOperationName(): ?string
    {
        return $this->lastOperationName;
    }

    public function setLastOperationName(
        ?string $lastOperationName
    ): self {
        $this->lastOperationName = $lastOperationName;

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

    public function getOriginAmount(): ?int
    {
        return $this->originAmount;
    }

    public function setOriginAmount(?int $originAmount): self
    {
        $this->originAmount = $originAmount;

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

    public function getTokenPan(): ?string
    {
        return $this->tokenPan;
    }

    public function setTokenPan(?string $tokenPan): self
    {
        $this->tokenPan = $tokenPan;

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

    public function getDccStatus(): ?string
    {
        return $this->dccStatus;
    }

    public function setDccStatus(?string $dccStatus): self
    {
        $this->dccStatus = $dccStatus;

        return $this;
    }

    public function getRemainingAmount(): ?int
    {
        return $this->remainingAmount;
    }

    public function setRemainingAmount(?int $remainingAmount): self
    {
        $this->remainingAmount = $remainingAmount;

        return $this;
    }

    public function getFromTransactionReference(): ?string
    {
        return $this->fromTransactionReference;
    }

    public function setFromTransactionReference(
        ?string $fromTransactionReference
    ): self {
        $this->fromTransactionReference = $fromTransactionReference;

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

    public function getPanExpiryDate(): ?string
    {
        return $this->panExpiryDate;
    }

    public function setPanExpiryDate(
        ?string $panExpiryDate
    ): self {
        $this->panExpiryDate = $panExpiryDate;

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

    public function getS10FromTransactionReference(): ?S10TransactionReference
    {
        return $this->s10FromTransactionReference;
    }

    public function setS10FromTransactionReference(
        ?S10TransactionReference $s10FromTransactionReference
    ): self {
        $this->s10FromTransactionReference = $s10FromTransactionReference;

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

    public function getCardData(): ?CardData
    {
        return $this->cardData;
    }

    public function setCardData(?CardData $cardData): self
    {
        $this->cardData = $cardData;

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

    public function getSeal(): ?string
    {
        return $this->seal;
    }

    public function setSeal(?string $seal): self
    {
        $this->seal = $seal;

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

    public function getPreAuthenticationColor(): ?string
    {
        return $this->preAuthenticationColor;
    }

    public function setPreAuthenticationColor(
        ?string $preAuthenticationColor
    ): self {
        $this->preAuthenticationColor = $preAuthenticationColor;

        return $this;
    }

    public function getPreAuthenticationProfile(): ?string
    {
        return $this->preAuthenticationProfile;
    }

    public function setPreAuthenticationProfile(
        ?string $preAuthenticationProfile
    ): self {
        $this->preAuthenticationProfile = $preAuthenticationProfile;

        return $this;
    }

    public function getPreAuthenticationProfileValue(): ?string
    {
        return $this->preAuthenticationProfileValue;
    }

    public function setPreAuthenticationProfileValue(
        ?string $preAuthenticationProfileValue
    ): self {
        $this->preAuthenticationProfileValue = $preAuthenticationProfileValue;

        return $this;
    }

    public function getPreAuthenticationThreshold(): ?string
    {
        return $this->preAuthenticationThreshold;
    }

    public function setPreAuthenticationThreshold(
        ?string $preAuthenticationThreshold
    ): self {
        $this->preAuthenticationThreshold = $preAuthenticationThreshold;

        return $this;
    }

    public function getPreAuthenticationValue(): ?string
    {
        return $this->preAuthenticationValue;
    }

    public function setPreAuthenticationValue(
        ?string $preAuthenticationValue
    ): self {
        $this->preAuthenticationValue = $preAuthenticationValue;

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

    public function getGetTransDataResponseCode(): ?string
    {
        return $this->getTransDataResponseCode;
    }

    public function setGetTransDataResponseCode(
        ?string $getTransDataResponseCode
    ): self {
        $this->getTransDataResponseCode = $getTransDataResponseCode;

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

    public function getPaymentAttemptNumber(): ?int
    {
        return $this->paymentAttemptNumber;
    }

    public function setPaymentAttemptNumber(?int $paymentAttemptNumber): self
    {
        $this->paymentAttemptNumber = $paymentAttemptNumber;

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
}
