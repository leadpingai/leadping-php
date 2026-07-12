<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing business switch option data used by Leadping API contracts.
*/
class BusinessSwitchOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var BusinessSwitchOption_activationStatus|null $activationStatus Defines the supported Customer Activation Status values.
    */
    private ?BusinessSwitchOption_activationStatus $activationStatus = null;
    
    /**
     * @var string|null $activationSummary The activation summary value for this business switch option.
    */
    private ?string $activationSummary = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BusinessSwitchOption_businessStatus|null $businessStatus Defines the supported Business Status values.
    */
    private ?BusinessSwitchOption_businessStatus $businessStatus = null;
    
    /**
     * @var bool|null $hasPaymentMethod Whether the business has a default billing payment method.
    */
    private ?bool $hasPaymentMethod = null;
    
    /**
     * @var string|null $id The unique ID for this business switch option.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isCurrent Whether this business switch option is current.
    */
    private ?bool $isCurrent = null;
    
    /**
     * @var DateTime|null $lastUsedAt The date and time for the last used at value on this business switch option.
    */
    private ?DateTime $lastUsedAt = null;
    
    /**
     * @var string|null $name The human-readable name shown for this business switch option.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $needsAdminReview Whether needs admin review applies to this business switch option.
    */
    private ?bool $needsAdminReview = null;
    
    /**
     * @var bool|null $readyForCustomerTraffic Whether ready for customer traffic applies to this business switch option.
    */
    private ?bool $readyForCustomerTraffic = null;
    
    /**
     * @var BusinessUserRole|null $role The role value for this business switch option.
    */
    private ?BusinessUserRole $role = null;
    
    /**
     * Instantiates a new BusinessSwitchOption and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessSwitchOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessSwitchOption {
        return new BusinessSwitchOption();
    }

    /**
     * Gets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @return BusinessSwitchOption_activationStatus|null
    */
    public function getActivationStatus(): ?BusinessSwitchOption_activationStatus {
        return $this->activationStatus;
    }

    /**
     * Gets the activationSummary property value. The activation summary value for this business switch option.
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
     * Gets the businessStatus property value. Defines the supported Business Status values.
     * @return BusinessSwitchOption_businessStatus|null
    */
    public function getBusinessStatus(): ?BusinessSwitchOption_businessStatus {
        return $this->businessStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activationStatus' => fn(ParseNode $n) => $o->setActivationStatus($n->getEnumValue(BusinessSwitchOption_activationStatus::class)),
            'activationSummary' => fn(ParseNode $n) => $o->setActivationSummary($n->getStringValue()),
            'businessStatus' => fn(ParseNode $n) => $o->setBusinessStatus($n->getEnumValue(BusinessSwitchOption_businessStatus::class)),
            'hasPaymentMethod' => fn(ParseNode $n) => $o->setHasPaymentMethod($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isCurrent' => fn(ParseNode $n) => $o->setIsCurrent($n->getBooleanValue()),
            'lastUsedAt' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'needsAdminReview' => fn(ParseNode $n) => $o->setNeedsAdminReview($n->getBooleanValue()),
            'readyForCustomerTraffic' => fn(ParseNode $n) => $o->setReadyForCustomerTraffic($n->getBooleanValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BusinessUserRole::class)),
        ];
    }

    /**
     * Gets the hasPaymentMethod property value. Whether the business has a default billing payment method.
     * @return bool|null
    */
    public function getHasPaymentMethod(): ?bool {
        return $this->hasPaymentMethod;
    }

    /**
     * Gets the id property value. The unique ID for this business switch option.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isCurrent property value. Whether this business switch option is current.
     * @return bool|null
    */
    public function getIsCurrent(): ?bool {
        return $this->isCurrent;
    }

    /**
     * Gets the lastUsedAt property value. The date and time for the last used at value on this business switch option.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->lastUsedAt;
    }

    /**
     * Gets the name property value. The human-readable name shown for this business switch option.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the needsAdminReview property value. Whether needs admin review applies to this business switch option.
     * @return bool|null
    */
    public function getNeedsAdminReview(): ?bool {
        return $this->needsAdminReview;
    }

    /**
     * Gets the readyForCustomerTraffic property value. Whether ready for customer traffic applies to this business switch option.
     * @return bool|null
    */
    public function getReadyForCustomerTraffic(): ?bool {
        return $this->readyForCustomerTraffic;
    }

    /**
     * Gets the role property value. The role value for this business switch option.
     * @return BusinessUserRole|null
    */
    public function getRole(): ?BusinessUserRole {
        return $this->role;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activationStatus', $this->getActivationStatus());
        $writer->writeStringValue('activationSummary', $this->getActivationSummary());
        $writer->writeEnumValue('businessStatus', $this->getBusinessStatus());
        $writer->writeBooleanValue('hasPaymentMethod', $this->getHasPaymentMethod());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isCurrent', $this->getIsCurrent());
        $writer->writeDateTimeValue('lastUsedAt', $this->getLastUsedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('needsAdminReview', $this->getNeedsAdminReview());
        $writer->writeBooleanValue('readyForCustomerTraffic', $this->getReadyForCustomerTraffic());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @param BusinessSwitchOption_activationStatus|null $value Value to set for the activationStatus property.
    */
    public function setActivationStatus(?BusinessSwitchOption_activationStatus $value): void {
        $this->activationStatus = $value;
    }

    /**
     * Sets the activationSummary property value. The activation summary value for this business switch option.
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
     * Sets the businessStatus property value. Defines the supported Business Status values.
     * @param BusinessSwitchOption_businessStatus|null $value Value to set for the businessStatus property.
    */
    public function setBusinessStatus(?BusinessSwitchOption_businessStatus $value): void {
        $this->businessStatus = $value;
    }

    /**
     * Sets the hasPaymentMethod property value. Whether the business has a default billing payment method.
     * @param bool|null $value Value to set for the hasPaymentMethod property.
    */
    public function setHasPaymentMethod(?bool $value): void {
        $this->hasPaymentMethod = $value;
    }

    /**
     * Sets the id property value. The unique ID for this business switch option.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isCurrent property value. Whether this business switch option is current.
     * @param bool|null $value Value to set for the isCurrent property.
    */
    public function setIsCurrent(?bool $value): void {
        $this->isCurrent = $value;
    }

    /**
     * Sets the lastUsedAt property value. The date and time for the last used at value on this business switch option.
     * @param DateTime|null $value Value to set for the lastUsedAt property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->lastUsedAt = $value;
    }

    /**
     * Sets the name property value. The human-readable name shown for this business switch option.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the needsAdminReview property value. Whether needs admin review applies to this business switch option.
     * @param bool|null $value Value to set for the needsAdminReview property.
    */
    public function setNeedsAdminReview(?bool $value): void {
        $this->needsAdminReview = $value;
    }

    /**
     * Sets the readyForCustomerTraffic property value. Whether ready for customer traffic applies to this business switch option.
     * @param bool|null $value Value to set for the readyForCustomerTraffic property.
    */
    public function setReadyForCustomerTraffic(?bool $value): void {
        $this->readyForCustomerTraffic = $value;
    }

    /**
     * Sets the role property value. The role value for this business switch option.
     * @param BusinessUserRole|null $value Value to set for the role property.
    */
    public function setRole(?BusinessUserRole $value): void {
        $this->role = $value;
    }

}
