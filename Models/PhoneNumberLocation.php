<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for phone number location data.
*/
class PhoneNumberLocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneNumberLocation_coordinate|null $coordinate Latitude and longitude coordinate for this phone number location.
    */
    private ?PhoneNumberLocation_coordinate $coordinate = null;
    
    /**
     * @var string|null $countryCode Country code for the phone number or location represented by this phone number location.
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $location Geographic location metadata for the phone number, lead, or lookup result.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $state State, province, or region for the lead or business postal address.
    */
    private ?string $state = null;
    
    /**
     * @var string|null $timeZoneId IANA or Windows time zone identifier used for local scheduling and reporting.
    */
    private ?string $timeZoneId = null;
    
    /**
     * Instantiates a new PhoneNumberLocation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberLocation {
        return new PhoneNumberLocation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the coordinate property value. Latitude and longitude coordinate for this phone number location.
     * @return PhoneNumberLocation_coordinate|null
    */
    public function getCoordinate(): ?PhoneNumberLocation_coordinate {
        return $this->coordinate;
    }

    /**
     * Gets the countryCode property value. Country code for the phone number or location represented by this phone number location.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coordinate' => fn(ParseNode $n) => $o->setCoordinate($n->getObjectValue([PhoneNumberLocation_coordinate::class, 'createFromDiscriminatorValue'])),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
        ];
    }

    /**
     * Gets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the state property value. State, province, or region for the lead or business postal address.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the timeZoneId property value. IANA or Windows time zone identifier used for local scheduling and reporting.
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('coordinate', $this->getCoordinate());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
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
     * Sets the coordinate property value. Latitude and longitude coordinate for this phone number location.
     * @param PhoneNumberLocation_coordinate|null $value Value to set for the coordinate property.
    */
    public function setCoordinate(?PhoneNumberLocation_coordinate $value): void {
        $this->coordinate = $value;
    }

    /**
     * Sets the countryCode property value. Country code for the phone number or location represented by this phone number location.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->location = $value;
    }

    /**
     * Sets the state property value. State, province, or region for the lead or business postal address.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the timeZoneId property value. IANA or Windows time zone identifier used for local scheduling and reporting.
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

}
