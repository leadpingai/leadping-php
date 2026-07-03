<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API event timeline table row results shown in searchable tables.
*/
class EventTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorDisplayName Display name for the person or system that created this event timeline table row.
    */
    private ?string $actorDisplayName = null;
    
    /**
     * @var string|null $actorUserId User ID for the person or system that created this event timeline table row.
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
     * @var string|null $campaignId Messaging campaign identifier associated with this event timeline table row.
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
     * @var string|null $conversationId Conversation ID that links this event timeline table row to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this event timeline table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $createdBy Display name or identifier for the person or system that created this event timeline table row.
    */
    private ?string $createdBy = null;
    
    /**
     * @var DateTime|null $deliveredAt UTC timestamp when the provider confirmed delivery.
    */
    private ?DateTime $deliveredAt = null;
    
    /**
     * @var string|null $description Human-readable description that explains this event timeline table row to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $direction Communication direction for this event timeline table row, such as inbound or outbound.
    */
    private ?string $direction = null;
    
    /**
     * @var string|null $errorCode Machine-readable error code returned while processing this event timeline table row.
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $eventCategory High-level category used to group this Leadping event.
    */
    private ?string $eventCategory = null;
    
    /**
     * @var string|null $eventType Event type used to classify this timeline, SMS, call, or automation event.
    */
    private ?string $eventType = null;
    
    /**
     * @var DateTime|null $failedAt UTC timestamp when processing failed for this event timeline table row.
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
     * @var string|null $id Unique Leadping identifier for this event timeline table row.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isWarmup Indicates whether this event timeline table row is part of Leadping sender warmup traffic.
    */
    private ?bool $isWarmup = null;
    
    /**
     * @var string|null $leadId Lead ID associated with this timeline event.
    */
    private ?string $leadId = null;
    
    /**
     * @var DateTime|null $nextRetryAt UTC timestamp when Leadping will retry this event timeline table row.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var string|null $outboundPhoneNumberId Phone number ID selected for outbound delivery.
    */
    private ?string $outboundPhoneNumberId = null;
    
    /**
     * @var string|null $providerMessageId Provider message identifier for SMS delivery tracking and reconciliation.
    */
    private ?string $providerMessageId = null;
    
    /**
     * @var DateTime|null $queuedAt UTC timestamp when Leadping queued this event timeline table row for processing.
    */
    private ?DateTime $queuedAt = null;
    
    /**
     * @var DateTime|null $receivedAt UTC timestamp when Leadping received this inbound event or message.
    */
    private ?DateTime $receivedAt = null;
    
    /**
     * @var string|null $relatedEntityId Related entity ID connected to this event or notification.
    */
    private ?string $relatedEntityId = null;
    
    /**
     * @var string|null $relatedEntityType Related entity type connected to this event or notification.
    */
    private ?string $relatedEntityType = null;
    
    /**
     * @var int|null $retryCount Number of retry attempts already made for this event timeline table row.
    */
    private ?int $retryCount = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC timestamp when the related delivery or workflow action is scheduled to run.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var string|null $scheduledReason Reason Leadping scheduled this delivery for a later time.
    */
    private ?string $scheduledReason = null;
    
    /**
     * @var EventTableRow_selectionReason|null $selectionReason Defines the supported Outgoing Number Selection Reason values.
    */
    private ?EventTableRow_selectionReason $selectionReason = null;
    
    /**
     * @var DateTime|null $sendingStartedAt UTC timestamp when Leadping began sending this message.
    */
    private ?DateTime $sendingStartedAt = null;
    
    /**
     * @var DateTime|null $sentAt UTC timestamp when Leadping sent this message to the provider.
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var string|null $sourceId Lead source ID used for event attribution.
    */
    private ?string $sourceId = null;
    
    /**
     * @var EventTableRow_status|null $status Defines the supported Event timeline status values.
    */
    private ?EventTableRow_status $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this event timeline table row.
    */
    private ?string $statusReason = null;
    
    /**
     * @var string|null $summary Short human-readable summary of this event timeline table row for lists, timelines, and notifications.
    */
    private ?string $summary = null;
    
    /**
     * @var string|null $telnyxId Telnyx identifier connected to this phone number, call, or SMS event.
    */
    private ?string $telnyxId = null;
    
    /**
     * @var string|null $tenDlcCampaignId 10DLC campaign identifier associated with this sender or SMS event.
    */
    private ?string $tenDlcCampaignId = null;
    
    /**
     * @var string|null $timelineCategory Timeline category used to group events for display and filtering.
    */
    private ?string $timelineCategory = null;
    
    /**
     * @var EventTimelineType|null $timelineType Timeline type used to render this event in Leadping activity feeds.
    */
    private ?EventTimelineType $timelineType = null;
    
    /**
     * @var string|null $toPhoneNumber Recipient phone number used for this communication.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * @var EventTableRow_trafficType|null $trafficType Defines the supported SMS Traffic Type values.
    */
    private ?EventTableRow_trafficType $trafficType = null;
    
    /**
     * @var DateTime|null $undeliverableAt UTC timestamp when the provider marked the message undeliverable.
    */
    private ?DateTime $undeliverableAt = null;
    
    /**
     * @var bool|null $wasManuallyOverridden Indicates whether a user manually overrode Leadping's automatic number selection for this event timeline table row.
    */
    private ?bool $wasManuallyOverridden = null;
    
    /**
     * Instantiates a new EventTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventTableRow {
        return new EventTableRow();
    }

    /**
     * Gets the actorDisplayName property value. Display name for the person or system that created this event timeline table row.
     * @return string|null
    */
    public function getActorDisplayName(): ?string {
        return $this->actorDisplayName;
    }

    /**
     * Gets the actorUserId property value. User ID for the person or system that created this event timeline table row.
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
     * Gets the campaignId property value. Messaging campaign identifier associated with this event timeline table row.
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
     * Gets the conversationId property value. Conversation ID that links this event timeline table row to the Leadping inbox thread.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this event timeline table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdBy property value. Display name or identifier for the person or system that created this event timeline table row.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the deliveredAt property value. UTC timestamp when the provider confirmed delivery.
     * @return DateTime|null
    */
    public function getDeliveredAt(): ?DateTime {
        return $this->deliveredAt;
    }

    /**
     * Gets the description property value. Human-readable description that explains this event timeline table row to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the direction property value. Communication direction for this event timeline table row, such as inbound or outbound.
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
    }

    /**
     * Gets the errorCode property value. Machine-readable error code returned while processing this event timeline table row.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * Gets the eventCategory property value. High-level category used to group this Leadping event.
     * @return string|null
    */
    public function getEventCategory(): ?string {
        return $this->eventCategory;
    }

    /**
     * Gets the eventType property value. Event type used to classify this timeline, SMS, call, or automation event.
     * @return string|null
    */
    public function getEventType(): ?string {
        return $this->eventType;
    }

    /**
     * Gets the failedAt property value. UTC timestamp when processing failed for this event timeline table row.
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
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'canceledAt' => fn(ParseNode $n) => $o->setCanceledAt($n->getDateTimeValue()),
            'cancelReason' => fn(ParseNode $n) => $o->setCancelReason($n->getStringValue()),
            'complianceAction' => fn(ParseNode $n) => $o->setComplianceAction($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'deliveredAt' => fn(ParseNode $n) => $o->setDeliveredAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'eventCategory' => fn(ParseNode $n) => $o->setEventCategory($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isWarmup' => fn(ParseNode $n) => $o->setIsWarmup($n->getBooleanValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'outboundPhoneNumberId' => fn(ParseNode $n) => $o->setOutboundPhoneNumberId($n->getStringValue()),
            'providerMessageId' => fn(ParseNode $n) => $o->setProviderMessageId($n->getStringValue()),
            'queuedAt' => fn(ParseNode $n) => $o->setQueuedAt($n->getDateTimeValue()),
            'receivedAt' => fn(ParseNode $n) => $o->setReceivedAt($n->getDateTimeValue()),
            'relatedEntityId' => fn(ParseNode $n) => $o->setRelatedEntityId($n->getStringValue()),
            'relatedEntityType' => fn(ParseNode $n) => $o->setRelatedEntityType($n->getStringValue()),
            'retryCount' => fn(ParseNode $n) => $o->setRetryCount($n->getIntegerValue()),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'scheduledReason' => fn(ParseNode $n) => $o->setScheduledReason($n->getStringValue()),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(EventTableRow_selectionReason::class)),
            'sendingStartedAt' => fn(ParseNode $n) => $o->setSendingStartedAt($n->getDateTimeValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(EventTableRow_status::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
            'telnyxId' => fn(ParseNode $n) => $o->setTelnyxId($n->getStringValue()),
            'tenDlcCampaignId' => fn(ParseNode $n) => $o->setTenDlcCampaignId($n->getStringValue()),
            'timelineCategory' => fn(ParseNode $n) => $o->setTimelineCategory($n->getStringValue()),
            'timelineType' => fn(ParseNode $n) => $o->setTimelineType($n->getEnumValue(EventTimelineType::class)),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(EventTableRow_trafficType::class)),
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
     * Gets the id property value. Unique Leadping identifier for this event timeline table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isWarmup property value. Indicates whether this event timeline table row is part of Leadping sender warmup traffic.
     * @return bool|null
    */
    public function getIsWarmup(): ?bool {
        return $this->isWarmup;
    }

    /**
     * Gets the leadId property value. Lead ID associated with this timeline event.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the nextRetryAt property value. UTC timestamp when Leadping will retry this event timeline table row.
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
     * Gets the providerMessageId property value. Provider message identifier for SMS delivery tracking and reconciliation.
     * @return string|null
    */
    public function getProviderMessageId(): ?string {
        return $this->providerMessageId;
    }

    /**
     * Gets the queuedAt property value. UTC timestamp when Leadping queued this event timeline table row for processing.
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
     * Gets the relatedEntityId property value. Related entity ID connected to this event or notification.
     * @return string|null
    */
    public function getRelatedEntityId(): ?string {
        return $this->relatedEntityId;
    }

    /**
     * Gets the relatedEntityType property value. Related entity type connected to this event or notification.
     * @return string|null
    */
    public function getRelatedEntityType(): ?string {
        return $this->relatedEntityType;
    }

    /**
     * Gets the retryCount property value. Number of retry attempts already made for this event timeline table row.
     * @return int|null
    */
    public function getRetryCount(): ?int {
        return $this->retryCount;
    }

    /**
     * Gets the scheduledFor property value. UTC timestamp when the related delivery or workflow action is scheduled to run.
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
     * Gets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @return EventTableRow_selectionReason|null
    */
    public function getSelectionReason(): ?EventTableRow_selectionReason {
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
     * Gets the sourceId property value. Lead source ID used for event attribution.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the status property value. Defines the supported Event timeline status values.
     * @return EventTableRow_status|null
    */
    public function getStatus(): ?EventTableRow_status {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this event timeline table row.
     * @return string|null
    */
    public function getStatusReason(): ?string {
        return $this->statusReason;
    }

    /**
     * Gets the summary property value. Short human-readable summary of this event timeline table row for lists, timelines, and notifications.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
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
     * Gets the timelineCategory property value. Timeline category used to group events for display and filtering.
     * @return string|null
    */
    public function getTimelineCategory(): ?string {
        return $this->timelineCategory;
    }

    /**
     * Gets the timelineType property value. Timeline type used to render this event in Leadping activity feeds.
     * @return EventTimelineType|null
    */
    public function getTimelineType(): ?EventTimelineType {
        return $this->timelineType;
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
     * @return EventTableRow_trafficType|null
    */
    public function getTrafficType(): ?EventTableRow_trafficType {
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
     * Gets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this event timeline table row.
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
        $writer->writeStringValue('actorDisplayName', $this->getActorDisplayName());
        $writer->writeStringValue('actorUserId', $this->getActorUserId());
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeDateTimeValue('blockedAt', $this->getBlockedAt());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeDateTimeValue('canceledAt', $this->getCanceledAt());
        $writer->writeStringValue('cancelReason', $this->getCancelReason());
        $writer->writeStringValue('complianceAction', $this->getComplianceAction());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('deliveredAt', $this->getDeliveredAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('eventCategory', $this->getEventCategory());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isWarmup', $this->getIsWarmup());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeStringValue('outboundPhoneNumberId', $this->getOutboundPhoneNumberId());
        $writer->writeStringValue('providerMessageId', $this->getProviderMessageId());
        $writer->writeDateTimeValue('queuedAt', $this->getQueuedAt());
        $writer->writeDateTimeValue('receivedAt', $this->getReceivedAt());
        $writer->writeStringValue('relatedEntityId', $this->getRelatedEntityId());
        $writer->writeStringValue('relatedEntityType', $this->getRelatedEntityType());
        $writer->writeIntegerValue('retryCount', $this->getRetryCount());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeStringValue('scheduledReason', $this->getScheduledReason());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
        $writer->writeDateTimeValue('sendingStartedAt', $this->getSendingStartedAt());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeStringValue('telnyxId', $this->getTelnyxId());
        $writer->writeStringValue('tenDlcCampaignId', $this->getTenDlcCampaignId());
        $writer->writeStringValue('timelineCategory', $this->getTimelineCategory());
        $writer->writeEnumValue('timelineType', $this->getTimelineType());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeDateTimeValue('undeliverableAt', $this->getUndeliverableAt());
        $writer->writeBooleanValue('wasManuallyOverridden', $this->getWasManuallyOverridden());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorDisplayName property value. Display name for the person or system that created this event timeline table row.
     * @param string|null $value Value to set for the actorDisplayName property.
    */
    public function setActorDisplayName(?string $value): void {
        $this->actorDisplayName = $value;
    }

    /**
     * Sets the actorUserId property value. User ID for the person or system that created this event timeline table row.
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this event timeline table row.
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
     * Sets the conversationId property value. Conversation ID that links this event timeline table row to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this event timeline table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdBy property value. Display name or identifier for the person or system that created this event timeline table row.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the deliveredAt property value. UTC timestamp when the provider confirmed delivery.
     * @param DateTime|null $value Value to set for the deliveredAt property.
    */
    public function setDeliveredAt(?DateTime $value): void {
        $this->deliveredAt = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this event timeline table row to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the direction property value. Communication direction for this event timeline table row, such as inbound or outbound.
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
    }

    /**
     * Sets the errorCode property value. Machine-readable error code returned while processing this event timeline table row.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the eventCategory property value. High-level category used to group this Leadping event.
     * @param string|null $value Value to set for the eventCategory property.
    */
    public function setEventCategory(?string $value): void {
        $this->eventCategory = $value;
    }

    /**
     * Sets the eventType property value. Event type used to classify this timeline, SMS, call, or automation event.
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->eventType = $value;
    }

    /**
     * Sets the failedAt property value. UTC timestamp when processing failed for this event timeline table row.
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
     * Sets the id property value. Unique Leadping identifier for this event timeline table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isWarmup property value. Indicates whether this event timeline table row is part of Leadping sender warmup traffic.
     * @param bool|null $value Value to set for the isWarmup property.
    */
    public function setIsWarmup(?bool $value): void {
        $this->isWarmup = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with this timeline event.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the nextRetryAt property value. UTC timestamp when Leadping will retry this event timeline table row.
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
     * Sets the providerMessageId property value. Provider message identifier for SMS delivery tracking and reconciliation.
     * @param string|null $value Value to set for the providerMessageId property.
    */
    public function setProviderMessageId(?string $value): void {
        $this->providerMessageId = $value;
    }

    /**
     * Sets the queuedAt property value. UTC timestamp when Leadping queued this event timeline table row for processing.
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
     * Sets the relatedEntityId property value. Related entity ID connected to this event or notification.
     * @param string|null $value Value to set for the relatedEntityId property.
    */
    public function setRelatedEntityId(?string $value): void {
        $this->relatedEntityId = $value;
    }

    /**
     * Sets the relatedEntityType property value. Related entity type connected to this event or notification.
     * @param string|null $value Value to set for the relatedEntityType property.
    */
    public function setRelatedEntityType(?string $value): void {
        $this->relatedEntityType = $value;
    }

    /**
     * Sets the retryCount property value. Number of retry attempts already made for this event timeline table row.
     * @param int|null $value Value to set for the retryCount property.
    */
    public function setRetryCount(?int $value): void {
        $this->retryCount = $value;
    }

    /**
     * Sets the scheduledFor property value. UTC timestamp when the related delivery or workflow action is scheduled to run.
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
     * Sets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @param EventTableRow_selectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?EventTableRow_selectionReason $value): void {
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
     * Sets the sourceId property value. Lead source ID used for event attribution.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the status property value. Defines the supported Event timeline status values.
     * @param EventTableRow_status|null $value Value to set for the status property.
    */
    public function setStatus(?EventTableRow_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this event timeline table row.
     * @param string|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?string $value): void {
        $this->statusReason = $value;
    }

    /**
     * Sets the summary property value. Short human-readable summary of this event timeline table row for lists, timelines, and notifications.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
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
     * Sets the timelineCategory property value. Timeline category used to group events for display and filtering.
     * @param string|null $value Value to set for the timelineCategory property.
    */
    public function setTimelineCategory(?string $value): void {
        $this->timelineCategory = $value;
    }

    /**
     * Sets the timelineType property value. Timeline type used to render this event in Leadping activity feeds.
     * @param EventTimelineType|null $value Value to set for the timelineType property.
    */
    public function setTimelineType(?EventTimelineType $value): void {
        $this->timelineType = $value;
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
     * @param EventTableRow_trafficType|null $value Value to set for the trafficType property.
    */
    public function setTrafficType(?EventTableRow_trafficType $value): void {
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
     * Sets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this event timeline table row.
     * @param bool|null $value Value to set for the wasManuallyOverridden property.
    */
    public function setWasManuallyOverridden(?bool $value): void {
        $this->wasManuallyOverridden = $value;
    }

}
