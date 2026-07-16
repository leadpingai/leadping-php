<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * List item schema for Leadping API lead source table row results shown in searchable tables.
*/
class SourceTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedProducts Product allowlist used to accept or route leads from this source.
    */
    private ?array $allowedProducts = null;
    
    /**
     * @var array<string>|null $allowedStates State or region allowlist used to accept leads from this source.
    */
    private ?array $allowedStates = null;
    
    /**
     * @var DateTime|null $apiKeyLastUsedAt UTC timestamp when the source API key was last used.
    */
    private ?DateTime $apiKeyLastUsedAt = null;
    
    /**
     * @var string|null $apiKeyPreview Masked preview of the source API key for compact display.
    */
    private ?string $apiKeyPreview = null;
    
    /**
     * @var int|null $apiKeyTotalUses Total number of authenticated requests made with this source API key.
    */
    private ?int $apiKeyTotalUses = null;
    
    /**
     * @var SourceTableRow_business|null $business Business summary connected to this lead source table row.
    */
    private ?SourceTableRow_business $business = null;
    
    /**
     * @var string|null $businessId Business ID that owns this lead source.
    */
    private ?string $businessId = null;
    
    /**
     * @var bool|null $complianceApproved Indicates whether the business or sender passed compliance review.
    */
    private ?bool $complianceApproved = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this lead source table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var SourceTableRow_createdByUser|null $createdByUser User summary for the person who created this lead source table row.
    */
    private ?SourceTableRow_createdByUser $createdByUser = null;
    
    /**
     * @var array<string>|null $defaultTagIds Tag IDs automatically assigned to leads created by this source.
    */
    private ?array $defaultTagIds = null;
    
    /**
     * @var array<TagSummary>|null $defaultTags Default tag summaries automatically applied to leads from this source.
    */
    private ?array $defaultTags = null;
    
    /**
     * @var string|null $description Human-readable description that explains this lead source table row to API users.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $enabled Indicates whether this lead source table row is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var DateTime|null $firstLeadReceivedAt UTC timestamp when this source first delivered a lead to Leadping.
    */
    private ?DateTime $firstLeadReceivedAt = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this lead source table row.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastLeadReceivedAt UTC timestamp when this source most recently delivered a lead to Leadping.
    */
    private ?DateTime $lastLeadReceivedAt = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when this lead source table row was last modified.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var SourceTableRow_modifiedByUser|null $modifiedByUser User summary for the person who last modified this lead source table row.
    */
    private ?SourceTableRow_modifiedByUser $modifiedByUser = null;
    
    /**
     * @var string|null $name Display name for this lead source table row in the Leadping API.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $requiresTrustedForm Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
    */
    private ?bool $requiresTrustedForm = null;
    
    /**
     * @var SourceTableRow_user|null $user User summary connected to this lead source table row.
    */
    private ?SourceTableRow_user $user = null;
    
    /**
     * Instantiates a new SourceTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceTableRow {
        return new SourceTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedProducts property value. Product allowlist used to accept or route leads from this source.
     * @return array<string>|null
    */
    public function getAllowedProducts(): ?array {
        return $this->allowedProducts;
    }

    /**
     * Gets the allowedStates property value. State or region allowlist used to accept leads from this source.
     * @return array<string>|null
    */
    public function getAllowedStates(): ?array {
        return $this->allowedStates;
    }

    /**
     * Gets the apiKeyLastUsedAt property value. UTC timestamp when the source API key was last used.
     * @return DateTime|null
    */
    public function getApiKeyLastUsedAt(): ?DateTime {
        return $this->apiKeyLastUsedAt;
    }

    /**
     * Gets the apiKeyPreview property value. Masked preview of the source API key for compact display.
     * @return string|null
    */
    public function getApiKeyPreview(): ?string {
        return $this->apiKeyPreview;
    }

    /**
     * Gets the apiKeyTotalUses property value. Total number of authenticated requests made with this source API key.
     * @return int|null
    */
    public function getApiKeyTotalUses(): ?int {
        return $this->apiKeyTotalUses;
    }

    /**
     * Gets the business property value. Business summary connected to this lead source table row.
     * @return SourceTableRow_business|null
    */
    public function getBusiness(): ?SourceTableRow_business {
        return $this->business;
    }

    /**
     * Gets the businessId property value. Business ID that owns this lead source.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the complianceApproved property value. Indicates whether the business or sender passed compliance review.
     * @return bool|null
    */
    public function getComplianceApproved(): ?bool {
        return $this->complianceApproved;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this lead source table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdByUser property value. User summary for the person who created this lead source table row.
     * @return SourceTableRow_createdByUser|null
    */
    public function getCreatedByUser(): ?SourceTableRow_createdByUser {
        return $this->createdByUser;
    }

    /**
     * Gets the defaultTagIds property value. Tag IDs automatically assigned to leads created by this source.
     * @return array<string>|null
    */
    public function getDefaultTagIds(): ?array {
        return $this->defaultTagIds;
    }

    /**
     * Gets the defaultTags property value. Default tag summaries automatically applied to leads from this source.
     * @return array<TagSummary>|null
    */
    public function getDefaultTags(): ?array {
        return $this->defaultTags;
    }

    /**
     * Gets the description property value. Human-readable description that explains this lead source table row to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enabled property value. Indicates whether this lead source table row is active and available in the Leadping API.
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
            'allowedProducts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedProducts($val);
            },
            'allowedStates' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedStates($val);
            },
            'apiKeyLastUsedAt' => fn(ParseNode $n) => $o->setApiKeyLastUsedAt($n->getDateTimeValue()),
            'apiKeyPreview' => fn(ParseNode $n) => $o->setApiKeyPreview($n->getStringValue()),
            'apiKeyTotalUses' => fn(ParseNode $n) => $o->setApiKeyTotalUses($n->getIntegerValue()),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([SourceTableRow_business::class, 'createFromDiscriminatorValue'])),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'complianceApproved' => fn(ParseNode $n) => $o->setComplianceApproved($n->getBooleanValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdByUser' => fn(ParseNode $n) => $o->setCreatedByUser($n->getObjectValue([SourceTableRow_createdByUser::class, 'createFromDiscriminatorValue'])),
            'defaultTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultTagIds($val);
            },
            'defaultTags' => fn(ParseNode $n) => $o->setDefaultTags($n->getCollectionOfObjectValues([TagSummary::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'firstLeadReceivedAt' => fn(ParseNode $n) => $o->setFirstLeadReceivedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastLeadReceivedAt' => fn(ParseNode $n) => $o->setLastLeadReceivedAt($n->getDateTimeValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'modifiedByUser' => fn(ParseNode $n) => $o->setModifiedByUser($n->getObjectValue([SourceTableRow_modifiedByUser::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'requiresTrustedForm' => fn(ParseNode $n) => $o->setRequiresTrustedForm($n->getBooleanValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([SourceTableRow_user::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the firstLeadReceivedAt property value. UTC timestamp when this source first delivered a lead to Leadping.
     * @return DateTime|null
    */
    public function getFirstLeadReceivedAt(): ?DateTime {
        return $this->firstLeadReceivedAt;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this lead source table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastLeadReceivedAt property value. UTC timestamp when this source most recently delivered a lead to Leadping.
     * @return DateTime|null
    */
    public function getLastLeadReceivedAt(): ?DateTime {
        return $this->lastLeadReceivedAt;
    }

    /**
     * Gets the modifiedAt property value. UTC timestamp when this lead source table row was last modified.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the modifiedByUser property value. User summary for the person who last modified this lead source table row.
     * @return SourceTableRow_modifiedByUser|null
    */
    public function getModifiedByUser(): ?SourceTableRow_modifiedByUser {
        return $this->modifiedByUser;
    }

    /**
     * Gets the name property value. Display name for this lead source table row in the Leadping API.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the requiresTrustedForm property value. Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
     * @return bool|null
    */
    public function getRequiresTrustedForm(): ?bool {
        return $this->requiresTrustedForm;
    }

    /**
     * Gets the user property value. User summary connected to this lead source table row.
     * @return SourceTableRow_user|null
    */
    public function getUser(): ?SourceTableRow_user {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedProducts', $this->getAllowedProducts());
        $writer->writeCollectionOfPrimitiveValues('allowedStates', $this->getAllowedStates());
        $writer->writeDateTimeValue('apiKeyLastUsedAt', $this->getApiKeyLastUsedAt());
        $writer->writeStringValue('apiKeyPreview', $this->getApiKeyPreview());
        $writer->writeIntegerValue('apiKeyTotalUses', $this->getApiKeyTotalUses());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeBooleanValue('complianceApproved', $this->getComplianceApproved());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeObjectValue('createdByUser', $this->getCreatedByUser());
        $writer->writeCollectionOfPrimitiveValues('defaultTagIds', $this->getDefaultTagIds());
        $writer->writeCollectionOfObjectValues('defaultTags', $this->getDefaultTags());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeDateTimeValue('firstLeadReceivedAt', $this->getFirstLeadReceivedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastLeadReceivedAt', $this->getLastLeadReceivedAt());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeObjectValue('modifiedByUser', $this->getModifiedByUser());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('requiresTrustedForm', $this->getRequiresTrustedForm());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the allowedProducts property value. Product allowlist used to accept or route leads from this source.
     * @param array<string>|null $value Value to set for the allowedProducts property.
    */
    public function setAllowedProducts(?array $value): void {
        $this->allowedProducts = $value;
    }

    /**
     * Sets the allowedStates property value. State or region allowlist used to accept leads from this source.
     * @param array<string>|null $value Value to set for the allowedStates property.
    */
    public function setAllowedStates(?array $value): void {
        $this->allowedStates = $value;
    }

    /**
     * Sets the apiKeyLastUsedAt property value. UTC timestamp when the source API key was last used.
     * @param DateTime|null $value Value to set for the apiKeyLastUsedAt property.
    */
    public function setApiKeyLastUsedAt(?DateTime $value): void {
        $this->apiKeyLastUsedAt = $value;
    }

    /**
     * Sets the apiKeyPreview property value. Masked preview of the source API key for compact display.
     * @param string|null $value Value to set for the apiKeyPreview property.
    */
    public function setApiKeyPreview(?string $value): void {
        $this->apiKeyPreview = $value;
    }

    /**
     * Sets the apiKeyTotalUses property value. Total number of authenticated requests made with this source API key.
     * @param int|null $value Value to set for the apiKeyTotalUses property.
    */
    public function setApiKeyTotalUses(?int $value): void {
        $this->apiKeyTotalUses = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this lead source table row.
     * @param SourceTableRow_business|null $value Value to set for the business property.
    */
    public function setBusiness(?SourceTableRow_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the businessId property value. Business ID that owns this lead source.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the complianceApproved property value. Indicates whether the business or sender passed compliance review.
     * @param bool|null $value Value to set for the complianceApproved property.
    */
    public function setComplianceApproved(?bool $value): void {
        $this->complianceApproved = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this lead source table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdByUser property value. User summary for the person who created this lead source table row.
     * @param SourceTableRow_createdByUser|null $value Value to set for the createdByUser property.
    */
    public function setCreatedByUser(?SourceTableRow_createdByUser $value): void {
        $this->createdByUser = $value;
    }

    /**
     * Sets the defaultTagIds property value. Tag IDs automatically assigned to leads created by this source.
     * @param array<string>|null $value Value to set for the defaultTagIds property.
    */
    public function setDefaultTagIds(?array $value): void {
        $this->defaultTagIds = $value;
    }

    /**
     * Sets the defaultTags property value. Default tag summaries automatically applied to leads from this source.
     * @param array<TagSummary>|null $value Value to set for the defaultTags property.
    */
    public function setDefaultTags(?array $value): void {
        $this->defaultTags = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this lead source table row to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this lead source table row is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the firstLeadReceivedAt property value. UTC timestamp when this source first delivered a lead to Leadping.
     * @param DateTime|null $value Value to set for the firstLeadReceivedAt property.
    */
    public function setFirstLeadReceivedAt(?DateTime $value): void {
        $this->firstLeadReceivedAt = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this lead source table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastLeadReceivedAt property value. UTC timestamp when this source most recently delivered a lead to Leadping.
     * @param DateTime|null $value Value to set for the lastLeadReceivedAt property.
    */
    public function setLastLeadReceivedAt(?DateTime $value): void {
        $this->lastLeadReceivedAt = $value;
    }

    /**
     * Sets the modifiedAt property value. UTC timestamp when this lead source table row was last modified.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the modifiedByUser property value. User summary for the person who last modified this lead source table row.
     * @param SourceTableRow_modifiedByUser|null $value Value to set for the modifiedByUser property.
    */
    public function setModifiedByUser(?SourceTableRow_modifiedByUser $value): void {
        $this->modifiedByUser = $value;
    }

    /**
     * Sets the name property value. Display name for this lead source table row in the Leadping API.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the requiresTrustedForm property value. Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
     * @param bool|null $value Value to set for the requiresTrustedForm property.
    */
    public function setRequiresTrustedForm(?bool $value): void {
        $this->requiresTrustedForm = $value;
    }

    /**
     * Sets the user property value. User summary connected to this lead source table row.
     * @param SourceTableRow_user|null $value Value to set for the user property.
    */
    public function setUser(?SourceTableRow_user $value): void {
        $this->user = $value;
    }

}
