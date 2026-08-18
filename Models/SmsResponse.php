<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes an SMS or MMS message, including participants, delivery state, scheduling, media, and billing details.
*/
class SmsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $billableAmount Monetary amount billed for this Leadping communication or transaction.
    */
    private ?float $billableAmount = null;
    
    /**
     * @var string|null $billingStatus Billing state for this communication, charge, or transaction.
    */
    private ?string $billingStatus = null;
    
    /**
     * @var DateTime|null $blockedAt UTC timestamp when Leadping blocked this communication.
    */
    private ?DateTime $blockedAt = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this SMS message.
    */
    private ?string $campaignId = null;
    
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
     * @var array<CommunicationConsoleEntry>|null $consoleEntries Ordered diagnostic entries recorded while Leadping processed this message.
    */
    private ?array $consoleEntries = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this SMS message to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when the resource was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var DateTime|null $deliveredAt UTC timestamp when the provider confirmed delivery.
    */
    private ?DateTime $deliveredAt = null;
    
    /**
     * @var string|null $errorCode Machine-readable error code returned while processing this SMS message.
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $errorMessage Human-readable error message returned while processing this SMS message.
    */
    private ?string $errorMessage = null;
    
    /**
     * @var DateTime|null $failedAt UTC timestamp when processing failed for this SMS message.
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
     * @var string|null $id Stable unique identifier of the resource.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $leadId Lead ID associated with the SMS conversation or outreach attempt.
    */
    private ?string $leadId = null;
    
    /**
     * @var array<MessageMediaAttachment>|null $media Media attached to this message. A non-empty collection identifies an MMS message.
    */
    private ?array $media = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when the resource was last modified, or null when it has not been updated.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var DateTime|null $nextRetryAt UTC timestamp when Leadping will retry this SMS message.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var string|null $outboundPhoneNumberId Phone number ID selected for outbound delivery.
    */
    private ?string $outboundPhoneNumberId = null;
    
    /**
     * @var DateTime|null $queuedAt UTC timestamp when Leadping queued this SMS message for processing.
    */
    private ?DateTime $queuedAt = null;
    
    /**
     * @var DateTime|null $receivedAt UTC timestamp when Leadping received this inbound event or message.
    */
    private ?DateTime $receivedAt = null;
    
    /**
     * @var int|null $retryCount Number of retry attempts already made for this SMS message.
    */
    private ?int $retryCount = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC timestamp when Leadping is scheduled to send this SMS message.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var string|null $scheduledReason Reason Leadping scheduled this delivery for a later time.
    */
    private ?string $scheduledReason = null;
    
    /**
     * @var SmsResponse_selectionReason|null $selectionReason Explains why Leadping selected, rejected, or substituted an outgoing caller or messaging number.
    */
    private ?SmsResponse_selectionReason $selectionReason = null;
    
    /**
     * @var DateTime|null $sendingStartedAt UTC timestamp when Leadping began sending this message.
    */
    private ?DateTime $sendingStartedAt = null;
    
    /**
     * @var DateTime|null $sentAt UTC timestamp when Leadping sent this message to the provider.
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var string|null $sourceId Lead source ID used for attribution and sender selection on this SMS message.
    */
    private ?string $sourceId = null;
    
    /**
     * @var SmsResponse_status|null $status Describes the normalized lifecycle of an SMS or MMS message from scheduling through delivery or failure.
    */
    private ?SmsResponse_status $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this SMS message.
    */
    private ?string $statusReason = null;
    
    /**
     * @var string|null $text Body text for the SMS message or communication represented by this SMS message.
    */
    private ?string $text = null;
    
    /**
     * @var SmsResponse_trafficType|null $trafficType Classifies messaging traffic by conversational, informational, marketing, or other compliance-relevant purpose.
    */
    private ?SmsResponse_trafficType $trafficType = null;
    
    /**
     * @var DateTime|null $undeliverableAt UTC timestamp when the provider marked the message undeliverable.
    */
    private ?DateTime $undeliverableAt = null;
    
    /**
     * @var bool|null $wasManuallyOverridden Indicates whether a user manually overrode Leadping's automatic number selection for this SMS message.
    */
    private ?bool $wasManuallyOverridden = null;
    
    /**
     * Instantiates a new SmsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsResponse {
        return new SmsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billableAmount property value. Monetary amount billed for this Leadping communication or transaction.
     * @return float|null
    */
    public function getBillableAmount(): ?float {
        return $this->billableAmount;
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
     * Gets the campaignId property value. Messaging campaign identifier associated with this SMS message.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
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
     * Gets the consoleEntries property value. Ordered diagnostic entries recorded while Leadping processed this message.
     * @return array<CommunicationConsoleEntry>|null
    */
    public function getConsoleEntries(): ?array {
        return $this->consoleEntries;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this SMS message to the Leadping inbox thread.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when the resource was created.
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
     * Gets the errorCode property value. Machine-readable error code returned while processing this SMS message.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * Gets the errorMessage property value. Human-readable error message returned while processing this SMS message.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->errorMessage;
    }

    /**
     * Gets the failedAt property value. UTC timestamp when processing failed for this SMS message.
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
            'billableAmount' => fn(ParseNode $n) => $o->setBillableAmount($n->getFloatValue()),
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getStringValue()),
            'blockedAt' => fn(ParseNode $n) => $o->setBlockedAt($n->getDateTimeValue()),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'canceledAt' => fn(ParseNode $n) => $o->setCanceledAt($n->getDateTimeValue()),
            'cancelReason' => fn(ParseNode $n) => $o->setCancelReason($n->getStringValue()),
            'complianceAction' => fn(ParseNode $n) => $o->setComplianceAction($n->getStringValue()),
            'consoleEntries' => fn(ParseNode $n) => $o->setConsoleEntries($n->getCollectionOfObjectValues([CommunicationConsoleEntry::class, 'createFromDiscriminatorValue'])),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'deliveredAt' => fn(ParseNode $n) => $o->setDeliveredAt($n->getDateTimeValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'media' => fn(ParseNode $n) => $o->setMedia($n->getCollectionOfObjectValues([MessageMediaAttachment::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'outboundPhoneNumberId' => fn(ParseNode $n) => $o->setOutboundPhoneNumberId($n->getStringValue()),
            'queuedAt' => fn(ParseNode $n) => $o->setQueuedAt($n->getDateTimeValue()),
            'receivedAt' => fn(ParseNode $n) => $o->setReceivedAt($n->getDateTimeValue()),
            'retryCount' => fn(ParseNode $n) => $o->setRetryCount($n->getIntegerValue()),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'scheduledReason' => fn(ParseNode $n) => $o->setScheduledReason($n->getStringValue()),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(SmsResponse_selectionReason::class)),
            'sendingStartedAt' => fn(ParseNode $n) => $o->setSendingStartedAt($n->getDateTimeValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SmsResponse_status::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(SmsResponse_trafficType::class)),
            'undeliverableAt' => fn(ParseNode $n) => $o->setUndeliverableAt($n->getDateTimeValue()),
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
     * Gets the id property value. Stable unique identifier of the resource.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the leadId property value. Lead ID associated with the SMS conversation or outreach attempt.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the media property value. Media attached to this message. A non-empty collection identifies an MMS message.
     * @return array<MessageMediaAttachment>|null
    */
    public function getMedia(): ?array {
        return $this->media;
    }

    /**
     * Gets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the nextRetryAt property value. UTC timestamp when Leadping will retry this SMS message.
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the outboundPhoneNumberId property value. Phone number ID selected for outbound delivery.
     * @return string|null
    */
    public function getOutboundPhoneNumberId(): ?string {
        return $this->outboundPhoneNumberId;
    }

    /**
     * Gets the queuedAt property value. UTC timestamp when Leadping queued this SMS message for processing.
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
     * Gets the retryCount property value. Number of retry attempts already made for this SMS message.
     * @return int|null
    */
    public function getRetryCount(): ?int {
        return $this->retryCount;
    }

    /**
     * Gets the scheduledFor property value. UTC timestamp when Leadping is scheduled to send this SMS message.
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
     * Gets the selectionReason property value. Explains why Leadping selected, rejected, or substituted an outgoing caller or messaging number.
     * @return SmsResponse_selectionReason|null
    */
    public function getSelectionReason(): ?SmsResponse_selectionReason {
        return $this->selectionReason;
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
     * Gets the sourceId property value. Lead source ID used for attribution and sender selection on this SMS message.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the status property value. Describes the normalized lifecycle of an SMS or MMS message from scheduling through delivery or failure.
     * @return SmsResponse_status|null
    */
    public function getStatus(): ?SmsResponse_status {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this SMS message.
     * @return string|null
    */
    public function getStatusReason(): ?string {
        return $this->statusReason;
    }

    /**
     * Gets the text property value. Body text for the SMS message or communication represented by this SMS message.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the trafficType property value. Classifies messaging traffic by conversational, informational, marketing, or other compliance-relevant purpose.
     * @return SmsResponse_trafficType|null
    */
    public function getTrafficType(): ?SmsResponse_trafficType {
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
     * Gets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this SMS message.
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
        $writer->writeFloatValue('billableAmount', $this->getBillableAmount());
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeDateTimeValue('blockedAt', $this->getBlockedAt());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeDateTimeValue('canceledAt', $this->getCanceledAt());
        $writer->writeStringValue('cancelReason', $this->getCancelReason());
        $writer->writeStringValue('complianceAction', $this->getComplianceAction());
        $writer->writeCollectionOfObjectValues('consoleEntries', $this->getConsoleEntries());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeDateTimeValue('deliveredAt', $this->getDeliveredAt());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('errorMessage', $this->getErrorMessage());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeCollectionOfObjectValues('media', $this->getMedia());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeStringValue('outboundPhoneNumberId', $this->getOutboundPhoneNumberId());
        $writer->writeDateTimeValue('queuedAt', $this->getQueuedAt());
        $writer->writeDateTimeValue('receivedAt', $this->getReceivedAt());
        $writer->writeIntegerValue('retryCount', $this->getRetryCount());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeStringValue('scheduledReason', $this->getScheduledReason());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
        $writer->writeDateTimeValue('sendingStartedAt', $this->getSendingStartedAt());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeDateTimeValue('undeliverableAt', $this->getUndeliverableAt());
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
     * Sets the billableAmount property value. Monetary amount billed for this Leadping communication or transaction.
     * @param float|null $value Value to set for the billableAmount property.
    */
    public function setBillableAmount(?float $value): void {
        $this->billableAmount = $value;
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this SMS message.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
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
     * Sets the consoleEntries property value. Ordered diagnostic entries recorded while Leadping processed this message.
     * @param array<CommunicationConsoleEntry>|null $value Value to set for the consoleEntries property.
    */
    public function setConsoleEntries(?array $value): void {
        $this->consoleEntries = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this SMS message to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when the resource was created.
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
     * Sets the errorCode property value. Machine-readable error code returned while processing this SMS message.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the errorMessage property value. Human-readable error message returned while processing this SMS message.
     * @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value): void {
        $this->errorMessage = $value;
    }

    /**
     * Sets the failedAt property value. UTC timestamp when processing failed for this SMS message.
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
     * Sets the id property value. Stable unique identifier of the resource.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with the SMS conversation or outreach attempt.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the media property value. Media attached to this message. A non-empty collection identifies an MMS message.
     * @param array<MessageMediaAttachment>|null $value Value to set for the media property.
    */
    public function setMedia(?array $value): void {
        $this->media = $value;
    }

    /**
     * Sets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the nextRetryAt property value. UTC timestamp when Leadping will retry this SMS message.
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the outboundPhoneNumberId property value. Phone number ID selected for outbound delivery.
     * @param string|null $value Value to set for the outboundPhoneNumberId property.
    */
    public function setOutboundPhoneNumberId(?string $value): void {
        $this->outboundPhoneNumberId = $value;
    }

    /**
     * Sets the queuedAt property value. UTC timestamp when Leadping queued this SMS message for processing.
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
     * Sets the retryCount property value. Number of retry attempts already made for this SMS message.
     * @param int|null $value Value to set for the retryCount property.
    */
    public function setRetryCount(?int $value): void {
        $this->retryCount = $value;
    }

    /**
     * Sets the scheduledFor property value. UTC timestamp when Leadping is scheduled to send this SMS message.
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
     * Sets the selectionReason property value. Explains why Leadping selected, rejected, or substituted an outgoing caller or messaging number.
     * @param SmsResponse_selectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?SmsResponse_selectionReason $value): void {
        $this->selectionReason = $value;
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
     * Sets the sourceId property value. Lead source ID used for attribution and sender selection on this SMS message.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the status property value. Describes the normalized lifecycle of an SMS or MMS message from scheduling through delivery or failure.
     * @param SmsResponse_status|null $value Value to set for the status property.
    */
    public function setStatus(?SmsResponse_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this SMS message.
     * @param string|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?string $value): void {
        $this->statusReason = $value;
    }

    /**
     * Sets the text property value. Body text for the SMS message or communication represented by this SMS message.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

    /**
     * Sets the trafficType property value. Classifies messaging traffic by conversational, informational, marketing, or other compliance-relevant purpose.
     * @param SmsResponse_trafficType|null $value Value to set for the trafficType property.
    */
    public function setTrafficType(?SmsResponse_trafficType $value): void {
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
     * Sets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this SMS message.
     * @param bool|null $value Value to set for the wasManuallyOverridden property.
    */
    public function setWasManuallyOverridden(?bool $value): void {
        $this->wasManuallyOverridden = $value;
    }

}
