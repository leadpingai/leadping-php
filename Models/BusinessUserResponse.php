<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing business user data returned to callers.
*/
class BusinessUserResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var IdNamePair|null $business The business value for this business user.
    */
    private ?IdNamePair $business = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $createdByUserId The created by user ID associated with this business user.
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastUsedAt The date and time for the last used at value on this business user.
    */
    private ?DateTime $lastUsedAt = null;
    
    /**
     * @var string|null $licenseBillingStatus The billing status for this user's business license.
    */
    private ?string $licenseBillingStatus = null;
    
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
     * @var DateTime|null $removedAt The date and time for the removed at value on this business user.
    */
    private ?DateTime $removedAt = null;
    
    /**
     * @var string|null $removedByUserId The removed by user ID associated with this business user.
    */
    private ?string $removedByUserId = null;
    
    /**
     * @var BusinessUserRole|null $role The role value for this business user.
    */
    private ?BusinessUserRole $role = null;
    
    /**
     * @var IdNamePair|null $user The user value for this business user.
    */
    private ?IdNamePair $user = null;
    
    /**
     * @var string|null $userEmail The user email value for this business user.
    */
    private ?string $userEmail = null;
    
    /**
     * Instantiates a new BusinessUserResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessUserResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessUserResponse {
        return new BusinessUserResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the business property value. The business value for this business user.
     * @return IdNamePair|null
    */
    public function getBusiness(): ?IdNamePair {
        return $this->business;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdByUserId property value. The created by user ID associated with this business user.
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
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastUsedAt' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'licenseBillingStatus' => fn(ParseNode $n) => $o->setLicenseBillingStatus($n->getStringValue()),
            'licenseRenewalDate' => fn(ParseNode $n) => $o->setLicenseRenewalDate($n->getDateTimeValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'removedAt' => fn(ParseNode $n) => $o->setRemovedAt($n->getDateTimeValue()),
            'removedByUserId' => fn(ParseNode $n) => $o->setRemovedByUserId($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BusinessUserRole::class)),
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
     * Gets the lastUsedAt property value. The date and time for the last used at value on this business user.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->lastUsedAt;
    }

    /**
     * Gets the licenseBillingStatus property value. The billing status for this user's business license.
     * @return string|null
    */
    public function getLicenseBillingStatus(): ?string {
        return $this->licenseBillingStatus;
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
     * Gets the removedAt property value. The date and time for the removed at value on this business user.
     * @return DateTime|null
    */
    public function getRemovedAt(): ?DateTime {
        return $this->removedAt;
    }

    /**
     * Gets the removedByUserId property value. The removed by user ID associated with this business user.
     * @return string|null
    */
    public function getRemovedByUserId(): ?string {
        return $this->removedByUserId;
    }

    /**
     * Gets the role property value. The role value for this business user.
     * @return BusinessUserRole|null
    */
    public function getRole(): ?BusinessUserRole {
        return $this->role;
    }

    /**
     * Gets the user property value. The user value for this business user.
     * @return IdNamePair|null
    */
    public function getUser(): ?IdNamePair {
        return $this->user;
    }

    /**
     * Gets the userEmail property value. The user email value for this business user.
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
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastUsedAt', $this->getLastUsedAt());
        $writer->writeStringValue('licenseBillingStatus', $this->getLicenseBillingStatus());
        $writer->writeDateTimeValue('licenseRenewalDate', $this->getLicenseRenewalDate());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the business property value. The business value for this business user.
     * @param IdNamePair|null $value Value to set for the business property.
    */
    public function setBusiness(?IdNamePair $value): void {
        $this->business = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdByUserId property value. The created by user ID associated with this business user.
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
     * Sets the lastUsedAt property value. The date and time for the last used at value on this business user.
     * @param DateTime|null $value Value to set for the lastUsedAt property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->lastUsedAt = $value;
    }

    /**
     * Sets the licenseBillingStatus property value. The billing status for this user's business license.
     * @param string|null $value Value to set for the licenseBillingStatus property.
    */
    public function setLicenseBillingStatus(?string $value): void {
        $this->licenseBillingStatus = $value;
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
     * Sets the removedAt property value. The date and time for the removed at value on this business user.
     * @param DateTime|null $value Value to set for the removedAt property.
    */
    public function setRemovedAt(?DateTime $value): void {
        $this->removedAt = $value;
    }

    /**
     * Sets the removedByUserId property value. The removed by user ID associated with this business user.
     * @param string|null $value Value to set for the removedByUserId property.
    */
    public function setRemovedByUserId(?string $value): void {
        $this->removedByUserId = $value;
    }

    /**
     * Sets the role property value. The role value for this business user.
     * @param BusinessUserRole|null $value Value to set for the role property.
    */
    public function setRole(?BusinessUserRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the user property value. The user value for this business user.
     * @param IdNamePair|null $value Value to set for the user property.
    */
    public function setUser(?IdNamePair $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userEmail property value. The user email value for this business user.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->userEmail = $value;
    }

}
