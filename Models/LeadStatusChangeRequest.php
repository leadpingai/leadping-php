<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines a lead status transition or correction, including its target status, effective time, source, and explanatory context.
*/
class LeadStatusChangeRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $appointmentEndAt UTC timestamp for appointment end at on this lead status change.
    */
    private ?DateTime $appointmentEndAt = null;
    
    /**
     * @var string|null $appointmentNotes Additional scheduling or preparation notes for the related appointment.
    */
    private ?string $appointmentNotes = null;
    
    /**
     * @var DateTime|null $appointmentStartAt UTC timestamp for appointment start at on this lead status change.
    */
    private ?DateTime $appointmentStartAt = null;
    
    /**
     * @var DateTime|null $callbackAt UTC timestamp for callback at on this lead status change.
    */
    private ?DateTime $callbackAt = null;
    
    /**
     * @var LeadStatusChangeRequest_category|null $category Controlled lead status change categories used for reporting, automation, and analytics.
    */
    private ?LeadStatusChangeRequest_category $category = null;
    
    /**
     * @var string|null $followUpStatus The current follow up status for this lead status change.
    */
    private ?string $followUpStatus = null;
    
    /**
     * @var string|null $notes The operator or customer notes recorded for this lead status change.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $outcome Result of the interaction or workflow step that caused the status change.
    */
    private ?string $outcome = null;
    
    /**
     * @var string|null $reason The reason this lead status change was changed.
    */
    private ?string $reason = null;
    
    /**
     * @var DateTime|null $taskDueAt UTC timestamp for task due at on this lead status change.
    */
    private ?DateTime $taskDueAt = null;
    
    /**
     * @var string|null $type Category of status change being recorded for the lead.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new LeadStatusChangeRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadStatusChangeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadStatusChangeRequest {
        return new LeadStatusChangeRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appointmentEndAt property value. UTC timestamp for appointment end at on this lead status change.
     * @return DateTime|null
    */
    public function getAppointmentEndAt(): ?DateTime {
        return $this->appointmentEndAt;
    }

    /**
     * Gets the appointmentNotes property value. Additional scheduling or preparation notes for the related appointment.
     * @return string|null
    */
    public function getAppointmentNotes(): ?string {
        return $this->appointmentNotes;
    }

    /**
     * Gets the appointmentStartAt property value. UTC timestamp for appointment start at on this lead status change.
     * @return DateTime|null
    */
    public function getAppointmentStartAt(): ?DateTime {
        return $this->appointmentStartAt;
    }

    /**
     * Gets the callbackAt property value. UTC timestamp for callback at on this lead status change.
     * @return DateTime|null
    */
    public function getCallbackAt(): ?DateTime {
        return $this->callbackAt;
    }

    /**
     * Gets the category property value. Controlled lead status change categories used for reporting, automation, and analytics.
     * @return LeadStatusChangeRequest_category|null
    */
    public function getCategory(): ?LeadStatusChangeRequest_category {
        return $this->category;
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
            'callbackAt' => fn(ParseNode $n) => $o->setCallbackAt($n->getDateTimeValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LeadStatusChangeRequest_category::class)),
            'followUpStatus' => fn(ParseNode $n) => $o->setFollowUpStatus($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'outcome' => fn(ParseNode $n) => $o->setOutcome($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'taskDueAt' => fn(ParseNode $n) => $o->setTaskDueAt($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the followUpStatus property value. The current follow up status for this lead status change.
     * @return string|null
    */
    public function getFollowUpStatus(): ?string {
        return $this->followUpStatus;
    }

    /**
     * Gets the notes property value. The operator or customer notes recorded for this lead status change.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the outcome property value. Result of the interaction or workflow step that caused the status change.
     * @return string|null
    */
    public function getOutcome(): ?string {
        return $this->outcome;
    }

    /**
     * Gets the reason property value. The reason this lead status change was changed.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the taskDueAt property value. UTC timestamp for task due at on this lead status change.
     * @return DateTime|null
    */
    public function getTaskDueAt(): ?DateTime {
        return $this->taskDueAt;
    }

    /**
     * Gets the type property value. Category of status change being recorded for the lead.
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
        $writer->writeDateTimeValue('callbackAt', $this->getCallbackAt());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('followUpStatus', $this->getFollowUpStatus());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('outcome', $this->getOutcome());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeDateTimeValue('taskDueAt', $this->getTaskDueAt());
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
     * Sets the appointmentEndAt property value. UTC timestamp for appointment end at on this lead status change.
     * @param DateTime|null $value Value to set for the appointmentEndAt property.
    */
    public function setAppointmentEndAt(?DateTime $value): void {
        $this->appointmentEndAt = $value;
    }

    /**
     * Sets the appointmentNotes property value. Additional scheduling or preparation notes for the related appointment.
     * @param string|null $value Value to set for the appointmentNotes property.
    */
    public function setAppointmentNotes(?string $value): void {
        $this->appointmentNotes = $value;
    }

    /**
     * Sets the appointmentStartAt property value. UTC timestamp for appointment start at on this lead status change.
     * @param DateTime|null $value Value to set for the appointmentStartAt property.
    */
    public function setAppointmentStartAt(?DateTime $value): void {
        $this->appointmentStartAt = $value;
    }

    /**
     * Sets the callbackAt property value. UTC timestamp for callback at on this lead status change.
     * @param DateTime|null $value Value to set for the callbackAt property.
    */
    public function setCallbackAt(?DateTime $value): void {
        $this->callbackAt = $value;
    }

    /**
     * Sets the category property value. Controlled lead status change categories used for reporting, automation, and analytics.
     * @param LeadStatusChangeRequest_category|null $value Value to set for the category property.
    */
    public function setCategory(?LeadStatusChangeRequest_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the followUpStatus property value. The current follow up status for this lead status change.
     * @param string|null $value Value to set for the followUpStatus property.
    */
    public function setFollowUpStatus(?string $value): void {
        $this->followUpStatus = $value;
    }

    /**
     * Sets the notes property value. The operator or customer notes recorded for this lead status change.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the outcome property value. Result of the interaction or workflow step that caused the status change.
     * @param string|null $value Value to set for the outcome property.
    */
    public function setOutcome(?string $value): void {
        $this->outcome = $value;
    }

    /**
     * Sets the reason property value. The reason this lead status change was changed.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the taskDueAt property value. UTC timestamp for task due at on this lead status change.
     * @param DateTime|null $value Value to set for the taskDueAt property.
    */
    public function setTaskDueAt(?DateTime $value): void {
        $this->taskDueAt = $value;
    }

    /**
     * Sets the type property value. Category of status change being recorded for the lead.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
