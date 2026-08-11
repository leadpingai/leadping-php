<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
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
     * @var DateTime|null $smsMinutelyResetsAt The next time SMS capacity becomes available in the rolling minute window.
    */
    private ?DateTime $smsMinutelyResetsAt = null;
    
    /**
     * @var bool|null $smsRamping Indicates whether SMS limits for this phone number are still ramping up.
    */
    private ?bool $smsRamping = null;
    
    /**
     * @var DateTime|null $voiceDailyResetsAt Next midnight Eastern time, when voice daily capacity resets.
    */
    private ?DateTime $voiceDailyResetsAt = null;
    
    /**
     * @var DateTime|null $voiceHourlyResetsAt Start of the next Eastern time hour, when voice hourly capacity resets.
    */
    private ?DateTime $voiceHourlyResetsAt = null;
    
    /**
     * @var DateTime|null $voiceMinutelyResetsAt The next time voice capacity becomes available in the rolling minute window.
    */
    private ?DateTime $voiceMinutelyResetsAt = null;
    
    /**
     * @var bool|null $voiceRamping Indicates whether call limits for this phone number are still ramping up.
    */
    private ?bool $voiceRamping = null;
    
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
            'smsMinutelyResetsAt' => fn(ParseNode $n) => $o->setSmsMinutelyResetsAt($n->getDateTimeValue()),
            'smsRamping' => fn(ParseNode $n) => $o->setSmsRamping($n->getBooleanValue()),
            'voiceDailyResetsAt' => fn(ParseNode $n) => $o->setVoiceDailyResetsAt($n->getDateTimeValue()),
            'voiceHourlyResetsAt' => fn(ParseNode $n) => $o->setVoiceHourlyResetsAt($n->getDateTimeValue()),
            'voiceMinutelyResetsAt' => fn(ParseNode $n) => $o->setVoiceMinutelyResetsAt($n->getDateTimeValue()),
            'voiceRamping' => fn(ParseNode $n) => $o->setVoiceRamping($n->getBooleanValue()),
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
        $writer->writeDateTimeValue('smsMinutelyResetsAt', $this->getSmsMinutelyResetsAt());
        $writer->writeBooleanValue('smsRamping', $this->getSmsRamping());
        $writer->writeDateTimeValue('voiceDailyResetsAt', $this->getVoiceDailyResetsAt());
        $writer->writeDateTimeValue('voiceHourlyResetsAt', $this->getVoiceHourlyResetsAt());
        $writer->writeDateTimeValue('voiceMinutelyResetsAt', $this->getVoiceMinutelyResetsAt());
        $writer->writeBooleanValue('voiceRamping', $this->getVoiceRamping());
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

}
