<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * User-safe workflow history event returned for lead automation status.
*/
class AutomationWorkflowEventResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionId Unique identifier of the action associated with this Leadping automation workflow event.
    */
    private ?string $actionId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $eventType Event type classification for this Leadping automation workflow event.
    */
    private ?string $eventType = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the automation workflow event.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $occurredAt Date and time when the automation workflow event event occurred.
    */
    private ?DateTime $occurredAt = null;
    
    /**
     * @var string|null $reasonCode Reason or diagnostic code that explains the current outcome for this Leadping automation workflow event.
    */
    private ?string $reasonCode = null;
    
    /**
     * @var string|null $status Current status for this Leadping automation workflow event.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $statusDisplay Human-readable status display for this Leadping automation workflow event.
    */
    private ?string $statusDisplay = null;
    
    /**
     * @var string|null $stepId Unique identifier of the step associated with this Leadping automation workflow event.
    */
    private ?string $stepId = null;
    
    /**
     * @var string|null $summary Human-readable summary for this Leadping automation workflow event.
    */
    private ?string $summary = null;
    
    /**
     * Instantiates a new AutomationWorkflowEventResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationWorkflowEventResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationWorkflowEventResponse {
        return new AutomationWorkflowEventResponse();
    }

    /**
     * Gets the actionId property value. Unique identifier of the action associated with this Leadping automation workflow event.
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the eventType property value. Event type classification for this Leadping automation workflow event.
     * @return string|null
    */
    public function getEventType(): ?string {
        return $this->eventType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'occurredAt' => fn(ParseNode $n) => $o->setOccurredAt($n->getDateTimeValue()),
            'reasonCode' => fn(ParseNode $n) => $o->setReasonCode($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusDisplay' => fn(ParseNode $n) => $o->setStatusDisplay($n->getStringValue()),
            'stepId' => fn(ParseNode $n) => $o->setStepId($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the automation workflow event.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the occurredAt property value. Date and time when the automation workflow event event occurred.
     * @return DateTime|null
    */
    public function getOccurredAt(): ?DateTime {
        return $this->occurredAt;
    }

    /**
     * Gets the reasonCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow event.
     * @return string|null
    */
    public function getReasonCode(): ?string {
        return $this->reasonCode;
    }

    /**
     * Gets the status property value. Current status for this Leadping automation workflow event.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusDisplay property value. Human-readable status display for this Leadping automation workflow event.
     * @return string|null
    */
    public function getStatusDisplay(): ?string {
        return $this->statusDisplay;
    }

    /**
     * Gets the stepId property value. Unique identifier of the step associated with this Leadping automation workflow event.
     * @return string|null
    */
    public function getStepId(): ?string {
        return $this->stepId;
    }

    /**
     * Gets the summary property value. Human-readable summary for this Leadping automation workflow event.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('occurredAt', $this->getOccurredAt());
        $writer->writeStringValue('reasonCode', $this->getReasonCode());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusDisplay', $this->getStatusDisplay());
        $writer->writeStringValue('stepId', $this->getStepId());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionId property value. Unique identifier of the action associated with this Leadping automation workflow event.
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->actionId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the eventType property value. Event type classification for this Leadping automation workflow event.
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->eventType = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the automation workflow event.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the occurredAt property value. Date and time when the automation workflow event event occurred.
     * @param DateTime|null $value Value to set for the occurredAt property.
    */
    public function setOccurredAt(?DateTime $value): void {
        $this->occurredAt = $value;
    }

    /**
     * Sets the reasonCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow event.
     * @param string|null $value Value to set for the reasonCode property.
    */
    public function setReasonCode(?string $value): void {
        $this->reasonCode = $value;
    }

    /**
     * Sets the status property value. Current status for this Leadping automation workflow event.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDisplay property value. Human-readable status display for this Leadping automation workflow event.
     * @param string|null $value Value to set for the statusDisplay property.
    */
    public function setStatusDisplay(?string $value): void {
        $this->statusDisplay = $value;
    }

    /**
     * Sets the stepId property value. Unique identifier of the step associated with this Leadping automation workflow event.
     * @param string|null $value Value to set for the stepId property.
    */
    public function setStepId(?string $value): void {
        $this->stepId = $value;
    }

    /**
     * Sets the summary property value. Human-readable summary for this Leadping automation workflow event.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
    }

}
