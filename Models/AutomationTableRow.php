<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API automation table row results shown in searchable tables.
*/
class AutomationTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionSummary Human-readable summary of the automation action outcome.
    */
    private ?string $actionSummary = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AutomationTableRow_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?AutomationTableRow_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var AutomationTableRow_business|null $business Business summary connected to this automation table row.
    */
    private ?AutomationTableRow_business $business = null;
    
    /**
     * @var string|null $businessId Business ID that owns this automation.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $conditionSummary Human-readable summary of the automation condition evaluation.
    */
    private ?string $conditionSummary = null;
    
    /**
     * @var string|null $createdByUserId User ID of the person who created this automation table row.
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var string|null $description Human-readable description that explains this automation table row to API users.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $enabled Indicates whether this automation table row is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $healthSummary Human-readable health summary for this automation table row.
    */
    private ?string $healthSummary = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this automation table row.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isSystemManaged Indicates whether Leadping manages this automation table row automatically instead of a user.
    */
    private ?bool $isSystemManaged = null;
    
    /**
     * @var DateTime|null $lastRunAt UTC timestamp when this automation last ran.
    */
    private ?DateTime $lastRunAt = null;
    
    /**
     * @var string|null $lastRunError Most recent automation run error message, if the last run failed.
    */
    private ?string $lastRunError = null;
    
    /**
     * @var string|null $lastRunStatus Status from the most recent automation run.
    */
    private ?string $lastRunStatus = null;
    
    /**
     * @var string|null $managementLevel Management level that controls whether Leadping or the business owns this automation setting.
    */
    private ?string $managementLevel = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when this automation table row was last modified.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name Display name for this automation table row in the Leadping API.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $ruleSentence Human-readable explanation of the automation rule being evaluated.
    */
    private ?string $ruleSentence = null;
    
    /**
     * @var string|null $scope Scope that limits where this automation table row applies in Leadping.
    */
    private ?string $scope = null;
    
    /**
     * @var string|null $triggerSummary Human-readable summary of the automation trigger that started the workflow.
    */
    private ?string $triggerSummary = null;
    
    /**
     * @var string|null $triggerType Automation trigger type that starts the workflow.
    */
    private ?string $triggerType = null;
    
    /**
     * @var AutomationTableRow_user|null $user User summary connected to this automation table row.
    */
    private ?AutomationTableRow_user $user = null;
    
    /**
     * @var string|null $visibility Visibility level that controls who can see this automation table row.
    */
    private ?string $visibility = null;
    
    /**
     * Instantiates a new AutomationTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationTableRow {
        return new AutomationTableRow();
    }

    /**
     * Gets the actionSummary property value. Human-readable summary of the automation action outcome.
     * @return string|null
    */
    public function getActionSummary(): ?string {
        return $this->actionSummary;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @return AutomationTableRow_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?AutomationTableRow_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the business property value. Business summary connected to this automation table row.
     * @return AutomationTableRow_business|null
    */
    public function getBusiness(): ?AutomationTableRow_business {
        return $this->business;
    }

    /**
     * Gets the businessId property value. Business ID that owns this automation.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the conditionSummary property value. Human-readable summary of the automation condition evaluation.
     * @return string|null
    */
    public function getConditionSummary(): ?string {
        return $this->conditionSummary;
    }

    /**
     * Gets the createdByUserId property value. User ID of the person who created this automation table row.
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the description property value. Human-readable description that explains this automation table row to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enabled property value. Indicates whether this automation table row is active and available in the Leadping API.
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
            'actionSummary' => fn(ParseNode $n) => $o->setActionSummary($n->getStringValue()),
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([AutomationTableRow_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([AutomationTableRow_business::class, 'createFromDiscriminatorValue'])),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'conditionSummary' => fn(ParseNode $n) => $o->setConditionSummary($n->getStringValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'healthSummary' => fn(ParseNode $n) => $o->setHealthSummary($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isSystemManaged' => fn(ParseNode $n) => $o->setIsSystemManaged($n->getBooleanValue()),
            'lastRunAt' => fn(ParseNode $n) => $o->setLastRunAt($n->getDateTimeValue()),
            'lastRunError' => fn(ParseNode $n) => $o->setLastRunError($n->getStringValue()),
            'lastRunStatus' => fn(ParseNode $n) => $o->setLastRunStatus($n->getStringValue()),
            'managementLevel' => fn(ParseNode $n) => $o->setManagementLevel($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'ruleSentence' => fn(ParseNode $n) => $o->setRuleSentence($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'triggerSummary' => fn(ParseNode $n) => $o->setTriggerSummary($n->getStringValue()),
            'triggerType' => fn(ParseNode $n) => $o->setTriggerType($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([AutomationTableRow_user::class, 'createFromDiscriminatorValue'])),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ];
    }

    /**
     * Gets the healthSummary property value. Human-readable health summary for this automation table row.
     * @return string|null
    */
    public function getHealthSummary(): ?string {
        return $this->healthSummary;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this automation table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isSystemManaged property value. Indicates whether Leadping manages this automation table row automatically instead of a user.
     * @return bool|null
    */
    public function getIsSystemManaged(): ?bool {
        return $this->isSystemManaged;
    }

    /**
     * Gets the lastRunAt property value. UTC timestamp when this automation last ran.
     * @return DateTime|null
    */
    public function getLastRunAt(): ?DateTime {
        return $this->lastRunAt;
    }

    /**
     * Gets the lastRunError property value. Most recent automation run error message, if the last run failed.
     * @return string|null
    */
    public function getLastRunError(): ?string {
        return $this->lastRunError;
    }

    /**
     * Gets the lastRunStatus property value. Status from the most recent automation run.
     * @return string|null
    */
    public function getLastRunStatus(): ?string {
        return $this->lastRunStatus;
    }

    /**
     * Gets the managementLevel property value. Management level that controls whether Leadping or the business owns this automation setting.
     * @return string|null
    */
    public function getManagementLevel(): ?string {
        return $this->managementLevel;
    }

    /**
     * Gets the modifiedAt property value. UTC timestamp when this automation table row was last modified.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. Display name for this automation table row in the Leadping API.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the ruleSentence property value. Human-readable explanation of the automation rule being evaluated.
     * @return string|null
    */
    public function getRuleSentence(): ?string {
        return $this->ruleSentence;
    }

    /**
     * Gets the scope property value. Scope that limits where this automation table row applies in Leadping.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the triggerSummary property value. Human-readable summary of the automation trigger that started the workflow.
     * @return string|null
    */
    public function getTriggerSummary(): ?string {
        return $this->triggerSummary;
    }

    /**
     * Gets the triggerType property value. Automation trigger type that starts the workflow.
     * @return string|null
    */
    public function getTriggerType(): ?string {
        return $this->triggerType;
    }

    /**
     * Gets the user property value. User summary connected to this automation table row.
     * @return AutomationTableRow_user|null
    */
    public function getUser(): ?AutomationTableRow_user {
        return $this->user;
    }

    /**
     * Gets the visibility property value. Visibility level that controls who can see this automation table row.
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
        $writer->writeStringValue('actionSummary', $this->getActionSummary());
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('conditionSummary', $this->getConditionSummary());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('healthSummary', $this->getHealthSummary());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isSystemManaged', $this->getIsSystemManaged());
        $writer->writeDateTimeValue('lastRunAt', $this->getLastRunAt());
        $writer->writeStringValue('lastRunError', $this->getLastRunError());
        $writer->writeStringValue('lastRunStatus', $this->getLastRunStatus());
        $writer->writeStringValue('managementLevel', $this->getManagementLevel());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('ruleSentence', $this->getRuleSentence());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeStringValue('triggerSummary', $this->getTriggerSummary());
        $writer->writeStringValue('triggerType', $this->getTriggerType());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('visibility', $this->getVisibility());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionSummary property value. Human-readable summary of the automation action outcome.
     * @param string|null $value Value to set for the actionSummary property.
    */
    public function setActionSummary(?string $value): void {
        $this->actionSummary = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @param AutomationTableRow_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?AutomationTableRow_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this automation table row.
     * @param AutomationTableRow_business|null $value Value to set for the business property.
    */
    public function setBusiness(?AutomationTableRow_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the businessId property value. Business ID that owns this automation.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the conditionSummary property value. Human-readable summary of the automation condition evaluation.
     * @param string|null $value Value to set for the conditionSummary property.
    */
    public function setConditionSummary(?string $value): void {
        $this->conditionSummary = $value;
    }

    /**
     * Sets the createdByUserId property value. User ID of the person who created this automation table row.
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this automation table row to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this automation table row is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the healthSummary property value. Human-readable health summary for this automation table row.
     * @param string|null $value Value to set for the healthSummary property.
    */
    public function setHealthSummary(?string $value): void {
        $this->healthSummary = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this automation table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isSystemManaged property value. Indicates whether Leadping manages this automation table row automatically instead of a user.
     * @param bool|null $value Value to set for the isSystemManaged property.
    */
    public function setIsSystemManaged(?bool $value): void {
        $this->isSystemManaged = $value;
    }

    /**
     * Sets the lastRunAt property value. UTC timestamp when this automation last ran.
     * @param DateTime|null $value Value to set for the lastRunAt property.
    */
    public function setLastRunAt(?DateTime $value): void {
        $this->lastRunAt = $value;
    }

    /**
     * Sets the lastRunError property value. Most recent automation run error message, if the last run failed.
     * @param string|null $value Value to set for the lastRunError property.
    */
    public function setLastRunError(?string $value): void {
        $this->lastRunError = $value;
    }

    /**
     * Sets the lastRunStatus property value. Status from the most recent automation run.
     * @param string|null $value Value to set for the lastRunStatus property.
    */
    public function setLastRunStatus(?string $value): void {
        $this->lastRunStatus = $value;
    }

    /**
     * Sets the managementLevel property value. Management level that controls whether Leadping or the business owns this automation setting.
     * @param string|null $value Value to set for the managementLevel property.
    */
    public function setManagementLevel(?string $value): void {
        $this->managementLevel = $value;
    }

    /**
     * Sets the modifiedAt property value. UTC timestamp when this automation table row was last modified.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. Display name for this automation table row in the Leadping API.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the ruleSentence property value. Human-readable explanation of the automation rule being evaluated.
     * @param string|null $value Value to set for the ruleSentence property.
    */
    public function setRuleSentence(?string $value): void {
        $this->ruleSentence = $value;
    }

    /**
     * Sets the scope property value. Scope that limits where this automation table row applies in Leadping.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->scope = $value;
    }

    /**
     * Sets the triggerSummary property value. Human-readable summary of the automation trigger that started the workflow.
     * @param string|null $value Value to set for the triggerSummary property.
    */
    public function setTriggerSummary(?string $value): void {
        $this->triggerSummary = $value;
    }

    /**
     * Sets the triggerType property value. Automation trigger type that starts the workflow.
     * @param string|null $value Value to set for the triggerType property.
    */
    public function setTriggerType(?string $value): void {
        $this->triggerType = $value;
    }

    /**
     * Sets the user property value. User summary connected to this automation table row.
     * @param AutomationTableRow_user|null $value Value to set for the user property.
    */
    public function setUser(?AutomationTableRow_user $value): void {
        $this->user = $value;
    }

    /**
     * Sets the visibility property value. Visibility level that controls who can see this automation table row.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->visibility = $value;
    }

}
