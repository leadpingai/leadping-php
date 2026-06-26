<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * History record schema for Leadping API automation action run record data exposed in automation and audit views.
*/
class AutomationActionRunRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionId Automation action ID executed or evaluated by this automation action run record.
    */
    private ?string $actionId = null;
    
    /**
     * @var string|null $actionType Automation action type, such as send SMS or create task.
    */
    private ?string $actionType = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $automationRunId Automation run ID connected to this action or event record.
    */
    private ?string $automationRunId = null;
    
    /**
     * @var DateTime|null $completedAt UTC timestamp when processing completed for this automation action run record.
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var string|null $connectionKey Stable integration connection key used by this automation action.
    */
    private ?string $connectionKey = null;
    
    /**
     * @var string|null $error Error text returned while processing this automation action run record.
    */
    private ?string $error = null;
    
    /**
     * @var string|null $executionKey Idempotency key used to identify a unique automation workflow execution.
    */
    private ?string $executionKey = null;
    
    /**
     * @var DateTime|null $failedAt UTC timestamp when processing failed for this automation action run record.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $failureCode Machine-readable failure code for troubleshooting this automation action run record.
    */
    private ?string $failureCode = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this automation action run record.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $nextRetryAt UTC timestamp when Leadping will retry this automation action run record.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var int|null $order Sort order used to evaluate or display this automation action run record.
    */
    private ?int $order = null;
    
    /**
     * @var string|null $output Generated output returned by this automation action run record.
    */
    private ?string $output = null;
    
    /**
     * @var int|null $processingAttempts Number of processing attempts made for this workflow or delivery request.
    */
    private ?int $processingAttempts = null;
    
    /**
     * @var DateTime|null $scheduledAt UTC timestamp when this automation action run record was scheduled.
    */
    private ?DateTime $scheduledAt = null;
    
    /**
     * @var DateTime|null $startedAt UTC timestamp when processing started for this automation action run record.
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var string|null $status Current lifecycle status for this automation action run record in the Leadping API.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new AutomationActionRunRecord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationActionRunRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationActionRunRecord {
        return new AutomationActionRunRecord();
    }

    /**
     * Gets the actionId property value. Automation action ID executed or evaluated by this automation action run record.
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
    }

    /**
     * Gets the actionType property value. Automation action type, such as send SMS or create task.
     * @return string|null
    */
    public function getActionType(): ?string {
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
     * Gets the automationRunId property value. Automation run ID connected to this action or event record.
     * @return string|null
    */
    public function getAutomationRunId(): ?string {
        return $this->automationRunId;
    }

    /**
     * Gets the completedAt property value. UTC timestamp when processing completed for this automation action run record.
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the connectionKey property value. Stable integration connection key used by this automation action.
     * @return string|null
    */
    public function getConnectionKey(): ?string {
        return $this->connectionKey;
    }

    /**
     * Gets the error property value. Error text returned while processing this automation action run record.
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * Gets the executionKey property value. Idempotency key used to identify a unique automation workflow execution.
     * @return string|null
    */
    public function getExecutionKey(): ?string {
        return $this->executionKey;
    }

    /**
     * Gets the failedAt property value. UTC timestamp when processing failed for this automation action run record.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * Gets the failureCode property value. Machine-readable failure code for troubleshooting this automation action run record.
     * @return string|null
    */
    public function getFailureCode(): ?string {
        return $this->failureCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getStringValue()),
            'automationRunId' => fn(ParseNode $n) => $o->setAutomationRunId($n->getStringValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'connectionKey' => fn(ParseNode $n) => $o->setConnectionKey($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'executionKey' => fn(ParseNode $n) => $o->setExecutionKey($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'failureCode' => fn(ParseNode $n) => $o->setFailureCode($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getIntegerValue()),
            'output' => fn(ParseNode $n) => $o->setOutput($n->getStringValue()),
            'processingAttempts' => fn(ParseNode $n) => $o->setProcessingAttempts($n->getIntegerValue()),
            'scheduledAt' => fn(ParseNode $n) => $o->setScheduledAt($n->getDateTimeValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this automation action run record.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the nextRetryAt property value. UTC timestamp when Leadping will retry this automation action run record.
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the order property value. Sort order used to evaluate or display this automation action run record.
     * @return int|null
    */
    public function getOrder(): ?int {
        return $this->order;
    }

    /**
     * Gets the output property value. Generated output returned by this automation action run record.
     * @return string|null
    */
    public function getOutput(): ?string {
        return $this->output;
    }

    /**
     * Gets the processingAttempts property value. Number of processing attempts made for this workflow or delivery request.
     * @return int|null
    */
    public function getProcessingAttempts(): ?int {
        return $this->processingAttempts;
    }

    /**
     * Gets the scheduledAt property value. UTC timestamp when this automation action run record was scheduled.
     * @return DateTime|null
    */
    public function getScheduledAt(): ?DateTime {
        return $this->scheduledAt;
    }

    /**
     * Gets the startedAt property value. UTC timestamp when processing started for this automation action run record.
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. Current lifecycle status for this automation action run record in the Leadping API.
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
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeStringValue('actionType', $this->getActionType());
        $writer->writeStringValue('automationRunId', $this->getAutomationRunId());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeStringValue('connectionKey', $this->getConnectionKey());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeStringValue('executionKey', $this->getExecutionKey());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('failureCode', $this->getFailureCode());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeIntegerValue('order', $this->getOrder());
        $writer->writeStringValue('output', $this->getOutput());
        $writer->writeIntegerValue('processingAttempts', $this->getProcessingAttempts());
        $writer->writeDateTimeValue('scheduledAt', $this->getScheduledAt());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionId property value. Automation action ID executed or evaluated by this automation action run record.
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->actionId = $value;
    }

    /**
     * Sets the actionType property value. Automation action type, such as send SMS or create task.
     * @param string|null $value Value to set for the actionType property.
    */
    public function setActionType(?string $value): void {
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
     * Sets the automationRunId property value. Automation run ID connected to this action or event record.
     * @param string|null $value Value to set for the automationRunId property.
    */
    public function setAutomationRunId(?string $value): void {
        $this->automationRunId = $value;
    }

    /**
     * Sets the completedAt property value. UTC timestamp when processing completed for this automation action run record.
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the connectionKey property value. Stable integration connection key used by this automation action.
     * @param string|null $value Value to set for the connectionKey property.
    */
    public function setConnectionKey(?string $value): void {
        $this->connectionKey = $value;
    }

    /**
     * Sets the error property value. Error text returned while processing this automation action run record.
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the executionKey property value. Idempotency key used to identify a unique automation workflow execution.
     * @param string|null $value Value to set for the executionKey property.
    */
    public function setExecutionKey(?string $value): void {
        $this->executionKey = $value;
    }

    /**
     * Sets the failedAt property value. UTC timestamp when processing failed for this automation action run record.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the failureCode property value. Machine-readable failure code for troubleshooting this automation action run record.
     * @param string|null $value Value to set for the failureCode property.
    */
    public function setFailureCode(?string $value): void {
        $this->failureCode = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this automation action run record.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the nextRetryAt property value. UTC timestamp when Leadping will retry this automation action run record.
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the order property value. Sort order used to evaluate or display this automation action run record.
     * @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value): void {
        $this->order = $value;
    }

    /**
     * Sets the output property value. Generated output returned by this automation action run record.
     * @param string|null $value Value to set for the output property.
    */
    public function setOutput(?string $value): void {
        $this->output = $value;
    }

    /**
     * Sets the processingAttempts property value. Number of processing attempts made for this workflow or delivery request.
     * @param int|null $value Value to set for the processingAttempts property.
    */
    public function setProcessingAttempts(?int $value): void {
        $this->processingAttempts = $value;
    }

    /**
     * Sets the scheduledAt property value. UTC timestamp when this automation action run record was scheduled.
     * @param DateTime|null $value Value to set for the scheduledAt property.
    */
    public function setScheduledAt(?DateTime $value): void {
        $this->scheduledAt = $value;
    }

    /**
     * Sets the startedAt property value. UTC timestamp when processing started for this automation action run record.
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this automation action run record in the Leadping API.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
