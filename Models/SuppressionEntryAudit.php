<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Records one auditable change to a recipient suppression entry.
*/
class SuppressionEntryAudit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorId Identifier of the user or system actor responsible for the change.
    */
    private ?string $actorId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id Unique identifier for this suppression audit record.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $reason Human-readable reason recorded for the suppression change.
    */
    private ?string $reason = null;
    
    /**
     * @var SuppressionEntryAudit_safeMetadata|null $safeMetadata Non-sensitive metadata that provides additional audit context.
    */
    private ?SuppressionEntryAudit_safeMetadata $safeMetadata = null;
    
    /**
     * @var string|null $source System or workflow that initiated the change.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $status Suppression status established by this change, such as active or released.
    */
    private ?string $status = null;
    
    /**
     * @var DateTime|null $timestamp UTC timestamp when the suppression change occurred.
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
     * Gets the actorId property value. Identifier of the user or system actor responsible for the change.
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
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'safeMetadata' => fn(ParseNode $n) => $o->setSafeMetadata($n->getObjectValue([SuppressionEntryAudit_safeMetadata::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier for this suppression audit record.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the reason property value. Human-readable reason recorded for the suppression change.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the safeMetadata property value. Non-sensitive metadata that provides additional audit context.
     * @return SuppressionEntryAudit_safeMetadata|null
    */
    public function getSafeMetadata(): ?SuppressionEntryAudit_safeMetadata {
        return $this->safeMetadata;
    }

    /**
     * Gets the source property value. System or workflow that initiated the change.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the status property value. Suppression status established by this change, such as active or released.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the timestamp property value. UTC timestamp when the suppression change occurred.
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
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeObjectValue('safeMetadata', $this->getSafeMetadata());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorId property value. Identifier of the user or system actor responsible for the change.
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
     * Sets the id property value. Unique identifier for this suppression audit record.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the reason property value. Human-readable reason recorded for the suppression change.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the safeMetadata property value. Non-sensitive metadata that provides additional audit context.
     * @param SuppressionEntryAudit_safeMetadata|null $value Value to set for the safeMetadata property.
    */
    public function setSafeMetadata(?SuppressionEntryAudit_safeMetadata $value): void {
        $this->safeMetadata = $value;
    }

    /**
     * Sets the source property value. System or workflow that initiated the change.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. Suppression status established by this change, such as active or released.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the timestamp property value. UTC timestamp when the suppression change occurred.
     * @param DateTime|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?DateTime $value): void {
        $this->timestamp = $value;
    }

}
