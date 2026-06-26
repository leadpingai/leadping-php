<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API SMS event table row results shown in searchable tables.
*/
class SmsEventTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorDisplayName Display name for the actor that performed the action.
    */
    private ?string $actorDisplayName = null;
    
    /**
     * @var string|null $actorUserId User ID for the actor that performed the action.
    */
    private ?string $actorUserId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $billingStatus Billing state for this communication, charge, or transaction.
    */
    private ?string $billingStatus = null;
    
    /**
     * @var DateTime|null $blockedAt UTC timestamp when Leadping blocked this communication.
    */
    private ?DateTime $blockedAt = null;
    
    /**
     * @var string|null $business Business summary connected to this SMS event table row.
    */
    private ?string $business = null;
    
    /**
     * @var string|null $businessName Business display name shown for this SMS event.
    */
    private ?string $businessName = null;
    
    /**
     * @var DateTime|null $canceledAt UTC timestamp when this delivery or workflow was canceled.
    */
    private ?DateTime $canceledAt = null;
    
    /**
     * @var string|null $cancelReason Reason this delivery, run, or request was canceled.
    */
    private ?string $cancelReason = null;
    
    /**
     * @var string|null $complianceAction Compliance action applied to this message, lead, or sender.
    */
    private ?string $complianceAction = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this SMS event table row to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this SMS event table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var DateTime|null $deliveredAt UTC timestamp when the provider confirmed delivery.
    */
    private ?DateTime $deliveredAt = null;
    
    /**
     * @var string|null $direction Communication direction for this SMS event table row, such as inbound or outbound.
    */
    private ?string $direction = null;
    
    /**
     * @var string|null $errorCode Machine-readable error code returned while processing this SMS event table row.
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $errorMessage Human-readable error message returned while processing this SMS event table row.
    */
    private ?string $errorMessage = null;
    
    /**
     * @var DateTime|null $failedAt UTC timestamp when processing failed for this SMS event table row.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $fromPhoneNumber Sender phone number used for this communication.
    */
    private ?string $fromPhoneNumber = null;
    
    /**
     * @var string|null $fromPhoneNumberId Sender phone number ID used for this outbound SMS or call.
    */
    private ?string $fromPhoneNumberId = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this SMS event table row.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isAutomated Indicates whether automation created or triggered this SMS event table row.
    */
    private ?bool $isAutomated = null;
    
    /**
     * @var bool|null $isWarmup Indicates whether this SMS event table row is part of Leadping sender warmup traffic.
    */
    private ?bool $isWarmup = null;
    
    /**
     * @var string|null $leadId Lead ID associated with this SMS event.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadName Lead display name shown for this SMS event.
    */
    private ?string $leadName = null;
    
    /**
     * @var string|null $outboundPhoneNumberId Phone number ID selected for outbound delivery.
    */
    private ?string $outboundPhoneNumberId = null;
    
    /**
     * @var SmsEventTableRow_outboundSource|null $outboundSource Defines the source that requested outbound delivery.
    */
    private ?SmsEventTableRow_outboundSource $outboundSource = null;
    
    /**
     * @var string|null $providerMessageId Provider message identifier for SMS delivery tracking and reconciliation.
    */
    private ?string $providerMessageId = null;
    
    /**
     * @var DateTime|null $queuedAt UTC timestamp when Leadping queued this SMS event table row for processing.
    */
    private ?DateTime $queuedAt = null;
    
    /**
     * @var DateTime|null $receivedAt UTC timestamp when Leadping received this inbound event or message.
    */
    private ?DateTime $receivedAt = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC timestamp when this SMS event is scheduled to send.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var string|null $scheduledReason Reason Leadping scheduled this delivery for a later time.
    */
    private ?string $scheduledReason = null;
    
    /**
     * @var string|null $senderName Display name for the sender of this message.
    */
    private ?string $senderName = null;
    
    /**
     * @var DateTime|null $sendingStartedAt UTC timestamp when Leadping began sending this message.
    */
    private ?DateTime $sendingStartedAt = null;
    
    /**
     * @var DateTime|null $sentAt UTC timestamp when Leadping sent this message to the provider.
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var SmsEventTableRow_status|null $status Defines the supported SMS Message Status values.
    */
    private ?SmsEventTableRow_status $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this SMS event table row.
    */
    private ?string $statusReason = null;
    
    /**
     * @var string|null $telnyxId Telnyx identifier connected to this phone number, call, or SMS event.
    */
    private ?string $telnyxId = null;
    
    /**
     * @var string|null $tenDlcCampaignId 10DLC campaign identifier associated with this sender or SMS event.
    */
    private ?string $tenDlcCampaignId = null;
    
    /**
     * @var string|null $text Body text for the SMS message or communication represented by this SMS event table row.
    */
    private ?string $text = null;
    
    /**
     * @var string|null $toPhoneNumber Recipient phone number used for this communication.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * @var SmsEventTableRow_trafficType|null $trafficType Defines the supported SMS Traffic Type values.
    */
    private ?SmsEventTableRow_trafficType $trafficType = null;
    
    /**
     * @var DateTime|null $undeliverableAt UTC timestamp when the provider marked the message undeliverable.
    */
    private ?DateTime $undeliverableAt = null;
    
    /**
     * @var string|null $user User summary connected to this SMS event table row.
    */
    private ?string $user = null;
    
    /**
     * @var string|null $userName Display name for the user connected to this SMS event table row.
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new SmsEventTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsEventTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsEventTableRow {
        return new SmsEventTableRow();
    }

    /**
     * Gets the actorDisplayName property value. Display name for the actor that performed the action.
     * @return string|null
    */
    public function getActorDisplayName(): ?string {
        return $this->actorDisplayName;
    }

    /**
     * Gets the actorUserId property value. User ID for the actor that performed the action.
     * @return string|null
    */
    public function getActorUserId(): ?string {
        return $this->actorUserId;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingStatus property value. Billing state for this communication, charge, or transaction.
     * @return string|null
    */
    public function getBillingStatus(): ?string {
        return $this->billingStatus;
    }

    /**
     * Gets the blockedAt property value. UTC timestamp when Leadping blocked this communication.
     * @return DateTime|null
    */
    public function getBlockedAt(): ?DateTime {
        return $this->blockedAt;
    }

    /**
     * Gets the business property value. Business summary connected to this SMS event table row.
     * @return string|null
    */
    public function getBusiness(): ?string {
        return $this->business;
    }

    /**
     * Gets the businessName property value. Business display name shown for this SMS event.
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the canceledAt property value. UTC timestamp when this delivery or workflow was canceled.
     * @return DateTime|null
    */
    public function getCanceledAt(): ?DateTime {
        return $this->canceledAt;
    }

    /**
     * Gets the cancelReason property value. Reason this delivery, run, or request was canceled.
     * @return string|null
    */
    public function getCancelReason(): ?string {
        return $this->cancelReason;
    }

    /**
     * Gets the complianceAction property value. Compliance action applied to this message, lead, or sender.
     * @return string|null
    */
    public function getComplianceAction(): ?string {
        return $this->complianceAction;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this SMS event table row to the Leadping inbox thread.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this SMS event table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the deliveredAt property value. UTC timestamp when the provider confirmed delivery.
     * @return DateTime|null
    */
    public function getDeliveredAt(): ?DateTime {
        return $this->deliveredAt;
    }

    /**
     * Gets the direction property value. Communication direction for this SMS event table row, such as inbound or outbound.
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
    }

    /**
     * Gets the errorCode property value. Machine-readable error code returned while processing this SMS event table row.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * Gets the errorMessage property value. Human-readable error message returned while processing this SMS event table row.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->errorMessage;
    }

    /**
     * Gets the failedAt property value. UTC timestamp when processing failed for this SMS event table row.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorDisplayName' => fn(ParseNode $n) => $o->setActorDisplayName($n->getStringValue()),
            'actorUserId' => fn(ParseNode $n) => $o->setActorUserId($n->getStringValue()),
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getStringValue()),
            'blockedAt' => fn(ParseNode $n) => $o->setBlockedAt($n->getDateTimeValue()),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getStringValue()),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'canceledAt' => fn(ParseNode $n) => $o->setCanceledAt($n->getDateTimeValue()),
            'cancelReason' => fn(ParseNode $n) => $o->setCancelReason($n->getStringValue()),
            'complianceAction' => fn(ParseNode $n) => $o->setComplianceAction($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'deliveredAt' => fn(ParseNode $n) => $o->setDeliveredAt($n->getDateTimeValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'isWarmup' => fn(ParseNode $n) => $o->setIsWarmup($n->getBooleanValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'leadName' => fn(ParseNode $n) => $o->setLeadName($n->getStringValue()),
            'outboundPhoneNumberId' => fn(ParseNode $n) => $o->setOutboundPhoneNumberId($n->getStringValue()),
            'outboundSource' => fn(ParseNode $n) => $o->setOutboundSource($n->getEnumValue(SmsEventTableRow_outboundSource::class)),
            'providerMessageId' => fn(ParseNode $n) => $o->setProviderMessageId($n->getStringValue()),
            'queuedAt' => fn(ParseNode $n) => $o->setQueuedAt($n->getDateTimeValue()),
            'receivedAt' => fn(ParseNode $n) => $o->setReceivedAt($n->getDateTimeValue()),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'scheduledReason' => fn(ParseNode $n) => $o->setScheduledReason($n->getStringValue()),
            'senderName' => fn(ParseNode $n) => $o->setSenderName($n->getStringValue()),
            'sendingStartedAt' => fn(ParseNode $n) => $o->setSendingStartedAt($n->getDateTimeValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SmsEventTableRow_status::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
            'telnyxId' => fn(ParseNode $n) => $o->setTelnyxId($n->getStringValue()),
            'tenDlcCampaignId' => fn(ParseNode $n) => $o->setTenDlcCampaignId($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(SmsEventTableRow_trafficType::class)),
            'undeliverableAt' => fn(ParseNode $n) => $o->setUndeliverableAt($n->getDateTimeValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
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
     * Gets the id property value. Unique Leadping identifier for this SMS event table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isAutomated property value. Indicates whether automation created or triggered this SMS event table row.
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        return $this->isAutomated;
    }

    /**
     * Gets the isWarmup property value. Indicates whether this SMS event table row is part of Leadping sender warmup traffic.
     * @return bool|null
    */
    public function getIsWarmup(): ?bool {
        return $this->isWarmup;
    }

    /**
     * Gets the leadId property value. Lead ID associated with this SMS event.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadName property value. Lead display name shown for this SMS event.
     * @return string|null
    */
    public function getLeadName(): ?string {
        return $this->leadName;
    }

    /**
     * Gets the outboundPhoneNumberId property value. Phone number ID selected for outbound delivery.
     * @return string|null
    */
    public function getOutboundPhoneNumberId(): ?string {
        return $this->outboundPhoneNumberId;
    }

    /**
     * Gets the outboundSource property value. Defines the source that requested outbound delivery.
     * @return SmsEventTableRow_outboundSource|null
    */
    public function getOutboundSource(): ?SmsEventTableRow_outboundSource {
        return $this->outboundSource;
    }

    /**
     * Gets the providerMessageId property value. Provider message identifier for SMS delivery tracking and reconciliation.
     * @return string|null
    */
    public function getProviderMessageId(): ?string {
        return $this->providerMessageId;
    }

    /**
     * Gets the queuedAt property value. UTC timestamp when Leadping queued this SMS event table row for processing.
     * @return DateTime|null
    */
    public function getQueuedAt(): ?DateTime {
        return $this->queuedAt;
    }

    /**
     * Gets the receivedAt property value. UTC timestamp when Leadping received this inbound event or message.
     * @return DateTime|null
    */
    public function getReceivedAt(): ?DateTime {
        return $this->receivedAt;
    }

    /**
     * Gets the scheduledFor property value. UTC timestamp when this SMS event is scheduled to send.
     * @return DateTime|null
    */
    public function getScheduledFor(): ?DateTime {
        return $this->scheduledFor;
    }

    /**
     * Gets the scheduledReason property value. Reason Leadping scheduled this delivery for a later time.
     * @return string|null
    */
    public function getScheduledReason(): ?string {
        return $this->scheduledReason;
    }

    /**
     * Gets the senderName property value. Display name for the sender of this message.
     * @return string|null
    */
    public function getSenderName(): ?string {
        return $this->senderName;
    }

    /**
     * Gets the sendingStartedAt property value. UTC timestamp when Leadping began sending this message.
     * @return DateTime|null
    */
    public function getSendingStartedAt(): ?DateTime {
        return $this->sendingStartedAt;
    }

    /**
     * Gets the sentAt property value. UTC timestamp when Leadping sent this message to the provider.
     * @return DateTime|null
    */
    public function getSentAt(): ?DateTime {
        return $this->sentAt;
    }

    /**
     * Gets the status property value. Defines the supported SMS Message Status values.
     * @return SmsEventTableRow_status|null
    */
    public function getStatus(): ?SmsEventTableRow_status {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this SMS event table row.
     * @return string|null
    */
    public function getStatusReason(): ?string {
        return $this->statusReason;
    }

    /**
     * Gets the telnyxId property value. Telnyx identifier connected to this phone number, call, or SMS event.
     * @return string|null
    */
    public function getTelnyxId(): ?string {
        return $this->telnyxId;
    }

    /**
     * Gets the tenDlcCampaignId property value. 10DLC campaign identifier associated with this sender or SMS event.
     * @return string|null
    */
    public function getTenDlcCampaignId(): ?string {
        return $this->tenDlcCampaignId;
    }

    /**
     * Gets the text property value. Body text for the SMS message or communication represented by this SMS event table row.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the toPhoneNumber property value. Recipient phone number used for this communication.
     * @return string|null
    */
    public function getToPhoneNumber(): ?string {
        return $this->toPhoneNumber;
    }

    /**
     * Gets the trafficType property value. Defines the supported SMS Traffic Type values.
     * @return SmsEventTableRow_trafficType|null
    */
    public function getTrafficType(): ?SmsEventTableRow_trafficType {
        return $this->trafficType;
    }

    /**
     * Gets the undeliverableAt property value. UTC timestamp when the provider marked the message undeliverable.
     * @return DateTime|null
    */
    public function getUndeliverableAt(): ?DateTime {
        return $this->undeliverableAt;
    }

    /**
     * Gets the user property value. User summary connected to this SMS event table row.
     * @return string|null
    */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Gets the userName property value. Display name for the user connected to this SMS event table row.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actorDisplayName', $this->getActorDisplayName());
        $writer->writeStringValue('actorUserId', $this->getActorUserId());
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeDateTimeValue('blockedAt', $this->getBlockedAt());
        $writer->writeStringValue('business', $this->getBusiness());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeDateTimeValue('canceledAt', $this->getCanceledAt());
        $writer->writeStringValue('cancelReason', $this->getCancelReason());
        $writer->writeStringValue('complianceAction', $this->getComplianceAction());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeDateTimeValue('deliveredAt', $this->getDeliveredAt());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('errorMessage', $this->getErrorMessage());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeBooleanValue('isWarmup', $this->getIsWarmup());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadName', $this->getLeadName());
        $writer->writeStringValue('outboundPhoneNumberId', $this->getOutboundPhoneNumberId());
        $writer->writeEnumValue('outboundSource', $this->getOutboundSource());
        $writer->writeStringValue('providerMessageId', $this->getProviderMessageId());
        $writer->writeDateTimeValue('queuedAt', $this->getQueuedAt());
        $writer->writeDateTimeValue('receivedAt', $this->getReceivedAt());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeStringValue('scheduledReason', $this->getScheduledReason());
        $writer->writeStringValue('senderName', $this->getSenderName());
        $writer->writeDateTimeValue('sendingStartedAt', $this->getSendingStartedAt());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeStringValue('telnyxId', $this->getTelnyxId());
        $writer->writeStringValue('tenDlcCampaignId', $this->getTenDlcCampaignId());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeDateTimeValue('undeliverableAt', $this->getUndeliverableAt());
        $writer->writeStringValue('user', $this->getUser());
        $writer->writeStringValue('userName', $this->getUserName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorDisplayName property value. Display name for the actor that performed the action.
     * @param string|null $value Value to set for the actorDisplayName property.
    */
    public function setActorDisplayName(?string $value): void {
        $this->actorDisplayName = $value;
    }

    /**
     * Sets the actorUserId property value. User ID for the actor that performed the action.
     * @param string|null $value Value to set for the actorUserId property.
    */
    public function setActorUserId(?string $value): void {
        $this->actorUserId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the billingStatus property value. Billing state for this communication, charge, or transaction.
     * @param string|null $value Value to set for the billingStatus property.
    */
    public function setBillingStatus(?string $value): void {
        $this->billingStatus = $value;
    }

    /**
     * Sets the blockedAt property value. UTC timestamp when Leadping blocked this communication.
     * @param DateTime|null $value Value to set for the blockedAt property.
    */
    public function setBlockedAt(?DateTime $value): void {
        $this->blockedAt = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this SMS event table row.
     * @param string|null $value Value to set for the business property.
    */
    public function setBusiness(?string $value): void {
        $this->business = $value;
    }

    /**
     * Sets the businessName property value. Business display name shown for this SMS event.
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the canceledAt property value. UTC timestamp when this delivery or workflow was canceled.
     * @param DateTime|null $value Value to set for the canceledAt property.
    */
    public function setCanceledAt(?DateTime $value): void {
        $this->canceledAt = $value;
    }

    /**
     * Sets the cancelReason property value. Reason this delivery, run, or request was canceled.
     * @param string|null $value Value to set for the cancelReason property.
    */
    public function setCancelReason(?string $value): void {
        $this->cancelReason = $value;
    }

    /**
     * Sets the complianceAction property value. Compliance action applied to this message, lead, or sender.
     * @param string|null $value Value to set for the complianceAction property.
    */
    public function setComplianceAction(?string $value): void {
        $this->complianceAction = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this SMS event table row to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this SMS event table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the deliveredAt property value. UTC timestamp when the provider confirmed delivery.
     * @param DateTime|null $value Value to set for the deliveredAt property.
    */
    public function setDeliveredAt(?DateTime $value): void {
        $this->deliveredAt = $value;
    }

    /**
     * Sets the direction property value. Communication direction for this SMS event table row, such as inbound or outbound.
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
    }

    /**
     * Sets the errorCode property value. Machine-readable error code returned while processing this SMS event table row.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the errorMessage property value. Human-readable error message returned while processing this SMS event table row.
     * @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value): void {
        $this->errorMessage = $value;
    }

    /**
     * Sets the failedAt property value. UTC timestamp when processing failed for this SMS event table row.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
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
     * Sets the id property value. Unique Leadping identifier for this SMS event table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isAutomated property value. Indicates whether automation created or triggered this SMS event table row.
     * @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value): void {
        $this->isAutomated = $value;
    }

    /**
     * Sets the isWarmup property value. Indicates whether this SMS event table row is part of Leadping sender warmup traffic.
     * @param bool|null $value Value to set for the isWarmup property.
    */
    public function setIsWarmup(?bool $value): void {
        $this->isWarmup = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with this SMS event.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadName property value. Lead display name shown for this SMS event.
     * @param string|null $value Value to set for the leadName property.
    */
    public function setLeadName(?string $value): void {
        $this->leadName = $value;
    }

    /**
     * Sets the outboundPhoneNumberId property value. Phone number ID selected for outbound delivery.
     * @param string|null $value Value to set for the outboundPhoneNumberId property.
    */
    public function setOutboundPhoneNumberId(?string $value): void {
        $this->outboundPhoneNumberId = $value;
    }

    /**
     * Sets the outboundSource property value. Defines the source that requested outbound delivery.
     * @param SmsEventTableRow_outboundSource|null $value Value to set for the outboundSource property.
    */
    public function setOutboundSource(?SmsEventTableRow_outboundSource $value): void {
        $this->outboundSource = $value;
    }

    /**
     * Sets the providerMessageId property value. Provider message identifier for SMS delivery tracking and reconciliation.
     * @param string|null $value Value to set for the providerMessageId property.
    */
    public function setProviderMessageId(?string $value): void {
        $this->providerMessageId = $value;
    }

    /**
     * Sets the queuedAt property value. UTC timestamp when Leadping queued this SMS event table row for processing.
     * @param DateTime|null $value Value to set for the queuedAt property.
    */
    public function setQueuedAt(?DateTime $value): void {
        $this->queuedAt = $value;
    }

    /**
     * Sets the receivedAt property value. UTC timestamp when Leadping received this inbound event or message.
     * @param DateTime|null $value Value to set for the receivedAt property.
    */
    public function setReceivedAt(?DateTime $value): void {
        $this->receivedAt = $value;
    }

    /**
     * Sets the scheduledFor property value. UTC timestamp when this SMS event is scheduled to send.
     * @param DateTime|null $value Value to set for the scheduledFor property.
    */
    public function setScheduledFor(?DateTime $value): void {
        $this->scheduledFor = $value;
    }

    /**
     * Sets the scheduledReason property value. Reason Leadping scheduled this delivery for a later time.
     * @param string|null $value Value to set for the scheduledReason property.
    */
    public function setScheduledReason(?string $value): void {
        $this->scheduledReason = $value;
    }

    /**
     * Sets the senderName property value. Display name for the sender of this message.
     * @param string|null $value Value to set for the senderName property.
    */
    public function setSenderName(?string $value): void {
        $this->senderName = $value;
    }

    /**
     * Sets the sendingStartedAt property value. UTC timestamp when Leadping began sending this message.
     * @param DateTime|null $value Value to set for the sendingStartedAt property.
    */
    public function setSendingStartedAt(?DateTime $value): void {
        $this->sendingStartedAt = $value;
    }

    /**
     * Sets the sentAt property value. UTC timestamp when Leadping sent this message to the provider.
     * @param DateTime|null $value Value to set for the sentAt property.
    */
    public function setSentAt(?DateTime $value): void {
        $this->sentAt = $value;
    }

    /**
     * Sets the status property value. Defines the supported SMS Message Status values.
     * @param SmsEventTableRow_status|null $value Value to set for the status property.
    */
    public function setStatus(?SmsEventTableRow_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this SMS event table row.
     * @param string|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?string $value): void {
        $this->statusReason = $value;
    }

    /**
     * Sets the telnyxId property value. Telnyx identifier connected to this phone number, call, or SMS event.
     * @param string|null $value Value to set for the telnyxId property.
    */
    public function setTelnyxId(?string $value): void {
        $this->telnyxId = $value;
    }

    /**
     * Sets the tenDlcCampaignId property value. 10DLC campaign identifier associated with this sender or SMS event.
     * @param string|null $value Value to set for the tenDlcCampaignId property.
    */
    public function setTenDlcCampaignId(?string $value): void {
        $this->tenDlcCampaignId = $value;
    }

    /**
     * Sets the text property value. Body text for the SMS message or communication represented by this SMS event table row.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

    /**
     * Sets the toPhoneNumber property value. Recipient phone number used for this communication.
     * @param string|null $value Value to set for the toPhoneNumber property.
    */
    public function setToPhoneNumber(?string $value): void {
        $this->toPhoneNumber = $value;
    }

    /**
     * Sets the trafficType property value. Defines the supported SMS Traffic Type values.
     * @param SmsEventTableRow_trafficType|null $value Value to set for the trafficType property.
    */
    public function setTrafficType(?SmsEventTableRow_trafficType $value): void {
        $this->trafficType = $value;
    }

    /**
     * Sets the undeliverableAt property value. UTC timestamp when the provider marked the message undeliverable.
     * @param DateTime|null $value Value to set for the undeliverableAt property.
    */
    public function setUndeliverableAt(?DateTime $value): void {
        $this->undeliverableAt = $value;
    }

    /**
     * Sets the user property value. User summary connected to this SMS event table row.
     * @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userName property value. Display name for the user connected to this SMS event table row.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->userName = $value;
    }

}
