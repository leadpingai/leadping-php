<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing activation domain option data used by Leadping API contracts.
*/
class ActivationDomainOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $availabilityStatus The current availability status for this activation domain option.
    */
    private ?string $availabilityStatus = null;
    
    /**
     * @var string|null $domainName The domain name associated with this activation domain option.
    */
    private ?string $domainName = null;
    
    /**
     * @var string|null $industryRelevance The industry relevance value for this activation domain option.
    */
    private ?string $industryRelevance = null;
    
    /**
     * @var bool|null $recommended Whether this activation domain option is recommended.
    */
    private ?bool $recommended = null;
    
    /**
     * @var string|null $trustConcerns The trust concerns value for this activation domain option.
    */
    private ?string $trustConcerns = null;
    
    /**
     * @var string|null $whyItFits The why it fits value for this activation domain option.
    */
    private ?string $whyItFits = null;
    
    /**
     * Instantiates a new ActivationDomainOption and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivationDomainOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivationDomainOption {
        return new ActivationDomainOption();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityStatus property value. The current availability status for this activation domain option.
     * @return string|null
    */
    public function getAvailabilityStatus(): ?string {
        return $this->availabilityStatus;
    }

    /**
     * Gets the domainName property value. The domain name associated with this activation domain option.
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availabilityStatus' => fn(ParseNode $n) => $o->setAvailabilityStatus($n->getStringValue()),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'industryRelevance' => fn(ParseNode $n) => $o->setIndustryRelevance($n->getStringValue()),
            'recommended' => fn(ParseNode $n) => $o->setRecommended($n->getBooleanValue()),
            'trustConcerns' => fn(ParseNode $n) => $o->setTrustConcerns($n->getStringValue()),
            'whyItFits' => fn(ParseNode $n) => $o->setWhyItFits($n->getStringValue()),
        ];
    }

    /**
     * Gets the industryRelevance property value. The industry relevance value for this activation domain option.
     * @return string|null
    */
    public function getIndustryRelevance(): ?string {
        return $this->industryRelevance;
    }

    /**
     * Gets the recommended property value. Whether this activation domain option is recommended.
     * @return bool|null
    */
    public function getRecommended(): ?bool {
        return $this->recommended;
    }

    /**
     * Gets the trustConcerns property value. The trust concerns value for this activation domain option.
     * @return string|null
    */
    public function getTrustConcerns(): ?string {
        return $this->trustConcerns;
    }

    /**
     * Gets the whyItFits property value. The why it fits value for this activation domain option.
     * @return string|null
    */
    public function getWhyItFits(): ?string {
        return $this->whyItFits;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availabilityStatus', $this->getAvailabilityStatus());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeStringValue('industryRelevance', $this->getIndustryRelevance());
        $writer->writeBooleanValue('recommended', $this->getRecommended());
        $writer->writeStringValue('trustConcerns', $this->getTrustConcerns());
        $writer->writeStringValue('whyItFits', $this->getWhyItFits());
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
     * Sets the availabilityStatus property value. The current availability status for this activation domain option.
     * @param string|null $value Value to set for the availabilityStatus property.
    */
    public function setAvailabilityStatus(?string $value): void {
        $this->availabilityStatus = $value;
    }

    /**
     * Sets the domainName property value. The domain name associated with this activation domain option.
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->domainName = $value;
    }

    /**
     * Sets the industryRelevance property value. The industry relevance value for this activation domain option.
     * @param string|null $value Value to set for the industryRelevance property.
    */
    public function setIndustryRelevance(?string $value): void {
        $this->industryRelevance = $value;
    }

    /**
     * Sets the recommended property value. Whether this activation domain option is recommended.
     * @param bool|null $value Value to set for the recommended property.
    */
    public function setRecommended(?bool $value): void {
        $this->recommended = $value;
    }

    /**
     * Sets the trustConcerns property value. The trust concerns value for this activation domain option.
     * @param string|null $value Value to set for the trustConcerns property.
    */
    public function setTrustConcerns(?string $value): void {
        $this->trustConcerns = $value;
    }

    /**
     * Sets the whyItFits property value. The why it fits value for this activation domain option.
     * @param string|null $value Value to set for the whyItFits property.
    */
    public function setWhyItFits(?string $value): void {
        $this->whyItFits = $value;
    }

}
