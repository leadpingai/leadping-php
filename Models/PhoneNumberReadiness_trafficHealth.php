<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Hourly local reputation-risk estimate using 24-hour, seven-day, and thirty-day traffic evidence.
*/
class PhoneNumberReadiness_trafficHealth extends PhoneNumberTrafficHealth implements Parsable 
{
    /**
     * Instantiates a new PhoneNumberReadiness_trafficHealth and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberReadiness_trafficHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberReadiness_trafficHealth {
        return new PhoneNumberReadiness_trafficHealth();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
