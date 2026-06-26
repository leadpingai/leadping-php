<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing business invitation data returned to callers.
*/
class BusinessInvitationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DateTime|null $acceptedAt The date and time for the accepted at value on this business invitation.
    */
    private ?DateTime $acceptedAt = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $businessId The business ID associated with this business invitation.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $businessName The business name value for this business invitation.
    */
    private ?string $businessName = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this business invitation.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $email The email address associated with this business invitation.
    */
    private ?string $email = null;
    
    /**
     * @var DateTime|null $expiresAt The date and time for the expires at value on this business invitation.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var string|null $id The unique ID for this business invitation.
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
     * @var DateTime|null $resentAt The date and time for the resent at value on this business invitation.
    */
    private ?DateTime $resentAt = null;
    
    /**
     * @var DateTime|null $revokedAt The date and time for the revoked at value on this business invitation.
    */
    private ?DateTime $revokedAt = null;
    
    /**
     * @var BusinessUserRole|null $role The role value for this business invitation.
    */
    private ?BusinessUserRole $role = null;
    
    /**
     * @var string|null $safeMessage The safe message value for this business invitation.
    */
    private ?string $safeMessage = null;
    
    /**
     * @var string|null $sendFailureReason The human-readable send failure reason explaining this business invitation.
    */
    private ?string $sendFailureReason = null;
    
    /**
     * @var DateTime|null $sentAt The date and time for the sent at value on this business invitation.
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var BusinessInvitationStatus|null $status The current status for this business invitation.
    */
    private ?BusinessInvitationStatus $status = null;
    
    /**
     * Instantiates a new BusinessInvitationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessInvitationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessInvitationResponse {
        return new BusinessInvitationResponse();
    }

    /**
     * Gets the acceptedAt property value. The date and time for the accepted at value on this business invitation.
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
     * Gets the businessId property value. The business ID associated with this business invitation.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the businessName property value. The business name value for this business invitation.
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this business invitation.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the email property value. The email address associated with this business invitation.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the expiresAt property value. The date and time for the expires at value on this business invitation.
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
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'licenseActivatedAt' => fn(ParseNode $n) => $o->setLicenseActivatedAt($n->getDateTimeValue()),
            'licenseBillingStatus' => fn(ParseNode $n) => $o->setLicenseBillingStatus($n->getStringValue()),
            'licenseReleasedAt' => fn(ParseNode $n) => $o->setLicenseReleasedAt($n->getDateTimeValue()),
            'licenseRenewalDate' => fn(ParseNode $n) => $o->setLicenseRenewalDate($n->getDateTimeValue()),
            'resentAt' => fn(ParseNode $n) => $o->setResentAt($n->getDateTimeValue()),
            'revokedAt' => fn(ParseNode $n) => $o->setRevokedAt($n->getDateTimeValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BusinessUserRole::class)),
            'safeMessage' => fn(ParseNode $n) => $o->setSafeMessage($n->getStringValue()),
            'sendFailureReason' => fn(ParseNode $n) => $o->setSendFailureReason($n->getStringValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BusinessInvitationStatus::class)),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this business invitation.
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
     * Gets the resentAt property value. The date and time for the resent at value on this business invitation.
     * @return DateTime|null
    */
    public function getResentAt(): ?DateTime {
        return $this->resentAt;
    }

    /**
     * Gets the revokedAt property value. The date and time for the revoked at value on this business invitation.
     * @return DateTime|null
    */
    public function getRevokedAt(): ?DateTime {
        return $this->revokedAt;
    }

    /**
     * Gets the role property value. The role value for this business invitation.
     * @return BusinessUserRole|null
    */
    public function getRole(): ?BusinessUserRole {
        return $this->role;
    }

    /**
     * Gets the safeMessage property value. The safe message value for this business invitation.
     * @return string|null
    */
    public function getSafeMessage(): ?string {
        return $this->safeMessage;
    }

    /**
     * Gets the sendFailureReason property value. The human-readable send failure reason explaining this business invitation.
     * @return string|null
    */
    public function getSendFailureReason(): ?string {
        return $this->sendFailureReason;
    }

    /**
     * Gets the sentAt property value. The date and time for the sent at value on this business invitation.
     * @return DateTime|null
    */
    public function getSentAt(): ?DateTime {
        return $this->sentAt;
    }

    /**
     * Gets the status property value. The current status for this business invitation.
     * @return BusinessInvitationStatus|null
    */
    public function getStatus(): ?BusinessInvitationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('acceptedAt', $this->getAcceptedAt());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('licenseActivatedAt', $this->getLicenseActivatedAt());
        $writer->writeStringValue('licenseBillingStatus', $this->getLicenseBillingStatus());
        $writer->writeDateTimeValue('licenseReleasedAt', $this->getLicenseReleasedAt());
        $writer->writeDateTimeValue('licenseRenewalDate', $this->getLicenseRenewalDate());
        $writer->writeDateTimeValue('resentAt', $this->getResentAt());
        $writer->writeDateTimeValue('revokedAt', $this->getRevokedAt());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeStringValue('safeMessage', $this->getSafeMessage());
        $writer->writeStringValue('sendFailureReason', $this->getSendFailureReason());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptedAt property value. The date and time for the accepted at value on this business invitation.
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
     * Sets the businessId property value. The business ID associated with this business invitation.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the businessName property value. The business name value for this business invitation.
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the createdAt property value. The date and time for the created at value on this business invitation.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the email property value. The email address associated with this business invitation.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the expiresAt property value. The date and time for the expires at value on this business invitation.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the id property value. The unique ID for this business invitation.
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
     * Sets the resentAt property value. The date and time for the resent at value on this business invitation.
     * @param DateTime|null $value Value to set for the resentAt property.
    */
    public function setResentAt(?DateTime $value): void {
        $this->resentAt = $value;
    }

    /**
     * Sets the revokedAt property value. The date and time for the revoked at value on this business invitation.
     * @param DateTime|null $value Value to set for the revokedAt property.
    */
    public function setRevokedAt(?DateTime $value): void {
        $this->revokedAt = $value;
    }

    /**
     * Sets the role property value. The role value for this business invitation.
     * @param BusinessUserRole|null $value Value to set for the role property.
    */
    public function setRole(?BusinessUserRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the safeMessage property value. The safe message value for this business invitation.
     * @param string|null $value Value to set for the safeMessage property.
    */
    public function setSafeMessage(?string $value): void {
        $this->safeMessage = $value;
    }

    /**
     * Sets the sendFailureReason property value. The human-readable send failure reason explaining this business invitation.
     * @param string|null $value Value to set for the sendFailureReason property.
    */
    public function setSendFailureReason(?string $value): void {
        $this->sendFailureReason = $value;
    }

    /**
     * Sets the sentAt property value. The date and time for the sent at value on this business invitation.
     * @param DateTime|null $value Value to set for the sentAt property.
    */
    public function setSentAt(?DateTime $value): void {
        $this->sentAt = $value;
    }

    /**
     * Sets the status property value. The current status for this business invitation.
     * @param BusinessInvitationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BusinessInvitationStatus $value): void {
        $this->status = $value;
    }

}
