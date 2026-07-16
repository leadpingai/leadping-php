<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Activation health associated with this Leadping customer analytics.
*/
class CustomerActivationHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CustomerActivationHealthItem>|null $items Collection of items included with this Leadping customer activation health.
    */
    private ?array $items = null;
    
    /**
     * @var string|null $overallStatus Current overall status for this Leadping customer activation health.
    */
    private ?string $overallStatus = null;
    
    /**
     * Instantiates a new CustomerActivationHealth and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerActivationHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerActivationHealth {
        return new CustomerActivationHealth();
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
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([CustomerActivationHealthItem::class, 'createFromDiscriminatorValue'])),
            'overallStatus' => fn(ParseNode $n) => $o->setOverallStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the items property value. Collection of items included with this Leadping customer activation health.
     * @return array<CustomerActivationHealthItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the overallStatus property value. Current overall status for this Leadping customer activation health.
     * @return string|null
    */
    public function getOverallStatus(): ?string {
        return $this->overallStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('overallStatus', $this->getOverallStatus());
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
     * Sets the items property value. Collection of items included with this Leadping customer activation health.
     * @param array<CustomerActivationHealthItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the overallStatus property value. Current overall status for this Leadping customer activation health.
     * @param string|null $value Value to set for the overallStatus property.
    */
    public function setOverallStatus(?string $value): void {
        $this->overallStatus = $value;
    }

}
