<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Summarizes lead data in paginated and searchable results.
*/
class LeadTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $archivedAt UTC timestamp when this record was archived.
    */
    private ?DateTime $archivedAt = null;
    
    /**
     * @var string|null $archivedByUserId User ID of the person who archived this record.
    */
    private ?string $archivedByUserId = null;
    
    /**
     * @var int|null $archiveReason Defines why a lead was removed from the active working pipeline.
    */
    private ?int $archiveReason = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this lead table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var LeadTableRow_currentLeadStatus|null $currentLeadStatus Current lead status change summary that describes the lead outcome.
    */
    private ?LeadTableRow_currentLeadStatus $currentLeadStatus = null;
    
    /**
     * @var string|null $email Email address for the person represented by this lead table row.
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $enabled Indicates whether this lead table row is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $firstName First name of the lead, user, or contact represented by this lead table row.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this lead table row.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isArchived Whether this lead is archived.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var string|null $lastName Last name of the lead, user, or contact represented by this lead table row.
    */
    private ?string $lastName = null;
    
    /**
     * @var LeadTableRow_organization|null $organization Identifier and display name of the related organization.
    */
    private ?LeadTableRow_organization $organization = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or organization represented by this lead table row.
    */
    private ?string $phone = null;
    
    /**
     * @var LeadTableRow_processingStatus|null $processingStatus Defines the asynchronous verification and enrichment lifecycle for a lead.
    */
    private ?LeadTableRow_processingStatus $processingStatus = null;
    
    /**
     * @var DateTime|null $processingStatusChangedAt UTC timestamp when the processing stage last changed.
    */
    private ?DateTime $processingStatusChangedAt = null;
    
    /**
     * @var string|null $processingStatusReason Explanation when asynchronous lead processing is blocked or fails.
    */
    private ?string $processingStatusReason = null;
    
    /**
     * @var LeadTableRow_source|null $source Identifier and display name of the related source.
    */
    private ?LeadTableRow_source $source = null;
    
    /**
     * @var string|null $status Current lifecycle status for this lead table row in the Leadping API.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $statusTone Presentation tone that helps clients style the current status of this lead table row.
    */
    private ?string $statusTone = null;
    
    /**
     * @var array<TagSummary>|null $tags Tags currently attached to this lead, source, or record.
    */
    private ?array $tags = null;
    
    /**
     * @var DateTime|null $updatedAt UTC timestamp when this lead table row was last updated.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * Instantiates a new LeadTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadTableRow {
        return new LeadTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the archivedAt property value. UTC timestamp when this record was archived.
     * @return DateTime|null
    */
    public function getArchivedAt(): ?DateTime {
        return $this->archivedAt;
    }

    /**
     * Gets the archivedByUserId property value. User ID of the person who archived this record.
     * @return string|null
    */
    public function getArchivedByUserId(): ?string {
        return $this->archivedByUserId;
    }

    /**
     * Gets the archiveReason property value. Defines why a lead was removed from the active working pipeline.
     * @return int|null
    */
    public function getArchiveReason(): ?int {
        return $this->archiveReason;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this lead table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the currentLeadStatus property value. Current lead status change summary that describes the lead outcome.
     * @return LeadTableRow_currentLeadStatus|null
    */
    public function getCurrentLeadStatus(): ?LeadTableRow_currentLeadStatus {
        return $this->currentLeadStatus;
    }

    /**
     * Gets the email property value. Email address for the person represented by this lead table row.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the enabled property value. Indicates whether this lead table row is active and available in the Leadping API.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getDateTimeValue()),
            'archivedByUserId' => fn(ParseNode $n) => $o->setArchivedByUserId($n->getStringValue()),
            'archiveReason' => fn(ParseNode $n) => $o->setArchiveReason($n->getIntegerValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'currentLeadStatus' => fn(ParseNode $n) => $o->setCurrentLeadStatus($n->getObjectValue([LeadTableRow_currentLeadStatus::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([LeadTableRow_organization::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'processingStatus' => fn(ParseNode $n) => $o->setProcessingStatus($n->getEnumValue(LeadTableRow_processingStatus::class)),
            'processingStatusChangedAt' => fn(ParseNode $n) => $o->setProcessingStatusChangedAt($n->getDateTimeValue()),
            'processingStatusReason' => fn(ParseNode $n) => $o->setProcessingStatusReason($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([LeadTableRow_source::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusTone' => fn(ParseNode $n) => $o->setStatusTone($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([TagSummary::class, 'createFromDiscriminatorValue'])),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the firstName property value. First name of the lead, user, or contact represented by this lead table row.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this lead table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isArchived property value. Whether this lead is archived.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the lastName property value. Last name of the lead, user, or contact represented by this lead table row.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the organization property value. Identifier and display name of the related organization.
     * @return LeadTableRow_organization|null
    */
    public function getOrganization(): ?LeadTableRow_organization {
        return $this->organization;
    }

    /**
     * Gets the phone property value. Phone details for the lead, user, or organization represented by this lead table row.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the processingStatus property value. Defines the asynchronous verification and enrichment lifecycle for a lead.
     * @return LeadTableRow_processingStatus|null
    */
    public function getProcessingStatus(): ?LeadTableRow_processingStatus {
        return $this->processingStatus;
    }

    /**
     * Gets the processingStatusChangedAt property value. UTC timestamp when the processing stage last changed.
     * @return DateTime|null
    */
    public function getProcessingStatusChangedAt(): ?DateTime {
        return $this->processingStatusChangedAt;
    }

    /**
     * Gets the processingStatusReason property value. Explanation when asynchronous lead processing is blocked or fails.
     * @return string|null
    */
    public function getProcessingStatusReason(): ?string {
        return $this->processingStatusReason;
    }

    /**
     * Gets the source property value. Identifier and display name of the related source.
     * @return LeadTableRow_source|null
    */
    public function getSource(): ?LeadTableRow_source {
        return $this->source;
    }

    /**
     * Gets the status property value. Current lifecycle status for this lead table row in the Leadping API.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusTone property value. Presentation tone that helps clients style the current status of this lead table row.
     * @return string|null
    */
    public function getStatusTone(): ?string {
        return $this->statusTone;
    }

    /**
     * Gets the tags property value. Tags currently attached to this lead, source, or record.
     * @return array<TagSummary>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the updatedAt property value. UTC timestamp when this lead table row was last updated.
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
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeStringValue('archivedByUserId', $this->getArchivedByUserId());
        $writer->writeIntegerValue('archiveReason', $this->getArchiveReason());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeObjectValue('currentLeadStatus', $this->getCurrentLeadStatus());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeDateTimeValue('processingStatusChangedAt', $this->getProcessingStatusChangedAt());
        $writer->writeStringValue('processingStatusReason', $this->getProcessingStatusReason());
        $writer->writeObjectValue('source', $this->getSource());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusTone', $this->getStatusTone());
        $writer->writeCollectionOfObjectValues('tags', $this->getTags());
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
     * Sets the archivedAt property value. UTC timestamp when this record was archived.
     * @param DateTime|null $value Value to set for the archivedAt property.
    */
    public function setArchivedAt(?DateTime $value): void {
        $this->archivedAt = $value;
    }

    /**
     * Sets the archivedByUserId property value. User ID of the person who archived this record.
     * @param string|null $value Value to set for the archivedByUserId property.
    */
    public function setArchivedByUserId(?string $value): void {
        $this->archivedByUserId = $value;
    }

    /**
     * Sets the archiveReason property value. Defines why a lead was removed from the active working pipeline.
     * @param int|null $value Value to set for the archiveReason property.
    */
    public function setArchiveReason(?int $value): void {
        $this->archiveReason = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this lead table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the currentLeadStatus property value. Current lead status change summary that describes the lead outcome.
     * @param LeadTableRow_currentLeadStatus|null $value Value to set for the currentLeadStatus property.
    */
    public function setCurrentLeadStatus(?LeadTableRow_currentLeadStatus $value): void {
        $this->currentLeadStatus = $value;
    }

    /**
     * Sets the email property value. Email address for the person represented by this lead table row.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this lead table row is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the firstName property value. First name of the lead, user, or contact represented by this lead table row.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this lead table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isArchived property value. Whether this lead is archived.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the lastName property value. Last name of the lead, user, or contact represented by this lead table row.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the organization property value. Identifier and display name of the related organization.
     * @param LeadTableRow_organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?LeadTableRow_organization $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the phone property value. Phone details for the lead, user, or organization represented by this lead table row.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the processingStatus property value. Defines the asynchronous verification and enrichment lifecycle for a lead.
     * @param LeadTableRow_processingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LeadTableRow_processingStatus $value): void {
        $this->processingStatus = $value;
    }

    /**
     * Sets the processingStatusChangedAt property value. UTC timestamp when the processing stage last changed.
     * @param DateTime|null $value Value to set for the processingStatusChangedAt property.
    */
    public function setProcessingStatusChangedAt(?DateTime $value): void {
        $this->processingStatusChangedAt = $value;
    }

    /**
     * Sets the processingStatusReason property value. Explanation when asynchronous lead processing is blocked or fails.
     * @param string|null $value Value to set for the processingStatusReason property.
    */
    public function setProcessingStatusReason(?string $value): void {
        $this->processingStatusReason = $value;
    }

    /**
     * Sets the source property value. Identifier and display name of the related source.
     * @param LeadTableRow_source|null $value Value to set for the source property.
    */
    public function setSource(?LeadTableRow_source $value): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this lead table row in the Leadping API.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusTone property value. Presentation tone that helps clients style the current status of this lead table row.
     * @param string|null $value Value to set for the statusTone property.
    */
    public function setStatusTone(?string $value): void {
        $this->statusTone = $value;
    }

    /**
     * Sets the tags property value. Tags currently attached to this lead, source, or record.
     * @param array<TagSummary>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->tags = $value;
    }

    /**
     * Sets the updatedAt property value. UTC timestamp when this lead table row was last updated.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
