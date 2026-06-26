<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * History record schema for Leadping API automation run record data exposed in automation and audit views.
*/
class AutomationRunRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<AutomationActionRunRecord>|null $actions Automation actions configured or returned for this workflow.
    */
    private ?array $actions = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $automationId Automation ID connected to this workflow, run, or event.
    */
    private ?string $automationId = null;
    
    /**
     * @var string|null $businessId Business ID that owns this automation run.
    */
    private ?string $businessId = null;
    
    /**
     * @var DateTime|null $completedAt UTC timestamp when processing completed for this automation run record.
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var AutomationRunRecord_contextSnapshot|null $contextSnapshot Snapshot of request context captured when this automation run record was created.
    */
    private ?AutomationRunRecord_contextSnapshot $contextSnapshot = null;
    
    /**
     * @var string|null $error Error text returned while processing this automation run record.
    */
    private ?string $error = null;
    
    /**
     * @var string|null $executionKey Idempotency key used to identify a unique automation workflow execution.
    */
    private ?string $executionKey = null;
    
    /**
     * @var string|null $executionMode Execution mode used for automation preview or live workflow processing.
    */
    private ?string $executionMode = null;
    
    /**
     * @var string|null $failureCode Machine-readable failure code for troubleshooting this automation run record.
    */
    private ?string $failureCode = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this automation run record.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastAttemptAt UTC timestamp when Leadping last attempted to process this automation run.
    */
    private ?DateTime $lastAttemptAt = null;
    
    /**
     * @var string|null $leadId Lead ID that triggered this automation run, when the run is lead-based.
    */
    private ?string $leadId = null;
    
    /**
     * @var int|null $processingAttempts Number of processing attempts made for this workflow or delivery request.
    */
    private ?int $processingAttempts = null;
    
    /**
     * @var string|null $skippedReason Human-readable reason explaining why Leadping skipped this automation run.
    */
    private ?string $skippedReason = null;
    
    /**
     * @var string|null $sourceEventId Source event ID that triggered this workflow or outbound delivery.
    */
    private ?string $sourceEventId = null;
    
    /**
     * @var DateTime|null $startedAt UTC timestamp when processing started for this automation run record.
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var string|null $status Current lifecycle status for this automation run record in the Leadping API.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $triggerType Automation trigger type that starts the workflow.
    */
    private ?string $triggerType = null;
    
    /**
     * Instantiates a new AutomationRunRecord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationRunRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationRunRecord {
        return new AutomationRunRecord();
    }

    /**
     * Gets the actions property value. Automation actions configured or returned for this workflow.
     * @return array<AutomationActionRunRecord>|null
    */
    public function getActions(): ?array {
        return $this->actions;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationId property value. Automation ID connected to this workflow, run, or event.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * Gets the businessId property value. Business ID that owns this automation run.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the completedAt property value. UTC timestamp when processing completed for this automation run record.
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the contextSnapshot property value. Snapshot of request context captured when this automation run record was created.
     * @return AutomationRunRecord_contextSnapshot|null
    */
    public function getContextSnapshot(): ?AutomationRunRecord_contextSnapshot {
        return $this->contextSnapshot;
    }

    /**
     * Gets the error property value. Error text returned while processing this automation run record.
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
     * Gets the executionMode property value. Execution mode used for automation preview or live workflow processing.
     * @return string|null
    */
    public function getExecutionMode(): ?string {
        return $this->executionMode;
    }

    /**
     * Gets the failureCode property value. Machine-readable failure code for troubleshooting this automation run record.
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
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AutomationActionRunRecord::class, 'createFromDiscriminatorValue'])),
            'automationId' => fn(ParseNode $n) => $o->setAutomationId($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'contextSnapshot' => fn(ParseNode $n) => $o->setContextSnapshot($n->getObjectValue([AutomationRunRecord_contextSnapshot::class, 'createFromDiscriminatorValue'])),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'executionKey' => fn(ParseNode $n) => $o->setExecutionKey($n->getStringValue()),
            'executionMode' => fn(ParseNode $n) => $o->setExecutionMode($n->getStringValue()),
            'failureCode' => fn(ParseNode $n) => $o->setFailureCode($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastAttemptAt' => fn(ParseNode $n) => $o->setLastAttemptAt($n->getDateTimeValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'processingAttempts' => fn(ParseNode $n) => $o->setProcessingAttempts($n->getIntegerValue()),
            'skippedReason' => fn(ParseNode $n) => $o->setSkippedReason($n->getStringValue()),
            'sourceEventId' => fn(ParseNode $n) => $o->setSourceEventId($n->getStringValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'triggerType' => fn(ParseNode $n) => $o->setTriggerType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this automation run record.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastAttemptAt property value. UTC timestamp when Leadping last attempted to process this automation run.
     * @return DateTime|null
    */
    public function getLastAttemptAt(): ?DateTime {
        return $this->lastAttemptAt;
    }

    /**
     * Gets the leadId property value. Lead ID that triggered this automation run, when the run is lead-based.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the processingAttempts property value. Number of processing attempts made for this workflow or delivery request.
     * @return int|null
    */
    public function getProcessingAttempts(): ?int {
        return $this->processingAttempts;
    }

    /**
     * Gets the skippedReason property value. Human-readable reason explaining why Leadping skipped this automation run.
     * @return string|null
    */
    public function getSkippedReason(): ?string {
        return $this->skippedReason;
    }

    /**
     * Gets the sourceEventId property value. Source event ID that triggered this workflow or outbound delivery.
     * @return string|null
    */
    public function getSourceEventId(): ?string {
        return $this->sourceEventId;
    }

    /**
     * Gets the startedAt property value. UTC timestamp when processing started for this automation run record.
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. Current lifecycle status for this automation run record in the Leadping API.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the triggerType property value. Automation trigger type that starts the workflow.
     * @return string|null
    */
    public function getTriggerType(): ?string {
        return $this->triggerType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeStringValue('automationId', $this->getAutomationId());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeObjectValue('contextSnapshot', $this->getContextSnapshot());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeStringValue('executionKey', $this->getExecutionKey());
        $writer->writeStringValue('executionMode', $this->getExecutionMode());
        $writer->writeStringValue('failureCode', $this->getFailureCode());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastAttemptAt', $this->getLastAttemptAt());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeIntegerValue('processingAttempts', $this->getProcessingAttempts());
        $writer->writeStringValue('skippedReason', $this->getSkippedReason());
        $writer->writeStringValue('sourceEventId', $this->getSourceEventId());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('triggerType', $this->getTriggerType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actions property value. Automation actions configured or returned for this workflow.
     * @param array<AutomationActionRunRecord>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->actions = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the automationId property value. Automation ID connected to this workflow, run, or event.
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->automationId = $value;
    }

    /**
     * Sets the businessId property value. Business ID that owns this automation run.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the completedAt property value. UTC timestamp when processing completed for this automation run record.
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the contextSnapshot property value. Snapshot of request context captured when this automation run record was created.
     * @param AutomationRunRecord_contextSnapshot|null $value Value to set for the contextSnapshot property.
    */
    public function setContextSnapshot(?AutomationRunRecord_contextSnapshot $value): void {
        $this->contextSnapshot = $value;
    }

    /**
     * Sets the error property value. Error text returned while processing this automation run record.
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
     * Sets the executionMode property value. Execution mode used for automation preview or live workflow processing.
     * @param string|null $value Value to set for the executionMode property.
    */
    public function setExecutionMode(?string $value): void {
        $this->executionMode = $value;
    }

    /**
     * Sets the failureCode property value. Machine-readable failure code for troubleshooting this automation run record.
     * @param string|null $value Value to set for the failureCode property.
    */
    public function setFailureCode(?string $value): void {
        $this->failureCode = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this automation run record.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastAttemptAt property value. UTC timestamp when Leadping last attempted to process this automation run.
     * @param DateTime|null $value Value to set for the lastAttemptAt property.
    */
    public function setLastAttemptAt(?DateTime $value): void {
        $this->lastAttemptAt = $value;
    }

    /**
     * Sets the leadId property value. Lead ID that triggered this automation run, when the run is lead-based.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the processingAttempts property value. Number of processing attempts made for this workflow or delivery request.
     * @param int|null $value Value to set for the processingAttempts property.
    */
    public function setProcessingAttempts(?int $value): void {
        $this->processingAttempts = $value;
    }

    /**
     * Sets the skippedReason property value. Human-readable reason explaining why Leadping skipped this automation run.
     * @param string|null $value Value to set for the skippedReason property.
    */
    public function setSkippedReason(?string $value): void {
        $this->skippedReason = $value;
    }

    /**
     * Sets the sourceEventId property value. Source event ID that triggered this workflow or outbound delivery.
     * @param string|null $value Value to set for the sourceEventId property.
    */
    public function setSourceEventId(?string $value): void {
        $this->sourceEventId = $value;
    }

    /**
     * Sets the startedAt property value. UTC timestamp when processing started for this automation run record.
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this automation run record in the Leadping API.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the triggerType property value. Automation trigger type that starts the workflow.
     * @param string|null $value Value to set for the triggerType property.
    */
    public function setTriggerType(?string $value): void {
        $this->triggerType = $value;
    }

}
