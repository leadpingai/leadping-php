<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for phone number billing attribution data.
*/
class PhoneNumberBillingAttribution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $businessId Business ID responsible for billing this phone number.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $businessName Business display name used in phone number billing records.
    */
    private ?string $businessName = null;
    
    /**
     * @var string|null $channel Communication channel used for this phone number billing attribution, such as SMS or voice.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $subscriptionItemId Stripe subscription item identifier used for phone number billing.
    */
    private ?string $subscriptionItemId = null;
    
    /**
     * @var string|null $userId User ID associated with phone number billing responsibility, when applicable.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userName Display name for the user connected to this phone number billing attribution.
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new PhoneNumberBillingAttribution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberBillingAttribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberBillingAttribution {
        return new PhoneNumberBillingAttribution();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the businessId property value. Business ID responsible for billing this phone number.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the businessName property value. Business display name used in phone number billing records.
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the channel property value. Communication channel used for this phone number billing attribution, such as SMS or voice.
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'subscriptionItemId' => fn(ParseNode $n) => $o->setSubscriptionItemId($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ];
    }

    /**
     * Gets the subscriptionItemId property value. Stripe subscription item identifier used for phone number billing.
     * @return string|null
    */
    public function getSubscriptionItemId(): ?string {
        return $this->subscriptionItemId;
    }

    /**
     * Gets the userId property value. User ID associated with phone number billing responsibility, when applicable.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. Display name for the user connected to this phone number billing attribution.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('subscriptionItemId', $this->getSubscriptionItemId());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
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
     * Sets the businessId property value. Business ID responsible for billing this phone number.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the businessName property value. Business display name used in phone number billing records.
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the channel property value. Communication channel used for this phone number billing attribution, such as SMS or voice.
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the subscriptionItemId property value. Stripe subscription item identifier used for phone number billing.
     * @param string|null $value Value to set for the subscriptionItemId property.
    */
    public function setSubscriptionItemId(?string $value): void {
        $this->subscriptionItemId = $value;
    }

    /**
     * Sets the userId property value. User ID associated with phone number billing responsibility, when applicable.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. Display name for the user connected to this phone number billing attribution.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->userName = $value;
    }

}
