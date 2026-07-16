<?php

namespace Leadping\OpenApiClient\Models;

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
     * @var int|null $healthScore The health score metric for this SMS warmup status.
    */
    private ?int $healthScore = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'healthScore' => fn(ParseNode $n) => $o->setHealthScore($n->getIntegerValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'progressPercent' => fn(ParseNode $n) => $o->setProgressPercent($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SmsWarmupHealthState::class)),
            'uiState' => fn(ParseNode $n) => $o->setUiState($n->getObjectValue([SmsWarmupUiState::class, 'createFromDiscriminatorValue'])),
            'warmupEnabled' => fn(ParseNode $n) => $o->setWarmupEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the healthScore property value. The health score metric for this SMS warmup status.
     * @return int|null
    */
    public function getHealthScore(): ?int {
        return $this->healthScore;
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
        $writer->writeIntegerValue('healthScore', $this->getHealthScore());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeIntegerValue('progressPercent', $this->getProgressPercent());
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
     * Sets the healthScore property value. The health score metric for this SMS warmup status.
     * @param int|null $value Value to set for the healthScore property.
    */
    public function setHealthScore(?int $value): void {
        $this->healthScore = $value;
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
