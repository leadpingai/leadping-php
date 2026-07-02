<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutboundPhoneNumberCapacity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneNumberOutboundHealthStatus|null $healthStatus Defines phone-number outbound health states used by pacing.
    */
    private ?PhoneNumberOutboundHealthStatus $healthStatus = null;
    
    /**
     * @var string|null $phoneNumber The phoneNumber property
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $phoneNumberId The phoneNumberId property
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var int|null $smsLimitThisHour The smsLimitThisHour property
    */
    private ?int $smsLimitThisHour = null;
    
    /**
     * @var int|null $smsLimitToday The smsLimitToday property
    */
    private ?int $smsLimitToday = null;
    
    /**
     * @var int|null $smsRemainingThisHour The smsRemainingThisHour property
    */
    private ?int $smsRemainingThisHour = null;
    
    /**
     * @var int|null $smsRemainingToday The smsRemainingToday property
    */
    private ?int $smsRemainingToday = null;
    
    /**
     * @var int|null $smsUsedThisHour The smsUsedThisHour property
    */
    private ?int $smsUsedThisHour = null;
    
    /**
     * @var int|null $smsUsedToday The smsUsedToday property
    */
    private ?int $smsUsedToday = null;
    
    /**
     * @var int|null $voiceLimitThisHour The voiceLimitThisHour property
    */
    private ?int $voiceLimitThisHour = null;
    
    /**
     * @var int|null $voiceLimitToday The voiceLimitToday property
    */
    private ?int $voiceLimitToday = null;
    
    /**
     * @var int|null $voiceRemainingThisHour The voiceRemainingThisHour property
    */
    private ?int $voiceRemainingThisHour = null;
    
    /**
     * @var int|null $voiceRemainingToday The voiceRemainingToday property
    */
    private ?int $voiceRemainingToday = null;
    
    /**
     * @var int|null $voiceUsedThisHour The voiceUsedThisHour property
    */
    private ?int $voiceUsedThisHour = null;
    
    /**
     * @var int|null $voiceUsedToday The voiceUsedToday property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
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
     * Gets the healthStatus property value. Defines phone-number outbound health states used by pacing.
     * @return PhoneNumberOutboundHealthStatus|null
    */
    public function getHealthStatus(): ?PhoneNumberOutboundHealthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the phoneNumberId property value. The phoneNumberId property
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the smsLimitThisHour property value. The smsLimitThisHour property
     * @return int|null
    */
    public function getSmsLimitThisHour(): ?int {
        return $this->smsLimitThisHour;
    }

    /**
     * Gets the smsLimitToday property value. The smsLimitToday property
     * @return int|null
    */
    public function getSmsLimitToday(): ?int {
        return $this->smsLimitToday;
    }

    /**
     * Gets the smsRemainingThisHour property value. The smsRemainingThisHour property
     * @return int|null
    */
    public function getSmsRemainingThisHour(): ?int {
        return $this->smsRemainingThisHour;
    }

    /**
     * Gets the smsRemainingToday property value. The smsRemainingToday property
     * @return int|null
    */
    public function getSmsRemainingToday(): ?int {
        return $this->smsRemainingToday;
    }

    /**
     * Gets the smsUsedThisHour property value. The smsUsedThisHour property
     * @return int|null
    */
    public function getSmsUsedThisHour(): ?int {
        return $this->smsUsedThisHour;
    }

    /**
     * Gets the smsUsedToday property value. The smsUsedToday property
     * @return int|null
    */
    public function getSmsUsedToday(): ?int {
        return $this->smsUsedToday;
    }

    /**
     * Gets the voiceLimitThisHour property value. The voiceLimitThisHour property
     * @return int|null
    */
    public function getVoiceLimitThisHour(): ?int {
        return $this->voiceLimitThisHour;
    }

    /**
     * Gets the voiceLimitToday property value. The voiceLimitToday property
     * @return int|null
    */
    public function getVoiceLimitToday(): ?int {
        return $this->voiceLimitToday;
    }

    /**
     * Gets the voiceRemainingThisHour property value. The voiceRemainingThisHour property
     * @return int|null
    */
    public function getVoiceRemainingThisHour(): ?int {
        return $this->voiceRemainingThisHour;
    }

    /**
     * Gets the voiceRemainingToday property value. The voiceRemainingToday property
     * @return int|null
    */
    public function getVoiceRemainingToday(): ?int {
        return $this->voiceRemainingToday;
    }

    /**
     * Gets the voiceUsedThisHour property value. The voiceUsedThisHour property
     * @return int|null
    */
    public function getVoiceUsedThisHour(): ?int {
        return $this->voiceUsedThisHour;
    }

    /**
     * Gets the voiceUsedToday property value. The voiceUsedToday property
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
     * Sets the healthStatus property value. Defines phone-number outbound health states used by pacing.
     * @param PhoneNumberOutboundHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?PhoneNumberOutboundHealthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the phoneNumberId property value. The phoneNumberId property
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the smsLimitThisHour property value. The smsLimitThisHour property
     * @param int|null $value Value to set for the smsLimitThisHour property.
    */
    public function setSmsLimitThisHour(?int $value): void {
        $this->smsLimitThisHour = $value;
    }

    /**
     * Sets the smsLimitToday property value. The smsLimitToday property
     * @param int|null $value Value to set for the smsLimitToday property.
    */
    public function setSmsLimitToday(?int $value): void {
        $this->smsLimitToday = $value;
    }

    /**
     * Sets the smsRemainingThisHour property value. The smsRemainingThisHour property
     * @param int|null $value Value to set for the smsRemainingThisHour property.
    */
    public function setSmsRemainingThisHour(?int $value): void {
        $this->smsRemainingThisHour = $value;
    }

    /**
     * Sets the smsRemainingToday property value. The smsRemainingToday property
     * @param int|null $value Value to set for the smsRemainingToday property.
    */
    public function setSmsRemainingToday(?int $value): void {
        $this->smsRemainingToday = $value;
    }

    /**
     * Sets the smsUsedThisHour property value. The smsUsedThisHour property
     * @param int|null $value Value to set for the smsUsedThisHour property.
    */
    public function setSmsUsedThisHour(?int $value): void {
        $this->smsUsedThisHour = $value;
    }

    /**
     * Sets the smsUsedToday property value. The smsUsedToday property
     * @param int|null $value Value to set for the smsUsedToday property.
    */
    public function setSmsUsedToday(?int $value): void {
        $this->smsUsedToday = $value;
    }

    /**
     * Sets the voiceLimitThisHour property value. The voiceLimitThisHour property
     * @param int|null $value Value to set for the voiceLimitThisHour property.
    */
    public function setVoiceLimitThisHour(?int $value): void {
        $this->voiceLimitThisHour = $value;
    }

    /**
     * Sets the voiceLimitToday property value. The voiceLimitToday property
     * @param int|null $value Value to set for the voiceLimitToday property.
    */
    public function setVoiceLimitToday(?int $value): void {
        $this->voiceLimitToday = $value;
    }

    /**
     * Sets the voiceRemainingThisHour property value. The voiceRemainingThisHour property
     * @param int|null $value Value to set for the voiceRemainingThisHour property.
    */
    public function setVoiceRemainingThisHour(?int $value): void {
        $this->voiceRemainingThisHour = $value;
    }

    /**
     * Sets the voiceRemainingToday property value. The voiceRemainingToday property
     * @param int|null $value Value to set for the voiceRemainingToday property.
    */
    public function setVoiceRemainingToday(?int $value): void {
        $this->voiceRemainingToday = $value;
    }

    /**
     * Sets the voiceUsedThisHour property value. The voiceUsedThisHour property
     * @param int|null $value Value to set for the voiceUsedThisHour property.
    */
    public function setVoiceUsedThisHour(?int $value): void {
        $this->voiceUsedThisHour = $value;
    }

    /**
     * Sets the voiceUsedToday property value. The voiceUsedToday property
     * @param int|null $value Value to set for the voiceUsedToday property.
    */
    public function setVoiceUsedToday(?int $value): void {
        $this->voiceUsedToday = $value;
    }

}
