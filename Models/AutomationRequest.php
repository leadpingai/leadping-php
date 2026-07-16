<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API automation configuration request, including the fields clients can send.
*/
class AutomationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<AutomationAction>|null $actions Automation actions configured or returned for this workflow.
    */
    private ?array $actions = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AutomationConditionGroup>|null $conditionGroups Grouped automation conditions used to decide whether this workflow should run.
    */
    private ?array $conditionGroups = null;
    
    /**
     * @var string|null $description Human-readable description that explains this automation configuration request to API users.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $enabled Indicates whether this automation configuration request is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity, when updating an existing entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $scope Scope that limits where this automation configuration request applies in Leadping.
    */
    private ?string $scope = null;
    
    /**
     * @var array<AutomationTrigger>|null $triggers Automation triggers that can start this workflow.
    */
    private ?array $triggers = null;
    
    /**
     * @var int|null $version Version number for this automation configuration request schema or saved configuration.
    */
    private ?int $version = null;
    
    /**
     * @var string|null $visibility Visibility level that controls who can see this automation configuration request.
    */
    private ?string $visibility = null;
    
    /**
     * Instantiates a new AutomationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationRequest {
        return new AutomationRequest();
    }

    /**
     * Gets the actions property value. Automation actions configured or returned for this workflow.
     * @return array<AutomationAction>|null
    */
    public function getActions(): ?array {
        return $this->actions;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionGroups property value. Grouped automation conditions used to decide whether this workflow should run.
     * @return array<AutomationConditionGroup>|null
    */
    public function getConditionGroups(): ?array {
        return $this->conditionGroups;
    }

    /**
     * Gets the description property value. Human-readable description that explains this automation configuration request to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enabled property value. Indicates whether this automation configuration request is active and available in the Leadping API.
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
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AutomationAction::class, 'createFromDiscriminatorValue'])),
            'conditionGroups' => fn(ParseNode $n) => $o->setConditionGroups($n->getCollectionOfObjectValues([AutomationConditionGroup::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'triggers' => fn(ParseNode $n) => $o->setTriggers($n->getCollectionOfObjectValues([AutomationTrigger::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the scope property value. Scope that limits where this automation configuration request applies in Leadping.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the triggers property value. Automation triggers that can start this workflow.
     * @return array<AutomationTrigger>|null
    */
    public function getTriggers(): ?array {
        return $this->triggers;
    }

    /**
     * Gets the version property value. Version number for this automation configuration request schema or saved configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the visibility property value. Visibility level that controls who can see this automation configuration request.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeCollectionOfObjectValues('conditionGroups', $this->getConditionGroups());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeCollectionOfObjectValues('triggers', $this->getTriggers());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeStringValue('visibility', $this->getVisibility());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actions property value. Automation actions configured or returned for this workflow.
     * @param array<AutomationAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->actions = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the conditionGroups property value. Grouped automation conditions used to decide whether this workflow should run.
     * @param array<AutomationConditionGroup>|null $value Value to set for the conditionGroups property.
    */
    public function setConditionGroups(?array $value): void {
        $this->conditionGroups = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this automation configuration request to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this automation configuration request is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the scope property value. Scope that limits where this automation configuration request applies in Leadping.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->scope = $value;
    }

    /**
     * Sets the triggers property value. Automation triggers that can start this workflow.
     * @param array<AutomationTrigger>|null $value Value to set for the triggers property.
    */
    public function setTriggers(?array $value): void {
        $this->triggers = $value;
    }

    /**
     * Sets the version property value. Version number for this automation configuration request schema or saved configuration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

    /**
     * Sets the visibility property value. Visibility level that controls who can see this automation configuration request.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->visibility = $value;
    }

}
