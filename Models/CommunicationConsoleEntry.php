<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes one durable diagnostic entry from the processing of a communication.
*/
class CommunicationConsoleEntry implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id Unique identifier of this diagnostic console entry.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message User-safe diagnostic message describing what occurred at this stage.
    */
    private ?string $message = null;
    
    /**
     * @var DateTime|null $occurredAt UTC timestamp when this communication-processing event occurred.
    */
    private ?DateTime $occurredAt = null;
    
    /**
     * @var string|null $stage Communication-processing stage that produced the entry, such as validation, routing, or provider delivery.
    */
    private ?string $stage = null;
    
    /**
     * @var string|null $status Outcome or state recorded for this processing stage.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new CommunicationConsoleEntry and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommunicationConsoleEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommunicationConsoleEntry {
        return new CommunicationConsoleEntry();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'occurredAt' => fn(ParseNode $n) => $o->setOccurredAt($n->getDateTimeValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier of this diagnostic console entry.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the message property value. User-safe diagnostic message describing what occurred at this stage.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the occurredAt property value. UTC timestamp when this communication-processing event occurred.
     * @return DateTime|null
    */
    public function getOccurredAt(): ?DateTime {
        return $this->occurredAt;
    }

    /**
     * Gets the stage property value. Communication-processing stage that produced the entry, such as validation, routing, or provider delivery.
     * @return string|null
    */
    public function getStage(): ?string {
        return $this->stage;
    }

    /**
     * Gets the status property value. Outcome or state recorded for this processing stage.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeDateTimeValue('occurredAt', $this->getOccurredAt());
        $writer->writeStringValue('stage', $this->getStage());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the id property value. Unique identifier of this diagnostic console entry.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. User-safe diagnostic message describing what occurred at this stage.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the occurredAt property value. UTC timestamp when this communication-processing event occurred.
     * @param DateTime|null $value Value to set for the occurredAt property.
    */
    public function setOccurredAt(?DateTime $value): void {
        $this->occurredAt = $value;
    }

    /**
     * Sets the stage property value. Communication-processing stage that produced the entry, such as validation, routing, or provider delivery.
     * @param string|null $value Value to set for the stage property.
    */
    public function setStage(?string $value): void {
        $this->stage = $value;
    }

    /**
     * Sets the status property value. Outcome or state recorded for this processing stage.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
