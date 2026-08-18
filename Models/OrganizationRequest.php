<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the fields clients can send when working with organization profile.
*/
class OrganizationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var OrganizationRequest_address|null $address Postal address for the organization, lead, or contact represented by this organization profile request.
    */
    private ?OrganizationRequest_address $address = null;
    
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
     * @var OrganizationRequest_billingAddress|null $billingAddress Postal address used for invoices, receipts, and payment processor billing records.
    */
    private ?OrganizationRequest_billingAddress $billingAddress = null;
    
    /**
     * @var string|null $billingName Name used for invoices, receipts, and payment processor billing records.
    */
    private ?string $billingName = null;
    
    /**
     * @var string|null $billingTaxId Tax identifier printed on billing documents. This may differ from the organization verification EIN.
    */
    private ?string $billingTaxId = null;
    
    /**
     * @var OrganizationRequest_compliancePolicy|null $compliancePolicy Compliance policy configuration for the organization.
    */
    private ?OrganizationRequest_compliancePolicy $compliancePolicy = null;
    
    /**
     * @var string|null $description Human-readable description that explains this organization profile request to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $ein Employer Identification Number used for organization and 10DLC verification.
    */
    private ?string $ein = null;
    
    /**
     * @var OrganizationRequest_einDocument|null $einDocument Uploaded EIN document reference used for organization verification.
    */
    private ?OrganizationRequest_einDocument $einDocument = null;
    
    /**
     * @var bool|null $enabled Indicates whether this organization profile request is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity, when updating an existing entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isYoungerThan90 Indicates whether the organization serves customers younger than 90, for compliance and underwriting context.
    */
    private ?bool $isYoungerThan90 = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or organization represented by this organization profile request.
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
     * @var OrganizationRequest_status|null $status Describes an organization's account lifecycle and whether it can actively use Leadping services.
    */
    private ?OrganizationRequest_status $status = null;
    
    /**
     * @var string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
    */
    private ?string $vertical = null;
    
    /**
     * @var string|null $website Organization website URL used for compliance, brand review, and lead attribution.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new OrganizationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationRequest {
        return new OrganizationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. Postal address for the organization, lead, or contact represented by this organization profile request.
     * @return OrganizationRequest_address|null
    */
    public function getAddress(): ?OrganizationRequest_address {
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
     * @return OrganizationRequest_billingAddress|null
    */
    public function getBillingAddress(): ?OrganizationRequest_billingAddress {
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
     * Gets the billingTaxId property value. Tax identifier printed on billing documents. This may differ from the organization verification EIN.
     * @return string|null
    */
    public function getBillingTaxId(): ?string {
        return $this->billingTaxId;
    }

    /**
     * Gets the compliancePolicy property value. Compliance policy configuration for the organization.
     * @return OrganizationRequest_compliancePolicy|null
    */
    public function getCompliancePolicy(): ?OrganizationRequest_compliancePolicy {
        return $this->compliancePolicy;
    }

    /**
     * Gets the description property value. Human-readable description that explains this organization profile request to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
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
     * @return OrganizationRequest_einDocument|null
    */
    public function getEinDocument(): ?OrganizationRequest_einDocument {
        return $this->einDocument;
    }

    /**
     * Gets the enabled property value. Indicates whether this organization profile request is active and available in the Leadping API.
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
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([OrganizationRequest_address::class, 'createFromDiscriminatorValue'])),
            'autoRefillAmount' => fn(ParseNode $n) => $o->setAutoRefillAmount($n->getFloatValue()),
            'autoRefillEnabled' => fn(ParseNode $n) => $o->setAutoRefillEnabled($n->getBooleanValue()),
            'autoRefillTrigger' => fn(ParseNode $n) => $o->setAutoRefillTrigger($n->getFloatValue()),
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([OrganizationRequest_billingAddress::class, 'createFromDiscriminatorValue'])),
            'billingName' => fn(ParseNode $n) => $o->setBillingName($n->getStringValue()),
            'billingTaxId' => fn(ParseNode $n) => $o->setBillingTaxId($n->getStringValue()),
            'compliancePolicy' => fn(ParseNode $n) => $o->setCompliancePolicy($n->getObjectValue([OrganizationRequest_compliancePolicy::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'einDocument' => fn(ParseNode $n) => $o->setEinDocument($n->getObjectValue([OrganizationRequest_einDocument::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isYoungerThan90' => fn(ParseNode $n) => $o->setIsYoungerThan90($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([IdNameValue::class, 'createFromDiscriminatorValue'])),
            'secondaryName' => fn(ParseNode $n) => $o->setSecondaryName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OrganizationRequest_status::class)),
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
     * Gets the isYoungerThan90 property value. Indicates whether the organization serves customers younger than 90, for compliance and underwriting context.
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
     * Gets the phone property value. Phone details for the lead, user, or organization represented by this organization profile request.
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
     * Gets the status property value. Describes an organization's account lifecycle and whether it can actively use Leadping services.
     * @return OrganizationRequest_status|null
    */
    public function getStatus(): ?OrganizationRequest_status {
        return $this->status;
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
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeFloatValue('autoRefillAmount', $this->getAutoRefillAmount());
        $writer->writeBooleanValue('autoRefillEnabled', $this->getAutoRefillEnabled());
        $writer->writeFloatValue('autoRefillTrigger', $this->getAutoRefillTrigger());
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('billingName', $this->getBillingName());
        $writer->writeStringValue('billingTaxId', $this->getBillingTaxId());
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
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('vertical', $this->getVertical());
        $writer->writeStringValue('website', $this->getWebsite());
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
     * Sets the address property value. Postal address for the organization, lead, or contact represented by this organization profile request.
     * @param OrganizationRequest_address|null $value Value to set for the address property.
    */
    public function setAddress(?OrganizationRequest_address $value): void {
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
     * @param OrganizationRequest_billingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?OrganizationRequest_billingAddress $value): void {
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
     * Sets the billingTaxId property value. Tax identifier printed on billing documents. This may differ from the organization verification EIN.
     * @param string|null $value Value to set for the billingTaxId property.
    */
    public function setBillingTaxId(?string $value): void {
        $this->billingTaxId = $value;
    }

    /**
     * Sets the compliancePolicy property value. Compliance policy configuration for the organization.
     * @param OrganizationRequest_compliancePolicy|null $value Value to set for the compliancePolicy property.
    */
    public function setCompliancePolicy(?OrganizationRequest_compliancePolicy $value): void {
        $this->compliancePolicy = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this organization profile request to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
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
     * @param OrganizationRequest_einDocument|null $value Value to set for the einDocument property.
    */
    public function setEinDocument(?OrganizationRequest_einDocument $value): void {
        $this->einDocument = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this organization profile request is active and available in the Leadping API.
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
     * Sets the isYoungerThan90 property value. Indicates whether the organization serves customers younger than 90, for compliance and underwriting context.
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
     * Sets the phone property value. Phone details for the lead, user, or organization represented by this organization profile request.
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
     * Sets the status property value. Describes an organization's account lifecycle and whether it can actively use Leadping services.
     * @param OrganizationRequest_status|null $value Value to set for the status property.
    */
    public function setStatus(?OrganizationRequest_status $value): void {
        $this->status = $value;
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
