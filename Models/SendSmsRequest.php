<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API SMS send request, including the fields clients can send.
*/
class SendSmsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this SMS send request.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this SMS send request to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var string|null $fromPhoneNumberId Sender phone number ID used for this outbound SMS or call.
    */
    private ?string $fromPhoneNumberId = null;
    
    /**
     * @var string|null $outboundIdempotencyKey Idempotency key used to prevent duplicate outbound delivery.
    */
    private ?string $outboundIdempotencyKey = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC timestamp when Leadping should send the SMS message.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var string|null $smsEventId Existing SMS event ID to reuse or update when retrying a send request.
    */
    private ?string $smsEventId = null;
    
    /**
     * @var string|null $sourceId Lead source ID used for attribution and sender selection.
    */
    private ?string $sourceId = null;
    
    /**
     * @var string|null $text Body text for the SMS message or communication represented by this SMS send request.
    */
    private ?string $text = null;
    
    /**
     * @var bool|null $wasManuallyOverridden Indicates whether a user manually overrode Leadping's automatic number selection for this SMS send request.
    */
    private ?bool $wasManuallyOverridden = null;
    
    /**
     * Instantiates a new SendSmsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendSmsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendSmsRequest {
        return new SendSmsRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this SMS send request.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this SMS send request to the Leadping inbox thread.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'outboundIdempotencyKey' => fn(ParseNode $n) => $o->setOutboundIdempotencyKey($n->getStringValue()),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'smsEventId' => fn(ParseNode $n) => $o->setSmsEventId($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'wasManuallyOverridden' => fn(ParseNode $n) => $o->setWasManuallyOverridden($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fromPhoneNumberId property value. Sender phone number ID used for this outbound SMS or call.
     * @return string|null
    */
    public function getFromPhoneNumberId(): ?string {
        return $this->fromPhoneNumberId;
    }

    /**
     * Gets the outboundIdempotencyKey property value. Idempotency key used to prevent duplicate outbound delivery.
     * @return string|null
    */
    public function getOutboundIdempotencyKey(): ?string {
        return $this->outboundIdempotencyKey;
    }

    /**
     * Gets the scheduledFor property value. UTC timestamp when Leadping should send the SMS message.
     * @return DateTime|null
    */
    public function getScheduledFor(): ?DateTime {
        return $this->scheduledFor;
    }

    /**
     * Gets the smsEventId property value. Existing SMS event ID to reuse or update when retrying a send request.
     * @return string|null
    */
    public function getSmsEventId(): ?string {
        return $this->smsEventId;
    }

    /**
     * Gets the sourceId property value. Lead source ID used for attribution and sender selection.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the text property value. Body text for the SMS message or communication represented by this SMS send request.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this SMS send request.
     * @return bool|null
    */
    public function getWasManuallyOverridden(): ?bool {
        return $this->wasManuallyOverridden;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('outboundIdempotencyKey', $this->getOutboundIdempotencyKey());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeStringValue('smsEventId', $this->getSmsEventId());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeBooleanValue('wasManuallyOverridden', $this->getWasManuallyOverridden());
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this SMS send request.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this SMS send request to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the fromPhoneNumberId property value. Sender phone number ID used for this outbound SMS or call.
     * @param string|null $value Value to set for the fromPhoneNumberId property.
    */
    public function setFromPhoneNumberId(?string $value): void {
        $this->fromPhoneNumberId = $value;
    }

    /**
     * Sets the outboundIdempotencyKey property value. Idempotency key used to prevent duplicate outbound delivery.
     * @param string|null $value Value to set for the outboundIdempotencyKey property.
    */
    public function setOutboundIdempotencyKey(?string $value): void {
        $this->outboundIdempotencyKey = $value;
    }

    /**
     * Sets the scheduledFor property value. UTC timestamp when Leadping should send the SMS message.
     * @param DateTime|null $value Value to set for the scheduledFor property.
    */
    public function setScheduledFor(?DateTime $value): void {
        $this->scheduledFor = $value;
    }

    /**
     * Sets the smsEventId property value. Existing SMS event ID to reuse or update when retrying a send request.
     * @param string|null $value Value to set for the smsEventId property.
    */
    public function setSmsEventId(?string $value): void {
        $this->smsEventId = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID used for attribution and sender selection.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the text property value. Body text for the SMS message or communication represented by this SMS send request.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

    /**
     * Sets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this SMS send request.
     * @param bool|null $value Value to set for the wasManuallyOverridden property.
    */
    public function setWasManuallyOverridden(?bool $value): void {
        $this->wasManuallyOverridden = $value;
    }

}
