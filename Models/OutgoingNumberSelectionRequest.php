<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API outgoing number selection request, including the fields clients can send.
*/
class OutgoingNumberSelectionRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this outgoing number selection request.
    */
    private ?string $campaignId = null;
    
    /**
     * @var OutgoingNumberSelectionRequest_channel|null $channel Defines the supported Outgoing Number Channel values.
    */
    private ?OutgoingNumberSelectionRequest_channel $channel = null;
    
    /**
     * @var string|null $conversationId Conversation ID that links this outgoing number selection request to the Leadping inbox thread.
    */
    private ?string $conversationId = null;
    
    /**
     * @var string|null $leadId Lead ID used to choose the best outgoing sender number.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $recipientPhoneNumber Recipient phone number that receives the outbound message or call.
    */
    private ?string $recipientPhoneNumber = null;
    
    /**
     * @var string|null $sourceId Lead source ID used to choose the best outgoing sender number.
    */
    private ?string $sourceId = null;
    
    /**
     * @var string|null $teamId Team ID used to choose the best outgoing sender number.
    */
    private ?string $teamId = null;
    
    /**
     * Instantiates a new OutgoingNumberSelectionRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutgoingNumberSelectionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutgoingNumberSelectionRequest {
        return new OutgoingNumberSelectionRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this outgoing number selection request.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the channel property value. Defines the supported Outgoing Number Channel values.
     * @return OutgoingNumberSelectionRequest_channel|null
    */
    public function getChannel(): ?OutgoingNumberSelectionRequest_channel {
        return $this->channel;
    }

    /**
     * Gets the conversationId property value. Conversation ID that links this outgoing number selection request to the Leadping inbox thread.
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
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(OutgoingNumberSelectionRequest_channel::class)),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'recipientPhoneNumber' => fn(ParseNode $n) => $o->setRecipientPhoneNumber($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
        ];
    }

    /**
     * Gets the leadId property value. Lead ID used to choose the best outgoing sender number.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the recipientPhoneNumber property value. Recipient phone number that receives the outbound message or call.
     * @return string|null
    */
    public function getRecipientPhoneNumber(): ?string {
        return $this->recipientPhoneNumber;
    }

    /**
     * Gets the sourceId property value. Lead source ID used to choose the best outgoing sender number.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the teamId property value. Team ID used to choose the best outgoing sender number.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('recipientPhoneNumber', $this->getRecipientPhoneNumber());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('teamId', $this->getTeamId());
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this outgoing number selection request.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the channel property value. Defines the supported Outgoing Number Channel values.
     * @param OutgoingNumberSelectionRequest_channel|null $value Value to set for the channel property.
    */
    public function setChannel(?OutgoingNumberSelectionRequest_channel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the conversationId property value. Conversation ID that links this outgoing number selection request to the Leadping inbox thread.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the leadId property value. Lead ID used to choose the best outgoing sender number.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the recipientPhoneNumber property value. Recipient phone number that receives the outbound message or call.
     * @param string|null $value Value to set for the recipientPhoneNumber property.
    */
    public function setRecipientPhoneNumber(?string $value): void {
        $this->recipientPhoneNumber = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID used to choose the best outgoing sender number.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the teamId property value. Team ID used to choose the best outgoing sender number.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->teamId = $value;
    }

}
