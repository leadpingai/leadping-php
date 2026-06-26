<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Latitude and longitude coordinate for this lead contact profile.
*/
class Coordinate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $latitude The latitude property
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude The longitude property
    */
    private ?float $longitude = null;
    
    /**
     * Instantiates a new Coordinate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Coordinate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Coordinate {
        return new Coordinate();
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
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
        ];
    }

    /**
     * Gets the latitude property value. The latitude property
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the longitude property value. The longitude property
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('latitude', $this->getLatitude());
        $writer->writeFloatValue('longitude', $this->getLongitude());
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
     * Sets the latitude property value. The latitude property
     * @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->latitude = $value;
    }

    /**
     * Sets the longitude property value. The longitude property
     * @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->longitude = $value;
    }

}
