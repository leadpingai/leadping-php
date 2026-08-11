<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents customer response metrics data exposed by Leadping analytics.
*/
class CustomerResponseMetrics implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AnalyticsTrendPointOfdecimal>|null $averageMinutesTrend Collection of average minutes trend included with this Leadping customer response metrics.
    */
    private ?array $averageMinutesTrend = null;
    
    /**
     * Instantiates a new CustomerResponseMetrics and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerResponseMetrics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerResponseMetrics {
        return new CustomerResponseMetrics();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the averageMinutesTrend property value. Collection of average minutes trend included with this Leadping customer response metrics.
     * @return array<AnalyticsTrendPointOfdecimal>|null
    */
    public function getAverageMinutesTrend(): ?array {
        return $this->averageMinutesTrend;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageMinutesTrend' => fn(ParseNode $n) => $o->setAverageMinutesTrend($n->getCollectionOfObjectValues([AnalyticsTrendPointOfdecimal::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('averageMinutesTrend', $this->getAverageMinutesTrend());
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
     * Sets the averageMinutesTrend property value. Collection of average minutes trend included with this Leadping customer response metrics.
     * @param array<AnalyticsTrendPointOfdecimal>|null $value Value to set for the averageMinutesTrend property.
    */
    public function setAverageMinutesTrend(?array $value): void {
        $this->averageMinutesTrend = $value;
    }

}
