<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Business represented by a lead contact.
*/
class LeadCompany implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $employeeCount Number of employees, when known.
    */
    private ?int $employeeCount = null;
    
    /**
     * @var string|null $industry Industry of the business, independent of the requested service.
    */
    private ?string $industry = null;
    
    /**
     * @var string|null $jobTitle Contact role at the business.
    */
    private ?string $jobTitle = null;
    
    /**
     * @var string|null $name Business name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $website Business website URL.
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new LeadCompany and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadCompany
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadCompany {
        return new LeadCompany();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the employeeCount property value. Number of employees, when known.
     * @return int|null
    */
    public function getEmployeeCount(): ?int {
        return $this->employeeCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'employeeCount' => fn(ParseNode $n) => $o->setEmployeeCount($n->getIntegerValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ];
    }

    /**
     * Gets the industry property value. Industry of the business, independent of the requested service.
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the jobTitle property value. Contact role at the business.
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the name property value. Business name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the website property value. Business website URL.
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
        $writer->writeIntegerValue('employeeCount', $this->getEmployeeCount());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the employeeCount property value. Number of employees, when known.
     * @param int|null $value Value to set for the employeeCount property.
    */
    public function setEmployeeCount(?int $value): void {
        $this->employeeCount = $value;
    }

    /**
     * Sets the industry property value. Industry of the business, independent of the requested service.
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->industry = $value;
    }

    /**
     * Sets the jobTitle property value. Contact role at the business.
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the name property value. Business name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the website property value. Business website URL.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->website = $value;
    }

}
