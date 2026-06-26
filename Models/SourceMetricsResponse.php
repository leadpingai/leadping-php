<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SourceMetricsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $generatedAt The generatedAt property
    */
    private ?DateTime $generatedAt = null;
    
    /**
     * @var array<AnalyticsTrendPointOfint>|null $points The points property
    */
    private ?array $points = null;
    
    /**
     * @var AnalyticsDateRange|null $range The range property
    */
    private ?AnalyticsDateRange $range = null;
    
    /**
     * @var int|null $totalLeads The totalLeads property
    */
    private ?int $totalLeads = null;
    
    /**
     * Instantiates a new SourceMetricsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceMetricsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceMetricsResponse {
        return new SourceMetricsResponse();
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
            'generatedAt' => fn(ParseNode $n) => $o->setGeneratedAt($n->getDateTimeValue()),
            'points' => fn(ParseNode $n) => $o->setPoints($n->getCollectionOfObjectValues([AnalyticsTrendPointOfint::class, 'createFromDiscriminatorValue'])),
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([AnalyticsDateRange::class, 'createFromDiscriminatorValue'])),
            'totalLeads' => fn(ParseNode $n) => $o->setTotalLeads($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the generatedAt property value. The generatedAt property
     * @return DateTime|null
    */
    public function getGeneratedAt(): ?DateTime {
        return $this->generatedAt;
    }

    /**
     * Gets the points property value. The points property
     * @return array<AnalyticsTrendPointOfint>|null
    */
    public function getPoints(): ?array {
        return $this->points;
    }

    /**
     * Gets the range property value. The range property
     * @return AnalyticsDateRange|null
    */
    public function getRange(): ?AnalyticsDateRange {
        return $this->range;
    }

    /**
     * Gets the totalLeads property value. The totalLeads property
     * @return int|null
    */
    public function getTotalLeads(): ?int {
        return $this->totalLeads;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('generatedAt', $this->getGeneratedAt());
        $writer->writeCollectionOfObjectValues('points', $this->getPoints());
        $writer->writeObjectValue('range', $this->getRange());
        $writer->writeIntegerValue('totalLeads', $this->getTotalLeads());
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
     * Sets the generatedAt property value. The generatedAt property
     * @param DateTime|null $value Value to set for the generatedAt property.
    */
    public function setGeneratedAt(?DateTime $value): void {
        $this->generatedAt = $value;
    }

    /**
     * Sets the points property value. The points property
     * @param array<AnalyticsTrendPointOfint>|null $value Value to set for the points property.
    */
    public function setPoints(?array $value): void {
        $this->points = $value;
    }

    /**
     * Sets the range property value. The range property
     * @param AnalyticsDateRange|null $value Value to set for the range property.
    */
    public function setRange(?AnalyticsDateRange $value): void {
        $this->range = $value;
    }

    /**
     * Sets the totalLeads property value. The totalLeads property
     * @param int|null $value Value to set for the totalLeads property.
    */
    public function setTotalLeads(?int $value): void {
        $this->totalLeads = $value;
    }

}
