<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Aggregates lead volume, conversion, delivery, and activity metrics attributed to a Leadping source over the requested reporting period.
*/
class SourceMetricsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AnalyticsTrendPointOfint>|null $errorPoints Collection of lead intake error points included with this Leadping source metrics.
    */
    private ?array $errorPoints = null;
    
    /**
     * @var DateTime|null $generatedAt Date and time when the source metrics was generated.
    */
    private ?DateTime $generatedAt = null;
    
    /**
     * @var array<AnalyticsTrendPointOfint>|null $points Collection of points included with this Leadping source metrics.
    */
    private ?array $points = null;
    
    /**
     * @var AnalyticsDateRange|null $range Defines the inclusive reporting window and comparison window used to calculate Leadping analytics.
    */
    private ?AnalyticsDateRange $range = null;
    
    /**
     * @var int|null $totalErrors Total number of lead intake errors represented by this Leadping source metrics.
    */
    private ?int $totalErrors = null;
    
    /**
     * @var int|null $totalLeads Total number of leads records represented by this Leadping source metrics.
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
     * Gets the errorPoints property value. Collection of lead intake error points included with this Leadping source metrics.
     * @return array<AnalyticsTrendPointOfint>|null
    */
    public function getErrorPoints(): ?array {
        return $this->errorPoints;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorPoints' => fn(ParseNode $n) => $o->setErrorPoints($n->getCollectionOfObjectValues([AnalyticsTrendPointOfint::class, 'createFromDiscriminatorValue'])),
            'generatedAt' => fn(ParseNode $n) => $o->setGeneratedAt($n->getDateTimeValue()),
            'points' => fn(ParseNode $n) => $o->setPoints($n->getCollectionOfObjectValues([AnalyticsTrendPointOfint::class, 'createFromDiscriminatorValue'])),
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([AnalyticsDateRange::class, 'createFromDiscriminatorValue'])),
            'totalErrors' => fn(ParseNode $n) => $o->setTotalErrors($n->getIntegerValue()),
            'totalLeads' => fn(ParseNode $n) => $o->setTotalLeads($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the generatedAt property value. Date and time when the source metrics was generated.
     * @return DateTime|null
    */
    public function getGeneratedAt(): ?DateTime {
        return $this->generatedAt;
    }

    /**
     * Gets the points property value. Collection of points included with this Leadping source metrics.
     * @return array<AnalyticsTrendPointOfint>|null
    */
    public function getPoints(): ?array {
        return $this->points;
    }

    /**
     * Gets the range property value. Defines the inclusive reporting window and comparison window used to calculate Leadping analytics.
     * @return AnalyticsDateRange|null
    */
    public function getRange(): ?AnalyticsDateRange {
        return $this->range;
    }

    /**
     * Gets the totalErrors property value. Total number of lead intake errors represented by this Leadping source metrics.
     * @return int|null
    */
    public function getTotalErrors(): ?int {
        return $this->totalErrors;
    }

    /**
     * Gets the totalLeads property value. Total number of leads records represented by this Leadping source metrics.
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
        $writer->writeCollectionOfObjectValues('errorPoints', $this->getErrorPoints());
        $writer->writeDateTimeValue('generatedAt', $this->getGeneratedAt());
        $writer->writeCollectionOfObjectValues('points', $this->getPoints());
        $writer->writeObjectValue('range', $this->getRange());
        $writer->writeIntegerValue('totalErrors', $this->getTotalErrors());
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
     * Sets the errorPoints property value. Collection of lead intake error points included with this Leadping source metrics.
     * @param array<AnalyticsTrendPointOfint>|null $value Value to set for the errorPoints property.
    */
    public function setErrorPoints(?array $value): void {
        $this->errorPoints = $value;
    }

    /**
     * Sets the generatedAt property value. Date and time when the source metrics was generated.
     * @param DateTime|null $value Value to set for the generatedAt property.
    */
    public function setGeneratedAt(?DateTime $value): void {
        $this->generatedAt = $value;
    }

    /**
     * Sets the points property value. Collection of points included with this Leadping source metrics.
     * @param array<AnalyticsTrendPointOfint>|null $value Value to set for the points property.
    */
    public function setPoints(?array $value): void {
        $this->points = $value;
    }

    /**
     * Sets the range property value. Defines the inclusive reporting window and comparison window used to calculate Leadping analytics.
     * @param AnalyticsDateRange|null $value Value to set for the range property.
    */
    public function setRange(?AnalyticsDateRange $value): void {
        $this->range = $value;
    }

    /**
     * Sets the totalErrors property value. Total number of lead intake errors represented by this Leadping source metrics.
     * @param int|null $value Value to set for the totalErrors property.
    */
    public function setTotalErrors(?int $value): void {
        $this->totalErrors = $value;
    }

    /**
     * Sets the totalLeads property value. Total number of leads records represented by this Leadping source metrics.
     * @param int|null $value Value to set for the totalLeads property.
    */
    public function setTotalLeads(?int $value): void {
        $this->totalLeads = $value;
    }

}
