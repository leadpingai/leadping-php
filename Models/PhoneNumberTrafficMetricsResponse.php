<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number traffic metrics response returned to authenticated clients.
*/
class PhoneNumberTrafficMetricsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $callConnectedCount Number of outbound calls that connected during this metrics window.
    */
    private ?int $callConnectedCount = null;
    
    /**
     * @var int|null $callFailedCount Number of outbound calls that failed during this metrics window.
    */
    private ?int $callFailedCount = null;
    
    /**
     * @var int|null $callInvalidNumberCount Number of outbound calls that failed because the destination number was invalid during this metrics window.
    */
    private ?int $callInvalidNumberCount = null;
    
    /**
     * @var int|null $callPlacedCount Number of outbound calls placed during this metrics window.
    */
    private ?int $callPlacedCount = null;
    
    /**
     * @var int|null $callShortCount Number of connected outbound calls shorter than 30 seconds during this metrics window.
    */
    private ?int $callShortCount = null;
    
    /**
     * @var int|null $smsFailedCount Number of SMS messages that failed during this metrics window.
    */
    private ?int $smsFailedCount = null;
    
    /**
     * @var int|null $smsSentCount Number of SMS messages sent during this metrics window.
    */
    private ?int $smsSentCount = null;
    
    /**
     * @var array<PhoneNumberTrafficTrendPoint>|null $trend Time-series buckets that show how the metric changes across the reporting window.
    */
    private ?array $trend = null;
    
    /**
     * @var int|null $windowDays Number of days included in the metrics reporting window.
    */
    private ?int $windowDays = null;
    
    /**
     * @var DateTime|null $windowStartedAt UTC timestamp when the metrics reporting window starts.
    */
    private ?DateTime $windowStartedAt = null;
    
    /**
     * Instantiates a new PhoneNumberTrafficMetricsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberTrafficMetricsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberTrafficMetricsResponse {
        return new PhoneNumberTrafficMetricsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callConnectedCount property value. Number of outbound calls that connected during this metrics window.
     * @return int|null
    */
    public function getCallConnectedCount(): ?int {
        return $this->callConnectedCount;
    }

    /**
     * Gets the callFailedCount property value. Number of outbound calls that failed during this metrics window.
     * @return int|null
    */
    public function getCallFailedCount(): ?int {
        return $this->callFailedCount;
    }

    /**
     * Gets the callInvalidNumberCount property value. Number of outbound calls that failed because the destination number was invalid during this metrics window.
     * @return int|null
    */
    public function getCallInvalidNumberCount(): ?int {
        return $this->callInvalidNumberCount;
    }

    /**
     * Gets the callPlacedCount property value. Number of outbound calls placed during this metrics window.
     * @return int|null
    */
    public function getCallPlacedCount(): ?int {
        return $this->callPlacedCount;
    }

    /**
     * Gets the callShortCount property value. Number of connected outbound calls shorter than 30 seconds during this metrics window.
     * @return int|null
    */
    public function getCallShortCount(): ?int {
        return $this->callShortCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callConnectedCount' => fn(ParseNode $n) => $o->setCallConnectedCount($n->getIntegerValue()),
            'callFailedCount' => fn(ParseNode $n) => $o->setCallFailedCount($n->getIntegerValue()),
            'callInvalidNumberCount' => fn(ParseNode $n) => $o->setCallInvalidNumberCount($n->getIntegerValue()),
            'callPlacedCount' => fn(ParseNode $n) => $o->setCallPlacedCount($n->getIntegerValue()),
            'callShortCount' => fn(ParseNode $n) => $o->setCallShortCount($n->getIntegerValue()),
            'smsFailedCount' => fn(ParseNode $n) => $o->setSmsFailedCount($n->getIntegerValue()),
            'smsSentCount' => fn(ParseNode $n) => $o->setSmsSentCount($n->getIntegerValue()),
            'trend' => fn(ParseNode $n) => $o->setTrend($n->getCollectionOfObjectValues([PhoneNumberTrafficTrendPoint::class, 'createFromDiscriminatorValue'])),
            'windowDays' => fn(ParseNode $n) => $o->setWindowDays($n->getIntegerValue()),
            'windowStartedAt' => fn(ParseNode $n) => $o->setWindowStartedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the smsFailedCount property value. Number of SMS messages that failed during this metrics window.
     * @return int|null
    */
    public function getSmsFailedCount(): ?int {
        return $this->smsFailedCount;
    }

    /**
     * Gets the smsSentCount property value. Number of SMS messages sent during this metrics window.
     * @return int|null
    */
    public function getSmsSentCount(): ?int {
        return $this->smsSentCount;
    }

    /**
     * Gets the trend property value. Time-series buckets that show how the metric changes across the reporting window.
     * @return array<PhoneNumberTrafficTrendPoint>|null
    */
    public function getTrend(): ?array {
        return $this->trend;
    }

    /**
     * Gets the windowDays property value. Number of days included in the metrics reporting window.
     * @return int|null
    */
    public function getWindowDays(): ?int {
        return $this->windowDays;
    }

    /**
     * Gets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @return DateTime|null
    */
    public function getWindowStartedAt(): ?DateTime {
        return $this->windowStartedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('callConnectedCount', $this->getCallConnectedCount());
        $writer->writeIntegerValue('callFailedCount', $this->getCallFailedCount());
        $writer->writeIntegerValue('callInvalidNumberCount', $this->getCallInvalidNumberCount());
        $writer->writeIntegerValue('callPlacedCount', $this->getCallPlacedCount());
        $writer->writeIntegerValue('callShortCount', $this->getCallShortCount());
        $writer->writeIntegerValue('smsFailedCount', $this->getSmsFailedCount());
        $writer->writeIntegerValue('smsSentCount', $this->getSmsSentCount());
        $writer->writeCollectionOfObjectValues('trend', $this->getTrend());
        $writer->writeIntegerValue('windowDays', $this->getWindowDays());
        $writer->writeDateTimeValue('windowStartedAt', $this->getWindowStartedAt());
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
     * Sets the callConnectedCount property value. Number of outbound calls that connected during this metrics window.
     * @param int|null $value Value to set for the callConnectedCount property.
    */
    public function setCallConnectedCount(?int $value): void {
        $this->callConnectedCount = $value;
    }

    /**
     * Sets the callFailedCount property value. Number of outbound calls that failed during this metrics window.
     * @param int|null $value Value to set for the callFailedCount property.
    */
    public function setCallFailedCount(?int $value): void {
        $this->callFailedCount = $value;
    }

    /**
     * Sets the callInvalidNumberCount property value. Number of outbound calls that failed because the destination number was invalid during this metrics window.
     * @param int|null $value Value to set for the callInvalidNumberCount property.
    */
    public function setCallInvalidNumberCount(?int $value): void {
        $this->callInvalidNumberCount = $value;
    }

    /**
     * Sets the callPlacedCount property value. Number of outbound calls placed during this metrics window.
     * @param int|null $value Value to set for the callPlacedCount property.
    */
    public function setCallPlacedCount(?int $value): void {
        $this->callPlacedCount = $value;
    }

    /**
     * Sets the callShortCount property value. Number of connected outbound calls shorter than 30 seconds during this metrics window.
     * @param int|null $value Value to set for the callShortCount property.
    */
    public function setCallShortCount(?int $value): void {
        $this->callShortCount = $value;
    }

    /**
     * Sets the smsFailedCount property value. Number of SMS messages that failed during this metrics window.
     * @param int|null $value Value to set for the smsFailedCount property.
    */
    public function setSmsFailedCount(?int $value): void {
        $this->smsFailedCount = $value;
    }

    /**
     * Sets the smsSentCount property value. Number of SMS messages sent during this metrics window.
     * @param int|null $value Value to set for the smsSentCount property.
    */
    public function setSmsSentCount(?int $value): void {
        $this->smsSentCount = $value;
    }

    /**
     * Sets the trend property value. Time-series buckets that show how the metric changes across the reporting window.
     * @param array<PhoneNumberTrafficTrendPoint>|null $value Value to set for the trend property.
    */
    public function setTrend(?array $value): void {
        $this->trend = $value;
    }

    /**
     * Sets the windowDays property value. Number of days included in the metrics reporting window.
     * @param int|null $value Value to set for the windowDays property.
    */
    public function setWindowDays(?int $value): void {
        $this->windowDays = $value;
    }

    /**
     * Sets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @param DateTime|null $value Value to set for the windowStartedAt property.
    */
    public function setWindowStartedAt(?DateTime $value): void {
        $this->windowStartedAt = $value;
    }

}
