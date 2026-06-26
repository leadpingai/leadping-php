<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request payload for change billing plan.
*/
class ChangeBillingPlanRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillingPlan|null $billingPlan The billing plan value for this billing plan.
    */
    private ?BillingPlan $billingPlan = null;
    
    /**
     * @var string|null $userId The user ID associated with this billing plan.
    */
    private ?string $userId = null;
    
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
     * Gets the billingPlan property value. The billing plan value for this billing plan.
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
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the userId property value. The user ID associated with this billing plan.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
        $writer->writeStringValue('userId', $this->getUserId());
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
     * Sets the billingPlan property value. The billing plan value for this billing plan.
     * @param BillingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?BillingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the userId property value. The user ID associated with this billing plan.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
