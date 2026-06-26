<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request model for creating or updating a disposition.
*/
class DispositionRequest implements AdditionalDataHolder, Parsable 
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
     * @var DispositionRequest_category|null $category Controlled disposition categories used for reporting, automation, and analytics.
    */
    private ?DispositionRequest_category $category = null;
    
    /**
     * @var string|null $changedByAutomationId The automation that changed this disposition, when applicable.
    */
    private ?string $changedByAutomationId = null;
    
    /**
     * @var DispositionRequest_changeSource|null $changeSource Known sources that can change a lead's current disposition.
    */
    private ?DispositionRequest_changeSource $changeSource = null;
    
    /**
     * @var string|null $followUpStatus The current follow up status for this disposition.
    */
    private ?string $followUpStatus = null;
    
    /**
     * @var bool|null $isMissedCallFollowUp Whether this disposition is missed call follow up.
    */
    private ?bool $isMissedCallFollowUp = null;
    
    /**
     * @var string|null $leadId The lead ID associated with this disposition.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $notes The operator or customer notes recorded for this disposition.
    */
    private ?string $notes = null;
    
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
     * Instantiates a new DispositionRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DispositionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DispositionRequest {
        return new DispositionRequest();
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
     * @return DispositionRequest_category|null
    */
    public function getCategory(): ?DispositionRequest_category {
        return $this->category;
    }

    /**
     * Gets the changedByAutomationId property value. The automation that changed this disposition, when applicable.
     * @return string|null
    */
    public function getChangedByAutomationId(): ?string {
        return $this->changedByAutomationId;
    }

    /**
     * Gets the changeSource property value. Known sources that can change a lead's current disposition.
     * @return DispositionRequest_changeSource|null
    */
    public function getChangeSource(): ?DispositionRequest_changeSource {
        return $this->changeSource;
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
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(DispositionRequest_category::class)),
            'changedByAutomationId' => fn(ParseNode $n) => $o->setChangedByAutomationId($n->getStringValue()),
            'changeSource' => fn(ParseNode $n) => $o->setChangeSource($n->getEnumValue(DispositionRequest_changeSource::class)),
            'followUpStatus' => fn(ParseNode $n) => $o->setFollowUpStatus($n->getStringValue()),
            'isMissedCallFollowUp' => fn(ParseNode $n) => $o->setIsMissedCallFollowUp($n->getBooleanValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'outcome' => fn(ParseNode $n) => $o->setOutcome($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'relatedCallEventId' => fn(ParseNode $n) => $o->setRelatedCallEventId($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'taskDueAt' => fn(ParseNode $n) => $o->setTaskDueAt($n->getDateTimeValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
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
     * Gets the notes property value. The operator or customer notes recorded for this disposition.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
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
        $writer->writeStringValue('changedByAutomationId', $this->getChangedByAutomationId());
        $writer->writeEnumValue('changeSource', $this->getChangeSource());
        $writer->writeStringValue('followUpStatus', $this->getFollowUpStatus());
        $writer->writeBooleanValue('isMissedCallFollowUp', $this->getIsMissedCallFollowUp());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('outcome', $this->getOutcome());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('relatedCallEventId', $this->getRelatedCallEventId());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeDateTimeValue('taskDueAt', $this->getTaskDueAt());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
        $writer->writeStringValue('type', $this->getType());
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
     * @param DispositionRequest_category|null $value Value to set for the category property.
    */
    public function setCategory(?DispositionRequest_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the changedByAutomationId property value. The automation that changed this disposition, when applicable.
     * @param string|null $value Value to set for the changedByAutomationId property.
    */
    public function setChangedByAutomationId(?string $value): void {
        $this->changedByAutomationId = $value;
    }

    /**
     * Sets the changeSource property value. Known sources that can change a lead's current disposition.
     * @param DispositionRequest_changeSource|null $value Value to set for the changeSource property.
    */
    public function setChangeSource(?DispositionRequest_changeSource $value): void {
        $this->changeSource = $value;
    }

    /**
     * Sets the followUpStatus property value. The current follow up status for this disposition.
     * @param string|null $value Value to set for the followUpStatus property.
    */
    public function setFollowUpStatus(?string $value): void {
        $this->followUpStatus = $value;
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
     * Sets the notes property value. The operator or customer notes recorded for this disposition.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
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

}
