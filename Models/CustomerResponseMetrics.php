<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Measures how quickly and consistently an organization responds to leads across supported communication channels.
*/
class CustomerResponseMetrics implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $averageMinutes Average minutes measured in minutes.
    */
    private ?float $averageMinutes = null;
    
    /**
     * @var array<AnalyticsTrendPointOfdecimal>|null $averageMinutesTrend Collection of average minutes trend included with this Leadping customer response metrics.
    */
    private ?array $averageMinutesTrend = null;
    
    /**
     * @var DateTime|null $cohortEndAt Exclusive cohort end.
    */
    private ?DateTime $cohortEndAt = null;
    
    /**
     * @var DateTime|null $cohortStartAt Inclusive cohort start.
    */
    private ?DateTime $cohortStartAt = null;
    
    /**
     * @var float|null $medianMinutes Median minutes measured in minutes.
    */
    private ?float $medianMinutes = null;
    
    /**
     * @var int|null $missedCalls Number of calls missed during the reporting period.
    */
    private ?int $missedCalls = null;
    
    /**
     * @var DateTime|null $observedThrough Responses observed through this instant; min(report end plus five minutes, generation time).
    */
    private ?DateTime $observedThrough = null;
    
    /**
     * @var float|null $overallFiveMinuteSlaPercent Timely human responses divided by all mature eligible leads, including unanswered leads.
    */
    private ?float $overallFiveMinuteSlaPercent = null;
    
    /**
     * @var int|null $respondedLeads Number of responded leads represented by this Leadping customer response metrics.
    */
    private ?int $respondedLeads = null;
    
    /**
     * @var float|null $respondedWithinFiveMinutesPercent Conditional percentage: human responses within five minutes divided by responded leads only; not overall coverage.
    */
    private ?float $respondedWithinFiveMinutesPercent = null;
    
    /**
     * @var string|null $responseDefinition Shared definition used in charts and exports.
    */
    private ?string $responseDefinition = null;
    
    /**
     * @var int|null $slaEligibleLeads Non-deleted leads created in the cohort with a full five-minute observation window.
    */
    private ?int $slaEligibleLeads = null;
    
    /**
     * @var int|null $slaPendingLeads Cohort leads younger than five minutes at ObservedThrough; excluded from SLA denominator.
    */
    private ?int $slaPendingLeads = null;
    
    /**
     * @var int|null $slaTimelyLeads Mature eligible leads with a human response within exactly five minutes.
    */
    private ?int $slaTimelyLeads = null;
    
    /**
     * @var array<CustomerResponseSlaPoint>|null $slaTrend Cohort SLA counts and coverage by lead creation bucket.
    */
    private ?array $slaTrend = null;
    
    /**
     * @var int|null $slaUnrespondedLeads Mature eligible leads without a human response by ObservedThrough.
    */
    private ?int $slaUnrespondedLeads = null;
    
    /**
     * @var int|null $unreadMessages Number of unread messages represented by this Leadping customer response metrics.
    */
    private ?int $unreadMessages = null;
    
    /**
     * @var int|null $unrespondedLeads Number of unresponded leads represented by this Leadping customer response metrics.
    */
    private ?int $unrespondedLeads = null;
    
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
     * Gets the averageMinutes property value. Average minutes measured in minutes.
     * @return float|null
    */
    public function getAverageMinutes(): ?float {
        return $this->averageMinutes;
    }

    /**
     * Gets the averageMinutesTrend property value. Collection of average minutes trend included with this Leadping customer response metrics.
     * @return array<AnalyticsTrendPointOfdecimal>|null
    */
    public function getAverageMinutesTrend(): ?array {
        return $this->averageMinutesTrend;
    }

    /**
     * Gets the cohortEndAt property value. Exclusive cohort end.
     * @return DateTime|null
    */
    public function getCohortEndAt(): ?DateTime {
        return $this->cohortEndAt;
    }

    /**
     * Gets the cohortStartAt property value. Inclusive cohort start.
     * @return DateTime|null
    */
    public function getCohortStartAt(): ?DateTime {
        return $this->cohortStartAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageMinutes' => fn(ParseNode $n) => $o->setAverageMinutes($n->getFloatValue()),
            'averageMinutesTrend' => fn(ParseNode $n) => $o->setAverageMinutesTrend($n->getCollectionOfObjectValues([AnalyticsTrendPointOfdecimal::class, 'createFromDiscriminatorValue'])),
            'cohortEndAt' => fn(ParseNode $n) => $o->setCohortEndAt($n->getDateTimeValue()),
            'cohortStartAt' => fn(ParseNode $n) => $o->setCohortStartAt($n->getDateTimeValue()),
            'medianMinutes' => fn(ParseNode $n) => $o->setMedianMinutes($n->getFloatValue()),
            'missedCalls' => fn(ParseNode $n) => $o->setMissedCalls($n->getIntegerValue()),
            'observedThrough' => fn(ParseNode $n) => $o->setObservedThrough($n->getDateTimeValue()),
            'overallFiveMinuteSlaPercent' => fn(ParseNode $n) => $o->setOverallFiveMinuteSlaPercent($n->getFloatValue()),
            'respondedLeads' => fn(ParseNode $n) => $o->setRespondedLeads($n->getIntegerValue()),
            'respondedWithinFiveMinutesPercent' => fn(ParseNode $n) => $o->setRespondedWithinFiveMinutesPercent($n->getFloatValue()),
            'responseDefinition' => fn(ParseNode $n) => $o->setResponseDefinition($n->getStringValue()),
            'slaEligibleLeads' => fn(ParseNode $n) => $o->setSlaEligibleLeads($n->getIntegerValue()),
            'slaPendingLeads' => fn(ParseNode $n) => $o->setSlaPendingLeads($n->getIntegerValue()),
            'slaTimelyLeads' => fn(ParseNode $n) => $o->setSlaTimelyLeads($n->getIntegerValue()),
            'slaTrend' => fn(ParseNode $n) => $o->setSlaTrend($n->getCollectionOfObjectValues([CustomerResponseSlaPoint::class, 'createFromDiscriminatorValue'])),
            'slaUnrespondedLeads' => fn(ParseNode $n) => $o->setSlaUnrespondedLeads($n->getIntegerValue()),
            'unreadMessages' => fn(ParseNode $n) => $o->setUnreadMessages($n->getIntegerValue()),
            'unrespondedLeads' => fn(ParseNode $n) => $o->setUnrespondedLeads($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the medianMinutes property value. Median minutes measured in minutes.
     * @return float|null
    */
    public function getMedianMinutes(): ?float {
        return $this->medianMinutes;
    }

    /**
     * Gets the missedCalls property value. Number of calls missed during the reporting period.
     * @return int|null
    */
    public function getMissedCalls(): ?int {
        return $this->missedCalls;
    }

    /**
     * Gets the observedThrough property value. Responses observed through this instant; min(report end plus five minutes, generation time).
     * @return DateTime|null
    */
    public function getObservedThrough(): ?DateTime {
        return $this->observedThrough;
    }

    /**
     * Gets the overallFiveMinuteSlaPercent property value. Timely human responses divided by all mature eligible leads, including unanswered leads.
     * @return float|null
    */
    public function getOverallFiveMinuteSlaPercent(): ?float {
        return $this->overallFiveMinuteSlaPercent;
    }

    /**
     * Gets the respondedLeads property value. Number of responded leads represented by this Leadping customer response metrics.
     * @return int|null
    */
    public function getRespondedLeads(): ?int {
        return $this->respondedLeads;
    }

    /**
     * Gets the respondedWithinFiveMinutesPercent property value. Conditional percentage: human responses within five minutes divided by responded leads only; not overall coverage.
     * @return float|null
    */
    public function getRespondedWithinFiveMinutesPercent(): ?float {
        return $this->respondedWithinFiveMinutesPercent;
    }

    /**
     * Gets the responseDefinition property value. Shared definition used in charts and exports.
     * @return string|null
    */
    public function getResponseDefinition(): ?string {
        return $this->responseDefinition;
    }

    /**
     * Gets the slaEligibleLeads property value. Non-deleted leads created in the cohort with a full five-minute observation window.
     * @return int|null
    */
    public function getSlaEligibleLeads(): ?int {
        return $this->slaEligibleLeads;
    }

    /**
     * Gets the slaPendingLeads property value. Cohort leads younger than five minutes at ObservedThrough; excluded from SLA denominator.
     * @return int|null
    */
    public function getSlaPendingLeads(): ?int {
        return $this->slaPendingLeads;
    }

    /**
     * Gets the slaTimelyLeads property value. Mature eligible leads with a human response within exactly five minutes.
     * @return int|null
    */
    public function getSlaTimelyLeads(): ?int {
        return $this->slaTimelyLeads;
    }

    /**
     * Gets the slaTrend property value. Cohort SLA counts and coverage by lead creation bucket.
     * @return array<CustomerResponseSlaPoint>|null
    */
    public function getSlaTrend(): ?array {
        return $this->slaTrend;
    }

    /**
     * Gets the slaUnrespondedLeads property value. Mature eligible leads without a human response by ObservedThrough.
     * @return int|null
    */
    public function getSlaUnrespondedLeads(): ?int {
        return $this->slaUnrespondedLeads;
    }

    /**
     * Gets the unreadMessages property value. Number of unread messages represented by this Leadping customer response metrics.
     * @return int|null
    */
    public function getUnreadMessages(): ?int {
        return $this->unreadMessages;
    }

    /**
     * Gets the unrespondedLeads property value. Number of unresponded leads represented by this Leadping customer response metrics.
     * @return int|null
    */
    public function getUnrespondedLeads(): ?int {
        return $this->unrespondedLeads;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('averageMinutes', $this->getAverageMinutes());
        $writer->writeCollectionOfObjectValues('averageMinutesTrend', $this->getAverageMinutesTrend());
        $writer->writeDateTimeValue('cohortEndAt', $this->getCohortEndAt());
        $writer->writeDateTimeValue('cohortStartAt', $this->getCohortStartAt());
        $writer->writeFloatValue('medianMinutes', $this->getMedianMinutes());
        $writer->writeIntegerValue('missedCalls', $this->getMissedCalls());
        $writer->writeDateTimeValue('observedThrough', $this->getObservedThrough());
        $writer->writeFloatValue('overallFiveMinuteSlaPercent', $this->getOverallFiveMinuteSlaPercent());
        $writer->writeIntegerValue('respondedLeads', $this->getRespondedLeads());
        $writer->writeFloatValue('respondedWithinFiveMinutesPercent', $this->getRespondedWithinFiveMinutesPercent());
        $writer->writeStringValue('responseDefinition', $this->getResponseDefinition());
        $writer->writeIntegerValue('slaEligibleLeads', $this->getSlaEligibleLeads());
        $writer->writeIntegerValue('slaPendingLeads', $this->getSlaPendingLeads());
        $writer->writeIntegerValue('slaTimelyLeads', $this->getSlaTimelyLeads());
        $writer->writeCollectionOfObjectValues('slaTrend', $this->getSlaTrend());
        $writer->writeIntegerValue('slaUnrespondedLeads', $this->getSlaUnrespondedLeads());
        $writer->writeIntegerValue('unreadMessages', $this->getUnreadMessages());
        $writer->writeIntegerValue('unrespondedLeads', $this->getUnrespondedLeads());
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
     * Sets the averageMinutes property value. Average minutes measured in minutes.
     * @param float|null $value Value to set for the averageMinutes property.
    */
    public function setAverageMinutes(?float $value): void {
        $this->averageMinutes = $value;
    }

    /**
     * Sets the averageMinutesTrend property value. Collection of average minutes trend included with this Leadping customer response metrics.
     * @param array<AnalyticsTrendPointOfdecimal>|null $value Value to set for the averageMinutesTrend property.
    */
    public function setAverageMinutesTrend(?array $value): void {
        $this->averageMinutesTrend = $value;
    }

    /**
     * Sets the cohortEndAt property value. Exclusive cohort end.
     * @param DateTime|null $value Value to set for the cohortEndAt property.
    */
    public function setCohortEndAt(?DateTime $value): void {
        $this->cohortEndAt = $value;
    }

    /**
     * Sets the cohortStartAt property value. Inclusive cohort start.
     * @param DateTime|null $value Value to set for the cohortStartAt property.
    */
    public function setCohortStartAt(?DateTime $value): void {
        $this->cohortStartAt = $value;
    }

    /**
     * Sets the medianMinutes property value. Median minutes measured in minutes.
     * @param float|null $value Value to set for the medianMinutes property.
    */
    public function setMedianMinutes(?float $value): void {
        $this->medianMinutes = $value;
    }

    /**
     * Sets the missedCalls property value. Number of calls missed during the reporting period.
     * @param int|null $value Value to set for the missedCalls property.
    */
    public function setMissedCalls(?int $value): void {
        $this->missedCalls = $value;
    }

    /**
     * Sets the observedThrough property value. Responses observed through this instant; min(report end plus five minutes, generation time).
     * @param DateTime|null $value Value to set for the observedThrough property.
    */
    public function setObservedThrough(?DateTime $value): void {
        $this->observedThrough = $value;
    }

    /**
     * Sets the overallFiveMinuteSlaPercent property value. Timely human responses divided by all mature eligible leads, including unanswered leads.
     * @param float|null $value Value to set for the overallFiveMinuteSlaPercent property.
    */
    public function setOverallFiveMinuteSlaPercent(?float $value): void {
        $this->overallFiveMinuteSlaPercent = $value;
    }

    /**
     * Sets the respondedLeads property value. Number of responded leads represented by this Leadping customer response metrics.
     * @param int|null $value Value to set for the respondedLeads property.
    */
    public function setRespondedLeads(?int $value): void {
        $this->respondedLeads = $value;
    }

    /**
     * Sets the respondedWithinFiveMinutesPercent property value. Conditional percentage: human responses within five minutes divided by responded leads only; not overall coverage.
     * @param float|null $value Value to set for the respondedWithinFiveMinutesPercent property.
    */
    public function setRespondedWithinFiveMinutesPercent(?float $value): void {
        $this->respondedWithinFiveMinutesPercent = $value;
    }

    /**
     * Sets the responseDefinition property value. Shared definition used in charts and exports.
     * @param string|null $value Value to set for the responseDefinition property.
    */
    public function setResponseDefinition(?string $value): void {
        $this->responseDefinition = $value;
    }

    /**
     * Sets the slaEligibleLeads property value. Non-deleted leads created in the cohort with a full five-minute observation window.
     * @param int|null $value Value to set for the slaEligibleLeads property.
    */
    public function setSlaEligibleLeads(?int $value): void {
        $this->slaEligibleLeads = $value;
    }

    /**
     * Sets the slaPendingLeads property value. Cohort leads younger than five minutes at ObservedThrough; excluded from SLA denominator.
     * @param int|null $value Value to set for the slaPendingLeads property.
    */
    public function setSlaPendingLeads(?int $value): void {
        $this->slaPendingLeads = $value;
    }

    /**
     * Sets the slaTimelyLeads property value. Mature eligible leads with a human response within exactly five minutes.
     * @param int|null $value Value to set for the slaTimelyLeads property.
    */
    public function setSlaTimelyLeads(?int $value): void {
        $this->slaTimelyLeads = $value;
    }

    /**
     * Sets the slaTrend property value. Cohort SLA counts and coverage by lead creation bucket.
     * @param array<CustomerResponseSlaPoint>|null $value Value to set for the slaTrend property.
    */
    public function setSlaTrend(?array $value): void {
        $this->slaTrend = $value;
    }

    /**
     * Sets the slaUnrespondedLeads property value. Mature eligible leads without a human response by ObservedThrough.
     * @param int|null $value Value to set for the slaUnrespondedLeads property.
    */
    public function setSlaUnrespondedLeads(?int $value): void {
        $this->slaUnrespondedLeads = $value;
    }

    /**
     * Sets the unreadMessages property value. Number of unread messages represented by this Leadping customer response metrics.
     * @param int|null $value Value to set for the unreadMessages property.
    */
    public function setUnreadMessages(?int $value): void {
        $this->unreadMessages = $value;
    }

    /**
     * Sets the unrespondedLeads property value. Number of unresponded leads represented by this Leadping customer response metrics.
     * @param int|null $value Value to set for the unrespondedLeads property.
    */
    public function setUnrespondedLeads(?int $value): void {
        $this->unrespondedLeads = $value;
    }

}
