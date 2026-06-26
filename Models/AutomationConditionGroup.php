<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for automation condition group data.
*/
class AutomationConditionGroup implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AutomationCondition>|null $conditions Automation conditions evaluated before an action or workflow runs.
    */
    private ?array $conditions = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this automation condition group.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $mode Execution mode that controls how this automation condition group is evaluated.
    */
    private ?string $mode = null;
    
    /**
     * Instantiates a new AutomationConditionGroup and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationConditionGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationConditionGroup {
        return new AutomationConditionGroup();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditions property value. Automation conditions evaluated before an action or workflow runs.
     * @return array<AutomationCondition>|null
    */
    public function getConditions(): ?array {
        return $this->conditions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getCollectionOfObjectValues([AutomationCondition::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'mode' => fn(ParseNode $n) => $o->setMode($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this automation condition group.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the mode property value. Execution mode that controls how this automation condition group is evaluated.
     * @return string|null
    */
    public function getMode(): ?string {
        return $this->mode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('conditions', $this->getConditions());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('mode', $this->getMode());
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
     * Sets the conditions property value. Automation conditions evaluated before an action or workflow runs.
     * @param array<AutomationCondition>|null $value Value to set for the conditions property.
    */
    public function setConditions(?array $value): void {
        $this->conditions = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this automation condition group.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the mode property value. Execution mode that controls how this automation condition group is evaluated.
     * @param string|null $value Value to set for the mode property.
    */
    public function setMode(?string $value): void {
        $this->mode = $value;
    }

}
