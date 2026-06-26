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
     * @var array<AutomationWorkflowActionResponse>|null $actions The actions property
    */
    private ?array $actions = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $automationId The automationId property
    */
    private ?string $automationId = null;
    
    /**
     * @var string|null $automationName The automationName property
    */
    private ?string $automationName = null;
    
    /**
     * @var string|null $businessId The businessId property
    */
    private ?string $businessId = null;
    
    /**
     * @var DateTime|null $cancelledAt The cancelledAt property
    */
    private ?DateTime $cancelledAt = null;
    
    /**
     * @var DateTime|null $completedAt The completedAt property
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var string|null $currentStepId The currentStepId property
    */
    private ?string $currentStepId = null;
    
    /**
     * @var string|null $currentStepName The currentStepName property
    */
    private ?string $currentStepName = null;
    
    /**
     * @var array<AutomationWorkflowEventResponse>|null $events The events property
    */
    private ?array $events = null;
    
    /**
     * @var string|null $executionKey The executionKey property
    */
    private ?string $executionKey = null;
    
    /**
     * @var DateTime|null $failedAt The failedAt property
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $internalErrorDetails The internalErrorDetails property
    */
    private ?string $internalErrorDetails = null;
    
    /**
     * @var string|null $lastActionSummary The lastActionSummary property
    */
    private ?string $lastActionSummary = null;
    
    /**
     * @var string|null $lastErrorCode The lastErrorCode property
    */
    private ?string $lastErrorCode = null;
    
    /**
     * @var string|null $lastErrorMessage The lastErrorMessage property
    */
    private ?string $lastErrorMessage = null;
    
    /**
     * @var DateTime|null $lastExecutionAt The lastExecutionAt property
    */
    private ?DateTime $lastExecutionAt = null;
    
    /**
     * @var string|null $leadId The leadId property
    */
    private ?string $leadId = null;
    
    /**
     * @var int|null $maxRetryCount The maxRetryCount property
    */
    private ?int $maxRetryCount = null;
    
    /**
     * @var DateTime|null $nextExecutionAt The nextExecutionAt property
    */
    private ?DateTime $nextExecutionAt = null;
    
    /**
     * @var DateTime|null $nextRetryAt The nextRetryAt property
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var int|null $retryCount The retryCount property
    */
    private ?int $retryCount = null;
    
    /**
     * @var string|null $skipReasonCode The skipReasonCode property
    */
    private ?string $skipReasonCode = null;
    
    /**
     * @var string|null $skipReasonDisplay The skipReasonDisplay property
    */
    private ?string $skipReasonDisplay = null;
    
    /**
     * @var string|null $sourceEventId The sourceEventId property
    */
    private ?string $sourceEventId = null;
    
    /**
     * @var DateTime|null $startedAt The startedAt property
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $statusDisplay The statusDisplay property
    */
    private ?string $statusDisplay = null;
    
    /**
     * @var string|null $triggerDisplay The triggerDisplay property
    */
    private ?string $triggerDisplay = null;
    
    /**
     * @var string|null $triggerType The triggerType property
    */
    private ?string $triggerType = null;
    
    /**
     * @var DateTime|null $updatedAt The updatedAt property
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
     * Gets the actions property value. The actions property
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
     * Gets the automationId property value. The automationId property
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * Gets the automationName property value. The automationName property
     * @return string|null
    */
    public function getAutomationName(): ?string {
        return $this->automationName;
    }

    /**
     * Gets the businessId property value. The businessId property
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the cancelledAt property value. The cancelledAt property
     * @return DateTime|null
    */
    public function getCancelledAt(): ?DateTime {
        return $this->cancelledAt;
    }

    /**
     * Gets the completedAt property value. The completedAt property
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the currentStepId property value. The currentStepId property
     * @return string|null
    */
    public function getCurrentStepId(): ?string {
        return $this->currentStepId;
    }

    /**
     * Gets the currentStepName property value. The currentStepName property
     * @return string|null
    */
    public function getCurrentStepName(): ?string {
        return $this->currentStepName;
    }

    /**
     * Gets the events property value. The events property
     * @return array<AutomationWorkflowEventResponse>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Gets the executionKey property value. The executionKey property
     * @return string|null
    */
    public function getExecutionKey(): ?string {
        return $this->executionKey;
    }

    /**
     * Gets the failedAt property value. The failedAt property
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
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'currentStepId' => fn(ParseNode $n) => $o->setCurrentStepId($n->getStringValue()),
            'currentStepName' => fn(ParseNode $n) => $o->setCurrentStepName($n->getStringValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([AutomationWorkflowEventResponse::class, 'createFromDiscriminatorValue'])),
            'executionKey' => fn(ParseNode $n) => $o->setExecutionKey($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'internalErrorDetails' => fn(ParseNode $n) => $o->setInternalErrorDetails($n->getStringValue()),
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
            'sourceEventId' => fn(ParseNode $n) => $o->setSourceEventId($n->getStringValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusDisplay' => fn(ParseNode $n) => $o->setStatusDisplay($n->getStringValue()),
            'triggerDisplay' => fn(ParseNode $n) => $o->setTriggerDisplay($n->getStringValue()),
            'triggerType' => fn(ParseNode $n) => $o->setTriggerType($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the internalErrorDetails property value. The internalErrorDetails property
     * @return string|null
    */
    public function getInternalErrorDetails(): ?string {
        return $this->internalErrorDetails;
    }

    /**
     * Gets the lastActionSummary property value. The lastActionSummary property
     * @return string|null
    */
    public function getLastActionSummary(): ?string {
        return $this->lastActionSummary;
    }

    /**
     * Gets the lastErrorCode property value. The lastErrorCode property
     * @return string|null
    */
    public function getLastErrorCode(): ?string {
        return $this->lastErrorCode;
    }

    /**
     * Gets the lastErrorMessage property value. The lastErrorMessage property
     * @return string|null
    */
    public function getLastErrorMessage(): ?string {
        return $this->lastErrorMessage;
    }

    /**
     * Gets the lastExecutionAt property value. The lastExecutionAt property
     * @return DateTime|null
    */
    public function getLastExecutionAt(): ?DateTime {
        return $this->lastExecutionAt;
    }

    /**
     * Gets the leadId property value. The leadId property
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the maxRetryCount property value. The maxRetryCount property
     * @return int|null
    */
    public function getMaxRetryCount(): ?int {
        return $this->maxRetryCount;
    }

    /**
     * Gets the nextExecutionAt property value. The nextExecutionAt property
     * @return DateTime|null
    */
    public function getNextExecutionAt(): ?DateTime {
        return $this->nextExecutionAt;
    }

    /**
     * Gets the nextRetryAt property value. The nextRetryAt property
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the retryCount property value. The retryCount property
     * @return int|null
    */
    public function getRetryCount(): ?int {
        return $this->retryCount;
    }

    /**
     * Gets the skipReasonCode property value. The skipReasonCode property
     * @return string|null
    */
    public function getSkipReasonCode(): ?string {
        return $this->skipReasonCode;
    }

    /**
     * Gets the skipReasonDisplay property value. The skipReasonDisplay property
     * @return string|null
    */
    public function getSkipReasonDisplay(): ?string {
        return $this->skipReasonDisplay;
    }

    /**
     * Gets the sourceEventId property value. The sourceEventId property
     * @return string|null
    */
    public function getSourceEventId(): ?string {
        return $this->sourceEventId;
    }

    /**
     * Gets the startedAt property value. The startedAt property
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusDisplay property value. The statusDisplay property
     * @return string|null
    */
    public function getStatusDisplay(): ?string {
        return $this->statusDisplay;
    }

    /**
     * Gets the triggerDisplay property value. The triggerDisplay property
     * @return string|null
    */
    public function getTriggerDisplay(): ?string {
        return $this->triggerDisplay;
    }

    /**
     * Gets the triggerType property value. The triggerType property
     * @return string|null
    */
    public function getTriggerType(): ?string {
        return $this->triggerType;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
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
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeStringValue('currentStepId', $this->getCurrentStepId());
        $writer->writeStringValue('currentStepName', $this->getCurrentStepName());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('executionKey', $this->getExecutionKey());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('internalErrorDetails', $this->getInternalErrorDetails());
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
        $writer->writeStringValue('sourceEventId', $this->getSourceEventId());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusDisplay', $this->getStatusDisplay());
        $writer->writeStringValue('triggerDisplay', $this->getTriggerDisplay());
        $writer->writeStringValue('triggerType', $this->getTriggerType());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actions property value. The actions property
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
     * Sets the automationId property value. The automationId property
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->automationId = $value;
    }

    /**
     * Sets the automationName property value. The automationName property
     * @param string|null $value Value to set for the automationName property.
    */
    public function setAutomationName(?string $value): void {
        $this->automationName = $value;
    }

    /**
     * Sets the businessId property value. The businessId property
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the cancelledAt property value. The cancelledAt property
     * @param DateTime|null $value Value to set for the cancelledAt property.
    */
    public function setCancelledAt(?DateTime $value): void {
        $this->cancelledAt = $value;
    }

    /**
     * Sets the completedAt property value. The completedAt property
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the currentStepId property value. The currentStepId property
     * @param string|null $value Value to set for the currentStepId property.
    */
    public function setCurrentStepId(?string $value): void {
        $this->currentStepId = $value;
    }

    /**
     * Sets the currentStepName property value. The currentStepName property
     * @param string|null $value Value to set for the currentStepName property.
    */
    public function setCurrentStepName(?string $value): void {
        $this->currentStepName = $value;
    }

    /**
     * Sets the events property value. The events property
     * @param array<AutomationWorkflowEventResponse>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the executionKey property value. The executionKey property
     * @param string|null $value Value to set for the executionKey property.
    */
    public function setExecutionKey(?string $value): void {
        $this->executionKey = $value;
    }

    /**
     * Sets the failedAt property value. The failedAt property
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the internalErrorDetails property value. The internalErrorDetails property
     * @param string|null $value Value to set for the internalErrorDetails property.
    */
    public function setInternalErrorDetails(?string $value): void {
        $this->internalErrorDetails = $value;
    }

    /**
     * Sets the lastActionSummary property value. The lastActionSummary property
     * @param string|null $value Value to set for the lastActionSummary property.
    */
    public function setLastActionSummary(?string $value): void {
        $this->lastActionSummary = $value;
    }

    /**
     * Sets the lastErrorCode property value. The lastErrorCode property
     * @param string|null $value Value to set for the lastErrorCode property.
    */
    public function setLastErrorCode(?string $value): void {
        $this->lastErrorCode = $value;
    }

    /**
     * Sets the lastErrorMessage property value. The lastErrorMessage property
     * @param string|null $value Value to set for the lastErrorMessage property.
    */
    public function setLastErrorMessage(?string $value): void {
        $this->lastErrorMessage = $value;
    }

    /**
     * Sets the lastExecutionAt property value. The lastExecutionAt property
     * @param DateTime|null $value Value to set for the lastExecutionAt property.
    */
    public function setLastExecutionAt(?DateTime $value): void {
        $this->lastExecutionAt = $value;
    }

    /**
     * Sets the leadId property value. The leadId property
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the maxRetryCount property value. The maxRetryCount property
     * @param int|null $value Value to set for the maxRetryCount property.
    */
    public function setMaxRetryCount(?int $value): void {
        $this->maxRetryCount = $value;
    }

    /**
     * Sets the nextExecutionAt property value. The nextExecutionAt property
     * @param DateTime|null $value Value to set for the nextExecutionAt property.
    */
    public function setNextExecutionAt(?DateTime $value): void {
        $this->nextExecutionAt = $value;
    }

    /**
     * Sets the nextRetryAt property value. The nextRetryAt property
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the retryCount property value. The retryCount property
     * @param int|null $value Value to set for the retryCount property.
    */
    public function setRetryCount(?int $value): void {
        $this->retryCount = $value;
    }

    /**
     * Sets the skipReasonCode property value. The skipReasonCode property
     * @param string|null $value Value to set for the skipReasonCode property.
    */
    public function setSkipReasonCode(?string $value): void {
        $this->skipReasonCode = $value;
    }

    /**
     * Sets the skipReasonDisplay property value. The skipReasonDisplay property
     * @param string|null $value Value to set for the skipReasonDisplay property.
    */
    public function setSkipReasonDisplay(?string $value): void {
        $this->skipReasonDisplay = $value;
    }

    /**
     * Sets the sourceEventId property value. The sourceEventId property
     * @param string|null $value Value to set for the sourceEventId property.
    */
    public function setSourceEventId(?string $value): void {
        $this->sourceEventId = $value;
    }

    /**
     * Sets the startedAt property value. The startedAt property
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDisplay property value. The statusDisplay property
     * @param string|null $value Value to set for the statusDisplay property.
    */
    public function setStatusDisplay(?string $value): void {
        $this->statusDisplay = $value;
    }

    /**
     * Sets the triggerDisplay property value. The triggerDisplay property
     * @param string|null $value Value to set for the triggerDisplay property.
    */
    public function setTriggerDisplay(?string $value): void {
        $this->triggerDisplay = $value;
    }

    /**
     * Sets the triggerType property value. The triggerType property
     * @param string|null $value Value to set for the triggerType property.
    */
    public function setTriggerType(?string $value): void {
        $this->triggerType = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
