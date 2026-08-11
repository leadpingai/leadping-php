<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Messaging and calling warmup for a Leadping phone number.
*/
class PhoneNumberReadiness implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneNumberReadiness_callStage|null $callStage Defines the supported voice call warmup stages for a Leadping-managed phone number.
    */
    private ?PhoneNumberReadiness_callStage $callStage = null;
    
    /**
     * @var bool|null $enabled Indicates whether phone number warmup is enabled in Leadping.
    */
    private ?bool $enabled = null;
    
    /**
     * @var PhoneNumberReadiness_healthStatus|null $healthStatus Defines the supported SMS readiness health assessments.
    */
    private ?PhoneNumberReadiness_healthStatus $healthStatus = null;
    
    /**
     * @var PhoneNumberReadiness_state|null $state Defines the supported SMS readiness states.
    */
    private ?PhoneNumberReadiness_state $state = null;
    
    /**
     * Instantiates a new PhoneNumberReadiness and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberReadiness
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberReadiness {
        return new PhoneNumberReadiness();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callStage property value. Defines the supported voice call warmup stages for a Leadping-managed phone number.
     * @return PhoneNumberReadiness_callStage|null
    */
    public function getCallStage(): ?PhoneNumberReadiness_callStage {
        return $this->callStage;
    }

    /**
     * Gets the enabled property value. Indicates whether phone number warmup is enabled in Leadping.
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
            'callStage' => fn(ParseNode $n) => $o->setCallStage($n->getEnumValue(PhoneNumberReadiness_callStage::class)),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(PhoneNumberReadiness_healthStatus::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PhoneNumberReadiness_state::class)),
        ];
    }

    /**
     * Gets the healthStatus property value. Defines the supported SMS readiness health assessments.
     * @return PhoneNumberReadiness_healthStatus|null
    */
    public function getHealthStatus(): ?PhoneNumberReadiness_healthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the state property value. Defines the supported SMS readiness states.
     * @return PhoneNumberReadiness_state|null
    */
    public function getState(): ?PhoneNumberReadiness_state {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('callStage', $this->getCallStage());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
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
     * Sets the callStage property value. Defines the supported voice call warmup stages for a Leadping-managed phone number.
     * @param PhoneNumberReadiness_callStage|null $value Value to set for the callStage property.
    */
    public function setCallStage(?PhoneNumberReadiness_callStage $value): void {
        $this->callStage = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether phone number warmup is enabled in Leadping.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the healthStatus property value. Defines the supported SMS readiness health assessments.
     * @param PhoneNumberReadiness_healthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?PhoneNumberReadiness_healthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the state property value. Defines the supported SMS readiness states.
     * @param PhoneNumberReadiness_state|null $value Value to set for the state property.
    */
    public function setState(?PhoneNumberReadiness_state $value): void {
        $this->state = $value;
    }

}
