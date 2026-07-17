<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents outbound queue item data used by Leadping.
*/
class OutboundQueueItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var OutboundDeliveryChannel|null $channel Channel classification for this Leadping outbound queue item.
    */
    private ?OutboundDeliveryChannel $channel = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the outbound queue item.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $phoneNumber Phone number associated with this Leadping outbound queue item.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $reason Human-readable explanation for the current outbound queue item outcome.
    */
    private ?string $reason = null;
    
    /**
     * @var OutboundQueueItem_reasonCode|null $reasonCode Structured reason codes for outbound pacing and blocking decisions.
    */
    private ?OutboundQueueItem_reasonCode $reasonCode = null;
    
    /**
     * @var DateTime|null $scheduledSendAt Date and time when this Leadping outbound queue item was scheduled send.
    */
    private ?DateTime $scheduledSendAt = null;
    
    /**
     * @var OutboundDeliverySource|null $source Source classification for this Leadping outbound queue item.
    */
    private ?OutboundDeliverySource $source = null;
    
    /**
     * @var OutboundDeliveryStatus|null $status Current status for this Leadping outbound queue item.
    */
    private ?OutboundDeliveryStatus $status = null;
    
    /**
     * Instantiates a new OutboundQueueItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutboundQueueItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutboundQueueItem {
        return new OutboundQueueItem();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the channel property value. Channel classification for this Leadping outbound queue item.
     * @return OutboundDeliveryChannel|null
    */
    public function getChannel(): ?OutboundDeliveryChannel {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(OutboundDeliveryChannel::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'reasonCode' => fn(ParseNode $n) => $o->setReasonCode($n->getEnumValue(OutboundQueueItem_reasonCode::class)),
            'scheduledSendAt' => fn(ParseNode $n) => $o->setScheduledSendAt($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(OutboundDeliverySource::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OutboundDeliveryStatus::class)),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the outbound queue item.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the phoneNumber property value. Phone number associated with this Leadping outbound queue item.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the reason property value. Human-readable explanation for the current outbound queue item outcome.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the reasonCode property value. Structured reason codes for outbound pacing and blocking decisions.
     * @return OutboundQueueItem_reasonCode|null
    */
    public function getReasonCode(): ?OutboundQueueItem_reasonCode {
        return $this->reasonCode;
    }

    /**
     * Gets the scheduledSendAt property value. Date and time when this Leadping outbound queue item was scheduled send.
     * @return DateTime|null
    */
    public function getScheduledSendAt(): ?DateTime {
        return $this->scheduledSendAt;
    }

    /**
     * Gets the source property value. Source classification for this Leadping outbound queue item.
     * @return OutboundDeliverySource|null
    */
    public function getSource(): ?OutboundDeliverySource {
        return $this->source;
    }

    /**
     * Gets the status property value. Current status for this Leadping outbound queue item.
     * @return OutboundDeliveryStatus|null
    */
    public function getStatus(): ?OutboundDeliveryStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeEnumValue('reasonCode', $this->getReasonCode());
        $writer->writeDateTimeValue('scheduledSendAt', $this->getScheduledSendAt());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the channel property value. Channel classification for this Leadping outbound queue item.
     * @param OutboundDeliveryChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?OutboundDeliveryChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the outbound queue item.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number associated with this Leadping outbound queue item.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the reason property value. Human-readable explanation for the current outbound queue item outcome.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the reasonCode property value. Structured reason codes for outbound pacing and blocking decisions.
     * @param OutboundQueueItem_reasonCode|null $value Value to set for the reasonCode property.
    */
    public function setReasonCode(?OutboundQueueItem_reasonCode $value): void {
        $this->reasonCode = $value;
    }

    /**
     * Sets the scheduledSendAt property value. Date and time when this Leadping outbound queue item was scheduled send.
     * @param DateTime|null $value Value to set for the scheduledSendAt property.
    */
    public function setScheduledSendAt(?DateTime $value): void {
        $this->scheduledSendAt = $value;
    }

    /**
     * Sets the source property value. Source classification for this Leadping outbound queue item.
     * @param OutboundDeliverySource|null $value Value to set for the source property.
    */
    public function setSource(?OutboundDeliverySource $value): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. Current status for this Leadping outbound queue item.
     * @param OutboundDeliveryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OutboundDeliveryStatus $value): void {
        $this->status = $value;
    }

}
