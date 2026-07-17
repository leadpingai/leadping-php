<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing activation timeline event data used by Leadping API contracts.
*/
class ActivationTimelineEvent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ActivationTimelineEvent_actor|null $actor The ID and name for this actor.
    */
    private ?ActivationTimelineEvent_actor $actor = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this activation timeline event.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $details The details value for this activation timeline event.
    */
    private ?string $details = null;
    
    /**
     * @var string|null $failureReason The human-readable failure reason explaining this activation timeline event.
    */
    private ?string $failureReason = null;
    
    /**
     * @var string|null $id The unique ID for this activation timeline event.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $status The current status for this activation timeline event.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $title The title value for this activation timeline event.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $type The type classification for this activation timeline event.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new ActivationTimelineEvent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivationTimelineEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivationTimelineEvent {
        return new ActivationTimelineEvent();
    }

    /**
     * Gets the actor property value. The ID and name for this actor.
     * @return ActivationTimelineEvent_actor|null
    */
    public function getActor(): ?ActivationTimelineEvent_actor {
        return $this->actor;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this activation timeline event.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the details property value. The details value for this activation timeline event.
     * @return string|null
    */
    public function getDetails(): ?string {
        return $this->details;
    }

    /**
     * Gets the failureReason property value. The human-readable failure reason explaining this activation timeline event.
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
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([ActivationTimelineEvent_actor::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getStringValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this activation timeline event.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the status property value. The current status for this activation timeline event.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the title property value. The title value for this activation timeline event.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the type property value. The type classification for this activation timeline event.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('details', $this->getDetails());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actor property value. The ID and name for this actor.
     * @param ActivationTimelineEvent_actor|null $value Value to set for the actor property.
    */
    public function setActor(?ActivationTimelineEvent_actor $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdAt property value. The date and time for the created at value on this activation timeline event.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the details property value. The details value for this activation timeline event.
     * @param string|null $value Value to set for the details property.
    */
    public function setDetails(?string $value): void {
        $this->details = $value;
    }

    /**
     * Sets the failureReason property value. The human-readable failure reason explaining this activation timeline event.
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the id property value. The unique ID for this activation timeline event.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the status property value. The current status for this activation timeline event.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. The title value for this activation timeline event.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the type property value. The type classification for this activation timeline event.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
