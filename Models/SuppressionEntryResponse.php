<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing suppression entry data returned to callers.
*/
class SuppressionEntryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<SuppressionEntryAudit>|null $audit The audit included with this ion entry.
    */
    private ?array $audit = null;
    
    /**
     * @var string|null $businessId The business ID associated with this ion entry.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $channel The channel value for this ion entry.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $id The unique ID for this ion entry.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $normalizedEmail The normalized email value for this ion entry.
    */
    private ?string $normalizedEmail = null;
    
    /**
     * @var string|null $normalizedPhoneNumber The phone number associated with this ion entry.
    */
    private ?string $normalizedPhoneNumber = null;
    
    /**
     * @var string|null $reason The human-readable reason explaining this ion entry.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $recipientIdentifier The recipient identifier value for this ion entry.
    */
    private ?string $recipientIdentifier = null;
    
    /**
     * @var DateTime|null $releasedAt The date and time for the released at value on this ion entry.
    */
    private ?DateTime $releasedAt = null;
    
    /**
     * @var string|null $source The source value for this ion entry.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $status The current status for this ion entry.
    */
    private ?string $status = null;
    
    /**
     * @var DateTime|null $suppressedAt The date and time for the suppressed at value on this ion entry.
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
     * Gets the audit property value. The audit included with this ion entry.
     * @return array<SuppressionEntryAudit>|null
    */
    public function getAudit(): ?array {
        return $this->audit;
    }

    /**
     * Gets the businessId property value. The business ID associated with this ion entry.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the channel property value. The channel value for this ion entry.
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
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'normalizedEmail' => fn(ParseNode $n) => $o->setNormalizedEmail($n->getStringValue()),
            'normalizedPhoneNumber' => fn(ParseNode $n) => $o->setNormalizedPhoneNumber($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'recipientIdentifier' => fn(ParseNode $n) => $o->setRecipientIdentifier($n->getStringValue()),
            'releasedAt' => fn(ParseNode $n) => $o->setReleasedAt($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'suppressedAt' => fn(ParseNode $n) => $o->setSuppressedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this ion entry.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the normalizedEmail property value. The normalized email value for this ion entry.
     * @return string|null
    */
    public function getNormalizedEmail(): ?string {
        return $this->normalizedEmail;
    }

    /**
     * Gets the normalizedPhoneNumber property value. The phone number associated with this ion entry.
     * @return string|null
    */
    public function getNormalizedPhoneNumber(): ?string {
        return $this->normalizedPhoneNumber;
    }

    /**
     * Gets the reason property value. The human-readable reason explaining this ion entry.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the recipientIdentifier property value. The recipient identifier value for this ion entry.
     * @return string|null
    */
    public function getRecipientIdentifier(): ?string {
        return $this->recipientIdentifier;
    }

    /**
     * Gets the releasedAt property value. The date and time for the released at value on this ion entry.
     * @return DateTime|null
    */
    public function getReleasedAt(): ?DateTime {
        return $this->releasedAt;
    }

    /**
     * Gets the source property value. The source value for this ion entry.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the status property value. The current status for this ion entry.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the suppressedAt property value. The date and time for the suppressed at value on this ion entry.
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
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('normalizedEmail', $this->getNormalizedEmail());
        $writer->writeStringValue('normalizedPhoneNumber', $this->getNormalizedPhoneNumber());
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
     * Sets the audit property value. The audit included with this ion entry.
     * @param array<SuppressionEntryAudit>|null $value Value to set for the audit property.
    */
    public function setAudit(?array $value): void {
        $this->audit = $value;
    }

    /**
     * Sets the businessId property value. The business ID associated with this ion entry.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the channel property value. The channel value for this ion entry.
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the id property value. The unique ID for this ion entry.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the normalizedEmail property value. The normalized email value for this ion entry.
     * @param string|null $value Value to set for the normalizedEmail property.
    */
    public function setNormalizedEmail(?string $value): void {
        $this->normalizedEmail = $value;
    }

    /**
     * Sets the normalizedPhoneNumber property value. The phone number associated with this ion entry.
     * @param string|null $value Value to set for the normalizedPhoneNumber property.
    */
    public function setNormalizedPhoneNumber(?string $value): void {
        $this->normalizedPhoneNumber = $value;
    }

    /**
     * Sets the reason property value. The human-readable reason explaining this ion entry.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the recipientIdentifier property value. The recipient identifier value for this ion entry.
     * @param string|null $value Value to set for the recipientIdentifier property.
    */
    public function setRecipientIdentifier(?string $value): void {
        $this->recipientIdentifier = $value;
    }

    /**
     * Sets the releasedAt property value. The date and time for the released at value on this ion entry.
     * @param DateTime|null $value Value to set for the releasedAt property.
    */
    public function setReleasedAt(?DateTime $value): void {
        $this->releasedAt = $value;
    }

    /**
     * Sets the source property value. The source value for this ion entry.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. The current status for this ion entry.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the suppressedAt property value. The date and time for the suppressed at value on this ion entry.
     * @param DateTime|null $value Value to set for the suppressedAt property.
    */
    public function setSuppressedAt(?DateTime $value): void {
        $this->suppressedAt = $value;
    }

}
