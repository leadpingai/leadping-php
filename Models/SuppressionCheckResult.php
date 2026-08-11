<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Reports whether Leadping may contact a recipient and identifies the active suppression when contact is blocked.
*/
class SuppressionCheckResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowed Whether outreach to the recipient is allowed for the requested channel.
    */
    private ?bool $allowed = null;
    
    /**
     * @var string|null $channel Communication channel evaluated by the suppression check.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $customerReason Customer-safe explanation of why contact is blocked or allowed.
    */
    private ?string $customerReason = null;
    
    /**
     * @var string|null $normalizedEmail Email address used for matching, normalized for comparison.
    */
    private ?string $normalizedEmail = null;
    
    /**
     * @var string|null $normalizedPhoneNumber Phone number used for matching, normalized to a consistent format.
    */
    private ?string $normalizedPhoneNumber = null;
    
    /**
     * @var string|null $organizationId Identifier of the organization whose suppression list was checked.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $recipientIdentifier Provider or customer identifier used to match the recipient.
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
     * @var string|null $suppressionEntryId Identifier of the active suppression that blocked contact, when one matched.
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
     * Gets the allowed property value. Whether outreach to the recipient is allowed for the requested channel.
     * @return bool|null
    */
    public function getAllowed(): ?bool {
        return $this->allowed;
    }

    /**
     * Gets the channel property value. Communication channel evaluated by the suppression check.
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * Gets the customerReason property value. Customer-safe explanation of why contact is blocked or allowed.
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
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'customerReason' => fn(ParseNode $n) => $o->setCustomerReason($n->getStringValue()),
            'normalizedEmail' => fn(ParseNode $n) => $o->setNormalizedEmail($n->getStringValue()),
            'normalizedPhoneNumber' => fn(ParseNode $n) => $o->setNormalizedPhoneNumber($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'recipientIdentifier' => fn(ParseNode $n) => $o->setRecipientIdentifier($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'suppressedAt' => fn(ParseNode $n) => $o->setSuppressedAt($n->getDateTimeValue()),
            'suppressionEntryId' => fn(ParseNode $n) => $o->setSuppressionEntryId($n->getStringValue()),
        ];
    }

    /**
     * Gets the normalizedEmail property value. Email address used for matching, normalized for comparison.
     * @return string|null
    */
    public function getNormalizedEmail(): ?string {
        return $this->normalizedEmail;
    }

    /**
     * Gets the normalizedPhoneNumber property value. Phone number used for matching, normalized to a consistent format.
     * @return string|null
    */
    public function getNormalizedPhoneNumber(): ?string {
        return $this->normalizedPhoneNumber;
    }

    /**
     * Gets the organizationId property value. Identifier of the organization whose suppression list was checked.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the recipientIdentifier property value. Provider or customer identifier used to match the recipient.
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
     * Gets the suppressionEntryId property value. Identifier of the active suppression that blocked contact, when one matched.
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
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('customerReason', $this->getCustomerReason());
        $writer->writeStringValue('normalizedEmail', $this->getNormalizedEmail());
        $writer->writeStringValue('normalizedPhoneNumber', $this->getNormalizedPhoneNumber());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
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
     * Sets the allowed property value. Whether outreach to the recipient is allowed for the requested channel.
     * @param bool|null $value Value to set for the allowed property.
    */
    public function setAllowed(?bool $value): void {
        $this->allowed = $value;
    }

    /**
     * Sets the channel property value. Communication channel evaluated by the suppression check.
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the customerReason property value. Customer-safe explanation of why contact is blocked or allowed.
     * @param string|null $value Value to set for the customerReason property.
    */
    public function setCustomerReason(?string $value): void {
        $this->customerReason = $value;
    }

    /**
     * Sets the normalizedEmail property value. Email address used for matching, normalized for comparison.
     * @param string|null $value Value to set for the normalizedEmail property.
    */
    public function setNormalizedEmail(?string $value): void {
        $this->normalizedEmail = $value;
    }

    /**
     * Sets the normalizedPhoneNumber property value. Phone number used for matching, normalized to a consistent format.
     * @param string|null $value Value to set for the normalizedPhoneNumber property.
    */
    public function setNormalizedPhoneNumber(?string $value): void {
        $this->normalizedPhoneNumber = $value;
    }

    /**
     * Sets the organizationId property value. Identifier of the organization whose suppression list was checked.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the recipientIdentifier property value. Provider or customer identifier used to match the recipient.
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
     * Sets the suppressionEntryId property value. Identifier of the active suppression that blocked contact, when one matched.
     * @param string|null $value Value to set for the suppressionEntryId property.
    */
    public function setSuppressionEntryId(?string $value): void {
        $this->suppressionEntryId = $value;
    }

}
