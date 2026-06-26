<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number availability result returned to authenticated clients.
*/
class PhoneNumberAvailabilityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $currency ISO currency code used for the monetary amounts in this phone number availability result.
    */
    private ?string $currency = null;
    
    /**
     * @var bool|null $isAvailable Indicates whether this phone number is available for purchase or assignment.
    */
    private ?bool $isAvailable = null;
    
    /**
     * @var PhoneNumberAvailabilityResponse_location|null $location Geographic location metadata for the phone number, lead, or lookup result.
    */
    private ?PhoneNumberAvailabilityResponse_location $location = null;
    
    /**
     * @var string|null $phoneNumber Phone number used by this phone number availability result for calls, SMS, lookup, or routing.
    */
    private ?string $phoneNumber = null;
    
    /**
     * Instantiates a new PhoneNumberAvailabilityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberAvailabilityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberAvailabilityResponse {
        return new PhoneNumberAvailabilityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. ISO currency code used for the monetary amounts in this phone number availability result.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'isAvailable' => fn(ParseNode $n) => $o->setIsAvailable($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PhoneNumberAvailabilityResponse_location::class, 'createFromDiscriminatorValue'])),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAvailable property value. Indicates whether this phone number is available for purchase or assignment.
     * @return bool|null
    */
    public function getIsAvailable(): ?bool {
        return $this->isAvailable;
    }

    /**
     * Gets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @return PhoneNumberAvailabilityResponse_location|null
    */
    public function getLocation(): ?PhoneNumberAvailabilityResponse_location {
        return $this->location;
    }

    /**
     * Gets the phoneNumber property value. Phone number used by this phone number availability result for calls, SMS, lookup, or routing.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeBooleanValue('isAvailable', $this->getIsAvailable());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
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
     * Sets the currency property value. ISO currency code used for the monetary amounts in this phone number availability result.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the isAvailable property value. Indicates whether this phone number is available for purchase or assignment.
     * @param bool|null $value Value to set for the isAvailable property.
    */
    public function setIsAvailable(?bool $value): void {
        $this->isAvailable = $value;
    }

    /**
     * Sets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @param PhoneNumberAvailabilityResponse_location|null $value Value to set for the location property.
    */
    public function setLocation(?PhoneNumberAvailabilityResponse_location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number used by this phone number availability result for calls, SMS, lookup, or routing.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

}
