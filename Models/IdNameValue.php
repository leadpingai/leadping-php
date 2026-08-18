<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Extends an identifier-and-name resource reference with an optional string value used for display or selection metadata.
*/
class IdNameValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id Stable unique identifier of the referenced resource.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Human-readable display name of the referenced resource.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $value Optional machine-readable or display value associated with the referenced resource.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new IdNameValue and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdNameValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdNameValue {
        return new IdNameValue();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Stable unique identifier of the referenced resource.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. Human-readable display name of the referenced resource.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the value property value. Optional machine-readable or display value associated with the referenced resource.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the id property value. Stable unique identifier of the referenced resource.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. Human-readable display name of the referenced resource.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the value property value. Optional machine-readable or display value associated with the referenced resource.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
