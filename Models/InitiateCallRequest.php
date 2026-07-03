<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API phone call initiation request, including the fields clients can send.
*/
class InitiateCallRequest implements AdditionalDataHolder, Parsable 
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
     * @var string|null $campaignId Messaging campaign identifier associated with this phone call initiation request.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this phone call initiation request to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var string|null $fromPhoneNumberId Sender phone number ID used for this outbound SMS or call.
    */
    private ?string $fromPhoneNumberId = null;
    
    /**
     * @var string|null $importBatchId Bulk import batch ID that created or updated this lead.
    */
    private ?string $importBatchId = null;
    
    /**
     * @var bool|null $isAutomated Indicates whether automation created or triggered this phone call initiation request.
    */
    private ?bool $isAutomated = null;
    
    /**
     * @var bool|null $isImportedLead Indicates whether this record originated from a bulk import rather than a real-time lead source.
    */
    private ?bool $isImportedLead = null;
    
    /**
     * @var string|null $leadId Lead ID associated with the outbound call request.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $outboundDeliveryRequestId Outbound delivery request ID connected to this decision or attempt.
    */
    private ?string $outboundDeliveryRequestId = null;
    
    /**
     * @var string|null $outboundIdempotencyKey Idempotency key used to prevent duplicate outbound delivery.
    */
    private ?string $outboundIdempotencyKey = null;
    
    /**
     * @var InitiateCallRequest_outboundPriority|null $outboundPriority Defines priority classes used when pacing outbound delivery.
    */
    private ?InitiateCallRequest_outboundPriority $outboundPriority = null;
    
    /**
     * @var string|null $outboundReservationId Outbound reservation ID used to throttle and track delivery capacity.
    */
    private ?string $outboundReservationId = null;
    
    /**
     * @var InitiateCallRequest_outboundSource|null $outboundSource Defines the source that requested outbound delivery.
    */
    private ?InitiateCallRequest_outboundSource $outboundSource = null;
    
    /**
     * @var InitiateCallRequest_selectionReason|null $selectionReason Defines the supported Outgoing Number Selection Reason values.
    */
    private ?InitiateCallRequest_selectionReason $selectionReason = null;
    
    /**
     * @var string|null $sourceId Lead source ID used for call attribution and sender selection.
    */
    private ?string $sourceId = null;
    
    /**
     * @var bool|null $wasManuallyOverridden Indicates whether a user manually overrode Leadping's automatic number selection for this phone call initiation request.
    */
    private ?bool $wasManuallyOverridden = null;
    
    /**
     * Instantiates a new InitiateCallRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitiateCallRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitiateCallRequest {
        return new InitiateCallRequest();
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
     * Gets the campaignId property value. Messaging campaign identifier associated with this phone call initiation request.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this phone call initiation request to the Leadping inbox thread.
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
            'importBatchId' => fn(ParseNode $n) => $o->setImportBatchId($n->getStringValue()),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'isImportedLead' => fn(ParseNode $n) => $o->setIsImportedLead($n->getBooleanValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'outboundDeliveryRequestId' => fn(ParseNode $n) => $o->setOutboundDeliveryRequestId($n->getStringValue()),
            'outboundIdempotencyKey' => fn(ParseNode $n) => $o->setOutboundIdempotencyKey($n->getStringValue()),
            'outboundPriority' => fn(ParseNode $n) => $o->setOutboundPriority($n->getEnumValue(InitiateCallRequest_outboundPriority::class)),
            'outboundReservationId' => fn(ParseNode $n) => $o->setOutboundReservationId($n->getStringValue()),
            'outboundSource' => fn(ParseNode $n) => $o->setOutboundSource($n->getEnumValue(InitiateCallRequest_outboundSource::class)),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(InitiateCallRequest_selectionReason::class)),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
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
     * Gets the importBatchId property value. Bulk import batch ID that created or updated this lead.
     * @return string|null
    */
    public function getImportBatchId(): ?string {
        return $this->importBatchId;
    }

    /**
     * Gets the isAutomated property value. Indicates whether automation created or triggered this phone call initiation request.
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
     * Gets the leadId property value. Lead ID associated with the outbound call request.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
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
     * @return InitiateCallRequest_outboundPriority|null
    */
    public function getOutboundPriority(): ?InitiateCallRequest_outboundPriority {
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
     * @return InitiateCallRequest_outboundSource|null
    */
    public function getOutboundSource(): ?InitiateCallRequest_outboundSource {
        return $this->outboundSource;
    }

    /**
     * Gets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @return InitiateCallRequest_selectionReason|null
    */
    public function getSelectionReason(): ?InitiateCallRequest_selectionReason {
        return $this->selectionReason;
    }

    /**
     * Gets the sourceId property value. Lead source ID used for call attribution and sender selection.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this phone call initiation request.
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
        $writer->writeStringValue('importBatchId', $this->getImportBatchId());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeBooleanValue('isImportedLead', $this->getIsImportedLead());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('outboundDeliveryRequestId', $this->getOutboundDeliveryRequestId());
        $writer->writeStringValue('outboundIdempotencyKey', $this->getOutboundIdempotencyKey());
        $writer->writeEnumValue('outboundPriority', $this->getOutboundPriority());
        $writer->writeStringValue('outboundReservationId', $this->getOutboundReservationId());
        $writer->writeEnumValue('outboundSource', $this->getOutboundSource());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
        $writer->writeStringValue('sourceId', $this->getSourceId());
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this phone call initiation request.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this phone call initiation request to the Leadping inbox thread.
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
     * Sets the importBatchId property value. Bulk import batch ID that created or updated this lead.
     * @param string|null $value Value to set for the importBatchId property.
    */
    public function setImportBatchId(?string $value): void {
        $this->importBatchId = $value;
    }

    /**
     * Sets the isAutomated property value. Indicates whether automation created or triggered this phone call initiation request.
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
     * Sets the leadId property value. Lead ID associated with the outbound call request.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
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
     * @param InitiateCallRequest_outboundPriority|null $value Value to set for the outboundPriority property.
    */
    public function setOutboundPriority(?InitiateCallRequest_outboundPriority $value): void {
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
     * @param InitiateCallRequest_outboundSource|null $value Value to set for the outboundSource property.
    */
    public function setOutboundSource(?InitiateCallRequest_outboundSource $value): void {
        $this->outboundSource = $value;
    }

    /**
     * Sets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @param InitiateCallRequest_selectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?InitiateCallRequest_selectionReason $value): void {
        $this->selectionReason = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID used for call attribution and sender selection.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this phone call initiation request.
     * @param bool|null $value Value to set for the wasManuallyOverridden property.
    */
    public function setWasManuallyOverridden(?bool $value): void {
        $this->wasManuallyOverridden = $value;
    }

}
