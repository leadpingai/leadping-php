<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API automation preview request, including the fields clients can send.
*/
class AutomationPreviewRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AutomationRequestSnapshot|null $automation Automation configuration to evaluate without executing live actions.
    */
    private ?AutomationRequestSnapshot $automation = null;
    
    /**
     * @var string|null $triggerType Automation trigger type that starts the workflow.
    */
    private ?string $triggerType = null;
    
    /**
     * Instantiates a new AutomationPreviewRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationPreviewRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationPreviewRequest {
        return new AutomationPreviewRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automation property value. Automation configuration to evaluate without executing live actions.
     * @return AutomationRequestSnapshot|null
    */
    public function getAutomation(): ?AutomationRequestSnapshot {
        return $this->automation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automation' => fn(ParseNode $n) => $o->setAutomation($n->getObjectValue([AutomationRequestSnapshot::class, 'createFromDiscriminatorValue'])),
            'triggerType' => fn(ParseNode $n) => $o->setTriggerType($n->getStringValue()),
        ];
    }

    /**
     * Gets the triggerType property value. Automation trigger type that starts the workflow.
     * @return string|null
    */
    public function getTriggerType(): ?string {
        return $this->triggerType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('automation', $this->getAutomation());
        $writer->writeStringValue('triggerType', $this->getTriggerType());
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
     * Sets the automation property value. Automation configuration to evaluate without executing live actions.
     * @param AutomationRequestSnapshot|null $value Value to set for the automation property.
    */
    public function setAutomation(?AutomationRequestSnapshot $value): void {
        $this->automation = $value;
    }

    /**
     * Sets the triggerType property value. Automation trigger type that starts the workflow.
     * @param string|null $value Value to set for the triggerType property.
    */
    public function setTriggerType(?string $value): void {
        $this->triggerType = $value;
    }

}
