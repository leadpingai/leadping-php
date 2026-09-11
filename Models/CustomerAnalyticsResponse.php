<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Aggregates an organization's lead performance, response speed, communication usage, automation health, and activation insights.
*/
class CustomerAnalyticsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var CustomerActivationHealth|null $activationHealth Summarizes an organization's progress and blockers across onboarding, billing, telephony, compliance, and launch readiness.
    */
    private ?CustomerActivationHealth $activationHealth = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CustomerAutomationHealth|null $automationHealth Summarizes automation coverage, execution success, failures, and workflows requiring organization attention.
    */
    private ?CustomerAutomationHealth $automationHealth = null;
    
    /**
     * @var CustomerCommunicationUsage|null $communicationUsage Aggregates an organization's SMS, MMS, and calling activity, delivery outcomes, and billable usage over time.
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
     * @var CustomerLeadTrend|null $leadTrend Measures lead creation, qualification, and conversion activity within one reporting time bucket.
    */
    private ?CustomerLeadTrend $leadTrend = null;
    
    /**
     * @var array<CustomerNeedsAttentionItem>|null $needsAttention Date and time when this Leadping customer analytics was needs attention.
    */
    private ?array $needsAttention = null;
    
    /**
     * @var AnalyticsDateRange|null $range Defines the inclusive reporting window and comparison window used to calculate Leadping analytics.
    */
    private ?AnalyticsDateRange $range = null;
    
    /**
     * @var CustomerResponseMetrics|null $responseMetrics Measures how quickly and consistently an organization responds to leads across supported communication channels.
    */
    private ?CustomerResponseMetrics $responseMetrics = null;
    
    /**
     * @var CustomerAnalyticsSummary|null $summary Summarizes an organization's primary lead, response, communication, and conversion KPIs for the selected period.
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
     * Gets the activationHealth property value. Summarizes an organization's progress and blockers across onboarding, billing, telephony, compliance, and launch readiness.
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
     * Gets the automationHealth property value. Summarizes automation coverage, execution success, failures, and workflows requiring organization attention.
     * @return CustomerAutomationHealth|null
    */
    public function getAutomationHealth(): ?CustomerAutomationHealth {
        return $this->automationHealth;
    }

    /**
     * Gets the communicationUsage property value. Aggregates an organization's SMS, MMS, and calling activity, delivery outcomes, and billable usage over time.
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
     * Gets the leadTrend property value. Measures lead creation, qualification, and conversion activity within one reporting time bucket.
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
     * Gets the range property value. Defines the inclusive reporting window and comparison window used to calculate Leadping analytics.
     * @return AnalyticsDateRange|null
    */
    public function getRange(): ?AnalyticsDateRange {
        return $this->range;
    }

    /**
     * Gets the responseMetrics property value. Measures how quickly and consistently an organization responds to leads across supported communication channels.
     * @return CustomerResponseMetrics|null
    */
    public function getResponseMetrics(): ?CustomerResponseMetrics {
        return $this->responseMetrics;
    }

    /**
     * Gets the summary property value. Summarizes an organization's primary lead, response, communication, and conversion KPIs for the selected period.
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
     * Sets the activationHealth property value. Summarizes an organization's progress and blockers across onboarding, billing, telephony, compliance, and launch readiness.
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
     * Sets the automationHealth property value. Summarizes automation coverage, execution success, failures, and workflows requiring organization attention.
     * @param CustomerAutomationHealth|null $value Value to set for the automationHealth property.
    */
    public function setAutomationHealth(?CustomerAutomationHealth $value): void {
        $this->automationHealth = $value;
    }

    /**
     * Sets the communicationUsage property value. Aggregates an organization's SMS, MMS, and calling activity, delivery outcomes, and billable usage over time.
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
     * Sets the leadTrend property value. Measures lead creation, qualification, and conversion activity within one reporting time bucket.
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
     * Sets the range property value. Defines the inclusive reporting window and comparison window used to calculate Leadping analytics.
     * @param AnalyticsDateRange|null $value Value to set for the range property.
    */
    public function setRange(?AnalyticsDateRange $value): void {
        $this->range = $value;
    }

    /**
     * Sets the responseMetrics property value. Measures how quickly and consistently an organization responds to leads across supported communication channels.
     * @param CustomerResponseMetrics|null $value Value to set for the responseMetrics property.
    */
    public function setResponseMetrics(?CustomerResponseMetrics $value): void {
        $this->responseMetrics = $value;
    }

    /**
     * Sets the summary property value. Summarizes an organization's primary lead, response, communication, and conversion KPIs for the selected period.
     * @param CustomerAnalyticsSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?CustomerAnalyticsSummary $value): void {
        $this->summary = $value;
    }

}
