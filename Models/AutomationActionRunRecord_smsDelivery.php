<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Delivery outcome of the persisted SMS. Workflow steps advance on command acceptance, without waiting for delivery.
*/
class AutomationActionRunRecord_smsDelivery extends AutomationSmsDeliveryRecord implements Parsable 
{
    /**
     * Instantiates a new AutomationActionRunRecord_smsDelivery and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationActionRunRecord_smsDelivery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationActionRunRecord_smsDelivery {
        return new AutomationActionRunRecord_smsDelivery();
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
