<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing a voice call warmup attempt.
*/
class PhoneNumberWarmupCallResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $answeredAt The answeredAt property
    */
    private ?DateTime $answeredAt = null;
    
    /**
     * @var DateTime|null $completedAt The completedAt property
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var string|null $destinationPhoneNumber The destinationPhoneNumber property
    */
    private ?string $destinationPhoneNumber = null;
    
    /**
     * @var string|null $destinationPhoneNumberId The destinationPhoneNumberId property
    */
    private ?string $destinationPhoneNumberId = null;
    
    /**
     * @var string|null $failureReason The failureReason property
    */
    private ?string $failureReason = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $scheduledAt The scheduledAt property
    */
    private ?DateTime $scheduledAt = null;
    
    /**
     * @var string|null $sourcePhoneNumber The sourcePhoneNumber property
    */
    private ?string $sourcePhoneNumber = null;
    
    /**
     * @var string|null $sourcePhoneNumberId The sourcePhoneNumberId property
    */
    private ?string $sourcePhoneNumberId = null;
    
    /**
     * @var PhoneNumberWarmupCallStatus|null $status Defines the durable state machine statuses for voice call warmup attempts.
    */
    private ?PhoneNumberWarmupCallStatus $status = null;
    
    /**
     * @var int|null $targetDurationSeconds The targetDurationSeconds property
    */
    private ?int $targetDurationSeconds = null;
    
    /**
     * Instantiates a new PhoneNumberWarmupCallResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberWarmupCallResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberWarmupCallResponse {
        return new PhoneNumberWarmupCallResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the answeredAt property value. The answeredAt property
     * @return DateTime|null
    */
    public function getAnsweredAt(): ?DateTime {
        return $this->answeredAt;
    }

    /**
     * Gets the completedAt property value. The completedAt property
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the destinationPhoneNumber property value. The destinationPhoneNumber property
     * @return string|null
    */
    public function getDestinationPhoneNumber(): ?string {
        return $this->destinationPhoneNumber;
    }

    /**
     * Gets the destinationPhoneNumberId property value. The destinationPhoneNumberId property
     * @return string|null
    */
    public function getDestinationPhoneNumberId(): ?string {
        return $this->destinationPhoneNumberId;
    }

    /**
     * Gets the failureReason property value. The failureReason property
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'answeredAt' => fn(ParseNode $n) => $o->setAnsweredAt($n->getDateTimeValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'destinationPhoneNumber' => fn(ParseNode $n) => $o->setDestinationPhoneNumber($n->getStringValue()),
            'destinationPhoneNumberId' => fn(ParseNode $n) => $o->setDestinationPhoneNumberId($n->getStringValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'scheduledAt' => fn(ParseNode $n) => $o->setScheduledAt($n->getDateTimeValue()),
            'sourcePhoneNumber' => fn(ParseNode $n) => $o->setSourcePhoneNumber($n->getStringValue()),
            'sourcePhoneNumberId' => fn(ParseNode $n) => $o->setSourcePhoneNumberId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PhoneNumberWarmupCallStatus::class)),
            'targetDurationSeconds' => fn(ParseNode $n) => $o->setTargetDurationSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the scheduledAt property value. The scheduledAt property
     * @return DateTime|null
    */
    public function getScheduledAt(): ?DateTime {
        return $this->scheduledAt;
    }

    /**
     * Gets the sourcePhoneNumber property value. The sourcePhoneNumber property
     * @return string|null
    */
    public function getSourcePhoneNumber(): ?string {
        return $this->sourcePhoneNumber;
    }

    /**
     * Gets the sourcePhoneNumberId property value. The sourcePhoneNumberId property
     * @return string|null
    */
    public function getSourcePhoneNumberId(): ?string {
        return $this->sourcePhoneNumberId;
    }

    /**
     * Gets the status property value. Defines the durable state machine statuses for voice call warmup attempts.
     * @return PhoneNumberWarmupCallStatus|null
    */
    public function getStatus(): ?PhoneNumberWarmupCallStatus {
        return $this->status;
    }

    /**
     * Gets the targetDurationSeconds property value. The targetDurationSeconds property
     * @return int|null
    */
    public function getTargetDurationSeconds(): ?int {
        return $this->targetDurationSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('answeredAt', $this->getAnsweredAt());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeStringValue('destinationPhoneNumber', $this->getDestinationPhoneNumber());
        $writer->writeStringValue('destinationPhoneNumberId', $this->getDestinationPhoneNumberId());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('scheduledAt', $this->getScheduledAt());
        $writer->writeStringValue('sourcePhoneNumber', $this->getSourcePhoneNumber());
        $writer->writeStringValue('sourcePhoneNumberId', $this->getSourcePhoneNumberId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeIntegerValue('targetDurationSeconds', $this->getTargetDurationSeconds());
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
     * Sets the answeredAt property value. The answeredAt property
     * @param DateTime|null $value Value to set for the answeredAt property.
    */
    public function setAnsweredAt(?DateTime $value): void {
        $this->answeredAt = $value;
    }

    /**
     * Sets the completedAt property value. The completedAt property
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the destinationPhoneNumber property value. The destinationPhoneNumber property
     * @param string|null $value Value to set for the destinationPhoneNumber property.
    */
    public function setDestinationPhoneNumber(?string $value): void {
        $this->destinationPhoneNumber = $value;
    }

    /**
     * Sets the destinationPhoneNumberId property value. The destinationPhoneNumberId property
     * @param string|null $value Value to set for the destinationPhoneNumberId property.
    */
    public function setDestinationPhoneNumberId(?string $value): void {
        $this->destinationPhoneNumberId = $value;
    }

    /**
     * Sets the failureReason property value. The failureReason property
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the scheduledAt property value. The scheduledAt property
     * @param DateTime|null $value Value to set for the scheduledAt property.
    */
    public function setScheduledAt(?DateTime $value): void {
        $this->scheduledAt = $value;
    }

    /**
     * Sets the sourcePhoneNumber property value. The sourcePhoneNumber property
     * @param string|null $value Value to set for the sourcePhoneNumber property.
    */
    public function setSourcePhoneNumber(?string $value): void {
        $this->sourcePhoneNumber = $value;
    }

    /**
     * Sets the sourcePhoneNumberId property value. The sourcePhoneNumberId property
     * @param string|null $value Value to set for the sourcePhoneNumberId property.
    */
    public function setSourcePhoneNumberId(?string $value): void {
        $this->sourcePhoneNumberId = $value;
    }

    /**
     * Sets the status property value. Defines the durable state machine statuses for voice call warmup attempts.
     * @param PhoneNumberWarmupCallStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PhoneNumberWarmupCallStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the targetDurationSeconds property value. The targetDurationSeconds property
     * @param int|null $value Value to set for the targetDurationSeconds property.
    */
    public function setTargetDurationSeconds(?int $value): void {
        $this->targetDurationSeconds = $value;
    }

}
