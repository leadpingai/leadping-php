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
     * @var bool|null $voiceEnabled Indicates whether the phone number can be used for voice calls.
    */
    private ?bool $voiceEnabled = null;
    
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
            'smsEnabled' => fn(ParseNode $n) => $o->setSmsEnabled($n->getBooleanValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
            'voiceEnabled' => fn(ParseNode $n) => $o->setVoiceEnabled($n->getBooleanValue()),
        ];
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
     * Gets the voiceEnabled property value. Indicates whether the phone number can be used for voice calls.
     * @return bool|null
    */
    public function getVoiceEnabled(): ?bool {
        return $this->voiceEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeBooleanValue('smsEnabled', $this->getSmsEnabled());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('teamId', $this->getTeamId());
        $writer->writeBooleanValue('voiceEnabled', $this->getVoiceEnabled());
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
     * Sets the voiceEnabled property value. Indicates whether the phone number can be used for voice calls.
     * @param bool|null $value Value to set for the voiceEnabled property.
    */
    public function setVoiceEnabled(?bool $value): void {
        $this->voiceEnabled = $value;
    }

}
