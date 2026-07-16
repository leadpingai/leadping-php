<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Warmup state for a Leadping phone number.
*/
class PhoneNumberWarmup implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $enabled Indicates whether the phone number warmup is enabled in Leadping.
    */
    private ?bool $enabled = null;
    
    /**
     * @var int|null $healthScore Current warmup health score used to assess phone number readiness.
    */
    private ?int $healthScore = null;
    
    /**
     * @var PhoneNumberWarmup_healthStatus|null $healthStatus Defines the supported SMS Warmup Health State values.
    */
    private ?PhoneNumberWarmup_healthStatus $healthStatus = null;
    
    /**
     * @var int|null $progressPercent Warmup completion percentage, from 0 through 100.
    */
    private ?int $progressPercent = null;
    
    /**
     * @var PhoneNumberWarmup_state|null $state Defines the supported SMS Warmup Health State values.
    */
    private ?PhoneNumberWarmup_state $state = null;
    
    /**
     * Instantiates a new PhoneNumberWarmup and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberWarmup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberWarmup {
        return new PhoneNumberWarmup();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the enabled property value. Indicates whether the phone number warmup is enabled in Leadping.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'healthScore' => fn(ParseNode $n) => $o->setHealthScore($n->getIntegerValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(PhoneNumberWarmup_healthStatus::class)),
            'progressPercent' => fn(ParseNode $n) => $o->setProgressPercent($n->getIntegerValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PhoneNumberWarmup_state::class)),
        ];
    }

    /**
     * Gets the healthScore property value. Current warmup health score used to assess phone number readiness.
     * @return int|null
    */
    public function getHealthScore(): ?int {
        return $this->healthScore;
    }

    /**
     * Gets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @return PhoneNumberWarmup_healthStatus|null
    */
    public function getHealthStatus(): ?PhoneNumberWarmup_healthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the progressPercent property value. Warmup completion percentage, from 0 through 100.
     * @return int|null
    */
    public function getProgressPercent(): ?int {
        return $this->progressPercent;
    }

    /**
     * Gets the state property value. Defines the supported SMS Warmup Health State values.
     * @return PhoneNumberWarmup_state|null
    */
    public function getState(): ?PhoneNumberWarmup_state {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeIntegerValue('healthScore', $this->getHealthScore());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeIntegerValue('progressPercent', $this->getProgressPercent());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the enabled property value. Indicates whether the phone number warmup is enabled in Leadping.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the healthScore property value. Current warmup health score used to assess phone number readiness.
     * @param int|null $value Value to set for the healthScore property.
    */
    public function setHealthScore(?int $value): void {
        $this->healthScore = $value;
    }

    /**
     * Sets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @param PhoneNumberWarmup_healthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?PhoneNumberWarmup_healthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the progressPercent property value. Warmup completion percentage, from 0 through 100.
     * @param int|null $value Value to set for the progressPercent property.
    */
    public function setProgressPercent(?int $value): void {
        $this->progressPercent = $value;
    }

    /**
     * Sets the state property value. Defines the supported SMS Warmup Health State values.
     * @param PhoneNumberWarmup_state|null $value Value to set for the state property.
    */
    public function setState(?PhoneNumberWarmup_state $value): void {
        $this->state = $value;
    }

}
