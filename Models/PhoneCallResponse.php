<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone call returned to authenticated clients.
*/
class PhoneCallResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $answeredAt UTC timestamp when the call was answered.
    */
    private ?DateTime $answeredAt = null;
    
    /**
     * @var string|null $billingStatus Billing state for this communication, charge, or transaction.
    */
    private ?string $billingStatus = null;
    
    /**
     * @var string|null $callerId Caller ID phone number presented during the outbound call.
    */
    private ?string $callerId = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this phone call.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this phone call to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $direction Communication direction for this phone call, such as inbound or outbound.
    */
    private ?string $direction = null;
    
    /**
     * @var DateTime|null $endedAt UTC timestamp when the call ended.
    */
    private ?DateTime $endedAt = null;
    
    /**
     * @var string|null $fromPhoneNumber Sender phone number used for this communication.
    */
    private ?string $fromPhoneNumber = null;
    
    /**
     * @var string|null $fromPhoneNumberId Sender phone number ID used for this outbound SMS or call.
    */
    private ?string $fromPhoneNumberId = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $leadId Lead ID associated with the call conversation or outreach attempt.
    */
    private ?string $leadId = null;
    
    /**
     * @var PhoneCallResponse_metadata|null $metadata Structured metadata used for attribution, integrations, and reporting on this phone call.
    */
    private ?PhoneCallResponse_metadata $metadata = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $phoneNumber Phone number used by this phone call for calls, SMS, lookup, or routing.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var DateTime|null $queuedAt UTC timestamp when Leadping queued this phone call for processing.
    */
    private ?DateTime $queuedAt = null;
    
    /**
     * @var string|null $recordingUrl URL for the call recording, when the provider makes one available.
    */
    private ?string $recordingUrl = null;
    
    /**
     * @var DateTime|null $ringingAt UTC timestamp when the call started ringing.
    */
    private ?DateTime $ringingAt = null;
    
    /**
     * @var PhoneCallResponse_selectionReason|null $selectionReason Defines the supported Outgoing Number Selection Reason values.
    */
    private ?PhoneCallResponse_selectionReason $selectionReason = null;
    
    /**
     * @var string|null $sourceId Lead source ID used for attribution and routing on this call.
    */
    private ?string $sourceId = null;
    
    /**
     * @var PhoneCallStatus|null $status Current lifecycle status for this phone call in the Leadping API.
    */
    private ?PhoneCallStatus $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this phone call.
    */
    private ?string $statusReason = null;
    
    /**
     * @var string|null $toPhoneNumber Recipient phone number used for this communication.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * @var bool|null $wasManuallyOverridden Indicates whether a user manually overrode Leadping's automatic number selection for this phone call.
    */
    private ?bool $wasManuallyOverridden = null;
    
    /**
     * Instantiates a new PhoneCallResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneCallResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneCallResponse {
        return new PhoneCallResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the answeredAt property value. UTC timestamp when the call was answered.
     * @return DateTime|null
    */
    public function getAnsweredAt(): ?DateTime {
        return $this->answeredAt;
    }

    /**
     * Gets the billingStatus property value. Billing state for this communication, charge, or transaction.
     * @return string|null
    */
    public function getBillingStatus(): ?string {
        return $this->billingStatus;
    }

    /**
     * Gets the callerId property value. Caller ID phone number presented during the outbound call.
     * @return string|null
    */
    public function getCallerId(): ?string {
        return $this->callerId;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this phone call.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this phone call to the Leadping inbox thread.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the direction property value. Communication direction for this phone call, such as inbound or outbound.
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
    }

    /**
     * Gets the endedAt property value. UTC timestamp when the call ended.
     * @return DateTime|null
    */
    public function getEndedAt(): ?DateTime {
        return $this->endedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'answeredAt' => fn(ParseNode $n) => $o->setAnsweredAt($n->getDateTimeValue()),
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getStringValue()),
            'callerId' => fn(ParseNode $n) => $o->setCallerId($n->getStringValue()),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'endedAt' => fn(ParseNode $n) => $o->setEndedAt($n->getDateTimeValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([PhoneCallResponse_metadata::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'queuedAt' => fn(ParseNode $n) => $o->setQueuedAt($n->getDateTimeValue()),
            'recordingUrl' => fn(ParseNode $n) => $o->setRecordingUrl($n->getStringValue()),
            'ringingAt' => fn(ParseNode $n) => $o->setRingingAt($n->getDateTimeValue()),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(PhoneCallResponse_selectionReason::class)),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PhoneCallStatus::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
            'wasManuallyOverridden' => fn(ParseNode $n) => $o->setWasManuallyOverridden($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fromPhoneNumber property value. Sender phone number used for this communication.
     * @return string|null
    */
    public function getFromPhoneNumber(): ?string {
        return $this->fromPhoneNumber;
    }

    /**
     * Gets the fromPhoneNumberId property value. Sender phone number ID used for this outbound SMS or call.
     * @return string|null
    */
    public function getFromPhoneNumberId(): ?string {
        return $this->fromPhoneNumberId;
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the leadId property value. Lead ID associated with the call conversation or outreach attempt.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this phone call.
     * @return PhoneCallResponse_metadata|null
    */
    public function getMetadata(): ?PhoneCallResponse_metadata {
        return $this->metadata;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the phoneNumber property value. Phone number used by this phone call for calls, SMS, lookup, or routing.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the queuedAt property value. UTC timestamp when Leadping queued this phone call for processing.
     * @return DateTime|null
    */
    public function getQueuedAt(): ?DateTime {
        return $this->queuedAt;
    }

    /**
     * Gets the recordingUrl property value. URL for the call recording, when the provider makes one available.
     * @return string|null
    */
    public function getRecordingUrl(): ?string {
        return $this->recordingUrl;
    }

    /**
     * Gets the ringingAt property value. UTC timestamp when the call started ringing.
     * @return DateTime|null
    */
    public function getRingingAt(): ?DateTime {
        return $this->ringingAt;
    }

    /**
     * Gets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @return PhoneCallResponse_selectionReason|null
    */
    public function getSelectionReason(): ?PhoneCallResponse_selectionReason {
        return $this->selectionReason;
    }

    /**
     * Gets the sourceId property value. Lead source ID used for attribution and routing on this call.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the status property value. Current lifecycle status for this phone call in the Leadping API.
     * @return PhoneCallStatus|null
    */
    public function getStatus(): ?PhoneCallStatus {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this phone call.
     * @return string|null
    */
    public function getStatusReason(): ?string {
        return $this->statusReason;
    }

    /**
     * Gets the toPhoneNumber property value. Recipient phone number used for this communication.
     * @return string|null
    */
    public function getToPhoneNumber(): ?string {
        return $this->toPhoneNumber;
    }

    /**
     * Gets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this phone call.
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
        $writer->writeDateTimeValue('answeredAt', $this->getAnsweredAt());
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeStringValue('callerId', $this->getCallerId());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeDateTimeValue('endedAt', $this->getEndedAt());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeDateTimeValue('queuedAt', $this->getQueuedAt());
        $writer->writeStringValue('recordingUrl', $this->getRecordingUrl());
        $writer->writeDateTimeValue('ringingAt', $this->getRingingAt());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
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
     * Sets the answeredAt property value. UTC timestamp when the call was answered.
     * @param DateTime|null $value Value to set for the answeredAt property.
    */
    public function setAnsweredAt(?DateTime $value): void {
        $this->answeredAt = $value;
    }

    /**
     * Sets the billingStatus property value. Billing state for this communication, charge, or transaction.
     * @param string|null $value Value to set for the billingStatus property.
    */
    public function setBillingStatus(?string $value): void {
        $this->billingStatus = $value;
    }

    /**
     * Sets the callerId property value. Caller ID phone number presented during the outbound call.
     * @param string|null $value Value to set for the callerId property.
    */
    public function setCallerId(?string $value): void {
        $this->callerId = $value;
    }

    /**
     * Sets the campaignId property value. Messaging campaign identifier associated with this phone call.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this phone call to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the direction property value. Communication direction for this phone call, such as inbound or outbound.
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
    }

    /**
     * Sets the endedAt property value. UTC timestamp when the call ended.
     * @param DateTime|null $value Value to set for the endedAt property.
    */
    public function setEndedAt(?DateTime $value): void {
        $this->endedAt = $value;
    }

    /**
     * Sets the fromPhoneNumber property value. Sender phone number used for this communication.
     * @param string|null $value Value to set for the fromPhoneNumber property.
    */
    public function setFromPhoneNumber(?string $value): void {
        $this->fromPhoneNumber = $value;
    }

    /**
     * Sets the fromPhoneNumberId property value. Sender phone number ID used for this outbound SMS or call.
     * @param string|null $value Value to set for the fromPhoneNumberId property.
    */
    public function setFromPhoneNumberId(?string $value): void {
        $this->fromPhoneNumberId = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with the call conversation or outreach attempt.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this phone call.
     * @param PhoneCallResponse_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?PhoneCallResponse_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number used by this phone call for calls, SMS, lookup, or routing.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the queuedAt property value. UTC timestamp when Leadping queued this phone call for processing.
     * @param DateTime|null $value Value to set for the queuedAt property.
    */
    public function setQueuedAt(?DateTime $value): void {
        $this->queuedAt = $value;
    }

    /**
     * Sets the recordingUrl property value. URL for the call recording, when the provider makes one available.
     * @param string|null $value Value to set for the recordingUrl property.
    */
    public function setRecordingUrl(?string $value): void {
        $this->recordingUrl = $value;
    }

    /**
     * Sets the ringingAt property value. UTC timestamp when the call started ringing.
     * @param DateTime|null $value Value to set for the ringingAt property.
    */
    public function setRingingAt(?DateTime $value): void {
        $this->ringingAt = $value;
    }

    /**
     * Sets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @param PhoneCallResponse_selectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?PhoneCallResponse_selectionReason $value): void {
        $this->selectionReason = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID used for attribution and routing on this call.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this phone call in the Leadping API.
     * @param PhoneCallStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PhoneCallStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this phone call.
     * @param string|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?string $value): void {
        $this->statusReason = $value;
    }

    /**
     * Sets the toPhoneNumber property value. Recipient phone number used for this communication.
     * @param string|null $value Value to set for the toPhoneNumber property.
    */
    public function setToPhoneNumber(?string $value): void {
        $this->toPhoneNumber = $value;
    }

    /**
     * Sets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this phone call.
     * @param bool|null $value Value to set for the wasManuallyOverridden property.
    */
    public function setWasManuallyOverridden(?bool $value): void {
        $this->wasManuallyOverridden = $value;
    }

}
