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
class UserDunningInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $finalCancellationAt The finalCancellationAt property
    */
    private ?DateTime $finalCancellationAt = null;
    
    /**
     * @var DateTime|null $gracePeriodEndsAt The gracePeriodEndsAt property
    */
    private ?DateTime $gracePeriodEndsAt = null;
    
    /**
     * @var string|null $lastFailedInvoiceId The lastFailedInvoiceId property
    */
    private ?string $lastFailedInvoiceId = null;
    
    /**
     * @var string|null $lastFailedInvoiceStatus The lastFailedInvoiceStatus property
    */
    private ?string $lastFailedInvoiceStatus = null;
    
    /**
     * @var DateTime|null $lastUpdatedAt The lastUpdatedAt property
    */
    private ?DateTime $lastUpdatedAt = null;
    
    /**
     * @var DateTime|null $nextRetryAt The nextRetryAt property
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var DateTime|null $outboundRestrictedAt The outboundRestrictedAt property
    */
    private ?DateTime $outboundRestrictedAt = null;
    
    /**
     * @var DateTime|null $outboundSuspendedAt The outboundSuspendedAt property
    */
    private ?DateTime $outboundSuspendedAt = null;
    
    /**
     * @var DateTime|null $paymentFailedAt The paymentFailedAt property
    */
    private ?DateTime $paymentFailedAt = null;
    
    /**
     * @var int|null $retryAttemptCount The retryAttemptCount property
    */
    private ?int $retryAttemptCount = null;
    
    /**
     * @var string|null $stage The stage property
    */
    private ?string $stage = null;
    
    /**
     * Instantiates a new UserDunningInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserDunningInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserDunningInfo {
        return new UserDunningInfo();
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
            'lastFailedInvoiceId' => fn(ParseNode $n) => $o->setLastFailedInvoiceId($n->getStringValue()),
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
     * Gets the finalCancellationAt property value. The finalCancellationAt property
     * @return DateTime|null
    */
    public function getFinalCancellationAt(): ?DateTime {
        return $this->finalCancellationAt;
    }

    /**
     * Gets the gracePeriodEndsAt property value. The gracePeriodEndsAt property
     * @return DateTime|null
    */
    public function getGracePeriodEndsAt(): ?DateTime {
        return $this->gracePeriodEndsAt;
    }

    /**
     * Gets the lastFailedInvoiceId property value. The lastFailedInvoiceId property
     * @return string|null
    */
    public function getLastFailedInvoiceId(): ?string {
        return $this->lastFailedInvoiceId;
    }

    /**
     * Gets the lastFailedInvoiceStatus property value. The lastFailedInvoiceStatus property
     * @return string|null
    */
    public function getLastFailedInvoiceStatus(): ?string {
        return $this->lastFailedInvoiceStatus;
    }

    /**
     * Gets the lastUpdatedAt property value. The lastUpdatedAt property
     * @return DateTime|null
    */
    public function getLastUpdatedAt(): ?DateTime {
        return $this->lastUpdatedAt;
    }

    /**
     * Gets the nextRetryAt property value. The nextRetryAt property
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the outboundRestrictedAt property value. The outboundRestrictedAt property
     * @return DateTime|null
    */
    public function getOutboundRestrictedAt(): ?DateTime {
        return $this->outboundRestrictedAt;
    }

    /**
     * Gets the outboundSuspendedAt property value. The outboundSuspendedAt property
     * @return DateTime|null
    */
    public function getOutboundSuspendedAt(): ?DateTime {
        return $this->outboundSuspendedAt;
    }

    /**
     * Gets the paymentFailedAt property value. The paymentFailedAt property
     * @return DateTime|null
    */
    public function getPaymentFailedAt(): ?DateTime {
        return $this->paymentFailedAt;
    }

    /**
     * Gets the retryAttemptCount property value. The retryAttemptCount property
     * @return int|null
    */
    public function getRetryAttemptCount(): ?int {
        return $this->retryAttemptCount;
    }

    /**
     * Gets the stage property value. The stage property
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
        $writer->writeStringValue('lastFailedInvoiceId', $this->getLastFailedInvoiceId());
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
     * Sets the finalCancellationAt property value. The finalCancellationAt property
     * @param DateTime|null $value Value to set for the finalCancellationAt property.
    */
    public function setFinalCancellationAt(?DateTime $value): void {
        $this->finalCancellationAt = $value;
    }

    /**
     * Sets the gracePeriodEndsAt property value. The gracePeriodEndsAt property
     * @param DateTime|null $value Value to set for the gracePeriodEndsAt property.
    */
    public function setGracePeriodEndsAt(?DateTime $value): void {
        $this->gracePeriodEndsAt = $value;
    }

    /**
     * Sets the lastFailedInvoiceId property value. The lastFailedInvoiceId property
     * @param string|null $value Value to set for the lastFailedInvoiceId property.
    */
    public function setLastFailedInvoiceId(?string $value): void {
        $this->lastFailedInvoiceId = $value;
    }

    /**
     * Sets the lastFailedInvoiceStatus property value. The lastFailedInvoiceStatus property
     * @param string|null $value Value to set for the lastFailedInvoiceStatus property.
    */
    public function setLastFailedInvoiceStatus(?string $value): void {
        $this->lastFailedInvoiceStatus = $value;
    }

    /**
     * Sets the lastUpdatedAt property value. The lastUpdatedAt property
     * @param DateTime|null $value Value to set for the lastUpdatedAt property.
    */
    public function setLastUpdatedAt(?DateTime $value): void {
        $this->lastUpdatedAt = $value;
    }

    /**
     * Sets the nextRetryAt property value. The nextRetryAt property
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the outboundRestrictedAt property value. The outboundRestrictedAt property
     * @param DateTime|null $value Value to set for the outboundRestrictedAt property.
    */
    public function setOutboundRestrictedAt(?DateTime $value): void {
        $this->outboundRestrictedAt = $value;
    }

    /**
     * Sets the outboundSuspendedAt property value. The outboundSuspendedAt property
     * @param DateTime|null $value Value to set for the outboundSuspendedAt property.
    */
    public function setOutboundSuspendedAt(?DateTime $value): void {
        $this->outboundSuspendedAt = $value;
    }

    /**
     * Sets the paymentFailedAt property value. The paymentFailedAt property
     * @param DateTime|null $value Value to set for the paymentFailedAt property.
    */
    public function setPaymentFailedAt(?DateTime $value): void {
        $this->paymentFailedAt = $value;
    }

    /**
     * Sets the retryAttemptCount property value. The retryAttemptCount property
     * @param int|null $value Value to set for the retryAttemptCount property.
    */
    public function setRetryAttemptCount(?int $value): void {
        $this->retryAttemptCount = $value;
    }

    /**
     * Sets the stage property value. The stage property
     * @param string|null $value Value to set for the stage property.
    */
    public function setStage(?string $value): void {
        $this->stage = $value;
    }

}
