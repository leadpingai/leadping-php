<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Time-series data point schema for Leadping API phone number traffic trend bucket charts and metrics.
*/
class PhoneNumberTrafficTrendPoint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $callFailedCount Number of outbound calls that failed during this metrics window.
    */
    private ?int $callFailedCount = null;
    
    /**
     * @var int|null $callPlacedCount Number of outbound calls placed during this metrics window.
    */
    private ?int $callPlacedCount = null;
    
    /**
     * @var DateTime|null $endAt UTC timestamp when this reporting bucket ends.
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var string|null $label Short display label for this phone number traffic trend bucket, formatted for charts, filters, or list views.
    */
    private ?string $label = null;
    
    /**
     * @var int|null $smsFailedCount Number of SMS messages that failed during this metrics window.
    */
    private ?int $smsFailedCount = null;
    
    /**
     * @var int|null $smsSentCount Number of SMS messages sent during this metrics window.
    */
    private ?int $smsSentCount = null;
    
    /**
     * @var DateTime|null $startAt UTC timestamp when this reporting bucket starts.
    */
    private ?DateTime $startAt = null;
    
    /**
     * Instantiates a new PhoneNumberTrafficTrendPoint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberTrafficTrendPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberTrafficTrendPoint {
        return new PhoneNumberTrafficTrendPoint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callFailedCount property value. Number of outbound calls that failed during this metrics window.
     * @return int|null
    */
    public function getCallFailedCount(): ?int {
        return $this->callFailedCount;
    }

    /**
     * Gets the callPlacedCount property value. Number of outbound calls placed during this metrics window.
     * @return int|null
    */
    public function getCallPlacedCount(): ?int {
        return $this->callPlacedCount;
    }

    /**
     * Gets the endAt property value. UTC timestamp when this reporting bucket ends.
     * @return DateTime|null
    */
    public function getEndAt(): ?DateTime {
        return $this->endAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callFailedCount' => fn(ParseNode $n) => $o->setCallFailedCount($n->getIntegerValue()),
            'callPlacedCount' => fn(ParseNode $n) => $o->setCallPlacedCount($n->getIntegerValue()),
            'endAt' => fn(ParseNode $n) => $o->setEndAt($n->getDateTimeValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'smsFailedCount' => fn(ParseNode $n) => $o->setSmsFailedCount($n->getIntegerValue()),
            'smsSentCount' => fn(ParseNode $n) => $o->setSmsSentCount($n->getIntegerValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the label property value. Short display label for this phone number traffic trend bucket, formatted for charts, filters, or list views.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
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
     * Gets the startAt property value. UTC timestamp when this reporting bucket starts.
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('callFailedCount', $this->getCallFailedCount());
        $writer->writeIntegerValue('callPlacedCount', $this->getCallPlacedCount());
        $writer->writeDateTimeValue('endAt', $this->getEndAt());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeIntegerValue('smsFailedCount', $this->getSmsFailedCount());
        $writer->writeIntegerValue('smsSentCount', $this->getSmsSentCount());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
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
     * Sets the callFailedCount property value. Number of outbound calls that failed during this metrics window.
     * @param int|null $value Value to set for the callFailedCount property.
    */
    public function setCallFailedCount(?int $value): void {
        $this->callFailedCount = $value;
    }

    /**
     * Sets the callPlacedCount property value. Number of outbound calls placed during this metrics window.
     * @param int|null $value Value to set for the callPlacedCount property.
    */
    public function setCallPlacedCount(?int $value): void {
        $this->callPlacedCount = $value;
    }

    /**
     * Sets the endAt property value. UTC timestamp when this reporting bucket ends.
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the label property value. Short display label for this phone number traffic trend bucket, formatted for charts, filters, or list views.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
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
     * Sets the startAt property value. UTC timestamp when this reporting bucket starts.
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

}
