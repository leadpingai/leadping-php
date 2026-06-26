<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API tag response returned to authenticated clients.
*/
class TagResponse implements AdditionalDataHolder, Parsable 
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
     * @var string|null $businessId Business ID that owns this tag.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $color Hex color used to display this tag or status in Leadping clients.
    */
    private ?string $color = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $createdByUserId User ID of the person who created this tag response.
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var string|null $description Human-readable description that explains this tag response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isArchived Indicates whether this lead or record is archived.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name Display name for this tag response in the Leadping API.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $normalizedName Normalized name used for case-insensitive tag matching and deduplication.
    */
    private ?string $normalizedName = null;
    
    /**
     * Instantiates a new TagResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TagResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TagResponse {
        return new TagResponse();
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
     * Gets the businessId property value. Business ID that owns this tag.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the color property value. Hex color used to display this tag or status in Leadping clients.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdByUserId property value. User ID of the person who created this tag response.
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the description property value. Human-readable description that explains this tag response to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getDateTimeValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'normalizedName' => fn(ParseNode $n) => $o->setNormalizedName($n->getStringValue()),
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
     * Gets the isArchived property value. Indicates whether this lead or record is archived.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. Display name for this tag response in the Leadping API.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the normalizedName property value. Normalized name used for case-insensitive tag matching and deduplication.
     * @return string|null
    */
    public function getNormalizedName(): ?string {
        return $this->normalizedName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('normalizedName', $this->getNormalizedName());
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
     * Sets the businessId property value. Business ID that owns this tag.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the color property value. Hex color used to display this tag or status in Leadping clients.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->color = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdByUserId property value. User ID of the person who created this tag response.
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this tag response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isArchived property value. Indicates whether this lead or record is archived.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. Display name for this tag response in the Leadping API.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the normalizedName property value. Normalized name used for case-insensitive tag matching and deduplication.
     * @param string|null $value Value to set for the normalizedName property.
    */
    public function setNormalizedName(?string $value): void {
        $this->normalizedName = $value;
    }

}
