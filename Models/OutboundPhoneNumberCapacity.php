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
     * @var int|null $smsRemainingToday The smsRemainingToday property
    */
    private ?int $smsRemainingToday = null;
    
    /**
     * @var int|null $voiceRemainingToday The voiceRemainingToday property
    */
    private ?int $voiceRemainingToday = null;
    
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
            'smsRemainingToday' => fn(ParseNode $n) => $o->setSmsRemainingToday($n->getIntegerValue()),
            'voiceRemainingToday' => fn(ParseNode $n) => $o->setVoiceRemainingToday($n->getIntegerValue()),
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
     * Gets the smsRemainingToday property value. The smsRemainingToday property
     * @return int|null
    */
    public function getSmsRemainingToday(): ?int {
        return $this->smsRemainingToday;
    }

    /**
     * Gets the voiceRemainingToday property value. The voiceRemainingToday property
     * @return int|null
    */
    public function getVoiceRemainingToday(): ?int {
        return $this->voiceRemainingToday;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeIntegerValue('smsRemainingToday', $this->getSmsRemainingToday());
        $writer->writeIntegerValue('voiceRemainingToday', $this->getVoiceRemainingToday());
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
     * Sets the smsRemainingToday property value. The smsRemainingToday property
     * @param int|null $value Value to set for the smsRemainingToday property.
    */
    public function setSmsRemainingToday(?int $value): void {
        $this->smsRemainingToday = $value;
    }

    /**
     * Sets the voiceRemainingToday property value. The voiceRemainingToday property
     * @param int|null $value Value to set for the voiceRemainingToday property.
    */
    public function setVoiceRemainingToday(?int $value): void {
        $this->voiceRemainingToday = $value;
    }

}
