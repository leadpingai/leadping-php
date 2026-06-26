<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing voice call warmup status for a Leadping-managed phone number.
*/
class PhoneNumberWarmupStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $callsThisHour The callsThisHour property
    */
    private ?int $callsThisHour = null;
    
    /**
     * @var int|null $callsToday The callsToday property
    */
    private ?int $callsToday = null;
    
    /**
     * @var DateTime|null $completedAt The completedAt property
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var int|null $consecutiveFailedCalls The consecutiveFailedCalls property
    */
    private ?int $consecutiveFailedCalls = null;
    
    /**
     * @var int|null $consecutiveSuccessfulCalls The consecutiveSuccessfulCalls property
    */
    private ?int $consecutiveSuccessfulCalls = null;
    
    /**
     * @var int|null $dailyCap The dailyCap property
    */
    private ?int $dailyCap = null;
    
    /**
     * @var string|null $failureReason The failureReason property
    */
    private ?string $failureReason = null;
    
    /**
     * @var int|null $hourlyCap The hourlyCap property
    */
    private ?int $hourlyCap = null;
    
    /**
     * @var DateTime|null $lastSuccessfulWarmupAt The lastSuccessfulWarmupAt property
    */
    private ?DateTime $lastSuccessfulWarmupAt = null;
    
    /**
     * @var bool|null $lowConfidenceTimeZone The lowConfidenceTimeZone property
    */
    private ?bool $lowConfidenceTimeZone = null;
    
    /**
     * @var int|null $maxTargetDurationSeconds The maxTargetDurationSeconds property
    */
    private ?int $maxTargetDurationSeconds = null;
    
    /**
     * @var int|null $minTargetDurationSeconds The minTargetDurationSeconds property
    */
    private ?int $minTargetDurationSeconds = null;
    
    /**
     * @var bool|null $networkWarmupOptIn The networkWarmupOptIn property
    */
    private ?bool $networkWarmupOptIn = null;
    
    /**
     * @var DateTime|null $nextEligibleAt The nextEligibleAt property
    */
    private ?DateTime $nextEligibleAt = null;
    
    /**
     * @var string|null $phoneNumber The phoneNumber property
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $phoneNumberId The phoneNumberId property
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var array<PhoneNumberWarmupCallResponse>|null $recentCalls The recentCalls property
    */
    private ?array $recentCalls = null;
    
    /**
     * @var PhoneNumberWarmupStage|null $stage Defines the supported voice call warmup stages for a Leadping-managed phone number.
    */
    private ?PhoneNumberWarmupStage $stage = null;
    
    /**
     * @var DateTime|null $startAt The startAt property
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var PhoneNumberWarmupHealthStatus|null $status Defines the supported health states for controlled internal voice call warmup.
    */
    private ?PhoneNumberWarmupHealthStatus $status = null;
    
    /**
     * @var string|null $timeZoneId The timeZoneId property
    */
    private ?string $timeZoneId = null;
    
    /**
     * @var int|null $totalFailedCalls The totalFailedCalls property
    */
    private ?int $totalFailedCalls = null;
    
    /**
     * @var int|null $totalSuccessfulCalls The totalSuccessfulCalls property
    */
    private ?int $totalSuccessfulCalls = null;
    
    /**
     * @var bool|null $warmupEnabled The warmupEnabled property
    */
    private ?bool $warmupEnabled = null;
    
    /**
     * Instantiates a new PhoneNumberWarmupStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberWarmupStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberWarmupStatusResponse {
        return new PhoneNumberWarmupStatusResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callsThisHour property value. The callsThisHour property
     * @return int|null
    */
    public function getCallsThisHour(): ?int {
        return $this->callsThisHour;
    }

    /**
     * Gets the callsToday property value. The callsToday property
     * @return int|null
    */
    public function getCallsToday(): ?int {
        return $this->callsToday;
    }

    /**
     * Gets the completedAt property value. The completedAt property
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the consecutiveFailedCalls property value. The consecutiveFailedCalls property
     * @return int|null
    */
    public function getConsecutiveFailedCalls(): ?int {
        return $this->consecutiveFailedCalls;
    }

    /**
     * Gets the consecutiveSuccessfulCalls property value. The consecutiveSuccessfulCalls property
     * @return int|null
    */
    public function getConsecutiveSuccessfulCalls(): ?int {
        return $this->consecutiveSuccessfulCalls;
    }

    /**
     * Gets the dailyCap property value. The dailyCap property
     * @return int|null
    */
    public function getDailyCap(): ?int {
        return $this->dailyCap;
    }

    /**
     * Gets the failureReason property value. The failureReason property
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
            'callsThisHour' => fn(ParseNode $n) => $o->setCallsThisHour($n->getIntegerValue()),
            'callsToday' => fn(ParseNode $n) => $o->setCallsToday($n->getIntegerValue()),
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'consecutiveFailedCalls' => fn(ParseNode $n) => $o->setConsecutiveFailedCalls($n->getIntegerValue()),
            'consecutiveSuccessfulCalls' => fn(ParseNode $n) => $o->setConsecutiveSuccessfulCalls($n->getIntegerValue()),
            'dailyCap' => fn(ParseNode $n) => $o->setDailyCap($n->getIntegerValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'hourlyCap' => fn(ParseNode $n) => $o->setHourlyCap($n->getIntegerValue()),
            'lastSuccessfulWarmupAt' => fn(ParseNode $n) => $o->setLastSuccessfulWarmupAt($n->getDateTimeValue()),
            'lowConfidenceTimeZone' => fn(ParseNode $n) => $o->setLowConfidenceTimeZone($n->getBooleanValue()),
            'maxTargetDurationSeconds' => fn(ParseNode $n) => $o->setMaxTargetDurationSeconds($n->getIntegerValue()),
            'minTargetDurationSeconds' => fn(ParseNode $n) => $o->setMinTargetDurationSeconds($n->getIntegerValue()),
            'networkWarmupOptIn' => fn(ParseNode $n) => $o->setNetworkWarmupOptIn($n->getBooleanValue()),
            'nextEligibleAt' => fn(ParseNode $n) => $o->setNextEligibleAt($n->getDateTimeValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'recentCalls' => fn(ParseNode $n) => $o->setRecentCalls($n->getCollectionOfObjectValues([PhoneNumberWarmupCallResponse::class, 'createFromDiscriminatorValue'])),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(PhoneNumberWarmupStage::class)),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PhoneNumberWarmupHealthStatus::class)),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
            'totalFailedCalls' => fn(ParseNode $n) => $o->setTotalFailedCalls($n->getIntegerValue()),
            'totalSuccessfulCalls' => fn(ParseNode $n) => $o->setTotalSuccessfulCalls($n->getIntegerValue()),
            'warmupEnabled' => fn(ParseNode $n) => $o->setWarmupEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the hourlyCap property value. The hourlyCap property
     * @return int|null
    */
    public function getHourlyCap(): ?int {
        return $this->hourlyCap;
    }

    /**
     * Gets the lastSuccessfulWarmupAt property value. The lastSuccessfulWarmupAt property
     * @return DateTime|null
    */
    public function getLastSuccessfulWarmupAt(): ?DateTime {
        return $this->lastSuccessfulWarmupAt;
    }

    /**
     * Gets the lowConfidenceTimeZone property value. The lowConfidenceTimeZone property
     * @return bool|null
    */
    public function getLowConfidenceTimeZone(): ?bool {
        return $this->lowConfidenceTimeZone;
    }

    /**
     * Gets the maxTargetDurationSeconds property value. The maxTargetDurationSeconds property
     * @return int|null
    */
    public function getMaxTargetDurationSeconds(): ?int {
        return $this->maxTargetDurationSeconds;
    }

    /**
     * Gets the minTargetDurationSeconds property value. The minTargetDurationSeconds property
     * @return int|null
    */
    public function getMinTargetDurationSeconds(): ?int {
        return $this->minTargetDurationSeconds;
    }

    /**
     * Gets the networkWarmupOptIn property value. The networkWarmupOptIn property
     * @return bool|null
    */
    public function getNetworkWarmupOptIn(): ?bool {
        return $this->networkWarmupOptIn;
    }

    /**
     * Gets the nextEligibleAt property value. The nextEligibleAt property
     * @return DateTime|null
    */
    public function getNextEligibleAt(): ?DateTime {
        return $this->nextEligibleAt;
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the phoneNumberId property value. The phoneNumberId property
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the recentCalls property value. The recentCalls property
     * @return array<PhoneNumberWarmupCallResponse>|null
    */
    public function getRecentCalls(): ?array {
        return $this->recentCalls;
    }

    /**
     * Gets the stage property value. Defines the supported voice call warmup stages for a Leadping-managed phone number.
     * @return PhoneNumberWarmupStage|null
    */
    public function getStage(): ?PhoneNumberWarmupStage {
        return $this->stage;
    }

    /**
     * Gets the startAt property value. The startAt property
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the status property value. Defines the supported health states for controlled internal voice call warmup.
     * @return PhoneNumberWarmupHealthStatus|null
    */
    public function getStatus(): ?PhoneNumberWarmupHealthStatus {
        return $this->status;
    }

    /**
     * Gets the timeZoneId property value. The timeZoneId property
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Gets the totalFailedCalls property value. The totalFailedCalls property
     * @return int|null
    */
    public function getTotalFailedCalls(): ?int {
        return $this->totalFailedCalls;
    }

    /**
     * Gets the totalSuccessfulCalls property value. The totalSuccessfulCalls property
     * @return int|null
    */
    public function getTotalSuccessfulCalls(): ?int {
        return $this->totalSuccessfulCalls;
    }

    /**
     * Gets the warmupEnabled property value. The warmupEnabled property
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
        $writer->writeIntegerValue('callsThisHour', $this->getCallsThisHour());
        $writer->writeIntegerValue('callsToday', $this->getCallsToday());
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeIntegerValue('consecutiveFailedCalls', $this->getConsecutiveFailedCalls());
        $writer->writeIntegerValue('consecutiveSuccessfulCalls', $this->getConsecutiveSuccessfulCalls());
        $writer->writeIntegerValue('dailyCap', $this->getDailyCap());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeIntegerValue('hourlyCap', $this->getHourlyCap());
        $writer->writeDateTimeValue('lastSuccessfulWarmupAt', $this->getLastSuccessfulWarmupAt());
        $writer->writeBooleanValue('lowConfidenceTimeZone', $this->getLowConfidenceTimeZone());
        $writer->writeIntegerValue('maxTargetDurationSeconds', $this->getMaxTargetDurationSeconds());
        $writer->writeIntegerValue('minTargetDurationSeconds', $this->getMinTargetDurationSeconds());
        $writer->writeBooleanValue('networkWarmupOptIn', $this->getNetworkWarmupOptIn());
        $writer->writeDateTimeValue('nextEligibleAt', $this->getNextEligibleAt());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeCollectionOfObjectValues('recentCalls', $this->getRecentCalls());
        $writer->writeEnumValue('stage', $this->getStage());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
        $writer->writeIntegerValue('totalFailedCalls', $this->getTotalFailedCalls());
        $writer->writeIntegerValue('totalSuccessfulCalls', $this->getTotalSuccessfulCalls());
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
     * Sets the callsThisHour property value. The callsThisHour property
     * @param int|null $value Value to set for the callsThisHour property.
    */
    public function setCallsThisHour(?int $value): void {
        $this->callsThisHour = $value;
    }

    /**
     * Sets the callsToday property value. The callsToday property
     * @param int|null $value Value to set for the callsToday property.
    */
    public function setCallsToday(?int $value): void {
        $this->callsToday = $value;
    }

    /**
     * Sets the completedAt property value. The completedAt property
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the consecutiveFailedCalls property value. The consecutiveFailedCalls property
     * @param int|null $value Value to set for the consecutiveFailedCalls property.
    */
    public function setConsecutiveFailedCalls(?int $value): void {
        $this->consecutiveFailedCalls = $value;
    }

    /**
     * Sets the consecutiveSuccessfulCalls property value. The consecutiveSuccessfulCalls property
     * @param int|null $value Value to set for the consecutiveSuccessfulCalls property.
    */
    public function setConsecutiveSuccessfulCalls(?int $value): void {
        $this->consecutiveSuccessfulCalls = $value;
    }

    /**
     * Sets the dailyCap property value. The dailyCap property
     * @param int|null $value Value to set for the dailyCap property.
    */
    public function setDailyCap(?int $value): void {
        $this->dailyCap = $value;
    }

    /**
     * Sets the failureReason property value. The failureReason property
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the hourlyCap property value. The hourlyCap property
     * @param int|null $value Value to set for the hourlyCap property.
    */
    public function setHourlyCap(?int $value): void {
        $this->hourlyCap = $value;
    }

    /**
     * Sets the lastSuccessfulWarmupAt property value. The lastSuccessfulWarmupAt property
     * @param DateTime|null $value Value to set for the lastSuccessfulWarmupAt property.
    */
    public function setLastSuccessfulWarmupAt(?DateTime $value): void {
        $this->lastSuccessfulWarmupAt = $value;
    }

    /**
     * Sets the lowConfidenceTimeZone property value. The lowConfidenceTimeZone property
     * @param bool|null $value Value to set for the lowConfidenceTimeZone property.
    */
    public function setLowConfidenceTimeZone(?bool $value): void {
        $this->lowConfidenceTimeZone = $value;
    }

    /**
     * Sets the maxTargetDurationSeconds property value. The maxTargetDurationSeconds property
     * @param int|null $value Value to set for the maxTargetDurationSeconds property.
    */
    public function setMaxTargetDurationSeconds(?int $value): void {
        $this->maxTargetDurationSeconds = $value;
    }

    /**
     * Sets the minTargetDurationSeconds property value. The minTargetDurationSeconds property
     * @param int|null $value Value to set for the minTargetDurationSeconds property.
    */
    public function setMinTargetDurationSeconds(?int $value): void {
        $this->minTargetDurationSeconds = $value;
    }

    /**
     * Sets the networkWarmupOptIn property value. The networkWarmupOptIn property
     * @param bool|null $value Value to set for the networkWarmupOptIn property.
    */
    public function setNetworkWarmupOptIn(?bool $value): void {
        $this->networkWarmupOptIn = $value;
    }

    /**
     * Sets the nextEligibleAt property value. The nextEligibleAt property
     * @param DateTime|null $value Value to set for the nextEligibleAt property.
    */
    public function setNextEligibleAt(?DateTime $value): void {
        $this->nextEligibleAt = $value;
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the phoneNumberId property value. The phoneNumberId property
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the recentCalls property value. The recentCalls property
     * @param array<PhoneNumberWarmupCallResponse>|null $value Value to set for the recentCalls property.
    */
    public function setRecentCalls(?array $value): void {
        $this->recentCalls = $value;
    }

    /**
     * Sets the stage property value. Defines the supported voice call warmup stages for a Leadping-managed phone number.
     * @param PhoneNumberWarmupStage|null $value Value to set for the stage property.
    */
    public function setStage(?PhoneNumberWarmupStage $value): void {
        $this->stage = $value;
    }

    /**
     * Sets the startAt property value. The startAt property
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the status property value. Defines the supported health states for controlled internal voice call warmup.
     * @param PhoneNumberWarmupHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PhoneNumberWarmupHealthStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the timeZoneId property value. The timeZoneId property
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

    /**
     * Sets the totalFailedCalls property value. The totalFailedCalls property
     * @param int|null $value Value to set for the totalFailedCalls property.
    */
    public function setTotalFailedCalls(?int $value): void {
        $this->totalFailedCalls = $value;
    }

    /**
     * Sets the totalSuccessfulCalls property value. The totalSuccessfulCalls property
     * @param int|null $value Value to set for the totalSuccessfulCalls property.
    */
    public function setTotalSuccessfulCalls(?int $value): void {
        $this->totalSuccessfulCalls = $value;
    }

    /**
     * Sets the warmupEnabled property value. The warmupEnabled property
     * @param bool|null $value Value to set for the warmupEnabled property.
    */
    public function setWarmupEnabled(?bool $value): void {
        $this->warmupEnabled = $value;
    }

}
