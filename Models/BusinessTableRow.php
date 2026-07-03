<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing business data used by Leadping API contracts.
*/
class BusinessTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var BusinessTableRow_activationStatus|null $activationStatus Defines the supported Customer Activation Status values.
    */
    private ?BusinessTableRow_activationStatus $activationStatus = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BusinessTableRow_adminEnablementOverride|null $adminEnablementOverride The admin force enablement override on this business.
    */
    private ?BusinessTableRow_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var DateTime|null $apiKeyExpiresAt The date and time this business API key expires, or null when it has no expiration.
    */
    private ?DateTime $apiKeyExpiresAt = null;
    
    /**
     * @var DateTime|null $apiKeyFirstUsedAt The date and time this business API key was first used.
    */
    private ?DateTime $apiKeyFirstUsedAt = null;
    
    /**
     * @var DateTime|null $apiKeyIssuedAt The date and time this business API key was issued.
    */
    private ?DateTime $apiKeyIssuedAt = null;
    
    /**
     * @var DateTime|null $apiKeyLastUsedAt The date and time this business API key was last used.
    */
    private ?DateTime $apiKeyLastUsedAt = null;
    
    /**
     * @var string|null $apiKeyPreview The masked API key preview owned by this business.
    */
    private ?string $apiKeyPreview = null;
    
    /**
     * @var int|null $apiKeyTotalUses The total number of tracked uses for this business API key.
    */
    private ?int $apiKeyTotalUses = null;
    
    /**
     * @var string|null $businessId The business ID that owns this row when the row represents a child business resource.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $businessName The business name that owns this row when the row represents a child business resource.
    */
    private ?string $businessName = null;
    
    /**
     * @var bool|null $enabled Whether this business is enabled.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique ID for this business.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $industry The industry value for this business.
    */
    private ?string $industry = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time for the modified at value on this business.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The human-readable name shown for this business.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $needsAdminReview Whether needs admin review applies to this business.
    */
    private ?bool $needsAdminReview = null;
    
    /**
     * @var string|null $phone The phone number associated with this business.
    */
    private ?string $phone = null;
    
    /**
     * @var BusinessTableRow_setupStep|null $setupStep Defines the supported Business Setup Step values.
    */
    private ?BusinessTableRow_setupStep $setupStep = null;
    
    /**
     * @var BusinessTableRow_status|null $status Defines the supported Business Status values.
    */
    private ?BusinessTableRow_status $status = null;
    
    /**
     * @var BusinessTableRow_tenDlcStatus|null $tenDlcStatus Defines the supported 10DLC Application Status values.
    */
    private ?BusinessTableRow_tenDlcStatus $tenDlcStatus = null;
    
    /**
     * @var int|null $userCount The user count for this business.
    */
    private ?int $userCount = null;
    
    /**
     * @var string|null $userId The user ID value for this business.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userName The user name value for this business.
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $website The website URL associated with this business.
    */
    private ?string $website = null;
    
    /**
     * @var BusinessTableRow_websiteStatus|null $websiteStatus Defines the supported Website Lifecycle Status values.
    */
    private ?BusinessTableRow_websiteStatus $websiteStatus = null;
    
    /**
     * Instantiates a new BusinessTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessTableRow {
        return new BusinessTableRow();
    }

    /**
     * Gets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @return BusinessTableRow_activationStatus|null
    */
    public function getActivationStatus(): ?BusinessTableRow_activationStatus {
        return $this->activationStatus;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adminEnablementOverride property value. The admin force enablement override on this business.
     * @return BusinessTableRow_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?BusinessTableRow_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the apiKeyExpiresAt property value. The date and time this business API key expires, or null when it has no expiration.
     * @return DateTime|null
    */
    public function getApiKeyExpiresAt(): ?DateTime {
        return $this->apiKeyExpiresAt;
    }

    /**
     * Gets the apiKeyFirstUsedAt property value. The date and time this business API key was first used.
     * @return DateTime|null
    */
    public function getApiKeyFirstUsedAt(): ?DateTime {
        return $this->apiKeyFirstUsedAt;
    }

    /**
     * Gets the apiKeyIssuedAt property value. The date and time this business API key was issued.
     * @return DateTime|null
    */
    public function getApiKeyIssuedAt(): ?DateTime {
        return $this->apiKeyIssuedAt;
    }

    /**
     * Gets the apiKeyLastUsedAt property value. The date and time this business API key was last used.
     * @return DateTime|null
    */
    public function getApiKeyLastUsedAt(): ?DateTime {
        return $this->apiKeyLastUsedAt;
    }

    /**
     * Gets the apiKeyPreview property value. The masked API key preview owned by this business.
     * @return string|null
    */
    public function getApiKeyPreview(): ?string {
        return $this->apiKeyPreview;
    }

    /**
     * Gets the apiKeyTotalUses property value. The total number of tracked uses for this business API key.
     * @return int|null
    */
    public function getApiKeyTotalUses(): ?int {
        return $this->apiKeyTotalUses;
    }

    /**
     * Gets the businessId property value. The business ID that owns this row when the row represents a child business resource.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the businessName property value. The business name that owns this row when the row represents a child business resource.
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the enabled property value. Whether this business is enabled.
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
            'activationStatus' => fn(ParseNode $n) => $o->setActivationStatus($n->getEnumValue(BusinessTableRow_activationStatus::class)),
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([BusinessTableRow_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'apiKeyExpiresAt' => fn(ParseNode $n) => $o->setApiKeyExpiresAt($n->getDateTimeValue()),
            'apiKeyFirstUsedAt' => fn(ParseNode $n) => $o->setApiKeyFirstUsedAt($n->getDateTimeValue()),
            'apiKeyIssuedAt' => fn(ParseNode $n) => $o->setApiKeyIssuedAt($n->getDateTimeValue()),
            'apiKeyLastUsedAt' => fn(ParseNode $n) => $o->setApiKeyLastUsedAt($n->getDateTimeValue()),
            'apiKeyPreview' => fn(ParseNode $n) => $o->setApiKeyPreview($n->getStringValue()),
            'apiKeyTotalUses' => fn(ParseNode $n) => $o->setApiKeyTotalUses($n->getIntegerValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'needsAdminReview' => fn(ParseNode $n) => $o->setNeedsAdminReview($n->getBooleanValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'setupStep' => fn(ParseNode $n) => $o->setSetupStep($n->getEnumValue(BusinessTableRow_setupStep::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BusinessTableRow_status::class)),
            'tenDlcStatus' => fn(ParseNode $n) => $o->setTenDlcStatus($n->getEnumValue(BusinessTableRow_tenDlcStatus::class)),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
            'websiteStatus' => fn(ParseNode $n) => $o->setWebsiteStatus($n->getEnumValue(BusinessTableRow_websiteStatus::class)),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this business.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the industry property value. The industry value for this business.
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the modifiedAt property value. The date and time for the modified at value on this business.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. The human-readable name shown for this business.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the needsAdminReview property value. Whether needs admin review applies to this business.
     * @return bool|null
    */
    public function getNeedsAdminReview(): ?bool {
        return $this->needsAdminReview;
    }

    /**
     * Gets the phone property value. The phone number associated with this business.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the setupStep property value. Defines the supported Business Setup Step values.
     * @return BusinessTableRow_setupStep|null
    */
    public function getSetupStep(): ?BusinessTableRow_setupStep {
        return $this->setupStep;
    }

    /**
     * Gets the status property value. Defines the supported Business Status values.
     * @return BusinessTableRow_status|null
    */
    public function getStatus(): ?BusinessTableRow_status {
        return $this->status;
    }

    /**
     * Gets the tenDlcStatus property value. Defines the supported 10DLC Application Status values.
     * @return BusinessTableRow_tenDlcStatus|null
    */
    public function getTenDlcStatus(): ?BusinessTableRow_tenDlcStatus {
        return $this->tenDlcStatus;
    }

    /**
     * Gets the userCount property value. The user count for this business.
     * @return int|null
    */
    public function getUserCount(): ?int {
        return $this->userCount;
    }

    /**
     * Gets the userId property value. The user ID value for this business.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. The user name value for this business.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the website property value. The website URL associated with this business.
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Gets the websiteStatus property value. Defines the supported Website Lifecycle Status values.
     * @return BusinessTableRow_websiteStatus|null
    */
    public function getWebsiteStatus(): ?BusinessTableRow_websiteStatus {
        return $this->websiteStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activationStatus', $this->getActivationStatus());
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeDateTimeValue('apiKeyExpiresAt', $this->getApiKeyExpiresAt());
        $writer->writeDateTimeValue('apiKeyFirstUsedAt', $this->getApiKeyFirstUsedAt());
        $writer->writeDateTimeValue('apiKeyIssuedAt', $this->getApiKeyIssuedAt());
        $writer->writeDateTimeValue('apiKeyLastUsedAt', $this->getApiKeyLastUsedAt());
        $writer->writeStringValue('apiKeyPreview', $this->getApiKeyPreview());
        $writer->writeIntegerValue('apiKeyTotalUses', $this->getApiKeyTotalUses());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('needsAdminReview', $this->getNeedsAdminReview());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeEnumValue('setupStep', $this->getSetupStep());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('tenDlcStatus', $this->getTenDlcStatus());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
        $writer->writeStringValue('website', $this->getWebsite());
        $writer->writeEnumValue('websiteStatus', $this->getWebsiteStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @param BusinessTableRow_activationStatus|null $value Value to set for the activationStatus property.
    */
    public function setActivationStatus(?BusinessTableRow_activationStatus $value): void {
        $this->activationStatus = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the adminEnablementOverride property value. The admin force enablement override on this business.
     * @param BusinessTableRow_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?BusinessTableRow_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the apiKeyExpiresAt property value. The date and time this business API key expires, or null when it has no expiration.
     * @param DateTime|null $value Value to set for the apiKeyExpiresAt property.
    */
    public function setApiKeyExpiresAt(?DateTime $value): void {
        $this->apiKeyExpiresAt = $value;
    }

    /**
     * Sets the apiKeyFirstUsedAt property value. The date and time this business API key was first used.
     * @param DateTime|null $value Value to set for the apiKeyFirstUsedAt property.
    */
    public function setApiKeyFirstUsedAt(?DateTime $value): void {
        $this->apiKeyFirstUsedAt = $value;
    }

    /**
     * Sets the apiKeyIssuedAt property value. The date and time this business API key was issued.
     * @param DateTime|null $value Value to set for the apiKeyIssuedAt property.
    */
    public function setApiKeyIssuedAt(?DateTime $value): void {
        $this->apiKeyIssuedAt = $value;
    }

    /**
     * Sets the apiKeyLastUsedAt property value. The date and time this business API key was last used.
     * @param DateTime|null $value Value to set for the apiKeyLastUsedAt property.
    */
    public function setApiKeyLastUsedAt(?DateTime $value): void {
        $this->apiKeyLastUsedAt = $value;
    }

    /**
     * Sets the apiKeyPreview property value. The masked API key preview owned by this business.
     * @param string|null $value Value to set for the apiKeyPreview property.
    */
    public function setApiKeyPreview(?string $value): void {
        $this->apiKeyPreview = $value;
    }

    /**
     * Sets the apiKeyTotalUses property value. The total number of tracked uses for this business API key.
     * @param int|null $value Value to set for the apiKeyTotalUses property.
    */
    public function setApiKeyTotalUses(?int $value): void {
        $this->apiKeyTotalUses = $value;
    }

    /**
     * Sets the businessId property value. The business ID that owns this row when the row represents a child business resource.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the businessName property value. The business name that owns this row when the row represents a child business resource.
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the enabled property value. Whether this business is enabled.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique ID for this business.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the industry property value. The industry value for this business.
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->industry = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time for the modified at value on this business.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. The human-readable name shown for this business.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the needsAdminReview property value. Whether needs admin review applies to this business.
     * @param bool|null $value Value to set for the needsAdminReview property.
    */
    public function setNeedsAdminReview(?bool $value): void {
        $this->needsAdminReview = $value;
    }

    /**
     * Sets the phone property value. The phone number associated with this business.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the setupStep property value. Defines the supported Business Setup Step values.
     * @param BusinessTableRow_setupStep|null $value Value to set for the setupStep property.
    */
    public function setSetupStep(?BusinessTableRow_setupStep $value): void {
        $this->setupStep = $value;
    }

    /**
     * Sets the status property value. Defines the supported Business Status values.
     * @param BusinessTableRow_status|null $value Value to set for the status property.
    */
    public function setStatus(?BusinessTableRow_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the tenDlcStatus property value. Defines the supported 10DLC Application Status values.
     * @param BusinessTableRow_tenDlcStatus|null $value Value to set for the tenDlcStatus property.
    */
    public function setTenDlcStatus(?BusinessTableRow_tenDlcStatus $value): void {
        $this->tenDlcStatus = $value;
    }

    /**
     * Sets the userCount property value. The user count for this business.
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->userCount = $value;
    }

    /**
     * Sets the userId property value. The user ID value for this business.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. The user name value for this business.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->userName = $value;
    }

    /**
     * Sets the website property value. The website URL associated with this business.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

    /**
     * Sets the websiteStatus property value. Defines the supported Website Lifecycle Status values.
     * @param BusinessTableRow_websiteStatus|null $value Value to set for the websiteStatus property.
    */
    public function setWebsiteStatus(?BusinessTableRow_websiteStatus $value): void {
        $this->websiteStatus = $value;
    }

}
