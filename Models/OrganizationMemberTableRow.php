<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing organization user data used by Leadping API contracts.
*/
class OrganizationMemberTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this organization user.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id The unique ID for this organization user.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $licenseBillingStatus The billing status for this user's organization license.
    */
    private ?string $licenseBillingStatus = null;
    
    /**
     * @var DateTime|null $licenseRenewalDate The renewal date used for this user's license proration.
    */
    private ?DateTime $licenseRenewalDate = null;
    
    /**
     * @var OrganizationMemberRole|null $role The role value for this organization user.
    */
    private ?OrganizationMemberRole $role = null;
    
    /**
     * @var IdNamePair|null $user The ID and name for this user.
    */
    private ?IdNamePair $user = null;
    
    /**
     * @var string|null $userEmail The user email value for this organization user.
    */
    private ?string $userEmail = null;
    
    /**
     * Instantiates a new OrganizationMemberTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationMemberTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationMemberTableRow {
        return new OrganizationMemberTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this organization user.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'licenseBillingStatus' => fn(ParseNode $n) => $o->setLicenseBillingStatus($n->getStringValue()),
            'licenseRenewalDate' => fn(ParseNode $n) => $o->setLicenseRenewalDate($n->getDateTimeValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(OrganizationMemberRole::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this organization user.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the licenseBillingStatus property value. The billing status for this user's organization license.
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
     * Gets the role property value. The role value for this organization user.
     * @return OrganizationMemberRole|null
    */
    public function getRole(): ?OrganizationMemberRole {
        return $this->role;
    }

    /**
     * Gets the user property value. The ID and name for this user.
     * @return IdNamePair|null
    */
    public function getUser(): ?IdNamePair {
        return $this->user;
    }

    /**
     * Gets the userEmail property value. The user email value for this organization user.
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('licenseBillingStatus', $this->getLicenseBillingStatus());
        $writer->writeDateTimeValue('licenseRenewalDate', $this->getLicenseRenewalDate());
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
     * Sets the createdAt property value. The date and time for the created at value on this organization user.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. The unique ID for this organization user.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the licenseBillingStatus property value. The billing status for this user's organization license.
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
     * Sets the role property value. The role value for this organization user.
     * @param OrganizationMemberRole|null $value Value to set for the role property.
    */
    public function setRole(?OrganizationMemberRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the user property value. The ID and name for this user.
     * @param IdNamePair|null $value Value to set for the user property.
    */
    public function setUser(?IdNamePair $value): void {
        $this->user = $value;
    }

    /**
     * Sets the userEmail property value. The user email value for this organization user.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->userEmail = $value;
    }

}
