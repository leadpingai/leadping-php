<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * User-safe action status returned for lead automation workflow visibility.
*/
class AutomationWorkflowActionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionType Action type classification for this Leadping automation workflow action.
    */
    private ?string $actionType = null;
    
    /**
     * @var string|null $actionTypeDisplay Human-readable action type display for this Leadping automation workflow action.
    */
    private ?string $actionTypeDisplay = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $completedAt Date and time when the automation workflow action completed.
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var DateTime|null $failedAt Date and time when the automation workflow action failed.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $failureCode Reason or diagnostic code that explains the current outcome for this Leadping automation workflow action.
    */
    private ?string $failureCode = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the automation workflow action.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $nextRetryAt Date and time when the next retry is scheduled.
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var int|null $retryCount Total number of retry records represented by this Leadping automation workflow action.
    */
    private ?int $retryCount = null;
    
    /**
     * @var string|null $safeReason Safe reason associated with this Leadping automation workflow action.
    */
    private ?string $safeReason = null;
    
    /**
     * @var DateTime|null $scheduledAt Date and time when the automation workflow action was scheduled.
    */
    private ?DateTime $scheduledAt = null;
    
    /**
     * @var DateTime|null $skippedAt Date and time when the workflow action was skipped.
    */
    private ?DateTime $skippedAt = null;
    
    /**
     * @var DateTime|null $startedAt Date and time when the automation workflow action started.
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var string|null $status Current status for this Leadping automation workflow action.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $statusDisplay Human-readable status display for this Leadping automation workflow action.
    */
    private ?string $statusDisplay = null;
    
    /**
     * @var string|null $stepDisplayName Human-readable step display name associated with this Leadping automation workflow action.
    */
    private ?string $stepDisplayName = null;
    
    /**
     * @var string|null $stepId Unique identifier of the step associated with this Leadping automation workflow action.
    */
    private ?string $stepId = null;
    
    /**
     * @var int|null $stepOrder Step order associated with this Leadping automation workflow action.
    */
    private ?int $stepOrder = null;
    
    /**
     * @var string|null $userSummary Human-readable user summary for this Leadping automation workflow action.
    */
    private ?string $userSummary = null;
    
    /**
     * Instantiates a new AutomationWorkflowActionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationWorkflowActionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationWorkflowActionResponse {
        return new AutomationWorkflowActionResponse();
    }

    /**
     * Gets the actionType property value. Action type classification for this Leadping automation workflow action.
     * @return string|null
    */
    public function getActionType(): ?string {
        return $this->actionType;
    }

    /**
     * Gets the actionTypeDisplay property value. Human-readable action type display for this Leadping automation workflow action.
     * @return string|null
    */
    public function getActionTypeDisplay(): ?string {
        return $this->actionTypeDisplay;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completedAt property value. Date and time when the automation workflow action completed.
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the failedAt property value. Date and time when the automation workflow action failed.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * Gets the failureCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow action.
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
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getStringValue()),
            'actionTypeDisplay' => fn(ParseNode $n) => $o->setActionTypeDisplay($n->getStringValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'failureCode' => fn(ParseNode $n) => $o->setFailureCode($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'nextRetryAt' => fn(ParseNode $n) => $o->setNextRetryAt($n->getDateTimeValue()),
            'retryCount' => fn(ParseNode $n) => $o->setRetryCount($n->getIntegerValue()),
            'safeReason' => fn(ParseNode $n) => $o->setSafeReason($n->getStringValue()),
            'scheduledAt' => fn(ParseNode $n) => $o->setScheduledAt($n->getDateTimeValue()),
            'skippedAt' => fn(ParseNode $n) => $o->setSkippedAt($n->getDateTimeValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'statusDisplay' => fn(ParseNode $n) => $o->setStatusDisplay($n->getStringValue()),
            'stepDisplayName' => fn(ParseNode $n) => $o->setStepDisplayName($n->getStringValue()),
            'stepId' => fn(ParseNode $n) => $o->setStepId($n->getStringValue()),
            'stepOrder' => fn(ParseNode $n) => $o->setStepOrder($n->getIntegerValue()),
            'userSummary' => fn(ParseNode $n) => $o->setUserSummary($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the automation workflow action.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the nextRetryAt property value. Date and time when the next retry is scheduled.
     * @return DateTime|null
    */
    public function getNextRetryAt(): ?DateTime {
        return $this->nextRetryAt;
    }

    /**
     * Gets the retryCount property value. Total number of retry records represented by this Leadping automation workflow action.
     * @return int|null
    */
    public function getRetryCount(): ?int {
        return $this->retryCount;
    }

    /**
     * Gets the safeReason property value. Safe reason associated with this Leadping automation workflow action.
     * @return string|null
    */
    public function getSafeReason(): ?string {
        return $this->safeReason;
    }

    /**
     * Gets the scheduledAt property value. Date and time when the automation workflow action was scheduled.
     * @return DateTime|null
    */
    public function getScheduledAt(): ?DateTime {
        return $this->scheduledAt;
    }

    /**
     * Gets the skippedAt property value. Date and time when the workflow action was skipped.
     * @return DateTime|null
    */
    public function getSkippedAt(): ?DateTime {
        return $this->skippedAt;
    }

    /**
     * Gets the startedAt property value. Date and time when the automation workflow action started.
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. Current status for this Leadping automation workflow action.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the statusDisplay property value. Human-readable status display for this Leadping automation workflow action.
     * @return string|null
    */
    public function getStatusDisplay(): ?string {
        return $this->statusDisplay;
    }

    /**
     * Gets the stepDisplayName property value. Human-readable step display name associated with this Leadping automation workflow action.
     * @return string|null
    */
    public function getStepDisplayName(): ?string {
        return $this->stepDisplayName;
    }

    /**
     * Gets the stepId property value. Unique identifier of the step associated with this Leadping automation workflow action.
     * @return string|null
    */
    public function getStepId(): ?string {
        return $this->stepId;
    }

    /**
     * Gets the stepOrder property value. Step order associated with this Leadping automation workflow action.
     * @return int|null
    */
    public function getStepOrder(): ?int {
        return $this->stepOrder;
    }

    /**
     * Gets the userSummary property value. Human-readable user summary for this Leadping automation workflow action.
     * @return string|null
    */
    public function getUserSummary(): ?string {
        return $this->userSummary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionType', $this->getActionType());
        $writer->writeStringValue('actionTypeDisplay', $this->getActionTypeDisplay());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('failureCode', $this->getFailureCode());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('nextRetryAt', $this->getNextRetryAt());
        $writer->writeIntegerValue('retryCount', $this->getRetryCount());
        $writer->writeStringValue('safeReason', $this->getSafeReason());
        $writer->writeDateTimeValue('scheduledAt', $this->getScheduledAt());
        $writer->writeDateTimeValue('skippedAt', $this->getSkippedAt());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('statusDisplay', $this->getStatusDisplay());
        $writer->writeStringValue('stepDisplayName', $this->getStepDisplayName());
        $writer->writeStringValue('stepId', $this->getStepId());
        $writer->writeIntegerValue('stepOrder', $this->getStepOrder());
        $writer->writeStringValue('userSummary', $this->getUserSummary());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionType property value. Action type classification for this Leadping automation workflow action.
     * @param string|null $value Value to set for the actionType property.
    */
    public function setActionType(?string $value): void {
        $this->actionType = $value;
    }

    /**
     * Sets the actionTypeDisplay property value. Human-readable action type display for this Leadping automation workflow action.
     * @param string|null $value Value to set for the actionTypeDisplay property.
    */
    public function setActionTypeDisplay(?string $value): void {
        $this->actionTypeDisplay = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the completedAt property value. Date and time when the automation workflow action completed.
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the failedAt property value. Date and time when the automation workflow action failed.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the failureCode property value. Reason or diagnostic code that explains the current outcome for this Leadping automation workflow action.
     * @param string|null $value Value to set for the failureCode property.
    */
    public function setFailureCode(?string $value): void {
        $this->failureCode = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the automation workflow action.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the nextRetryAt property value. Date and time when the next retry is scheduled.
     * @param DateTime|null $value Value to set for the nextRetryAt property.
    */
    public function setNextRetryAt(?DateTime $value): void {
        $this->nextRetryAt = $value;
    }

    /**
     * Sets the retryCount property value. Total number of retry records represented by this Leadping automation workflow action.
     * @param int|null $value Value to set for the retryCount property.
    */
    public function setRetryCount(?int $value): void {
        $this->retryCount = $value;
    }

    /**
     * Sets the safeReason property value. Safe reason associated with this Leadping automation workflow action.
     * @param string|null $value Value to set for the safeReason property.
    */
    public function setSafeReason(?string $value): void {
        $this->safeReason = $value;
    }

    /**
     * Sets the scheduledAt property value. Date and time when the automation workflow action was scheduled.
     * @param DateTime|null $value Value to set for the scheduledAt property.
    */
    public function setScheduledAt(?DateTime $value): void {
        $this->scheduledAt = $value;
    }

    /**
     * Sets the skippedAt property value. Date and time when the workflow action was skipped.
     * @param DateTime|null $value Value to set for the skippedAt property.
    */
    public function setSkippedAt(?DateTime $value): void {
        $this->skippedAt = $value;
    }

    /**
     * Sets the startedAt property value. Date and time when the automation workflow action started.
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. Current status for this Leadping automation workflow action.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDisplay property value. Human-readable status display for this Leadping automation workflow action.
     * @param string|null $value Value to set for the statusDisplay property.
    */
    public function setStatusDisplay(?string $value): void {
        $this->statusDisplay = $value;
    }

    /**
     * Sets the stepDisplayName property value. Human-readable step display name associated with this Leadping automation workflow action.
     * @param string|null $value Value to set for the stepDisplayName property.
    */
    public function setStepDisplayName(?string $value): void {
        $this->stepDisplayName = $value;
    }

    /**
     * Sets the stepId property value. Unique identifier of the step associated with this Leadping automation workflow action.
     * @param string|null $value Value to set for the stepId property.
    */
    public function setStepId(?string $value): void {
        $this->stepId = $value;
    }

    /**
     * Sets the stepOrder property value. Step order associated with this Leadping automation workflow action.
     * @param int|null $value Value to set for the stepOrder property.
    */
    public function setStepOrder(?int $value): void {
        $this->stepOrder = $value;
    }

    /**
     * Sets the userSummary property value. Human-readable user summary for this Leadping automation workflow action.
     * @param string|null $value Value to set for the userSummary property.
    */
    public function setUserSummary(?string $value): void {
        $this->userSummary = $value;
    }

}
