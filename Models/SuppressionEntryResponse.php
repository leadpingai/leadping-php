<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a recipient suppression that prevents outreach through one or more communication channels.
*/
class SuppressionEntryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<SuppressionEntryAudit>|null $audit Chronological audit history of suppression and release changes.
    */
    private ?array $audit = null;
    
    /**
     * @var string|null $channel Communication channel affected by the suppression, such as SMS, voice, email, or all channels.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the suppression entry.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $normalizedEmail Suppressed email address normalized for matching.
    */
    private ?string $normalizedEmail = null;
    
    /**
     * @var string|null $normalizedPhoneNumber Suppressed phone number normalized to a consistent format.
    */
    private ?string $normalizedPhoneNumber = null;
    
    /**
     * @var string|null $organizationId Identifier of the organization that owns the suppression entry.
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $reason Human-readable reason the recipient was suppressed or subsequently released.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $recipientIdentifier Provider or customer identifier used to recognize the suppressed recipient.
    */
    private ?string $recipientIdentifier = null;
    
    /**
     * @var DateTime|null $releasedAt UTC timestamp when the suppression was released, or null while it remains active.
    */
    private ?DateTime $releasedAt = null;
    
    /**
     * @var string|null $source System or workflow that created the suppression.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $status Current lifecycle state, such as active or released.
    */
    private ?string $status = null;
    
    /**
     * @var DateTime|null $suppressedAt UTC timestamp when the suppression became active.
    */
    private ?DateTime $suppressedAt = null;
    
    /**
     * Instantiates a new SuppressionEntryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuppressionEntryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuppressionEntryResponse {
        return new SuppressionEntryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audit property value. Chronological audit history of suppression and release changes.
     * @return array<SuppressionEntryAudit>|null
    */
    public function getAudit(): ?array {
        return $this->audit;
    }

    /**
     * Gets the channel property value. Communication channel affected by the suppression, such as SMS, voice, email, or all channels.
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
            'audit' => fn(ParseNode $n) => $o->setAudit($n->getCollectionOfObjectValues([SuppressionEntryAudit::class, 'createFromDiscriminatorValue'])),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'normalizedEmail' => fn(ParseNode $n) => $o->setNormalizedEmail($n->getStringValue()),
            'normalizedPhoneNumber' => fn(ParseNode $n) => $o->setNormalizedPhoneNumber($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'recipientIdentifier' => fn(ParseNode $n) => $o->setRecipientIdentifier($n->getStringValue()),
            'releasedAt' => fn(ParseNode $n) => $o->setReleasedAt($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'suppressedAt' => fn(ParseNode $n) => $o->setSuppressedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the suppression entry.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the normalizedEmail property value. Suppressed email address normalized for matching.
     * @return string|null
    */
    public function getNormalizedEmail(): ?string {
        return $this->normalizedEmail;
    }

    /**
     * Gets the normalizedPhoneNumber property value. Suppressed phone number normalized to a consistent format.
     * @return string|null
    */
    public function getNormalizedPhoneNumber(): ?string {
        return $this->normalizedPhoneNumber;
    }

    /**
     * Gets the organizationId property value. Identifier of the organization that owns the suppression entry.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the reason property value. Human-readable reason the recipient was suppressed or subsequently released.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the recipientIdentifier property value. Provider or customer identifier used to recognize the suppressed recipient.
     * @return string|null
    */
    public function getRecipientIdentifier(): ?string {
        return $this->recipientIdentifier;
    }

    /**
     * Gets the releasedAt property value. UTC timestamp when the suppression was released, or null while it remains active.
     * @return DateTime|null
    */
    public function getReleasedAt(): ?DateTime {
        return $this->releasedAt;
    }

    /**
     * Gets the source property value. System or workflow that created the suppression.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the status property value. Current lifecycle state, such as active or released.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the suppressedAt property value. UTC timestamp when the suppression became active.
     * @return DateTime|null
    */
    public function getSuppressedAt(): ?DateTime {
        return $this->suppressedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('audit', $this->getAudit());
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('normalizedEmail', $this->getNormalizedEmail());
        $writer->writeStringValue('normalizedPhoneNumber', $this->getNormalizedPhoneNumber());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('recipientIdentifier', $this->getRecipientIdentifier());
        $writer->writeDateTimeValue('releasedAt', $this->getReleasedAt());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeDateTimeValue('suppressedAt', $this->getSuppressedAt());
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
     * Sets the audit property value. Chronological audit history of suppression and release changes.
     * @param array<SuppressionEntryAudit>|null $value Value to set for the audit property.
    */
    public function setAudit(?array $value): void {
        $this->audit = $value;
    }

    /**
     * Sets the channel property value. Communication channel affected by the suppression, such as SMS, voice, email, or all channels.
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the suppression entry.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the normalizedEmail property value. Suppressed email address normalized for matching.
     * @param string|null $value Value to set for the normalizedEmail property.
    */
    public function setNormalizedEmail(?string $value): void {
        $this->normalizedEmail = $value;
    }

    /**
     * Sets the normalizedPhoneNumber property value. Suppressed phone number normalized to a consistent format.
     * @param string|null $value Value to set for the normalizedPhoneNumber property.
    */
    public function setNormalizedPhoneNumber(?string $value): void {
        $this->normalizedPhoneNumber = $value;
    }

    /**
     * Sets the organizationId property value. Identifier of the organization that owns the suppression entry.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the reason property value. Human-readable reason the recipient was suppressed or subsequently released.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the recipientIdentifier property value. Provider or customer identifier used to recognize the suppressed recipient.
     * @param string|null $value Value to set for the recipientIdentifier property.
    */
    public function setRecipientIdentifier(?string $value): void {
        $this->recipientIdentifier = $value;
    }

    /**
     * Sets the releasedAt property value. UTC timestamp when the suppression was released, or null while it remains active.
     * @param DateTime|null $value Value to set for the releasedAt property.
    */
    public function setReleasedAt(?DateTime $value): void {
        $this->releasedAt = $value;
    }

    /**
     * Sets the source property value. System or workflow that created the suppression.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. Current lifecycle state, such as active or released.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the suppressedAt property value. UTC timestamp when the suppression became active.
     * @param DateTime|null $value Value to set for the suppressedAt property.
    */
    public function setSuppressedAt(?DateTime $value): void {
        $this->suppressedAt = $value;
    }

}
