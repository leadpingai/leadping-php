<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Stripe billing state owned by a business account.
*/
class BusinessStripeInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $businessUserSubscriptionItemId The businessUserSubscriptionItemId property
    */
    private ?string $businessUserSubscriptionItemId = null;
    
    /**
     * @var DateTime|null $cancelAt The cancelAt property
    */
    private ?DateTime $cancelAt = null;
    
    /**
     * @var BusinessStripeInfo_cancellation|null $cancellation Captured subscription cancellation feedback for retention and churn analysis.
    */
    private ?BusinessStripeInfo_cancellation $cancellation = null;
    
    /**
     * @var string|null $customerId The customerId property
    */
    private ?string $customerId = null;
    
    /**
     * @var string|null $defaultPaymentMethodId The defaultPaymentMethodId property
    */
    private ?string $defaultPaymentMethodId = null;
    
    /**
     * @var BusinessStripeInfo_dunning|null $dunning Dunning state recorded after a failed recurring payment.
    */
    private ?BusinessStripeInfo_dunning $dunning = null;
    
    /**
     * @var DateTime|null $lastPaymentMethodEventAt The lastPaymentMethodEventAt property
    */
    private ?DateTime $lastPaymentMethodEventAt = null;
    
    /**
     * @var DateTime|null $lastSubscriptionEventAt The lastSubscriptionEventAt property
    */
    private ?DateTime $lastSubscriptionEventAt = null;
    
    /**
     * @var string|null $phoneSubscriptionId The phoneSubscriptionId property
    */
    private ?string $phoneSubscriptionId = null;
    
    /**
     * @var string|null $phoneSubscriptionItemId The phoneSubscriptionItemId property
    */
    private ?string $phoneSubscriptionItemId = null;
    
    /**
     * @var string|null $planSubscriptionId The planSubscriptionId property
    */
    private ?string $planSubscriptionId = null;
    
    /**
     * @var string|null $planSubscriptionItemId The planSubscriptionItemId property
    */
    private ?string $planSubscriptionItemId = null;
    
    /**
     * @var array<string>|null $subscriptionIds The subscriptionIds property
    */
    private ?array $subscriptionIds = null;
    
    /**
     * Instantiates a new BusinessStripeInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessStripeInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessStripeInfo {
        return new BusinessStripeInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the businessUserSubscriptionItemId property value. The businessUserSubscriptionItemId property
     * @return string|null
    */
    public function getBusinessUserSubscriptionItemId(): ?string {
        return $this->businessUserSubscriptionItemId;
    }

    /**
     * Gets the cancelAt property value. The cancelAt property
     * @return DateTime|null
    */
    public function getCancelAt(): ?DateTime {
        return $this->cancelAt;
    }

    /**
     * Gets the cancellation property value. Captured subscription cancellation feedback for retention and churn analysis.
     * @return BusinessStripeInfo_cancellation|null
    */
    public function getCancellation(): ?BusinessStripeInfo_cancellation {
        return $this->cancellation;
    }

    /**
     * Gets the customerId property value. The customerId property
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the defaultPaymentMethodId property value. The defaultPaymentMethodId property
     * @return string|null
    */
    public function getDefaultPaymentMethodId(): ?string {
        return $this->defaultPaymentMethodId;
    }

    /**
     * Gets the dunning property value. Dunning state recorded after a failed recurring payment.
     * @return BusinessStripeInfo_dunning|null
    */
    public function getDunning(): ?BusinessStripeInfo_dunning {
        return $this->dunning;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'businessUserSubscriptionItemId' => fn(ParseNode $n) => $o->setBusinessUserSubscriptionItemId($n->getStringValue()),
            'cancelAt' => fn(ParseNode $n) => $o->setCancelAt($n->getDateTimeValue()),
            'cancellation' => fn(ParseNode $n) => $o->setCancellation($n->getObjectValue([BusinessStripeInfo_cancellation::class, 'createFromDiscriminatorValue'])),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'defaultPaymentMethodId' => fn(ParseNode $n) => $o->setDefaultPaymentMethodId($n->getStringValue()),
            'dunning' => fn(ParseNode $n) => $o->setDunning($n->getObjectValue([BusinessStripeInfo_dunning::class, 'createFromDiscriminatorValue'])),
            'lastPaymentMethodEventAt' => fn(ParseNode $n) => $o->setLastPaymentMethodEventAt($n->getDateTimeValue()),
            'lastSubscriptionEventAt' => fn(ParseNode $n) => $o->setLastSubscriptionEventAt($n->getDateTimeValue()),
            'phoneSubscriptionId' => fn(ParseNode $n) => $o->setPhoneSubscriptionId($n->getStringValue()),
            'phoneSubscriptionItemId' => fn(ParseNode $n) => $o->setPhoneSubscriptionItemId($n->getStringValue()),
            'planSubscriptionId' => fn(ParseNode $n) => $o->setPlanSubscriptionId($n->getStringValue()),
            'planSubscriptionItemId' => fn(ParseNode $n) => $o->setPlanSubscriptionItemId($n->getStringValue()),
            'subscriptionIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubscriptionIds($val);
            },
        ];
    }

    /**
     * Gets the lastPaymentMethodEventAt property value. The lastPaymentMethodEventAt property
     * @return DateTime|null
    */
    public function getLastPaymentMethodEventAt(): ?DateTime {
        return $this->lastPaymentMethodEventAt;
    }

    /**
     * Gets the lastSubscriptionEventAt property value. The lastSubscriptionEventAt property
     * @return DateTime|null
    */
    public function getLastSubscriptionEventAt(): ?DateTime {
        return $this->lastSubscriptionEventAt;
    }

    /**
     * Gets the phoneSubscriptionId property value. The phoneSubscriptionId property
     * @return string|null
    */
    public function getPhoneSubscriptionId(): ?string {
        return $this->phoneSubscriptionId;
    }

    /**
     * Gets the phoneSubscriptionItemId property value. The phoneSubscriptionItemId property
     * @return string|null
    */
    public function getPhoneSubscriptionItemId(): ?string {
        return $this->phoneSubscriptionItemId;
    }

    /**
     * Gets the planSubscriptionId property value. The planSubscriptionId property
     * @return string|null
    */
    public function getPlanSubscriptionId(): ?string {
        return $this->planSubscriptionId;
    }

    /**
     * Gets the planSubscriptionItemId property value. The planSubscriptionItemId property
     * @return string|null
    */
    public function getPlanSubscriptionItemId(): ?string {
        return $this->planSubscriptionItemId;
    }

    /**
     * Gets the subscriptionIds property value. The subscriptionIds property
     * @return array<string>|null
    */
    public function getSubscriptionIds(): ?array {
        return $this->subscriptionIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('businessUserSubscriptionItemId', $this->getBusinessUserSubscriptionItemId());
        $writer->writeDateTimeValue('cancelAt', $this->getCancelAt());
        $writer->writeObjectValue('cancellation', $this->getCancellation());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('defaultPaymentMethodId', $this->getDefaultPaymentMethodId());
        $writer->writeObjectValue('dunning', $this->getDunning());
        $writer->writeDateTimeValue('lastPaymentMethodEventAt', $this->getLastPaymentMethodEventAt());
        $writer->writeDateTimeValue('lastSubscriptionEventAt', $this->getLastSubscriptionEventAt());
        $writer->writeStringValue('phoneSubscriptionId', $this->getPhoneSubscriptionId());
        $writer->writeStringValue('phoneSubscriptionItemId', $this->getPhoneSubscriptionItemId());
        $writer->writeStringValue('planSubscriptionId', $this->getPlanSubscriptionId());
        $writer->writeStringValue('planSubscriptionItemId', $this->getPlanSubscriptionItemId());
        $writer->writeCollectionOfPrimitiveValues('subscriptionIds', $this->getSubscriptionIds());
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
     * Sets the businessUserSubscriptionItemId property value. The businessUserSubscriptionItemId property
     * @param string|null $value Value to set for the businessUserSubscriptionItemId property.
    */
    public function setBusinessUserSubscriptionItemId(?string $value): void {
        $this->businessUserSubscriptionItemId = $value;
    }

    /**
     * Sets the cancelAt property value. The cancelAt property
     * @param DateTime|null $value Value to set for the cancelAt property.
    */
    public function setCancelAt(?DateTime $value): void {
        $this->cancelAt = $value;
    }

    /**
     * Sets the cancellation property value. Captured subscription cancellation feedback for retention and churn analysis.
     * @param BusinessStripeInfo_cancellation|null $value Value to set for the cancellation property.
    */
    public function setCancellation(?BusinessStripeInfo_cancellation $value): void {
        $this->cancellation = $value;
    }

    /**
     * Sets the customerId property value. The customerId property
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->customerId = $value;
    }

    /**
     * Sets the defaultPaymentMethodId property value. The defaultPaymentMethodId property
     * @param string|null $value Value to set for the defaultPaymentMethodId property.
    */
    public function setDefaultPaymentMethodId(?string $value): void {
        $this->defaultPaymentMethodId = $value;
    }

    /**
     * Sets the dunning property value. Dunning state recorded after a failed recurring payment.
     * @param BusinessStripeInfo_dunning|null $value Value to set for the dunning property.
    */
    public function setDunning(?BusinessStripeInfo_dunning $value): void {
        $this->dunning = $value;
    }

    /**
     * Sets the lastPaymentMethodEventAt property value. The lastPaymentMethodEventAt property
     * @param DateTime|null $value Value to set for the lastPaymentMethodEventAt property.
    */
    public function setLastPaymentMethodEventAt(?DateTime $value): void {
        $this->lastPaymentMethodEventAt = $value;
    }

    /**
     * Sets the lastSubscriptionEventAt property value. The lastSubscriptionEventAt property
     * @param DateTime|null $value Value to set for the lastSubscriptionEventAt property.
    */
    public function setLastSubscriptionEventAt(?DateTime $value): void {
        $this->lastSubscriptionEventAt = $value;
    }

    /**
     * Sets the phoneSubscriptionId property value. The phoneSubscriptionId property
     * @param string|null $value Value to set for the phoneSubscriptionId property.
    */
    public function setPhoneSubscriptionId(?string $value): void {
        $this->phoneSubscriptionId = $value;
    }

    /**
     * Sets the phoneSubscriptionItemId property value. The phoneSubscriptionItemId property
     * @param string|null $value Value to set for the phoneSubscriptionItemId property.
    */
    public function setPhoneSubscriptionItemId(?string $value): void {
        $this->phoneSubscriptionItemId = $value;
    }

    /**
     * Sets the planSubscriptionId property value. The planSubscriptionId property
     * @param string|null $value Value to set for the planSubscriptionId property.
    */
    public function setPlanSubscriptionId(?string $value): void {
        $this->planSubscriptionId = $value;
    }

    /**
     * Sets the planSubscriptionItemId property value. The planSubscriptionItemId property
     * @param string|null $value Value to set for the planSubscriptionItemId property.
    */
    public function setPlanSubscriptionItemId(?string $value): void {
        $this->planSubscriptionItemId = $value;
    }

    /**
     * Sets the subscriptionIds property value. The subscriptionIds property
     * @param array<string>|null $value Value to set for the subscriptionIds property.
    */
    public function setSubscriptionIds(?array $value): void {
        $this->subscriptionIds = $value;
    }

}
