<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing SMS warmup action data returned to callers.
*/
class SmsWarmupActionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var SmsWarmupActionType|null $actionType The action type classification for this SMS warmup action.
    */
    private ?SmsWarmupActionType $actionType = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $body The body value for this SMS warmup action.
    */
    private ?string $body = null;
    
    /**
     * @var string|null $conversationId The conversation ID associated with this SMS warmup action.
    */
    private ?string $conversationId = null;
    
    /**
     * @var DateTime|null $executedAt The date and time for the executed at value on this SMS warmup action.
    */
    private ?DateTime $executedAt = null;
    
    /**
     * @var string|null $failureReason The human-readable failure reason explaining this SMS warmup action.
    */
    private ?string $failureReason = null;
    
    /**
     * @var string|null $fromPhoneNumber The phone number associated with this SMS warmup action.
    */
    private ?string $fromPhoneNumber = null;
    
    /**
     * @var string|null $id The unique ID for this SMS warmup action.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $scheduledAt The date and time for the scheduled at value on this SMS warmup action.
    */
    private ?DateTime $scheduledAt = null;
    
    /**
     * @var SmsWarmupActionStatus|null $status The current status for this SMS warmup action.
    */
    private ?SmsWarmupActionStatus $status = null;
    
    /**
     * @var string|null $toPhoneNumber The phone number associated with this SMS warmup action.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * Instantiates a new SmsWarmupActionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsWarmupActionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsWarmupActionResponse {
        return new SmsWarmupActionResponse();
    }

    /**
     * Gets the actionType property value. The action type classification for this SMS warmup action.
     * @return SmsWarmupActionType|null
    */
    public function getActionType(): ?SmsWarmupActionType {
        return $this->actionType;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the body property value. The body value for this SMS warmup action.
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * Gets the conversationId property value. The conversation ID associated with this SMS warmup action.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the executedAt property value. The date and time for the executed at value on this SMS warmup action.
     * @return DateTime|null
    */
    public function getExecutedAt(): ?DateTime {
        return $this->executedAt;
    }

    /**
     * Gets the failureReason property value. The human-readable failure reason explaining this SMS warmup action.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(SmsWarmupActionType::class)),
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'executedAt' => fn(ParseNode $n) => $o->setExecutedAt($n->getDateTimeValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'scheduledAt' => fn(ParseNode $n) => $o->setScheduledAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SmsWarmupActionStatus::class)),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the fromPhoneNumber property value. The phone number associated with this SMS warmup action.
     * @return string|null
    */
    public function getFromPhoneNumber(): ?string {
        return $this->fromPhoneNumber;
    }

    /**
     * Gets the id property value. The unique ID for this SMS warmup action.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the scheduledAt property value. The date and time for the scheduled at value on this SMS warmup action.
     * @return DateTime|null
    */
    public function getScheduledAt(): ?DateTime {
        return $this->scheduledAt;
    }

    /**
     * Gets the status property value. The current status for this SMS warmup action.
     * @return SmsWarmupActionStatus|null
    */
    public function getStatus(): ?SmsWarmupActionStatus {
        return $this->status;
    }

    /**
     * Gets the toPhoneNumber property value. The phone number associated with this SMS warmup action.
     * @return string|null
    */
    public function getToPhoneNumber(): ?string {
        return $this->toPhoneNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeDateTimeValue('executedAt', $this->getExecutedAt());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('scheduledAt', $this->getScheduledAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionType property value. The action type classification for this SMS warmup action.
     * @param SmsWarmupActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?SmsWarmupActionType $value): void {
        $this->actionType = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the body property value. The body value for this SMS warmup action.
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the conversationId property value. The conversation ID associated with this SMS warmup action.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the executedAt property value. The date and time for the executed at value on this SMS warmup action.
     * @param DateTime|null $value Value to set for the executedAt property.
    */
    public function setExecutedAt(?DateTime $value): void {
        $this->executedAt = $value;
    }

    /**
     * Sets the failureReason property value. The human-readable failure reason explaining this SMS warmup action.
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the fromPhoneNumber property value. The phone number associated with this SMS warmup action.
     * @param string|null $value Value to set for the fromPhoneNumber property.
    */
    public function setFromPhoneNumber(?string $value): void {
        $this->fromPhoneNumber = $value;
    }

    /**
     * Sets the id property value. The unique ID for this SMS warmup action.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the scheduledAt property value. The date and time for the scheduled at value on this SMS warmup action.
     * @param DateTime|null $value Value to set for the scheduledAt property.
    */
    public function setScheduledAt(?DateTime $value): void {
        $this->scheduledAt = $value;
    }

    /**
     * Sets the status property value. The current status for this SMS warmup action.
     * @param SmsWarmupActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SmsWarmupActionStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the toPhoneNumber property value. The phone number associated with this SMS warmup action.
     * @param string|null $value Value to set for the toPhoneNumber property.
    */
    public function setToPhoneNumber(?string $value): void {
        $this->toPhoneNumber = $value;
    }

}
