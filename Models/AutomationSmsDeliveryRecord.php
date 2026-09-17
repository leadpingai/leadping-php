<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Delivery outcome of the persisted SMS. Workflow steps advance on command acceptance, without waiting for delivery.
*/
class AutomationSmsDeliveryRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $errorCode Machine-readable delivery failure code.
    */
    private ?string $errorCode = null;
    
    /**
     * @var DateTime|null $nextRetryAt UTC time of the next automatic delivery retry, if any.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var string|null $reason Redacted reason supplied by the delivery pipeline.
    */
    private ?string $reason = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC time at which the SMS is scheduled to send.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var string|null $smsEventId Durable SMS event ID used to read subsequent delivery outcomes.
    */
    private ?string $smsEventId = null;
    
    /**
     * @var AutomationSmsDeliveryRecord_status|null $status Describes the normalized lifecycle of an SMS or MMS message from scheduling through delivery or failure.
    */
    private ?AutomationSmsDeliveryRecord_status $status = null;
    
    /**
     * @var string|null $summary Customer-safe delivery summary and suggested next action.
    */
    private ?string $summary = null;
    
    /**
     * Instantiates a new AutomationSmsDeliveryRecord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationSmsDeliveryRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationSmsDeliveryRecord {
        return new AutomationSmsDeliveryRecord();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errorCode property value. Machine-readable delivery failure code.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'smsEventId' => fn(ParseNode $n) => $o->setSmsEventId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AutomationSmsDeliveryRecord_status::class)),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
        ];
    }

    /**
     * Gets the nextRetryAt property value. UTC time of the next automatic delivery retry, if any.
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the reason property value. Redacted reason supplied by the delivery pipeline.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the scheduledFor property value. UTC time at which the SMS is scheduled to send.
     * @return DateTime|null
    */
    public function getScheduledFor(): ?DateTime {
        return $this->scheduledFor;
    }

    /**
     * Gets the smsEventId property value. Durable SMS event ID used to read subsequent delivery outcomes.
     * @return string|null
    */
    public function getSmsEventId(): ?string {
        return $this->smsEventId;
    }

    /**
     * Gets the status property value. Describes the normalized lifecycle of an SMS or MMS message from scheduling through delivery or failure.
     * @return AutomationSmsDeliveryRecord_status|null
    */
    public function getStatus(): ?AutomationSmsDeliveryRecord_status {
        return $this->status;
    }

    /**
     * Gets the summary property value. Customer-safe delivery summary and suggested next action.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeStringValue('smsEventId', $this->getSmsEventId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('summary', $this->getSummary());
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
     * Sets the errorCode property value. Machine-readable delivery failure code.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the nextRetryAt property value. UTC time of the next automatic delivery retry, if any.
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the reason property value. Redacted reason supplied by the delivery pipeline.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the scheduledFor property value. UTC time at which the SMS is scheduled to send.
     * @param DateTime|null $value Value to set for the scheduledFor property.
    */
    public function setScheduledFor(?DateTime $value): void {
        $this->scheduledFor = $value;
    }

    /**
     * Sets the smsEventId property value. Durable SMS event ID used to read subsequent delivery outcomes.
     * @param string|null $value Value to set for the smsEventId property.
    */
    public function setSmsEventId(?string $value): void {
        $this->smsEventId = $value;
    }

    /**
     * Sets the status property value. Describes the normalized lifecycle of an SMS or MMS message from scheduling through delivery or failure.
     * @param AutomationSmsDeliveryRecord_status|null $value Value to set for the status property.
    */
    public function setStatus(?AutomationSmsDeliveryRecord_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the summary property value. Customer-safe delivery summary and suggested next action.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
    }

}
