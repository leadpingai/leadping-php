<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API phone number update request, including the fields clients can send.
*/
class PhoneNumberRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneNumberRequest_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?PhoneNumberRequest_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var string|null $businessId Business ID that owns the phone number being created or updated.
    */
    private ?string $businessId = null;
    
    /**
     * @var bool|null $enabled Indicates whether this phone number update request is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity, when updating an existing entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone number update request.
    */
    private ?string $number = null;
    
    /**
     * Instantiates a new PhoneNumberRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberRequest {
        return new PhoneNumberRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @return PhoneNumberRequest_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?PhoneNumberRequest_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the businessId property value. Business ID that owns the phone number being created or updated.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the enabled property value. Indicates whether this phone number update request is active and available in the Leadping API.
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
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([PhoneNumberRequest_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
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
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone number update request.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
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
     * Sets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @param PhoneNumberRequest_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?PhoneNumberRequest_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the businessId property value. Business ID that owns the phone number being created or updated.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this phone number update request is active and available in the Leadping API.
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
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone number update request.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

}
