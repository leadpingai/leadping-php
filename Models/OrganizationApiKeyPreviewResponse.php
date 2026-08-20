<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Safe identifying and usage metadata for an organization API key. This model never contains the secret credential.
*/
class OrganizationApiKeyPreviewResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt Date and time when Leadping began tracking the API key.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var bool|null $enabled Whether the API key can currently authenticate requests.
    */
    private ?bool $enabled = null;
    
    /**
     * @var DateTime|null $expiresAt Date and time when the API key expires, or null when it does not expire.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var DateTime|null $firstUsedAt Date and time when the API key was first used.
    */
    private ?DateTime $firstUsedAt = null;
    
    /**
     * @var string|null $id Unique identifier of the API key.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $issuedAt Date and time when the API key was issued.
    */
    private ?DateTime $issuedAt = null;
    
    /**
     * @var DateTime|null $lastUsedAt Date and time when the API key was last used.
    */
    private ?DateTime $lastUsedAt = null;
    
    /**
     * @var DateTime|null $modifiedAt Date and time when the tracked API-key metadata was last modified.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name Human-readable name of the API key.
    */
    private ?string $name = null;
    
    /**
     * @var IdNamePair|null $organization Organization that owns the API key.
    */
    private ?IdNamePair $organization = null;
    
    /**
     * @var array<string>|null $permissions Permission slugs granted to the API key.
    */
    private ?array $permissions = null;
    
    /**
     * @var string|null $preview Masked value that can be used to identify the key without revealing its secret.
    */
    private ?string $preview = null;
    
    /**
     * @var int|null $totalUses Total number of tracked uses.
    */
    private ?int $totalUses = null;
    
    /**
     * Instantiates a new OrganizationApiKeyPreviewResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationApiKeyPreviewResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationApiKeyPreviewResponse {
        return new OrganizationApiKeyPreviewResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. Date and time when Leadping began tracking the API key.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the enabled property value. Whether the API key can currently authenticate requests.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Gets the expiresAt property value. Date and time when the API key expires, or null when it does not expire.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'firstUsedAt' => fn(ParseNode $n) => $o->setFirstUsedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'issuedAt' => fn(ParseNode $n) => $o->setIssuedAt($n->getDateTimeValue()),
            'lastUsedAt' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'permissions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissions($val);
            },
            'preview' => fn(ParseNode $n) => $o->setPreview($n->getStringValue()),
            'totalUses' => fn(ParseNode $n) => $o->setTotalUses($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the firstUsedAt property value. Date and time when the API key was first used.
     * @return DateTime|null
    */
    public function getFirstUsedAt(): ?DateTime {
        return $this->firstUsedAt;
    }

    /**
     * Gets the id property value. Unique identifier of the API key.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the issuedAt property value. Date and time when the API key was issued.
     * @return DateTime|null
    */
    public function getIssuedAt(): ?DateTime {
        return $this->issuedAt;
    }

    /**
     * Gets the lastUsedAt property value. Date and time when the API key was last used.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->lastUsedAt;
    }

    /**
     * Gets the modifiedAt property value. Date and time when the tracked API-key metadata was last modified.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. Human-readable name of the API key.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the organization property value. Organization that owns the API key.
     * @return IdNamePair|null
    */
    public function getOrganization(): ?IdNamePair {
        return $this->organization;
    }

    /**
     * Gets the permissions property value. Permission slugs granted to the API key.
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Gets the preview property value. Masked value that can be used to identify the key without revealing its secret.
     * @return string|null
    */
    public function getPreview(): ?string {
        return $this->preview;
    }

    /**
     * Gets the totalUses property value. Total number of tracked uses.
     * @return int|null
    */
    public function getTotalUses(): ?int {
        return $this->totalUses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeDateTimeValue('firstUsedAt', $this->getFirstUsedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('issuedAt', $this->getIssuedAt());
        $writer->writeDateTimeValue('lastUsedAt', $this->getLastUsedAt());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeCollectionOfPrimitiveValues('permissions', $this->getPermissions());
        $writer->writeStringValue('preview', $this->getPreview());
        $writer->writeIntegerValue('totalUses', $this->getTotalUses());
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
     * Sets the createdAt property value. Date and time when Leadping began tracking the API key.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the enabled property value. Whether the API key can currently authenticate requests.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the expiresAt property value. Date and time when the API key expires, or null when it does not expire.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the firstUsedAt property value. Date and time when the API key was first used.
     * @param DateTime|null $value Value to set for the firstUsedAt property.
    */
    public function setFirstUsedAt(?DateTime $value): void {
        $this->firstUsedAt = $value;
    }

    /**
     * Sets the id property value. Unique identifier of the API key.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the issuedAt property value. Date and time when the API key was issued.
     * @param DateTime|null $value Value to set for the issuedAt property.
    */
    public function setIssuedAt(?DateTime $value): void {
        $this->issuedAt = $value;
    }

    /**
     * Sets the lastUsedAt property value. Date and time when the API key was last used.
     * @param DateTime|null $value Value to set for the lastUsedAt property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->lastUsedAt = $value;
    }

    /**
     * Sets the modifiedAt property value. Date and time when the tracked API-key metadata was last modified.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. Human-readable name of the API key.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the organization property value. Organization that owns the API key.
     * @param IdNamePair|null $value Value to set for the organization property.
    */
    public function setOrganization(?IdNamePair $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the permissions property value. Permission slugs granted to the API key.
     * @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->permissions = $value;
    }

    /**
     * Sets the preview property value. Masked value that can be used to identify the key without revealing its secret.
     * @param string|null $value Value to set for the preview property.
    */
    public function setPreview(?string $value): void {
        $this->preview = $value;
    }

    /**
     * Sets the totalUses property value. Total number of tracked uses.
     * @param int|null $value Value to set for the totalUses property.
    */
    public function setTotalUses(?int $value): void {
        $this->totalUses = $value;
    }

}
