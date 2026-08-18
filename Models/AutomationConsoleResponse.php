<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Recent persisted execution runs for an automation console.
*/
class AutomationConsoleResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $automationId Unique identifier of the automation whose execution history is returned.
    */
    private ?string $automationId = null;
    
    /**
     * @var array<AutomationWorkflowRunResponse>|null $runs Recent persisted workflow runs for the automation, ordered for console display.
    */
    private ?array $runs = null;
    
    /**
     * Instantiates a new AutomationConsoleResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationConsoleResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationConsoleResponse {
        return new AutomationConsoleResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationId property value. Unique identifier of the automation whose execution history is returned.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automationId' => fn(ParseNode $n) => $o->setAutomationId($n->getStringValue()),
            'runs' => fn(ParseNode $n) => $o->setRuns($n->getCollectionOfObjectValues([AutomationWorkflowRunResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the runs property value. Recent persisted workflow runs for the automation, ordered for console display.
     * @return array<AutomationWorkflowRunResponse>|null
    */
    public function getRuns(): ?array {
        return $this->runs;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('automationId', $this->getAutomationId());
        $writer->writeCollectionOfObjectValues('runs', $this->getRuns());
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
     * Sets the automationId property value. Unique identifier of the automation whose execution history is returned.
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->automationId = $value;
    }

    /**
     * Sets the runs property value. Recent persisted workflow runs for the automation, ordered for console display.
     * @param array<AutomationWorkflowRunResponse>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value): void {
        $this->runs = $value;
    }

}
