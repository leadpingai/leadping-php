<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Persisted origin of an automation run and the events produced by its actions.
*/
class AutomationLineage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionId The actionId property
    */
    private ?string $actionId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $automationIds Automation IDs in execution order, including the run that produced this event.
    */
    private ?array $automationIds = null;
    
    /**
     * @var string|null $rootEventId The rootEventId property
    */
    private ?string $rootEventId = null;
    
    /**
     * @var string|null $runId The runId property
    */
    private ?string $runId = null;
    
    /**
     * @var string|null $triggerEventId The triggerEventId property
    */
    private ?string $triggerEventId = null;
    
    /**
     * Instantiates a new AutomationLineage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationLineage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationLineage {
        return new AutomationLineage();
    }

    /**
     * Gets the actionId property value. The actionId property
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationIds property value. Automation IDs in execution order, including the run that produced this event.
     * @return array<string>|null
    */
    public function getAutomationIds(): ?array {
        return $this->automationIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'automationIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAutomationIds($val);
            },
            'rootEventId' => fn(ParseNode $n) => $o->setRootEventId($n->getStringValue()),
            'runId' => fn(ParseNode $n) => $o->setRunId($n->getStringValue()),
            'triggerEventId' => fn(ParseNode $n) => $o->setTriggerEventId($n->getStringValue()),
        ];
    }

    /**
     * Gets the rootEventId property value. The rootEventId property
     * @return string|null
    */
    public function getRootEventId(): ?string {
        return $this->rootEventId;
    }

    /**
     * Gets the runId property value. The runId property
     * @return string|null
    */
    public function getRunId(): ?string {
        return $this->runId;
    }

    /**
     * Gets the triggerEventId property value. The triggerEventId property
     * @return string|null
    */
    public function getTriggerEventId(): ?string {
        return $this->triggerEventId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeCollectionOfPrimitiveValues('automationIds', $this->getAutomationIds());
        $writer->writeStringValue('rootEventId', $this->getRootEventId());
        $writer->writeStringValue('runId', $this->getRunId());
        $writer->writeStringValue('triggerEventId', $this->getTriggerEventId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionId property value. The actionId property
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->actionId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the automationIds property value. Automation IDs in execution order, including the run that produced this event.
     * @param array<string>|null $value Value to set for the automationIds property.
    */
    public function setAutomationIds(?array $value): void {
        $this->automationIds = $value;
    }

    /**
     * Sets the rootEventId property value. The rootEventId property
     * @param string|null $value Value to set for the rootEventId property.
    */
    public function setRootEventId(?string $value): void {
        $this->rootEventId = $value;
    }

    /**
     * Sets the runId property value. The runId property
     * @param string|null $value Value to set for the runId property.
    */
    public function setRunId(?string $value): void {
        $this->runId = $value;
    }

    /**
     * Sets the triggerEventId property value. The triggerEventId property
     * @param string|null $value Value to set for the triggerEventId property.
    */
    public function setTriggerEventId(?string $value): void {
        $this->triggerEventId = $value;
    }

}
