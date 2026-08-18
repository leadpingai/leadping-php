<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes organization user data returned by Leadping.
*/
class OrganizationMemberResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $createdByUserId The created by user ID associated with this organization user.
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastUsedAt UTC timestamp for last used at on this organization user.
    */
    private ?DateTime $lastUsedAt = null;
    
    /**
     * @var string|null $licenseBillingStatus The billing status for this user's organization license.
    */
    private ?string $licenseBillingStatus = null;
    
    /**
     * @var int|null $licenseQuantity The quantity on the shared organization user license item after this change.
    */
    private ?int $licenseQuantity = null;
    
    /**
     * @var DateTime|null $licenseRenewalDate The renewal date used for this user's license proration.
    */
    private ?DateTime $licenseRenewalDate = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var IdNamePair|null $organization Organization for this organization user.
    */
    private ?IdNamePair $organization = null;
    
    /**
     * @var DateTime|null $removedAt UTC timestamp for removed at on this organization user.
    */
    private ?DateTime $removedAt = null;
    
    /**
     * @var string|null $removedByUserId The removed by user ID associated with this organization user.
    */
    private ?string $removedByUserId = null;
    
    /**
     * @var OrganizationMemberRole|null $role Role for this organization user.
    */
    private ?OrganizationMemberRole $role = null;
    
    /**
     * @var IdNamePair|null $user User for this organization user.
    */
    private ?IdNamePair $user = null;
    
    /**
     * @var string|null $userEmail User email for this organization user.
    */
    private ?string $userEmail = null;
    
    /**
     * Instantiates a new OrganizationMemberResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationMemberResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationMemberResponse {
        return new OrganizationMemberResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdByUserId property value. The created by user ID associated with this organization user.
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastUsedAt' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'licenseBillingStatus' => fn(ParseNode $n) => $o->setLicenseBillingStatus($n->getStringValue()),
            'licenseQuantity' => fn(ParseNode $n) => $o->setLicenseQuantity($n->getIntegerValue()),
            'licenseRenewalDate' => fn(ParseNode $n) => $o->setLicenseRenewalDate($n->getDateTimeValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'removedAt' => fn(ParseNode $n) => $o->setRemovedAt($n->getDateTimeValue()),
            'removedByUserId' => fn(ParseNode $n) => $o->setRemovedByUserId($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(OrganizationMemberRole::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
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
     * Gets the lastUsedAt property value. UTC timestamp for last used at on this organization user.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->lastUsedAt;
    }

    /**
     * Gets the licenseBillingStatus property value. The billing status for this user's organization license.
     * @return string|null
    */
    public function getLicenseBillingStatus(): ?string {
        return $this->licenseBillingStatus;
    }

    /**
     * Gets the licenseQuantity property value. The quantity on the shared organization user license item after this change.
     * @return int|null
    */
    public function getLicenseQuantity(): ?int {
        return $this->licenseQuantity;
    }

    /**
     * Gets the licenseRenewalDate property value. The renewal date used for this user's license proration.
     * @return DateTime|null
    */
    public function getLicenseRenewalDate(): ?DateTime {
        return $this->licenseRenewalDate;
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
     * Gets the organization property value. Organization for this organization user.
     * @return IdNamePair|null
    */
    public function getOrganization(): ?IdNamePair {
        return $this->organization;
    }

    /**
     * Gets the removedAt property value. UTC timestamp for removed at on this organization user.
     * @return DateTime|null
    */
    public function getRemovedAt(): ?DateTime {
        return $this->removedAt;
    }

    /**
     * Gets the removedByUserId property value. The removed by user ID associated with this organization user.
     * @return string|null
    */
    public function getRemovedByUserId(): ?string {
        return $this->removedByUserId;
    }

    /**
     * Gets the role property value. Role for this organization user.
     * @return OrganizationMemberRole|null
    */
    public function getRole(): ?OrganizationMemberRole {
        return $this->role;
    }

    /**
     * Gets the user property value. User for this organization user.
     * @return IdNamePair|null
    */
    public function getUser(): ?IdNamePair {
        return $this->user;
    }

    /**
     * Gets the userEmail property value. User email for this organization user.
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->userEmail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastUsedAt', $this->getLastUsedAt());
        $writer->writeStringValue('licenseBillingStatus', $this->getLicenseBillingStatus());
        $writer->writeIntegerValue('licenseQuantity', $this->getLicenseQuantity());
        $writer->writeDateTimeValue('licenseRenewalDate', $this->getLicenseRenewalDate());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeDateTimeValue('removedAt', $this->getRemovedAt());
        $writer->writeStringValue('removedByUserId', $this->getRemovedByUserId());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
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
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdByUserId property value. The created by user ID associated with this organization user.
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastUsedAt property value. UTC timestamp for last used at on this organization user.
     * @param DateTime|null $value Value to set for the lastUsedAt property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->lastUsedAt = $value;
    }

    /**
     * Sets the licenseBillingStatus property value. The billing status for this user's organization license.
     * @param string|null $value Value to set for the licenseBillingStatus property.
    */
    public function setLicenseBillingStatus(?string $value): void {
        $this->licenseBillingStatus = $value;
    }

    /**
     * Sets the licenseQuantity property value. The quantity on the shared organization user license item after this change.
     * @param int|null $value Value to set for the licenseQuantity property.
    */
    public function setLicenseQuantity(?int $value): void {
        $this->licenseQuantity = $value;
    }

    /**
     * Sets the licenseRenewalDate property value. The renewal date used for this user's license proration.
     * @param DateTime|null $value Value to set for the licenseRenewalDate property.
    */
    public function setLicenseRenewalDate(?DateTime $value): void {
        $this->licenseRenewalDate = $value;
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
     * Sets the organization property value. Organization for this organization user.
     * @param IdNamePair|null $value Value to set for the organization property.
    */
    public function setOrganization(?IdNamePair $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the removedAt property value. UTC timestamp for removed at on this organization user.
     * @param DateTime|null $value Value to set for the removedAt property.
    */
    public function setRemovedAt(?DateTime $value): void {
        $this->removedAt = $value;
    }

    /**
     * Sets the removedByUserId property value. The removed by user ID associated with this organization user.
     * @param string|null $value Value to set for the removedByUserId property.
    */
    public function setRemovedByUserId(?string $value): void {
        $this->removedByUserId = $value;
    }

    /**
     * Sets the role property value. Role for this organization user.
     * @param OrganizationMemberRole|null $value Value to set for the role property.
    */
    public function setRole(?OrganizationMemberRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the user property value. User for this organization user.
     * @param IdNamePair|null $value Value to set for the user property.
    */
    public function setUser(?IdNamePair $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userEmail property value. User email for this organization user.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->userEmail = $value;
    }

}
