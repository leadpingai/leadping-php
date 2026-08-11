<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes organization invitation data used in Leadping API requests and responses.
*/
class OrganizationInvitationTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DateTime|null $acceptedAt UTC timestamp for accepted at on this organization invitation.
    */
    private ?DateTime $acceptedAt = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp for created at on this organization invitation.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $email The email address associated with this organization invitation.
    */
    private ?string $email = null;
    
    /**
     * @var DateTime|null $expiresAt UTC timestamp for expires at on this organization invitation.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this organization invitation.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $licenseActivatedAt The date and time this invitation's paid license was created.
    */
    private ?DateTime $licenseActivatedAt = null;
    
    /**
     * @var string|null $licenseBillingStatus The billing status for the paid license created by this invitation.
    */
    private ?string $licenseBillingStatus = null;
    
    /**
     * @var DateTime|null $licenseReleasedAt The date and time this invitation's paid license was released.
    */
    private ?DateTime $licenseReleasedAt = null;
    
    /**
     * @var DateTime|null $licenseRenewalDate The renewal date used for proration of this license.
    */
    private ?DateTime $licenseRenewalDate = null;
    
    /**
     * @var IdNamePair|null $organization Identifier and display name of the related organization.
    */
    private ?IdNamePair $organization = null;
    
    /**
     * @var DateTime|null $resentAt UTC timestamp for resent at on this organization invitation.
    */
    private ?DateTime $resentAt = null;
    
    /**
     * @var DateTime|null $revokedAt UTC timestamp for revoked at on this organization invitation.
    */
    private ?DateTime $revokedAt = null;
    
    /**
     * @var OrganizationMemberRole|null $role Role for this organization invitation.
    */
    private ?OrganizationMemberRole $role = null;
    
    /**
     * @var string|null $sendFailureReason The human-readable send failure reason explaining this organization invitation.
    */
    private ?string $sendFailureReason = null;
    
    /**
     * @var DateTime|null $sentAt UTC timestamp for sent at on this organization invitation.
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var OrganizationInvitationStatus|null $status The current status for this organization invitation.
    */
    private ?OrganizationInvitationStatus $status = null;
    
    /**
     * Instantiates a new OrganizationInvitationTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationInvitationTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationInvitationTableRow {
        return new OrganizationInvitationTableRow();
    }

    /**
     * Gets the acceptedAt property value. UTC timestamp for accepted at on this organization invitation.
     * @return DateTime|null
    */
    public function getAcceptedAt(): ?DateTime {
        return $this->acceptedAt;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. UTC timestamp for created at on this organization invitation.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the email property value. The email address associated with this organization invitation.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the expiresAt property value. UTC timestamp for expires at on this organization invitation.
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
            'acceptedAt' => fn(ParseNode $n) => $o->setAcceptedAt($n->getDateTimeValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'licenseActivatedAt' => fn(ParseNode $n) => $o->setLicenseActivatedAt($n->getDateTimeValue()),
            'licenseBillingStatus' => fn(ParseNode $n) => $o->setLicenseBillingStatus($n->getStringValue()),
            'licenseReleasedAt' => fn(ParseNode $n) => $o->setLicenseReleasedAt($n->getDateTimeValue()),
            'licenseRenewalDate' => fn(ParseNode $n) => $o->setLicenseRenewalDate($n->getDateTimeValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([IdNamePair::class, 'createFromDiscriminatorValue'])),
            'resentAt' => fn(ParseNode $n) => $o->setResentAt($n->getDateTimeValue()),
            'revokedAt' => fn(ParseNode $n) => $o->setRevokedAt($n->getDateTimeValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(OrganizationMemberRole::class)),
            'sendFailureReason' => fn(ParseNode $n) => $o->setSendFailureReason($n->getStringValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OrganizationInvitationStatus::class)),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this organization invitation.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the licenseActivatedAt property value. The date and time this invitation's paid license was created.
     * @return DateTime|null
    */
    public function getLicenseActivatedAt(): ?DateTime {
        return $this->licenseActivatedAt;
    }

    /**
     * Gets the licenseBillingStatus property value. The billing status for the paid license created by this invitation.
     * @return string|null
    */
    public function getLicenseBillingStatus(): ?string {
        return $this->licenseBillingStatus;
    }

    /**
     * Gets the licenseReleasedAt property value. The date and time this invitation's paid license was released.
     * @return DateTime|null
    */
    public function getLicenseReleasedAt(): ?DateTime {
        return $this->licenseReleasedAt;
    }

    /**
     * Gets the licenseRenewalDate property value. The renewal date used for proration of this license.
     * @return DateTime|null
    */
    public function getLicenseRenewalDate(): ?DateTime {
        return $this->licenseRenewalDate;
    }

    /**
     * Gets the organization property value. Identifier and display name of the related organization.
     * @return IdNamePair|null
    */
    public function getOrganization(): ?IdNamePair {
        return $this->organization;
    }

    /**
     * Gets the resentAt property value. UTC timestamp for resent at on this organization invitation.
     * @return DateTime|null
    */
    public function getResentAt(): ?DateTime {
        return $this->resentAt;
    }

    /**
     * Gets the revokedAt property value. UTC timestamp for revoked at on this organization invitation.
     * @return DateTime|null
    */
    public function getRevokedAt(): ?DateTime {
        return $this->revokedAt;
    }

    /**
     * Gets the role property value. Role for this organization invitation.
     * @return OrganizationMemberRole|null
    */
    public function getRole(): ?OrganizationMemberRole {
        return $this->role;
    }

    /**
     * Gets the sendFailureReason property value. The human-readable send failure reason explaining this organization invitation.
     * @return string|null
    */
    public function getSendFailureReason(): ?string {
        return $this->sendFailureReason;
    }

    /**
     * Gets the sentAt property value. UTC timestamp for sent at on this organization invitation.
     * @return DateTime|null
    */
    public function getSentAt(): ?DateTime {
        return $this->sentAt;
    }

    /**
     * Gets the status property value. The current status for this organization invitation.
     * @return OrganizationInvitationStatus|null
    */
    public function getStatus(): ?OrganizationInvitationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('acceptedAt', $this->getAcceptedAt());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('licenseActivatedAt', $this->getLicenseActivatedAt());
        $writer->writeStringValue('licenseBillingStatus', $this->getLicenseBillingStatus());
        $writer->writeDateTimeValue('licenseReleasedAt', $this->getLicenseReleasedAt());
        $writer->writeDateTimeValue('licenseRenewalDate', $this->getLicenseRenewalDate());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeDateTimeValue('resentAt', $this->getResentAt());
        $writer->writeDateTimeValue('revokedAt', $this->getRevokedAt());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeStringValue('sendFailureReason', $this->getSendFailureReason());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptedAt property value. UTC timestamp for accepted at on this organization invitation.
     * @param DateTime|null $value Value to set for the acceptedAt property.
    */
    public function setAcceptedAt(?DateTime $value): void {
        $this->acceptedAt = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp for created at on this organization invitation.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the email property value. The email address associated with this organization invitation.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the expiresAt property value. UTC timestamp for expires at on this organization invitation.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this organization invitation.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the licenseActivatedAt property value. The date and time this invitation's paid license was created.
     * @param DateTime|null $value Value to set for the licenseActivatedAt property.
    */
    public function setLicenseActivatedAt(?DateTime $value): void {
        $this->licenseActivatedAt = $value;
    }

    /**
     * Sets the licenseBillingStatus property value. The billing status for the paid license created by this invitation.
     * @param string|null $value Value to set for the licenseBillingStatus property.
    */
    public function setLicenseBillingStatus(?string $value): void {
        $this->licenseBillingStatus = $value;
    }

    /**
     * Sets the licenseReleasedAt property value. The date and time this invitation's paid license was released.
     * @param DateTime|null $value Value to set for the licenseReleasedAt property.
    */
    public function setLicenseReleasedAt(?DateTime $value): void {
        $this->licenseReleasedAt = $value;
    }

    /**
     * Sets the licenseRenewalDate property value. The renewal date used for proration of this license.
     * @param DateTime|null $value Value to set for the licenseRenewalDate property.
    */
    public function setLicenseRenewalDate(?DateTime $value): void {
        $this->licenseRenewalDate = $value;
    }

    /**
     * Sets the organization property value. Identifier and display name of the related organization.
     * @param IdNamePair|null $value Value to set for the organization property.
    */
    public function setOrganization(?IdNamePair $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the resentAt property value. UTC timestamp for resent at on this organization invitation.
     * @param DateTime|null $value Value to set for the resentAt property.
    */
    public function setResentAt(?DateTime $value): void {
        $this->resentAt = $value;
    }

    /**
     * Sets the revokedAt property value. UTC timestamp for revoked at on this organization invitation.
     * @param DateTime|null $value Value to set for the revokedAt property.
    */
    public function setRevokedAt(?DateTime $value): void {
        $this->revokedAt = $value;
    }

    /**
     * Sets the role property value. Role for this organization invitation.
     * @param OrganizationMemberRole|null $value Value to set for the role property.
    */
    public function setRole(?OrganizationMemberRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the sendFailureReason property value. The human-readable send failure reason explaining this organization invitation.
     * @param string|null $value Value to set for the sendFailureReason property.
    */
    public function setSendFailureReason(?string $value): void {
        $this->sendFailureReason = $value;
    }

    /**
     * Sets the sentAt property value. UTC timestamp for sent at on this organization invitation.
     * @param DateTime|null $value Value to set for the sentAt property.
    */
    public function setSentAt(?DateTime $value): void {
        $this->sentAt = $value;
    }

    /**
     * Sets the status property value. The current status for this organization invitation.
     * @param OrganizationInvitationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OrganizationInvitationStatus $value): void {
        $this->status = $value;
    }

}
