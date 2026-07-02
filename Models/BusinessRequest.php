<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API business profile request, including the fields clients can send.
*/
class BusinessRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var BusinessRequest_activation|null $activation Business activation state covering site, billing, compliance, and telephony readiness.
    */
    private ?BusinessRequest_activation $activation = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BusinessRequest_address|null $address Postal address for the business, lead, or contact represented by this business profile request.
    */
    private ?BusinessRequest_address $address = null;
    
    /**
     * @var BusinessRequest_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?BusinessRequest_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var bool|null $autoRefillEnabled Indicates whether automatic wallet refill is enabled for the business.
    */
    private ?bool $autoRefillEnabled = null;
    
    /**
     * @var BusinessRequest_billingAddress|null $billingAddress Postal address used for invoices, receipts, and payment processor billing records.
    */
    private ?BusinessRequest_billingAddress $billingAddress = null;
    
    /**
     * @var string|null $billingName Name used for invoices, receipts, and payment processor billing records.
    */
    private ?string $billingName = null;
    
    /**
     * @var BusinessRequest_billingPlan|null $billingPlan Defines the supported Billing Plan values.
    */
    private ?BusinessRequest_billingPlan $billingPlan = null;
    
    /**
     * @var BusinessRequest_compliancePolicy|null $compliancePolicy Compliance policy configuration for the business.
    */
    private ?BusinessRequest_compliancePolicy $compliancePolicy = null;
    
    /**
     * @var string|null $description Human-readable description that explains this business profile request to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $ein Employer Identification Number used for business and 10DLC verification.
    */
    private ?string $ein = null;
    
    /**
     * @var BusinessRequest_einDocument|null $einDocument Uploaded EIN document reference used for business verification.
    */
    private ?BusinessRequest_einDocument $einDocument = null;
    
    /**
     * @var bool|null $enabled Indicates whether this business profile request is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity, when updating an existing entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isYoungerThan90 Indicates whether the business serves customers younger than 90, for compliance and underwriting context.
    */
    private ?bool $isYoungerThan90 = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or business represented by this business profile request.
    */
    private ?string $phone = null;
    
    /**
     * @var array<IdNameValue>|null $phones Phone numbers assigned to this business.
    */
    private ?array $phones = null;
    
    /**
     * @var string|null $secondaryName Alternate business name or DBA shown in Leadping.
    */
    private ?string $secondaryName = null;
    
    /**
     * @var BusinessRequest_setupStep|null $setupStep Defines the supported Business Setup Step values.
    */
    private ?BusinessRequest_setupStep $setupStep = null;
    
    /**
     * @var BusinessRequest_status|null $status Defines the supported Business Status values.
    */
    private ?BusinessRequest_status $status = null;
    
    /**
     * @var BusinessRequest_stripeInfo|null $stripeInfo Stripe customer and subscription state associated with this business or user.
    */
    private ?BusinessRequest_stripeInfo $stripeInfo = null;
    
    /**
     * @var BusinessRequest_subscriptionStatus|null $subscriptionStatus Defines the supported Subscription Status values.
    */
    private ?BusinessRequest_subscriptionStatus $subscriptionStatus = null;
    
    /**
     * @var string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
    */
    private ?string $vertical = null;
    
    /**
     * @var string|null $website Business website URL used for compliance, brand review, and lead attribution.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new BusinessRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessRequest {
        return new BusinessRequest();
    }

    /**
     * Gets the activation property value. Business activation state covering site, billing, compliance, and telephony readiness.
     * @return BusinessRequest_activation|null
    */
    public function getActivation(): ?BusinessRequest_activation {
        return $this->activation;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. Postal address for the business, lead, or contact represented by this business profile request.
     * @return BusinessRequest_address|null
    */
    public function getAddress(): ?BusinessRequest_address {
        return $this->address;
    }

    /**
     * Gets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @return BusinessRequest_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?BusinessRequest_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the autoRefillEnabled property value. Indicates whether automatic wallet refill is enabled for the business.
     * @return bool|null
    */
    public function getAutoRefillEnabled(): ?bool {
        return $this->autoRefillEnabled;
    }

    /**
     * Gets the billingAddress property value. Postal address used for invoices, receipts, and payment processor billing records.
     * @return BusinessRequest_billingAddress|null
    */
    public function getBillingAddress(): ?BusinessRequest_billingAddress {
        return $this->billingAddress;
    }

    /**
     * Gets the billingName property value. Name used for invoices, receipts, and payment processor billing records.
     * @return string|null
    */
    public function getBillingName(): ?string {
        return $this->billingName;
    }

    /**
     * Gets the billingPlan property value. Defines the supported Billing Plan values.
     * @return BusinessRequest_billingPlan|null
    */
    public function getBillingPlan(): ?BusinessRequest_billingPlan {
        return $this->billingPlan;
    }

    /**
     * Gets the compliancePolicy property value. Compliance policy configuration for the business.
     * @return BusinessRequest_compliancePolicy|null
    */
    public function getCompliancePolicy(): ?BusinessRequest_compliancePolicy {
        return $this->compliancePolicy;
    }

    /**
     * Gets the description property value. Human-readable description that explains this business profile request to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the ein property value. Employer Identification Number used for business and 10DLC verification.
     * @return string|null
    */
    public function getEin(): ?string {
        return $this->ein;
    }

    /**
     * Gets the einDocument property value. Uploaded EIN document reference used for business verification.
     * @return BusinessRequest_einDocument|null
    */
    public function getEinDocument(): ?BusinessRequest_einDocument {
        return $this->einDocument;
    }

    /**
     * Gets the enabled property value. Indicates whether this business profile request is active and available in the Leadping API.
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
            'activation' => fn(ParseNode $n) => $o->setActivation($n->getObjectValue([BusinessRequest_activation::class, 'createFromDiscriminatorValue'])),
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([BusinessRequest_address::class, 'createFromDiscriminatorValue'])),
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([BusinessRequest_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'autoRefillEnabled' => fn(ParseNode $n) => $o->setAutoRefillEnabled($n->getBooleanValue()),
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BusinessRequest_billingAddress::class, 'createFromDiscriminatorValue'])),
            'billingName' => fn(ParseNode $n) => $o->setBillingName($n->getStringValue()),
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(BusinessRequest_billingPlan::class)),
            'compliancePolicy' => fn(ParseNode $n) => $o->setCompliancePolicy($n->getObjectValue([BusinessRequest_compliancePolicy::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'einDocument' => fn(ParseNode $n) => $o->setEinDocument($n->getObjectValue([BusinessRequest_einDocument::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isYoungerThan90' => fn(ParseNode $n) => $o->setIsYoungerThan90($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([IdNameValue::class, 'createFromDiscriminatorValue'])),
            'secondaryName' => fn(ParseNode $n) => $o->setSecondaryName($n->getStringValue()),
            'setupStep' => fn(ParseNode $n) => $o->setSetupStep($n->getEnumValue(BusinessRequest_setupStep::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BusinessRequest_status::class)),
            'stripeInfo' => fn(ParseNode $n) => $o->setStripeInfo($n->getObjectValue([BusinessRequest_stripeInfo::class, 'createFromDiscriminatorValue'])),
            'subscriptionStatus' => fn(ParseNode $n) => $o->setSubscriptionStatus($n->getEnumValue(BusinessRequest_subscriptionStatus::class)),
            'vertical' => fn(ParseNode $n) => $o->setVertical($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isYoungerThan90 property value. Indicates whether the business serves customers younger than 90, for compliance and underwriting context.
     * @return bool|null
    */
    public function getIsYoungerThan90(): ?bool {
        return $this->isYoungerThan90;
    }

    /**
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the phone property value. Phone details for the lead, user, or business represented by this business profile request.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the phones property value. Phone numbers assigned to this business.
     * @return array<IdNameValue>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the secondaryName property value. Alternate business name or DBA shown in Leadping.
     * @return string|null
    */
    public function getSecondaryName(): ?string {
        return $this->secondaryName;
    }

    /**
     * Gets the setupStep property value. Defines the supported Business Setup Step values.
     * @return BusinessRequest_setupStep|null
    */
    public function getSetupStep(): ?BusinessRequest_setupStep {
        return $this->setupStep;
    }

    /**
     * Gets the status property value. Defines the supported Business Status values.
     * @return BusinessRequest_status|null
    */
    public function getStatus(): ?BusinessRequest_status {
        return $this->status;
    }

    /**
     * Gets the stripeInfo property value. Stripe customer and subscription state associated with this business or user.
     * @return BusinessRequest_stripeInfo|null
    */
    public function getStripeInfo(): ?BusinessRequest_stripeInfo {
        return $this->stripeInfo;
    }

    /**
     * Gets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @return BusinessRequest_subscriptionStatus|null
    */
    public function getSubscriptionStatus(): ?BusinessRequest_subscriptionStatus {
        return $this->subscriptionStatus;
    }

    /**
     * Gets the vertical property value. Industry vertical used for lead routing, compliance review, and reporting.
     * @return string|null
    */
    public function getVertical(): ?string {
        return $this->vertical;
    }

    /**
     * Gets the website property value. Business website URL used for compliance, brand review, and lead attribution.
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('activation', $this->getActivation());
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeBooleanValue('autoRefillEnabled', $this->getAutoRefillEnabled());
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('billingName', $this->getBillingName());
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
        $writer->writeObjectValue('compliancePolicy', $this->getCompliancePolicy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('ein', $this->getEin());
        $writer->writeObjectValue('einDocument', $this->getEinDocument());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isYoungerThan90', $this->getIsYoungerThan90());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeStringValue('secondaryName', $this->getSecondaryName());
        $writer->writeEnumValue('setupStep', $this->getSetupStep());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('stripeInfo', $this->getStripeInfo());
        $writer->writeEnumValue('subscriptionStatus', $this->getSubscriptionStatus());
        $writer->writeStringValue('vertical', $this->getVertical());
        $writer->writeStringValue('website', $this->getWebsite());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activation property value. Business activation state covering site, billing, compliance, and telephony readiness.
     * @param BusinessRequest_activation|null $value Value to set for the activation property.
    */
    public function setActivation(?BusinessRequest_activation $value): void {
        $this->activation = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the address property value. Postal address for the business, lead, or contact represented by this business profile request.
     * @param BusinessRequest_address|null $value Value to set for the address property.
    */
    public function setAddress(?BusinessRequest_address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @param BusinessRequest_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?BusinessRequest_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the autoRefillEnabled property value. Indicates whether automatic wallet refill is enabled for the business.
     * @param bool|null $value Value to set for the autoRefillEnabled property.
    */
    public function setAutoRefillEnabled(?bool $value): void {
        $this->autoRefillEnabled = $value;
    }

    /**
     * Sets the billingAddress property value. Postal address used for invoices, receipts, and payment processor billing records.
     * @param BusinessRequest_billingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?BusinessRequest_billingAddress $value): void {
        $this->billingAddress = $value;
    }

    /**
     * Sets the billingName property value. Name used for invoices, receipts, and payment processor billing records.
     * @param string|null $value Value to set for the billingName property.
    */
    public function setBillingName(?string $value): void {
        $this->billingName = $value;
    }

    /**
     * Sets the billingPlan property value. Defines the supported Billing Plan values.
     * @param BusinessRequest_billingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?BusinessRequest_billingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the compliancePolicy property value. Compliance policy configuration for the business.
     * @param BusinessRequest_compliancePolicy|null $value Value to set for the compliancePolicy property.
    */
    public function setCompliancePolicy(?BusinessRequest_compliancePolicy $value): void {
        $this->compliancePolicy = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this business profile request to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the ein property value. Employer Identification Number used for business and 10DLC verification.
     * @param string|null $value Value to set for the ein property.
    */
    public function setEin(?string $value): void {
        $this->ein = $value;
    }

    /**
     * Sets the einDocument property value. Uploaded EIN document reference used for business verification.
     * @param BusinessRequest_einDocument|null $value Value to set for the einDocument property.
    */
    public function setEinDocument(?BusinessRequest_einDocument $value): void {
        $this->einDocument = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this business profile request is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isYoungerThan90 property value. Indicates whether the business serves customers younger than 90, for compliance and underwriting context.
     * @param bool|null $value Value to set for the isYoungerThan90 property.
    */
    public function setIsYoungerThan90(?bool $value): void {
        $this->isYoungerThan90 = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the phone property value. Phone details for the lead, user, or business represented by this business profile request.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the phones property value. Phone numbers assigned to this business.
     * @param array<IdNameValue>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->phones = $value;
    }

    /**
     * Sets the secondaryName property value. Alternate business name or DBA shown in Leadping.
     * @param string|null $value Value to set for the secondaryName property.
    */
    public function setSecondaryName(?string $value): void {
        $this->secondaryName = $value;
    }

    /**
     * Sets the setupStep property value. Defines the supported Business Setup Step values.
     * @param BusinessRequest_setupStep|null $value Value to set for the setupStep property.
    */
    public function setSetupStep(?BusinessRequest_setupStep $value): void {
        $this->setupStep = $value;
    }

    /**
     * Sets the status property value. Defines the supported Business Status values.
     * @param BusinessRequest_status|null $value Value to set for the status property.
    */
    public function setStatus(?BusinessRequest_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the stripeInfo property value. Stripe customer and subscription state associated with this business or user.
     * @param BusinessRequest_stripeInfo|null $value Value to set for the stripeInfo property.
    */
    public function setStripeInfo(?BusinessRequest_stripeInfo $value): void {
        $this->stripeInfo = $value;
    }

    /**
     * Sets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @param BusinessRequest_subscriptionStatus|null $value Value to set for the subscriptionStatus property.
    */
    public function setSubscriptionStatus(?BusinessRequest_subscriptionStatus $value): void {
        $this->subscriptionStatus = $value;
    }

    /**
     * Sets the vertical property value. Industry vertical used for lead routing, compliance review, and reporting.
     * @param string|null $value Value to set for the vertical property.
    */
    public function setVertical(?string $value): void {
        $this->vertical = $value;
    }

    /**
     * Sets the website property value. Business website URL used for compliance, brand review, and lead attribution.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

}
