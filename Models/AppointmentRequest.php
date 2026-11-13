<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Creates or reschedules an agent's callback appointment.
*/
class AppointmentRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $assignedToUserId The assignedToUserId property
    */
    private ?string $assignedToUserId = null;
    
    /**
     * @var int|null $expectedRevision The expectedRevision property
    */
    private ?int $expectedRevision = null;
    
    /**
     * @var string|null $leadId The leadId property
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $notes The notes property
    */
    private ?string $notes = null;
    
    /**
     * @var DateTime|null $startAt The startAt property
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var string|null $timeZoneId The timeZoneId property
    */
    private ?string $timeZoneId = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new AppointmentRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppointmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppointmentRequest {
        return new AppointmentRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedToUserId property value. The assignedToUserId property
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->assignedToUserId;
    }

    /**
     * Gets the expectedRevision property value. The expectedRevision property
     * @return int|null
    */
    public function getExpectedRevision(): ?int {
        return $this->expectedRevision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedToUserId' => fn(ParseNode $n) => $o->setAssignedToUserId($n->getStringValue()),
            'expectedRevision' => fn(ParseNode $n) => $o->setExpectedRevision($n->getIntegerValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the leadId property value. The leadId property
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the notes property value. The notes property
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the startAt property value. The startAt property
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the timeZoneId property value. The timeZoneId property
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedToUserId', $this->getAssignedToUserId());
        $writer->writeIntegerValue('expectedRevision', $this->getExpectedRevision());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the assignedToUserId property value. The assignedToUserId property
     * @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value): void {
        $this->assignedToUserId = $value;
    }

    /**
     * Sets the expectedRevision property value. The expectedRevision property
     * @param int|null $value Value to set for the expectedRevision property.
    */
    public function setExpectedRevision(?int $value): void {
        $this->expectedRevision = $value;
    }

    /**
     * Sets the leadId property value. The leadId property
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the notes property value. The notes property
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the startAt property value. The startAt property
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the timeZoneId property value. The timeZoneId property
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
