<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An immutable snapshot of an appointment change and its actor.
*/
class AppointmentActivity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorId The actorId property
    */
    private ?string $actorId = null;
    
    /**
     * @var string|null $actorName The actorName property
    */
    private ?string $actorName = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $assignedToName The assignedToName property
    */
    private ?string $assignedToName = null;
    
    /**
     * @var DateTime|null $at The at property
    */
    private ?DateTime $at = null;
    
    /**
     * @var string|null $notes The notes property
    */
    private ?string $notes = null;
    
    /**
     * @var DateTime|null $reminderAt The reminderAt property
    */
    private ?DateTime $reminderAt = null;
    
    /**
     * @var int|null $revision The revision property
    */
    private ?int $revision = null;
    
    /**
     * @var DateTime|null $startAt The startAt property
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new AppointmentActivity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppointmentActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppointmentActivity {
        return new AppointmentActivity();
    }

    /**
     * Gets the actorId property value. The actorId property
     * @return string|null
    */
    public function getActorId(): ?string {
        return $this->actorId;
    }

    /**
     * Gets the actorName property value. The actorName property
     * @return string|null
    */
    public function getActorName(): ?string {
        return $this->actorName;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedToName property value. The assignedToName property
     * @return string|null
    */
    public function getAssignedToName(): ?string {
        return $this->assignedToName;
    }

    /**
     * Gets the at property value. The at property
     * @return DateTime|null
    */
    public function getAt(): ?DateTime {
        return $this->at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorId' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'actorName' => fn(ParseNode $n) => $o->setActorName($n->getStringValue()),
            'assignedToName' => fn(ParseNode $n) => $o->setAssignedToName($n->getStringValue()),
            'at' => fn(ParseNode $n) => $o->setAt($n->getDateTimeValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'reminderAt' => fn(ParseNode $n) => $o->setReminderAt($n->getDateTimeValue()),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getIntegerValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the notes property value. The notes property
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the reminderAt property value. The reminderAt property
     * @return DateTime|null
    */
    public function getReminderAt(): ?DateTime {
        return $this->reminderAt;
    }

    /**
     * Gets the revision property value. The revision property
     * @return int|null
    */
    public function getRevision(): ?int {
        return $this->revision;
    }

    /**
     * Gets the startAt property value. The startAt property
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the type property value. The type property
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
        $writer->writeStringValue('actorId', $this->getActorId());
        $writer->writeStringValue('actorName', $this->getActorName());
        $writer->writeStringValue('assignedToName', $this->getAssignedToName());
        $writer->writeDateTimeValue('at', $this->getAt());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeDateTimeValue('reminderAt', $this->getReminderAt());
        $writer->writeIntegerValue('revision', $this->getRevision());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorId property value. The actorId property
     * @param string|null $value Value to set for the actorId property.
    */
    public function setActorId(?string $value): void {
        $this->actorId = $value;
    }

    /**
     * Sets the actorName property value. The actorName property
     * @param string|null $value Value to set for the actorName property.
    */
    public function setActorName(?string $value): void {
        $this->actorName = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the assignedToName property value. The assignedToName property
     * @param string|null $value Value to set for the assignedToName property.
    */
    public function setAssignedToName(?string $value): void {
        $this->assignedToName = $value;
    }

    /**
     * Sets the at property value. The at property
     * @param DateTime|null $value Value to set for the at property.
    */
    public function setAt(?DateTime $value): void {
        $this->at = $value;
    }

    /**
     * Sets the notes property value. The notes property
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the reminderAt property value. The reminderAt property
     * @param DateTime|null $value Value to set for the reminderAt property.
    */
    public function setReminderAt(?DateTime $value): void {
        $this->reminderAt = $value;
    }

    /**
     * Sets the revision property value. The revision property
     * @param int|null $value Value to set for the revision property.
    */
    public function setRevision(?int $value): void {
        $this->revision = $value;
    }

    /**
     * Sets the startAt property value. The startAt property
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
