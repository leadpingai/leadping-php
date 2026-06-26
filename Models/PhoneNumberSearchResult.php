<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Result schema for the Leadping API phone number search result returned by lookup and validation endpoints.
*/
class PhoneNumberSearchResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneNumberSearchResult_location|null $location Geographic location metadata for the phone number, lead, or lookup result.
    */
    private ?PhoneNumberSearchResult_location $location = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone number search result.
    */
    private ?string $number = null;
    
    /**
     * Instantiates a new PhoneNumberSearchResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberSearchResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberSearchResult {
        return new PhoneNumberSearchResult();
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
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PhoneNumberSearchResult_location::class, 'createFromDiscriminatorValue'])),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @return PhoneNumberSearchResult_location|null
    */
    public function getLocation(): ?PhoneNumberSearchResult_location {
        return $this->location;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone number search result.
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
        $writer->writeObjectValue('location', $this->getLocation());
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
     * Sets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @param PhoneNumberSearchResult_location|null $value Value to set for the location property.
    */
    public function setLocation(?PhoneNumberSearchResult_location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone number search result.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

}
