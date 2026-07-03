<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request payload for suppression entry.
*/
class SuppressionEntryRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorId The actor ID associated with this ion entry.
    */
    private ?string $actorId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $businessId The business ID associated with this ion entry.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $channel The channel value for this ion entry.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $email The email address associated with this ion entry.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $phoneNumber The phone number associated with this ion entry.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $providerEventId The provider event ID associated with this ion entry.
    */
    private ?string $providerEventId = null;
    
    /**
     * @var string|null $reason The human-readable reason explaining this ion entry.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $recipientIdentifier The recipient identifier value for this ion entry.
    */
    private ?string $recipientIdentifier = null;
    
    /**
     * @var SuppressionEntryRequest_safeMetadata|null $safeMetadata The safe metadata key-value data carried with this ion entry; values must be safe to expose in API responses.
    */
    private ?SuppressionEntryRequest_safeMetadata $safeMetadata = null;
    
    /**
     * @var string|null $source The source value for this ion entry.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $sourceEventId The source event ID associated with this ion entry.
    */
    private ?string $sourceEventId = null;
    
    /**
     * @var DateTime|null $timestamp The date and time for the timestamp value on this ion entry.
    */
    private ?DateTime $timestamp = null;
    
    /**
     * Instantiates a new SuppressionEntryRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuppressionEntryRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuppressionEntryRequest {
        return new SuppressionEntryRequest();
    }

    /**
     * Gets the actorId property value. The actor ID associated with this ion entry.
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
     * Gets the email property value. The email address associated with this ion entry.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorId' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'providerEventId' => fn(ParseNode $n) => $o->setProviderEventId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'recipientIdentifier' => fn(ParseNode $n) => $o->setRecipientIdentifier($n->getStringValue()),
            'safeMetadata' => fn(ParseNode $n) => $o->setSafeMetadata($n->getObjectValue([SuppressionEntryRequest_safeMetadata::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'sourceEventId' => fn(ParseNode $n) => $o->setSourceEventId($n->getStringValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the phoneNumber property value. The phone number associated with this ion entry.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the providerEventId property value. The provider event ID associated with this ion entry.
     * @return string|null
    */
    public function getProviderEventId(): ?string {
        return $this->providerEventId;
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
     * Gets the safeMetadata property value. The safe metadata key-value data carried with this ion entry; values must be safe to expose in API responses.
     * @return SuppressionEntryRequest_safeMetadata|null
    */
    public function getSafeMetadata(): ?SuppressionEntryRequest_safeMetadata {
        return $this->safeMetadata;
    }

    /**
     * Gets the source property value. The source value for this ion entry.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the sourceEventId property value. The source event ID associated with this ion entry.
     * @return string|null
    */
    public function getSourceEventId(): ?string {
        return $this->sourceEventId;
    }

    /**
     * Gets the timestamp property value. The date and time for the timestamp value on this ion entry.
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
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('providerEventId', $this->getProviderEventId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('recipientIdentifier', $this->getRecipientIdentifier());
        $writer->writeObjectValue('safeMetadata', $this->getSafeMetadata());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('sourceEventId', $this->getSourceEventId());
        $writer->writeDateTimeValue('timestamp', $this->getTimestamp());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorId property value. The actor ID associated with this ion entry.
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
     * Sets the email property value. The email address associated with this ion entry.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the phoneNumber property value. The phone number associated with this ion entry.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the providerEventId property value. The provider event ID associated with this ion entry.
     * @param string|null $value Value to set for the providerEventId property.
    */
    public function setProviderEventId(?string $value): void {
        $this->providerEventId = $value;
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
     * Sets the safeMetadata property value. The safe metadata key-value data carried with this ion entry; values must be safe to expose in API responses.
     * @param SuppressionEntryRequest_safeMetadata|null $value Value to set for the safeMetadata property.
    */
    public function setSafeMetadata(?SuppressionEntryRequest_safeMetadata $value): void {
        $this->safeMetadata = $value;
    }

    /**
     * Sets the source property value. The source value for this ion entry.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceEventId property value. The source event ID associated with this ion entry.
     * @param string|null $value Value to set for the sourceEventId property.
    */
    public function setSourceEventId(?string $value): void {
        $this->sourceEventId = $value;
    }

    /**
     * Sets the timestamp property value. The date and time for the timestamp value on this ion entry.
     * @param DateTime|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?DateTime $value): void {
        $this->timestamp = $value;
    }

}
