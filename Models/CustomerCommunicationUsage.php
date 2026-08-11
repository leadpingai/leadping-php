<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents customer communication usage data exposed by Leadping analytics.
*/
class CustomerCommunicationUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CustomerCommunicationUsagePoint>|null $trend Collection of trend included with this Leadping customer communication usage.
    */
    private ?array $trend = null;
    
    /**
     * Instantiates a new CustomerCommunicationUsage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerCommunicationUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerCommunicationUsage {
        return new CustomerCommunicationUsage();
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
            'trend' => fn(ParseNode $n) => $o->setTrend($n->getCollectionOfObjectValues([CustomerCommunicationUsagePoint::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the trend property value. Collection of trend included with this Leadping customer communication usage.
     * @return array<CustomerCommunicationUsagePoint>|null
    */
    public function getTrend(): ?array {
        return $this->trend;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('trend', $this->getTrend());
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
     * Sets the trend property value. Collection of trend included with this Leadping customer communication usage.
     * @param array<CustomerCommunicationUsagePoint>|null $value Value to set for the trend property.
    */
    public function setTrend(?array $value): void {
        $this->trend = $value;
    }

}
