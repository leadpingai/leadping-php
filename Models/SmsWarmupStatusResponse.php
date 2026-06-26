<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing SMS warmup status data returned to callers.
*/
class SmsWarmupStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $blockReason The human-readable block reason explaining this SMS warmup status.
    */
    private ?string $blockReason = null;
    
    /**
     * @var bool|null $canPause Whether the caller can pause this SMS warmup status.
    */
    private ?bool $canPause = null;
    
    /**
     * @var bool|null $canResume Whether the caller can resume this SMS warmup status.
    */
    private ?bool $canResume = null;
    
    /**
     * @var int|null $carrierRejectionCount The carrier rejection count for this SMS warmup status.
    */
    private ?int $carrierRejectionCount = null;
    
    /**
     * @var DateTime|null $completedAt The date and time for the completed at value on this SMS warmup status.
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var int|null $deliveredCount The delivered count for this SMS warmup status.
    */
    private ?int $deliveredCount = null;
    
    /**
     * @var float|null $deliverySuccessRate The delivery success rate metric for this SMS warmup status.
    */
    private ?float $deliverySuccessRate = null;
    
    /**
     * @var int|null $failureCount The failure count for this SMS warmup status.
    */
    private ?int $failureCount = null;
    
    /**
     * @var bool|null $globalWarmupEnabled Whether global warmup is enabled for this SMS warmup status.
    */
    private ?bool $globalWarmupEnabled = null;
    
    /**
     * @var int|null $healthScore The health score metric for this SMS warmup status.
    */
    private ?int $healthScore = null;
    
    /**
     * @var bool|null $isApprovedTestDestination Whether this SMS warmup status is approved test destination.
    */
    private ?bool $isApprovedTestDestination = null;
    
    /**
     * @var bool|null $isInternalPool Whether this SMS warmup status is internal pool.
    */
    private ?bool $isInternalPool = null;
    
    /**
     * @var bool|null $isMessagingProgramApproved Whether this SMS warmup status is messaging program approved.
    */
    private ?bool $isMessagingProgramApproved = null;
    
    /**
     * @var DateTime|null $lastHealthSnapshotAt The date and time for the last health snapshot at value on this SMS warmup status.
    */
    private ?DateTime $lastHealthSnapshotAt = null;
    
    /**
     * @var DateTime|null $lastSuccessfulMessageAt The date and time for the last successful message at value on this SMS warmup status.
    */
    private ?DateTime $lastSuccessfulMessageAt = null;
    
    /**
     * @var DateTime|null $nextScheduledActionAt The date and time for the next scheduled action at value on this SMS warmup status.
    */
    private ?DateTime $nextScheduledActionAt = null;
    
    /**
     * @var int|null $optOutSignalCount The opt out signal count for this SMS warmup status.
    */
    private ?int $optOutSignalCount = null;
    
    /**
     * @var string|null $pauseReason The human-readable pause reason explaining this SMS warmup status.
    */
    private ?string $pauseReason = null;
    
    /**
     * @var string|null $phoneNumber The phone number associated with this SMS warmup status.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $phoneNumberId The phone number ID associated with this SMS warmup status.
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var int|null $progressPercent The progress percent metric for this SMS warmup status.
    */
    private ?int $progressPercent = null;
    
    /**
     * @var int|null $receivedCount The received count for this SMS warmup status.
    */
    private ?int $receivedCount = null;
    
    /**
     * @var array<SmsWarmupActionResponse>|null $recentActions The recent actions included with this SMS warmup status.
    */
    private ?array $recentActions = null;
    
    /**
     * @var int|null $sentCount The sent count for this SMS warmup status.
    */
    private ?int $sentCount = null;
    
    /**
     * @var int|null $spamSignalCount The spam signal count for this SMS warmup status.
    */
    private ?int $spamSignalCount = null;
    
    /**
     * @var DateTime|null $startedAt The date and time for the started at value on this SMS warmup status.
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var SmsWarmupHealthState|null $status The current status for this SMS warmup status.
    */
    private ?SmsWarmupHealthState $status = null;
    
    /**
     * @var SmsWarmupUiState|null $uiState The current UI state for this SMS warmup status.
    */
    private ?SmsWarmupUiState $uiState = null;
    
    /**
     * @var bool|null $warmupEnabled Whether warmup is enabled for this SMS warmup status.
    */
    private ?bool $warmupEnabled = null;
    
    /**
     * Instantiates a new SmsWarmupStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsWarmupStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsWarmupStatusResponse {
        return new SmsWarmupStatusResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the blockReason property value. The human-readable block reason explaining this SMS warmup status.
     * @return string|null
    */
    public function getBlockReason(): ?string {
        return $this->blockReason;
    }

    /**
     * Gets the canPause property value. Whether the caller can pause this SMS warmup status.
     * @return bool|null
    */
    public function getCanPause(): ?bool {
        return $this->canPause;
    }

    /**
     * Gets the canResume property value. Whether the caller can resume this SMS warmup status.
     * @return bool|null
    */
    public function getCanResume(): ?bool {
        return $this->canResume;
    }

    /**
     * Gets the carrierRejectionCount property value. The carrier rejection count for this SMS warmup status.
     * @return int|null
    */
    public function getCarrierRejectionCount(): ?int {
        return $this->carrierRejectionCount;
    }

    /**
     * Gets the completedAt property value. The date and time for the completed at value on this SMS warmup status.
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the deliveredCount property value. The delivered count for this SMS warmup status.
     * @return int|null
    */
    public function getDeliveredCount(): ?int {
        return $this->deliveredCount;
    }

    /**
     * Gets the deliverySuccessRate property value. The delivery success rate metric for this SMS warmup status.
     * @return float|null
    */
    public function getDeliverySuccessRate(): ?float {
        return $this->deliverySuccessRate;
    }

    /**
     * Gets the failureCount property value. The failure count for this SMS warmup status.
     * @return int|null
    */
    public function getFailureCount(): ?int {
        return $this->failureCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockReason' => fn(ParseNode $n) => $o->setBlockReason($n->getStringValue()),
            'canPause' => fn(ParseNode $n) => $o->setCanPause($n->getBooleanValue()),
            'canResume' => fn(ParseNode $n) => $o->setCanResume($n->getBooleanValue()),
            'carrierRejectionCount' => fn(ParseNode $n) => $o->setCarrierRejectionCount($n->getIntegerValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'deliveredCount' => fn(ParseNode $n) => $o->setDeliveredCount($n->getIntegerValue()),
            'deliverySuccessRate' => fn(ParseNode $n) => $o->setDeliverySuccessRate($n->getFloatValue()),
            'failureCount' => fn(ParseNode $n) => $o->setFailureCount($n->getIntegerValue()),
            'globalWarmupEnabled' => fn(ParseNode $n) => $o->setGlobalWarmupEnabled($n->getBooleanValue()),
            'healthScore' => fn(ParseNode $n) => $o->setHealthScore($n->getIntegerValue()),
            'isApprovedTestDestination' => fn(ParseNode $n) => $o->setIsApprovedTestDestination($n->getBooleanValue()),
            'isInternalPool' => fn(ParseNode $n) => $o->setIsInternalPool($n->getBooleanValue()),
            'isMessagingProgramApproved' => fn(ParseNode $n) => $o->setIsMessagingProgramApproved($n->getBooleanValue()),
            'lastHealthSnapshotAt' => fn(ParseNode $n) => $o->setLastHealthSnapshotAt($n->getDateTimeValue()),
            'lastSuccessfulMessageAt' => fn(ParseNode $n) => $o->setLastSuccessfulMessageAt($n->getDateTimeValue()),
            'nextScheduledActionAt' => fn(ParseNode $n) => $o->setNextScheduledActionAt($n->getDateTimeValue()),
            'optOutSignalCount' => fn(ParseNode $n) => $o->setOptOutSignalCount($n->getIntegerValue()),
            'pauseReason' => fn(ParseNode $n) => $o->setPauseReason($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'progressPercent' => fn(ParseNode $n) => $o->setProgressPercent($n->getIntegerValue()),
            'receivedCount' => fn(ParseNode $n) => $o->setReceivedCount($n->getIntegerValue()),
            'recentActions' => fn(ParseNode $n) => $o->setRecentActions($n->getCollectionOfObjectValues([SmsWarmupActionResponse::class, 'createFromDiscriminatorValue'])),
            'sentCount' => fn(ParseNode $n) => $o->setSentCount($n->getIntegerValue()),
            'spamSignalCount' => fn(ParseNode $n) => $o->setSpamSignalCount($n->getIntegerValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SmsWarmupHealthState::class)),
            'uiState' => fn(ParseNode $n) => $o->setUiState($n->getObjectValue([SmsWarmupUiState::class, 'createFromDiscriminatorValue'])),
            'warmupEnabled' => fn(ParseNode $n) => $o->setWarmupEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the globalWarmupEnabled property value. Whether global warmup is enabled for this SMS warmup status.
     * @return bool|null
    */
    public function getGlobalWarmupEnabled(): ?bool {
        return $this->globalWarmupEnabled;
    }

    /**
     * Gets the healthScore property value. The health score metric for this SMS warmup status.
     * @return int|null
    */
    public function getHealthScore(): ?int {
        return $this->healthScore;
    }

    /**
     * Gets the isApprovedTestDestination property value. Whether this SMS warmup status is approved test destination.
     * @return bool|null
    */
    public function getIsApprovedTestDestination(): ?bool {
        return $this->isApprovedTestDestination;
    }

    /**
     * Gets the isInternalPool property value. Whether this SMS warmup status is internal pool.
     * @return bool|null
    */
    public function getIsInternalPool(): ?bool {
        return $this->isInternalPool;
    }

    /**
     * Gets the isMessagingProgramApproved property value. Whether this SMS warmup status is messaging program approved.
     * @return bool|null
    */
    public function getIsMessagingProgramApproved(): ?bool {
        return $this->isMessagingProgramApproved;
    }

    /**
     * Gets the lastHealthSnapshotAt property value. The date and time for the last health snapshot at value on this SMS warmup status.
     * @return DateTime|null
    */
    public function getLastHealthSnapshotAt(): ?DateTime {
        return $this->lastHealthSnapshotAt;
    }

    /**
     * Gets the lastSuccessfulMessageAt property value. The date and time for the last successful message at value on this SMS warmup status.
     * @return DateTime|null
    */
    public function getLastSuccessfulMessageAt(): ?DateTime {
        return $this->lastSuccessfulMessageAt;
    }

    /**
     * Gets the nextScheduledActionAt property value. The date and time for the next scheduled action at value on this SMS warmup status.
     * @return DateTime|null
    */
    public function getNextScheduledActionAt(): ?DateTime {
        return $this->nextScheduledActionAt;
    }

    /**
     * Gets the optOutSignalCount property value. The opt out signal count for this SMS warmup status.
     * @return int|null
    */
    public function getOptOutSignalCount(): ?int {
        return $this->optOutSignalCount;
    }

    /**
     * Gets the pauseReason property value. The human-readable pause reason explaining this SMS warmup status.
     * @return string|null
    */
    public function getPauseReason(): ?string {
        return $this->pauseReason;
    }

    /**
     * Gets the phoneNumber property value. The phone number associated with this SMS warmup status.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the phoneNumberId property value. The phone number ID associated with this SMS warmup status.
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the progressPercent property value. The progress percent metric for this SMS warmup status.
     * @return int|null
    */
    public function getProgressPercent(): ?int {
        return $this->progressPercent;
    }

    /**
     * Gets the receivedCount property value. The received count for this SMS warmup status.
     * @return int|null
    */
    public function getReceivedCount(): ?int {
        return $this->receivedCount;
    }

    /**
     * Gets the recentActions property value. The recent actions included with this SMS warmup status.
     * @return array<SmsWarmupActionResponse>|null
    */
    public function getRecentActions(): ?array {
        return $this->recentActions;
    }

    /**
     * Gets the sentCount property value. The sent count for this SMS warmup status.
     * @return int|null
    */
    public function getSentCount(): ?int {
        return $this->sentCount;
    }

    /**
     * Gets the spamSignalCount property value. The spam signal count for this SMS warmup status.
     * @return int|null
    */
    public function getSpamSignalCount(): ?int {
        return $this->spamSignalCount;
    }

    /**
     * Gets the startedAt property value. The date and time for the started at value on this SMS warmup status.
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. The current status for this SMS warmup status.
     * @return SmsWarmupHealthState|null
    */
    public function getStatus(): ?SmsWarmupHealthState {
        return $this->status;
    }

    /**
     * Gets the uiState property value. The current UI state for this SMS warmup status.
     * @return SmsWarmupUiState|null
    */
    public function getUiState(): ?SmsWarmupUiState {
        return $this->uiState;
    }

    /**
     * Gets the warmupEnabled property value. Whether warmup is enabled for this SMS warmup status.
     * @return bool|null
    */
    public function getWarmupEnabled(): ?bool {
        return $this->warmupEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('blockReason', $this->getBlockReason());
        $writer->writeBooleanValue('canPause', $this->getCanPause());
        $writer->writeBooleanValue('canResume', $this->getCanResume());
        $writer->writeIntegerValue('carrierRejectionCount', $this->getCarrierRejectionCount());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeIntegerValue('deliveredCount', $this->getDeliveredCount());
        $writer->writeFloatValue('deliverySuccessRate', $this->getDeliverySuccessRate());
        $writer->writeIntegerValue('failureCount', $this->getFailureCount());
        $writer->writeBooleanValue('globalWarmupEnabled', $this->getGlobalWarmupEnabled());
        $writer->writeIntegerValue('healthScore', $this->getHealthScore());
        $writer->writeBooleanValue('isApprovedTestDestination', $this->getIsApprovedTestDestination());
        $writer->writeBooleanValue('isInternalPool', $this->getIsInternalPool());
        $writer->writeBooleanValue('isMessagingProgramApproved', $this->getIsMessagingProgramApproved());
        $writer->writeDateTimeValue('lastHealthSnapshotAt', $this->getLastHealthSnapshotAt());
        $writer->writeDateTimeValue('lastSuccessfulMessageAt', $this->getLastSuccessfulMessageAt());
        $writer->writeDateTimeValue('nextScheduledActionAt', $this->getNextScheduledActionAt());
        $writer->writeIntegerValue('optOutSignalCount', $this->getOptOutSignalCount());
        $writer->writeStringValue('pauseReason', $this->getPauseReason());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeIntegerValue('progressPercent', $this->getProgressPercent());
        $writer->writeIntegerValue('receivedCount', $this->getReceivedCount());
        $writer->writeCollectionOfObjectValues('recentActions', $this->getRecentActions());
        $writer->writeIntegerValue('sentCount', $this->getSentCount());
        $writer->writeIntegerValue('spamSignalCount', $this->getSpamSignalCount());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('uiState', $this->getUiState());
        $writer->writeBooleanValue('warmupEnabled', $this->getWarmupEnabled());
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
     * Sets the blockReason property value. The human-readable block reason explaining this SMS warmup status.
     * @param string|null $value Value to set for the blockReason property.
    */
    public function setBlockReason(?string $value): void {
        $this->blockReason = $value;
    }

    /**
     * Sets the canPause property value. Whether the caller can pause this SMS warmup status.
     * @param bool|null $value Value to set for the canPause property.
    */
    public function setCanPause(?bool $value): void {
        $this->canPause = $value;
    }

    /**
     * Sets the canResume property value. Whether the caller can resume this SMS warmup status.
     * @param bool|null $value Value to set for the canResume property.
    */
    public function setCanResume(?bool $value): void {
        $this->canResume = $value;
    }

    /**
     * Sets the carrierRejectionCount property value. The carrier rejection count for this SMS warmup status.
     * @param int|null $value Value to set for the carrierRejectionCount property.
    */
    public function setCarrierRejectionCount(?int $value): void {
        $this->carrierRejectionCount = $value;
    }

    /**
     * Sets the completedAt property value. The date and time for the completed at value on this SMS warmup status.
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the deliveredCount property value. The delivered count for this SMS warmup status.
     * @param int|null $value Value to set for the deliveredCount property.
    */
    public function setDeliveredCount(?int $value): void {
        $this->deliveredCount = $value;
    }

    /**
     * Sets the deliverySuccessRate property value. The delivery success rate metric for this SMS warmup status.
     * @param float|null $value Value to set for the deliverySuccessRate property.
    */
    public function setDeliverySuccessRate(?float $value): void {
        $this->deliverySuccessRate = $value;
    }

    /**
     * Sets the failureCount property value. The failure count for this SMS warmup status.
     * @param int|null $value Value to set for the failureCount property.
    */
    public function setFailureCount(?int $value): void {
        $this->failureCount = $value;
    }

    /**
     * Sets the globalWarmupEnabled property value. Whether global warmup is enabled for this SMS warmup status.
     * @param bool|null $value Value to set for the globalWarmupEnabled property.
    */
    public function setGlobalWarmupEnabled(?bool $value): void {
        $this->globalWarmupEnabled = $value;
    }

    /**
     * Sets the healthScore property value. The health score metric for this SMS warmup status.
     * @param int|null $value Value to set for the healthScore property.
    */
    public function setHealthScore(?int $value): void {
        $this->healthScore = $value;
    }

    /**
     * Sets the isApprovedTestDestination property value. Whether this SMS warmup status is approved test destination.
     * @param bool|null $value Value to set for the isApprovedTestDestination property.
    */
    public function setIsApprovedTestDestination(?bool $value): void {
        $this->isApprovedTestDestination = $value;
    }

    /**
     * Sets the isInternalPool property value. Whether this SMS warmup status is internal pool.
     * @param bool|null $value Value to set for the isInternalPool property.
    */
    public function setIsInternalPool(?bool $value): void {
        $this->isInternalPool = $value;
    }

    /**
     * Sets the isMessagingProgramApproved property value. Whether this SMS warmup status is messaging program approved.
     * @param bool|null $value Value to set for the isMessagingProgramApproved property.
    */
    public function setIsMessagingProgramApproved(?bool $value): void {
        $this->isMessagingProgramApproved = $value;
    }

    /**
     * Sets the lastHealthSnapshotAt property value. The date and time for the last health snapshot at value on this SMS warmup status.
     * @param DateTime|null $value Value to set for the lastHealthSnapshotAt property.
    */
    public function setLastHealthSnapshotAt(?DateTime $value): void {
        $this->lastHealthSnapshotAt = $value;
    }

    /**
     * Sets the lastSuccessfulMessageAt property value. The date and time for the last successful message at value on this SMS warmup status.
     * @param DateTime|null $value Value to set for the lastSuccessfulMessageAt property.
    */
    public function setLastSuccessfulMessageAt(?DateTime $value): void {
        $this->lastSuccessfulMessageAt = $value;
    }

    /**
     * Sets the nextScheduledActionAt property value. The date and time for the next scheduled action at value on this SMS warmup status.
     * @param DateTime|null $value Value to set for the nextScheduledActionAt property.
    */
    public function setNextScheduledActionAt(?DateTime $value): void {
        $this->nextScheduledActionAt = $value;
    }

    /**
     * Sets the optOutSignalCount property value. The opt out signal count for this SMS warmup status.
     * @param int|null $value Value to set for the optOutSignalCount property.
    */
    public function setOptOutSignalCount(?int $value): void {
        $this->optOutSignalCount = $value;
    }

    /**
     * Sets the pauseReason property value. The human-readable pause reason explaining this SMS warmup status.
     * @param string|null $value Value to set for the pauseReason property.
    */
    public function setPauseReason(?string $value): void {
        $this->pauseReason = $value;
    }

    /**
     * Sets the phoneNumber property value. The phone number associated with this SMS warmup status.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the phoneNumberId property value. The phone number ID associated with this SMS warmup status.
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the progressPercent property value. The progress percent metric for this SMS warmup status.
     * @param int|null $value Value to set for the progressPercent property.
    */
    public function setProgressPercent(?int $value): void {
        $this->progressPercent = $value;
    }

    /**
     * Sets the receivedCount property value. The received count for this SMS warmup status.
     * @param int|null $value Value to set for the receivedCount property.
    */
    public function setReceivedCount(?int $value): void {
        $this->receivedCount = $value;
    }

    /**
     * Sets the recentActions property value. The recent actions included with this SMS warmup status.
     * @param array<SmsWarmupActionResponse>|null $value Value to set for the recentActions property.
    */
    public function setRecentActions(?array $value): void {
        $this->recentActions = $value;
    }

    /**
     * Sets the sentCount property value. The sent count for this SMS warmup status.
     * @param int|null $value Value to set for the sentCount property.
    */
    public function setSentCount(?int $value): void {
        $this->sentCount = $value;
    }

    /**
     * Sets the spamSignalCount property value. The spam signal count for this SMS warmup status.
     * @param int|null $value Value to set for the spamSignalCount property.
    */
    public function setSpamSignalCount(?int $value): void {
        $this->spamSignalCount = $value;
    }

    /**
     * Sets the startedAt property value. The date and time for the started at value on this SMS warmup status.
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. The current status for this SMS warmup status.
     * @param SmsWarmupHealthState|null $value Value to set for the status property.
    */
    public function setStatus(?SmsWarmupHealthState $value): void {
        $this->status = $value;
    }

    /**
     * Sets the uiState property value. The current UI state for this SMS warmup status.
     * @param SmsWarmupUiState|null $value Value to set for the uiState property.
    */
    public function setUiState(?SmsWarmupUiState $value): void {
        $this->uiState = $value;
    }

    /**
     * Sets the warmupEnabled property value. Whether warmup is enabled for this SMS warmup status.
     * @param bool|null $value Value to set for the warmupEnabled property.
    */
    public function setWarmupEnabled(?bool $value): void {
        $this->warmupEnabled = $value;
    }

}
