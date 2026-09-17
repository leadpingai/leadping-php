<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Summarizes an organization's primary lead, response, communication, and conversion KPIs for the selected period.
*/
class CustomerAnalyticsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $averageResponseMinutes Average time, in minutes, before a lead receives a response.
    */
    private ?float $averageResponseMinutes = null;
    
    /**
     * @var string|null $billingStatus Current billing status for this Leadping customer analytics summary.
    */
    private ?string $billingStatus = null;
    
    /**
     * @var float|null $callMinutes Total connected call duration, in minutes, during the reporting period.
    */
    private ?float $callMinutes = null;
    
    /**
     * @var int|null $callsPlaced Number of outbound calls placed during the reporting period.
    */
    private ?int $callsPlaced = null;
    
    /**
     * @var int|null $callsReceived Number of inbound calls received during the reporting period.
    */
    private ?int $callsReceived = null;
    
    /**
     * @var int|null $humanResponses Manual provider-accepted SMS messages; automated messages are excluded.
    */
    private ?int $humanResponses = null;
    
    /**
     * @var int|null $leads Number of leads represented by this Leadping customer analytics summary.
    */
    private ?int $leads = null;
    
    /**
     * @var AnalyticsComparison|null $leadsComparison Compares a metric with the preceding period and reports its absolute and percentage change.
    */
    private ?AnalyticsComparison $leadsComparison = null;
    
    /**
     * @var float|null $medianResponseMinutes Median response minutes measured in minutes.
    */
    private ?float $medianResponseMinutes = null;
    
    /**
     * @var int|null $missedCalls Number of calls missed during the reporting period.
    */
    private ?int $missedCalls = null;
    
    /**
     * @var int|null $missedLeads Number of missed leads represented by this Leadping customer analytics summary.
    */
    private ?int $missedLeads = null;
    
    /**
     * @var DateTime|null $observedThrough Responses observed through this instant; min(report end plus five minutes, generation time).
    */
    private ?DateTime $observedThrough = null;
    
    /**
     * @var float|null $overallFiveMinuteSlaPercent Timely human responses divided by all mature eligible leads, including unanswered leads.
    */
    private ?float $overallFiveMinuteSlaPercent = null;
    
    /**
     * @var int|null $prospectReplies Received prospect messages excluding consent and help commands.
    */
    private ?int $prospectReplies = null;
    
    /**
     * @var float|null $respondedWithinFiveMinutesPercent Conditional percentage: human responses within five minutes divided by responded leads only; not overall coverage.
    */
    private ?float $respondedWithinFiveMinutesPercent = null;
    
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
     * @var int|null $slaUnrespondedLeads Mature eligible leads without a human response by ObservedThrough.
    */
    private ?int $slaUnrespondedLeads = null;
    
    /**
     * @var int|null $smsAttempted Messages whose send execution started; queued and scheduled messages are excluded.
    */
    private ?int $smsAttempted = null;
    
    /**
     * @var int|null $smsDelivered Messages confirmed delivered, counted at delivery time.
    */
    private ?int $smsDelivered = null;
    
    /**
     * @var int|null $smsReceived Number of SMS messages received during the reporting period.
    */
    private ?int $smsReceived = null;
    
    /**
     * @var int|null $smsSent Provider-accepted outbound messages, counted at acceptance time (SmsSent is the compatibility field name).
    */
    private ?int $smsSent = null;
    
    /**
     * @var int|null $unreadMessages Number of unread messages represented by this Leadping customer analytics summary.
    */
    private ?int $unreadMessages = null;
    
    /**
     * @var float|null $usageSpend Usage spend represented by this Leadping customer analytics summary.
    */
    private ?float $usageSpend = null;
    
    /**
     * @var float|null $walletBalance Wallet balance represented by this Leadping customer analytics summary.
    */
    private ?float $walletBalance = null;
    
    /**
     * @var string|null $walletStatus Current wallet status for this Leadping customer analytics summary.
    */
    private ?string $walletStatus = null;
    
    /**
     * Instantiates a new CustomerAnalyticsSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerAnalyticsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerAnalyticsSummary {
        return new CustomerAnalyticsSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the averageResponseMinutes property value. Average time, in minutes, before a lead receives a response.
     * @return float|null
    */
    public function getAverageResponseMinutes(): ?float {
        return $this->averageResponseMinutes;
    }

    /**
     * Gets the billingStatus property value. Current billing status for this Leadping customer analytics summary.
     * @return string|null
    */
    public function getBillingStatus(): ?string {
        return $this->billingStatus;
    }

    /**
     * Gets the callMinutes property value. Total connected call duration, in minutes, during the reporting period.
     * @return float|null
    */
    public function getCallMinutes(): ?float {
        return $this->callMinutes;
    }

    /**
     * Gets the callsPlaced property value. Number of outbound calls placed during the reporting period.
     * @return int|null
    */
    public function getCallsPlaced(): ?int {
        return $this->callsPlaced;
    }

    /**
     * Gets the callsReceived property value. Number of inbound calls received during the reporting period.
     * @return int|null
    */
    public function getCallsReceived(): ?int {
        return $this->callsReceived;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageResponseMinutes' => fn(ParseNode $n) => $o->setAverageResponseMinutes($n->getFloatValue()),
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getStringValue()),
            'callMinutes' => fn(ParseNode $n) => $o->setCallMinutes($n->getFloatValue()),
            'callsPlaced' => fn(ParseNode $n) => $o->setCallsPlaced($n->getIntegerValue()),
            'callsReceived' => fn(ParseNode $n) => $o->setCallsReceived($n->getIntegerValue()),
            'humanResponses' => fn(ParseNode $n) => $o->setHumanResponses($n->getIntegerValue()),
            'leads' => fn(ParseNode $n) => $o->setLeads($n->getIntegerValue()),
            'leadsComparison' => fn(ParseNode $n) => $o->setLeadsComparison($n->getObjectValue([AnalyticsComparison::class, 'createFromDiscriminatorValue'])),
            'medianResponseMinutes' => fn(ParseNode $n) => $o->setMedianResponseMinutes($n->getFloatValue()),
            'missedCalls' => fn(ParseNode $n) => $o->setMissedCalls($n->getIntegerValue()),
            'missedLeads' => fn(ParseNode $n) => $o->setMissedLeads($n->getIntegerValue()),
            'observedThrough' => fn(ParseNode $n) => $o->setObservedThrough($n->getDateTimeValue()),
            'overallFiveMinuteSlaPercent' => fn(ParseNode $n) => $o->setOverallFiveMinuteSlaPercent($n->getFloatValue()),
            'prospectReplies' => fn(ParseNode $n) => $o->setProspectReplies($n->getIntegerValue()),
            'respondedWithinFiveMinutesPercent' => fn(ParseNode $n) => $o->setRespondedWithinFiveMinutesPercent($n->getFloatValue()),
            'slaEligibleLeads' => fn(ParseNode $n) => $o->setSlaEligibleLeads($n->getIntegerValue()),
            'slaPendingLeads' => fn(ParseNode $n) => $o->setSlaPendingLeads($n->getIntegerValue()),
            'slaTimelyLeads' => fn(ParseNode $n) => $o->setSlaTimelyLeads($n->getIntegerValue()),
            'slaUnrespondedLeads' => fn(ParseNode $n) => $o->setSlaUnrespondedLeads($n->getIntegerValue()),
            'smsAttempted' => fn(ParseNode $n) => $o->setSmsAttempted($n->getIntegerValue()),
            'smsDelivered' => fn(ParseNode $n) => $o->setSmsDelivered($n->getIntegerValue()),
            'smsReceived' => fn(ParseNode $n) => $o->setSmsReceived($n->getIntegerValue()),
            'smsSent' => fn(ParseNode $n) => $o->setSmsSent($n->getIntegerValue()),
            'unreadMessages' => fn(ParseNode $n) => $o->setUnreadMessages($n->getIntegerValue()),
            'usageSpend' => fn(ParseNode $n) => $o->setUsageSpend($n->getFloatValue()),
            'walletBalance' => fn(ParseNode $n) => $o->setWalletBalance($n->getFloatValue()),
            'walletStatus' => fn(ParseNode $n) => $o->setWalletStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the humanResponses property value. Manual provider-accepted SMS messages; automated messages are excluded.
     * @return int|null
    */
    public function getHumanResponses(): ?int {
        return $this->humanResponses;
    }

    /**
     * Gets the leads property value. Number of leads represented by this Leadping customer analytics summary.
     * @return int|null
    */
    public function getLeads(): ?int {
        return $this->leads;
    }

    /**
     * Gets the leadsComparison property value. Compares a metric with the preceding period and reports its absolute and percentage change.
     * @return AnalyticsComparison|null
    */
    public function getLeadsComparison(): ?AnalyticsComparison {
        return $this->leadsComparison;
    }

    /**
     * Gets the medianResponseMinutes property value. Median response minutes measured in minutes.
     * @return float|null
    */
    public function getMedianResponseMinutes(): ?float {
        return $this->medianResponseMinutes;
    }

    /**
     * Gets the missedCalls property value. Number of calls missed during the reporting period.
     * @return int|null
    */
    public function getMissedCalls(): ?int {
        return $this->missedCalls;
    }

    /**
     * Gets the missedLeads property value. Number of missed leads represented by this Leadping customer analytics summary.
     * @return int|null
    */
    public function getMissedLeads(): ?int {
        return $this->missedLeads;
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
     * Gets the prospectReplies property value. Received prospect messages excluding consent and help commands.
     * @return int|null
    */
    public function getProspectReplies(): ?int {
        return $this->prospectReplies;
    }

    /**
     * Gets the respondedWithinFiveMinutesPercent property value. Conditional percentage: human responses within five minutes divided by responded leads only; not overall coverage.
     * @return float|null
    */
    public function getRespondedWithinFiveMinutesPercent(): ?float {
        return $this->respondedWithinFiveMinutesPercent;
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
     * Gets the slaUnrespondedLeads property value. Mature eligible leads without a human response by ObservedThrough.
     * @return int|null
    */
    public function getSlaUnrespondedLeads(): ?int {
        return $this->slaUnrespondedLeads;
    }

    /**
     * Gets the smsAttempted property value. Messages whose send execution started; queued and scheduled messages are excluded.
     * @return int|null
    */
    public function getSmsAttempted(): ?int {
        return $this->smsAttempted;
    }

    /**
     * Gets the smsDelivered property value. Messages confirmed delivered, counted at delivery time.
     * @return int|null
    */
    public function getSmsDelivered(): ?int {
        return $this->smsDelivered;
    }

    /**
     * Gets the smsReceived property value. Number of SMS messages received during the reporting period.
     * @return int|null
    */
    public function getSmsReceived(): ?int {
        return $this->smsReceived;
    }

    /**
     * Gets the smsSent property value. Provider-accepted outbound messages, counted at acceptance time (SmsSent is the compatibility field name).
     * @return int|null
    */
    public function getSmsSent(): ?int {
        return $this->smsSent;
    }

    /**
     * Gets the unreadMessages property value. Number of unread messages represented by this Leadping customer analytics summary.
     * @return int|null
    */
    public function getUnreadMessages(): ?int {
        return $this->unreadMessages;
    }

    /**
     * Gets the usageSpend property value. Usage spend represented by this Leadping customer analytics summary.
     * @return float|null
    */
    public function getUsageSpend(): ?float {
        return $this->usageSpend;
    }

    /**
     * Gets the walletBalance property value. Wallet balance represented by this Leadping customer analytics summary.
     * @return float|null
    */
    public function getWalletBalance(): ?float {
        return $this->walletBalance;
    }

    /**
     * Gets the walletStatus property value. Current wallet status for this Leadping customer analytics summary.
     * @return string|null
    */
    public function getWalletStatus(): ?string {
        return $this->walletStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('averageResponseMinutes', $this->getAverageResponseMinutes());
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeFloatValue('callMinutes', $this->getCallMinutes());
        $writer->writeIntegerValue('callsPlaced', $this->getCallsPlaced());
        $writer->writeIntegerValue('callsReceived', $this->getCallsReceived());
        $writer->writeIntegerValue('humanResponses', $this->getHumanResponses());
        $writer->writeIntegerValue('leads', $this->getLeads());
        $writer->writeObjectValue('leadsComparison', $this->getLeadsComparison());
        $writer->writeFloatValue('medianResponseMinutes', $this->getMedianResponseMinutes());
        $writer->writeIntegerValue('missedCalls', $this->getMissedCalls());
        $writer->writeIntegerValue('missedLeads', $this->getMissedLeads());
        $writer->writeDateTimeValue('observedThrough', $this->getObservedThrough());
        $writer->writeFloatValue('overallFiveMinuteSlaPercent', $this->getOverallFiveMinuteSlaPercent());
        $writer->writeIntegerValue('prospectReplies', $this->getProspectReplies());
        $writer->writeFloatValue('respondedWithinFiveMinutesPercent', $this->getRespondedWithinFiveMinutesPercent());
        $writer->writeIntegerValue('slaEligibleLeads', $this->getSlaEligibleLeads());
        $writer->writeIntegerValue('slaPendingLeads', $this->getSlaPendingLeads());
        $writer->writeIntegerValue('slaTimelyLeads', $this->getSlaTimelyLeads());
        $writer->writeIntegerValue('slaUnrespondedLeads', $this->getSlaUnrespondedLeads());
        $writer->writeIntegerValue('smsAttempted', $this->getSmsAttempted());
        $writer->writeIntegerValue('smsDelivered', $this->getSmsDelivered());
        $writer->writeIntegerValue('smsReceived', $this->getSmsReceived());
        $writer->writeIntegerValue('smsSent', $this->getSmsSent());
        $writer->writeIntegerValue('unreadMessages', $this->getUnreadMessages());
        $writer->writeFloatValue('usageSpend', $this->getUsageSpend());
        $writer->writeFloatValue('walletBalance', $this->getWalletBalance());
        $writer->writeStringValue('walletStatus', $this->getWalletStatus());
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
     * Sets the averageResponseMinutes property value. Average time, in minutes, before a lead receives a response.
     * @param float|null $value Value to set for the averageResponseMinutes property.
    */
    public function setAverageResponseMinutes(?float $value): void {
        $this->averageResponseMinutes = $value;
    }

    /**
     * Sets the billingStatus property value. Current billing status for this Leadping customer analytics summary.
     * @param string|null $value Value to set for the billingStatus property.
    */
    public function setBillingStatus(?string $value): void {
        $this->billingStatus = $value;
    }

    /**
     * Sets the callMinutes property value. Total connected call duration, in minutes, during the reporting period.
     * @param float|null $value Value to set for the callMinutes property.
    */
    public function setCallMinutes(?float $value): void {
        $this->callMinutes = $value;
    }

    /**
     * Sets the callsPlaced property value. Number of outbound calls placed during the reporting period.
     * @param int|null $value Value to set for the callsPlaced property.
    */
    public function setCallsPlaced(?int $value): void {
        $this->callsPlaced = $value;
    }

    /**
     * Sets the callsReceived property value. Number of inbound calls received during the reporting period.
     * @param int|null $value Value to set for the callsReceived property.
    */
    public function setCallsReceived(?int $value): void {
        $this->callsReceived = $value;
    }

    /**
     * Sets the humanResponses property value. Manual provider-accepted SMS messages; automated messages are excluded.
     * @param int|null $value Value to set for the humanResponses property.
    */
    public function setHumanResponses(?int $value): void {
        $this->humanResponses = $value;
    }

    /**
     * Sets the leads property value. Number of leads represented by this Leadping customer analytics summary.
     * @param int|null $value Value to set for the leads property.
    */
    public function setLeads(?int $value): void {
        $this->leads = $value;
    }

    /**
     * Sets the leadsComparison property value. Compares a metric with the preceding period and reports its absolute and percentage change.
     * @param AnalyticsComparison|null $value Value to set for the leadsComparison property.
    */
    public function setLeadsComparison(?AnalyticsComparison $value): void {
        $this->leadsComparison = $value;
    }

    /**
     * Sets the medianResponseMinutes property value. Median response minutes measured in minutes.
     * @param float|null $value Value to set for the medianResponseMinutes property.
    */
    public function setMedianResponseMinutes(?float $value): void {
        $this->medianResponseMinutes = $value;
    }

    /**
     * Sets the missedCalls property value. Number of calls missed during the reporting period.
     * @param int|null $value Value to set for the missedCalls property.
    */
    public function setMissedCalls(?int $value): void {
        $this->missedCalls = $value;
    }

    /**
     * Sets the missedLeads property value. Number of missed leads represented by this Leadping customer analytics summary.
     * @param int|null $value Value to set for the missedLeads property.
    */
    public function setMissedLeads(?int $value): void {
        $this->missedLeads = $value;
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
     * Sets the prospectReplies property value. Received prospect messages excluding consent and help commands.
     * @param int|null $value Value to set for the prospectReplies property.
    */
    public function setProspectReplies(?int $value): void {
        $this->prospectReplies = $value;
    }

    /**
     * Sets the respondedWithinFiveMinutesPercent property value. Conditional percentage: human responses within five minutes divided by responded leads only; not overall coverage.
     * @param float|null $value Value to set for the respondedWithinFiveMinutesPercent property.
    */
    public function setRespondedWithinFiveMinutesPercent(?float $value): void {
        $this->respondedWithinFiveMinutesPercent = $value;
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
     * Sets the slaUnrespondedLeads property value. Mature eligible leads without a human response by ObservedThrough.
     * @param int|null $value Value to set for the slaUnrespondedLeads property.
    */
    public function setSlaUnrespondedLeads(?int $value): void {
        $this->slaUnrespondedLeads = $value;
    }

    /**
     * Sets the smsAttempted property value. Messages whose send execution started; queued and scheduled messages are excluded.
     * @param int|null $value Value to set for the smsAttempted property.
    */
    public function setSmsAttempted(?int $value): void {
        $this->smsAttempted = $value;
    }

    /**
     * Sets the smsDelivered property value. Messages confirmed delivered, counted at delivery time.
     * @param int|null $value Value to set for the smsDelivered property.
    */
    public function setSmsDelivered(?int $value): void {
        $this->smsDelivered = $value;
    }

    /**
     * Sets the smsReceived property value. Number of SMS messages received during the reporting period.
     * @param int|null $value Value to set for the smsReceived property.
    */
    public function setSmsReceived(?int $value): void {
        $this->smsReceived = $value;
    }

    /**
     * Sets the smsSent property value. Provider-accepted outbound messages, counted at acceptance time (SmsSent is the compatibility field name).
     * @param int|null $value Value to set for the smsSent property.
    */
    public function setSmsSent(?int $value): void {
        $this->smsSent = $value;
    }

    /**
     * Sets the unreadMessages property value. Number of unread messages represented by this Leadping customer analytics summary.
     * @param int|null $value Value to set for the unreadMessages property.
    */
    public function setUnreadMessages(?int $value): void {
        $this->unreadMessages = $value;
    }

    /**
     * Sets the usageSpend property value. Usage spend represented by this Leadping customer analytics summary.
     * @param float|null $value Value to set for the usageSpend property.
    */
    public function setUsageSpend(?float $value): void {
        $this->usageSpend = $value;
    }

    /**
     * Sets the walletBalance property value. Wallet balance represented by this Leadping customer analytics summary.
     * @param float|null $value Value to set for the walletBalance property.
    */
    public function setWalletBalance(?float $value): void {
        $this->walletBalance = $value;
    }

    /**
     * Sets the walletStatus property value. Current wallet status for this Leadping customer analytics summary.
     * @param string|null $value Value to set for the walletStatus property.
    */
    public function setWalletStatus(?string $value): void {
        $this->walletStatus = $value;
    }

}
