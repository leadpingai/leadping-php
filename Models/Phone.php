<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for lead phone number data.
*/
class Phone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this lead phone number.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $phoneIdentityId Identifier of the canonical phone identity stored by Leadping.
    */
    private ?string $phoneIdentityId = null;
    
    /**
     * @var string|null $type Type classification used to route and interpret this lead phone number in the Leadping API.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new Phone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Phone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Phone {
        return new Phone();
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
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'phoneIdentityId' => fn(ParseNode $n) => $o->setPhoneIdentityId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this lead phone number.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the phoneIdentityId property value. Identifier of the canonical phone identity stored by Leadping.
     * @return string|null
    */
    public function getPhoneIdentityId(): ?string {
        return $this->phoneIdentityId;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this lead phone number in the Leadping API.
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
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('phoneIdentityId', $this->getPhoneIdentityId());
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
     * Sets the number property value. E.164 phone number exposed by this lead phone number.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the phoneIdentityId property value. Identifier of the canonical phone identity stored by Leadping.
     * @param string|null $value Value to set for the phoneIdentityId property.
    */
    public function setPhoneIdentityId(?string $value): void {
        $this->phoneIdentityId = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this lead phone number in the Leadping API.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
