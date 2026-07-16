<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Request schema for the Leadping API lead request, including the fields clients can send.
*/
class LeadRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var LeadContact|null $contact Contact details for the lead or customer represented by this lead request.
    */
    private ?LeadContact $contact = null;
    
    /**
     * @var LeadProfile|null $customer Demographic profile details for the lead represented by this lead request.
    */
    private ?LeadProfile $customer = null;
    
    /**
     * @var bool|null $enabled Indicates whether this lead request is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity, when updating an existing entity.
    */
    private ?string $id = null;
    
    /**
     * @var LeadMetadata|null $metadata Structured metadata used for attribution, integrations, and reporting on this lead request.
    */
    private ?LeadMetadata $metadata = null;
    
    /**
     * @var array<string>|null $tagIds Tag IDs assigned to or filtered against this lead.
    */
    private ?array $tagIds = null;
    
    /**
     * @var array<string>|null $tagNames Tag names assigned to this lead when matching existing tags by name.
    */
    private ?array $tagNames = null;
    
    /**
     * Instantiates a new LeadRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadRequest {
        return new LeadRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the contact property value. Contact details for the lead or customer represented by this lead request.
     * @return LeadContact|null
    */
    public function getContact(): ?LeadContact {
        return $this->contact;
    }

    /**
     * Gets the customer property value. Demographic profile details for the lead represented by this lead request.
     * @return LeadProfile|null
    */
    public function getCustomer(): ?LeadProfile {
        return $this->customer;
    }

    /**
     * Gets the enabled property value. Indicates whether this lead request is active and available in the Leadping API.
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
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([LeadContact::class, 'createFromDiscriminatorValue'])),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([LeadProfile::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([LeadMetadata::class, 'createFromDiscriminatorValue'])),
            'tagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTagIds($val);
            },
            'tagNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTagNames($val);
            },
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this lead request.
     * @return LeadMetadata|null
    */
    public function getMetadata(): ?LeadMetadata {
        return $this->metadata;
    }

    /**
     * Gets the tagIds property value. Tag IDs assigned to or filtered against this lead.
     * @return array<string>|null
    */
    public function getTagIds(): ?array {
        return $this->tagIds;
    }

    /**
     * Gets the tagNames property value. Tag names assigned to this lead when matching existing tags by name.
     * @return array<string>|null
    */
    public function getTagNames(): ?array {
        return $this->tagNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeCollectionOfPrimitiveValues('tagIds', $this->getTagIds());
        $writer->writeCollectionOfPrimitiveValues('tagNames', $this->getTagNames());
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
     * Sets the contact property value. Contact details for the lead or customer represented by this lead request.
     * @param LeadContact|null $value Value to set for the contact property.
    */
    public function setContact(?LeadContact $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the customer property value. Demographic profile details for the lead represented by this lead request.
     * @param LeadProfile|null $value Value to set for the customer property.
    */
    public function setCustomer(?LeadProfile $value): void {
        $this->customer = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this lead request is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this lead request.
     * @param LeadMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?LeadMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the tagIds property value. Tag IDs assigned to or filtered against this lead.
     * @param array<string>|null $value Value to set for the tagIds property.
    */
    public function setTagIds(?array $value): void {
        $this->tagIds = $value;
    }

    /**
     * Sets the tagNames property value. Tag names assigned to this lead when matching existing tags by name.
     * @param array<string>|null $value Value to set for the tagNames property.
    */
    public function setTagNames(?array $value): void {
        $this->tagNames = $value;
    }

}
