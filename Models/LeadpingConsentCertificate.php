<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes Leadping Consent certificate data used in Leadping API requests and responses.
*/
class LeadpingConsentCertificate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp for created at on this Leadping Consent certificate.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this Leadping Consent certificate.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $source Source for this Leadping Consent certificate.
    */
    private ?string $source = null;
    
    /**
     * Instantiates a new LeadpingConsentCertificate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadpingConsentCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadpingConsentCertificate {
        return new LeadpingConsentCertificate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. UTC timestamp for created at on this Leadping Consent certificate.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this Leadping Consent certificate.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the source property value. Source for this Leadping Consent certificate.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('source', $this->getSource());
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
     * Sets the createdAt property value. UTC timestamp for created at on this Leadping Consent certificate.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this Leadping Consent certificate.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the source property value. Source for this Leadping Consent certificate.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

}
