<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Describes lead source data returned by Leadping.
*/
class SourceResponse implements AdditionalDataHolder, Parsable 
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
     * @var string|null $apiKey Source API key used to authenticate inbound lead delivery to Leadping. Unlike an organization API key, this value remains available to authorized source users.
    */
    private ?string $apiKey = null;
    
    /**
     * @var string|null $apiKeyPreview Masked preview of the source API key for compact display.
    */
    private ?string $apiKeyPreview = null;
    
    /**
     * @var bool|null $complianceApproved Indicates whether the organization or sender passed compliance review.
    */
    private ?bool $complianceApproved = null;
    
    /**
     * @var float|null $costPerLead Configured cost charged when this source creates a billable lead.
    */
    private ?float $costPerLead = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when the resource was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var SourceResponse_createdByUser|null $createdByUser User summary for the person who created this lead source response.
    */
    private ?SourceResponse_createdByUser $createdByUser = null;
    
    /**
     * @var string|null $createdByUserEmail Email used to resolve the creator's avatar.
    */
    private ?string $createdByUserEmail = null;
    
    /**
     * @var array<string>|null $defaultTagIds Tag IDs automatically assigned to leads created by this source.
    */
    private ?array $defaultTagIds = null;
    
    /**
     * @var array<TagSummary>|null $defaultTags Default tag summaries automatically applied to leads from this source.
    */
    private ?array $defaultTags = null;
    
    /**
     * @var string|null $description Human-readable description that explains this lead source response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $enabled Indicates whether this lead source response is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var DateTime|null $firstLeadReceivedAt UTC timestamp when this source first delivered a lead to Leadping.
    */
    private ?DateTime $firstLeadReceivedAt = null;
    
    /**
     * @var string|null $id Stable unique identifier of the resource.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastLeadReceivedAt UTC timestamp when this source most recently delivered a lead to Leadping.
    */
    private ?DateTime $lastLeadReceivedAt = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when the resource was last modified, or null when it has not been updated.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var SourceResponse_modifiedByUser|null $modifiedByUser User summary for the person who last modified this lead source response.
    */
    private ?SourceResponse_modifiedByUser $modifiedByUser = null;
    
    /**
     * @var string|null $name Human-readable display name of the resource.
    */
    private ?string $name = null;
    
    /**
     * @var SourceResponse_organization|null $organization Organization summary connected to this lead source response.
    */
    private ?SourceResponse_organization $organization = null;
    
    /**
     * @var bool|null $requiresTrustedForm Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
    */
    private ?bool $requiresTrustedForm = null;
    
    /**
     * @var SourceResponse_user|null $user User summary connected to this lead source response.
    */
    private ?SourceResponse_user $user = null;
    
    /**
     * Instantiates a new SourceResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceResponse {
        return new SourceResponse();
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
     * Gets the apiKey property value. Source API key used to authenticate inbound lead delivery to Leadping. Unlike an organization API key, this value remains available to authorized source users.
     * @return string|null
    */
    public function getApiKey(): ?string {
        return $this->apiKey;
    }

    /**
     * Gets the apiKeyPreview property value. Masked preview of the source API key for compact display.
     * @return string|null
    */
    public function getApiKeyPreview(): ?string {
        return $this->apiKeyPreview;
    }

    /**
     * Gets the complianceApproved property value. Indicates whether the organization or sender passed compliance review.
     * @return bool|null
    */
    public function getComplianceApproved(): ?bool {
        return $this->complianceApproved;
    }

    /**
     * Gets the costPerLead property value. Configured cost charged when this source creates a billable lead.
     * @return float|null
    */
    public function getCostPerLead(): ?float {
        return $this->costPerLead;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when the resource was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdByUser property value. User summary for the person who created this lead source response.
     * @return SourceResponse_createdByUser|null
    */
    public function getCreatedByUser(): ?SourceResponse_createdByUser {
        return $this->createdByUser;
    }

    /**
     * Gets the createdByUserEmail property value. Email used to resolve the creator's avatar.
     * @return string|null
    */
    public function getCreatedByUserEmail(): ?string {
        return $this->createdByUserEmail;
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
     * Gets the description property value. Human-readable description that explains this lead source response to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the enabled property value. Indicates whether this lead source response is active and available in the Leadping API.
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
            'apiKey' => fn(ParseNode $n) => $o->setApiKey($n->getStringValue()),
            'apiKeyPreview' => fn(ParseNode $n) => $o->setApiKeyPreview($n->getStringValue()),
            'complianceApproved' => fn(ParseNode $n) => $o->setComplianceApproved($n->getBooleanValue()),
            'costPerLead' => fn(ParseNode $n) => $o->setCostPerLead($n->getFloatValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdByUser' => fn(ParseNode $n) => $o->setCreatedByUser($n->getObjectValue([SourceResponse_createdByUser::class, 'createFromDiscriminatorValue'])),
            'createdByUserEmail' => fn(ParseNode $n) => $o->setCreatedByUserEmail($n->getStringValue()),
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
            'modifiedByUser' => fn(ParseNode $n) => $o->setModifiedByUser($n->getObjectValue([SourceResponse_modifiedByUser::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([SourceResponse_organization::class, 'createFromDiscriminatorValue'])),
            'requiresTrustedForm' => fn(ParseNode $n) => $o->setRequiresTrustedForm($n->getBooleanValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([SourceResponse_user::class, 'createFromDiscriminatorValue'])),
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
     * Gets the id property value. Stable unique identifier of the resource.
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
     * Gets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the modifiedByUser property value. User summary for the person who last modified this lead source response.
     * @return SourceResponse_modifiedByUser|null
    */
    public function getModifiedByUser(): ?SourceResponse_modifiedByUser {
        return $this->modifiedByUser;
    }

    /**
     * Gets the name property value. Human-readable display name of the resource.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the organization property value. Organization summary connected to this lead source response.
     * @return SourceResponse_organization|null
    */
    public function getOrganization(): ?SourceResponse_organization {
        return $this->organization;
    }

    /**
     * Gets the requiresTrustedForm property value. Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
     * @return bool|null
    */
    public function getRequiresTrustedForm(): ?bool {
        return $this->requiresTrustedForm;
    }

    /**
     * Gets the user property value. User summary connected to this lead source response.
     * @return SourceResponse_user|null
    */
    public function getUser(): ?SourceResponse_user {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedProducts', $this->getAllowedProducts());
        $writer->writeCollectionOfPrimitiveValues('allowedStates', $this->getAllowedStates());
        $writer->writeStringValue('apiKey', $this->getApiKey());
        $writer->writeStringValue('apiKeyPreview', $this->getApiKeyPreview());
        $writer->writeBooleanValue('complianceApproved', $this->getComplianceApproved());
        $writer->writeFloatValue('costPerLead', $this->getCostPerLead());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeObjectValue('createdByUser', $this->getCreatedByUser());
        $writer->writeStringValue('createdByUserEmail', $this->getCreatedByUserEmail());
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
        $writer->writeObjectValue('organization', $this->getOrganization());
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
     * Sets the apiKey property value. Source API key used to authenticate inbound lead delivery to Leadping. Unlike an organization API key, this value remains available to authorized source users.
     * @param string|null $value Value to set for the apiKey property.
    */
    public function setApiKey(?string $value): void {
        $this->apiKey = $value;
    }

    /**
     * Sets the apiKeyPreview property value. Masked preview of the source API key for compact display.
     * @param string|null $value Value to set for the apiKeyPreview property.
    */
    public function setApiKeyPreview(?string $value): void {
        $this->apiKeyPreview = $value;
    }

    /**
     * Sets the complianceApproved property value. Indicates whether the organization or sender passed compliance review.
     * @param bool|null $value Value to set for the complianceApproved property.
    */
    public function setComplianceApproved(?bool $value): void {
        $this->complianceApproved = $value;
    }

    /**
     * Sets the costPerLead property value. Configured cost charged when this source creates a billable lead.
     * @param float|null $value Value to set for the costPerLead property.
    */
    public function setCostPerLead(?float $value): void {
        $this->costPerLead = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when the resource was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdByUser property value. User summary for the person who created this lead source response.
     * @param SourceResponse_createdByUser|null $value Value to set for the createdByUser property.
    */
    public function setCreatedByUser(?SourceResponse_createdByUser $value): void {
        $this->createdByUser = $value;
    }

    /**
     * Sets the createdByUserEmail property value. Email used to resolve the creator's avatar.
     * @param string|null $value Value to set for the createdByUserEmail property.
    */
    public function setCreatedByUserEmail(?string $value): void {
        $this->createdByUserEmail = $value;
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
     * Sets the description property value. Human-readable description that explains this lead source response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this lead source response is active and available in the Leadping API.
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
     * Sets the id property value. Stable unique identifier of the resource.
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
     * Sets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the modifiedByUser property value. User summary for the person who last modified this lead source response.
     * @param SourceResponse_modifiedByUser|null $value Value to set for the modifiedByUser property.
    */
    public function setModifiedByUser(?SourceResponse_modifiedByUser $value): void {
        $this->modifiedByUser = $value;
    }

    /**
     * Sets the name property value. Human-readable display name of the resource.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the organization property value. Organization summary connected to this lead source response.
     * @param SourceResponse_organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?SourceResponse_organization $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the requiresTrustedForm property value. Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
     * @param bool|null $value Value to set for the requiresTrustedForm property.
    */
    public function setRequiresTrustedForm(?bool $value): void {
        $this->requiresTrustedForm = $value;
    }

    /**
     * Sets the user property value. User summary connected to this lead source response.
     * @param SourceResponse_user|null $value Value to set for the user property.
    */
    public function setUser(?SourceResponse_user $value): void {
        $this->user = $value;
    }

}
