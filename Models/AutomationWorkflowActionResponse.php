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
     * @var string|null $actionType The actionType property
    */
    private ?string $actionType = null;
    
    /**
     * @var string|null $actionTypeDisplay The actionTypeDisplay property
    */
    private ?string $actionTypeDisplay = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adminDiagnostics The adminDiagnostics property
    */
    private ?string $adminDiagnostics = null;
    
    /**
     * @var DateTime|null $completedAt The completedAt property
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var DateTime|null $failedAt The failedAt property
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $failureCode The failureCode property
    */
    private ?string $failureCode = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $nextRetryAt The nextRetryAt property
    */
    private ?DateTime $nextRetryAt = null;
    
    /**
     * @var int|null $retryCount The retryCount property
    */
    private ?int $retryCount = null;
    
    /**
     * @var string|null $safeReason The safeReason property
    */
    private ?string $safeReason = null;
    
    /**
     * @var DateTime|null $scheduledAt The scheduledAt property
    */
    private ?DateTime $scheduledAt = null;
    
    /**
     * @var DateTime|null $skippedAt The skippedAt property
    */
    private ?DateTime $skippedAt = null;
    
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
     * @var string|null $stepDisplayName The stepDisplayName property
    */
    private ?string $stepDisplayName = null;
    
    /**
     * @var string|null $stepId The stepId property
    */
    private ?string $stepId = null;
    
    /**
     * @var int|null $stepOrder The stepOrder property
    */
    private ?int $stepOrder = null;
    
    /**
     * @var string|null $userSummary The userSummary property
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
     * Gets the actionType property value. The actionType property
     * @return string|null
    */
    public function getActionType(): ?string {
        return $this->actionType;
    }

    /**
     * Gets the actionTypeDisplay property value. The actionTypeDisplay property
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
     * Gets the adminDiagnostics property value. The adminDiagnostics property
     * @return string|null
    */
    public function getAdminDiagnostics(): ?string {
        return $this->adminDiagnostics;
    }

    /**
     * Gets the completedAt property value. The completedAt property
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the failedAt property value. The failedAt property
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * Gets the failureCode property value. The failureCode property
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
            'adminDiagnostics' => fn(ParseNode $n) => $o->setAdminDiagnostics($n->getStringValue()),
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
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
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
     * Gets the safeReason property value. The safeReason property
     * @return string|null
    */
    public function getSafeReason(): ?string {
        return $this->safeReason;
    }

    /**
     * Gets the scheduledAt property value. The scheduledAt property
     * @return DateTime|null
    */
    public function getScheduledAt(): ?DateTime {
        return $this->scheduledAt;
    }

    /**
     * Gets the skippedAt property value. The skippedAt property
     * @return DateTime|null
    */
    public function getSkippedAt(): ?DateTime {
        return $this->skippedAt;
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
     * Gets the stepDisplayName property value. The stepDisplayName property
     * @return string|null
    */
    public function getStepDisplayName(): ?string {
        return $this->stepDisplayName;
    }

    /**
     * Gets the stepId property value. The stepId property
     * @return string|null
    */
    public function getStepId(): ?string {
        return $this->stepId;
    }

    /**
     * Gets the stepOrder property value. The stepOrder property
     * @return int|null
    */
    public function getStepOrder(): ?int {
        return $this->stepOrder;
    }

    /**
     * Gets the userSummary property value. The userSummary property
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
        $writer->writeStringValue('adminDiagnostics', $this->getAdminDiagnostics());
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
     * Sets the actionType property value. The actionType property
     * @param string|null $value Value to set for the actionType property.
    */
    public function setActionType(?string $value): void {
        $this->actionType = $value;
    }

    /**
     * Sets the actionTypeDisplay property value. The actionTypeDisplay property
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
     * Sets the adminDiagnostics property value. The adminDiagnostics property
     * @param string|null $value Value to set for the adminDiagnostics property.
    */
    public function setAdminDiagnostics(?string $value): void {
        $this->adminDiagnostics = $value;
    }

    /**
     * Sets the completedAt property value. The completedAt property
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the failedAt property value. The failedAt property
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the failureCode property value. The failureCode property
     * @param string|null $value Value to set for the failureCode property.
    */
    public function setFailureCode(?string $value): void {
        $this->failureCode = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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
     * Sets the safeReason property value. The safeReason property
     * @param string|null $value Value to set for the safeReason property.
    */
    public function setSafeReason(?string $value): void {
        $this->safeReason = $value;
    }

    /**
     * Sets the scheduledAt property value. The scheduledAt property
     * @param DateTime|null $value Value to set for the scheduledAt property.
    */
    public function setScheduledAt(?DateTime $value): void {
        $this->scheduledAt = $value;
    }

    /**
     * Sets the skippedAt property value. The skippedAt property
     * @param DateTime|null $value Value to set for the skippedAt property.
    */
    public function setSkippedAt(?DateTime $value): void {
        $this->skippedAt = $value;
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
     * Sets the stepDisplayName property value. The stepDisplayName property
     * @param string|null $value Value to set for the stepDisplayName property.
    */
    public function setStepDisplayName(?string $value): void {
        $this->stepDisplayName = $value;
    }

    /**
     * Sets the stepId property value. The stepId property
     * @param string|null $value Value to set for the stepId property.
    */
    public function setStepId(?string $value): void {
        $this->stepId = $value;
    }

    /**
     * Sets the stepOrder property value. The stepOrder property
     * @param int|null $value Value to set for the stepOrder property.
    */
    public function setStepOrder(?int $value): void {
        $this->stepOrder = $value;
    }

    /**
     * Sets the userSummary property value. The userSummary property
     * @param string|null $value Value to set for the userSummary property.
    */
    public function setUserSummary(?string $value): void {
        $this->userSummary = $value;
    }

}
