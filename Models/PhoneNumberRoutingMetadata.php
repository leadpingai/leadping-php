<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for phone number routing metadata data.
*/
class PhoneNumberRoutingMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this phone number routing metadata.
    */
    private ?string $campaignId = null;
    
    /**
     * @var bool|null $internalTestOnly Indicates whether this record is restricted to internal Leadping testing.
    */
    private ?bool $internalTestOnly = null;
    
    /**
     * @var string|null $messagingProfileId Messaging profile identifier used for SMS routing with the provider.
    */
    private ?string $messagingProfileId = null;
    
    /**
     * @var bool|null $smsEnabled Indicates whether the phone number can be used for SMS messaging.
    */
    private ?bool $smsEnabled = null;
    
    /**
     * @var string|null $sourceId Lead source ID assigned to this phone number for attribution and routing.
    */
    private ?string $sourceId = null;
    
    /**
     * @var string|null $teamId Team ID used to route calls and messages for this phone number.
    */
    private ?string $teamId = null;
    
    /**
     * @var string|null $voiceConnectionId Leadping v oi ce co nn ec ti o n ID that links this phone number routing metadata to the related record.
    */
    private ?string $voiceConnectionId = null;
    
    /**
     * @var bool|null $voiceEnabled Indicates whether the phone number can be used for voice calls.
    */
    private ?bool $voiceEnabled = null;
    
    /**
     * @var bool|null $warmupOnly Indicates whether this phone number should only be used for warmup traffic.
    */
    private ?bool $warmupOnly = null;
    
    /**
     * Instantiates a new PhoneNumberRoutingMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberRoutingMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberRoutingMetadata {
        return new PhoneNumberRoutingMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this phone number routing metadata.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'internalTestOnly' => fn(ParseNode $n) => $o->setInternalTestOnly($n->getBooleanValue()),
            'messagingProfileId' => fn(ParseNode $n) => $o->setMessagingProfileId($n->getStringValue()),
            'smsEnabled' => fn(ParseNode $n) => $o->setSmsEnabled($n->getBooleanValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
            'voiceConnectionId' => fn(ParseNode $n) => $o->setVoiceConnectionId($n->getStringValue()),
            'voiceEnabled' => fn(ParseNode $n) => $o->setVoiceEnabled($n->getBooleanValue()),
            'warmupOnly' => fn(ParseNode $n) => $o->setWarmupOnly($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the internalTestOnly property value. Indicates whether this record is restricted to internal Leadping testing.
     * @return bool|null
    */
    public function getInternalTestOnly(): ?bool {
        return $this->internalTestOnly;
    }

    /**
     * Gets the messagingProfileId property value. Messaging profile identifier used for SMS routing with the provider.
     * @return string|null
    */
    public function getMessagingProfileId(): ?string {
        return $this->messagingProfileId;
    }

    /**
     * Gets the smsEnabled property value. Indicates whether the phone number can be used for SMS messaging.
     * @return bool|null
    */
    public function getSmsEnabled(): ?bool {
        return $this->smsEnabled;
    }

    /**
     * Gets the sourceId property value. Lead source ID assigned to this phone number for attribution and routing.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the teamId property value. Team ID used to route calls and messages for this phone number.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Gets the voiceConnectionId property value. Leadping v oi ce co nn ec ti o n ID that links this phone number routing metadata to the related record.
     * @return string|null
    */
    public function getVoiceConnectionId(): ?string {
        return $this->voiceConnectionId;
    }

    /**
     * Gets the voiceEnabled property value. Indicates whether the phone number can be used for voice calls.
     * @return bool|null
    */
    public function getVoiceEnabled(): ?bool {
        return $this->voiceEnabled;
    }

    /**
     * Gets the warmupOnly property value. Indicates whether this phone number should only be used for warmup traffic.
     * @return bool|null
    */
    public function getWarmupOnly(): ?bool {
        return $this->warmupOnly;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeBooleanValue('internalTestOnly', $this->getInternalTestOnly());
        $writer->writeStringValue('messagingProfileId', $this->getMessagingProfileId());
        $writer->writeBooleanValue('smsEnabled', $this->getSmsEnabled());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('teamId', $this->getTeamId());
        $writer->writeStringValue('voiceConnectionId', $this->getVoiceConnectionId());
        $writer->writeBooleanValue('voiceEnabled', $this->getVoiceEnabled());
        $writer->writeBooleanValue('warmupOnly', $this->getWarmupOnly());
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this phone number routing metadata.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the internalTestOnly property value. Indicates whether this record is restricted to internal Leadping testing.
     * @param bool|null $value Value to set for the internalTestOnly property.
    */
    public function setInternalTestOnly(?bool $value): void {
        $this->internalTestOnly = $value;
    }

    /**
     * Sets the messagingProfileId property value. Messaging profile identifier used for SMS routing with the provider.
     * @param string|null $value Value to set for the messagingProfileId property.
    */
    public function setMessagingProfileId(?string $value): void {
        $this->messagingProfileId = $value;
    }

    /**
     * Sets the smsEnabled property value. Indicates whether the phone number can be used for SMS messaging.
     * @param bool|null $value Value to set for the smsEnabled property.
    */
    public function setSmsEnabled(?bool $value): void {
        $this->smsEnabled = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID assigned to this phone number for attribution and routing.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the teamId property value. Team ID used to route calls and messages for this phone number.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->teamId = $value;
    }

    /**
     * Sets the voiceConnectionId property value. Leadping v oi ce co nn ec ti o n ID that links this phone number routing metadata to the related record.
     * @param string|null $value Value to set for the voiceConnectionId property.
    */
    public function setVoiceConnectionId(?string $value): void {
        $this->voiceConnectionId = $value;
    }

    /**
     * Sets the voiceEnabled property value. Indicates whether the phone number can be used for voice calls.
     * @param bool|null $value Value to set for the voiceEnabled property.
    */
    public function setVoiceEnabled(?bool $value): void {
        $this->voiceEnabled = $value;
    }

    /**
     * Sets the warmupOnly property value. Indicates whether this phone number should only be used for warmup traffic.
     * @param bool|null $value Value to set for the warmupOnly property.
    */
    public function setWarmupOnly(?bool $value): void {
        $this->warmupOnly = $value;
    }

}
