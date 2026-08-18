<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a physical or mailing address using international locality, administrative-area, postal-code, and country fields.
*/
class StreetAddress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $additionalInfo Additional address context or delivery instructions that do not fit the structured fields.
    */
    private ?string $additionalInfo = null;
    
    /**
     * @var string|null $city City, town, village, or other postal locality.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country Two-letter ISO 3166-1 alpha-2 country code, such as US, GB, or CA.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $line1 Primary delivery line, such as a street address, post-office box, or company name.
    */
    private ?string $line1 = null;
    
    /**
     * @var string|null $line2 Secondary delivery line, such as an apartment, suite, unit, floor, or building.
    */
    private ?string $line2 = null;
    
    /**
     * @var string|null $postalCode Postal routing code, such as a ZIP code or postcode, formatted according to the destination country.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $province Province or territory when represented separately from State by the source or destination system.
    */
    private ?string $province = null;
    
    /**
     * @var string|null $region Region, district, county, prefecture, or other administrative area not represented by state or province.
    */
    private ?string $region = null;
    
    /**
     * @var string|null $state State or equivalent first-level administrative subdivision when that label is used by the country.
    */
    private ?string $state = null;
    
    /**
     * Instantiates a new StreetAddress and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StreetAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StreetAddress {
        return new StreetAddress();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalInfo property value. Additional address context or delivery instructions that do not fit the structured fields.
     * @return string|null
    */
    public function getAdditionalInfo(): ?string {
        return $this->additionalInfo;
    }

    /**
     * Gets the city property value. City, town, village, or other postal locality.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. Two-letter ISO 3166-1 alpha-2 country code, such as US, GB, or CA.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInfo' => fn(ParseNode $n) => $o->setAdditionalInfo($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'line1' => fn(ParseNode $n) => $o->setLine1($n->getStringValue()),
            'line2' => fn(ParseNode $n) => $o->setLine2($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'province' => fn(ParseNode $n) => $o->setProvince($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the line1 property value. Primary delivery line, such as a street address, post-office box, or company name.
     * @return string|null
    */
    public function getLine1(): ?string {
        return $this->line1;
    }

    /**
     * Gets the line2 property value. Secondary delivery line, such as an apartment, suite, unit, floor, or building.
     * @return string|null
    */
    public function getLine2(): ?string {
        return $this->line2;
    }

    /**
     * Gets the postalCode property value. Postal routing code, such as a ZIP code or postcode, formatted according to the destination country.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the province property value. Province or territory when represented separately from State by the source or destination system.
     * @return string|null
    */
    public function getProvince(): ?string {
        return $this->province;
    }

    /**
     * Gets the region property value. Region, district, county, prefecture, or other administrative area not represented by state or province.
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->region;
    }

    /**
     * Gets the state property value. State or equivalent first-level administrative subdivision when that label is used by the country.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalInfo', $this->getAdditionalInfo());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('line1', $this->getLine1());
        $writer->writeStringValue('line2', $this->getLine2());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('province', $this->getProvince());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeStringValue('state', $this->getState());
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
     * Sets the additionalInfo property value. Additional address context or delivery instructions that do not fit the structured fields.
     * @param string|null $value Value to set for the additionalInfo property.
    */
    public function setAdditionalInfo(?string $value): void {
        $this->additionalInfo = $value;
    }

    /**
     * Sets the city property value. City, town, village, or other postal locality.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. Two-letter ISO 3166-1 alpha-2 country code, such as US, GB, or CA.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the line1 property value. Primary delivery line, such as a street address, post-office box, or company name.
     * @param string|null $value Value to set for the line1 property.
    */
    public function setLine1(?string $value): void {
        $this->line1 = $value;
    }

    /**
     * Sets the line2 property value. Secondary delivery line, such as an apartment, suite, unit, floor, or building.
     * @param string|null $value Value to set for the line2 property.
    */
    public function setLine2(?string $value): void {
        $this->line2 = $value;
    }

    /**
     * Sets the postalCode property value. Postal routing code, such as a ZIP code or postcode, formatted according to the destination country.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the province property value. Province or territory when represented separately from State by the source or destination system.
     * @param string|null $value Value to set for the province property.
    */
    public function setProvince(?string $value): void {
        $this->province = $value;
    }

    /**
     * Sets the region property value. Region, district, county, prefecture, or other administrative area not represented by state or province.
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->region = $value;
    }

    /**
     * Sets the state property value. State or equivalent first-level administrative subdivision when that label is used by the country.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

}
