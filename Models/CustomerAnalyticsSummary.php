<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerAnalyticsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $billingStatus The billingStatus property
    */
    private ?string $billingStatus = null;
    
    /**
     * @var float|null $callMinutes The callMinutes property
    */
    private ?float $callMinutes = null;
    
    /**
     * @var int|null $callsPlaced The callsPlaced property
    */
    private ?int $callsPlaced = null;
    
    /**
     * @var int|null $callsReceived The callsReceived property
    */
    private ?int $callsReceived = null;
    
    /**
     * @var int|null $leads The leads property
    */
    private ?int $leads = null;
    
    /**
     * @var AnalyticsComparison|null $leadsComparison The leadsComparison property
    */
    private ?AnalyticsComparison $leadsComparison = null;
    
    /**
     * @var int|null $missedCalls The missedCalls property
    */
    private ?int $missedCalls = null;
    
    /**
     * @var int|null $missedLeads The missedLeads property
    */
    private ?int $missedLeads = null;
    
    /**
     * @var float|null $respondedWithinFiveMinutesPercent The respondedWithinFiveMinutesPercent property
    */
    private ?float $respondedWithinFiveMinutesPercent = null;
    
    /**
     * @var int|null $smsReceived The smsReceived property
    */
    private ?int $smsReceived = null;
    
    /**
     * @var int|null $smsSent The smsSent property
    */
    private ?int $smsSent = null;
    
    /**
     * @var int|null $unreadMessages The unreadMessages property
    */
    private ?int $unreadMessages = null;
    
    /**
     * @var float|null $usageSpend The usageSpend property
    */
    private ?float $usageSpend = null;
    
    /**
     * @var float|null $walletBalance The walletBalance property
    */
    private ?float $walletBalance = null;
    
    /**
     * @var string|null $walletStatus The walletStatus property
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
     * Gets the billingStatus property value. The billingStatus property
     * @return string|null
    */
    public function getBillingStatus(): ?string {
        return $this->billingStatus;
    }

    /**
     * Gets the callMinutes property value. The callMinutes property
     * @return float|null
    */
    public function getCallMinutes(): ?float {
        return $this->callMinutes;
    }

    /**
     * Gets the callsPlaced property value. The callsPlaced property
     * @return int|null
    */
    public function getCallsPlaced(): ?int {
        return $this->callsPlaced;
    }

    /**
     * Gets the callsReceived property value. The callsReceived property
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
     * Gets the leads property value. The leads property
     * @return int|null
    */
    public function getLeads(): ?int {
        return $this->leads;
    }

    /**
     * Gets the leadsComparison property value. The leadsComparison property
     * @return AnalyticsComparison|null
    */
    public function getLeadsComparison(): ?AnalyticsComparison {
        return $this->leadsComparison;
    }

    /**
     * Gets the missedCalls property value. The missedCalls property
     * @return int|null
    */
    public function getMissedCalls(): ?int {
        return $this->missedCalls;
    }

    /**
     * Gets the missedLeads property value. The missedLeads property
     * @return int|null
    */
    public function getMissedLeads(): ?int {
        return $this->missedLeads;
    }

    /**
     * Gets the respondedWithinFiveMinutesPercent property value. The respondedWithinFiveMinutesPercent property
     * @return float|null
    */
    public function getRespondedWithinFiveMinutesPercent(): ?float {
        return $this->respondedWithinFiveMinutesPercent;
    }

    /**
     * Gets the smsReceived property value. The smsReceived property
     * @return int|null
    */
    public function getSmsReceived(): ?int {
        return $this->smsReceived;
    }

    /**
     * Gets the smsSent property value. The smsSent property
     * @return int|null
    */
    public function getSmsSent(): ?int {
        return $this->smsSent;
    }

    /**
     * Gets the unreadMessages property value. The unreadMessages property
     * @return int|null
    */
    public function getUnreadMessages(): ?int {
        return $this->unreadMessages;
    }

    /**
     * Gets the usageSpend property value. The usageSpend property
     * @return float|null
    */
    public function getUsageSpend(): ?float {
        return $this->usageSpend;
    }

    /**
     * Gets the walletBalance property value. The walletBalance property
     * @return float|null
    */
    public function getWalletBalance(): ?float {
        return $this->walletBalance;
    }

    /**
     * Gets the walletStatus property value. The walletStatus property
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
     * Sets the billingStatus property value. The billingStatus property
     * @param string|null $value Value to set for the billingStatus property.
    */
    public function setBillingStatus(?string $value): void {
        $this->billingStatus = $value;
    }

    /**
     * Sets the callMinutes property value. The callMinutes property
     * @param float|null $value Value to set for the callMinutes property.
    */
    public function setCallMinutes(?float $value): void {
        $this->callMinutes = $value;
    }

    /**
     * Sets the callsPlaced property value. The callsPlaced property
     * @param int|null $value Value to set for the callsPlaced property.
    */
    public function setCallsPlaced(?int $value): void {
        $this->callsPlaced = $value;
    }

    /**
     * Sets the callsReceived property value. The callsReceived property
     * @param int|null $value Value to set for the callsReceived property.
    */
    public function setCallsReceived(?int $value): void {
        $this->callsReceived = $value;
    }

    /**
     * Sets the leads property value. The leads property
     * @param int|null $value Value to set for the leads property.
    */
    public function setLeads(?int $value): void {
        $this->leads = $value;
    }

    /**
     * Sets the leadsComparison property value. The leadsComparison property
     * @param AnalyticsComparison|null $value Value to set for the leadsComparison property.
    */
    public function setLeadsComparison(?AnalyticsComparison $value): void {
        $this->leadsComparison = $value;
    }

    /**
     * Sets the missedCalls property value. The missedCalls property
     * @param int|null $value Value to set for the missedCalls property.
    */
    public function setMissedCalls(?int $value): void {
        $this->missedCalls = $value;
    }

    /**
     * Sets the missedLeads property value. The missedLeads property
     * @param int|null $value Value to set for the missedLeads property.
    */
    public function setMissedLeads(?int $value): void {
        $this->missedLeads = $value;
    }

    /**
     * Sets the respondedWithinFiveMinutesPercent property value. The respondedWithinFiveMinutesPercent property
     * @param float|null $value Value to set for the respondedWithinFiveMinutesPercent property.
    */
    public function setRespondedWithinFiveMinutesPercent(?float $value): void {
        $this->respondedWithinFiveMinutesPercent = $value;
    }

    /**
     * Sets the smsReceived property value. The smsReceived property
     * @param int|null $value Value to set for the smsReceived property.
    */
    public function setSmsReceived(?int $value): void {
        $this->smsReceived = $value;
    }

    /**
     * Sets the smsSent property value. The smsSent property
     * @param int|null $value Value to set for the smsSent property.
    */
    public function setSmsSent(?int $value): void {
        $this->smsSent = $value;
    }

    /**
     * Sets the unreadMessages property value. The unreadMessages property
     * @param int|null $value Value to set for the unreadMessages property.
    */
    public function setUnreadMessages(?int $value): void {
        $this->unreadMessages = $value;
    }

    /**
     * Sets the usageSpend property value. The usageSpend property
     * @param float|null $value Value to set for the usageSpend property.
    */
    public function setUsageSpend(?float $value): void {
        $this->usageSpend = $value;
    }

    /**
     * Sets the walletBalance property value. The walletBalance property
     * @param float|null $value Value to set for the walletBalance property.
    */
    public function setWalletBalance(?float $value): void {
        $this->walletBalance = $value;
    }

    /**
     * Sets the walletStatus property value. The walletStatus property
     * @param string|null $value Value to set for the walletStatus property.
    */
    public function setWalletStatus(?string $value): void {
        $this->walletStatus = $value;
    }

}
