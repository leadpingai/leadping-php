<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing ion entry audit data used by Leadping API contracts.
*/
class SuppressionEntryAudit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorId The actor ID associated with this ion entry audit.
    */
    private ?string $actorId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id The unique ID for this ion entry audit.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $providerEventId The provider event ID associated with this ion entry audit.
    */
    private ?string $providerEventId = null;
    
    /**
     * @var string|null $reason The human-readable reason explaining this ion entry audit.
    */
    private ?string $reason = null;
    
    /**
     * @var SuppressionEntryAudit_safeMetadata|null $safeMetadata The safe metadata key-value data carried with this ion entry audit; values must be safe to expose in API responses.
    */
    private ?SuppressionEntryAudit_safeMetadata $safeMetadata = null;
    
    /**
     * @var string|null $source The source value for this ion entry audit.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $sourceEventId The source event ID associated with this ion entry audit.
    */
    private ?string $sourceEventId = null;
    
    /**
     * @var string|null $status The current status for this ion entry audit.
    */
    private ?string $status = null;
    
    /**
     * @var DateTime|null $timestamp The date and time for the timestamp value on this ion entry audit.
    */
    private ?DateTime $timestamp = null;
    
    /**
     * Instantiates a new SuppressionEntryAudit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuppressionEntryAudit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuppressionEntryAudit {
        return new SuppressionEntryAudit();
    }

    /**
     * Gets the actorId property value. The actor ID associated with this ion entry audit.
     * @return string|null
    */
    public function getActorId(): ?string {
        return $this->actorId;
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
            'actorId' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'providerEventId' => fn(ParseNode $n) => $o->setProviderEventId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'safeMetadata' => fn(ParseNode $n) => $o->setSafeMetadata($n->getObjectValue([SuppressionEntryAudit_safeMetadata::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'sourceEventId' => fn(ParseNode $n) => $o->setSourceEventId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this ion entry audit.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the providerEventId property value. The provider event ID associated with this ion entry audit.
     * @return string|null
    */
    public function getProviderEventId(): ?string {
        return $this->providerEventId;
    }

    /**
     * Gets the reason property value. The human-readable reason explaining this ion entry audit.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the safeMetadata property value. The safe metadata key-value data carried with this ion entry audit; values must be safe to expose in API responses.
     * @return SuppressionEntryAudit_safeMetadata|null
    */
    public function getSafeMetadata(): ?SuppressionEntryAudit_safeMetadata {
        return $this->safeMetadata;
    }

    /**
     * Gets the source property value. The source value for this ion entry audit.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the sourceEventId property value. The source event ID associated with this ion entry audit.
     * @return string|null
    */
    public function getSourceEventId(): ?string {
        return $this->sourceEventId;
    }

    /**
     * Gets the status property value. The current status for this ion entry audit.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the timestamp property value. The date and time for the timestamp value on this ion entry audit.
     * @return DateTime|null
    */
    public function getTimestamp(): ?DateTime {
        return $this->timestamp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actorId', $this->getActorId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('providerEventId', $this->getProviderEventId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeObjectValue('safeMetadata', $this->getSafeMetadata());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('sourceEventId', $this->getSourceEventId());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorId property value. The actor ID associated with this ion entry audit.
     * @param string|null $value Value to set for the actorId property.
    */
    public function setActorId(?string $value): void {
        $this->actorId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the id property value. The unique ID for this ion entry audit.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the providerEventId property value. The provider event ID associated with this ion entry audit.
     * @param string|null $value Value to set for the providerEventId property.
    */
    public function setProviderEventId(?string $value): void {
        $this->providerEventId = $value;
    }

    /**
     * Sets the reason property value. The human-readable reason explaining this ion entry audit.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the safeMetadata property value. The safe metadata key-value data carried with this ion entry audit; values must be safe to expose in API responses.
     * @param SuppressionEntryAudit_safeMetadata|null $value Value to set for the safeMetadata property.
    */
    public function setSafeMetadata(?SuppressionEntryAudit_safeMetadata $value): void {
        $this->safeMetadata = $value;
    }

    /**
     * Sets the source property value. The source value for this ion entry audit.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceEventId property value. The source event ID associated with this ion entry audit.
     * @param string|null $value Value to set for the sourceEventId property.
    */
    public function setSourceEventId(?string $value): void {
        $this->sourceEventId = $value;
    }

    /**
     * Sets the status property value. The current status for this ion entry audit.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the timestamp property value. The date and time for the timestamp value on this ion entry audit.
     * @param DateTime|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?DateTime $value): void {
        $this->timestamp = $value;
    }

}
