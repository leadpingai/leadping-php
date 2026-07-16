<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response model for disposition data.
*/
class DispositionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $appointmentEndAt The date and time for the appointment end at value on this disposition.
    */
    private ?DateTime $appointmentEndAt = null;
    
    /**
     * @var string|null $appointmentNotes The appointment notes value for this disposition.
    */
    private ?string $appointmentNotes = null;
    
    /**
     * @var DateTime|null $appointmentStartAt The date and time for the appointment start at value on this disposition.
    */
    private ?DateTime $appointmentStartAt = null;
    
    /**
     * @var string|null $assignedToUserId The assigned to user ID associated with this disposition.
    */
    private ?string $assignedToUserId = null;
    
    /**
     * @var DateTime|null $callbackAt The date and time for the callback at value on this disposition.
    */
    private ?DateTime $callbackAt = null;
    
    /**
     * @var DispositionResponse_category|null $category Controlled disposition categories used for reporting, automation, and analytics.
    */
    private ?DispositionResponse_category $category = null;
    
    /**
     * @var DateTime|null $changedAt Date and time when the disposition change occurred.
    */
    private ?DateTime $changedAt = null;
    
    /**
     * @var string|null $changedByAutomationId Unique identifier of the automation that changed the disposition, when applicable.
    */
    private ?string $changedByAutomationId = null;
    
    /**
     * @var string|null $changedByUserId Unique identifier of the Leadping user who made the change.
    */
    private ?string $changedByUserId = null;
    
    /**
     * @var DispositionResponse_changeSource|null $changeSource Known sources that can change a lead's current disposition.
    */
    private ?DispositionResponse_changeSource $changeSource = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this disposition.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $followUpStatus The current follow up status for this disposition.
    */
    private ?string $followUpStatus = null;
    
    /**
     * @var string|null $id The unique ID for this disposition.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isMissedCallFollowUp Whether this disposition is missed call follow up.
    */
    private ?bool $isMissedCallFollowUp = null;
    
    /**
     * @var string|null $leadId The lead ID associated with this disposition.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $newDispositionId Unique identifier of the new disposition associated with this Leadping disposition.
    */
    private ?string $newDispositionId = null;
    
    /**
     * @var string|null $notes The operator or customer notes recorded for this disposition.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $oldDispositionId Unique identifier of the old disposition associated with this Leadping disposition.
    */
    private ?string $oldDispositionId = null;
    
    /**
     * @var string|null $oldDispositionOutcome Old disposition outcome associated with this Leadping disposition.
    */
    private ?string $oldDispositionOutcome = null;
    
    /**
     * @var string|null $oldDispositionType Old disposition type classification for this Leadping disposition.
    */
    private ?string $oldDispositionType = null;
    
    /**
     * @var string|null $outcome The outcome value for this disposition.
    */
    private ?string $outcome = null;
    
    /**
     * @var string|null $reason The reason this disposition was changed.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $relatedCallEventId The related call event ID associated with this disposition.
    */
    private ?string $relatedCallEventId = null;
    
    /**
     * @var string|null $sourceId The source ID associated with this disposition.
    */
    private ?string $sourceId = null;
    
    /**
     * @var DateTime|null $taskDueAt The date and time for the task due at value on this disposition.
    */
    private ?DateTime $taskDueAt = null;
    
    /**
     * @var DateTime|null $timestamp The date and time for the timestamp value on this disposition.
    */
    private ?DateTime $timestamp = null;
    
    /**
     * @var string|null $type The type classification for this disposition.
    */
    private ?string $type = null;
    
    /**
     * @var DateTime|null $updatedAt The date and time for the updated at value on this disposition.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * Instantiates a new DispositionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DispositionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DispositionResponse {
        return new DispositionResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appointmentEndAt property value. The date and time for the appointment end at value on this disposition.
     * @return DateTime|null
    */
    public function getAppointmentEndAt(): ?DateTime {
        return $this->appointmentEndAt;
    }

    /**
     * Gets the appointmentNotes property value. The appointment notes value for this disposition.
     * @return string|null
    */
    public function getAppointmentNotes(): ?string {
        return $this->appointmentNotes;
    }

    /**
     * Gets the appointmentStartAt property value. The date and time for the appointment start at value on this disposition.
     * @return DateTime|null
    */
    public function getAppointmentStartAt(): ?DateTime {
        return $this->appointmentStartAt;
    }

    /**
     * Gets the assignedToUserId property value. The assigned to user ID associated with this disposition.
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->assignedToUserId;
    }

    /**
     * Gets the callbackAt property value. The date and time for the callback at value on this disposition.
     * @return DateTime|null
    */
    public function getCallbackAt(): ?DateTime {
        return $this->callbackAt;
    }

    /**
     * Gets the category property value. Controlled disposition categories used for reporting, automation, and analytics.
     * @return DispositionResponse_category|null
    */
    public function getCategory(): ?DispositionResponse_category {
        return $this->category;
    }

    /**
     * Gets the changedAt property value. Date and time when the disposition change occurred.
     * @return DateTime|null
    */
    public function getChangedAt(): ?DateTime {
        return $this->changedAt;
    }

    /**
     * Gets the changedByAutomationId property value. Unique identifier of the automation that changed the disposition, when applicable.
     * @return string|null
    */
    public function getChangedByAutomationId(): ?string {
        return $this->changedByAutomationId;
    }

    /**
     * Gets the changedByUserId property value. Unique identifier of the Leadping user who made the change.
     * @return string|null
    */
    public function getChangedByUserId(): ?string {
        return $this->changedByUserId;
    }

    /**
     * Gets the changeSource property value. Known sources that can change a lead's current disposition.
     * @return DispositionResponse_changeSource|null
    */
    public function getChangeSource(): ?DispositionResponse_changeSource {
        return $this->changeSource;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this disposition.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appointmentEndAt' => fn(ParseNode $n) => $o->setAppointmentEndAt($n->getDateTimeValue()),
            'appointmentNotes' => fn(ParseNode $n) => $o->setAppointmentNotes($n->getStringValue()),
            'appointmentStartAt' => fn(ParseNode $n) => $o->setAppointmentStartAt($n->getDateTimeValue()),
            'assignedToUserId' => fn(ParseNode $n) => $o->setAssignedToUserId($n->getStringValue()),
            'callbackAt' => fn(ParseNode $n) => $o->setCallbackAt($n->getDateTimeValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(DispositionResponse_category::class)),
            'changedAt' => fn(ParseNode $n) => $o->setChangedAt($n->getDateTimeValue()),
            'changedByAutomationId' => fn(ParseNode $n) => $o->setChangedByAutomationId($n->getStringValue()),
            'changedByUserId' => fn(ParseNode $n) => $o->setChangedByUserId($n->getStringValue()),
            'changeSource' => fn(ParseNode $n) => $o->setChangeSource($n->getEnumValue(DispositionResponse_changeSource::class)),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'followUpStatus' => fn(ParseNode $n) => $o->setFollowUpStatus($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isMissedCallFollowUp' => fn(ParseNode $n) => $o->setIsMissedCallFollowUp($n->getBooleanValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'newDispositionId' => fn(ParseNode $n) => $o->setNewDispositionId($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'oldDispositionId' => fn(ParseNode $n) => $o->setOldDispositionId($n->getStringValue()),
            'oldDispositionOutcome' => fn(ParseNode $n) => $o->setOldDispositionOutcome($n->getStringValue()),
            'oldDispositionType' => fn(ParseNode $n) => $o->setOldDispositionType($n->getStringValue()),
            'outcome' => fn(ParseNode $n) => $o->setOutcome($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'relatedCallEventId' => fn(ParseNode $n) => $o->setRelatedCallEventId($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'taskDueAt' => fn(ParseNode $n) => $o->setTaskDueAt($n->getDateTimeValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the followUpStatus property value. The current follow up status for this disposition.
     * @return string|null
    */
    public function getFollowUpStatus(): ?string {
        return $this->followUpStatus;
    }

    /**
     * Gets the id property value. The unique ID for this disposition.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isMissedCallFollowUp property value. Whether this disposition is missed call follow up.
     * @return bool|null
    */
    public function getIsMissedCallFollowUp(): ?bool {
        return $this->isMissedCallFollowUp;
    }

    /**
     * Gets the leadId property value. The lead ID associated with this disposition.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the newDispositionId property value. Unique identifier of the new disposition associated with this Leadping disposition.
     * @return string|null
    */
    public function getNewDispositionId(): ?string {
        return $this->newDispositionId;
    }

    /**
     * Gets the notes property value. The operator or customer notes recorded for this disposition.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the oldDispositionId property value. Unique identifier of the old disposition associated with this Leadping disposition.
     * @return string|null
    */
    public function getOldDispositionId(): ?string {
        return $this->oldDispositionId;
    }

    /**
     * Gets the oldDispositionOutcome property value. Old disposition outcome associated with this Leadping disposition.
     * @return string|null
    */
    public function getOldDispositionOutcome(): ?string {
        return $this->oldDispositionOutcome;
    }

    /**
     * Gets the oldDispositionType property value. Old disposition type classification for this Leadping disposition.
     * @return string|null
    */
    public function getOldDispositionType(): ?string {
        return $this->oldDispositionType;
    }

    /**
     * Gets the outcome property value. The outcome value for this disposition.
     * @return string|null
    */
    public function getOutcome(): ?string {
        return $this->outcome;
    }

    /**
     * Gets the reason property value. The reason this disposition was changed.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the relatedCallEventId property value. The related call event ID associated with this disposition.
     * @return string|null
    */
    public function getRelatedCallEventId(): ?string {
        return $this->relatedCallEventId;
    }

    /**
     * Gets the sourceId property value. The source ID associated with this disposition.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the taskDueAt property value. The date and time for the task due at value on this disposition.
     * @return DateTime|null
    */
    public function getTaskDueAt(): ?DateTime {
        return $this->taskDueAt;
    }

    /**
     * Gets the timestamp property value. The date and time for the timestamp value on this disposition.
     * @return DateTime|null
    */
    public function getTimestamp(): ?DateTime {
        return $this->timestamp;
    }

    /**
     * Gets the type property value. The type classification for this disposition.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the updatedAt property value. The date and time for the updated at value on this disposition.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('appointmentEndAt', $this->getAppointmentEndAt());
        $writer->writeStringValue('appointmentNotes', $this->getAppointmentNotes());
        $writer->writeDateTimeValue('appointmentStartAt', $this->getAppointmentStartAt());
        $writer->writeStringValue('assignedToUserId', $this->getAssignedToUserId());
        $writer->writeDateTimeValue('callbackAt', $this->getCallbackAt());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('changedAt', $this->getChangedAt());
        $writer->writeStringValue('changedByAutomationId', $this->getChangedByAutomationId());
        $writer->writeStringValue('changedByUserId', $this->getChangedByUserId());
        $writer->writeEnumValue('changeSource', $this->getChangeSource());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('followUpStatus', $this->getFollowUpStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isMissedCallFollowUp', $this->getIsMissedCallFollowUp());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('newDispositionId', $this->getNewDispositionId());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('oldDispositionId', $this->getOldDispositionId());
        $writer->writeStringValue('oldDispositionOutcome', $this->getOldDispositionOutcome());
        $writer->writeStringValue('oldDispositionType', $this->getOldDispositionType());
        $writer->writeStringValue('outcome', $this->getOutcome());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('relatedCallEventId', $this->getRelatedCallEventId());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeDateTimeValue('taskDueAt', $this->getTaskDueAt());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
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
     * Sets the appointmentEndAt property value. The date and time for the appointment end at value on this disposition.
     * @param DateTime|null $value Value to set for the appointmentEndAt property.
    */
    public function setAppointmentEndAt(?DateTime $value): void {
        $this->appointmentEndAt = $value;
    }

    /**
     * Sets the appointmentNotes property value. The appointment notes value for this disposition.
     * @param string|null $value Value to set for the appointmentNotes property.
    */
    public function setAppointmentNotes(?string $value): void {
        $this->appointmentNotes = $value;
    }

    /**
     * Sets the appointmentStartAt property value. The date and time for the appointment start at value on this disposition.
     * @param DateTime|null $value Value to set for the appointmentStartAt property.
    */
    public function setAppointmentStartAt(?DateTime $value): void {
        $this->appointmentStartAt = $value;
    }

    /**
     * Sets the assignedToUserId property value. The assigned to user ID associated with this disposition.
     * @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value): void {
        $this->assignedToUserId = $value;
    }

    /**
     * Sets the callbackAt property value. The date and time for the callback at value on this disposition.
     * @param DateTime|null $value Value to set for the callbackAt property.
    */
    public function setCallbackAt(?DateTime $value): void {
        $this->callbackAt = $value;
    }

    /**
     * Sets the category property value. Controlled disposition categories used for reporting, automation, and analytics.
     * @param DispositionResponse_category|null $value Value to set for the category property.
    */
    public function setCategory(?DispositionResponse_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the changedAt property value. Date and time when the disposition change occurred.
     * @param DateTime|null $value Value to set for the changedAt property.
    */
    public function setChangedAt(?DateTime $value): void {
        $this->changedAt = $value;
    }

    /**
     * Sets the changedByAutomationId property value. Unique identifier of the automation that changed the disposition, when applicable.
     * @param string|null $value Value to set for the changedByAutomationId property.
    */
    public function setChangedByAutomationId(?string $value): void {
        $this->changedByAutomationId = $value;
    }

    /**
     * Sets the changedByUserId property value. Unique identifier of the Leadping user who made the change.
     * @param string|null $value Value to set for the changedByUserId property.
    */
    public function setChangedByUserId(?string $value): void {
        $this->changedByUserId = $value;
    }

    /**
     * Sets the changeSource property value. Known sources that can change a lead's current disposition.
     * @param DispositionResponse_changeSource|null $value Value to set for the changeSource property.
    */
    public function setChangeSource(?DispositionResponse_changeSource $value): void {
        $this->changeSource = $value;
    }

    /**
     * Sets the createdAt property value. The date and time for the created at value on this disposition.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the followUpStatus property value. The current follow up status for this disposition.
     * @param string|null $value Value to set for the followUpStatus property.
    */
    public function setFollowUpStatus(?string $value): void {
        $this->followUpStatus = $value;
    }

    /**
     * Sets the id property value. The unique ID for this disposition.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isMissedCallFollowUp property value. Whether this disposition is missed call follow up.
     * @param bool|null $value Value to set for the isMissedCallFollowUp property.
    */
    public function setIsMissedCallFollowUp(?bool $value): void {
        $this->isMissedCallFollowUp = $value;
    }

    /**
     * Sets the leadId property value. The lead ID associated with this disposition.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the newDispositionId property value. Unique identifier of the new disposition associated with this Leadping disposition.
     * @param string|null $value Value to set for the newDispositionId property.
    */
    public function setNewDispositionId(?string $value): void {
        $this->newDispositionId = $value;
    }

    /**
     * Sets the notes property value. The operator or customer notes recorded for this disposition.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the oldDispositionId property value. Unique identifier of the old disposition associated with this Leadping disposition.
     * @param string|null $value Value to set for the oldDispositionId property.
    */
    public function setOldDispositionId(?string $value): void {
        $this->oldDispositionId = $value;
    }

    /**
     * Sets the oldDispositionOutcome property value. Old disposition outcome associated with this Leadping disposition.
     * @param string|null $value Value to set for the oldDispositionOutcome property.
    */
    public function setOldDispositionOutcome(?string $value): void {
        $this->oldDispositionOutcome = $value;
    }

    /**
     * Sets the oldDispositionType property value. Old disposition type classification for this Leadping disposition.
     * @param string|null $value Value to set for the oldDispositionType property.
    */
    public function setOldDispositionType(?string $value): void {
        $this->oldDispositionType = $value;
    }

    /**
     * Sets the outcome property value. The outcome value for this disposition.
     * @param string|null $value Value to set for the outcome property.
    */
    public function setOutcome(?string $value): void {
        $this->outcome = $value;
    }

    /**
     * Sets the reason property value. The reason this disposition was changed.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the relatedCallEventId property value. The related call event ID associated with this disposition.
     * @param string|null $value Value to set for the relatedCallEventId property.
    */
    public function setRelatedCallEventId(?string $value): void {
        $this->relatedCallEventId = $value;
    }

    /**
     * Sets the sourceId property value. The source ID associated with this disposition.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the taskDueAt property value. The date and time for the task due at value on this disposition.
     * @param DateTime|null $value Value to set for the taskDueAt property.
    */
    public function setTaskDueAt(?DateTime $value): void {
        $this->taskDueAt = $value;
    }

    /**
     * Sets the timestamp property value. The date and time for the timestamp value on this disposition.
     * @param DateTime|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?DateTime $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the type property value. The type classification for this disposition.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the updatedAt property value. The date and time for the updated at value on this disposition.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
