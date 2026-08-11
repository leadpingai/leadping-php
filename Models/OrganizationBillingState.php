<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Customer-safe billing state for a Leadping organization.
*/
class OrganizationBillingState implements AdditionalDataHolder, Parsable 
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
     * @var DateTime|null $cancelAt UTC timestamp when the active subscription is scheduled to cancel.
    */
    private ?DateTime $cancelAt = null;
    
    /**
     * @var OrganizationBillingState_dunning|null $dunning Customer-safe payment recovery state for the organization.
    */
    private ?OrganizationBillingState_dunning $dunning = null;
    
    /**
     * @var bool|null $hasPaymentMethod Indicates whether the organization has a saved default payment method.
    */
    private ?bool $hasPaymentMethod = null;
    
    /**
     * @var bool|null $hasStripeCustomer Indicates whether the organization has a Stripe customer account.
    */
    private ?bool $hasStripeCustomer = null;
    
    /**
     * @var DateTime|null $lastPaymentMethodEventAt UTC timestamp when Leadping last processed a payment-method event for the organization.
    */
    private ?DateTime $lastPaymentMethodEventAt = null;
    
    /**
     * @var DateTime|null $lastSubscriptionEventAt UTC timestamp when Leadping last processed a subscription event for the organization.
    */
    private ?DateTime $lastSubscriptionEventAt = null;
    
    /**
     * @var int|null $organizationMemberAssignedQuantity Number of user licenses currently assigned to organization members.
    */
    private ?int $organizationMemberAssignedQuantity = null;
    
    /**
     * @var int|null $organizationMemberQuantity Number of user licenses included in the organization's subscription plan.
    */
    private ?int $organizationMemberQuantity = null;
    
    /**
     * @var OrganizationBillingState_pendingBillingPlan|null $pendingBillingPlan Defines the supported Billing Plan values.
    */
    private ?OrganizationBillingState_pendingBillingPlan $pendingBillingPlan = null;
    
    /**
     * @var int|null $phoneNumberQuantity Number of phone numbers included in the organization's subscription plan.
    */
    private ?int $phoneNumberQuantity = null;
    
    /**
     * @var DateTime|null $planPeriodStartAt Start of the current plan billing period.
    */
    private ?DateTime $planPeriodStartAt = null;
    
    /**
     * @var DateTime|null $planRenewalAt Current plan renewal date.
    */
    private ?DateTime $planRenewalAt = null;
    
    /**
     * Instantiates a new OrganizationBillingState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationBillingState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationBillingState {
        return new OrganizationBillingState();
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
     * Gets the cancelAt property value. UTC timestamp when the active subscription is scheduled to cancel.
     * @return DateTime|null
    */
    public function getCancelAt(): ?DateTime {
        return $this->cancelAt;
    }

    /**
     * Gets the dunning property value. Customer-safe payment recovery state for the organization.
     * @return OrganizationBillingState_dunning|null
    */
    public function getDunning(): ?OrganizationBillingState_dunning {
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
            'dunning' => fn(ParseNode $n) => $o->setDunning($n->getObjectValue([OrganizationBillingState_dunning::class, 'createFromDiscriminatorValue'])),
            'hasPaymentMethod' => fn(ParseNode $n) => $o->setHasPaymentMethod($n->getBooleanValue()),
            'hasStripeCustomer' => fn(ParseNode $n) => $o->setHasStripeCustomer($n->getBooleanValue()),
            'lastPaymentMethodEventAt' => fn(ParseNode $n) => $o->setLastPaymentMethodEventAt($n->getDateTimeValue()),
            'lastSubscriptionEventAt' => fn(ParseNode $n) => $o->setLastSubscriptionEventAt($n->getDateTimeValue()),
            'organizationMemberAssignedQuantity' => fn(ParseNode $n) => $o->setOrganizationMemberAssignedQuantity($n->getIntegerValue()),
            'organizationMemberQuantity' => fn(ParseNode $n) => $o->setOrganizationMemberQuantity($n->getIntegerValue()),
            'pendingBillingPlan' => fn(ParseNode $n) => $o->setPendingBillingPlan($n->getEnumValue(OrganizationBillingState_pendingBillingPlan::class)),
            'phoneNumberQuantity' => fn(ParseNode $n) => $o->setPhoneNumberQuantity($n->getIntegerValue()),
            'planPeriodStartAt' => fn(ParseNode $n) => $o->setPlanPeriodStartAt($n->getDateTimeValue()),
            'planRenewalAt' => fn(ParseNode $n) => $o->setPlanRenewalAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the hasPaymentMethod property value. Indicates whether the organization has a saved default payment method.
     * @return bool|null
    */
    public function getHasPaymentMethod(): ?bool {
        return $this->hasPaymentMethod;
    }

    /**
     * Gets the hasStripeCustomer property value. Indicates whether the organization has a Stripe customer account.
     * @return bool|null
    */
    public function getHasStripeCustomer(): ?bool {
        return $this->hasStripeCustomer;
    }

    /**
     * Gets the lastPaymentMethodEventAt property value. UTC timestamp when Leadping last processed a payment-method event for the organization.
     * @return DateTime|null
    */
    public function getLastPaymentMethodEventAt(): ?DateTime {
        return $this->lastPaymentMethodEventAt;
    }

    /**
     * Gets the lastSubscriptionEventAt property value. UTC timestamp when Leadping last processed a subscription event for the organization.
     * @return DateTime|null
    */
    public function getLastSubscriptionEventAt(): ?DateTime {
        return $this->lastSubscriptionEventAt;
    }

    /**
     * Gets the organizationMemberAssignedQuantity property value. Number of user licenses currently assigned to organization members.
     * @return int|null
    */
    public function getOrganizationMemberAssignedQuantity(): ?int {
        return $this->organizationMemberAssignedQuantity;
    }

    /**
     * Gets the organizationMemberQuantity property value. Number of user licenses included in the organization's subscription plan.
     * @return int|null
    */
    public function getOrganizationMemberQuantity(): ?int {
        return $this->organizationMemberQuantity;
    }

    /**
     * Gets the pendingBillingPlan property value. Defines the supported Billing Plan values.
     * @return OrganizationBillingState_pendingBillingPlan|null
    */
    public function getPendingBillingPlan(): ?OrganizationBillingState_pendingBillingPlan {
        return $this->pendingBillingPlan;
    }

    /**
     * Gets the phoneNumberQuantity property value. Number of phone numbers included in the organization's subscription plan.
     * @return int|null
    */
    public function getPhoneNumberQuantity(): ?int {
        return $this->phoneNumberQuantity;
    }

    /**
     * Gets the planPeriodStartAt property value. Start of the current plan billing period.
     * @return DateTime|null
    */
    public function getPlanPeriodStartAt(): ?DateTime {
        return $this->planPeriodStartAt;
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
        $writer->writeIntegerValue('organizationMemberAssignedQuantity', $this->getOrganizationMemberAssignedQuantity());
        $writer->writeIntegerValue('organizationMemberQuantity', $this->getOrganizationMemberQuantity());
        $writer->writeEnumValue('pendingBillingPlan', $this->getPendingBillingPlan());
        $writer->writeIntegerValue('phoneNumberQuantity', $this->getPhoneNumberQuantity());
        $writer->writeDateTimeValue('planPeriodStartAt', $this->getPlanPeriodStartAt());
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
     * Sets the cancelAt property value. UTC timestamp when the active subscription is scheduled to cancel.
     * @param DateTime|null $value Value to set for the cancelAt property.
    */
    public function setCancelAt(?DateTime $value): void {
        $this->cancelAt = $value;
    }

    /**
     * Sets the dunning property value. Customer-safe payment recovery state for the organization.
     * @param OrganizationBillingState_dunning|null $value Value to set for the dunning property.
    */
    public function setDunning(?OrganizationBillingState_dunning $value): void {
        $this->dunning = $value;
    }

    /**
     * Sets the hasPaymentMethod property value. Indicates whether the organization has a saved default payment method.
     * @param bool|null $value Value to set for the hasPaymentMethod property.
    */
    public function setHasPaymentMethod(?bool $value): void {
        $this->hasPaymentMethod = $value;
    }

    /**
     * Sets the hasStripeCustomer property value. Indicates whether the organization has a Stripe customer account.
     * @param bool|null $value Value to set for the hasStripeCustomer property.
    */
    public function setHasStripeCustomer(?bool $value): void {
        $this->hasStripeCustomer = $value;
    }

    /**
     * Sets the lastPaymentMethodEventAt property value. UTC timestamp when Leadping last processed a payment-method event for the organization.
     * @param DateTime|null $value Value to set for the lastPaymentMethodEventAt property.
    */
    public function setLastPaymentMethodEventAt(?DateTime $value): void {
        $this->lastPaymentMethodEventAt = $value;
    }

    /**
     * Sets the lastSubscriptionEventAt property value. UTC timestamp when Leadping last processed a subscription event for the organization.
     * @param DateTime|null $value Value to set for the lastSubscriptionEventAt property.
    */
    public function setLastSubscriptionEventAt(?DateTime $value): void {
        $this->lastSubscriptionEventAt = $value;
    }

    /**
     * Sets the organizationMemberAssignedQuantity property value. Number of user licenses currently assigned to organization members.
     * @param int|null $value Value to set for the organizationMemberAssignedQuantity property.
    */
    public function setOrganizationMemberAssignedQuantity(?int $value): void {
        $this->organizationMemberAssignedQuantity = $value;
    }

    /**
     * Sets the organizationMemberQuantity property value. Number of user licenses included in the organization's subscription plan.
     * @param int|null $value Value to set for the organizationMemberQuantity property.
    */
    public function setOrganizationMemberQuantity(?int $value): void {
        $this->organizationMemberQuantity = $value;
    }

    /**
     * Sets the pendingBillingPlan property value. Defines the supported Billing Plan values.
     * @param OrganizationBillingState_pendingBillingPlan|null $value Value to set for the pendingBillingPlan property.
    */
    public function setPendingBillingPlan(?OrganizationBillingState_pendingBillingPlan $value): void {
        $this->pendingBillingPlan = $value;
    }

    /**
     * Sets the phoneNumberQuantity property value. Number of phone numbers included in the organization's subscription plan.
     * @param int|null $value Value to set for the phoneNumberQuantity property.
    */
    public function setPhoneNumberQuantity(?int $value): void {
        $this->phoneNumberQuantity = $value;
    }

    /**
     * Sets the planPeriodStartAt property value. Start of the current plan billing period.
     * @param DateTime|null $value Value to set for the planPeriodStartAt property.
    */
    public function setPlanPeriodStartAt(?DateTime $value): void {
        $this->planPeriodStartAt = $value;
    }

    /**
     * Sets the planRenewalAt property value. Current plan renewal date.
     * @param DateTime|null $value Value to set for the planRenewalAt property.
    */
    public function setPlanRenewalAt(?DateTime $value): void {
        $this->planRenewalAt = $value;
    }

}
