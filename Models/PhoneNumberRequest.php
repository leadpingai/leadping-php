<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the fields clients can send when working with phone number update.
*/
class PhoneNumberRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name Human-readable label for the phone number.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone number update request.
    */
    private ?string $number = null;
    
    /**
     * @var bool|null $numberHealthEnabled Opts this number into the optional $2 monthly number health add-on. Defaults to on on creation; omitted updates preserve the current selection.
    */
    private ?bool $numberHealthEnabled = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'numberHealthEnabled' => fn(ParseNode $n) => $o->setNumberHealthEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the name property value. Human-readable label for the phone number.
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
     * Gets the numberHealthEnabled property value. Opts this number into the optional $2 monthly number health add-on. Defaults to on on creation; omitted updates preserve the current selection.
     * @return bool|null
    */
    public function getNumberHealthEnabled(): ?bool {
        return $this->numberHealthEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeBooleanValue('numberHealthEnabled', $this->getNumberHealthEnabled());
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
     * Sets the name property value. Human-readable label for the phone number.
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

    /**
     * Sets the numberHealthEnabled property value. Opts this number into the optional $2 monthly number health add-on. Defaults to on on creation; omitted updates preserve the current selection.
     * @param bool|null $value Value to set for the numberHealthEnabled property.
    */
    public function setNumberHealthEnabled(?bool $value): void {
        $this->numberHealthEnabled = $value;
    }

}
