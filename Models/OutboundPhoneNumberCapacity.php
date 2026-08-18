<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Reports the sending capacity, current load, and availability of a phone number considered for outbound delivery.
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
     * @var string|null $healthReason Human-readable reason for the current phone-number health state.
    */
    private ?string $healthReason = null;
    
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
     * @var bool|null $smsApproved Indicates whether this phone number has an approved 10DLC messaging campaign assignment.
    */
    private ?bool $smsApproved = null;
    
    /**
     * @var DateTime|null $smsDailyResetsAt Next midnight Eastern time, when SMS daily capacity resets.
    */
    private ?DateTime $smsDailyResetsAt = null;
    
    /**
     * @var DateTime|null $smsHourlyResetsAt Start of the next Eastern time hour, when SMS hourly capacity resets.
    */
    private ?DateTime $smsHourlyResetsAt = null;
    
    /**
     * @var int|null $smsLimitThisHour Number of SMS limit this hour represented by this Leadping outbound phone number capacity.
    */
    private ?int $smsLimitThisHour = null;
    
    /**
     * @var int|null $smsLimitThisMinute SMS limit for one rolling minute.
    */
    private ?int $smsLimitThisMinute = null;
    
    /**
     * @var int|null $smsLimitToday Number of SMS limit today represented by this Leadping outbound phone number capacity.
    */
    private ?int $smsLimitToday = null;
    
    /**
     * @var DateTime|null $smsMinutelyResetsAt The next time SMS capacity becomes available in the rolling minute window.
    */
    private ?DateTime $smsMinutelyResetsAt = null;
    
    /**
     * @var bool|null $smsRamping Indicates whether SMS limits for this phone number are still ramping up.
    */
    private ?bool $smsRamping = null;
    
    /**
     * @var int|null $smsRemainingThisHour SMS remaining this hour for the applicable messaging or voice capacity window.
    */
    private ?int $smsRemainingThisHour = null;
    
    /**
     * @var int|null $smsRemainingThisMinute SMS remaining in the current rolling minute.
    */
    private ?int $smsRemainingThisMinute = null;
    
    /**
     * @var int|null $smsRemainingToday SMS remaining today for the applicable messaging or voice capacity window.
    */
    private ?int $smsRemainingToday = null;
    
    /**
     * @var int|null $smsUsedThisHour SMS used this hour for the applicable messaging or voice capacity window.
    */
    private ?int $smsUsedThisHour = null;
    
    /**
     * @var int|null $smsUsedThisMinute SMS used in the current rolling minute.
    */
    private ?int $smsUsedThisMinute = null;
    
    /**
     * @var int|null $smsUsedToday SMS used today for the applicable messaging or voice capacity window.
    */
    private ?int $smsUsedToday = null;
    
    /**
     * @var DateTime|null $voiceDailyResetsAt Next midnight Eastern time, when voice daily capacity resets.
    */
    private ?DateTime $voiceDailyResetsAt = null;
    
    /**
     * @var DateTime|null $voiceHourlyResetsAt Start of the next Eastern time hour, when voice hourly capacity resets.
    */
    private ?DateTime $voiceHourlyResetsAt = null;
    
    /**
     * @var int|null $voiceLimitThisHour Voice limit this hour associated with this Leadping outbound phone number capacity.
    */
    private ?int $voiceLimitThisHour = null;
    
    /**
     * @var int|null $voiceLimitThisMinute Voice limit for one rolling minute.
    */
    private ?int $voiceLimitThisMinute = null;
    
    /**
     * @var int|null $voiceLimitToday Voice limit today associated with this Leadping outbound phone number capacity.
    */
    private ?int $voiceLimitToday = null;
    
    /**
     * @var DateTime|null $voiceMinutelyResetsAt The next time voice capacity becomes available in the rolling minute window.
    */
    private ?DateTime $voiceMinutelyResetsAt = null;
    
    /**
     * @var bool|null $voiceRamping Indicates whether call limits for this phone number are still ramping up.
    */
    private ?bool $voiceRamping = null;
    
    /**
     * @var int|null $voiceRemainingThisHour Voice remaining this hour for the applicable messaging or voice capacity window.
    */
    private ?int $voiceRemainingThisHour = null;
    
    /**
     * @var int|null $voiceRemainingThisMinute Voice remaining in the current rolling minute.
    */
    private ?int $voiceRemainingThisMinute = null;
    
    /**
     * @var int|null $voiceRemainingToday Voice remaining today for the applicable messaging or voice capacity window.
    */
    private ?int $voiceRemainingToday = null;
    
    /**
     * @var int|null $voiceUsedThisHour Voice used this hour for the applicable messaging or voice capacity window.
    */
    private ?int $voiceUsedThisHour = null;
    
    /**
     * @var int|null $voiceUsedThisMinute Voice used in the current rolling minute.
    */
    private ?int $voiceUsedThisMinute = null;
    
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
            'healthReason' => fn(ParseNode $n) => $o->setHealthReason($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(PhoneNumberOutboundHealthStatus::class)),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'smsApproved' => fn(ParseNode $n) => $o->setSmsApproved($n->getBooleanValue()),
            'smsDailyResetsAt' => fn(ParseNode $n) => $o->setSmsDailyResetsAt($n->getDateTimeValue()),
            'smsHourlyResetsAt' => fn(ParseNode $n) => $o->setSmsHourlyResetsAt($n->getDateTimeValue()),
            'smsLimitThisHour' => fn(ParseNode $n) => $o->setSmsLimitThisHour($n->getIntegerValue()),
            'smsLimitThisMinute' => fn(ParseNode $n) => $o->setSmsLimitThisMinute($n->getIntegerValue()),
            'smsLimitToday' => fn(ParseNode $n) => $o->setSmsLimitToday($n->getIntegerValue()),
            'smsMinutelyResetsAt' => fn(ParseNode $n) => $o->setSmsMinutelyResetsAt($n->getDateTimeValue()),
            'smsRamping' => fn(ParseNode $n) => $o->setSmsRamping($n->getBooleanValue()),
            'smsRemainingThisHour' => fn(ParseNode $n) => $o->setSmsRemainingThisHour($n->getIntegerValue()),
            'smsRemainingThisMinute' => fn(ParseNode $n) => $o->setSmsRemainingThisMinute($n->getIntegerValue()),
            'smsRemainingToday' => fn(ParseNode $n) => $o->setSmsRemainingToday($n->getIntegerValue()),
            'smsUsedThisHour' => fn(ParseNode $n) => $o->setSmsUsedThisHour($n->getIntegerValue()),
            'smsUsedThisMinute' => fn(ParseNode $n) => $o->setSmsUsedThisMinute($n->getIntegerValue()),
            'smsUsedToday' => fn(ParseNode $n) => $o->setSmsUsedToday($n->getIntegerValue()),
            'voiceDailyResetsAt' => fn(ParseNode $n) => $o->setVoiceDailyResetsAt($n->getDateTimeValue()),
            'voiceHourlyResetsAt' => fn(ParseNode $n) => $o->setVoiceHourlyResetsAt($n->getDateTimeValue()),
            'voiceLimitThisHour' => fn(ParseNode $n) => $o->setVoiceLimitThisHour($n->getIntegerValue()),
            'voiceLimitThisMinute' => fn(ParseNode $n) => $o->setVoiceLimitThisMinute($n->getIntegerValue()),
            'voiceLimitToday' => fn(ParseNode $n) => $o->setVoiceLimitToday($n->getIntegerValue()),
            'voiceMinutelyResetsAt' => fn(ParseNode $n) => $o->setVoiceMinutelyResetsAt($n->getDateTimeValue()),
            'voiceRamping' => fn(ParseNode $n) => $o->setVoiceRamping($n->getBooleanValue()),
            'voiceRemainingThisHour' => fn(ParseNode $n) => $o->setVoiceRemainingThisHour($n->getIntegerValue()),
            'voiceRemainingThisMinute' => fn(ParseNode $n) => $o->setVoiceRemainingThisMinute($n->getIntegerValue()),
            'voiceRemainingToday' => fn(ParseNode $n) => $o->setVoiceRemainingToday($n->getIntegerValue()),
            'voiceUsedThisHour' => fn(ParseNode $n) => $o->setVoiceUsedThisHour($n->getIntegerValue()),
            'voiceUsedThisMinute' => fn(ParseNode $n) => $o->setVoiceUsedThisMinute($n->getIntegerValue()),
            'voiceUsedToday' => fn(ParseNode $n) => $o->setVoiceUsedToday($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the healthReason property value. Human-readable reason for the current phone-number health state.
     * @return string|null
    */
    public function getHealthReason(): ?string {
        return $this->healthReason;
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
     * Gets the smsApproved property value. Indicates whether this phone number has an approved 10DLC messaging campaign assignment.
     * @return bool|null
    */
    public function getSmsApproved(): ?bool {
        return $this->smsApproved;
    }

    /**
     * Gets the smsDailyResetsAt property value. Next midnight Eastern time, when SMS daily capacity resets.
     * @return DateTime|null
    */
    public function getSmsDailyResetsAt(): ?DateTime {
        return $this->smsDailyResetsAt;
    }

    /**
     * Gets the smsHourlyResetsAt property value. Start of the next Eastern time hour, when SMS hourly capacity resets.
     * @return DateTime|null
    */
    public function getSmsHourlyResetsAt(): ?DateTime {
        return $this->smsHourlyResetsAt;
    }

    /**
     * Gets the smsLimitThisHour property value. Number of SMS limit this hour represented by this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getSmsLimitThisHour(): ?int {
        return $this->smsLimitThisHour;
    }

    /**
     * Gets the smsLimitThisMinute property value. SMS limit for one rolling minute.
     * @return int|null
    */
    public function getSmsLimitThisMinute(): ?int {
        return $this->smsLimitThisMinute;
    }

    /**
     * Gets the smsLimitToday property value. Number of SMS limit today represented by this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getSmsLimitToday(): ?int {
        return $this->smsLimitToday;
    }

    /**
     * Gets the smsMinutelyResetsAt property value. The next time SMS capacity becomes available in the rolling minute window.
     * @return DateTime|null
    */
    public function getSmsMinutelyResetsAt(): ?DateTime {
        return $this->smsMinutelyResetsAt;
    }

    /**
     * Gets the smsRamping property value. Indicates whether SMS limits for this phone number are still ramping up.
     * @return bool|null
    */
    public function getSmsRamping(): ?bool {
        return $this->smsRamping;
    }

    /**
     * Gets the smsRemainingThisHour property value. SMS remaining this hour for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getSmsRemainingThisHour(): ?int {
        return $this->smsRemainingThisHour;
    }

    /**
     * Gets the smsRemainingThisMinute property value. SMS remaining in the current rolling minute.
     * @return int|null
    */
    public function getSmsRemainingThisMinute(): ?int {
        return $this->smsRemainingThisMinute;
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
     * Gets the smsUsedThisMinute property value. SMS used in the current rolling minute.
     * @return int|null
    */
    public function getSmsUsedThisMinute(): ?int {
        return $this->smsUsedThisMinute;
    }

    /**
     * Gets the smsUsedToday property value. SMS used today for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getSmsUsedToday(): ?int {
        return $this->smsUsedToday;
    }

    /**
     * Gets the voiceDailyResetsAt property value. Next midnight Eastern time, when voice daily capacity resets.
     * @return DateTime|null
    */
    public function getVoiceDailyResetsAt(): ?DateTime {
        return $this->voiceDailyResetsAt;
    }

    /**
     * Gets the voiceHourlyResetsAt property value. Start of the next Eastern time hour, when voice hourly capacity resets.
     * @return DateTime|null
    */
    public function getVoiceHourlyResetsAt(): ?DateTime {
        return $this->voiceHourlyResetsAt;
    }

    /**
     * Gets the voiceLimitThisHour property value. Voice limit this hour associated with this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getVoiceLimitThisHour(): ?int {
        return $this->voiceLimitThisHour;
    }

    /**
     * Gets the voiceLimitThisMinute property value. Voice limit for one rolling minute.
     * @return int|null
    */
    public function getVoiceLimitThisMinute(): ?int {
        return $this->voiceLimitThisMinute;
    }

    /**
     * Gets the voiceLimitToday property value. Voice limit today associated with this Leadping outbound phone number capacity.
     * @return int|null
    */
    public function getVoiceLimitToday(): ?int {
        return $this->voiceLimitToday;
    }

    /**
     * Gets the voiceMinutelyResetsAt property value. The next time voice capacity becomes available in the rolling minute window.
     * @return DateTime|null
    */
    public function getVoiceMinutelyResetsAt(): ?DateTime {
        return $this->voiceMinutelyResetsAt;
    }

    /**
     * Gets the voiceRamping property value. Indicates whether call limits for this phone number are still ramping up.
     * @return bool|null
    */
    public function getVoiceRamping(): ?bool {
        return $this->voiceRamping;
    }

    /**
     * Gets the voiceRemainingThisHour property value. Voice remaining this hour for the applicable messaging or voice capacity window.
     * @return int|null
    */
    public function getVoiceRemainingThisHour(): ?int {
        return $this->voiceRemainingThisHour;
    }

    /**
     * Gets the voiceRemainingThisMinute property value. Voice remaining in the current rolling minute.
     * @return int|null
    */
    public function getVoiceRemainingThisMinute(): ?int {
        return $this->voiceRemainingThisMinute;
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
     * Gets the voiceUsedThisMinute property value. Voice used in the current rolling minute.
     * @return int|null
    */
    public function getVoiceUsedThisMinute(): ?int {
        return $this->voiceUsedThisMinute;
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
        $writer->writeStringValue('healthReason', $this->getHealthReason());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeBooleanValue('smsApproved', $this->getSmsApproved());
        $writer->writeDateTimeValue('smsDailyResetsAt', $this->getSmsDailyResetsAt());
        $writer->writeDateTimeValue('smsHourlyResetsAt', $this->getSmsHourlyResetsAt());
        $writer->writeIntegerValue('smsLimitThisHour', $this->getSmsLimitThisHour());
        $writer->writeIntegerValue('smsLimitThisMinute', $this->getSmsLimitThisMinute());
        $writer->writeIntegerValue('smsLimitToday', $this->getSmsLimitToday());
        $writer->writeDateTimeValue('smsMinutelyResetsAt', $this->getSmsMinutelyResetsAt());
        $writer->writeBooleanValue('smsRamping', $this->getSmsRamping());
        $writer->writeIntegerValue('smsRemainingThisHour', $this->getSmsRemainingThisHour());
        $writer->writeIntegerValue('smsRemainingThisMinute', $this->getSmsRemainingThisMinute());
        $writer->writeIntegerValue('smsRemainingToday', $this->getSmsRemainingToday());
        $writer->writeIntegerValue('smsUsedThisHour', $this->getSmsUsedThisHour());
        $writer->writeIntegerValue('smsUsedThisMinute', $this->getSmsUsedThisMinute());
        $writer->writeIntegerValue('smsUsedToday', $this->getSmsUsedToday());
        $writer->writeDateTimeValue('voiceDailyResetsAt', $this->getVoiceDailyResetsAt());
        $writer->writeDateTimeValue('voiceHourlyResetsAt', $this->getVoiceHourlyResetsAt());
        $writer->writeIntegerValue('voiceLimitThisHour', $this->getVoiceLimitThisHour());
        $writer->writeIntegerValue('voiceLimitThisMinute', $this->getVoiceLimitThisMinute());
        $writer->writeIntegerValue('voiceLimitToday', $this->getVoiceLimitToday());
        $writer->writeDateTimeValue('voiceMinutelyResetsAt', $this->getVoiceMinutelyResetsAt());
        $writer->writeBooleanValue('voiceRamping', $this->getVoiceRamping());
        $writer->writeIntegerValue('voiceRemainingThisHour', $this->getVoiceRemainingThisHour());
        $writer->writeIntegerValue('voiceRemainingThisMinute', $this->getVoiceRemainingThisMinute());
        $writer->writeIntegerValue('voiceRemainingToday', $this->getVoiceRemainingToday());
        $writer->writeIntegerValue('voiceUsedThisHour', $this->getVoiceUsedThisHour());
        $writer->writeIntegerValue('voiceUsedThisMinute', $this->getVoiceUsedThisMinute());
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
     * Sets the healthReason property value. Human-readable reason for the current phone-number health state.
     * @param string|null $value Value to set for the healthReason property.
    */
    public function setHealthReason(?string $value): void {
        $this->healthReason = $value;
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
     * Sets the smsApproved property value. Indicates whether this phone number has an approved 10DLC messaging campaign assignment.
     * @param bool|null $value Value to set for the smsApproved property.
    */
    public function setSmsApproved(?bool $value): void {
        $this->smsApproved = $value;
    }

    /**
     * Sets the smsDailyResetsAt property value. Next midnight Eastern time, when SMS daily capacity resets.
     * @param DateTime|null $value Value to set for the smsDailyResetsAt property.
    */
    public function setSmsDailyResetsAt(?DateTime $value): void {
        $this->smsDailyResetsAt = $value;
    }

    /**
     * Sets the smsHourlyResetsAt property value. Start of the next Eastern time hour, when SMS hourly capacity resets.
     * @param DateTime|null $value Value to set for the smsHourlyResetsAt property.
    */
    public function setSmsHourlyResetsAt(?DateTime $value): void {
        $this->smsHourlyResetsAt = $value;
    }

    /**
     * Sets the smsLimitThisHour property value. Number of SMS limit this hour represented by this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the smsLimitThisHour property.
    */
    public function setSmsLimitThisHour(?int $value): void {
        $this->smsLimitThisHour = $value;
    }

    /**
     * Sets the smsLimitThisMinute property value. SMS limit for one rolling minute.
     * @param int|null $value Value to set for the smsLimitThisMinute property.
    */
    public function setSmsLimitThisMinute(?int $value): void {
        $this->smsLimitThisMinute = $value;
    }

    /**
     * Sets the smsLimitToday property value. Number of SMS limit today represented by this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the smsLimitToday property.
    */
    public function setSmsLimitToday(?int $value): void {
        $this->smsLimitToday = $value;
    }

    /**
     * Sets the smsMinutelyResetsAt property value. The next time SMS capacity becomes available in the rolling minute window.
     * @param DateTime|null $value Value to set for the smsMinutelyResetsAt property.
    */
    public function setSmsMinutelyResetsAt(?DateTime $value): void {
        $this->smsMinutelyResetsAt = $value;
    }

    /**
     * Sets the smsRamping property value. Indicates whether SMS limits for this phone number are still ramping up.
     * @param bool|null $value Value to set for the smsRamping property.
    */
    public function setSmsRamping(?bool $value): void {
        $this->smsRamping = $value;
    }

    /**
     * Sets the smsRemainingThisHour property value. SMS remaining this hour for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the smsRemainingThisHour property.
    */
    public function setSmsRemainingThisHour(?int $value): void {
        $this->smsRemainingThisHour = $value;
    }

    /**
     * Sets the smsRemainingThisMinute property value. SMS remaining in the current rolling minute.
     * @param int|null $value Value to set for the smsRemainingThisMinute property.
    */
    public function setSmsRemainingThisMinute(?int $value): void {
        $this->smsRemainingThisMinute = $value;
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
     * Sets the smsUsedThisMinute property value. SMS used in the current rolling minute.
     * @param int|null $value Value to set for the smsUsedThisMinute property.
    */
    public function setSmsUsedThisMinute(?int $value): void {
        $this->smsUsedThisMinute = $value;
    }

    /**
     * Sets the smsUsedToday property value. SMS used today for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the smsUsedToday property.
    */
    public function setSmsUsedToday(?int $value): void {
        $this->smsUsedToday = $value;
    }

    /**
     * Sets the voiceDailyResetsAt property value. Next midnight Eastern time, when voice daily capacity resets.
     * @param DateTime|null $value Value to set for the voiceDailyResetsAt property.
    */
    public function setVoiceDailyResetsAt(?DateTime $value): void {
        $this->voiceDailyResetsAt = $value;
    }

    /**
     * Sets the voiceHourlyResetsAt property value. Start of the next Eastern time hour, when voice hourly capacity resets.
     * @param DateTime|null $value Value to set for the voiceHourlyResetsAt property.
    */
    public function setVoiceHourlyResetsAt(?DateTime $value): void {
        $this->voiceHourlyResetsAt = $value;
    }

    /**
     * Sets the voiceLimitThisHour property value. Voice limit this hour associated with this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the voiceLimitThisHour property.
    */
    public function setVoiceLimitThisHour(?int $value): void {
        $this->voiceLimitThisHour = $value;
    }

    /**
     * Sets the voiceLimitThisMinute property value. Voice limit for one rolling minute.
     * @param int|null $value Value to set for the voiceLimitThisMinute property.
    */
    public function setVoiceLimitThisMinute(?int $value): void {
        $this->voiceLimitThisMinute = $value;
    }

    /**
     * Sets the voiceLimitToday property value. Voice limit today associated with this Leadping outbound phone number capacity.
     * @param int|null $value Value to set for the voiceLimitToday property.
    */
    public function setVoiceLimitToday(?int $value): void {
        $this->voiceLimitToday = $value;
    }

    /**
     * Sets the voiceMinutelyResetsAt property value. The next time voice capacity becomes available in the rolling minute window.
     * @param DateTime|null $value Value to set for the voiceMinutelyResetsAt property.
    */
    public function setVoiceMinutelyResetsAt(?DateTime $value): void {
        $this->voiceMinutelyResetsAt = $value;
    }

    /**
     * Sets the voiceRamping property value. Indicates whether call limits for this phone number are still ramping up.
     * @param bool|null $value Value to set for the voiceRamping property.
    */
    public function setVoiceRamping(?bool $value): void {
        $this->voiceRamping = $value;
    }

    /**
     * Sets the voiceRemainingThisHour property value. Voice remaining this hour for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the voiceRemainingThisHour property.
    */
    public function setVoiceRemainingThisHour(?int $value): void {
        $this->voiceRemainingThisHour = $value;
    }

    /**
     * Sets the voiceRemainingThisMinute property value. Voice remaining in the current rolling minute.
     * @param int|null $value Value to set for the voiceRemainingThisMinute property.
    */
    public function setVoiceRemainingThisMinute(?int $value): void {
        $this->voiceRemainingThisMinute = $value;
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
     * Sets the voiceUsedThisMinute property value. Voice used in the current rolling minute.
     * @param int|null $value Value to set for the voiceUsedThisMinute property.
    */
    public function setVoiceUsedThisMinute(?int $value): void {
        $this->voiceUsedThisMinute = $value;
    }

    /**
     * Sets the voiceUsedToday property value. Voice used today for the applicable messaging or voice capacity window.
     * @param int|null $value Value to set for the voiceUsedToday property.
    */
    public function setVoiceUsedToday(?int $value): void {
        $this->voiceUsedToday = $value;
    }

}
