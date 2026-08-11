<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes organization switch option data used in Leadping API requests and responses.
*/
class OrganizationSwitchOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var OrganizationSwitchOption_activationStatus|null $activationStatus Defines the supported Customer Activation Status values.
    */
    private ?OrganizationSwitchOption_activationStatus $activationStatus = null;
    
    /**
     * @var string|null $activationSummary Activation summary for this organization switch option.
    */
    private ?string $activationSummary = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $hasPaymentMethod Whether the organization has a default billing payment method.
    */
    private ?bool $hasPaymentMethod = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this organization switch option.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isCurrent Whether this organization switch option is current.
    */
    private ?bool $isCurrent = null;
    
    /**
     * @var DateTime|null $lastUsedAt UTC timestamp for last used at on this organization switch option.
    */
    private ?DateTime $lastUsedAt = null;
    
    /**
     * @var string|null $name The human-readable name shown for this organization switch option.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $needsAdminReview Whether needs admin review applies to this organization switch option.
    */
    private ?bool $needsAdminReview = null;
    
    /**
     * @var OrganizationSwitchOption_organizationStatus|null $organizationStatus Defines the supported Organization Status values.
    */
    private ?OrganizationSwitchOption_organizationStatus $organizationStatus = null;
    
    /**
     * @var bool|null $readyForCustomerTraffic Whether ready for customer traffic applies to this organization switch option.
    */
    private ?bool $readyForCustomerTraffic = null;
    
    /**
     * @var OrganizationMemberRole|null $role Role for this organization switch option.
    */
    private ?OrganizationMemberRole $role = null;
    
    /**
     * @var OrganizationSwitchOption_tenDlcStatus|null $tenDlcStatus Defines the supported 10DLC Application Status values.
    */
    private ?OrganizationSwitchOption_tenDlcStatus $tenDlcStatus = null;
    
    /**
     * Instantiates a new OrganizationSwitchOption and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationSwitchOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationSwitchOption {
        return new OrganizationSwitchOption();
    }

    /**
     * Gets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @return OrganizationSwitchOption_activationStatus|null
    */
    public function getActivationStatus(): ?OrganizationSwitchOption_activationStatus {
        return $this->activationStatus;
    }

    /**
     * Gets the activationSummary property value. Activation summary for this organization switch option.
     * @return string|null
    */
    public function getActivationSummary(): ?string {
        return $this->activationSummary;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activationStatus' => fn(ParseNode $n) => $o->setActivationStatus($n->getEnumValue(OrganizationSwitchOption_activationStatus::class)),
            'activationSummary' => fn(ParseNode $n) => $o->setActivationSummary($n->getStringValue()),
            'hasPaymentMethod' => fn(ParseNode $n) => $o->setHasPaymentMethod($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isCurrent' => fn(ParseNode $n) => $o->setIsCurrent($n->getBooleanValue()),
            'lastUsedAt' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'needsAdminReview' => fn(ParseNode $n) => $o->setNeedsAdminReview($n->getBooleanValue()),
            'organizationStatus' => fn(ParseNode $n) => $o->setOrganizationStatus($n->getEnumValue(OrganizationSwitchOption_organizationStatus::class)),
            'readyForCustomerTraffic' => fn(ParseNode $n) => $o->setReadyForCustomerTraffic($n->getBooleanValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(OrganizationMemberRole::class)),
            'tenDlcStatus' => fn(ParseNode $n) => $o->setTenDlcStatus($n->getEnumValue(OrganizationSwitchOption_tenDlcStatus::class)),
        ];
    }

    /**
     * Gets the hasPaymentMethod property value. Whether the organization has a default billing payment method.
     * @return bool|null
    */
    public function getHasPaymentMethod(): ?bool {
        return $this->hasPaymentMethod;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this organization switch option.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isCurrent property value. Whether this organization switch option is current.
     * @return bool|null
    */
    public function getIsCurrent(): ?bool {
        return $this->isCurrent;
    }

    /**
     * Gets the lastUsedAt property value. UTC timestamp for last used at on this organization switch option.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->lastUsedAt;
    }

    /**
     * Gets the name property value. The human-readable name shown for this organization switch option.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the needsAdminReview property value. Whether needs admin review applies to this organization switch option.
     * @return bool|null
    */
    public function getNeedsAdminReview(): ?bool {
        return $this->needsAdminReview;
    }

    /**
     * Gets the organizationStatus property value. Defines the supported Organization Status values.
     * @return OrganizationSwitchOption_organizationStatus|null
    */
    public function getOrganizationStatus(): ?OrganizationSwitchOption_organizationStatus {
        return $this->organizationStatus;
    }

    /**
     * Gets the readyForCustomerTraffic property value. Whether ready for customer traffic applies to this organization switch option.
     * @return bool|null
    */
    public function getReadyForCustomerTraffic(): ?bool {
        return $this->readyForCustomerTraffic;
    }

    /**
     * Gets the role property value. Role for this organization switch option.
     * @return OrganizationMemberRole|null
    */
    public function getRole(): ?OrganizationMemberRole {
        return $this->role;
    }

    /**
     * Gets the tenDlcStatus property value. Defines the supported 10DLC Application Status values.
     * @return OrganizationSwitchOption_tenDlcStatus|null
    */
    public function getTenDlcStatus(): ?OrganizationSwitchOption_tenDlcStatus {
        return $this->tenDlcStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activationStatus', $this->getActivationStatus());
        $writer->writeStringValue('activationSummary', $this->getActivationSummary());
        $writer->writeBooleanValue('hasPaymentMethod', $this->getHasPaymentMethod());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isCurrent', $this->getIsCurrent());
        $writer->writeDateTimeValue('lastUsedAt', $this->getLastUsedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('needsAdminReview', $this->getNeedsAdminReview());
        $writer->writeEnumValue('organizationStatus', $this->getOrganizationStatus());
        $writer->writeBooleanValue('readyForCustomerTraffic', $this->getReadyForCustomerTraffic());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('tenDlcStatus', $this->getTenDlcStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @param OrganizationSwitchOption_activationStatus|null $value Value to set for the activationStatus property.
    */
    public function setActivationStatus(?OrganizationSwitchOption_activationStatus $value): void {
        $this->activationStatus = $value;
    }

    /**
     * Sets the activationSummary property value. Activation summary for this organization switch option.
     * @param string|null $value Value to set for the activationSummary property.
    */
    public function setActivationSummary(?string $value): void {
        $this->activationSummary = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the hasPaymentMethod property value. Whether the organization has a default billing payment method.
     * @param bool|null $value Value to set for the hasPaymentMethod property.
    */
    public function setHasPaymentMethod(?bool $value): void {
        $this->hasPaymentMethod = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this organization switch option.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isCurrent property value. Whether this organization switch option is current.
     * @param bool|null $value Value to set for the isCurrent property.
    */
    public function setIsCurrent(?bool $value): void {
        $this->isCurrent = $value;
    }

    /**
     * Sets the lastUsedAt property value. UTC timestamp for last used at on this organization switch option.
     * @param DateTime|null $value Value to set for the lastUsedAt property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->lastUsedAt = $value;
    }

    /**
     * Sets the name property value. The human-readable name shown for this organization switch option.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the needsAdminReview property value. Whether needs admin review applies to this organization switch option.
     * @param bool|null $value Value to set for the needsAdminReview property.
    */
    public function setNeedsAdminReview(?bool $value): void {
        $this->needsAdminReview = $value;
    }

    /**
     * Sets the organizationStatus property value. Defines the supported Organization Status values.
     * @param OrganizationSwitchOption_organizationStatus|null $value Value to set for the organizationStatus property.
    */
    public function setOrganizationStatus(?OrganizationSwitchOption_organizationStatus $value): void {
        $this->organizationStatus = $value;
    }

    /**
     * Sets the readyForCustomerTraffic property value. Whether ready for customer traffic applies to this organization switch option.
     * @param bool|null $value Value to set for the readyForCustomerTraffic property.
    */
    public function setReadyForCustomerTraffic(?bool $value): void {
        $this->readyForCustomerTraffic = $value;
    }

    /**
     * Sets the role property value. Role for this organization switch option.
     * @param OrganizationMemberRole|null $value Value to set for the role property.
    */
    public function setRole(?OrganizationMemberRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the tenDlcStatus property value. Defines the supported 10DLC Application Status values.
     * @param OrganizationSwitchOption_tenDlcStatus|null $value Value to set for the tenDlcStatus property.
    */
    public function setTenDlcStatus(?OrganizationSwitchOption_tenDlcStatus $value): void {
        $this->tenDlcStatus = $value;
    }

}
