<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Human-readable summary for this Leadping customer analytics.
*/
class CustomerAnalyticsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
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
     * @var int|null $leads Number of leads represented by this Leadping customer analytics summary.
    */
    private ?int $leads = null;
    
    /**
     * @var AnalyticsComparison|null $leadsComparison Date and time when this Leadping customer analytics summary was leads comparison.
    */
    private ?AnalyticsComparison $leadsComparison = null;
    
    /**
     * @var int|null $missedCalls Number of calls missed during the reporting period.
    */
    private ?int $missedCalls = null;
    
    /**
     * @var int|null $missedLeads Number of missed leads represented by this Leadping customer analytics summary.
    */
    private ?int $missedLeads = null;
    
    /**
     * @var float|null $respondedWithinFiveMinutesPercent Responded within five minutes percent expressed as a percentage.
    */
    private ?float $respondedWithinFiveMinutesPercent = null;
    
    /**
     * @var int|null $smsReceived Number of SMS messages received during the reporting period.
    */
    private ?int $smsReceived = null;
    
    /**
     * @var int|null $smsSent Number of SMS messages sent during the reporting period.
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
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getStringValue()),
            'callMinutes' => fn(ParseNode $n) => $o->setCallMinutes($n->getFloatValue()),
            'callsPlaced' => fn(ParseNode $n) => $o->setCallsPlaced($n->getIntegerValue()),
            'callsReceived' => fn(ParseNode $n) => $o->setCallsReceived($n->getIntegerValue()),
            'leads' => fn(ParseNode $n) => $o->setLeads($n->getIntegerValue()),
            'leadsComparison' => fn(ParseNode $n) => $o->setLeadsComparison($n->getObjectValue([AnalyticsComparison::class, 'createFromDiscriminatorValue'])),
            'missedCalls' => fn(ParseNode $n) => $o->setMissedCalls($n->getIntegerValue()),
            'missedLeads' => fn(ParseNode $n) => $o->setMissedLeads($n->getIntegerValue()),
            'respondedWithinFiveMinutesPercent' => fn(ParseNode $n) => $o->setRespondedWithinFiveMinutesPercent($n->getFloatValue()),
            'smsReceived' => fn(ParseNode $n) => $o->setSmsReceived($n->getIntegerValue()),
            'smsSent' => fn(ParseNode $n) => $o->setSmsSent($n->getIntegerValue()),
            'unreadMessages' => fn(ParseNode $n) => $o->setUnreadMessages($n->getIntegerValue()),
            'usageSpend' => fn(ParseNode $n) => $o->setUsageSpend($n->getFloatValue()),
            'walletBalance' => fn(ParseNode $n) => $o->setWalletBalance($n->getFloatValue()),
            'walletStatus' => fn(ParseNode $n) => $o->setWalletStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the leads property value. Number of leads represented by this Leadping customer analytics summary.
     * @return int|null
    */
    public function getLeads(): ?int {
        return $this->leads;
    }

    /**
     * Gets the leadsComparison property value. Date and time when this Leadping customer analytics summary was leads comparison.
     * @return AnalyticsComparison|null
    */
    public function getLeadsComparison(): ?AnalyticsComparison {
        return $this->leadsComparison;
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
     * Gets the respondedWithinFiveMinutesPercent property value. Responded within five minutes percent expressed as a percentage.
     * @return float|null
    */
    public function getRespondedWithinFiveMinutesPercent(): ?float {
        return $this->respondedWithinFiveMinutesPercent;
    }

    /**
     * Gets the smsReceived property value. Number of SMS messages received during the reporting period.
     * @return int|null
    */
    public function getSmsReceived(): ?int {
        return $this->smsReceived;
    }

    /**
     * Gets the smsSent property value. Number of SMS messages sent during the reporting period.
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
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeFloatValue('callMinutes', $this->getCallMinutes());
        $writer->writeIntegerValue('callsPlaced', $this->getCallsPlaced());
        $writer->writeIntegerValue('callsReceived', $this->getCallsReceived());
        $writer->writeIntegerValue('leads', $this->getLeads());
        $writer->writeObjectValue('leadsComparison', $this->getLeadsComparison());
        $writer->writeIntegerValue('missedCalls', $this->getMissedCalls());
        $writer->writeIntegerValue('missedLeads', $this->getMissedLeads());
        $writer->writeFloatValue('respondedWithinFiveMinutesPercent', $this->getRespondedWithinFiveMinutesPercent());
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
     * Sets the leads property value. Number of leads represented by this Leadping customer analytics summary.
     * @param int|null $value Value to set for the leads property.
    */
    public function setLeads(?int $value): void {
        $this->leads = $value;
    }

    /**
     * Sets the leadsComparison property value. Date and time when this Leadping customer analytics summary was leads comparison.
     * @param AnalyticsComparison|null $value Value to set for the leadsComparison property.
    */
    public function setLeadsComparison(?AnalyticsComparison $value): void {
        $this->leadsComparison = $value;
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
     * Sets the respondedWithinFiveMinutesPercent property value. Responded within five minutes percent expressed as a percentage.
     * @param float|null $value Value to set for the respondedWithinFiveMinutesPercent property.
    */
    public function setRespondedWithinFiveMinutesPercent(?float $value): void {
        $this->respondedWithinFiveMinutesPercent = $value;
    }

    /**
     * Sets the smsReceived property value. Number of SMS messages received during the reporting period.
     * @param int|null $value Value to set for the smsReceived property.
    */
    public function setSmsReceived(?int $value): void {
        $this->smsReceived = $value;
    }

    /**
     * Sets the smsSent property value. Number of SMS messages sent during the reporting period.
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
