<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing business data used by Leadping API contracts.
*/
class BusinessTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var BusinessTableRow_activationStatus|null $activationStatus Defines the supported Customer Activation Status values.
    */
    private ?BusinessTableRow_activationStatus $activationStatus = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $apiKeyExpiresAt The date and time this business API key expires, or null when it has no expiration.
    */
    private ?DateTime $apiKeyExpiresAt = null;
    
    /**
     * @var DateTime|null $apiKeyFirstUsedAt The date and time this business API key was first used.
    */
    private ?DateTime $apiKeyFirstUsedAt = null;
    
    /**
     * @var DateTime|null $apiKeyIssuedAt The date and time this business API key was issued.
    */
    private ?DateTime $apiKeyIssuedAt = null;
    
    /**
     * @var DateTime|null $apiKeyLastUsedAt The date and time this business API key was last used.
    */
    private ?DateTime $apiKeyLastUsedAt = null;
    
    /**
     * @var string|null $apiKeyPreview The masked API key preview owned by this business.
    */
    private ?string $apiKeyPreview = null;
    
    /**
     * @var int|null $apiKeyTotalUses The total number of tracked uses for this business API key.
    */
    private ?int $apiKeyTotalUses = null;
    
    /**
     * @var BusinessTableRow_billingPlan|null $billingPlan Defines the supported Billing Plan values.
    */
    private ?BusinessTableRow_billingPlan $billingPlan = null;
    
    /**
     * @var BusinessTableRow_business|null $business The ID and name for this business.
    */
    private ?BusinessTableRow_business $business = null;
    
    /**
     * @var bool|null $enabled Whether this business is enabled.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique ID for this business.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $industry The industry value for this business.
    */
    private ?string $industry = null;
    
    /**
     * @var DateTime|null $lastSubscriptionEventAt Date and time when this Leadping business table row was last subscription event.
    */
    private ?DateTime $lastSubscriptionEventAt = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time for the modified at value on this business.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The human-readable name shown for this business.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $needsAdminReview Whether needs admin review applies to this business.
    */
    private ?bool $needsAdminReview = null;
    
    /**
     * @var DateTime|null $paymentFailedAt Date and time when this Leadping business table row was payment failed.
    */
    private ?DateTime $paymentFailedAt = null;
    
    /**
     * @var string|null $phone The phone number associated with this business.
    */
    private ?string $phone = null;
    
    /**
     * @var BusinessTableRow_setupStep|null $setupStep Defines the supported Business Setup Step values.
    */
    private ?BusinessTableRow_setupStep $setupStep = null;
    
    /**
     * @var BusinessTableRow_status|null $status Defines the supported Business Status values.
    */
    private ?BusinessTableRow_status $status = null;
    
    /**
     * @var DateTime|null $subscriptionCancelAt Date and time when this Leadping business table row was subscription cancel.
    */
    private ?DateTime $subscriptionCancelAt = null;
    
    /**
     * @var BusinessTableRow_subscriptionStatus|null $subscriptionStatus Defines the supported Subscription Status values.
    */
    private ?BusinessTableRow_subscriptionStatus $subscriptionStatus = null;
    
    /**
     * @var BusinessTableRow_tenDlcStatus|null $tenDlcStatus Defines the supported 10DLC Application Status values.
    */
    private ?BusinessTableRow_tenDlcStatus $tenDlcStatus = null;
    
    /**
     * @var int|null $userCount The user count for this business.
    */
    private ?int $userCount = null;
    
    /**
     * @var string|null $website The website URL associated with this business.
    */
    private ?string $website = null;
    
    /**
     * @var BusinessTableRow_websiteStatus|null $websiteStatus Defines the supported Website Lifecycle Status values.
    */
    private ?BusinessTableRow_websiteStatus $websiteStatus = null;
    
    /**
     * Instantiates a new BusinessTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessTableRow {
        return new BusinessTableRow();
    }

    /**
     * Gets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @return BusinessTableRow_activationStatus|null
    */
    public function getActivationStatus(): ?BusinessTableRow_activationStatus {
        return $this->activationStatus;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the apiKeyExpiresAt property value. The date and time this business API key expires, or null when it has no expiration.
     * @return DateTime|null
    */
    public function getApiKeyExpiresAt(): ?DateTime {
        return $this->apiKeyExpiresAt;
    }

    /**
     * Gets the apiKeyFirstUsedAt property value. The date and time this business API key was first used.
     * @return DateTime|null
    */
    public function getApiKeyFirstUsedAt(): ?DateTime {
        return $this->apiKeyFirstUsedAt;
    }

    /**
     * Gets the apiKeyIssuedAt property value. The date and time this business API key was issued.
     * @return DateTime|null
    */
    public function getApiKeyIssuedAt(): ?DateTime {
        return $this->apiKeyIssuedAt;
    }

    /**
     * Gets the apiKeyLastUsedAt property value. The date and time this business API key was last used.
     * @return DateTime|null
    */
    public function getApiKeyLastUsedAt(): ?DateTime {
        return $this->apiKeyLastUsedAt;
    }

    /**
     * Gets the apiKeyPreview property value. The masked API key preview owned by this business.
     * @return string|null
    */
    public function getApiKeyPreview(): ?string {
        return $this->apiKeyPreview;
    }

    /**
     * Gets the apiKeyTotalUses property value. The total number of tracked uses for this business API key.
     * @return int|null
    */
    public function getApiKeyTotalUses(): ?int {
        return $this->apiKeyTotalUses;
    }

    /**
     * Gets the billingPlan property value. Defines the supported Billing Plan values.
     * @return BusinessTableRow_billingPlan|null
    */
    public function getBillingPlan(): ?BusinessTableRow_billingPlan {
        return $this->billingPlan;
    }

    /**
     * Gets the business property value. The ID and name for this business.
     * @return BusinessTableRow_business|null
    */
    public function getBusiness(): ?BusinessTableRow_business {
        return $this->business;
    }

    /**
     * Gets the enabled property value. Whether this business is enabled.
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
            'activationStatus' => fn(ParseNode $n) => $o->setActivationStatus($n->getEnumValue(BusinessTableRow_activationStatus::class)),
            'apiKeyExpiresAt' => fn(ParseNode $n) => $o->setApiKeyExpiresAt($n->getDateTimeValue()),
            'apiKeyFirstUsedAt' => fn(ParseNode $n) => $o->setApiKeyFirstUsedAt($n->getDateTimeValue()),
            'apiKeyIssuedAt' => fn(ParseNode $n) => $o->setApiKeyIssuedAt($n->getDateTimeValue()),
            'apiKeyLastUsedAt' => fn(ParseNode $n) => $o->setApiKeyLastUsedAt($n->getDateTimeValue()),
            'apiKeyPreview' => fn(ParseNode $n) => $o->setApiKeyPreview($n->getStringValue()),
            'apiKeyTotalUses' => fn(ParseNode $n) => $o->setApiKeyTotalUses($n->getIntegerValue()),
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(BusinessTableRow_billingPlan::class)),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([BusinessTableRow_business::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'lastSubscriptionEventAt' => fn(ParseNode $n) => $o->setLastSubscriptionEventAt($n->getDateTimeValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'needsAdminReview' => fn(ParseNode $n) => $o->setNeedsAdminReview($n->getBooleanValue()),
            'paymentFailedAt' => fn(ParseNode $n) => $o->setPaymentFailedAt($n->getDateTimeValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'setupStep' => fn(ParseNode $n) => $o->setSetupStep($n->getEnumValue(BusinessTableRow_setupStep::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BusinessTableRow_status::class)),
            'subscriptionCancelAt' => fn(ParseNode $n) => $o->setSubscriptionCancelAt($n->getDateTimeValue()),
            'subscriptionStatus' => fn(ParseNode $n) => $o->setSubscriptionStatus($n->getEnumValue(BusinessTableRow_subscriptionStatus::class)),
            'tenDlcStatus' => fn(ParseNode $n) => $o->setTenDlcStatus($n->getEnumValue(BusinessTableRow_tenDlcStatus::class)),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
            'websiteStatus' => fn(ParseNode $n) => $o->setWebsiteStatus($n->getEnumValue(BusinessTableRow_websiteStatus::class)),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this business.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the industry property value. The industry value for this business.
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the lastSubscriptionEventAt property value. Date and time when this Leadping business table row was last subscription event.
     * @return DateTime|null
    */
    public function getLastSubscriptionEventAt(): ?DateTime {
        return $this->lastSubscriptionEventAt;
    }

    /**
     * Gets the modifiedAt property value. The date and time for the modified at value on this business.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. The human-readable name shown for this business.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the needsAdminReview property value. Whether needs admin review applies to this business.
     * @return bool|null
    */
    public function getNeedsAdminReview(): ?bool {
        return $this->needsAdminReview;
    }

    /**
     * Gets the paymentFailedAt property value. Date and time when this Leadping business table row was payment failed.
     * @return DateTime|null
    */
    public function getPaymentFailedAt(): ?DateTime {
        return $this->paymentFailedAt;
    }

    /**
     * Gets the phone property value. The phone number associated with this business.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the setupStep property value. Defines the supported Business Setup Step values.
     * @return BusinessTableRow_setupStep|null
    */
    public function getSetupStep(): ?BusinessTableRow_setupStep {
        return $this->setupStep;
    }

    /**
     * Gets the status property value. Defines the supported Business Status values.
     * @return BusinessTableRow_status|null
    */
    public function getStatus(): ?BusinessTableRow_status {
        return $this->status;
    }

    /**
     * Gets the subscriptionCancelAt property value. Date and time when this Leadping business table row was subscription cancel.
     * @return DateTime|null
    */
    public function getSubscriptionCancelAt(): ?DateTime {
        return $this->subscriptionCancelAt;
    }

    /**
     * Gets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @return BusinessTableRow_subscriptionStatus|null
    */
    public function getSubscriptionStatus(): ?BusinessTableRow_subscriptionStatus {
        return $this->subscriptionStatus;
    }

    /**
     * Gets the tenDlcStatus property value. Defines the supported 10DLC Application Status values.
     * @return BusinessTableRow_tenDlcStatus|null
    */
    public function getTenDlcStatus(): ?BusinessTableRow_tenDlcStatus {
        return $this->tenDlcStatus;
    }

    /**
     * Gets the userCount property value. The user count for this business.
     * @return int|null
    */
    public function getUserCount(): ?int {
        return $this->userCount;
    }

    /**
     * Gets the website property value. The website URL associated with this business.
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Gets the websiteStatus property value. Defines the supported Website Lifecycle Status values.
     * @return BusinessTableRow_websiteStatus|null
    */
    public function getWebsiteStatus(): ?BusinessTableRow_websiteStatus {
        return $this->websiteStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activationStatus', $this->getActivationStatus());
        $writer->writeDateTimeValue('apiKeyExpiresAt', $this->getApiKeyExpiresAt());
        $writer->writeDateTimeValue('apiKeyFirstUsedAt', $this->getApiKeyFirstUsedAt());
        $writer->writeDateTimeValue('apiKeyIssuedAt', $this->getApiKeyIssuedAt());
        $writer->writeDateTimeValue('apiKeyLastUsedAt', $this->getApiKeyLastUsedAt());
        $writer->writeStringValue('apiKeyPreview', $this->getApiKeyPreview());
        $writer->writeIntegerValue('apiKeyTotalUses', $this->getApiKeyTotalUses());
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeDateTimeValue('lastSubscriptionEventAt', $this->getLastSubscriptionEventAt());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('needsAdminReview', $this->getNeedsAdminReview());
        $writer->writeDateTimeValue('paymentFailedAt', $this->getPaymentFailedAt());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeEnumValue('setupStep', $this->getSetupStep());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('subscriptionCancelAt', $this->getSubscriptionCancelAt());
        $writer->writeEnumValue('subscriptionStatus', $this->getSubscriptionStatus());
        $writer->writeEnumValue('tenDlcStatus', $this->getTenDlcStatus());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
        $writer->writeStringValue('website', $this->getWebsite());
        $writer->writeEnumValue('websiteStatus', $this->getWebsiteStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activationStatus property value. Defines the supported Customer Activation Status values.
     * @param BusinessTableRow_activationStatus|null $value Value to set for the activationStatus property.
    */
    public function setActivationStatus(?BusinessTableRow_activationStatus $value): void {
        $this->activationStatus = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the apiKeyExpiresAt property value. The date and time this business API key expires, or null when it has no expiration.
     * @param DateTime|null $value Value to set for the apiKeyExpiresAt property.
    */
    public function setApiKeyExpiresAt(?DateTime $value): void {
        $this->apiKeyExpiresAt = $value;
    }

    /**
     * Sets the apiKeyFirstUsedAt property value. The date and time this business API key was first used.
     * @param DateTime|null $value Value to set for the apiKeyFirstUsedAt property.
    */
    public function setApiKeyFirstUsedAt(?DateTime $value): void {
        $this->apiKeyFirstUsedAt = $value;
    }

    /**
     * Sets the apiKeyIssuedAt property value. The date and time this business API key was issued.
     * @param DateTime|null $value Value to set for the apiKeyIssuedAt property.
    */
    public function setApiKeyIssuedAt(?DateTime $value): void {
        $this->apiKeyIssuedAt = $value;
    }

    /**
     * Sets the apiKeyLastUsedAt property value. The date and time this business API key was last used.
     * @param DateTime|null $value Value to set for the apiKeyLastUsedAt property.
    */
    public function setApiKeyLastUsedAt(?DateTime $value): void {
        $this->apiKeyLastUsedAt = $value;
    }

    /**
     * Sets the apiKeyPreview property value. The masked API key preview owned by this business.
     * @param string|null $value Value to set for the apiKeyPreview property.
    */
    public function setApiKeyPreview(?string $value): void {
        $this->apiKeyPreview = $value;
    }

    /**
     * Sets the apiKeyTotalUses property value. The total number of tracked uses for this business API key.
     * @param int|null $value Value to set for the apiKeyTotalUses property.
    */
    public function setApiKeyTotalUses(?int $value): void {
        $this->apiKeyTotalUses = $value;
    }

    /**
     * Sets the billingPlan property value. Defines the supported Billing Plan values.
     * @param BusinessTableRow_billingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?BusinessTableRow_billingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the business property value. The ID and name for this business.
     * @param BusinessTableRow_business|null $value Value to set for the business property.
    */
    public function setBusiness(?BusinessTableRow_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the enabled property value. Whether this business is enabled.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique ID for this business.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the industry property value. The industry value for this business.
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->industry = $value;
    }

    /**
     * Sets the lastSubscriptionEventAt property value. Date and time when this Leadping business table row was last subscription event.
     * @param DateTime|null $value Value to set for the lastSubscriptionEventAt property.
    */
    public function setLastSubscriptionEventAt(?DateTime $value): void {
        $this->lastSubscriptionEventAt = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time for the modified at value on this business.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. The human-readable name shown for this business.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the needsAdminReview property value. Whether needs admin review applies to this business.
     * @param bool|null $value Value to set for the needsAdminReview property.
    */
    public function setNeedsAdminReview(?bool $value): void {
        $this->needsAdminReview = $value;
    }

    /**
     * Sets the paymentFailedAt property value. Date and time when this Leadping business table row was payment failed.
     * @param DateTime|null $value Value to set for the paymentFailedAt property.
    */
    public function setPaymentFailedAt(?DateTime $value): void {
        $this->paymentFailedAt = $value;
    }

    /**
     * Sets the phone property value. The phone number associated with this business.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the setupStep property value. Defines the supported Business Setup Step values.
     * @param BusinessTableRow_setupStep|null $value Value to set for the setupStep property.
    */
    public function setSetupStep(?BusinessTableRow_setupStep $value): void {
        $this->setupStep = $value;
    }

    /**
     * Sets the status property value. Defines the supported Business Status values.
     * @param BusinessTableRow_status|null $value Value to set for the status property.
    */
    public function setStatus(?BusinessTableRow_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriptionCancelAt property value. Date and time when this Leadping business table row was subscription cancel.
     * @param DateTime|null $value Value to set for the subscriptionCancelAt property.
    */
    public function setSubscriptionCancelAt(?DateTime $value): void {
        $this->subscriptionCancelAt = $value;
    }

    /**
     * Sets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @param BusinessTableRow_subscriptionStatus|null $value Value to set for the subscriptionStatus property.
    */
    public function setSubscriptionStatus(?BusinessTableRow_subscriptionStatus $value): void {
        $this->subscriptionStatus = $value;
    }

    /**
     * Sets the tenDlcStatus property value. Defines the supported 10DLC Application Status values.
     * @param BusinessTableRow_tenDlcStatus|null $value Value to set for the tenDlcStatus property.
    */
    public function setTenDlcStatus(?BusinessTableRow_tenDlcStatus $value): void {
        $this->tenDlcStatus = $value;
    }

    /**
     * Sets the userCount property value. The user count for this business.
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->userCount = $value;
    }

    /**
     * Sets the website property value. The website URL associated with this business.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

    /**
     * Sets the websiteStatus property value. Defines the supported Website Lifecycle Status values.
     * @param BusinessTableRow_websiteStatus|null $value Value to set for the websiteStatus property.
    */
    public function setWebsiteStatus(?BusinessTableRow_websiteStatus $value): void {
        $this->websiteStatus = $value;
    }

}
