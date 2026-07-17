<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing Leadping mobile preferences for a single user device.
*/
class MobileDevicePreferences implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var IdNamePair|null $device The ID and name for this device.
    */
    private ?IdNamePair $device = null;
    
    /**
     * @var bool|null $inboundPhoneCallsEnabled Whether inbound phone calls are enabled for this user device.
    */
    private ?bool $inboundPhoneCallsEnabled = null;
    
    /**
     * @var DateTime|null $updatedAt The date and time this device preference was last updated.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * Instantiates a new MobileDevicePreferences and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileDevicePreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileDevicePreferences {
        return new MobileDevicePreferences();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the device property value. The ID and name for this device.
     * @return IdNamePair|null
    */
    public function getDevice(): ?IdNamePair {
        return $this->device;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'inboundPhoneCallsEnabled' => fn(ParseNode $n) => $o->setInboundPhoneCallsEnabled($n->getBooleanValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the inboundPhoneCallsEnabled property value. Whether inbound phone calls are enabled for this user device.
     * @return bool|null
    */
    public function getInboundPhoneCallsEnabled(): ?bool {
        return $this->inboundPhoneCallsEnabled;
    }

    /**
     * Gets the updatedAt property value. The date and time this device preference was last updated.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeBooleanValue('inboundPhoneCallsEnabled', $this->getInboundPhoneCallsEnabled());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
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
     * Sets the device property value. The ID and name for this device.
     * @param IdNamePair|null $value Value to set for the device property.
    */
    public function setDevice(?IdNamePair $value): void {
        $this->device = $value;
    }

    /**
     * Sets the inboundPhoneCallsEnabled property value. Whether inbound phone calls are enabled for this user device.
     * @param bool|null $value Value to set for the inboundPhoneCallsEnabled property.
    */
    public function setInboundPhoneCallsEnabled(?bool $value): void {
        $this->inboundPhoneCallsEnabled = $value;
    }

    /**
     * Sets the updatedAt property value. The date and time this device preference was last updated.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
