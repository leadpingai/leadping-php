<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing business user data used by Leadping API contracts.
*/
class BusinessUserTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this business user.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id The unique ID for this business user.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $licenseBillingStatus The billing status for this user's business license.
    */
    private ?string $licenseBillingStatus = null;
    
    /**
     * @var DateTime|null $licenseRenewalDate The renewal date used for this user's license proration.
    */
    private ?DateTime $licenseRenewalDate = null;
    
    /**
     * @var BusinessUserRole|null $role The role value for this business user.
    */
    private ?BusinessUserRole $role = null;
    
    /**
     * @var string|null $userEmail The user email value for this business user.
    */
    private ?string $userEmail = null;
    
    /**
     * @var string|null $userId The user ID associated with this business user.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userName The user name value for this business user.
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new BusinessUserTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessUserTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessUserTableRow {
        return new BusinessUserTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this business user.
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
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BusinessUserRole::class)),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this business user.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
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
     * Gets the role property value. The role value for this business user.
     * @return BusinessUserRole|null
    */
    public function getRole(): ?BusinessUserRole {
        return $this->role;
    }

    /**
     * Gets the userEmail property value. The user email value for this business user.
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->userEmail;
    }

    /**
     * Gets the userId property value. The user ID associated with this business user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. The user name value for this business user.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
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
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
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
     * Sets the createdAt property value. The date and time for the created at value on this business user.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. The unique ID for this business user.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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
     * Sets the role property value. The role value for this business user.
     * @param BusinessUserRole|null $value Value to set for the role property.
    */
    public function setRole(?BusinessUserRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the userEmail property value. The user email value for this business user.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->userEmail = $value;
    }

    /**
     * Sets the userId property value. The user ID associated with this business user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. The user name value for this business user.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->userName = $value;
    }

}
