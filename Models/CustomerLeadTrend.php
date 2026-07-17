<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents customer lead trend data exposed by Leadping analytics.
*/
class CustomerLeadTrend implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AnalyticsComparison|null $comparison Date and time when this Leadping customer lead trend was comparison.
    */
    private ?AnalyticsComparison $comparison = null;
    
    /**
     * @var array<AnalyticsTrendPointOfint>|null $points Collection of points included with this Leadping customer lead trend.
    */
    private ?array $points = null;
    
    /**
     * @var int|null $total Total number of total records represented by this Leadping customer lead trend.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new CustomerLeadTrend and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerLeadTrend
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerLeadTrend {
        return new CustomerLeadTrend();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the comparison property value. Date and time when this Leadping customer lead trend was comparison.
     * @return AnalyticsComparison|null
    */
    public function getComparison(): ?AnalyticsComparison {
        return $this->comparison;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comparison' => fn(ParseNode $n) => $o->setComparison($n->getObjectValue([AnalyticsComparison::class, 'createFromDiscriminatorValue'])),
            'points' => fn(ParseNode $n) => $o->setPoints($n->getCollectionOfObjectValues([AnalyticsTrendPointOfint::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the points property value. Collection of points included with this Leadping customer lead trend.
     * @return array<AnalyticsTrendPointOfint>|null
    */
    public function getPoints(): ?array {
        return $this->points;
    }

    /**
     * Gets the total property value. Total number of total records represented by this Leadping customer lead trend.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('comparison', $this->getComparison());
        $writer->writeCollectionOfObjectValues('points', $this->getPoints());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the comparison property value. Date and time when this Leadping customer lead trend was comparison.
     * @param AnalyticsComparison|null $value Value to set for the comparison property.
    */
    public function setComparison(?AnalyticsComparison $value): void {
        $this->comparison = $value;
    }

    /**
     * Sets the points property value. Collection of points included with this Leadping customer lead trend.
     * @param array<AnalyticsTrendPointOfint>|null $value Value to set for the points property.
    */
    public function setPoints(?array $value): void {
        $this->points = $value;
    }

    /**
     * Sets the total property value. Total number of total records represented by this Leadping customer lead trend.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
