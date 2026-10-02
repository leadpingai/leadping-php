<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the states an organization member can work; this is not verification of professional licensing.
*/
class OrganizationMemberRequest_stateEligibility extends OrganizationMemberStateEligibility implements Parsable 
{
    /**
     * Instantiates a new OrganizationMemberRequest_stateEligibility and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationMemberRequest_stateEligibility
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationMemberRequest_stateEligibility {
        return new OrganizationMemberRequest_stateEligibility();
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
