<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * History record schema for Leadping API phone number event record data exposed in automation and audit views.
*/
class PhoneNumberEventRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actorId Actor ID for the user, system, or integration that performed the action.
    */
    private ?string $actorId = null;
    
    /**
     * @var string|null $actorName Display name for the actor that performed the action.
    */
    private ?string $actorName = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this phone number event record was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $details Additional human-readable details that explain this phone number event record.
    */
    private ?string $details = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this phone number event record.
    */
    private ?string $id = null;
    
    /**
     * @var PhoneNumberEventRecord_state|null $state Leadping-owned inventory state for phone-number assignment and routing.
    */
    private ?PhoneNumberEventRecord_state $state = null;
    
    /**
     * @var string|null $title Short title displayed for this phone number event record.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $type Type classification used to route and interpret this phone number event record in the Leadping API.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new PhoneNumberEventRecord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberEventRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberEventRecord {
        return new PhoneNumberEventRecord();
    }

    /**
     * Gets the actorId property value. Actor ID for the user, system, or integration that performed the action.
     * @return string|null
    */
    public function getActorId(): ?string {
        return $this->actorId;
    }

    /**
     * Gets the actorName property value. Display name for the actor that performed the action.
     * @return string|null
    */
    public function getActorName(): ?string {
        return $this->actorName;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this phone number event record was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the details property value. Additional human-readable details that explain this phone number event record.
     * @return string|null
    */
    public function getDetails(): ?string {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorId' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'actorName' => fn(ParseNode $n) => $o->setActorName($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PhoneNumberEventRecord_state::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this phone number event record.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the state property value. Leadping-owned inventory state for phone-number assignment and routing.
     * @return PhoneNumberEventRecord_state|null
    */
    public function getState(): ?PhoneNumberEventRecord_state {
        return $this->state;
    }

    /**
     * Gets the title property value. Short title displayed for this phone number event record.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this phone number event record in the Leadping API.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actorId', $this->getActorId());
        $writer->writeStringValue('actorName', $this->getActorName());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('details', $this->getDetails());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorId property value. Actor ID for the user, system, or integration that performed the action.
     * @param string|null $value Value to set for the actorId property.
    */
    public function setActorId(?string $value): void {
        $this->actorId = $value;
    }

    /**
     * Sets the actorName property value. Display name for the actor that performed the action.
     * @param string|null $value Value to set for the actorName property.
    */
    public function setActorName(?string $value): void {
        $this->actorName = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this phone number event record was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the details property value. Additional human-readable details that explain this phone number event record.
     * @param string|null $value Value to set for the details property.
    */
    public function setDetails(?string $value): void {
        $this->details = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this phone number event record.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the state property value. Leadping-owned inventory state for phone-number assignment and routing.
     * @param PhoneNumberEventRecord_state|null $value Value to set for the state property.
    */
    public function setState(?PhoneNumberEventRecord_state $value): void {
        $this->state = $value;
    }

    /**
     * Sets the title property value. Short title displayed for this phone number event record.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this phone number event record in the Leadping API.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
