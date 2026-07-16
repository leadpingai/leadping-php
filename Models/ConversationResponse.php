<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API conversation response returned to authenticated clients.
*/
class ConversationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $activeOutboundPhoneNumberId Phone number ID currently active for outbound delivery.
    */
    private ?string $activeOutboundPhoneNumberId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $archivedAt UTC timestamp when this record was archived.
    */
    private ?DateTime $archivedAt = null;
    
    /**
     * @var int|null $archiveReason Defines why a lead was removed from the active working pipeline.
    */
    private ?int $archiveReason = null;
    
    /**
     * @var ConversationResponse_currentDisposition|null $currentDisposition Current disposition summary that describes the lead outcome.
    */
    private ?ConversationResponse_currentDisposition $currentDisposition = null;
    
    /**
     * @var string|null $firstName First name of the lead, user, or contact represented by this conversation response.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this conversation response.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isArchived Indicates whether the Leadping conversation has been archived.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var bool|null $isUnread Indicates whether the current user has unread activity in the conversation.
    */
    private ?bool $isUnread = null;
    
    /**
     * @var DateTime|null $lastEventAt UTC timestamp when the most recent conversation event occurred.
    */
    private ?DateTime $lastEventAt = null;
    
    /**
     * @var string|null $lastName Last name of the lead, user, or contact represented by this conversation response.
    */
    private ?string $lastName = null;
    
    /**
     * @var string|null $lastSnippet Most recent message preview shown for the conversation.
    */
    private ?string $lastSnippet = null;
    
    /**
     * @var string|null $leadId Lead ID associated with this inbox conversation.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadPhoneNumber Lead's phone number used for conversation matching and outreach.
    */
    private ?string $leadPhoneNumber = null;
    
    /**
     * @var string|null $nextStep Recommended next step to move this conversation response forward.
    */
    private ?string $nextStep = null;
    
    /**
     * @var string|null $outboundPhoneNumberOverrideId Phone number ID manually chosen to override automatic outbound selection.
    */
    private ?string $outboundPhoneNumberOverrideId = null;
    
    /**
     * @var ConversationResponse_phoneNumber|null $phoneNumber Phone number used by this conversation response for calls, SMS, lookup, or routing.
    */
    private ?ConversationResponse_phoneNumber $phoneNumber = null;
    
    /**
     * @var ConversationResponse_status|null $status Defines the customer-facing operational status for an inbox conversation.
    */
    private ?ConversationResponse_status $status = null;
    
    /**
     * @var string|null $statusReason Human-readable reason explaining the current status of this conversation response.
    */
    private ?string $statusReason = null;
    
    /**
     * Instantiates a new ConversationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationResponse {
        return new ConversationResponse();
    }

    /**
     * Gets the activeOutboundPhoneNumberId property value. Phone number ID currently active for outbound delivery.
     * @return string|null
    */
    public function getActiveOutboundPhoneNumberId(): ?string {
        return $this->activeOutboundPhoneNumberId;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the archivedAt property value. UTC timestamp when this record was archived.
     * @return DateTime|null
    */
    public function getArchivedAt(): ?DateTime {
        return $this->archivedAt;
    }

    /**
     * Gets the archiveReason property value. Defines why a lead was removed from the active working pipeline.
     * @return int|null
    */
    public function getArchiveReason(): ?int {
        return $this->archiveReason;
    }

    /**
     * Gets the currentDisposition property value. Current disposition summary that describes the lead outcome.
     * @return ConversationResponse_currentDisposition|null
    */
    public function getCurrentDisposition(): ?ConversationResponse_currentDisposition {
        return $this->currentDisposition;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activeOutboundPhoneNumberId' => fn(ParseNode $n) => $o->setActiveOutboundPhoneNumberId($n->getStringValue()),
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getDateTimeValue()),
            'archiveReason' => fn(ParseNode $n) => $o->setArchiveReason($n->getIntegerValue()),
            'currentDisposition' => fn(ParseNode $n) => $o->setCurrentDisposition($n->getObjectValue([ConversationResponse_currentDisposition::class, 'createFromDiscriminatorValue'])),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'isUnread' => fn(ParseNode $n) => $o->setIsUnread($n->getBooleanValue()),
            'lastEventAt' => fn(ParseNode $n) => $o->setLastEventAt($n->getDateTimeValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'lastSnippet' => fn(ParseNode $n) => $o->setLastSnippet($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'leadPhoneNumber' => fn(ParseNode $n) => $o->setLeadPhoneNumber($n->getStringValue()),
            'nextStep' => fn(ParseNode $n) => $o->setNextStep($n->getStringValue()),
            'outboundPhoneNumberOverrideId' => fn(ParseNode $n) => $o->setOutboundPhoneNumberOverrideId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getObjectValue([ConversationResponse_phoneNumber::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ConversationResponse_status::class)),
            'statusReason' => fn(ParseNode $n) => $o->setStatusReason($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. First name of the lead, user, or contact represented by this conversation response.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this conversation response.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isArchived property value. Indicates whether the Leadping conversation has been archived.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the isUnread property value. Indicates whether the current user has unread activity in the conversation.
     * @return bool|null
    */
    public function getIsUnread(): ?bool {
        return $this->isUnread;
    }

    /**
     * Gets the lastEventAt property value. UTC timestamp when the most recent conversation event occurred.
     * @return DateTime|null
    */
    public function getLastEventAt(): ?DateTime {
        return $this->lastEventAt;
    }

    /**
     * Gets the lastName property value. Last name of the lead, user, or contact represented by this conversation response.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the lastSnippet property value. Most recent message preview shown for the conversation.
     * @return string|null
    */
    public function getLastSnippet(): ?string {
        return $this->lastSnippet;
    }

    /**
     * Gets the leadId property value. Lead ID associated with this inbox conversation.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadPhoneNumber property value. Lead's phone number used for conversation matching and outreach.
     * @return string|null
    */
    public function getLeadPhoneNumber(): ?string {
        return $this->leadPhoneNumber;
    }

    /**
     * Gets the nextStep property value. Recommended next step to move this conversation response forward.
     * @return string|null
    */
    public function getNextStep(): ?string {
        return $this->nextStep;
    }

    /**
     * Gets the outboundPhoneNumberOverrideId property value. Phone number ID manually chosen to override automatic outbound selection.
     * @return string|null
    */
    public function getOutboundPhoneNumberOverrideId(): ?string {
        return $this->outboundPhoneNumberOverrideId;
    }

    /**
     * Gets the phoneNumber property value. Phone number used by this conversation response for calls, SMS, lookup, or routing.
     * @return ConversationResponse_phoneNumber|null
    */
    public function getPhoneNumber(): ?ConversationResponse_phoneNumber {
        return $this->phoneNumber;
    }

    /**
     * Gets the status property value. Defines the customer-facing operational status for an inbox conversation.
     * @return ConversationResponse_status|null
    */
    public function getStatus(): ?ConversationResponse_status {
        return $this->status;
    }

    /**
     * Gets the statusReason property value. Human-readable reason explaining the current status of this conversation response.
     * @return string|null
    */
    public function getStatusReason(): ?string {
        return $this->statusReason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activeOutboundPhoneNumberId', $this->getActiveOutboundPhoneNumberId());
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeIntegerValue('archiveReason', $this->getArchiveReason());
        $writer->writeObjectValue('currentDisposition', $this->getCurrentDisposition());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeBooleanValue('isUnread', $this->getIsUnread());
        $writer->writeDateTimeValue('lastEventAt', $this->getLastEventAt());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeStringValue('lastSnippet', $this->getLastSnippet());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadPhoneNumber', $this->getLeadPhoneNumber());
        $writer->writeStringValue('nextStep', $this->getNextStep());
        $writer->writeStringValue('outboundPhoneNumberOverrideId', $this->getOutboundPhoneNumberOverrideId());
        $writer->writeObjectValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusReason', $this->getStatusReason());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activeOutboundPhoneNumberId property value. Phone number ID currently active for outbound delivery.
     * @param string|null $value Value to set for the activeOutboundPhoneNumberId property.
    */
    public function setActiveOutboundPhoneNumberId(?string $value): void {
        $this->activeOutboundPhoneNumberId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the archivedAt property value. UTC timestamp when this record was archived.
     * @param DateTime|null $value Value to set for the archivedAt property.
    */
    public function setArchivedAt(?DateTime $value): void {
        $this->archivedAt = $value;
    }

    /**
     * Sets the archiveReason property value. Defines why a lead was removed from the active working pipeline.
     * @param int|null $value Value to set for the archiveReason property.
    */
    public function setArchiveReason(?int $value): void {
        $this->archiveReason = $value;
    }

    /**
     * Sets the currentDisposition property value. Current disposition summary that describes the lead outcome.
     * @param ConversationResponse_currentDisposition|null $value Value to set for the currentDisposition property.
    */
    public function setCurrentDisposition(?ConversationResponse_currentDisposition $value): void {
        $this->currentDisposition = $value;
    }

    /**
     * Sets the firstName property value. First name of the lead, user, or contact represented by this conversation response.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this conversation response.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isArchived property value. Indicates whether the Leadping conversation has been archived.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the isUnread property value. Indicates whether the current user has unread activity in the conversation.
     * @param bool|null $value Value to set for the isUnread property.
    */
    public function setIsUnread(?bool $value): void {
        $this->isUnread = $value;
    }

    /**
     * Sets the lastEventAt property value. UTC timestamp when the most recent conversation event occurred.
     * @param DateTime|null $value Value to set for the lastEventAt property.
    */
    public function setLastEventAt(?DateTime $value): void {
        $this->lastEventAt = $value;
    }

    /**
     * Sets the lastName property value. Last name of the lead, user, or contact represented by this conversation response.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the lastSnippet property value. Most recent message preview shown for the conversation.
     * @param string|null $value Value to set for the lastSnippet property.
    */
    public function setLastSnippet(?string $value): void {
        $this->lastSnippet = $value;
    }

    /**
     * Sets the leadId property value. Lead ID associated with this inbox conversation.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadPhoneNumber property value. Lead's phone number used for conversation matching and outreach.
     * @param string|null $value Value to set for the leadPhoneNumber property.
    */
    public function setLeadPhoneNumber(?string $value): void {
        $this->leadPhoneNumber = $value;
    }

    /**
     * Sets the nextStep property value. Recommended next step to move this conversation response forward.
     * @param string|null $value Value to set for the nextStep property.
    */
    public function setNextStep(?string $value): void {
        $this->nextStep = $value;
    }

    /**
     * Sets the outboundPhoneNumberOverrideId property value. Phone number ID manually chosen to override automatic outbound selection.
     * @param string|null $value Value to set for the outboundPhoneNumberOverrideId property.
    */
    public function setOutboundPhoneNumberOverrideId(?string $value): void {
        $this->outboundPhoneNumberOverrideId = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number used by this conversation response for calls, SMS, lookup, or routing.
     * @param ConversationResponse_phoneNumber|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?ConversationResponse_phoneNumber $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the status property value. Defines the customer-facing operational status for an inbox conversation.
     * @param ConversationResponse_status|null $value Value to set for the status property.
    */
    public function setStatus(?ConversationResponse_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusReason property value. Human-readable reason explaining the current status of this conversation response.
     * @param string|null $value Value to set for the statusReason property.
    */
    public function setStatusReason(?string $value): void {
        $this->statusReason = $value;
    }

}
