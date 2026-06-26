<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing trusted form certificate data used by Leadping API contracts.
*/
class TrustedFormCertificate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this TrustedForm certificate.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id The unique ID for this TrustedForm certificate.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $source The source value for this TrustedForm certificate.
    */
    private ?string $source = null;
    
    /**
     * @var string|null $url The URL associated with this TrustedForm certificate.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new TrustedFormCertificate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustedFormCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustedFormCertificate {
        return new TrustedFormCertificate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this TrustedForm certificate.
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
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this TrustedForm certificate.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the source property value. The source value for this TrustedForm certificate.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the url property value. The URL associated with this TrustedForm certificate.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the createdAt property value. The date and time for the created at value on this TrustedForm certificate.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. The unique ID for this TrustedForm certificate.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the source property value. The source value for this TrustedForm certificate.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the url property value. The URL associated with this TrustedForm certificate.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
