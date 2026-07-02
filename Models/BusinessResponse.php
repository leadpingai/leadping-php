<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API business profile response returned to authenticated clients.
*/
class BusinessResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var float|null $accountBalance Current wallet balance available to the business.
    */
    private ?float $accountBalance = null;
    
    /**
     * @var BusinessResponse_activation|null $activation Business activation state covering site, billing, compliance, and telephony readiness.
    */
    private ?BusinessResponse_activation $activation = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BusinessResponse_address|null $address Postal address for the business, lead, or contact represented by this business profile response.
    */
    private ?BusinessResponse_address $address = null;
    
    /**
     * @var BusinessResponse_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?BusinessResponse_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var bool|null $autoRefillEnabled Indicates whether automatic wallet refill is enabled for the business.
    */
    private ?bool $autoRefillEnabled = null;
    
    /**
     * @var BusinessResponse_billingAddress|null $billingAddress Postal address used for invoices, receipts, and payment processor billing records.
    */
    private ?BusinessResponse_billingAddress $billingAddress = null;
    
    /**
     * @var string|null $billingName Name used for invoices, receipts, and payment processor billing records.
    */
    private ?string $billingName = null;
    
    /**
     * @var BusinessResponse_billingPlan|null $billingPlan Defines the supported Billing Plan values.
    */
    private ?BusinessResponse_billingPlan $billingPlan = null;
    
    /**
     * @var BusinessResponse_compliancePolicy|null $compliancePolicy Compliance policy configuration for the business.
    */
    private ?BusinessResponse_compliancePolicy $compliancePolicy = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $description Human-readable description that explains this business profile response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $domain Domain name connected to the business website or activation workflow.
    */
    private ?string $domain = null;
    
    /**
     * @var string|null $ein Employer Identification Number used for business and 10DLC verification.
    */
    private ?string $ein = null;
    
    /**
     * @var BusinessResponse_einDocument|null $einDocument Uploaded EIN document reference used for business verification.
    */
    private ?BusinessResponse_einDocument $einDocument = null;
    
    /**
     * @var bool|null $enabled Indicates whether this business profile response is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or business represented by this business profile response.
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
     * @var BusinessResponse_setupStep|null $setupStep Defines the supported Business Setup Step values.
    */
    private ?BusinessResponse_setupStep $setupStep = null;
    
    /**
     * @var BusinessResponse_site|null $site Leadping website record connected to this business.
    */
    private ?BusinessResponse_site $site = null;
    
    /**
     * @var BusinessResponse_status|null $status Defines the supported Business Status values.
    */
    private ?BusinessResponse_status $status = null;
    
    /**
     * @var BusinessResponse_stripeInfo|null $stripeInfo Stripe customer and subscription state associated with this business or user.
    */
    private ?BusinessResponse_stripeInfo $stripeInfo = null;
    
    /**
     * @var BusinessResponse_subscriptionStatus|null $subscriptionStatus Defines the supported Subscription Status values.
    */
    private ?BusinessResponse_subscriptionStatus $subscriptionStatus = null;
    
    /**
     * @var BusinessResponse_user|null $user User summary connected to this business profile response.
    */
    private ?BusinessResponse_user $user = null;
    
    /**
     * @var string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
    */
    private ?string $vertical = null;
    
    /**
     * @var string|null $website Business website URL used for compliance, brand review, and lead attribution.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new BusinessResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessResponse {
        return new BusinessResponse();
    }

    /**
     * Gets the accountBalance property value. Current wallet balance available to the business.
     * @return float|null
    */
    public function getAccountBalance(): ?float {
        return $this->accountBalance;
    }

    /**
     * Gets the activation property value. Business activation state covering site, billing, compliance, and telephony readiness.
     * @return BusinessResponse_activation|null
    */
    public function getActivation(): ?BusinessResponse_activation {
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
     * Gets the address property value. Postal address for the business, lead, or contact represented by this business profile response.
     * @return BusinessResponse_address|null
    */
    public function getAddress(): ?BusinessResponse_address {
        return $this->address;
    }

    /**
     * Gets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @return BusinessResponse_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?BusinessResponse_adminEnablementOverride {
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
     * @return BusinessResponse_billingAddress|null
    */
    public function getBillingAddress(): ?BusinessResponse_billingAddress {
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
     * @return BusinessResponse_billingPlan|null
    */
    public function getBillingPlan(): ?BusinessResponse_billingPlan {
        return $this->billingPlan;
    }

    /**
     * Gets the compliancePolicy property value. Compliance policy configuration for the business.
     * @return BusinessResponse_compliancePolicy|null
    */
    public function getCompliancePolicy(): ?BusinessResponse_compliancePolicy {
        return $this->compliancePolicy;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the description property value. Human-readable description that explains this business profile response to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the domain property value. Domain name connected to the business website or activation workflow.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
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
     * @return BusinessResponse_einDocument|null
    */
    public function getEinDocument(): ?BusinessResponse_einDocument {
        return $this->einDocument;
    }

    /**
     * Gets the enabled property value. Indicates whether this business profile response is active and available in the Leadping API.
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
            'accountBalance' => fn(ParseNode $n) => $o->setAccountBalance($n->getFloatValue()),
            'activation' => fn(ParseNode $n) => $o->setActivation($n->getObjectValue([BusinessResponse_activation::class, 'createFromDiscriminatorValue'])),
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([BusinessResponse_address::class, 'createFromDiscriminatorValue'])),
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([BusinessResponse_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'autoRefillEnabled' => fn(ParseNode $n) => $o->setAutoRefillEnabled($n->getBooleanValue()),
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BusinessResponse_billingAddress::class, 'createFromDiscriminatorValue'])),
            'billingName' => fn(ParseNode $n) => $o->setBillingName($n->getStringValue()),
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(BusinessResponse_billingPlan::class)),
            'compliancePolicy' => fn(ParseNode $n) => $o->setCompliancePolicy($n->getObjectValue([BusinessResponse_compliancePolicy::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'einDocument' => fn(ParseNode $n) => $o->setEinDocument($n->getObjectValue([BusinessResponse_einDocument::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([IdNameValue::class, 'createFromDiscriminatorValue'])),
            'secondaryName' => fn(ParseNode $n) => $o->setSecondaryName($n->getStringValue()),
            'setupStep' => fn(ParseNode $n) => $o->setSetupStep($n->getEnumValue(BusinessResponse_setupStep::class)),
            'site' => fn(ParseNode $n) => $o->setSite($n->getObjectValue([BusinessResponse_site::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BusinessResponse_status::class)),
            'stripeInfo' => fn(ParseNode $n) => $o->setStripeInfo($n->getObjectValue([BusinessResponse_stripeInfo::class, 'createFromDiscriminatorValue'])),
            'subscriptionStatus' => fn(ParseNode $n) => $o->setSubscriptionStatus($n->getEnumValue(BusinessResponse_subscriptionStatus::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([BusinessResponse_user::class, 'createFromDiscriminatorValue'])),
            'vertical' => fn(ParseNode $n) => $o->setVertical($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
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
     * Gets the phone property value. Phone details for the lead, user, or business represented by this business profile response.
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
     * @return BusinessResponse_setupStep|null
    */
    public function getSetupStep(): ?BusinessResponse_setupStep {
        return $this->setupStep;
    }

    /**
     * Gets the site property value. Leadping website record connected to this business.
     * @return BusinessResponse_site|null
    */
    public function getSite(): ?BusinessResponse_site {
        return $this->site;
    }

    /**
     * Gets the status property value. Defines the supported Business Status values.
     * @return BusinessResponse_status|null
    */
    public function getStatus(): ?BusinessResponse_status {
        return $this->status;
    }

    /**
     * Gets the stripeInfo property value. Stripe customer and subscription state associated with this business or user.
     * @return BusinessResponse_stripeInfo|null
    */
    public function getStripeInfo(): ?BusinessResponse_stripeInfo {
        return $this->stripeInfo;
    }

    /**
     * Gets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @return BusinessResponse_subscriptionStatus|null
    */
    public function getSubscriptionStatus(): ?BusinessResponse_subscriptionStatus {
        return $this->subscriptionStatus;
    }

    /**
     * Gets the user property value. User summary connected to this business profile response.
     * @return BusinessResponse_user|null
    */
    public function getUser(): ?BusinessResponse_user {
        return $this->user;
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
        $writer->writeFloatValue('accountBalance', $this->getAccountBalance());
        $writer->writeObjectValue('activation', $this->getActivation());
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeBooleanValue('autoRefillEnabled', $this->getAutoRefillEnabled());
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('billingName', $this->getBillingName());
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
        $writer->writeObjectValue('compliancePolicy', $this->getCompliancePolicy());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeStringValue('ein', $this->getEin());
        $writer->writeObjectValue('einDocument', $this->getEinDocument());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeStringValue('secondaryName', $this->getSecondaryName());
        $writer->writeEnumValue('setupStep', $this->getSetupStep());
        $writer->writeObjectValue('site', $this->getSite());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('stripeInfo', $this->getStripeInfo());
        $writer->writeEnumValue('subscriptionStatus', $this->getSubscriptionStatus());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('vertical', $this->getVertical());
        $writer->writeStringValue('website', $this->getWebsite());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountBalance property value. Current wallet balance available to the business.
     * @param float|null $value Value to set for the accountBalance property.
    */
    public function setAccountBalance(?float $value): void {
        $this->accountBalance = $value;
    }

    /**
     * Sets the activation property value. Business activation state covering site, billing, compliance, and telephony readiness.
     * @param BusinessResponse_activation|null $value Value to set for the activation property.
    */
    public function setActivation(?BusinessResponse_activation $value): void {
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
     * Sets the address property value. Postal address for the business, lead, or contact represented by this business profile response.
     * @param BusinessResponse_address|null $value Value to set for the address property.
    */
    public function setAddress(?BusinessResponse_address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @param BusinessResponse_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?BusinessResponse_adminEnablementOverride $value): void {
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
     * @param BusinessResponse_billingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?BusinessResponse_billingAddress $value): void {
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
     * @param BusinessResponse_billingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?BusinessResponse_billingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the compliancePolicy property value. Compliance policy configuration for the business.
     * @param BusinessResponse_compliancePolicy|null $value Value to set for the compliancePolicy property.
    */
    public function setCompliancePolicy(?BusinessResponse_compliancePolicy $value): void {
        $this->compliancePolicy = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this business profile response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the domain property value. Domain name connected to the business website or activation workflow.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
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
     * @param BusinessResponse_einDocument|null $value Value to set for the einDocument property.
    */
    public function setEinDocument(?BusinessResponse_einDocument $value): void {
        $this->einDocument = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this business profile response is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
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
     * Sets the phone property value. Phone details for the lead, user, or business represented by this business profile response.
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
     * @param BusinessResponse_setupStep|null $value Value to set for the setupStep property.
    */
    public function setSetupStep(?BusinessResponse_setupStep $value): void {
        $this->setupStep = $value;
    }

    /**
     * Sets the site property value. Leadping website record connected to this business.
     * @param BusinessResponse_site|null $value Value to set for the site property.
    */
    public function setSite(?BusinessResponse_site $value): void {
        $this->site = $value;
    }

    /**
     * Sets the status property value. Defines the supported Business Status values.
     * @param BusinessResponse_status|null $value Value to set for the status property.
    */
    public function setStatus(?BusinessResponse_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the stripeInfo property value. Stripe customer and subscription state associated with this business or user.
     * @param BusinessResponse_stripeInfo|null $value Value to set for the stripeInfo property.
    */
    public function setStripeInfo(?BusinessResponse_stripeInfo $value): void {
        $this->stripeInfo = $value;
    }

    /**
     * Sets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @param BusinessResponse_subscriptionStatus|null $value Value to set for the subscriptionStatus property.
    */
    public function setSubscriptionStatus(?BusinessResponse_subscriptionStatus $value): void {
        $this->subscriptionStatus = $value;
    }

    /**
     * Sets the user property value. User summary connected to this business profile response.
     * @param BusinessResponse_user|null $value Value to set for the user property.
    */
    public function setUser(?BusinessResponse_user $value): void {
        $this->user = $value;
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
