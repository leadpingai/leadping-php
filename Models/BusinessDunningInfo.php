<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Dunning state recorded after a failed recurring payment.
*/
class BusinessDunningInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $finalCancellationAt Date and time when this Leadping business dunning info was final cancellation.
    */
    private ?DateTime $finalCancellationAt = null;
    
    /**
     * @var DateTime|null $gracePeriodEndsAt Date and time when this Leadping business dunning info was grace period ends.
    */
    private ?DateTime $gracePeriodEndsAt = null;
    
    /**
     * @var string|null $lastFailedInvoiceStatus Current last failed invoice status for this Leadping business dunning info.
    */
    private ?string $lastFailedInvoiceStatus = null;
    
    /**
     * @var DateTime|null $lastUpdatedAt Date and time when this Leadping business dunning info was last updated.
    */
    private ?DateTime $lastUpdatedAt = null;
    
    /**
     * @var DateTime|null $nextRetryAt Date and time when the next retry is scheduled.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var DateTime|null $outboundRestrictedAt Date and time when this Leadping business dunning info was outbound restricted.
    */
    private ?DateTime $outboundRestrictedAt = null;
    
    /**
     * @var DateTime|null $outboundSuspendedAt Date and time when this Leadping business dunning info was outbound suspended.
    */
    private ?DateTime $outboundSuspendedAt = null;
    
    /**
     * @var DateTime|null $paymentFailedAt Date and time when this Leadping business dunning info was payment failed.
    */
    private ?DateTime $paymentFailedAt = null;
    
    /**
     * @var int|null $retryAttemptCount Total number of retry attempt records represented by this Leadping business dunning info.
    */
    private ?int $retryAttemptCount = null;
    
    /**
     * @var string|null $stage Current stage for this Leadping business dunning info.
    */
    private ?string $stage = null;
    
    /**
     * Instantiates a new BusinessDunningInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessDunningInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessDunningInfo {
        return new BusinessDunningInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'finalCancellationAt' => fn(ParseNode $n) => $o->setFinalCancellationAt($n->getDateTimeValue()),
            'gracePeriodEndsAt' => fn(ParseNode $n) => $o->setGracePeriodEndsAt($n->getDateTimeValue()),
            'lastFailedInvoiceStatus' => fn(ParseNode $n) => $o->setLastFailedInvoiceStatus($n->getStringValue()),
            'lastUpdatedAt' => fn(ParseNode $n) => $o->setLastUpdatedAt($n->getDateTimeValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'outboundRestrictedAt' => fn(ParseNode $n) => $o->setOutboundRestrictedAt($n->getDateTimeValue()),
            'outboundSuspendedAt' => fn(ParseNode $n) => $o->setOutboundSuspendedAt($n->getDateTimeValue()),
            'paymentFailedAt' => fn(ParseNode $n) => $o->setPaymentFailedAt($n->getDateTimeValue()),
            'retryAttemptCount' => fn(ParseNode $n) => $o->setRetryAttemptCount($n->getIntegerValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getStringValue()),
        ];
    }

    /**
     * Gets the finalCancellationAt property value. Date and time when this Leadping business dunning info was final cancellation.
     * @return DateTime|null
    */
    public function getFinalCancellationAt(): ?DateTime {
        return $this->finalCancellationAt;
    }

    /**
     * Gets the gracePeriodEndsAt property value. Date and time when this Leadping business dunning info was grace period ends.
     * @return DateTime|null
    */
    public function getGracePeriodEndsAt(): ?DateTime {
        return $this->gracePeriodEndsAt;
    }

    /**
     * Gets the lastFailedInvoiceStatus property value. Current last failed invoice status for this Leadping business dunning info.
     * @return string|null
    */
    public function getLastFailedInvoiceStatus(): ?string {
        return $this->lastFailedInvoiceStatus;
    }

    /**
     * Gets the lastUpdatedAt property value. Date and time when this Leadping business dunning info was last updated.
     * @return DateTime|null
    */
    public function getLastUpdatedAt(): ?DateTime {
        return $this->lastUpdatedAt;
    }

    /**
     * Gets the nextRetryAt property value. Date and time when the next retry is scheduled.
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the outboundRestrictedAt property value. Date and time when this Leadping business dunning info was outbound restricted.
     * @return DateTime|null
    */
    public function getOutboundRestrictedAt(): ?DateTime {
        return $this->outboundRestrictedAt;
    }

    /**
     * Gets the outboundSuspendedAt property value. Date and time when this Leadping business dunning info was outbound suspended.
     * @return DateTime|null
    */
    public function getOutboundSuspendedAt(): ?DateTime {
        return $this->outboundSuspendedAt;
    }

    /**
     * Gets the paymentFailedAt property value. Date and time when this Leadping business dunning info was payment failed.
     * @return DateTime|null
    */
    public function getPaymentFailedAt(): ?DateTime {
        return $this->paymentFailedAt;
    }

    /**
     * Gets the retryAttemptCount property value. Total number of retry attempt records represented by this Leadping business dunning info.
     * @return int|null
    */
    public function getRetryAttemptCount(): ?int {
        return $this->retryAttemptCount;
    }

    /**
     * Gets the stage property value. Current stage for this Leadping business dunning info.
     * @return string|null
    */
    public function getStage(): ?string {
        return $this->stage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('finalCancellationAt', $this->getFinalCancellationAt());
        $writer->writeDateTimeValue('gracePeriodEndsAt', $this->getGracePeriodEndsAt());
        $writer->writeStringValue('lastFailedInvoiceStatus', $this->getLastFailedInvoiceStatus());
        $writer->writeDateTimeValue('lastUpdatedAt', $this->getLastUpdatedAt());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeDateTimeValue('outboundRestrictedAt', $this->getOutboundRestrictedAt());
        $writer->writeDateTimeValue('outboundSuspendedAt', $this->getOutboundSuspendedAt());
        $writer->writeDateTimeValue('paymentFailedAt', $this->getPaymentFailedAt());
        $writer->writeIntegerValue('retryAttemptCount', $this->getRetryAttemptCount());
        $writer->writeStringValue('stage', $this->getStage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the finalCancellationAt property value. Date and time when this Leadping business dunning info was final cancellation.
     * @param DateTime|null $value Value to set for the finalCancellationAt property.
    */
    public function setFinalCancellationAt(?DateTime $value): void {
        $this->finalCancellationAt = $value;
    }

    /**
     * Sets the gracePeriodEndsAt property value. Date and time when this Leadping business dunning info was grace period ends.
     * @param DateTime|null $value Value to set for the gracePeriodEndsAt property.
    */
    public function setGracePeriodEndsAt(?DateTime $value): void {
        $this->gracePeriodEndsAt = $value;
    }

    /**
     * Sets the lastFailedInvoiceStatus property value. Current last failed invoice status for this Leadping business dunning info.
     * @param string|null $value Value to set for the lastFailedInvoiceStatus property.
    */
    public function setLastFailedInvoiceStatus(?string $value): void {
        $this->lastFailedInvoiceStatus = $value;
    }

    /**
     * Sets the lastUpdatedAt property value. Date and time when this Leadping business dunning info was last updated.
     * @param DateTime|null $value Value to set for the lastUpdatedAt property.
    */
    public function setLastUpdatedAt(?DateTime $value): void {
        $this->lastUpdatedAt = $value;
    }

    /**
     * Sets the nextRetryAt property value. Date and time when the next retry is scheduled.
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the outboundRestrictedAt property value. Date and time when this Leadping business dunning info was outbound restricted.
     * @param DateTime|null $value Value to set for the outboundRestrictedAt property.
    */
    public function setOutboundRestrictedAt(?DateTime $value): void {
        $this->outboundRestrictedAt = $value;
    }

    /**
     * Sets the outboundSuspendedAt property value. Date and time when this Leadping business dunning info was outbound suspended.
     * @param DateTime|null $value Value to set for the outboundSuspendedAt property.
    */
    public function setOutboundSuspendedAt(?DateTime $value): void {
        $this->outboundSuspendedAt = $value;
    }

    /**
     * Sets the paymentFailedAt property value. Date and time when this Leadping business dunning info was payment failed.
     * @param DateTime|null $value Value to set for the paymentFailedAt property.
    */
    public function setPaymentFailedAt(?DateTime $value): void {
        $this->paymentFailedAt = $value;
    }

    /**
     * Sets the retryAttemptCount property value. Total number of retry attempt records represented by this Leadping business dunning info.
     * @param int|null $value Value to set for the retryAttemptCount property.
    */
    public function setRetryAttemptCount(?int $value): void {
        $this->retryAttemptCount = $value;
    }

    /**
     * Sets the stage property value. Current stage for this Leadping business dunning info.
     * @param string|null $value Value to set for the stage property.
    */
    public function setStage(?string $value): void {
        $this->stage = $value;
    }

}
