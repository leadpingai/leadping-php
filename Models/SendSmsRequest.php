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
     * @var string|null $automationId Automation ID connected to this workflow, run, or event.
    */
    private ?string $automationId = null;
    
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
     * @var bool|null $hasRequiredConsent Indicates whether the lead has the consent required for compliant outreach.
    */
    private ?bool $hasRequiredConsent = null;
    
    /**
     * @var string|null $importBatchId Bulk import batch ID that created or updated this lead.
    */
    private ?string $importBatchId = null;
    
    /**
     * @var bool|null $isAutomated Indicates whether automation created or triggered this SMS send request.
    */
    private ?bool $isAutomated = null;
    
    /**
     * @var bool|null $isImportedLead Indicates whether this record originated from a bulk import rather than a real-time lead source.
    */
    private ?bool $isImportedLead = null;
    
    /**
     * @var string|null $outboundDeliveryRequestId Outbound delivery request ID connected to this decision or attempt.
    */
    private ?string $outboundDeliveryRequestId = null;
    
    /**
     * @var string|null $outboundIdempotencyKey Idempotency key used to prevent duplicate outbound delivery.
    */
    private ?string $outboundIdempotencyKey = null;
    
    /**
     * @var SendSmsRequest_outboundPriority|null $outboundPriority Defines priority classes used when pacing outbound delivery.
    */
    private ?SendSmsRequest_outboundPriority $outboundPriority = null;
    
    /**
     * @var string|null $outboundReservationId Outbound reservation ID used to throttle and track delivery capacity.
    */
    private ?string $outboundReservationId = null;
    
    /**
     * @var SendSmsRequest_outboundSource|null $outboundSource Defines the source that requested outbound delivery.
    */
    private ?SendSmsRequest_outboundSource $outboundSource = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC timestamp when Leadping should send the SMS message.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var SendSmsRequest_selectionReason|null $selectionReason Defines the supported Outgoing Number Selection Reason values.
    */
    private ?SendSmsRequest_selectionReason $selectionReason = null;
    
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
     * Gets the automationId property value. Automation ID connected to this workflow, run, or event.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
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
            'automationId' => fn(ParseNode $n) => $o->setAutomationId($n->getStringValue()),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'hasRequiredConsent' => fn(ParseNode $n) => $o->setHasRequiredConsent($n->getBooleanValue()),
            'importBatchId' => fn(ParseNode $n) => $o->setImportBatchId($n->getStringValue()),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'isImportedLead' => fn(ParseNode $n) => $o->setIsImportedLead($n->getBooleanValue()),
            'outboundDeliveryRequestId' => fn(ParseNode $n) => $o->setOutboundDeliveryRequestId($n->getStringValue()),
            'outboundIdempotencyKey' => fn(ParseNode $n) => $o->setOutboundIdempotencyKey($n->getStringValue()),
            'outboundPriority' => fn(ParseNode $n) => $o->setOutboundPriority($n->getEnumValue(SendSmsRequest_outboundPriority::class)),
            'outboundReservationId' => fn(ParseNode $n) => $o->setOutboundReservationId($n->getStringValue()),
            'outboundSource' => fn(ParseNode $n) => $o->setOutboundSource($n->getEnumValue(SendSmsRequest_outboundSource::class)),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(SendSmsRequest_selectionReason::class)),
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
     * Gets the hasRequiredConsent property value. Indicates whether the lead has the consent required for compliant outreach.
     * @return bool|null
    */
    public function getHasRequiredConsent(): ?bool {
        return $this->hasRequiredConsent;
    }

    /**
     * Gets the importBatchId property value. Bulk import batch ID that created or updated this lead.
     * @return string|null
    */
    public function getImportBatchId(): ?string {
        return $this->importBatchId;
    }

    /**
     * Gets the isAutomated property value. Indicates whether automation created or triggered this SMS send request.
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        return $this->isAutomated;
    }

    /**
     * Gets the isImportedLead property value. Indicates whether this record originated from a bulk import rather than a real-time lead source.
     * @return bool|null
    */
    public function getIsImportedLead(): ?bool {
        return $this->isImportedLead;
    }

    /**
     * Gets the outboundDeliveryRequestId property value. Outbound delivery request ID connected to this decision or attempt.
     * @return string|null
    */
    public function getOutboundDeliveryRequestId(): ?string {
        return $this->outboundDeliveryRequestId;
    }

    /**
     * Gets the outboundIdempotencyKey property value. Idempotency key used to prevent duplicate outbound delivery.
     * @return string|null
    */
    public function getOutboundIdempotencyKey(): ?string {
        return $this->outboundIdempotencyKey;
    }

    /**
     * Gets the outboundPriority property value. Defines priority classes used when pacing outbound delivery.
     * @return SendSmsRequest_outboundPriority|null
    */
    public function getOutboundPriority(): ?SendSmsRequest_outboundPriority {
        return $this->outboundPriority;
    }

    /**
     * Gets the outboundReservationId property value. Outbound reservation ID used to throttle and track delivery capacity.
     * @return string|null
    */
    public function getOutboundReservationId(): ?string {
        return $this->outboundReservationId;
    }

    /**
     * Gets the outboundSource property value. Defines the source that requested outbound delivery.
     * @return SendSmsRequest_outboundSource|null
    */
    public function getOutboundSource(): ?SendSmsRequest_outboundSource {
        return $this->outboundSource;
    }

    /**
     * Gets the scheduledFor property value. UTC timestamp when Leadping should send the SMS message.
     * @return DateTime|null
    */
    public function getScheduledFor(): ?DateTime {
        return $this->scheduledFor;
    }

    /**
     * Gets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @return SendSmsRequest_selectionReason|null
    */
    public function getSelectionReason(): ?SendSmsRequest_selectionReason {
        return $this->selectionReason;
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
        $writer->writeStringValue('automationId', $this->getAutomationId());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeBooleanValue('hasRequiredConsent', $this->getHasRequiredConsent());
        $writer->writeStringValue('importBatchId', $this->getImportBatchId());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeBooleanValue('isImportedLead', $this->getIsImportedLead());
        $writer->writeStringValue('outboundDeliveryRequestId', $this->getOutboundDeliveryRequestId());
        $writer->writeStringValue('outboundIdempotencyKey', $this->getOutboundIdempotencyKey());
        $writer->writeEnumValue('outboundPriority', $this->getOutboundPriority());
        $writer->writeStringValue('outboundReservationId', $this->getOutboundReservationId());
        $writer->writeEnumValue('outboundSource', $this->getOutboundSource());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
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
     * Sets the automationId property value. Automation ID connected to this workflow, run, or event.
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->automationId = $value;
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
     * Sets the hasRequiredConsent property value. Indicates whether the lead has the consent required for compliant outreach.
     * @param bool|null $value Value to set for the hasRequiredConsent property.
    */
    public function setHasRequiredConsent(?bool $value): void {
        $this->hasRequiredConsent = $value;
    }

    /**
     * Sets the importBatchId property value. Bulk import batch ID that created or updated this lead.
     * @param string|null $value Value to set for the importBatchId property.
    */
    public function setImportBatchId(?string $value): void {
        $this->importBatchId = $value;
    }

    /**
     * Sets the isAutomated property value. Indicates whether automation created or triggered this SMS send request.
     * @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value): void {
        $this->isAutomated = $value;
    }

    /**
     * Sets the isImportedLead property value. Indicates whether this record originated from a bulk import rather than a real-time lead source.
     * @param bool|null $value Value to set for the isImportedLead property.
    */
    public function setIsImportedLead(?bool $value): void {
        $this->isImportedLead = $value;
    }

    /**
     * Sets the outboundDeliveryRequestId property value. Outbound delivery request ID connected to this decision or attempt.
     * @param string|null $value Value to set for the outboundDeliveryRequestId property.
    */
    public function setOutboundDeliveryRequestId(?string $value): void {
        $this->outboundDeliveryRequestId = $value;
    }

    /**
     * Sets the outboundIdempotencyKey property value. Idempotency key used to prevent duplicate outbound delivery.
     * @param string|null $value Value to set for the outboundIdempotencyKey property.
    */
    public function setOutboundIdempotencyKey(?string $value): void {
        $this->outboundIdempotencyKey = $value;
    }

    /**
     * Sets the outboundPriority property value. Defines priority classes used when pacing outbound delivery.
     * @param SendSmsRequest_outboundPriority|null $value Value to set for the outboundPriority property.
    */
    public function setOutboundPriority(?SendSmsRequest_outboundPriority $value): void {
        $this->outboundPriority = $value;
    }

    /**
     * Sets the outboundReservationId property value. Outbound reservation ID used to throttle and track delivery capacity.
     * @param string|null $value Value to set for the outboundReservationId property.
    */
    public function setOutboundReservationId(?string $value): void {
        $this->outboundReservationId = $value;
    }

    /**
     * Sets the outboundSource property value. Defines the source that requested outbound delivery.
     * @param SendSmsRequest_outboundSource|null $value Value to set for the outboundSource property.
    */
    public function setOutboundSource(?SendSmsRequest_outboundSource $value): void {
        $this->outboundSource = $value;
    }

    /**
     * Sets the scheduledFor property value. UTC timestamp when Leadping should send the SMS message.
     * @param DateTime|null $value Value to set for the scheduledFor property.
    */
    public function setScheduledFor(?DateTime $value): void {
        $this->scheduledFor = $value;
    }

    /**
     * Sets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @param SendSmsRequest_selectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?SendSmsRequest_selectionReason $value): void {
        $this->selectionReason = $value;
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
