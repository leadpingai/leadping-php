<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing suppression check result data returned to callers.
*/
class SuppressionCheckResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowed Whether this ion check result allows ed.
    */
    private ?bool $allowed = null;
    
    /**
     * @var string|null $businessId The business ID associated with this ion check result.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $channel The channel value for this ion check result.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $customerReason The human-readable customer reason explaining this ion check result.
    */
    private ?string $customerReason = null;
    
    /**
     * @var string|null $normalizedEmail The normalized email value for this ion check result.
    */
    private ?string $normalizedEmail = null;
    
    /**
     * @var string|null $normalizedPhoneNumber The phone number associated with this ion check result.
    */
    private ?string $normalizedPhoneNumber = null;
    
    /**
     * @var string|null $recipientIdentifier The recipient identifier value for this ion check result.
    */
    private ?string $recipientIdentifier = null;
    
    /**
     * @var string|null $source The source value on the active suppression entry that blocked this check.
    */
    private ?string $source = null;
    
    /**
     * @var DateTime|null $suppressedAt The date and time the blocking suppression became active.
    */
    private ?DateTime $suppressedAt = null;
    
    /**
     * @var string|null $suppressionEntryId The suppression entry ID associated with this ion check result.
    */
    private ?string $suppressionEntryId = null;
    
    /**
     * Instantiates a new SuppressionCheckResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuppressionCheckResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuppressionCheckResult {
        return new SuppressionCheckResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowed property value. Whether this ion check result allows ed.
     * @return bool|null
    */
    public function getAllowed(): ?bool {
        return $this->allowed;
    }

    /**
     * Gets the businessId property value. The business ID associated with this ion check result.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the channel property value. The channel value for this ion check result.
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * Gets the customerReason property value. The human-readable customer reason explaining this ion check result.
     * @return string|null
    */
    public function getCustomerReason(): ?string {
        return $this->customerReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowed' => fn(ParseNode $n) => $o->setAllowed($n->getBooleanValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'customerReason' => fn(ParseNode $n) => $o->setCustomerReason($n->getStringValue()),
            'normalizedEmail' => fn(ParseNode $n) => $o->setNormalizedEmail($n->getStringValue()),
            'normalizedPhoneNumber' => fn(ParseNode $n) => $o->setNormalizedPhoneNumber($n->getStringValue()),
            'recipientIdentifier' => fn(ParseNode $n) => $o->setRecipientIdentifier($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'suppressedAt' => fn(ParseNode $n) => $o->setSuppressedAt($n->getDateTimeValue()),
            'suppressionEntryId' => fn(ParseNode $n) => $o->setSuppressionEntryId($n->getStringValue()),
        ];
    }

    /**
     * Gets the normalizedEmail property value. The normalized email value for this ion check result.
     * @return string|null
    */
    public function getNormalizedEmail(): ?string {
        return $this->normalizedEmail;
    }

    /**
     * Gets the normalizedPhoneNumber property value. The phone number associated with this ion check result.
     * @return string|null
    */
    public function getNormalizedPhoneNumber(): ?string {
        return $this->normalizedPhoneNumber;
    }

    /**
     * Gets the recipientIdentifier property value. The recipient identifier value for this ion check result.
     * @return string|null
    */
    public function getRecipientIdentifier(): ?string {
        return $this->recipientIdentifier;
    }

    /**
     * Gets the source property value. The source value on the active suppression entry that blocked this check.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the suppressedAt property value. The date and time the blocking suppression became active.
     * @return DateTime|null
    */
    public function getSuppressedAt(): ?DateTime {
        return $this->suppressedAt;
    }

    /**
     * Gets the suppressionEntryId property value. The suppression entry ID associated with this ion check result.
     * @return string|null
    */
    public function getSuppressionEntryId(): ?string {
        return $this->suppressionEntryId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowed', $this->getAllowed());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('customerReason', $this->getCustomerReason());
        $writer->writeStringValue('normalizedEmail', $this->getNormalizedEmail());
        $writer->writeStringValue('normalizedPhoneNumber', $this->getNormalizedPhoneNumber());
        $writer->writeStringValue('recipientIdentifier', $this->getRecipientIdentifier());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeDateTimeValue('suppressedAt', $this->getSuppressedAt());
        $writer->writeStringValue('suppressionEntryId', $this->getSuppressionEntryId());
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
     * Sets the allowed property value. Whether this ion check result allows ed.
     * @param bool|null $value Value to set for the allowed property.
    */
    public function setAllowed(?bool $value): void {
        $this->allowed = $value;
    }

    /**
     * Sets the businessId property value. The business ID associated with this ion check result.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the channel property value. The channel value for this ion check result.
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the customerReason property value. The human-readable customer reason explaining this ion check result.
     * @param string|null $value Value to set for the customerReason property.
    */
    public function setCustomerReason(?string $value): void {
        $this->customerReason = $value;
    }

    /**
     * Sets the normalizedEmail property value. The normalized email value for this ion check result.
     * @param string|null $value Value to set for the normalizedEmail property.
    */
    public function setNormalizedEmail(?string $value): void {
        $this->normalizedEmail = $value;
    }

    /**
     * Sets the normalizedPhoneNumber property value. The phone number associated with this ion check result.
     * @param string|null $value Value to set for the normalizedPhoneNumber property.
    */
    public function setNormalizedPhoneNumber(?string $value): void {
        $this->normalizedPhoneNumber = $value;
    }

    /**
     * Sets the recipientIdentifier property value. The recipient identifier value for this ion check result.
     * @param string|null $value Value to set for the recipientIdentifier property.
    */
    public function setRecipientIdentifier(?string $value): void {
        $this->recipientIdentifier = $value;
    }

    /**
     * Sets the source property value. The source value on the active suppression entry that blocked this check.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the suppressedAt property value. The date and time the blocking suppression became active.
     * @param DateTime|null $value Value to set for the suppressedAt property.
    */
    public function setSuppressedAt(?DateTime $value): void {
        $this->suppressedAt = $value;
    }

    /**
     * Sets the suppressionEntryId property value. The suppression entry ID associated with this ion check result.
     * @param string|null $value Value to set for the suppressionEntryId property.
    */
    public function setSuppressionEntryId(?string $value): void {
        $this->suppressionEntryId = $value;
    }

}
