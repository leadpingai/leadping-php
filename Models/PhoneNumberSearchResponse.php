<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number search response returned to authenticated clients.
*/
class PhoneNumberSearchResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PhoneNumberSearchResult>|null $numbers Phone numbers returned or evaluated by this phone number search response.
    */
    private ?array $numbers = null;
    
    /**
     * Instantiates a new PhoneNumberSearchResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberSearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberSearchResponse {
        return new PhoneNumberSearchResponse();
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
            'numbers' => fn(ParseNode $n) => $o->setNumbers($n->getCollectionOfObjectValues([PhoneNumberSearchResult::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the numbers property value. Phone numbers returned or evaluated by this phone number search response.
     * @return array<PhoneNumberSearchResult>|null
    */
    public function getNumbers(): ?array {
        return $this->numbers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('numbers', $this->getNumbers());
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
     * Sets the numbers property value. Phone numbers returned or evaluated by this phone number search response.
     * @param array<PhoneNumberSearchResult>|null $value Value to set for the numbers property.
    */
    public function setNumbers(?array $value): void {
        $this->numbers = $value;
    }

}
