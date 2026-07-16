<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerCommunicationUsagePoint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $callMinutes Total connected call duration, in minutes, during the reporting period.
    */
    private ?float $callMinutes = null;
    
    /**
     * @var int|null $calls Number of calls represented by this Leadping customer communication usage point.
    */
    private ?int $calls = null;
    
    /**
     * @var DateTime|null $endAt Date and time when this Leadping customer communication usage point was end.
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var string|null $label Human-readable label for this Leadping customer communication usage point.
    */
    private ?string $label = null;
    
    /**
     * @var int|null $smsReceived Number of SMS messages received during the reporting period.
    */
    private ?int $smsReceived = null;
    
    /**
     * @var int|null $smsSent Number of SMS messages sent during the reporting period.
    */
    private ?int $smsSent = null;
    
    /**
     * @var float|null $spend Spend represented by this Leadping customer communication usage point.
    */
    private ?float $spend = null;
    
    /**
     * @var DateTime|null $startAt Date and time when this Leadping customer communication usage point was start.
    */
    private ?DateTime $startAt = null;
    
    /**
     * Instantiates a new CustomerCommunicationUsagePoint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerCommunicationUsagePoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerCommunicationUsagePoint {
        return new CustomerCommunicationUsagePoint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callMinutes property value. Total connected call duration, in minutes, during the reporting period.
     * @return float|null
    */
    public function getCallMinutes(): ?float {
        return $this->callMinutes;
    }

    /**
     * Gets the calls property value. Number of calls represented by this Leadping customer communication usage point.
     * @return int|null
    */
    public function getCalls(): ?int {
        return $this->calls;
    }

    /**
     * Gets the endAt property value. Date and time when this Leadping customer communication usage point was end.
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
            'callMinutes' => fn(ParseNode $n) => $o->setCallMinutes($n->getFloatValue()),
            'calls' => fn(ParseNode $n) => $o->setCalls($n->getIntegerValue()),
            'endAt' => fn(ParseNode $n) => $o->setEndAt($n->getDateTimeValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'smsReceived' => fn(ParseNode $n) => $o->setSmsReceived($n->getIntegerValue()),
            'smsSent' => fn(ParseNode $n) => $o->setSmsSent($n->getIntegerValue()),
            'spend' => fn(ParseNode $n) => $o->setSpend($n->getFloatValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the label property value. Human-readable label for this Leadping customer communication usage point.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
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
     * Gets the spend property value. Spend represented by this Leadping customer communication usage point.
     * @return float|null
    */
    public function getSpend(): ?float {
        return $this->spend;
    }

    /**
     * Gets the startAt property value. Date and time when this Leadping customer communication usage point was start.
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
        $writer->writeFloatValue('callMinutes', $this->getCallMinutes());
        $writer->writeIntegerValue('calls', $this->getCalls());
        $writer->writeDateTimeValue('endAt', $this->getEndAt());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeIntegerValue('smsReceived', $this->getSmsReceived());
        $writer->writeIntegerValue('smsSent', $this->getSmsSent());
        $writer->writeFloatValue('spend', $this->getSpend());
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
     * Sets the callMinutes property value. Total connected call duration, in minutes, during the reporting period.
     * @param float|null $value Value to set for the callMinutes property.
    */
    public function setCallMinutes(?float $value): void {
        $this->callMinutes = $value;
    }

    /**
     * Sets the calls property value. Number of calls represented by this Leadping customer communication usage point.
     * @param int|null $value Value to set for the calls property.
    */
    public function setCalls(?int $value): void {
        $this->calls = $value;
    }

    /**
     * Sets the endAt property value. Date and time when this Leadping customer communication usage point was end.
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the label property value. Human-readable label for this Leadping customer communication usage point.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
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
     * Sets the spend property value. Spend represented by this Leadping customer communication usage point.
     * @param float|null $value Value to set for the spend property.
    */
    public function setSpend(?float $value): void {
        $this->spend = $value;
    }

    /**
     * Sets the startAt property value. Date and time when this Leadping customer communication usage point was start.
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

}
