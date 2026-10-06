<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes Leadping Consent certificate data used in Leadping API requests and responses.
*/
class UserNotificationPreferences_smsConsentCertificate extends LeadpingConsentCertificate implements Parsable 
{
    /**
     * Instantiates a new UserNotificationPreferences_smsConsentCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserNotificationPreferences_smsConsentCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserNotificationPreferences_smsConsentCertificate {
        return new UserNotificationPreferences_smsConsentCertificate();
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
