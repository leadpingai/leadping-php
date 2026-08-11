<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a configurable status that can be assigned to leads.
*/
class LeadStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var LeadStatusCategory|null $category LeadStatusChange category represented by the lead status.
    */
    private ?LeadStatusCategory $category = null;
    
    /**
     * @var string|null $color Display color assigned to the lead status.
    */
    private ?string $color = null;
    
    /**
     * @var string|null $id Unique identifier for the lead status.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isArchived Indicates whether the lead status has been archived.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var DateTime|null $modifiedAt Date and time when the lead status was last modified.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name Display name of the lead status.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $organizationId Identifier of the organization that owns the lead status.
    */
    private ?string $organizationId = null;
    
    /**
     * Instantiates a new LeadStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadStatusResponse {
        return new LeadStatusResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. LeadStatusChange category represented by the lead status.
     * @return LeadStatusCategory|null
    */
    public function getCategory(): ?LeadStatusCategory {
        return $this->category;
    }

    /**
     * Gets the color property value. Display color assigned to the lead status.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LeadStatusCategory::class)),
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier for the lead status.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isArchived property value. Indicates whether the lead status has been archived.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the modifiedAt property value. Date and time when the lead status was last modified.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. Display name of the lead status.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the organizationId property value. Identifier of the organization that owns the lead status.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
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
     * Sets the category property value. LeadStatusChange category represented by the lead status.
     * @param LeadStatusCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LeadStatusCategory $value): void {
        $this->category = $value;
    }

    /**
     * Sets the color property value. Display color assigned to the lead status.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->color = $value;
    }

    /**
     * Sets the id property value. Unique identifier for the lead status.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isArchived property value. Indicates whether the lead status has been archived.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the modifiedAt property value. Date and time when the lead status was last modified.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. Display name of the lead status.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the organizationId property value. Identifier of the organization that owns the lead status.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

}
