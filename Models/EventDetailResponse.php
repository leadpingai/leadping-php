<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API event detail response returned to authenticated clients.
*/
class EventDetailResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $blockedAt UTC timestamp when Leadping blocked this communication.
    */
    private ?DateTime $blockedAt = null;
    
    /**
     * @var DateTime|null $canceledAt UTC timestamp when this delivery or workflow was canceled.
    */
    private ?DateTime $canceledAt = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this event detail response to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var DateTime|null $deliveredAt UTC timestamp when the provider confirmed delivery.
    */
    private ?DateTime $deliveredAt = null;
    
    /**
     * @var string|null $description Human-readable description that explains this event detail response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $direction Communication direction for this event detail response, such as inbound or outbound.
    */
    private ?string $direction = null;
    
    /**
     * @var string|null $eventCategory High-level category used to group this Leadping event.
    */
    private ?string $eventCategory = null;
    
    /**
     * @var string|null $eventType Event type used to classify this timeline, SMS, call, or automation event.
    */
    private ?string $eventType = null;
    
    /**
     * @var DateTime|null $failedAt UTC timestamp when processing failed for this event detail response.
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
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $leadId Lead ID associated with this event detail record.
    */
    private ?string $leadId = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $outboundPhoneNumberId Phone number ID selected for outbound delivery.
    */
    private ?string $outboundPhoneNumberId = null;
    
    /**
     * @var string|null $providerMessageId Provider message identifier for SMS delivery tracking and reconciliation.
    */
    private ?string $providerMessageId = null;
    
    /**
     * @var DateTime|null $queuedAt UTC timestamp when Leadping queued this event detail response for processing.
    */
    private ?DateTime $queuedAt = null;
    
    /**
     * @var DateTime|null $receivedAt UTC timestamp when Leadping received this inbound event or message.
    */
    private ?DateTime $receivedAt = null;
    
    /**
     * @var DateTime|null $scheduledFor UTC timestamp when the related delivery or workflow action is scheduled to run.
    */
    private ?DateTime $scheduledFor = null;
    
    /**
     * @var string|null $secondaryEventType Secondary event type used for additional event classification.
    */
    private ?string $secondaryEventType = null;
    
    /**
     * @var DateTime|null $sendingStartedAt UTC timestamp when Leadping began sending this message.
    */
    private ?DateTime $sendingStartedAt = null;
    
    /**
     * @var DateTime|null $sentAt UTC timestamp when Leadping sent this message to the provider.
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var EventDetailResponse_status|null $status Defines the supported Event status values.
    */
    private ?EventDetailResponse_status $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this event detail response.
    */
    private ?string $statusReason = null;
    
    /**
     * @var string|null $summary Short human-readable summary of this event detail response for lists, timelines, and notifications.
    */
    private ?string $summary = null;
    
    /**
     * @var string|null $timelineCategory Timeline category used to group events for display and filtering.
    */
    private ?string $timelineCategory = null;
    
    /**
     * @var EventDetailResponse_timelineType|null $timelineType Defines the supported Event timeline type values.
    */
    private ?EventDetailResponse_timelineType $timelineType = null;
    
    /**
     * @var string|null $toPhoneNumber Recipient phone number used for this communication.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * @var DateTime|null $undeliverableAt UTC timestamp when the provider marked the message undeliverable.
    */
    private ?DateTime $undeliverableAt = null;
    
    /**
     * @var EventDetailResponse_user|null $user User summary connected to this event detail response.
    */
    private ?EventDetailResponse_user $user = null;
    
    /**
     * @var string|null $userId User ID associated with the activity that created this event.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new EventDetailResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventDetailResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventDetailResponse {
        return new EventDetailResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the blockedAt property value. UTC timestamp when Leadping blocked this communication.
     * @return DateTime|null
    */
    public function getBlockedAt(): ?DateTime {
        return $this->blockedAt;
    }

    /**
     * Gets the canceledAt property value. UTC timestamp when this delivery or workflow was canceled.
     * @return DateTime|null
    */
    public function getCanceledAt(): ?DateTime {
        return $this->canceledAt;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this event detail response to the Leadping inbox thread.
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
     * Gets the deliveredAt property value. UTC timestamp when the provider confirmed delivery.
     * @return DateTime|null
    */
    public function getDeliveredAt(): ?DateTime {
        return $this->deliveredAt;
    }

    /**
     * Gets the description property value. Human-readable description that explains this event detail response to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the direction property value. Communication direction for this event detail response, such as inbound or outbound.
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
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
     * Gets the failedAt property value. UTC timestamp when processing failed for this event detail response.
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
            'blockedAt' => fn(ParseNode $n) => $o->setBlockedAt($n->getDateTimeValue()),
            'canceledAt' => fn(ParseNode $n) => $o->setCanceledAt($n->getDateTimeValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'deliveredAt' => fn(ParseNode $n) => $o->setDeliveredAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'eventCategory' => fn(ParseNode $n) => $o->setEventCategory($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'fromPhoneNumberId' => fn(ParseNode $n) => $o->setFromPhoneNumberId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'outboundPhoneNumberId' => fn(ParseNode $n) => $o->setOutboundPhoneNumberId($n->getStringValue()),
            'providerMessageId' => fn(ParseNode $n) => $o->setProviderMessageId($n->getStringValue()),
            'queuedAt' => fn(ParseNode $n) => $o->setQueuedAt($n->getDateTimeValue()),
            'receivedAt' => fn(ParseNode $n) => $o->setReceivedAt($n->getDateTimeValue()),
            'scheduledFor' => fn(ParseNode $n) => $o->setScheduledFor($n->getDateTimeValue()),
            'secondaryEventType' => fn(ParseNode $n) => $o->setSecondaryEventType($n->getStringValue()),
            'sendingStartedAt' => fn(ParseNode $n) => $o->setSendingStartedAt($n->getDateTimeValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(EventDetailResponse_status::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
            'timelineCategory' => fn(ParseNode $n) => $o->setTimelineCategory($n->getStringValue()),
            'timelineType' => fn(ParseNode $n) => $o->setTimelineType($n->getEnumValue(EventDetailResponse_timelineType::class)),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
            'undeliverableAt' => fn(ParseNode $n) => $o->setUndeliverableAt($n->getDateTimeValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([EventDetailResponse_user::class, 'createFromDiscriminatorValue'])),
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
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the leadId property value. Lead ID associated with this event detail record.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
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
     * Gets the queuedAt property value. UTC timestamp when Leadping queued this event detail response for processing.
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
     * Gets the scheduledFor property value. UTC timestamp when the related delivery or workflow action is scheduled to run.
     * @return DateTime|null
    */
    public function getScheduledFor(): ?DateTime {
        return $this->scheduledFor;
    }

    /**
     * Gets the secondaryEventType property value. Secondary event type used for additional event classification.
     * @return string|null
    */
    public function getSecondaryEventType(): ?string {
        return $this->secondaryEventType;
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
     * Gets the status property value. Defines the supported Event status values.
     * @return EventDetailResponse_status|null
    */
    public function getStatus(): ?EventDetailResponse_status {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this event detail response.
     * @return string|null
    */
    public function getStatusReason(): ?string {
        return $this->statusReason;
    }

    /**
     * Gets the summary property value. Short human-readable summary of this event detail response for lists, timelines, and notifications.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Gets the timelineCategory property value. Timeline category used to group events for display and filtering.
     * @return string|null
    */
    public function getTimelineCategory(): ?string {
        return $this->timelineCategory;
    }

    /**
     * Gets the timelineType property value. Defines the supported Event timeline type values.
     * @return EventDetailResponse_timelineType|null
    */
    public function getTimelineType(): ?EventDetailResponse_timelineType {
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
     * Gets the undeliverableAt property value. UTC timestamp when the provider marked the message undeliverable.
     * @return DateTime|null
    */
    public function getUndeliverableAt(): ?DateTime {
        return $this->undeliverableAt;
    }

    /**
     * Gets the user property value. User summary connected to this event detail response.
     * @return EventDetailResponse_user|null
    */
    public function getUser(): ?EventDetailResponse_user {
        return $this->user;
    }

    /**
     * Gets the userId property value. User ID associated with the activity that created this event.
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
        $writer->writeDateTimeValue('blockedAt', $this->getBlockedAt());
        $writer->writeDateTimeValue('canceledAt', $this->getCanceledAt());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeDateTimeValue('deliveredAt', $this->getDeliveredAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeStringValue('eventCategory', $this->getEventCategory());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('fromPhoneNumberId', $this->getFromPhoneNumberId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('outboundPhoneNumberId', $this->getOutboundPhoneNumberId());
        $writer->writeStringValue('providerMessageId', $this->getProviderMessageId());
        $writer->writeDateTimeValue('queuedAt', $this->getQueuedAt());
        $writer->writeDateTimeValue('receivedAt', $this->getReceivedAt());
        $writer->writeDateTimeValue('scheduledFor', $this->getScheduledFor());
        $writer->writeStringValue('secondaryEventType', $this->getSecondaryEventType());
        $writer->writeDateTimeValue('sendingStartedAt', $this->getSendingStartedAt());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeStringValue('timelineCategory', $this->getTimelineCategory());
        $writer->writeEnumValue('timelineType', $this->getTimelineType());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
        $writer->writeDateTimeValue('undeliverableAt', $this->getUndeliverableAt());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the blockedAt property value. UTC timestamp when Leadping blocked this communication.
     * @param DateTime|null $value Value to set for the blockedAt property.
    */
    public function setBlockedAt(?DateTime $value): void {
        $this->blockedAt = $value;
    }

    /**
     * Sets the canceledAt property value. UTC timestamp when this delivery or workflow was canceled.
     * @param DateTime|null $value Value to set for the canceledAt property.
    */
    public function setCanceledAt(?DateTime $value): void {
        $this->canceledAt = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this event detail response to the Leadping inbox thread.
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
     * Sets the deliveredAt property value. UTC timestamp when the provider confirmed delivery.
     * @param DateTime|null $value Value to set for the deliveredAt property.
    */
    public function setDeliveredAt(?DateTime $value): void {
        $this->deliveredAt = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this event detail response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the direction property value. Communication direction for this event detail response, such as inbound or outbound.
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
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
     * Sets the failedAt property value. UTC timestamp when processing failed for this event detail response.
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
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with this event detail record.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
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
     * Sets the queuedAt property value. UTC timestamp when Leadping queued this event detail response for processing.
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
     * Sets the scheduledFor property value. UTC timestamp when the related delivery or workflow action is scheduled to run.
     * @param DateTime|null $value Value to set for the scheduledFor property.
    */
    public function setScheduledFor(?DateTime $value): void {
        $this->scheduledFor = $value;
    }

    /**
     * Sets the secondaryEventType property value. Secondary event type used for additional event classification.
     * @param string|null $value Value to set for the secondaryEventType property.
    */
    public function setSecondaryEventType(?string $value): void {
        $this->secondaryEventType = $value;
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
     * Sets the status property value. Defines the supported Event status values.
     * @param EventDetailResponse_status|null $value Value to set for the status property.
    */
    public function setStatus(?EventDetailResponse_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this event detail response.
     * @param string|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?string $value): void {
        $this->statusReason = $value;
    }

    /**
     * Sets the summary property value. Short human-readable summary of this event detail response for lists, timelines, and notifications.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
    }

    /**
     * Sets the timelineCategory property value. Timeline category used to group events for display and filtering.
     * @param string|null $value Value to set for the timelineCategory property.
    */
    public function setTimelineCategory(?string $value): void {
        $this->timelineCategory = $value;
    }

    /**
     * Sets the timelineType property value. Defines the supported Event timeline type values.
     * @param EventDetailResponse_timelineType|null $value Value to set for the timelineType property.
    */
    public function setTimelineType(?EventDetailResponse_timelineType $value): void {
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
     * Sets the undeliverableAt property value. UTC timestamp when the provider marked the message undeliverable.
     * @param DateTime|null $value Value to set for the undeliverableAt property.
    */
    public function setUndeliverableAt(?DateTime $value): void {
        $this->undeliverableAt = $value;
    }

    /**
     * Sets the user property value. User summary connected to this event detail response.
     * @param EventDetailResponse_user|null $value Value to set for the user property.
    */
    public function setUser(?EventDetailResponse_user $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userId property value. User ID associated with the activity that created this event.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
