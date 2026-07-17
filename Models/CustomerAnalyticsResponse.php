<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response model containing customer analytics data returned by the Leadping API.
*/
class CustomerAnalyticsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var CustomerActivationHealth|null $activationHealth Activation health associated with this Leadping customer analytics.
    */
    private ?CustomerActivationHealth $activationHealth = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CustomerAutomationHealth|null $automationHealth Automation health associated with this Leadping customer analytics.
    */
    private ?CustomerAutomationHealth $automationHealth = null;
    
    /**
     * @var CustomerCommunicationUsage|null $communicationUsage Communication usage associated with this Leadping customer analytics.
    */
    private ?CustomerCommunicationUsage $communicationUsage = null;
    
    /**
     * @var DateTime|null $generatedAt Date and time when this Leadping customer analytics was generated.
    */
    private ?DateTime $generatedAt = null;
    
    /**
     * @var array<CustomerLeadSourceBreakdown>|null $leadSources Collection of lead sources included with this Leadping customer analytics.
    */
    private ?array $leadSources = null;
    
    /**
     * @var CustomerLeadTrend|null $leadTrend Lead trend associated with this Leadping customer analytics.
    */
    private ?CustomerLeadTrend $leadTrend = null;
    
    /**
     * @var array<CustomerNeedsAttentionItem>|null $needsAttention Date and time when this Leadping customer analytics was needs attention.
    */
    private ?array $needsAttention = null;
    
    /**
     * @var AnalyticsDateRange|null $range Range associated with this Leadping customer analytics.
    */
    private ?AnalyticsDateRange $range = null;
    
    /**
     * @var CustomerResponseMetrics|null $responseMetrics Response metrics associated with this Leadping customer analytics.
    */
    private ?CustomerResponseMetrics $responseMetrics = null;
    
    /**
     * @var CustomerAnalyticsSummary|null $summary Human-readable summary for this Leadping customer analytics.
    */
    private ?CustomerAnalyticsSummary $summary = null;
    
    /**
     * Instantiates a new CustomerAnalyticsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerAnalyticsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerAnalyticsResponse {
        return new CustomerAnalyticsResponse();
    }

    /**
     * Gets the activationHealth property value. Activation health associated with this Leadping customer analytics.
     * @return CustomerActivationHealth|null
    */
    public function getActivationHealth(): ?CustomerActivationHealth {
        return $this->activationHealth;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationHealth property value. Automation health associated with this Leadping customer analytics.
     * @return CustomerAutomationHealth|null
    */
    public function getAutomationHealth(): ?CustomerAutomationHealth {
        return $this->automationHealth;
    }

    /**
     * Gets the communicationUsage property value. Communication usage associated with this Leadping customer analytics.
     * @return CustomerCommunicationUsage|null
    */
    public function getCommunicationUsage(): ?CustomerCommunicationUsage {
        return $this->communicationUsage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activationHealth' => fn(ParseNode $n) => $o->setActivationHealth($n->getObjectValue([CustomerActivationHealth::class, 'createFromDiscriminatorValue'])),
            'automationHealth' => fn(ParseNode $n) => $o->setAutomationHealth($n->getObjectValue([CustomerAutomationHealth::class, 'createFromDiscriminatorValue'])),
            'communicationUsage' => fn(ParseNode $n) => $o->setCommunicationUsage($n->getObjectValue([CustomerCommunicationUsage::class, 'createFromDiscriminatorValue'])),
            'generatedAt' => fn(ParseNode $n) => $o->setGeneratedAt($n->getDateTimeValue()),
            'leadSources' => fn(ParseNode $n) => $o->setLeadSources($n->getCollectionOfObjectValues([CustomerLeadSourceBreakdown::class, 'createFromDiscriminatorValue'])),
            'leadTrend' => fn(ParseNode $n) => $o->setLeadTrend($n->getObjectValue([CustomerLeadTrend::class, 'createFromDiscriminatorValue'])),
            'needsAttention' => fn(ParseNode $n) => $o->setNeedsAttention($n->getCollectionOfObjectValues([CustomerNeedsAttentionItem::class, 'createFromDiscriminatorValue'])),
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([AnalyticsDateRange::class, 'createFromDiscriminatorValue'])),
            'responseMetrics' => fn(ParseNode $n) => $o->setResponseMetrics($n->getObjectValue([CustomerResponseMetrics::class, 'createFromDiscriminatorValue'])),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getObjectValue([CustomerAnalyticsSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the generatedAt property value. Date and time when this Leadping customer analytics was generated.
     * @return DateTime|null
    */
    public function getGeneratedAt(): ?DateTime {
        return $this->generatedAt;
    }

    /**
     * Gets the leadSources property value. Collection of lead sources included with this Leadping customer analytics.
     * @return array<CustomerLeadSourceBreakdown>|null
    */
    public function getLeadSources(): ?array {
        return $this->leadSources;
    }

    /**
     * Gets the leadTrend property value. Lead trend associated with this Leadping customer analytics.
     * @return CustomerLeadTrend|null
    */
    public function getLeadTrend(): ?CustomerLeadTrend {
        return $this->leadTrend;
    }

    /**
     * Gets the needsAttention property value. Date and time when this Leadping customer analytics was needs attention.
     * @return array<CustomerNeedsAttentionItem>|null
    */
    public function getNeedsAttention(): ?array {
        return $this->needsAttention;
    }

    /**
     * Gets the range property value. Range associated with this Leadping customer analytics.
     * @return AnalyticsDateRange|null
    */
    public function getRange(): ?AnalyticsDateRange {
        return $this->range;
    }

    /**
     * Gets the responseMetrics property value. Response metrics associated with this Leadping customer analytics.
     * @return CustomerResponseMetrics|null
    */
    public function getResponseMetrics(): ?CustomerResponseMetrics {
        return $this->responseMetrics;
    }

    /**
     * Gets the summary property value. Human-readable summary for this Leadping customer analytics.
     * @return CustomerAnalyticsSummary|null
    */
    public function getSummary(): ?CustomerAnalyticsSummary {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('activationHealth', $this->getActivationHealth());
        $writer->writeObjectValue('automationHealth', $this->getAutomationHealth());
        $writer->writeObjectValue('communicationUsage', $this->getCommunicationUsage());
        $writer->writeDateTimeValue('generatedAt', $this->getGeneratedAt());
        $writer->writeCollectionOfObjectValues('leadSources', $this->getLeadSources());
        $writer->writeObjectValue('leadTrend', $this->getLeadTrend());
        $writer->writeCollectionOfObjectValues('needsAttention', $this->getNeedsAttention());
        $writer->writeObjectValue('range', $this->getRange());
        $writer->writeObjectValue('responseMetrics', $this->getResponseMetrics());
        $writer->writeObjectValue('summary', $this->getSummary());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activationHealth property value. Activation health associated with this Leadping customer analytics.
     * @param CustomerActivationHealth|null $value Value to set for the activationHealth property.
    */
    public function setActivationHealth(?CustomerActivationHealth $value): void {
        $this->activationHealth = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the automationHealth property value. Automation health associated with this Leadping customer analytics.
     * @param CustomerAutomationHealth|null $value Value to set for the automationHealth property.
    */
    public function setAutomationHealth(?CustomerAutomationHealth $value): void {
        $this->automationHealth = $value;
    }

    /**
     * Sets the communicationUsage property value. Communication usage associated with this Leadping customer analytics.
     * @param CustomerCommunicationUsage|null $value Value to set for the communicationUsage property.
    */
    public function setCommunicationUsage(?CustomerCommunicationUsage $value): void {
        $this->communicationUsage = $value;
    }

    /**
     * Sets the generatedAt property value. Date and time when this Leadping customer analytics was generated.
     * @param DateTime|null $value Value to set for the generatedAt property.
    */
    public function setGeneratedAt(?DateTime $value): void {
        $this->generatedAt = $value;
    }

    /**
     * Sets the leadSources property value. Collection of lead sources included with this Leadping customer analytics.
     * @param array<CustomerLeadSourceBreakdown>|null $value Value to set for the leadSources property.
    */
    public function setLeadSources(?array $value): void {
        $this->leadSources = $value;
    }

    /**
     * Sets the leadTrend property value. Lead trend associated with this Leadping customer analytics.
     * @param CustomerLeadTrend|null $value Value to set for the leadTrend property.
    */
    public function setLeadTrend(?CustomerLeadTrend $value): void {
        $this->leadTrend = $value;
    }

    /**
     * Sets the needsAttention property value. Date and time when this Leadping customer analytics was needs attention.
     * @param array<CustomerNeedsAttentionItem>|null $value Value to set for the needsAttention property.
    */
    public function setNeedsAttention(?array $value): void {
        $this->needsAttention = $value;
    }

    /**
     * Sets the range property value. Range associated with this Leadping customer analytics.
     * @param AnalyticsDateRange|null $value Value to set for the range property.
    */
    public function setRange(?AnalyticsDateRange $value): void {
        $this->range = $value;
    }

    /**
     * Sets the responseMetrics property value. Response metrics associated with this Leadping customer analytics.
     * @param CustomerResponseMetrics|null $value Value to set for the responseMetrics property.
    */
    public function setResponseMetrics(?CustomerResponseMetrics $value): void {
        $this->responseMetrics = $value;
    }

    /**
     * Sets the summary property value. Human-readable summary for this Leadping customer analytics.
     * @param CustomerAnalyticsSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?CustomerAnalyticsSummary $value): void {
        $this->summary = $value;
    }

}
