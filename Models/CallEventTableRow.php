<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API call event table row results shown in searchable tables.
*/
class CallEventTableRow implements AdditionalDataHolder, Parsable 
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
     * @var string|null $business Business summary connected to this call event table row.
    */
    private ?string $business = null;
    
    /**
     * @var string|null $businessId Business ID associated with this call event.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $callerId Caller ID phone number presented during the outbound call.
    */
    private ?string $callerId = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this call event table row to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this call event table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $direction Communication direction for this call event table row, such as inbound or outbound.
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
     * @var string|null $id Unique Leadping identifier for this call event table row.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $leadId Lead ID associated with this call event.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $recordingUrl URL for the call recording, when the provider makes one available.
    */
    private ?string $recordingUrl = null;
    
    /**
     * @var CallEventTableRow_status|null $status Defines the supported Phone Call Status values.
    */
    private ?CallEventTableRow_status $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this call event table row.
    */
    private ?string $statusReason = null;
    
    /**
     * @var string|null $toPhoneNumber Recipient phone number used for this communication.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * @var string|null $user User summary connected to this call event table row.
    */
    private ?string $user = null;
    
    /**
     * @var string|null $userId User ID associated with the person or agent who initiated this call event.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new CallEventTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallEventTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallEventTableRow {
        return new CallEventTableRow();
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
     * Gets the business property value. Business summary connected to this call event table row.
     * @return string|null
    */
    public function getBusiness(): ?string {
        return $this->business;
    }

    /**
     * Gets the businessId property value. Business ID associated with this call event.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the callerId property value. Caller ID phone number presented during the outbound call.
     * @return string|null
    */
    public function getCallerId(): ?string {
        return $this->callerId;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this call event table row to the Leadping inbox thread.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this call event table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the direction property value. Communication direction for this call event table row, such as inbound or outbound.
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
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'callerId' => fn(ParseNode $n) => $o->setCallerId($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'endedAt' => fn(ParseNode $n) => $o->setEndedAt($n->getDateTimeValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'recordingUrl' => fn(ParseNode $n) => $o->setRecordingUrl($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CallEventTableRow_status::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the id property value. Unique Leadping identifier for this call event table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the leadId property value. Lead ID associated with this call event.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the recordingUrl property value. URL for the call recording, when the provider makes one available.
     * @return string|null
    */
    public function getRecordingUrl(): ?string {
        return $this->recordingUrl;
    }

    /**
     * Gets the status property value. Defines the supported Phone Call Status values.
     * @return CallEventTableRow_status|null
    */
    public function getStatus(): ?CallEventTableRow_status {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this call event table row.
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
     * Gets the user property value. User summary connected to this call event table row.
     * @return string|null
    */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Gets the userId property value. User ID associated with the person or agent who initiated this call event.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('answeredAt', $this->getAnsweredAt());
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeStringValue('business', $this->getBusiness());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('callerId', $this->getCallerId());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeDateTimeValue('endedAt', $this->getEndedAt());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('recordingUrl', $this->getRecordingUrl());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
        $writer->writeStringValue('user', $this->getUser());
        $writer->writeStringValue('userId', $this->getUserId());
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
     * Sets the business property value. Business summary connected to this call event table row.
     * @param string|null $value Value to set for the business property.
    */
    public function setBusiness(?string $value): void {
        $this->business = $value;
    }

    /**
     * Sets the businessId property value. Business ID associated with this call event.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the callerId property value. Caller ID phone number presented during the outbound call.
     * @param string|null $value Value to set for the callerId property.
    */
    public function setCallerId(?string $value): void {
        $this->callerId = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this call event table row to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this call event table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the direction property value. Communication direction for this call event table row, such as inbound or outbound.
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
     * Sets the id property value. Unique Leadping identifier for this call event table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with this call event.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the recordingUrl property value. URL for the call recording, when the provider makes one available.
     * @param string|null $value Value to set for the recordingUrl property.
    */
    public function setRecordingUrl(?string $value): void {
        $this->recordingUrl = $value;
    }

    /**
     * Sets the status property value. Defines the supported Phone Call Status values.
     * @param CallEventTableRow_status|null $value Value to set for the status property.
    */
    public function setStatus(?CallEventTableRow_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this call event table row.
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
     * Sets the user property value. User summary connected to this call event table row.
     * @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userId property value. User ID associated with the person or agent who initiated this call event.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
