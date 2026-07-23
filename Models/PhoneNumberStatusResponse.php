<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number warmup status returned to authenticated clients.
*/
class PhoneNumberStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $callsPossible Indicates whether this phone number can currently place outbound calls.
    */
    private ?int $callsPossible = null;
    
    /**
     * @var int|null $messagesPossible Indicates whether this phone number can currently send SMS messages.
    */
    private ?int $messagesPossible = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone number warmup status.
    */
    private ?string $number = null;
    
    /**
     * @var PhoneNumberOptOutMetricsResponse|null $optOutMetrics Recent SMS opt-out metrics used to evaluate sender health and compliance risk.
    */
    private ?PhoneNumberOptOutMetricsResponse $optOutMetrics = null;
    
    /**
     * @var PhoneNumberStatusResponse_outboundCapacity|null $outboundCapacity Current outbound SMS and voice capacity for this phone number.
    */
    private ?PhoneNumberStatusResponse_outboundCapacity $outboundCapacity = null;
    
    /**
     * @var array<PhoneNumberMessagingEventResponse>|null $recentEvents Recent workflow events returned for timeline and troubleshooting.
    */
    private ?array $recentEvents = null;
    
    /**
     * @var PhoneNumberStatusResponse_smsWarmup|null $smsWarmup SMS warmup status for this phone number.
    */
    private ?PhoneNumberStatusResponse_smsWarmup $smsWarmup = null;
    
    /**
     * @var PhoneNumberTrafficMetricsResponse|null $trafficMetrics Phone number traffic metrics for recent SMS and call activity.
    */
    private ?PhoneNumberTrafficMetricsResponse $trafficMetrics = null;
    
    /**
     * Instantiates a new PhoneNumberStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberStatusResponse {
        return new PhoneNumberStatusResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callsPossible property value. Indicates whether this phone number can currently place outbound calls.
     * @return int|null
    */
    public function getCallsPossible(): ?int {
        return $this->callsPossible;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callsPossible' => fn(ParseNode $n) => $o->setCallsPossible($n->getIntegerValue()),
            'messagesPossible' => fn(ParseNode $n) => $o->setMessagesPossible($n->getIntegerValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'optOutMetrics' => fn(ParseNode $n) => $o->setOptOutMetrics($n->getObjectValue([PhoneNumberOptOutMetricsResponse::class, 'createFromDiscriminatorValue'])),
            'outboundCapacity' => fn(ParseNode $n) => $o->setOutboundCapacity($n->getObjectValue([PhoneNumberStatusResponse_outboundCapacity::class, 'createFromDiscriminatorValue'])),
            'recentEvents' => fn(ParseNode $n) => $o->setRecentEvents($n->getCollectionOfObjectValues([PhoneNumberMessagingEventResponse::class, 'createFromDiscriminatorValue'])),
            'smsWarmup' => fn(ParseNode $n) => $o->setSmsWarmup($n->getObjectValue([PhoneNumberStatusResponse_smsWarmup::class, 'createFromDiscriminatorValue'])),
            'trafficMetrics' => fn(ParseNode $n) => $o->setTrafficMetrics($n->getObjectValue([PhoneNumberTrafficMetricsResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the messagesPossible property value. Indicates whether this phone number can currently send SMS messages.
     * @return int|null
    */
    public function getMessagesPossible(): ?int {
        return $this->messagesPossible;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone number warmup status.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the optOutMetrics property value. Recent SMS opt-out metrics used to evaluate sender health and compliance risk.
     * @return PhoneNumberOptOutMetricsResponse|null
    */
    public function getOptOutMetrics(): ?PhoneNumberOptOutMetricsResponse {
        return $this->optOutMetrics;
    }

    /**
     * Gets the outboundCapacity property value. Current outbound SMS and voice capacity for this phone number.
     * @return PhoneNumberStatusResponse_outboundCapacity|null
    */
    public function getOutboundCapacity(): ?PhoneNumberStatusResponse_outboundCapacity {
        return $this->outboundCapacity;
    }

    /**
     * Gets the recentEvents property value. Recent workflow events returned for timeline and troubleshooting.
     * @return array<PhoneNumberMessagingEventResponse>|null
    */
    public function getRecentEvents(): ?array {
        return $this->recentEvents;
    }

    /**
     * Gets the smsWarmup property value. SMS warmup status for this phone number.
     * @return PhoneNumberStatusResponse_smsWarmup|null
    */
    public function getSmsWarmup(): ?PhoneNumberStatusResponse_smsWarmup {
        return $this->smsWarmup;
    }

    /**
     * Gets the trafficMetrics property value. Phone number traffic metrics for recent SMS and call activity.
     * @return PhoneNumberTrafficMetricsResponse|null
    */
    public function getTrafficMetrics(): ?PhoneNumberTrafficMetricsResponse {
        return $this->trafficMetrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('callsPossible', $this->getCallsPossible());
        $writer->writeIntegerValue('messagesPossible', $this->getMessagesPossible());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeObjectValue('optOutMetrics', $this->getOptOutMetrics());
        $writer->writeObjectValue('outboundCapacity', $this->getOutboundCapacity());
        $writer->writeCollectionOfObjectValues('recentEvents', $this->getRecentEvents());
        $writer->writeObjectValue('smsWarmup', $this->getSmsWarmup());
        $writer->writeObjectValue('trafficMetrics', $this->getTrafficMetrics());
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
     * Sets the callsPossible property value. Indicates whether this phone number can currently place outbound calls.
     * @param int|null $value Value to set for the callsPossible property.
    */
    public function setCallsPossible(?int $value): void {
        $this->callsPossible = $value;
    }

    /**
     * Sets the messagesPossible property value. Indicates whether this phone number can currently send SMS messages.
     * @param int|null $value Value to set for the messagesPossible property.
    */
    public function setMessagesPossible(?int $value): void {
        $this->messagesPossible = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone number warmup status.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the optOutMetrics property value. Recent SMS opt-out metrics used to evaluate sender health and compliance risk.
     * @param PhoneNumberOptOutMetricsResponse|null $value Value to set for the optOutMetrics property.
    */
    public function setOptOutMetrics(?PhoneNumberOptOutMetricsResponse $value): void {
        $this->optOutMetrics = $value;
    }

    /**
     * Sets the outboundCapacity property value. Current outbound SMS and voice capacity for this phone number.
     * @param PhoneNumberStatusResponse_outboundCapacity|null $value Value to set for the outboundCapacity property.
    */
    public function setOutboundCapacity(?PhoneNumberStatusResponse_outboundCapacity $value): void {
        $this->outboundCapacity = $value;
    }

    /**
     * Sets the recentEvents property value. Recent workflow events returned for timeline and troubleshooting.
     * @param array<PhoneNumberMessagingEventResponse>|null $value Value to set for the recentEvents property.
    */
    public function setRecentEvents(?array $value): void {
        $this->recentEvents = $value;
    }

    /**
     * Sets the smsWarmup property value. SMS warmup status for this phone number.
     * @param PhoneNumberStatusResponse_smsWarmup|null $value Value to set for the smsWarmup property.
    */
    public function setSmsWarmup(?PhoneNumberStatusResponse_smsWarmup $value): void {
        $this->smsWarmup = $value;
    }

    /**
     * Sets the trafficMetrics property value. Phone number traffic metrics for recent SMS and call activity.
     * @param PhoneNumberTrafficMetricsResponse|null $value Value to set for the trafficMetrics property.
    */
    public function setTrafficMetrics(?PhoneNumberTrafficMetricsResponse $value): void {
        $this->trafficMetrics = $value;
    }

}
