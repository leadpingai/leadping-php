<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes SMS warmup status data returned by Leadping.
*/
class SmsReadinessStatusResponse implements AdditionalDataHolder, Parsable 
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
     * @var SmsReadinessHealthStatus|null $healthStatus Summarizes the severity of conditions affecting an organization's ability to send compliant SMS or MMS traffic.
    */
    private ?SmsReadinessHealthStatus $healthStatus = null;
    
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
     * @var SmsReadinessState|null $status Describes whether an organization is configured and permitted to send SMS or MMS traffic through Leadping.
    */
    private ?SmsReadinessState $status = null;
    
    /**
     * @var SmsReadinessUiState|null $uiState Describes SMS readiness UI state data used in Leadping API requests and responses.
    */
    private ?SmsReadinessUiState $uiState = null;
    
    /**
     * @var bool|null $warmupEnabled Whether warmup is enabled for this SMS warmup status.
    */
    private ?bool $warmupEnabled = null;
    
    /**
     * Instantiates a new SmsReadinessStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsReadinessStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsReadinessStatusResponse {
        return new SmsReadinessStatusResponse();
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
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(SmsReadinessHealthStatus::class)),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'progressPercent' => fn(ParseNode $n) => $o->setProgressPercent($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SmsReadinessState::class)),
            'uiState' => fn(ParseNode $n) => $o->setUiState($n->getObjectValue([SmsReadinessUiState::class, 'createFromDiscriminatorValue'])),
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
     * Gets the healthStatus property value. Summarizes the severity of conditions affecting an organization's ability to send compliant SMS or MMS traffic.
     * @return SmsReadinessHealthStatus|null
    */
    public function getHealthStatus(): ?SmsReadinessHealthStatus {
        return $this->healthStatus;
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
     * Gets the status property value. Describes whether an organization is configured and permitted to send SMS or MMS traffic through Leadping.
     * @return SmsReadinessState|null
    */
    public function getStatus(): ?SmsReadinessState {
        return $this->status;
    }

    /**
     * Gets the uiState property value. Describes SMS readiness UI state data used in Leadping API requests and responses.
     * @return SmsReadinessUiState|null
    */
    public function getUiState(): ?SmsReadinessUiState {
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
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
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
     * Sets the healthStatus property value. Summarizes the severity of conditions affecting an organization's ability to send compliant SMS or MMS traffic.
     * @param SmsReadinessHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?SmsReadinessHealthStatus $value): void {
        $this->healthStatus = $value;
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
     * Sets the status property value. Describes whether an organization is configured and permitted to send SMS or MMS traffic through Leadping.
     * @param SmsReadinessState|null $value Value to set for the status property.
    */
    public function setStatus(?SmsReadinessState $value): void {
        $this->status = $value;
    }

    /**
     * Sets the uiState property value. Describes SMS readiness UI state data used in Leadping API requests and responses.
     * @param SmsReadinessUiState|null $value Value to set for the uiState property.
    */
    public function setUiState(?SmsReadinessUiState $value): void {
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
