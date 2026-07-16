<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * User-safe automation workflow run status returned for a lead.
*/
class AutomationWorkflowRunResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<AutomationWorkflowActionResponse>|null $actions Collection of actions included with this Leadping automation workflow run.
    */
    private ?array $actions = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $automationId Unique identifier of the automation associated with this Leadping automation workflow run.
    */
    private ?string $automationId = null;
    
    /**
     * @var string|null $automationName Human-readable automation name associated with this Leadping automation workflow run.
    */
    private ?string $automationName = null;
    
    /**
     * @var string|null $businessId Unique identifier of the business associated with this Leadping automation workflow run.
    */
    private ?string $businessId = null;
    
    /**
     * @var DateTime|null $cancelledAt Date and time when the automation workflow run was cancelled.
    */
    private ?DateTime $cancelledAt = null;
    
    /**
     * @var DateTime|null $completedAt Date and time when the automation workflow run completed.
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var string|null $currentStepId Unique identifier of the current step associated with this Leadping automation workflow run.
    */
    private ?string $currentStepId = null;
    
    /**
     * @var string|null $currentStepName Human-readable current step name associated with this Leadping automation workflow run.
    */
    private ?string $currentStepName = null;
    
    /**
     * @var array<AutomationWorkflowEventResponse>|null $events Collection of events included with this Leadping automation workflow run.
    */
    private ?array $events = null;
    
    /**
     * @var DateTime|null $failedAt Date and time when the automation workflow run failed.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the automation workflow run.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $lastActionSummary Human-readable last action summary for this Leadping automation workflow run.
    */
    private ?string $lastActionSummary = null;
    
    /**
     * @var string|null $lastErrorCode Reason or diagnostic code that explains the current outcome for this Leadping automation workflow run.
    */
    private ?string $lastErrorCode = null;
    
    /**
     * @var string|null $lastErrorMessage Human-readable last error message for this Leadping automation workflow run.
    */
    private ?string $lastErrorMessage = null;
    
    /**
     * @var DateTime|null $lastExecutionAt Date and time of the most recent execution for this Leadping automation workflow run.
    */
    private ?DateTime $lastExecutionAt = null;
    
    /**
     * @var string|null $leadId Unique identifier of the lead associated with this Leadping automation workflow run.
    */
    private ?string $leadId = null;
    
    /**
     * @var int|null $maxRetryCount Total number of max retry records represented by this Leadping automation workflow run.
    */
    private ?int $maxRetryCount = null;
    
    /**
     * @var DateTime|null $nextExecutionAt Date and time when the next execution is scheduled.
    */
    private ?DateTime $nextExecutionAt = null;
    
    /**
     * @var DateTime|null $nextRetryAt Date and time when the next retry is scheduled.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var int|null $retryCount Total number of retry records represented by this Leadping automation workflow run.
    */
    private ?int $retryCount = null;
    
    /**
     * @var string|null $skipReasonCode Reason or diagnostic code that explains the current outcome for this Leadping automation workflow run.
    */
    private ?string $skipReasonCode = null;
    
    /**
     * @var string|null $skipReasonDisplay Human-readable skip reason display for this Leadping automation workflow run.
    */
    private ?string $skipReasonDisplay = null;
    
    /**
     * @var DateTime|null $startedAt Date and time when the automation workflow run started.
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var string|null $status Current status for this Leadping automation workflow run.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $statusDisplay Human-readable status display for this Leadping automation workflow run.
    */
    private ?string $statusDisplay = null;
    
    /**
     * @var string|null $triggerDisplay Human-readable trigger display for this Leadping automation workflow run.
    */
    private ?string $triggerDisplay = null;
    
    /**
     * @var string|null $triggerType Trigger type classification for this Leadping automation workflow run.
    */
    private ?string $triggerType = null;
    
    /**
     * @var DateTime|null $updatedAt Date and time when the automation workflow run was last updated.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * Instantiates a new AutomationWorkflowRunResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationWorkflowRunResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationWorkflowRunResponse {
        return new AutomationWorkflowRunResponse();
    }

    /**
     * Gets the actions property value. Collection of actions included with this Leadping automation workflow run.
     * @return array<AutomationWorkflowActionResponse>|null
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
     * Gets the automationId property value. Unique identifier of the automation associated with this Leadping automation workflow run.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * Gets the automationName property value. Human-readable automation name associated with this Leadping automation workflow run.
     * @return string|null
    */
    public function getAutomationName(): ?string {
        return $this->automationName;
    }

    /**
     * Gets the businessId property value. Unique identifier of the business associated with this Leadping automation workflow run.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the cancelledAt property value. Date and time when the automation workflow run was cancelled.
     * @return DateTime|null
    */
    public function getCancelledAt(): ?DateTime {
        return $this->cancelledAt;
    }

    /**
     * Gets the completedAt property value. Date and time when the automation workflow run completed.
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the currentStepId property value. Unique identifier of the current step associated with this Leadping automation workflow run.
     * @return string|null
    */
    public function getCurrentStepId(): ?string {
        return $this->currentStepId;
    }

    /**
     * Gets the currentStepName property value. Human-readable current step name associated with this Leadping automation workflow run.
     * @return string|null
    */
    public function getCurrentStepName(): ?string {
        return $this->currentStepName;
    }

    /**
     * Gets the events property value. Collection of events included with this Leadping automation workflow run.
     * @return array<AutomationWorkflowEventResponse>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Gets the failedAt property value. Date and time when the automation workflow run failed.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AutomationWorkflowActionResponse::class, 'createFromDiscriminatorValue'])),
            'automationId' => fn(ParseNode $n) => $o->setAutomationId($n->getStringValue()),
            'automationName' => fn(ParseNode $n) => $o->setAutomationName($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'cancelledAt' => fn(ParseNode $n) => $o->setCancelledAt($n->getDateTimeValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'currentStepId' => fn(ParseNode $n) => $o->setCurrentStepId($n->getStringValue()),
            'currentStepName' => fn(ParseNode $n) => $o->setCurrentStepName($n->getStringValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([AutomationWorkflowEventResponse::class, 'createFromDiscriminatorValue'])),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastActionSummary' => fn(ParseNode $n) => $o->setLastActionSummary($n->getStringValue()),
            'lastErrorCode' => fn(ParseNode $n) => $o->setLastErrorCode($n->getStringValue()),
            'lastErrorMessage' => fn(ParseNode $n) => $o->setLastErrorMessage($n->getStringValue()),
            'lastExecutionAt' => fn(ParseNode $n) => $o->setLastExecutionAt($n->getDateTimeValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'maxRetryCount' => fn(ParseNode $n) => $o->setMaxRetryCount($n->getIntegerValue()),
            'nextExecutionAt' => fn(ParseNode $n) => $o->setNextExecutionAt($n->getDateTimeValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'retryCount' => fn(ParseNode $n) => $o->setRetryCount($n->getIntegerValue()),
            'skipReasonCode' => fn(ParseNode $n) => $o->setSkipReasonCode($n->getStringValue()),
            'skipReasonDisplay' => fn(ParseNode $n) => $o->setSkipReasonDisplay($n->getStringValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusDisplay' => fn(ParseNode $n) => $o->setStatusDisplay($n->getStringValue()),
            'triggerDisplay' => fn(ParseNode $n) => $o->setTriggerDisplay($n->getStringValue()),
            'triggerType' => fn(ParseNode $n) => $o->setTriggerType($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the automation workflow run.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastActionSummary property value. Human-readable last action summary for this Leadping automation workflow run.
     * @return string|null
    */
    public function getLastActionSummary(): ?string {
        return $this->lastActionSummary;
    }

    /**
     * Gets the lastErrorCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow run.
     * @return string|null
    */
    public function getLastErrorCode(): ?string {
        return $this->lastErrorCode;
    }

    /**
     * Gets the lastErrorMessage property value. Human-readable last error message for this Leadping automation workflow run.
     * @return string|null
    */
    public function getLastErrorMessage(): ?string {
        return $this->lastErrorMessage;
    }

    /**
     * Gets the lastExecutionAt property value. Date and time of the most recent execution for this Leadping automation workflow run.
     * @return DateTime|null
    */
    public function getLastExecutionAt(): ?DateTime {
        return $this->lastExecutionAt;
    }

    /**
     * Gets the leadId property value. Unique identifier of the lead associated with this Leadping automation workflow run.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the maxRetryCount property value. Total number of max retry records represented by this Leadping automation workflow run.
     * @return int|null
    */
    public function getMaxRetryCount(): ?int {
        return $this->maxRetryCount;
    }

    /**
     * Gets the nextExecutionAt property value. Date and time when the next execution is scheduled.
     * @return DateTime|null
    */
    public function getNextExecutionAt(): ?DateTime {
        return $this->nextExecutionAt;
    }

    /**
     * Gets the nextRetryAt property value. Date and time when the next retry is scheduled.
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the retryCount property value. Total number of retry records represented by this Leadping automation workflow run.
     * @return int|null
    */
    public function getRetryCount(): ?int {
        return $this->retryCount;
    }

    /**
     * Gets the skipReasonCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow run.
     * @return string|null
    */
    public function getSkipReasonCode(): ?string {
        return $this->skipReasonCode;
    }

    /**
     * Gets the skipReasonDisplay property value. Human-readable skip reason display for this Leadping automation workflow run.
     * @return string|null
    */
    public function getSkipReasonDisplay(): ?string {
        return $this->skipReasonDisplay;
    }

    /**
     * Gets the startedAt property value. Date and time when the automation workflow run started.
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. Current status for this Leadping automation workflow run.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusDisplay property value. Human-readable status display for this Leadping automation workflow run.
     * @return string|null
    */
    public function getStatusDisplay(): ?string {
        return $this->statusDisplay;
    }

    /**
     * Gets the triggerDisplay property value. Human-readable trigger display for this Leadping automation workflow run.
     * @return string|null
    */
    public function getTriggerDisplay(): ?string {
        return $this->triggerDisplay;
    }

    /**
     * Gets the triggerType property value. Trigger type classification for this Leadping automation workflow run.
     * @return string|null
    */
    public function getTriggerType(): ?string {
        return $this->triggerType;
    }

    /**
     * Gets the updatedAt property value. Date and time when the automation workflow run was last updated.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeStringValue('automationId', $this->getAutomationId());
        $writer->writeStringValue('automationName', $this->getAutomationName());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeDateTimeValue('cancelledAt', $this->getCancelledAt());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeStringValue('currentStepId', $this->getCurrentStepId());
        $writer->writeStringValue('currentStepName', $this->getCurrentStepName());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('lastActionSummary', $this->getLastActionSummary());
        $writer->writeStringValue('lastErrorCode', $this->getLastErrorCode());
        $writer->writeStringValue('lastErrorMessage', $this->getLastErrorMessage());
        $writer->writeDateTimeValue('lastExecutionAt', $this->getLastExecutionAt());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeIntegerValue('maxRetryCount', $this->getMaxRetryCount());
        $writer->writeDateTimeValue('nextExecutionAt', $this->getNextExecutionAt());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeIntegerValue('retryCount', $this->getRetryCount());
        $writer->writeStringValue('skipReasonCode', $this->getSkipReasonCode());
        $writer->writeStringValue('skipReasonDisplay', $this->getSkipReasonDisplay());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusDisplay', $this->getStatusDisplay());
        $writer->writeStringValue('triggerDisplay', $this->getTriggerDisplay());
        $writer->writeStringValue('triggerType', $this->getTriggerType());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actions property value. Collection of actions included with this Leadping automation workflow run.
     * @param array<AutomationWorkflowActionResponse>|null $value Value to set for the actions property.
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
     * Sets the automationId property value. Unique identifier of the automation associated with this Leadping automation workflow run.
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->automationId = $value;
    }

    /**
     * Sets the automationName property value. Human-readable automation name associated with this Leadping automation workflow run.
     * @param string|null $value Value to set for the automationName property.
    */
    public function setAutomationName(?string $value): void {
        $this->automationName = $value;
    }

    /**
     * Sets the businessId property value. Unique identifier of the business associated with this Leadping automation workflow run.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the cancelledAt property value. Date and time when the automation workflow run was cancelled.
     * @param DateTime|null $value Value to set for the cancelledAt property.
    */
    public function setCancelledAt(?DateTime $value): void {
        $this->cancelledAt = $value;
    }

    /**
     * Sets the completedAt property value. Date and time when the automation workflow run completed.
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the currentStepId property value. Unique identifier of the current step associated with this Leadping automation workflow run.
     * @param string|null $value Value to set for the currentStepId property.
    */
    public function setCurrentStepId(?string $value): void {
        $this->currentStepId = $value;
    }

    /**
     * Sets the currentStepName property value. Human-readable current step name associated with this Leadping automation workflow run.
     * @param string|null $value Value to set for the currentStepName property.
    */
    public function setCurrentStepName(?string $value): void {
        $this->currentStepName = $value;
    }

    /**
     * Sets the events property value. Collection of events included with this Leadping automation workflow run.
     * @param array<AutomationWorkflowEventResponse>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the failedAt property value. Date and time when the automation workflow run failed.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the automation workflow run.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastActionSummary property value. Human-readable last action summary for this Leadping automation workflow run.
     * @param string|null $value Value to set for the lastActionSummary property.
    */
    public function setLastActionSummary(?string $value): void {
        $this->lastActionSummary = $value;
    }

    /**
     * Sets the lastErrorCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow run.
     * @param string|null $value Value to set for the lastErrorCode property.
    */
    public function setLastErrorCode(?string $value): void {
        $this->lastErrorCode = $value;
    }

    /**
     * Sets the lastErrorMessage property value. Human-readable last error message for this Leadping automation workflow run.
     * @param string|null $value Value to set for the lastErrorMessage property.
    */
    public function setLastErrorMessage(?string $value): void {
        $this->lastErrorMessage = $value;
    }

    /**
     * Sets the lastExecutionAt property value. Date and time of the most recent execution for this Leadping automation workflow run.
     * @param DateTime|null $value Value to set for the lastExecutionAt property.
    */
    public function setLastExecutionAt(?DateTime $value): void {
        $this->lastExecutionAt = $value;
    }

    /**
     * Sets the leadId property value. Unique identifier of the lead associated with this Leadping automation workflow run.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the maxRetryCount property value. Total number of max retry records represented by this Leadping automation workflow run.
     * @param int|null $value Value to set for the maxRetryCount property.
    */
    public function setMaxRetryCount(?int $value): void {
        $this->maxRetryCount = $value;
    }

    /**
     * Sets the nextExecutionAt property value. Date and time when the next execution is scheduled.
     * @param DateTime|null $value Value to set for the nextExecutionAt property.
    */
    public function setNextExecutionAt(?DateTime $value): void {
        $this->nextExecutionAt = $value;
    }

    /**
     * Sets the nextRetryAt property value. Date and time when the next retry is scheduled.
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the retryCount property value. Total number of retry records represented by this Leadping automation workflow run.
     * @param int|null $value Value to set for the retryCount property.
    */
    public function setRetryCount(?int $value): void {
        $this->retryCount = $value;
    }

    /**
     * Sets the skipReasonCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow run.
     * @param string|null $value Value to set for the skipReasonCode property.
    */
    public function setSkipReasonCode(?string $value): void {
        $this->skipReasonCode = $value;
    }

    /**
     * Sets the skipReasonDisplay property value. Human-readable skip reason display for this Leadping automation workflow run.
     * @param string|null $value Value to set for the skipReasonDisplay property.
    */
    public function setSkipReasonDisplay(?string $value): void {
        $this->skipReasonDisplay = $value;
    }

    /**
     * Sets the startedAt property value. Date and time when the automation workflow run started.
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. Current status for this Leadping automation workflow run.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDisplay property value. Human-readable status display for this Leadping automation workflow run.
     * @param string|null $value Value to set for the statusDisplay property.
    */
    public function setStatusDisplay(?string $value): void {
        $this->statusDisplay = $value;
    }

    /**
     * Sets the triggerDisplay property value. Human-readable trigger display for this Leadping automation workflow run.
     * @param string|null $value Value to set for the triggerDisplay property.
    */
    public function setTriggerDisplay(?string $value): void {
        $this->triggerDisplay = $value;
    }

    /**
     * Sets the triggerType property value. Trigger type classification for this Leadping automation workflow run.
     * @param string|null $value Value to set for the triggerType property.
    */
    public function setTriggerType(?string $value): void {
        $this->triggerType = $value;
    }

    /**
     * Sets the updatedAt property value. Date and time when the automation workflow run was last updated.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
