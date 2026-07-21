<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents outbound phone number capacity data used by Leadping.
*/
class OutboundPhoneNumberCapacity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $capacityAvailable Indicates whether Leadping successfully calculated capacity for this phone number.
    */
    private ?bool $capacityAvailable = null;
    
    /**
     * @var PhoneNumberOutboundHealthStatus|null $healthStatus Current health status for this Leadping outbound phone number capacity.
    */
    private ?PhoneNumberOutboundHealthStatus $healthStatus = null;
    
    /**
     * @var string|null $phoneNumber Phone number associated with this Leadping outbound phone number capacity.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $phoneNumberId Unique identifier of the phone number associated with this Leadping outbound phone number capacity.
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var int|null $smsLimitThisHour Number of SMS limit this hour represented by this Leadping outbound phone number capacity.
    */
    private ?int $smsLimitThisHour = null;
    
    /**
     * @var int|null $smsLimitToday Number of SMS limit today represented by this Leadping outbound phone number capacity.
    */
    private ?int $smsLimitToday = null;
    
    /**
     * @var int|null $smsRemainingThisHour SMS remaining this hour for the applicable messaging or voice capacity window.
    */
    private ?int $smsRemainingThisHour = null;
    
    /**
     * @var int|null $smsRemainingToday SMS remaining today for the applicable messaging or voice capacity window.
    */
    private ?int $smsRemainingToday = null;
    
    /**
     * @var int|null $smsUsedThisHour SMS used this hour for the applicable messaging or voice capacity window.
    */
    private ?int $smsUsedThisHour = null;
    
    /**
     * @var int|null $smsUsedToday SMS used today for the applicable messaging or voice capacity window.
    */
    private ?int $smsUsedToday = null;
    
    /**
     * @var int|null $voiceLimitThisHour Voice limit this hour associated with this Leadping outbound phone number capacity.
    */
    private ?int $voiceLimitThisHour = null;
    
    /**
     * @var int|null $voiceLimitToday Voice limit today associated with this Leadping outbound phone number capacity.
    */
    private ?int $voiceLimitToday = null;
    
    /**
     * @var int|null $voiceRemainingThisHour Voice remaining this hour for the applicable messaging or voice capacity window.
    */
    private ?int $voiceRemainingThisHour = null;
    
    /**
     * @var int|null $voiceRemainingToday Voice remaining today for the applicable messaging or voice capacity window.
    */
    private ?int $voiceRemainingToday = null;
    
    /**
     * @var int|null $voiceUsedThisHour Voice used this hour for the applicable messaging or voice capacity window.
    */
    private ?int $voiceUsedThisHour = null;
    
    /**
     * @var int|null $voiceUsedToday Voice used today for the applicable messaging or voice capacity window.
    */
    private ?int $voiceUsedToday = null;
    
    /**
     * Instantiates a new OutboundPhoneNumberCapacity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutboundPhoneNumberCapacity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutboundPhoneNumberCapacity {
        return new OutboundPhoneNumberCapacity();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the capacityAvailable property value. Indicates whether Leadping successfully calculated capacity for this phone number.
     * @return bool|null
    */
    public function getCapacityAvailable(): ?bool {
        return $this->capacityAvailable;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capacityAvailable' => fn(ParseNode $n) => $o->setCapacityAvailable($n->getBooleanValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(PhoneNumberOutboundHealthStatus::class)),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'smsLimitThisHour' => fn(ParseNode $n) => $o->setSmsLimitThisHour($n->getIntegerValue()),
            'smsLimitToday' => fn(ParseNode $n) => $o->setSmsLimitToday($n->getIntegerValue()),
            'smsRemainingThisHour' => fn(ParseNode $n) => $o->setSmsRemainingThisHour($n->getIntegerValue()),
            'smsRemainingToday' => fn(ParseNode $n) => $o->setSmsRemainingToday($n->getIntegerValue()),
            'smsUsedThisHour' => fn(ParseNode $n) => $o->setSmsUsedThisHour($n->getIntegerValue()),
            'smsUsedToday' => fn(ParseNode $n) => $o->setSmsUsedToday($n->getIntegerValue()),
            'voiceLimitThisHour' => fn(ParseNode $n) => $o->setVoiceLimitThisHour($n->getIntegerValue()),
            'voiceLimitToday' => fn(ParseNode $n) => $o->setVoiceLimitToday($n->getIntegerValue()),
            'voiceRemainingThisHour' => fn(ParseNode $n) => $o->setVoiceRemainingThisHour($n->getIntegerValue()),
            'voiceRemainingToday' => fn(ParseNode $n) => $o->setVoiceRemainingToday($n->getIntegerValue()),
            'voiceUsedThisHour' => fn(ParseNode $n) => $o->setVoiceUsedThisHour($n->getIntegerValue()),
            'voiceUsedToday' => fn(ParseNode $n) => $o->setVoiceUsedToday($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the healthStatus property value. Current health status for this Leadping outbound phone number capacity.
     * @return PhoneNumberOutboundHealthStatus|null
    */
    public function getHealthStatus(): ?PhoneNumberOutboundHealthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the phoneNumber property value. Phone number associated with this Leadping outbound phone number capacity.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the phoneNumberId property value. Unique identifier of the phone number associated with this Leadping outbound phone number capacity.
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the smsLimitThisHour property value. Number of SMS limit this hour represented by this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getSmsLimitThisHour(): ?int {
        return $this->smsLimitThisHour;
    }

    /**
     * Gets the smsLimitToday property value. Number of SMS limit today represented by this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getSmsLimitToday(): ?int {
        return $this->smsLimitToday;
    }

    /**
     * Gets the smsRemainingThisHour property value. SMS remaining this hour for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getSmsRemainingThisHour(): ?int {
        return $this->smsRemainingThisHour;
    }

    /**
     * Gets the smsRemainingToday property value. SMS remaining today for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getSmsRemainingToday(): ?int {
        return $this->smsRemainingToday;
    }

    /**
     * Gets the smsUsedThisHour property value. SMS used this hour for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getSmsUsedThisHour(): ?int {
        return $this->smsUsedThisHour;
    }

    /**
     * Gets the smsUsedToday property value. SMS used today for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getSmsUsedToday(): ?int {
        return $this->smsUsedToday;
    }

    /**
     * Gets the voiceLimitThisHour property value. Voice limit this hour associated with this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getVoiceLimitThisHour(): ?int {
        return $this->voiceLimitThisHour;
    }

    /**
     * Gets the voiceLimitToday property value. Voice limit today associated with this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getVoiceLimitToday(): ?int {
        return $this->voiceLimitToday;
    }

    /**
     * Gets the voiceRemainingThisHour property value. Voice remaining this hour for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getVoiceRemainingThisHour(): ?int {
        return $this->voiceRemainingThisHour;
    }

    /**
     * Gets the voiceRemainingToday property value. Voice remaining today for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getVoiceRemainingToday(): ?int {
        return $this->voiceRemainingToday;
    }

    /**
     * Gets the voiceUsedThisHour property value. Voice used this hour for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getVoiceUsedThisHour(): ?int {
        return $this->voiceUsedThisHour;
    }

    /**
     * Gets the voiceUsedToday property value. Voice used today for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getVoiceUsedToday(): ?int {
        return $this->voiceUsedToday;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('capacityAvailable', $this->getCapacityAvailable());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeIntegerValue('smsLimitThisHour', $this->getSmsLimitThisHour());
        $writer->writeIntegerValue('smsLimitToday', $this->getSmsLimitToday());
        $writer->writeIntegerValue('smsRemainingThisHour', $this->getSmsRemainingThisHour());
        $writer->writeIntegerValue('smsRemainingToday', $this->getSmsRemainingToday());
        $writer->writeIntegerValue('smsUsedThisHour', $this->getSmsUsedThisHour());
        $writer->writeIntegerValue('smsUsedToday', $this->getSmsUsedToday());
        $writer->writeIntegerValue('voiceLimitThisHour', $this->getVoiceLimitThisHour());
        $writer->writeIntegerValue('voiceLimitToday', $this->getVoiceLimitToday());
        $writer->writeIntegerValue('voiceRemainingThisHour', $this->getVoiceRemainingThisHour());
        $writer->writeIntegerValue('voiceRemainingToday', $this->getVoiceRemainingToday());
        $writer->writeIntegerValue('voiceUsedThisHour', $this->getVoiceUsedThisHour());
        $writer->writeIntegerValue('voiceUsedToday', $this->getVoiceUsedToday());
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
     * Sets the capacityAvailable property value. Indicates whether Leadping successfully calculated capacity for this phone number.
     * @param bool|null $value Value to set for the capacityAvailable property.
    */
    public function setCapacityAvailable(?bool $value): void {
        $this->capacityAvailable = $value;
    }

    /**
     * Sets the healthStatus property value. Current health status for this Leadping outbound phone number capacity.
     * @param PhoneNumberOutboundHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?PhoneNumberOutboundHealthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number associated with this Leadping outbound phone number capacity.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the phoneNumberId property value. Unique identifier of the phone number associated with this Leadping outbound phone number capacity.
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the smsLimitThisHour property value. Number of SMS limit this hour represented by this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the smsLimitThisHour property.
    */
    public function setSmsLimitThisHour(?int $value): void {
        $this->smsLimitThisHour = $value;
    }

    /**
     * Sets the smsLimitToday property value. Number of SMS limit today represented by this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the smsLimitToday property.
    */
    public function setSmsLimitToday(?int $value): void {
        $this->smsLimitToday = $value;
    }

    /**
     * Sets the smsRemainingThisHour property value. SMS remaining this hour for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the smsRemainingThisHour property.
    */
    public function setSmsRemainingThisHour(?int $value): void {
        $this->smsRemainingThisHour = $value;
    }

    /**
     * Sets the smsRemainingToday property value. SMS remaining today for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the smsRemainingToday property.
    */
    public function setSmsRemainingToday(?int $value): void {
        $this->smsRemainingToday = $value;
    }

    /**
     * Sets the smsUsedThisHour property value. SMS used this hour for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the smsUsedThisHour property.
    */
    public function setSmsUsedThisHour(?int $value): void {
        $this->smsUsedThisHour = $value;
    }

    /**
     * Sets the smsUsedToday property value. SMS used today for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the smsUsedToday property.
    */
    public function setSmsUsedToday(?int $value): void {
        $this->smsUsedToday = $value;
    }

    /**
     * Sets the voiceLimitThisHour property value. Voice limit this hour associated with this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the voiceLimitThisHour property.
    */
    public function setVoiceLimitThisHour(?int $value): void {
        $this->voiceLimitThisHour = $value;
    }

    /**
     * Sets the voiceLimitToday property value. Voice limit today associated with this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the voiceLimitToday property.
    */
    public function setVoiceLimitToday(?int $value): void {
        $this->voiceLimitToday = $value;
    }

    /**
     * Sets the voiceRemainingThisHour property value. Voice remaining this hour for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the voiceRemainingThisHour property.
    */
    public function setVoiceRemainingThisHour(?int $value): void {
        $this->voiceRemainingThisHour = $value;
    }

    /**
     * Sets the voiceRemainingToday property value. Voice remaining today for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the voiceRemainingToday property.
    */
    public function setVoiceRemainingToday(?int $value): void {
        $this->voiceRemainingToday = $value;
    }

    /**
     * Sets the voiceUsedThisHour property value. Voice used this hour for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the voiceUsedThisHour property.
    */
    public function setVoiceUsedThisHour(?int $value): void {
        $this->voiceUsedThisHour = $value;
    }

    /**
     * Sets the voiceUsedToday property value. Voice used today for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the voiceUsedToday property.
    */
    public function setVoiceUsedToday(?int $value): void {
        $this->voiceUsedToday = $value;
    }

}
