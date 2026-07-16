<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API lead response returned to authenticated clients.
*/
class LeadResponse implements AdditionalDataHolder, Parsable 
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
     * @var string|null $archiveNote Optional note explaining why the lead was archived.
    */
    private ?string $archiveNote = null;
    
    /**
     * @var int|null $archiveReason Defines why a lead was removed from the active working pipeline.
    */
    private ?int $archiveReason = null;
    
    /**
     * @var LeadContact|null $contact Contact details for the lead or customer represented by this lead response.
    */
    private ?LeadContact $contact = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var LeadResponse_currentDisposition|null $currentDisposition Current disposition summary that describes the lead outcome.
    */
    private ?LeadResponse_currentDisposition $currentDisposition = null;
    
    /**
     * @var LeadProfile|null $customer Demographic profile details for the lead represented by this lead response.
    */
    private ?LeadProfile $customer = null;
    
    /**
     * @var bool|null $enabled Indicates whether this lead response is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isArchived Indicates whether the lead has been archived in Leadping.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var LeadMetadata|null $metadata Structured metadata used for attribution, integrations, and reporting on this lead response.
    */
    private ?LeadMetadata $metadata = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var array<TagSummary>|null $tags Tags currently attached to this lead, source, or record.
    */
    private ?array $tags = null;
    
    /**
     * Instantiates a new LeadResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadResponse {
        return new LeadResponse();
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
     * Gets the archiveNote property value. Optional note explaining why the lead was archived.
     * @return string|null
    */
    public function getArchiveNote(): ?string {
        return $this->archiveNote;
    }

    /**
     * Gets the archiveReason property value. Defines why a lead was removed from the active working pipeline.
     * @return int|null
    */
    public function getArchiveReason(): ?int {
        return $this->archiveReason;
    }

    /**
     * Gets the contact property value. Contact details for the lead or customer represented by this lead response.
     * @return LeadContact|null
    */
    public function getContact(): ?LeadContact {
        return $this->contact;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the currentDisposition property value. Current disposition summary that describes the lead outcome.
     * @return LeadResponse_currentDisposition|null
    */
    public function getCurrentDisposition(): ?LeadResponse_currentDisposition {
        return $this->currentDisposition;
    }

    /**
     * Gets the customer property value. Demographic profile details for the lead represented by this lead response.
     * @return LeadProfile|null
    */
    public function getCustomer(): ?LeadProfile {
        return $this->customer;
    }

    /**
     * Gets the enabled property value. Indicates whether this lead response is active and available in the Leadping API.
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
            'archiveNote' => fn(ParseNode $n) => $o->setArchiveNote($n->getStringValue()),
            'archiveReason' => fn(ParseNode $n) => $o->setArchiveReason($n->getIntegerValue()),
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([LeadContact::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'currentDisposition' => fn(ParseNode $n) => $o->setCurrentDisposition($n->getObjectValue([LeadResponse_currentDisposition::class, 'createFromDiscriminatorValue'])),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([LeadProfile::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([LeadMetadata::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([TagSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isArchived property value. Indicates whether the lead has been archived in Leadping.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this lead response.
     * @return LeadMetadata|null
    */
    public function getMetadata(): ?LeadMetadata {
        return $this->metadata;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the tags property value. Tags currently attached to this lead, source, or record.
     * @return array<TagSummary>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeStringValue('archivedByUserId', $this->getArchivedByUserId());
        $writer->writeStringValue('archiveNote', $this->getArchiveNote());
        $writer->writeIntegerValue('archiveReason', $this->getArchiveReason());
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeObjectValue('currentDisposition', $this->getCurrentDisposition());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeCollectionOfObjectValues('tags', $this->getTags());
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
     * Sets the archiveNote property value. Optional note explaining why the lead was archived.
     * @param string|null $value Value to set for the archiveNote property.
    */
    public function setArchiveNote(?string $value): void {
        $this->archiveNote = $value;
    }

    /**
     * Sets the archiveReason property value. Defines why a lead was removed from the active working pipeline.
     * @param int|null $value Value to set for the archiveReason property.
    */
    public function setArchiveReason(?int $value): void {
        $this->archiveReason = $value;
    }

    /**
     * Sets the contact property value. Contact details for the lead or customer represented by this lead response.
     * @param LeadContact|null $value Value to set for the contact property.
    */
    public function setContact(?LeadContact $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the currentDisposition property value. Current disposition summary that describes the lead outcome.
     * @param LeadResponse_currentDisposition|null $value Value to set for the currentDisposition property.
    */
    public function setCurrentDisposition(?LeadResponse_currentDisposition $value): void {
        $this->currentDisposition = $value;
    }

    /**
     * Sets the customer property value. Demographic profile details for the lead represented by this lead response.
     * @param LeadProfile|null $value Value to set for the customer property.
    */
    public function setCustomer(?LeadProfile $value): void {
        $this->customer = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this lead response is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isArchived property value. Indicates whether the lead has been archived in Leadping.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this lead response.
     * @param LeadMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?LeadMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the tags property value. Tags currently attached to this lead, source, or record.
     * @param array<TagSummary>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->tags = $value;
    }

}
