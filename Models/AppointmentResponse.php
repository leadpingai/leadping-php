<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An appointment visible to the current user, with history populated on detail requests.
*/
class AppointmentResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $assignedToName The assignedToName property
    */
    private ?string $assignedToName = null;
    
    /**
     * @var string|null $assignedToUserId The assignedToUserId property
    */
    private ?string $assignedToUserId = null;
    
    /**
     * @var DateTime|null $createdAt The createdAt property
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var DateTime|null $dismissedAt The dismissedAt property
    */
    private ?DateTime $dismissedAt = null;
    
    /**
     * @var array<AppointmentActivity>|null $history The history property
    */
    private ?array $history = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isDemo The isDemo property
    */
    private ?bool $isDemo = null;
    
    /**
     * @var string|null $leadAvatarUrl The leadAvatarUrl property
    */
    private ?string $leadAvatarUrl = null;
    
    /**
     * @var string|null $leadEmail The leadEmail property
    */
    private ?string $leadEmail = null;
    
    /**
     * @var string|null $leadFirstName The leadFirstName property
    */
    private ?string $leadFirstName = null;
    
    /**
     * @var string|null $leadId The leadId property
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadLastName The leadLastName property
    */
    private ?string $leadLastName = null;
    
    /**
     * @var string|null $leadName The leadName property
    */
    private ?string $leadName = null;
    
    /**
     * @var DateTime|null $modifiedAt The modifiedAt property
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $notes The notes property
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $organizationId The organizationId property
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $organizationName The organizationName property
    */
    private ?string $organizationName = null;
    
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
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $timeZoneId The timeZoneId property
    */
    private ?string $timeZoneId = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new AppointmentResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppointmentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppointmentResponse {
        return new AppointmentResponse();
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
     * Gets the assignedToUserId property value. The assignedToUserId property
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->assignedToUserId;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the dismissedAt property value. The dismissedAt property
     * @return DateTime|null
    */
    public function getDismissedAt(): ?DateTime {
        return $this->dismissedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedToName' => fn(ParseNode $n) => $o->setAssignedToName($n->getStringValue()),
            'assignedToUserId' => fn(ParseNode $n) => $o->setAssignedToUserId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'dismissedAt' => fn(ParseNode $n) => $o->setDismissedAt($n->getDateTimeValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([AppointmentActivity::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isDemo' => fn(ParseNode $n) => $o->setIsDemo($n->getBooleanValue()),
            'leadAvatarUrl' => fn(ParseNode $n) => $o->setLeadAvatarUrl($n->getStringValue()),
            'leadEmail' => fn(ParseNode $n) => $o->setLeadEmail($n->getStringValue()),
            'leadFirstName' => fn(ParseNode $n) => $o->setLeadFirstName($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'leadLastName' => fn(ParseNode $n) => $o->setLeadLastName($n->getStringValue()),
            'leadName' => fn(ParseNode $n) => $o->setLeadName($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'organizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
            'reminderAt' => fn(ParseNode $n) => $o->setReminderAt($n->getDateTimeValue()),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getIntegerValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the history property value. The history property
     * @return array<AppointmentActivity>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isDemo property value. The isDemo property
     * @return bool|null
    */
    public function getIsDemo(): ?bool {
        return $this->isDemo;
    }

    /**
     * Gets the leadAvatarUrl property value. The leadAvatarUrl property
     * @return string|null
    */
    public function getLeadAvatarUrl(): ?string {
        return $this->leadAvatarUrl;
    }

    /**
     * Gets the leadEmail property value. The leadEmail property
     * @return string|null
    */
    public function getLeadEmail(): ?string {
        return $this->leadEmail;
    }

    /**
     * Gets the leadFirstName property value. The leadFirstName property
     * @return string|null
    */
    public function getLeadFirstName(): ?string {
        return $this->leadFirstName;
    }

    /**
     * Gets the leadId property value. The leadId property
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadLastName property value. The leadLastName property
     * @return string|null
    */
    public function getLeadLastName(): ?string {
        return $this->leadLastName;
    }

    /**
     * Gets the leadName property value. The leadName property
     * @return string|null
    */
    public function getLeadName(): ?string {
        return $this->leadName;
    }

    /**
     * Gets the modifiedAt property value. The modifiedAt property
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the notes property value. The notes property
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the organizationId property value. The organizationId property
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the organizationName property value. The organizationName property
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        return $this->organizationName;
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
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
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
        $writer->writeStringValue('assignedToName', $this->getAssignedToName());
        $writer->writeStringValue('assignedToUserId', $this->getAssignedToUserId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeDateTimeValue('dismissedAt', $this->getDismissedAt());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isDemo', $this->getIsDemo());
        $writer->writeStringValue('leadAvatarUrl', $this->getLeadAvatarUrl());
        $writer->writeStringValue('leadEmail', $this->getLeadEmail());
        $writer->writeStringValue('leadFirstName', $this->getLeadFirstName());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadLastName', $this->getLeadLastName());
        $writer->writeStringValue('leadName', $this->getLeadName());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('organizationName', $this->getOrganizationName());
        $writer->writeDateTimeValue('reminderAt', $this->getReminderAt());
        $writer->writeIntegerValue('revision', $this->getRevision());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the assignedToName property value. The assignedToName property
     * @param string|null $value Value to set for the assignedToName property.
    */
    public function setAssignedToName(?string $value): void {
        $this->assignedToName = $value;
    }

    /**
     * Sets the assignedToUserId property value. The assignedToUserId property
     * @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value): void {
        $this->assignedToUserId = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the dismissedAt property value. The dismissedAt property
     * @param DateTime|null $value Value to set for the dismissedAt property.
    */
    public function setDismissedAt(?DateTime $value): void {
        $this->dismissedAt = $value;
    }

    /**
     * Sets the history property value. The history property
     * @param array<AppointmentActivity>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->history = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isDemo property value. The isDemo property
     * @param bool|null $value Value to set for the isDemo property.
    */
    public function setIsDemo(?bool $value): void {
        $this->isDemo = $value;
    }

    /**
     * Sets the leadAvatarUrl property value. The leadAvatarUrl property
     * @param string|null $value Value to set for the leadAvatarUrl property.
    */
    public function setLeadAvatarUrl(?string $value): void {
        $this->leadAvatarUrl = $value;
    }

    /**
     * Sets the leadEmail property value. The leadEmail property
     * @param string|null $value Value to set for the leadEmail property.
    */
    public function setLeadEmail(?string $value): void {
        $this->leadEmail = $value;
    }

    /**
     * Sets the leadFirstName property value. The leadFirstName property
     * @param string|null $value Value to set for the leadFirstName property.
    */
    public function setLeadFirstName(?string $value): void {
        $this->leadFirstName = $value;
    }

    /**
     * Sets the leadId property value. The leadId property
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadLastName property value. The leadLastName property
     * @param string|null $value Value to set for the leadLastName property.
    */
    public function setLeadLastName(?string $value): void {
        $this->leadLastName = $value;
    }

    /**
     * Sets the leadName property value. The leadName property
     * @param string|null $value Value to set for the leadName property.
    */
    public function setLeadName(?string $value): void {
        $this->leadName = $value;
    }

    /**
     * Sets the modifiedAt property value. The modifiedAt property
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the notes property value. The notes property
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the organizationId property value. The organizationId property
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the organizationName property value. The organizationName property
     * @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value): void {
        $this->organizationName = $value;
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
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
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
