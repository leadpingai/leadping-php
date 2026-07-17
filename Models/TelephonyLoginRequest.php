<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request model for telephony login token generation.
*/
class TelephonyLoginRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var TelephonyLoginRequest_device|null $device The ID and name for this device.
    */
    private ?TelephonyLoginRequest_device $device = null;
    
    /**
     * Instantiates a new TelephonyLoginRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelephonyLoginRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelephonyLoginRequest {
        return new TelephonyLoginRequest();
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
     * @return TelephonyLoginRequest_device|null
    */
    public function getDevice(): ?TelephonyLoginRequest_device {
        return $this->device;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([TelephonyLoginRequest_device::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('device', $this->getDevice());
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
     * @param TelephonyLoginRequest_device|null $value Value to set for the device property.
    */
    public function setDevice(?TelephonyLoginRequest_device $value): void {
        $this->device = $value;
    }

}
