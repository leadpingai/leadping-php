<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the input used for change billing plan.
*/
class ChangeBillingPlanRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillingPlan|null $billingPlan Identifies the Leadping subscription plan that determines organization features, allowances, and billing behavior.
    */
    private ?BillingPlan $billingPlan = null;
    
    /**
     * Instantiates a new ChangeBillingPlanRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeBillingPlanRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeBillingPlanRequest {
        return new ChangeBillingPlanRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingPlan property value. Identifies the Leadping subscription plan that determines organization features, allowances, and billing behavior.
     * @return BillingPlan|null
    */
    public function getBillingPlan(): ?BillingPlan {
        return $this->billingPlan;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(BillingPlan::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
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
     * Sets the billingPlan property value. Identifies the Leadping subscription plan that determines organization features, allowances, and billing behavior.
     * @param BillingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?BillingPlan $value): void {
        $this->billingPlan = $value;
    }

}
