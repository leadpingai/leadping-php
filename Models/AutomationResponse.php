<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API automation configuration response returned to authenticated clients.
*/
class AutomationResponse implements AdditionalDataHolder, Parsable 
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
     * @var AutomationResponse_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?AutomationResponse_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var AutomationResponse_business|null $business Business summary connected to this automation configuration response.
    */
    private ?AutomationResponse_business $business = null;
    
    /**
     * @var string|null $businessId Business ID that owns this automation.
    */
    private ?string $businessId = null;
    
    /**
     * @var array<AutomationConditionGroup>|null $conditionGroups Grouped automation conditions used to decide whether this workflow should run.
    */
    private ?array $conditionGroups = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $createdByUserId User ID of the person who created this automation configuration response.
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var string|null $description Human-readable description that explains this automation configuration response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $enabled Indicates whether this automation configuration response is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isSystemManaged Indicates whether Leadping manages this automation configuration response automatically instead of a user.
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
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var array<AutomationRunRecord>|null $recentRuns Recent automation runs returned for history and troubleshooting.
    */
    private ?array $recentRuns = null;
    
    /**
     * @var string|null $scope Scope that limits where this automation configuration response applies in Leadping.
    */
    private ?string $scope = null;
    
    /**
     * @var array<AutomationTrigger>|null $triggers Automation triggers that can start this workflow.
    */
    private ?array $triggers = null;
    
    /**
     * @var AutomationResponse_user|null $user User summary connected to this automation configuration response.
    */
    private ?AutomationResponse_user $user = null;
    
    /**
     * @var int|null $version Version number for this automation configuration response schema or saved configuration.
    */
    private ?int $version = null;
    
    /**
     * @var string|null $visibility Visibility level that controls who can see this automation configuration response.
    */
    private ?string $visibility = null;
    
    /**
     * Instantiates a new AutomationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationResponse {
        return new AutomationResponse();
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
     * Gets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @return AutomationResponse_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?AutomationResponse_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the business property value. Business summary connected to this automation configuration response.
     * @return AutomationResponse_business|null
    */
    public function getBusiness(): ?AutomationResponse_business {
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
     * Gets the conditionGroups property value. Grouped automation conditions used to decide whether this workflow should run.
     * @return array<AutomationConditionGroup>|null
    */
    public function getConditionGroups(): ?array {
        return $this->conditionGroups;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdByUserId property value. User ID of the person who created this automation configuration response.
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the description property value. Human-readable description that explains this automation configuration response to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enabled property value. Indicates whether this automation configuration response is active and available in the Leadping API.
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
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([AutomationResponse_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([AutomationResponse_business::class, 'createFromDiscriminatorValue'])),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'conditionGroups' => fn(ParseNode $n) => $o->setConditionGroups($n->getCollectionOfObjectValues([AutomationConditionGroup::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isSystemManaged' => fn(ParseNode $n) => $o->setIsSystemManaged($n->getBooleanValue()),
            'lastRunAt' => fn(ParseNode $n) => $o->setLastRunAt($n->getDateTimeValue()),
            'lastRunError' => fn(ParseNode $n) => $o->setLastRunError($n->getStringValue()),
            'lastRunStatus' => fn(ParseNode $n) => $o->setLastRunStatus($n->getStringValue()),
            'managementLevel' => fn(ParseNode $n) => $o->setManagementLevel($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'recentRuns' => fn(ParseNode $n) => $o->setRecentRuns($n->getCollectionOfObjectValues([AutomationRunRecord::class, 'createFromDiscriminatorValue'])),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'triggers' => fn(ParseNode $n) => $o->setTriggers($n->getCollectionOfObjectValues([AutomationTrigger::class, 'createFromDiscriminatorValue'])),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([AutomationResponse_user::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isSystemManaged property value. Indicates whether Leadping manages this automation configuration response automatically instead of a user.
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
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the recentRuns property value. Recent automation runs returned for history and troubleshooting.
     * @return array<AutomationRunRecord>|null
    */
    public function getRecentRuns(): ?array {
        return $this->recentRuns;
    }

    /**
     * Gets the scope property value. Scope that limits where this automation configuration response applies in Leadping.
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
     * Gets the user property value. User summary connected to this automation configuration response.
     * @return AutomationResponse_user|null
    */
    public function getUser(): ?AutomationResponse_user {
        return $this->user;
    }

    /**
     * Gets the version property value. Version number for this automation configuration response schema or saved configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the visibility property value. Visibility level that controls who can see this automation configuration response.
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
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeCollectionOfObjectValues('conditionGroups', $this->getConditionGroups());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isSystemManaged', $this->getIsSystemManaged());
        $writer->writeDateTimeValue('lastRunAt', $this->getLastRunAt());
        $writer->writeStringValue('lastRunError', $this->getLastRunError());
        $writer->writeStringValue('lastRunStatus', $this->getLastRunStatus());
        $writer->writeStringValue('managementLevel', $this->getManagementLevel());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('recentRuns', $this->getRecentRuns());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeCollectionOfObjectValues('triggers', $this->getTriggers());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @param AutomationResponse_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?AutomationResponse_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this automation configuration response.
     * @param AutomationResponse_business|null $value Value to set for the business property.
    */
    public function setBusiness(?AutomationResponse_business $value): void {
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
     * Sets the conditionGroups property value. Grouped automation conditions used to decide whether this workflow should run.
     * @param array<AutomationConditionGroup>|null $value Value to set for the conditionGroups property.
    */
    public function setConditionGroups(?array $value): void {
        $this->conditionGroups = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdByUserId property value. User ID of the person who created this automation configuration response.
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this automation configuration response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this automation configuration response is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isSystemManaged property value. Indicates whether Leadping manages this automation configuration response automatically instead of a user.
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
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the recentRuns property value. Recent automation runs returned for history and troubleshooting.
     * @param array<AutomationRunRecord>|null $value Value to set for the recentRuns property.
    */
    public function setRecentRuns(?array $value): void {
        $this->recentRuns = $value;
    }

    /**
     * Sets the scope property value. Scope that limits where this automation configuration response applies in Leadping.
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
     * Sets the user property value. User summary connected to this automation configuration response.
     * @param AutomationResponse_user|null $value Value to set for the user property.
    */
    public function setUser(?AutomationResponse_user $value): void {
        $this->user = $value;
    }

    /**
     * Sets the version property value. Version number for this automation configuration response schema or saved configuration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

    /**
     * Sets the visibility property value. Visibility level that controls who can see this automation configuration response.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->visibility = $value;
    }

}
