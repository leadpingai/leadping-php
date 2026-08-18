<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes organization profile data returned by Leadping.
*/
class OrganizationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var float|null $accountBalance Current wallet balance available to the organization.
    */
    private ?float $accountBalance = null;
    
    /**
     * @var OrganizationResponse_activation|null $activation Organization activation state covering site, billing, compliance, and telephony readiness.
    */
    private ?OrganizationResponse_activation $activation = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var OrganizationResponse_address|null $address Postal address for the organization, lead, or contact represented by this organization profile response.
    */
    private ?OrganizationResponse_address $address = null;
    
    /**
     * @var float|null $autoRefillAmount Wallet refill amount charged when automatic refill is triggered.
    */
    private ?float $autoRefillAmount = null;
    
    /**
     * @var bool|null $autoRefillEnabled Indicates whether automatic wallet refill is enabled for the organization.
    */
    private ?bool $autoRefillEnabled = null;
    
    /**
     * @var float|null $autoRefillTrigger Wallet balance threshold that triggers automatic refill.
    */
    private ?float $autoRefillTrigger = null;
    
    /**
     * @var OrganizationResponse_billingAddress|null $billingAddress Postal address used for invoices, receipts, and payment processor billing records.
    */
    private ?OrganizationResponse_billingAddress $billingAddress = null;
    
    /**
     * @var string|null $billingName Name used for invoices, receipts, and payment processor billing records.
    */
    private ?string $billingName = null;
    
    /**
     * @var OrganizationResponse_billingPlan|null $billingPlan Defines the supported Billing Plan values.
    */
    private ?OrganizationResponse_billingPlan $billingPlan = null;
    
    /**
     * @var OrganizationResponse_billingState|null $billingState Customer-safe billing state for this organization.
    */
    private ?OrganizationResponse_billingState $billingState = null;
    
    /**
     * @var string|null $billingTaxId Tax identifier printed on billing documents. This may differ from the organization verification EIN.
    */
    private ?string $billingTaxId = null;
    
    /**
     * @var OrganizationResponse_compliancePolicy|null $compliancePolicy Compliance policy configuration for the organization.
    */
    private ?OrganizationResponse_compliancePolicy $compliancePolicy = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $description Human-readable description that explains this organization profile response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $domain Domain name connected to the organization website or activation workflow.
    */
    private ?string $domain = null;
    
    /**
     * @var string|null $ein Employer Identification Number used for organization and 10DLC verification.
    */
    private ?string $ein = null;
    
    /**
     * @var OrganizationResponse_einDocument|null $einDocument Uploaded EIN document reference used for organization verification.
    */
    private ?OrganizationResponse_einDocument $einDocument = null;
    
    /**
     * @var bool|null $enabled Indicates whether this organization profile response is active and available in the Leadping API.
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
     * @var string|null $phone Phone details for the lead, user, or organization represented by this organization profile response.
    */
    private ?string $phone = null;
    
    /**
     * @var array<IdNameValue>|null $phones Phone numbers assigned to this organization.
    */
    private ?array $phones = null;
    
    /**
     * @var string|null $secondaryName Alternate organization name or DBA shown in Leadping.
    */
    private ?string $secondaryName = null;
    
    /**
     * @var OrganizationResponse_setupStatus|null $setupStatus Defines the supported User Setup Status values.
    */
    private ?OrganizationResponse_setupStatus $setupStatus = null;
    
    /**
     * @var OrganizationResponse_setupStep|null $setupStep Defines the supported Organization Setup Step values.
    */
    private ?OrganizationResponse_setupStep $setupStep = null;
    
    /**
     * @var OrganizationResponse_site|null $site Leadping website record connected to this organization.
    */
    private ?OrganizationResponse_site $site = null;
    
    /**
     * @var OrganizationResponse_status|null $status Defines the supported Organization Status values.
    */
    private ?OrganizationResponse_status $status = null;
    
    /**
     * @var OrganizationResponse_subscriptionStatus|null $subscriptionStatus Defines the supported Subscription Status values.
    */
    private ?OrganizationResponse_subscriptionStatus $subscriptionStatus = null;
    
    /**
     * @var OrganizationResponse_user|null $user User summary connected to this organization profile response.
    */
    private ?OrganizationResponse_user $user = null;
    
    /**
     * @var string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
    */
    private ?string $vertical = null;
    
    /**
     * @var string|null $website Organization website URL used for compliance, brand review, and lead attribution.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new OrganizationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationResponse {
        return new OrganizationResponse();
    }

    /**
     * Gets the accountBalance property value. Current wallet balance available to the organization.
     * @return float|null
    */
    public function getAccountBalance(): ?float {
        return $this->accountBalance;
    }

    /**
     * Gets the activation property value. Organization activation state covering site, billing, compliance, and telephony readiness.
     * @return OrganizationResponse_activation|null
    */
    public function getActivation(): ?OrganizationResponse_activation {
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
     * Gets the address property value. Postal address for the organization, lead, or contact represented by this organization profile response.
     * @return OrganizationResponse_address|null
    */
    public function getAddress(): ?OrganizationResponse_address {
        return $this->address;
    }

    /**
     * Gets the autoRefillAmount property value. Wallet refill amount charged when automatic refill is triggered.
     * @return float|null
    */
    public function getAutoRefillAmount(): ?float {
        return $this->autoRefillAmount;
    }

    /**
     * Gets the autoRefillEnabled property value. Indicates whether automatic wallet refill is enabled for the organization.
     * @return bool|null
    */
    public function getAutoRefillEnabled(): ?bool {
        return $this->autoRefillEnabled;
    }

    /**
     * Gets the autoRefillTrigger property value. Wallet balance threshold that triggers automatic refill.
     * @return float|null
    */
    public function getAutoRefillTrigger(): ?float {
        return $this->autoRefillTrigger;
    }

    /**
     * Gets the billingAddress property value. Postal address used for invoices, receipts, and payment processor billing records.
     * @return OrganizationResponse_billingAddress|null
    */
    public function getBillingAddress(): ?OrganizationResponse_billingAddress {
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
     * @return OrganizationResponse_billingPlan|null
    */
    public function getBillingPlan(): ?OrganizationResponse_billingPlan {
        return $this->billingPlan;
    }

    /**
     * Gets the billingState property value. Customer-safe billing state for this organization.
     * @return OrganizationResponse_billingState|null
    */
    public function getBillingState(): ?OrganizationResponse_billingState {
        return $this->billingState;
    }

    /**
     * Gets the billingTaxId property value. Tax identifier printed on billing documents. This may differ from the organization verification EIN.
     * @return string|null
    */
    public function getBillingTaxId(): ?string {
        return $this->billingTaxId;
    }

    /**
     * Gets the compliancePolicy property value. Compliance policy configuration for the organization.
     * @return OrganizationResponse_compliancePolicy|null
    */
    public function getCompliancePolicy(): ?OrganizationResponse_compliancePolicy {
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
     * Gets the description property value. Human-readable description that explains this organization profile response to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the domain property value. Domain name connected to the organization website or activation workflow.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the ein property value. Employer Identification Number used for organization and 10DLC verification.
     * @return string|null
    */
    public function getEin(): ?string {
        return $this->ein;
    }

    /**
     * Gets the einDocument property value. Uploaded EIN document reference used for organization verification.
     * @return OrganizationResponse_einDocument|null
    */
    public function getEinDocument(): ?OrganizationResponse_einDocument {
        return $this->einDocument;
    }

    /**
     * Gets the enabled property value. Indicates whether this organization profile response is active and available in the Leadping API.
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
            'activation' => fn(ParseNode $n) => $o->setActivation($n->getObjectValue([OrganizationResponse_activation::class, 'createFromDiscriminatorValue'])),
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([OrganizationResponse_address::class, 'createFromDiscriminatorValue'])),
            'autoRefillAmount' => fn(ParseNode $n) => $o->setAutoRefillAmount($n->getFloatValue()),
            'autoRefillEnabled' => fn(ParseNode $n) => $o->setAutoRefillEnabled($n->getBooleanValue()),
            'autoRefillTrigger' => fn(ParseNode $n) => $o->setAutoRefillTrigger($n->getFloatValue()),
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([OrganizationResponse_billingAddress::class, 'createFromDiscriminatorValue'])),
            'billingName' => fn(ParseNode $n) => $o->setBillingName($n->getStringValue()),
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(OrganizationResponse_billingPlan::class)),
            'billingState' => fn(ParseNode $n) => $o->setBillingState($n->getObjectValue([OrganizationResponse_billingState::class, 'createFromDiscriminatorValue'])),
            'billingTaxId' => fn(ParseNode $n) => $o->setBillingTaxId($n->getStringValue()),
            'compliancePolicy' => fn(ParseNode $n) => $o->setCompliancePolicy($n->getObjectValue([OrganizationResponse_compliancePolicy::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'einDocument' => fn(ParseNode $n) => $o->setEinDocument($n->getObjectValue([OrganizationResponse_einDocument::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([IdNameValue::class, 'createFromDiscriminatorValue'])),
            'secondaryName' => fn(ParseNode $n) => $o->setSecondaryName($n->getStringValue()),
            'setupStatus' => fn(ParseNode $n) => $o->setSetupStatus($n->getEnumValue(OrganizationResponse_setupStatus::class)),
            'setupStep' => fn(ParseNode $n) => $o->setSetupStep($n->getEnumValue(OrganizationResponse_setupStep::class)),
            'site' => fn(ParseNode $n) => $o->setSite($n->getObjectValue([OrganizationResponse_site::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OrganizationResponse_status::class)),
            'subscriptionStatus' => fn(ParseNode $n) => $o->setSubscriptionStatus($n->getEnumValue(OrganizationResponse_subscriptionStatus::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([OrganizationResponse_user::class, 'createFromDiscriminatorValue'])),
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
     * Gets the phone property value. Phone details for the lead, user, or organization represented by this organization profile response.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the phones property value. Phone numbers assigned to this organization.
     * @return array<IdNameValue>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the secondaryName property value. Alternate organization name or DBA shown in Leadping.
     * @return string|null
    */
    public function getSecondaryName(): ?string {
        return $this->secondaryName;
    }

    /**
     * Gets the setupStatus property value. Defines the supported User Setup Status values.
     * @return OrganizationResponse_setupStatus|null
    */
    public function getSetupStatus(): ?OrganizationResponse_setupStatus {
        return $this->setupStatus;
    }

    /**
     * Gets the setupStep property value. Defines the supported Organization Setup Step values.
     * @return OrganizationResponse_setupStep|null
    */
    public function getSetupStep(): ?OrganizationResponse_setupStep {
        return $this->setupStep;
    }

    /**
     * Gets the site property value. Leadping website record connected to this organization.
     * @return OrganizationResponse_site|null
    */
    public function getSite(): ?OrganizationResponse_site {
        return $this->site;
    }

    /**
     * Gets the status property value. Defines the supported Organization Status values.
     * @return OrganizationResponse_status|null
    */
    public function getStatus(): ?OrganizationResponse_status {
        return $this->status;
    }

    /**
     * Gets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @return OrganizationResponse_subscriptionStatus|null
    */
    public function getSubscriptionStatus(): ?OrganizationResponse_subscriptionStatus {
        return $this->subscriptionStatus;
    }

    /**
     * Gets the user property value. User summary connected to this organization profile response.
     * @return OrganizationResponse_user|null
    */
    public function getUser(): ?OrganizationResponse_user {
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
     * Gets the website property value. Organization website URL used for compliance, brand review, and lead attribution.
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
        $writer->writeFloatValue('autoRefillAmount', $this->getAutoRefillAmount());
        $writer->writeBooleanValue('autoRefillEnabled', $this->getAutoRefillEnabled());
        $writer->writeFloatValue('autoRefillTrigger', $this->getAutoRefillTrigger());
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('billingName', $this->getBillingName());
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
        $writer->writeObjectValue('billingState', $this->getBillingState());
        $writer->writeStringValue('billingTaxId', $this->getBillingTaxId());
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
        $writer->writeEnumValue('setupStatus', $this->getSetupStatus());
        $writer->writeEnumValue('setupStep', $this->getSetupStep());
        $writer->writeObjectValue('site', $this->getSite());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('subscriptionStatus', $this->getSubscriptionStatus());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('vertical', $this->getVertical());
        $writer->writeStringValue('website', $this->getWebsite());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountBalance property value. Current wallet balance available to the organization.
     * @param float|null $value Value to set for the accountBalance property.
    */
    public function setAccountBalance(?float $value): void {
        $this->accountBalance = $value;
    }

    /**
     * Sets the activation property value. Organization activation state covering site, billing, compliance, and telephony readiness.
     * @param OrganizationResponse_activation|null $value Value to set for the activation property.
    */
    public function setActivation(?OrganizationResponse_activation $value): void {
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
     * Sets the address property value. Postal address for the organization, lead, or contact represented by this organization profile response.
     * @param OrganizationResponse_address|null $value Value to set for the address property.
    */
    public function setAddress(?OrganizationResponse_address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the autoRefillAmount property value. Wallet refill amount charged when automatic refill is triggered.
     * @param float|null $value Value to set for the autoRefillAmount property.
    */
    public function setAutoRefillAmount(?float $value): void {
        $this->autoRefillAmount = $value;
    }

    /**
     * Sets the autoRefillEnabled property value. Indicates whether automatic wallet refill is enabled for the organization.
     * @param bool|null $value Value to set for the autoRefillEnabled property.
    */
    public function setAutoRefillEnabled(?bool $value): void {
        $this->autoRefillEnabled = $value;
    }

    /**
     * Sets the autoRefillTrigger property value. Wallet balance threshold that triggers automatic refill.
     * @param float|null $value Value to set for the autoRefillTrigger property.
    */
    public function setAutoRefillTrigger(?float $value): void {
        $this->autoRefillTrigger = $value;
    }

    /**
     * Sets the billingAddress property value. Postal address used for invoices, receipts, and payment processor billing records.
     * @param OrganizationResponse_billingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?OrganizationResponse_billingAddress $value): void {
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
     * @param OrganizationResponse_billingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?OrganizationResponse_billingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the billingState property value. Customer-safe billing state for this organization.
     * @param OrganizationResponse_billingState|null $value Value to set for the billingState property.
    */
    public function setBillingState(?OrganizationResponse_billingState $value): void {
        $this->billingState = $value;
    }

    /**
     * Sets the billingTaxId property value. Tax identifier printed on billing documents. This may differ from the organization verification EIN.
     * @param string|null $value Value to set for the billingTaxId property.
    */
    public function setBillingTaxId(?string $value): void {
        $this->billingTaxId = $value;
    }

    /**
     * Sets the compliancePolicy property value. Compliance policy configuration for the organization.
     * @param OrganizationResponse_compliancePolicy|null $value Value to set for the compliancePolicy property.
    */
    public function setCompliancePolicy(?OrganizationResponse_compliancePolicy $value): void {
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
     * Sets the description property value. Human-readable description that explains this organization profile response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the domain property value. Domain name connected to the organization website or activation workflow.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the ein property value. Employer Identification Number used for organization and 10DLC verification.
     * @param string|null $value Value to set for the ein property.
    */
    public function setEin(?string $value): void {
        $this->ein = $value;
    }

    /**
     * Sets the einDocument property value. Uploaded EIN document reference used for organization verification.
     * @param OrganizationResponse_einDocument|null $value Value to set for the einDocument property.
    */
    public function setEinDocument(?OrganizationResponse_einDocument $value): void {
        $this->einDocument = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this organization profile response is active and available in the Leadping API.
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
     * Sets the phone property value. Phone details for the lead, user, or organization represented by this organization profile response.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the phones property value. Phone numbers assigned to this organization.
     * @param array<IdNameValue>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->phones = $value;
    }

    /**
     * Sets the secondaryName property value. Alternate organization name or DBA shown in Leadping.
     * @param string|null $value Value to set for the secondaryName property.
    */
    public function setSecondaryName(?string $value): void {
        $this->secondaryName = $value;
    }

    /**
     * Sets the setupStatus property value. Defines the supported User Setup Status values.
     * @param OrganizationResponse_setupStatus|null $value Value to set for the setupStatus property.
    */
    public function setSetupStatus(?OrganizationResponse_setupStatus $value): void {
        $this->setupStatus = $value;
    }

    /**
     * Sets the setupStep property value. Defines the supported Organization Setup Step values.
     * @param OrganizationResponse_setupStep|null $value Value to set for the setupStep property.
    */
    public function setSetupStep(?OrganizationResponse_setupStep $value): void {
        $this->setupStep = $value;
    }

    /**
     * Sets the site property value. Leadping website record connected to this organization.
     * @param OrganizationResponse_site|null $value Value to set for the site property.
    */
    public function setSite(?OrganizationResponse_site $value): void {
        $this->site = $value;
    }

    /**
     * Sets the status property value. Defines the supported Organization Status values.
     * @param OrganizationResponse_status|null $value Value to set for the status property.
    */
    public function setStatus(?OrganizationResponse_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @param OrganizationResponse_subscriptionStatus|null $value Value to set for the subscriptionStatus property.
    */
    public function setSubscriptionStatus(?OrganizationResponse_subscriptionStatus $value): void {
        $this->subscriptionStatus = $value;
    }

    /**
     * Sets the user property value. User summary connected to this organization profile response.
     * @param OrganizationResponse_user|null $value Value to set for the user property.
    */
    public function setUser(?OrganizationResponse_user $value): void {
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
     * Sets the website property value. Organization website URL used for compliance, brand review, and lead attribution.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

}
