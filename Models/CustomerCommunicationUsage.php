<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Communication usage associated with this Leadping customer analytics.
*/
class CustomerCommunicationUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $answeredCalls Number of calls answered during the reporting period.
    */
    private ?int $answeredCalls = null;
    
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
     * @var int|null $failedOrBlockedSms Number of SMS messages that failed or were blocked during the reporting period.
    */
    private ?int $failedOrBlockedSms = null;
    
    /**
     * @var int|null $missedCalls Number of calls missed during the reporting period.
    */
    private ?int $missedCalls = null;
    
    /**
     * @var int|null $smsReceived Number of SMS messages received during the reporting period.
    */
    private ?int $smsReceived = null;
    
    /**
     * @var int|null $smsSent Number of SMS messages sent during the reporting period.
    */
    private ?int $smsSent = null;
    
    /**
     * @var array<CustomerCommunicationUsagePoint>|null $trend Collection of trend included with this Leadping customer communication usage.
    */
    private ?array $trend = null;
    
    /**
     * @var float|null $usageSpend Usage spend represented by this Leadping customer communication usage.
    */
    private ?float $usageSpend = null;
    
    /**
     * Instantiates a new CustomerCommunicationUsage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerCommunicationUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerCommunicationUsage {
        return new CustomerCommunicationUsage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the answeredCalls property value. Number of calls answered during the reporting period.
     * @return int|null
    */
    public function getAnsweredCalls(): ?int {
        return $this->answeredCalls;
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
     * Gets the failedOrBlockedSms property value. Number of SMS messages that failed or were blocked during the reporting period.
     * @return int|null
    */
    public function getFailedOrBlockedSms(): ?int {
        return $this->failedOrBlockedSms;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'answeredCalls' => fn(ParseNode $n) => $o->setAnsweredCalls($n->getIntegerValue()),
            'callMinutes' => fn(ParseNode $n) => $o->setCallMinutes($n->getFloatValue()),
            'callsPlaced' => fn(ParseNode $n) => $o->setCallsPlaced($n->getIntegerValue()),
            'callsReceived' => fn(ParseNode $n) => $o->setCallsReceived($n->getIntegerValue()),
            'failedOrBlockedSms' => fn(ParseNode $n) => $o->setFailedOrBlockedSms($n->getIntegerValue()),
            'missedCalls' => fn(ParseNode $n) => $o->setMissedCalls($n->getIntegerValue()),
            'smsReceived' => fn(ParseNode $n) => $o->setSmsReceived($n->getIntegerValue()),
            'smsSent' => fn(ParseNode $n) => $o->setSmsSent($n->getIntegerValue()),
            'trend' => fn(ParseNode $n) => $o->setTrend($n->getCollectionOfObjectValues([CustomerCommunicationUsagePoint::class, 'createFromDiscriminatorValue'])),
            'usageSpend' => fn(ParseNode $n) => $o->setUsageSpend($n->getFloatValue()),
        ];
    }

    /**
     * Gets the missedCalls property value. Number of calls missed during the reporting period.
     * @return int|null
    */
    public function getMissedCalls(): ?int {
        return $this->missedCalls;
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
     * Gets the trend property value. Collection of trend included with this Leadping customer communication usage.
     * @return array<CustomerCommunicationUsagePoint>|null
    */
    public function getTrend(): ?array {
        return $this->trend;
    }

    /**
     * Gets the usageSpend property value. Usage spend represented by this Leadping customer communication usage.
     * @return float|null
    */
    public function getUsageSpend(): ?float {
        return $this->usageSpend;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('answeredCalls', $this->getAnsweredCalls());
        $writer->writeFloatValue('callMinutes', $this->getCallMinutes());
        $writer->writeIntegerValue('callsPlaced', $this->getCallsPlaced());
        $writer->writeIntegerValue('callsReceived', $this->getCallsReceived());
        $writer->writeIntegerValue('failedOrBlockedSms', $this->getFailedOrBlockedSms());
        $writer->writeIntegerValue('missedCalls', $this->getMissedCalls());
        $writer->writeIntegerValue('smsReceived', $this->getSmsReceived());
        $writer->writeIntegerValue('smsSent', $this->getSmsSent());
        $writer->writeCollectionOfObjectValues('trend', $this->getTrend());
        $writer->writeFloatValue('usageSpend', $this->getUsageSpend());
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
     * Sets the answeredCalls property value. Number of calls answered during the reporting period.
     * @param int|null $value Value to set for the answeredCalls property.
    */
    public function setAnsweredCalls(?int $value): void {
        $this->answeredCalls = $value;
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
     * Sets the failedOrBlockedSms property value. Number of SMS messages that failed or were blocked during the reporting period.
     * @param int|null $value Value to set for the failedOrBlockedSms property.
    */
    public function setFailedOrBlockedSms(?int $value): void {
        $this->failedOrBlockedSms = $value;
    }

    /**
     * Sets the missedCalls property value. Number of calls missed during the reporting period.
     * @param int|null $value Value to set for the missedCalls property.
    */
    public function setMissedCalls(?int $value): void {
        $this->missedCalls = $value;
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
     * Sets the trend property value. Collection of trend included with this Leadping customer communication usage.
     * @param array<CustomerCommunicationUsagePoint>|null $value Value to set for the trend property.
    */
    public function setTrend(?array $value): void {
        $this->trend = $value;
    }

    /**
     * Sets the usageSpend property value. Usage spend represented by this Leadping customer communication usage.
     * @param float|null $value Value to set for the usageSpend property.
    */
    public function setUsageSpend(?float $value): void {
        $this->usageSpend = $value;
    }

}
