<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Customer-safe billing state for a Leadping business.
*/
class BusinessBillingState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $billingPlanChangeEffectiveAt Date and time when the scheduled billing plan change takes effect.
    */
    private ?DateTime $billingPlanChangeEffectiveAt = null;
    
    /**
     * @var DateTime|null $cancelAt Gets or sets when the active subscription is scheduled to cancel.
    */
    private ?DateTime $cancelAt = null;
    
    /**
     * @var BusinessBillingState_dunning|null $dunning Gets or sets the customer-safe payment recovery state for the business.
    */
    private ?BusinessBillingState_dunning $dunning = null;
    
    /**
     * @var bool|null $hasPaymentMethod Indicates whether the business has a saved default payment method.
    */
    private ?bool $hasPaymentMethod = null;
    
    /**
     * @var bool|null $hasStripeCustomer Indicates whether the business has a Stripe customer account.
    */
    private ?bool $hasStripeCustomer = null;
    
    /**
     * @var DateTime|null $lastPaymentMethodEventAt Gets or sets when Leadping last processed a payment-method event for the business.
    */
    private ?DateTime $lastPaymentMethodEventAt = null;
    
    /**
     * @var DateTime|null $lastSubscriptionEventAt Gets or sets when Leadping last processed a subscription event for the business.
    */
    private ?DateTime $lastSubscriptionEventAt = null;
    
    /**
     * @var BusinessBillingState_pendingBillingPlan|null $pendingBillingPlan Defines the supported Billing Plan values.
    */
    private ?BusinessBillingState_pendingBillingPlan $pendingBillingPlan = null;
    
    /**
     * @var DateTime|null $planRenewalAt Current plan renewal date.
    */
    private ?DateTime $planRenewalAt = null;
    
    /**
     * Instantiates a new BusinessBillingState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessBillingState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessBillingState {
        return new BusinessBillingState();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingPlanChangeEffectiveAt property value. Date and time when the scheduled billing plan change takes effect.
     * @return DateTime|null
    */
    public function getBillingPlanChangeEffectiveAt(): ?DateTime {
        return $this->billingPlanChangeEffectiveAt;
    }

    /**
     * Gets the cancelAt property value. Gets or sets when the active subscription is scheduled to cancel.
     * @return DateTime|null
    */
    public function getCancelAt(): ?DateTime {
        return $this->cancelAt;
    }

    /**
     * Gets the dunning property value. Gets or sets the customer-safe payment recovery state for the business.
     * @return BusinessBillingState_dunning|null
    */
    public function getDunning(): ?BusinessBillingState_dunning {
        return $this->dunning;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingPlanChangeEffectiveAt' => fn(ParseNode $n) => $o->setBillingPlanChangeEffectiveAt($n->getDateTimeValue()),
            'cancelAt' => fn(ParseNode $n) => $o->setCancelAt($n->getDateTimeValue()),
            'dunning' => fn(ParseNode $n) => $o->setDunning($n->getObjectValue([BusinessBillingState_dunning::class, 'createFromDiscriminatorValue'])),
            'hasPaymentMethod' => fn(ParseNode $n) => $o->setHasPaymentMethod($n->getBooleanValue()),
            'hasStripeCustomer' => fn(ParseNode $n) => $o->setHasStripeCustomer($n->getBooleanValue()),
            'lastPaymentMethodEventAt' => fn(ParseNode $n) => $o->setLastPaymentMethodEventAt($n->getDateTimeValue()),
            'lastSubscriptionEventAt' => fn(ParseNode $n) => $o->setLastSubscriptionEventAt($n->getDateTimeValue()),
            'pendingBillingPlan' => fn(ParseNode $n) => $o->setPendingBillingPlan($n->getEnumValue(BusinessBillingState_pendingBillingPlan::class)),
            'planRenewalAt' => fn(ParseNode $n) => $o->setPlanRenewalAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the hasPaymentMethod property value. Indicates whether the business has a saved default payment method.
     * @return bool|null
    */
    public function getHasPaymentMethod(): ?bool {
        return $this->hasPaymentMethod;
    }

    /**
     * Gets the hasStripeCustomer property value. Indicates whether the business has a Stripe customer account.
     * @return bool|null
    */
    public function getHasStripeCustomer(): ?bool {
        return $this->hasStripeCustomer;
    }

    /**
     * Gets the lastPaymentMethodEventAt property value. Gets or sets when Leadping last processed a payment-method event for the business.
     * @return DateTime|null
    */
    public function getLastPaymentMethodEventAt(): ?DateTime {
        return $this->lastPaymentMethodEventAt;
    }

    /**
     * Gets the lastSubscriptionEventAt property value. Gets or sets when Leadping last processed a subscription event for the business.
     * @return DateTime|null
    */
    public function getLastSubscriptionEventAt(): ?DateTime {
        return $this->lastSubscriptionEventAt;
    }

    /**
     * Gets the pendingBillingPlan property value. Defines the supported Billing Plan values.
     * @return BusinessBillingState_pendingBillingPlan|null
    */
    public function getPendingBillingPlan(): ?BusinessBillingState_pendingBillingPlan {
        return $this->pendingBillingPlan;
    }

    /**
     * Gets the planRenewalAt property value. Current plan renewal date.
     * @return DateTime|null
    */
    public function getPlanRenewalAt(): ?DateTime {
        return $this->planRenewalAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('billingPlanChangeEffectiveAt', $this->getBillingPlanChangeEffectiveAt());
        $writer->writeDateTimeValue('cancelAt', $this->getCancelAt());
        $writer->writeObjectValue('dunning', $this->getDunning());
        $writer->writeBooleanValue('hasPaymentMethod', $this->getHasPaymentMethod());
        $writer->writeBooleanValue('hasStripeCustomer', $this->getHasStripeCustomer());
        $writer->writeDateTimeValue('lastPaymentMethodEventAt', $this->getLastPaymentMethodEventAt());
        $writer->writeDateTimeValue('lastSubscriptionEventAt', $this->getLastSubscriptionEventAt());
        $writer->writeEnumValue('pendingBillingPlan', $this->getPendingBillingPlan());
        $writer->writeDateTimeValue('planRenewalAt', $this->getPlanRenewalAt());
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
     * Sets the billingPlanChangeEffectiveAt property value. Date and time when the scheduled billing plan change takes effect.
     * @param DateTime|null $value Value to set for the billingPlanChangeEffectiveAt property.
    */
    public function setBillingPlanChangeEffectiveAt(?DateTime $value): void {
        $this->billingPlanChangeEffectiveAt = $value;
    }

    /**
     * Sets the cancelAt property value. Gets or sets when the active subscription is scheduled to cancel.
     * @param DateTime|null $value Value to set for the cancelAt property.
    */
    public function setCancelAt(?DateTime $value): void {
        $this->cancelAt = $value;
    }

    /**
     * Sets the dunning property value. Gets or sets the customer-safe payment recovery state for the business.
     * @param BusinessBillingState_dunning|null $value Value to set for the dunning property.
    */
    public function setDunning(?BusinessBillingState_dunning $value): void {
        $this->dunning = $value;
    }

    /**
     * Sets the hasPaymentMethod property value. Indicates whether the business has a saved default payment method.
     * @param bool|null $value Value to set for the hasPaymentMethod property.
    */
    public function setHasPaymentMethod(?bool $value): void {
        $this->hasPaymentMethod = $value;
    }

    /**
     * Sets the hasStripeCustomer property value. Indicates whether the business has a Stripe customer account.
     * @param bool|null $value Value to set for the hasStripeCustomer property.
    */
    public function setHasStripeCustomer(?bool $value): void {
        $this->hasStripeCustomer = $value;
    }

    /**
     * Sets the lastPaymentMethodEventAt property value. Gets or sets when Leadping last processed a payment-method event for the business.
     * @param DateTime|null $value Value to set for the lastPaymentMethodEventAt property.
    */
    public function setLastPaymentMethodEventAt(?DateTime $value): void {
        $this->lastPaymentMethodEventAt = $value;
    }

    /**
     * Sets the lastSubscriptionEventAt property value. Gets or sets when Leadping last processed a subscription event for the business.
     * @param DateTime|null $value Value to set for the lastSubscriptionEventAt property.
    */
    public function setLastSubscriptionEventAt(?DateTime $value): void {
        $this->lastSubscriptionEventAt = $value;
    }

    /**
     * Sets the pendingBillingPlan property value. Defines the supported Billing Plan values.
     * @param BusinessBillingState_pendingBillingPlan|null $value Value to set for the pendingBillingPlan property.
    */
    public function setPendingBillingPlan(?BusinessBillingState_pendingBillingPlan $value): void {
        $this->pendingBillingPlan = $value;
    }

    /**
     * Sets the planRenewalAt property value. Current plan renewal date.
     * @param DateTime|null $value Value to set for the planRenewalAt property.
    */
    public function setPlanRenewalAt(?DateTime $value): void {
        $this->planRenewalAt = $value;
    }

}
