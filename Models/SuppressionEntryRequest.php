<?php

namespace Leadping\OpenApiClient\Models;

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
     * @var string|null $reason The human-readable reason explaining this ion entry.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $recipientIdentifier The recipient identifier value for this ion entry.
    */
    private ?string $recipientIdentifier = null;
    
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
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'recipientIdentifier' => fn(ParseNode $n) => $o->setRecipientIdentifier($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('recipientIdentifier', $this->getRecipientIdentifier());
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

}
