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
     * @var string|null $description Human-readable description that explains this organization profile request to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $ein Employer Identification Number used for organization and 10DLC verification.
    */
    private ?string $ein = null;
    
    /**
     * @var bool|null $isYoungerThan90 Indicates whether the organization serves customers younger than 90, for compliance and underwriting context.
    */
    private ?bool $isYoungerThan90 = null;
    
    /**
     * @var string|null $name Primary organization name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or organization represented by this organization profile request.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $secondaryName Alternate organization name or DBA shown in Leadping.
    */
    private ?string $secondaryName = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([OrganizationRequest_address::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'isYoungerThan90' => fn(ParseNode $n) => $o->setIsYoungerThan90($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'secondaryName' => fn(ParseNode $n) => $o->setSecondaryName($n->getStringValue()),
            'vertical' => fn(ParseNode $n) => $o->setVertical($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ];
    }

    /**
     * Gets the isYoungerThan90 property value. Indicates whether the organization serves customers younger than 90, for compliance and underwriting context.
     * @return bool|null
    */
    public function getIsYoungerThan90(): ?bool {
        return $this->isYoungerThan90;
    }

    /**
     * Gets the name property value. Primary organization name.
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
     * Gets the secondaryName property value. Alternate organization name or DBA shown in Leadping.
     * @return string|null
    */
    public function getSecondaryName(): ?string {
        return $this->secondaryName;
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('ein', $this->getEin());
        $writer->writeBooleanValue('isYoungerThan90', $this->getIsYoungerThan90());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('secondaryName', $this->getSecondaryName());
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
     * Sets the isYoungerThan90 property value. Indicates whether the organization serves customers younger than 90, for compliance and underwriting context.
     * @param bool|null $value Value to set for the isYoungerThan90 property.
    */
    public function setIsYoungerThan90(?bool $value): void {
        $this->isYoungerThan90 = $value;
    }

    /**
     * Sets the name property value. Primary organization name.
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
     * Sets the secondaryName property value. Alternate organization name or DBA shown in Leadping.
     * @param string|null $value Value to set for the secondaryName property.
    */
    public function setSecondaryName(?string $value): void {
        $this->secondaryName = $value;
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
