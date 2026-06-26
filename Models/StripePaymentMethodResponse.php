<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing stripe payment method data used by Leadping API contracts.
*/
class StripePaymentMethodResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $brand The brand value for this Stripe payment method.
    */
    private ?string $brand = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this Stripe payment method.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var int|null $expMonth The exp month value for this Stripe payment method.
    */
    private ?int $expMonth = null;
    
    /**
     * @var int|null $expYear The exp year value for this Stripe payment method.
    */
    private ?int $expYear = null;
    
    /**
     * @var string|null $id The unique ID for this Stripe payment method.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isDefault Whether this Stripe payment method is default.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var string|null $last4 The date and time for the last4 value on this Stripe payment method.
    */
    private ?string $last4 = null;
    
    /**
     * Instantiates a new StripePaymentMethodResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StripePaymentMethodResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StripePaymentMethodResponse {
        return new StripePaymentMethodResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brand property value. The brand value for this Stripe payment method.
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this Stripe payment method.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the expMonth property value. The exp month value for this Stripe payment method.
     * @return int|null
    */
    public function getExpMonth(): ?int {
        return $this->expMonth;
    }

    /**
     * Gets the expYear property value. The exp year value for this Stripe payment method.
     * @return int|null
    */
    public function getExpYear(): ?int {
        return $this->expYear;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'expMonth' => fn(ParseNode $n) => $o->setExpMonth($n->getIntegerValue()),
            'expYear' => fn(ParseNode $n) => $o->setExpYear($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'last4' => fn(ParseNode $n) => $o->setLast4($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this Stripe payment method.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isDefault property value. Whether this Stripe payment method is default.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the last4 property value. The date and time for the last4 value on this Stripe payment method.
     * @return string|null
    */
    public function getLast4(): ?string {
        return $this->last4;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeIntegerValue('expMonth', $this->getExpMonth());
        $writer->writeIntegerValue('expYear', $this->getExpYear());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeStringValue('last4', $this->getLast4());
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
     * Sets the brand property value. The brand value for this Stripe payment method.
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the createdAt property value. The date and time for the created at value on this Stripe payment method.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the expMonth property value. The exp month value for this Stripe payment method.
     * @param int|null $value Value to set for the expMonth property.
    */
    public function setExpMonth(?int $value): void {
        $this->expMonth = $value;
    }

    /**
     * Sets the expYear property value. The exp year value for this Stripe payment method.
     * @param int|null $value Value to set for the expYear property.
    */
    public function setExpYear(?int $value): void {
        $this->expYear = $value;
    }

    /**
     * Sets the id property value. The unique ID for this Stripe payment method.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isDefault property value. Whether this Stripe payment method is default.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the last4 property value. The date and time for the last4 value on this Stripe payment method.
     * @param string|null $value Value to set for the last4 property.
    */
    public function setLast4(?string $value): void {
        $this->last4 = $value;
    }

}
