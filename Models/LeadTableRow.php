<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API lead table row results shown in searchable tables.
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
     * @var string|null $businessId Business ID that owns this lead.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $businessName Business display name shown for this lead.
    */
    private ?string $businessName = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this lead table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var LeadTableRow_currentDisposition|null $currentDisposition Current disposition summary that describes the lead outcome.
    */
    private ?LeadTableRow_currentDisposition $currentDisposition = null;
    
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
     * @var string|null $phone Phone details for the lead, user, or business represented by this lead table row.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $sourceId Lead source ID that created or supplied this lead.
    */
    private ?string $sourceId = null;
    
    /**
     * @var string|null $sourceName Lead source display name shown for this lead.
    */
    private ?string $sourceName = null;
    
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
     * Gets the businessId property value. Business ID that owns this lead.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the businessName property value. Business display name shown for this lead.
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this lead table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the currentDisposition property value. Current disposition summary that describes the lead outcome.
     * @return LeadTableRow_currentDisposition|null
    */
    public function getCurrentDisposition(): ?LeadTableRow_currentDisposition {
        return $this->currentDisposition;
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
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'currentDisposition' => fn(ParseNode $n) => $o->setCurrentDisposition($n->getObjectValue([LeadTableRow_currentDisposition::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'sourceName' => fn(ParseNode $n) => $o->setSourceName($n->getStringValue()),
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
     * Gets the phone property value. Phone details for the lead, user, or business represented by this lead table row.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the sourceId property value. Lead source ID that created or supplied this lead.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the sourceName property value. Lead source display name shown for this lead.
     * @return string|null
    */
    public function getSourceName(): ?string {
        return $this->sourceName;
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
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeObjectValue('currentDisposition', $this->getCurrentDisposition());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('sourceName', $this->getSourceName());
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
     * Sets the businessId property value. Business ID that owns this lead.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the businessName property value. Business display name shown for this lead.
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this lead table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the currentDisposition property value. Current disposition summary that describes the lead outcome.
     * @param LeadTableRow_currentDisposition|null $value Value to set for the currentDisposition property.
    */
    public function setCurrentDisposition(?LeadTableRow_currentDisposition $value): void {
        $this->currentDisposition = $value;
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
     * Sets the phone property value. Phone details for the lead, user, or business represented by this lead table row.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID that created or supplied this lead.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the sourceName property value. Lead source display name shown for this lead.
     * @param string|null $value Value to set for the sourceName property.
    */
    public function setSourceName(?string $value): void {
        $this->sourceName = $value;
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
