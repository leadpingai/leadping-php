<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An object for ordering during querying
*/
class OrderByOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var OrderByOption_direction|null $direction An enumerator for sort direction during querying
    */
    private ?OrderByOption_direction $direction = null;
    
    /**
     * @var string|null $field The field to sort by.
    */
    private ?string $field = null;
    
    /**
     * Instantiates a new OrderByOption and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderByOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderByOption {
        return new OrderByOption();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the direction property value. An enumerator for sort direction during querying
     * @return OrderByOption_direction|null
    */
    public function getDirection(): ?OrderByOption_direction {
        return $this->direction;
    }

    /**
     * Gets the field property value. The field to sort by.
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getEnumValue(OrderByOption_direction::class)),
            'field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('direction', $this->getDirection());
        $writer->writeStringValue('field', $this->getField());
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
     * Sets the direction property value. An enumerator for sort direction during querying
     * @param OrderByOption_direction|null $value Value to set for the direction property.
    */
    public function setDirection(?OrderByOption_direction $value): void {
        $this->direction = $value;
    }

    /**
     * Sets the field property value. The field to sort by.
     * @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value): void {
        $this->field = $value;
    }

}
