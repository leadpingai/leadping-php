<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes how a phone location value was resolved.
*/
class PhoneLocationSource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $method The resolution method, such as Telnyx-city-state, coordinates, phone-number, or state-default.
    */
    private ?string $method = null;
    
    /**
     * @var string|null $query The city, state, coordinates, phone number, or representative ZIP used by the method.
    */
    private ?string $query = null;
    
    /**
     * Instantiates a new PhoneLocationSource and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneLocationSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneLocationSource {
        return new PhoneLocationSource();
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
            'method' => fn(ParseNode $n) => $o->setMethod($n->getStringValue()),
            'query' => fn(ParseNode $n) => $o->setQuery($n->getStringValue()),
        ];
    }

    /**
     * Gets the method property value. The resolution method, such as Telnyx-city-state, coordinates, phone-number, or state-default.
     * @return string|null
    */
    public function getMethod(): ?string {
        return $this->method;
    }

    /**
     * Gets the query property value. The city, state, coordinates, phone number, or representative ZIP used by the method.
     * @return string|null
    */
    public function getQuery(): ?string {
        return $this->query;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('method', $this->getMethod());
        $writer->writeStringValue('query', $this->getQuery());
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
     * Sets the method property value. The resolution method, such as Telnyx-city-state, coordinates, phone-number, or state-default.
     * @param string|null $value Value to set for the method property.
    */
    public function setMethod(?string $value): void {
        $this->method = $value;
    }

    /**
     * Sets the query property value. The city, state, coordinates, phone number, or representative ZIP used by the method.
     * @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value): void {
        $this->query = $value;
    }

}
