<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing lead status change export row data returned to callers.
*/
class LeadStatusChangeExportRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $appointmentEndAt The date and time for the appointment end at value on this lead status change export row.
    */
    private ?DateTime $appointmentEndAt = null;
    
    /**
     * @var DateTime|null $appointmentStartAt The date and time for the appointment start at value on this lead status change export row.
    */
    private ?DateTime $appointmentStartAt = null;
    
    /**
     * @var string|null $assignedToUserId The assigned to user ID associated with this lead status change export row.
    */
    private ?string $assignedToUserId = null;
    
    /**
     * @var DateTime|null $callbackAt The date and time for the callback at value on this lead status change export row.
    */
    private ?DateTime $callbackAt = null;
    
    /**
     * @var LeadStatusChangeExportRow_category|null $category Controlled lead status change categories used for reporting, automation, and analytics.
    */
    private ?LeadStatusChangeExportRow_category $category = null;
    
    /**
     * @var DateTime|null $changedAt Date and time when the lead status change change occurred.
    */
    private ?DateTime $changedAt = null;
    
    /**
     * @var string|null $changedByAutomationId Unique identifier of the automation that changed the lead status change, when applicable.
    */
    private ?string $changedByAutomationId = null;
    
    /**
     * @var string|null $changedByUserId Unique identifier of the Leadping user who made the change.
    */
    private ?string $changedByUserId = null;
    
    /**
     * @var LeadStatusChangeExportRow_changeSource|null $changeSource Known sources that can change a lead's current lead status change.
    */
    private ?LeadStatusChangeExportRow_changeSource $changeSource = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this lead status change export row.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $followUpStatus The current follow up status for this lead status change export row.
    */
    private ?string $followUpStatus = null;
    
    /**
     * @var bool|null $isMissedCallFollowUp Whether this lead status change export row is missed call follow up.
    */
    private ?bool $isMissedCallFollowUp = null;
    
    /**
     * @var string|null $leadId The lead ID associated with this lead status change export row.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadStatusChangeId The lead status change ID associated with this lead status change export row.
    */
    private ?string $leadStatusChangeId = null;
    
    /**
     * @var string|null $newLeadStatusChangeId Unique identifier of the new lead status change associated with this Leadping lead status change export row.
    */
    private ?string $newLeadStatusChangeId = null;
    
    /**
     * @var string|null $notes The operator or customer notes recorded for this lead status change export row.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $oldLeadStatusChangeId Unique identifier of the old lead status change associated with this Leadping lead status change export row.
    */
    private ?string $oldLeadStatusChangeId = null;
    
    /**
     * @var string|null $oldLeadStatusChangeOutcome Old lead status change outcome associated with this Leadping lead status change export row.
    */
    private ?string $oldLeadStatusChangeOutcome = null;
    
    /**
     * @var string|null $oldLeadStatusChangeType Old lead status change type classification for this Leadping lead status change export row.
    */
    private ?string $oldLeadStatusChangeType = null;
    
    /**
     * @var string|null $outcome The outcome value for this lead status change export row.
    */
    private ?string $outcome = null;
    
    /**
     * @var string|null $reason Human-readable explanation for the current lead status change export row outcome.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $relatedCallEventId The related call event ID associated with this lead status change export row.
    */
    private ?string $relatedCallEventId = null;
    
    /**
     * @var string|null $sourceId The source ID associated with this lead status change export row.
    */
    private ?string $sourceId = null;
    
    /**
     * @var DateTime|null $taskDueAt The date and time for the task due at value on this lead status change export row.
    */
    private ?DateTime $taskDueAt = null;
    
    /**
     * @var string|null $type The type classification for this lead status change export row.
    */
    private ?string $type = null;
    
    /**
     * @var DateTime|null $updatedAt The date and time for the updated at value on this lead status change export row.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * Instantiates a new LeadStatusChangeExportRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadStatusChangeExportRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadStatusChangeExportRow {
        return new LeadStatusChangeExportRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appointmentEndAt property value. The date and time for the appointment end at value on this lead status change export row.
     * @return DateTime|null
    */
    public function getAppointmentEndAt(): ?DateTime {
        return $this->appointmentEndAt;
    }

    /**
     * Gets the appointmentStartAt property value. The date and time for the appointment start at value on this lead status change export row.
     * @return DateTime|null
    */
    public function getAppointmentStartAt(): ?DateTime {
        return $this->appointmentStartAt;
    }

    /**
     * Gets the assignedToUserId property value. The assigned to user ID associated with this lead status change export row.
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->assignedToUserId;
    }

    /**
     * Gets the callbackAt property value. The date and time for the callback at value on this lead status change export row.
     * @return DateTime|null
    */
    public function getCallbackAt(): ?DateTime {
        return $this->callbackAt;
    }

    /**
     * Gets the category property value. Controlled lead status change categories used for reporting, automation, and analytics.
     * @return LeadStatusChangeExportRow_category|null
    */
    public function getCategory(): ?LeadStatusChangeExportRow_category {
        return $this->category;
    }

    /**
     * Gets the changedAt property value. Date and time when the lead status change change occurred.
     * @return DateTime|null
    */
    public function getChangedAt(): ?DateTime {
        return $this->changedAt;
    }

    /**
     * Gets the changedByAutomationId property value. Unique identifier of the automation that changed the lead status change, when applicable.
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
     * Gets the changeSource property value. Known sources that can change a lead's current lead status change.
     * @return LeadStatusChangeExportRow_changeSource|null
    */
    public function getChangeSource(): ?LeadStatusChangeExportRow_changeSource {
        return $this->changeSource;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this lead status change export row.
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
            'appointmentStartAt' => fn(ParseNode $n) => $o->setAppointmentStartAt($n->getDateTimeValue()),
            'assignedToUserId' => fn(ParseNode $n) => $o->setAssignedToUserId($n->getStringValue()),
            'callbackAt' => fn(ParseNode $n) => $o->setCallbackAt($n->getDateTimeValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LeadStatusChangeExportRow_category::class)),
            'changedAt' => fn(ParseNode $n) => $o->setChangedAt($n->getDateTimeValue()),
            'changedByAutomationId' => fn(ParseNode $n) => $o->setChangedByAutomationId($n->getStringValue()),
            'changedByUserId' => fn(ParseNode $n) => $o->setChangedByUserId($n->getStringValue()),
            'changeSource' => fn(ParseNode $n) => $o->setChangeSource($n->getEnumValue(LeadStatusChangeExportRow_changeSource::class)),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'followUpStatus' => fn(ParseNode $n) => $o->setFollowUpStatus($n->getStringValue()),
            'isMissedCallFollowUp' => fn(ParseNode $n) => $o->setIsMissedCallFollowUp($n->getBooleanValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'leadStatusChangeId' => fn(ParseNode $n) => $o->setLeadStatusChangeId($n->getStringValue()),
            'newLeadStatusChangeId' => fn(ParseNode $n) => $o->setNewLeadStatusChangeId($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'oldLeadStatusChangeId' => fn(ParseNode $n) => $o->setOldLeadStatusChangeId($n->getStringValue()),
            'oldLeadStatusChangeOutcome' => fn(ParseNode $n) => $o->setOldLeadStatusChangeOutcome($n->getStringValue()),
            'oldLeadStatusChangeType' => fn(ParseNode $n) => $o->setOldLeadStatusChangeType($n->getStringValue()),
            'outcome' => fn(ParseNode $n) => $o->setOutcome($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'relatedCallEventId' => fn(ParseNode $n) => $o->setRelatedCallEventId($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'taskDueAt' => fn(ParseNode $n) => $o->setTaskDueAt($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the followUpStatus property value. The current follow up status for this lead status change export row.
     * @return string|null
    */
    public function getFollowUpStatus(): ?string {
        return $this->followUpStatus;
    }

    /**
     * Gets the isMissedCallFollowUp property value. Whether this lead status change export row is missed call follow up.
     * @return bool|null
    */
    public function getIsMissedCallFollowUp(): ?bool {
        return $this->isMissedCallFollowUp;
    }

    /**
     * Gets the leadId property value. The lead ID associated with this lead status change export row.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadStatusChangeId property value. The lead status change ID associated with this lead status change export row.
     * @return string|null
    */
    public function getLeadStatusChangeId(): ?string {
        return $this->leadStatusChangeId;
    }

    /**
     * Gets the newLeadStatusChangeId property value. Unique identifier of the new lead status change associated with this Leadping lead status change export row.
     * @return string|null
    */
    public function getNewLeadStatusChangeId(): ?string {
        return $this->newLeadStatusChangeId;
    }

    /**
     * Gets the notes property value. The operator or customer notes recorded for this lead status change export row.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the oldLeadStatusChangeId property value. Unique identifier of the old lead status change associated with this Leadping lead status change export row.
     * @return string|null
    */
    public function getOldLeadStatusChangeId(): ?string {
        return $this->oldLeadStatusChangeId;
    }

    /**
     * Gets the oldLeadStatusChangeOutcome property value. Old lead status change outcome associated with this Leadping lead status change export row.
     * @return string|null
    */
    public function getOldLeadStatusChangeOutcome(): ?string {
        return $this->oldLeadStatusChangeOutcome;
    }

    /**
     * Gets the oldLeadStatusChangeType property value. Old lead status change type classification for this Leadping lead status change export row.
     * @return string|null
    */
    public function getOldLeadStatusChangeType(): ?string {
        return $this->oldLeadStatusChangeType;
    }

    /**
     * Gets the outcome property value. The outcome value for this lead status change export row.
     * @return string|null
    */
    public function getOutcome(): ?string {
        return $this->outcome;
    }

    /**
     * Gets the reason property value. Human-readable explanation for the current lead status change export row outcome.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the relatedCallEventId property value. The related call event ID associated with this lead status change export row.
     * @return string|null
    */
    public function getRelatedCallEventId(): ?string {
        return $this->relatedCallEventId;
    }

    /**
     * Gets the sourceId property value. The source ID associated with this lead status change export row.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the taskDueAt property value. The date and time for the task due at value on this lead status change export row.
     * @return DateTime|null
    */
    public function getTaskDueAt(): ?DateTime {
        return $this->taskDueAt;
    }

    /**
     * Gets the type property value. The type classification for this lead status change export row.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the updatedAt property value. The date and time for the updated at value on this lead status change export row.
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
        $writer->writeBooleanValue('isMissedCallFollowUp', $this->getIsMissedCallFollowUp());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadStatusChangeId', $this->getLeadStatusChangeId());
        $writer->writeStringValue('newLeadStatusChangeId', $this->getNewLeadStatusChangeId());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('oldLeadStatusChangeId', $this->getOldLeadStatusChangeId());
        $writer->writeStringValue('oldLeadStatusChangeOutcome', $this->getOldLeadStatusChangeOutcome());
        $writer->writeStringValue('oldLeadStatusChangeType', $this->getOldLeadStatusChangeType());
        $writer->writeStringValue('outcome', $this->getOutcome());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('relatedCallEventId', $this->getRelatedCallEventId());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeDateTimeValue('taskDueAt', $this->getTaskDueAt());
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
     * Sets the appointmentEndAt property value. The date and time for the appointment end at value on this lead status change export row.
     * @param DateTime|null $value Value to set for the appointmentEndAt property.
    */
    public function setAppointmentEndAt(?DateTime $value): void {
        $this->appointmentEndAt = $value;
    }

    /**
     * Sets the appointmentStartAt property value. The date and time for the appointment start at value on this lead status change export row.
     * @param DateTime|null $value Value to set for the appointmentStartAt property.
    */
    public function setAppointmentStartAt(?DateTime $value): void {
        $this->appointmentStartAt = $value;
    }

    /**
     * Sets the assignedToUserId property value. The assigned to user ID associated with this lead status change export row.
     * @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value): void {
        $this->assignedToUserId = $value;
    }

    /**
     * Sets the callbackAt property value. The date and time for the callback at value on this lead status change export row.
     * @param DateTime|null $value Value to set for the callbackAt property.
    */
    public function setCallbackAt(?DateTime $value): void {
        $this->callbackAt = $value;
    }

    /**
     * Sets the category property value. Controlled lead status change categories used for reporting, automation, and analytics.
     * @param LeadStatusChangeExportRow_category|null $value Value to set for the category property.
    */
    public function setCategory(?LeadStatusChangeExportRow_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the changedAt property value. Date and time when the lead status change change occurred.
     * @param DateTime|null $value Value to set for the changedAt property.
    */
    public function setChangedAt(?DateTime $value): void {
        $this->changedAt = $value;
    }

    /**
     * Sets the changedByAutomationId property value. Unique identifier of the automation that changed the lead status change, when applicable.
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
     * Sets the changeSource property value. Known sources that can change a lead's current lead status change.
     * @param LeadStatusChangeExportRow_changeSource|null $value Value to set for the changeSource property.
    */
    public function setChangeSource(?LeadStatusChangeExportRow_changeSource $value): void {
        $this->changeSource = $value;
    }

    /**
     * Sets the createdAt property value. The date and time for the created at value on this lead status change export row.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the followUpStatus property value. The current follow up status for this lead status change export row.
     * @param string|null $value Value to set for the followUpStatus property.
    */
    public function setFollowUpStatus(?string $value): void {
        $this->followUpStatus = $value;
    }

    /**
     * Sets the isMissedCallFollowUp property value. Whether this lead status change export row is missed call follow up.
     * @param bool|null $value Value to set for the isMissedCallFollowUp property.
    */
    public function setIsMissedCallFollowUp(?bool $value): void {
        $this->isMissedCallFollowUp = $value;
    }

    /**
     * Sets the leadId property value. The lead ID associated with this lead status change export row.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadStatusChangeId property value. The lead status change ID associated with this lead status change export row.
     * @param string|null $value Value to set for the leadStatusChangeId property.
    */
    public function setLeadStatusChangeId(?string $value): void {
        $this->leadStatusChangeId = $value;
    }

    /**
     * Sets the newLeadStatusChangeId property value. Unique identifier of the new lead status change associated with this Leadping lead status change export row.
     * @param string|null $value Value to set for the newLeadStatusChangeId property.
    */
    public function setNewLeadStatusChangeId(?string $value): void {
        $this->newLeadStatusChangeId = $value;
    }

    /**
     * Sets the notes property value. The operator or customer notes recorded for this lead status change export row.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the oldLeadStatusChangeId property value. Unique identifier of the old lead status change associated with this Leadping lead status change export row.
     * @param string|null $value Value to set for the oldLeadStatusChangeId property.
    */
    public function setOldLeadStatusChangeId(?string $value): void {
        $this->oldLeadStatusChangeId = $value;
    }

    /**
     * Sets the oldLeadStatusChangeOutcome property value. Old lead status change outcome associated with this Leadping lead status change export row.
     * @param string|null $value Value to set for the oldLeadStatusChangeOutcome property.
    */
    public function setOldLeadStatusChangeOutcome(?string $value): void {
        $this->oldLeadStatusChangeOutcome = $value;
    }

    /**
     * Sets the oldLeadStatusChangeType property value. Old lead status change type classification for this Leadping lead status change export row.
     * @param string|null $value Value to set for the oldLeadStatusChangeType property.
    */
    public function setOldLeadStatusChangeType(?string $value): void {
        $this->oldLeadStatusChangeType = $value;
    }

    /**
     * Sets the outcome property value. The outcome value for this lead status change export row.
     * @param string|null $value Value to set for the outcome property.
    */
    public function setOutcome(?string $value): void {
        $this->outcome = $value;
    }

    /**
     * Sets the reason property value. Human-readable explanation for the current lead status change export row outcome.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the relatedCallEventId property value. The related call event ID associated with this lead status change export row.
     * @param string|null $value Value to set for the relatedCallEventId property.
    */
    public function setRelatedCallEventId(?string $value): void {
        $this->relatedCallEventId = $value;
    }

    /**
     * Sets the sourceId property value. The source ID associated with this lead status change export row.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the taskDueAt property value. The date and time for the task due at value on this lead status change export row.
     * @param DateTime|null $value Value to set for the taskDueAt property.
    */
    public function setTaskDueAt(?DateTime $value): void {
        $this->taskDueAt = $value;
    }

    /**
     * Sets the type property value. The type classification for this lead status change export row.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the updatedAt property value. The date and time for the updated at value on this lead status change export row.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
