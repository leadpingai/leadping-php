<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An auditable lookup, enrichment, or reputation check performed for a phone identity.
*/
class PhoneIdentityLookupAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id The unique identifier of this phone identity lookup action.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $occurredAt The UTC timestamp when the lookup action occurred.
    */
    private ?DateTime $occurredAt = null;
    
    /**
     * @var string|null $provider The provider that performed the phone identity lookup.
    */
    private ?string $provider = null;
    
    /**
     * @var float|null $providerCostAmount The provider cost incurred by this lookup action, in USD.
    */
    private ?float $providerCostAmount = null;
    
    /**
     * @var string|null $providerPricingVersion The provider pricing version used to calculate the lookup cost.
    */
    private ?string $providerPricingVersion = null;
    
    /**
     * @var PhoneIdentityLookupActionStatus|null $status The processing outcome reported for the phone identity lookup.
    */
    private ?PhoneIdentityLookupActionStatus $status = null;
    
    /**
     * @var PhoneIdentityLookupActionType|null $type The category of enrichment, validation, or reputation lookup that was performed.
    */
    private ?PhoneIdentityLookupActionType $type = null;
    
    /**
     * Instantiates a new PhoneIdentityLookupAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneIdentityLookupAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneIdentityLookupAction {
        return new PhoneIdentityLookupAction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'occurredAt' => fn(ParseNode $n) => $o->setOccurredAt($n->getDateTimeValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'providerCostAmount' => fn(ParseNode $n) => $o->setProviderCostAmount($n->getFloatValue()),
            'providerPricingVersion' => fn(ParseNode $n) => $o->setProviderPricingVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PhoneIdentityLookupActionStatus::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(PhoneIdentityLookupActionType::class)),
        ];
    }

    /**
     * Gets the id property value. The unique identifier of this phone identity lookup action.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the occurredAt property value. The UTC timestamp when the lookup action occurred.
     * @return DateTime|null
    */
    public function getOccurredAt(): ?DateTime {
        return $this->occurredAt;
    }

    /**
     * Gets the provider property value. The provider that performed the phone identity lookup.
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the providerCostAmount property value. The provider cost incurred by this lookup action, in USD.
     * @return float|null
    */
    public function getProviderCostAmount(): ?float {
        return $this->providerCostAmount;
    }

    /**
     * Gets the providerPricingVersion property value. The provider pricing version used to calculate the lookup cost.
     * @return string|null
    */
    public function getProviderPricingVersion(): ?string {
        return $this->providerPricingVersion;
    }

    /**
     * Gets the status property value. The processing outcome reported for the phone identity lookup.
     * @return PhoneIdentityLookupActionStatus|null
    */
    public function getStatus(): ?PhoneIdentityLookupActionStatus {
        return $this->status;
    }

    /**
     * Gets the type property value. The category of enrichment, validation, or reputation lookup that was performed.
     * @return PhoneIdentityLookupActionType|null
    */
    public function getType(): ?PhoneIdentityLookupActionType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('occurredAt', $this->getOccurredAt());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeFloatValue('providerCostAmount', $this->getProviderCostAmount());
        $writer->writeStringValue('providerPricingVersion', $this->getProviderPricingVersion());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the id property value. The unique identifier of this phone identity lookup action.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the occurredAt property value. The UTC timestamp when the lookup action occurred.
     * @param DateTime|null $value Value to set for the occurredAt property.
    */
    public function setOccurredAt(?DateTime $value): void {
        $this->occurredAt = $value;
    }

    /**
     * Sets the provider property value. The provider that performed the phone identity lookup.
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the providerCostAmount property value. The provider cost incurred by this lookup action, in USD.
     * @param float|null $value Value to set for the providerCostAmount property.
    */
    public function setProviderCostAmount(?float $value): void {
        $this->providerCostAmount = $value;
    }

    /**
     * Sets the providerPricingVersion property value. The provider pricing version used to calculate the lookup cost.
     * @param string|null $value Value to set for the providerPricingVersion property.
    */
    public function setProviderPricingVersion(?string $value): void {
        $this->providerPricingVersion = $value;
    }

    /**
     * Sets the status property value. The processing outcome reported for the phone identity lookup.
     * @param PhoneIdentityLookupActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PhoneIdentityLookupActionStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. The category of enrichment, validation, or reputation lookup that was performed.
     * @param PhoneIdentityLookupActionType|null $value Value to set for the type property.
    */
    public function setType(?PhoneIdentityLookupActionType $value): void {
        $this->type = $value;
    }

}
