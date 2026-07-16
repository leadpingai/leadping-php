<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Complete carrier metadata returned by a phone number lookup provider.
*/
class PhoneLookupCarrier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $errorCode Reason or diagnostic code that explains the current outcome for this Leadping phone lookup carrier.
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $mobileCountryCode Mobile country code (MCC) reported by the carrier lookup.
    */
    private ?string $mobileCountryCode = null;
    
    /**
     * @var string|null $mobileNetworkCode Mobile network code (MNC) reported by the carrier lookup.
    */
    private ?string $mobileNetworkCode = null;
    
    /**
     * @var string|null $name Human-readable name of the phone lookup carrier.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $normalizedCarrier Normalized carrier name used for consistent matching and reporting.
    */
    private ?string $normalizedCarrier = null;
    
    /**
     * @var PhoneLookupCarrier_type|null $type An enumerator describing carrier types
    */
    private ?PhoneLookupCarrier_type $type = null;
    
    /**
     * Instantiates a new PhoneLookupCarrier and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneLookupCarrier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneLookupCarrier {
        return new PhoneLookupCarrier();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errorCode property value. Reason or diagnostic code that explains the current outcome for this Leadping phone lookup carrier.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'mobileCountryCode' => fn(ParseNode $n) => $o->setMobileCountryCode($n->getStringValue()),
            'mobileNetworkCode' => fn(ParseNode $n) => $o->setMobileNetworkCode($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'normalizedCarrier' => fn(ParseNode $n) => $o->setNormalizedCarrier($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(PhoneLookupCarrier_type::class)),
        ];
    }

    /**
     * Gets the mobileCountryCode property value. Mobile country code (MCC) reported by the carrier lookup.
     * @return string|null
    */
    public function getMobileCountryCode(): ?string {
        return $this->mobileCountryCode;
    }

    /**
     * Gets the mobileNetworkCode property value. Mobile network code (MNC) reported by the carrier lookup.
     * @return string|null
    */
    public function getMobileNetworkCode(): ?string {
        return $this->mobileNetworkCode;
    }

    /**
     * Gets the name property value. Human-readable name of the phone lookup carrier.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the normalizedCarrier property value. Normalized carrier name used for consistent matching and reporting.
     * @return string|null
    */
    public function getNormalizedCarrier(): ?string {
        return $this->normalizedCarrier;
    }

    /**
     * Gets the type property value. An enumerator describing carrier types
     * @return PhoneLookupCarrier_type|null
    */
    public function getType(): ?PhoneLookupCarrier_type {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('mobileCountryCode', $this->getMobileCountryCode());
        $writer->writeStringValue('mobileNetworkCode', $this->getMobileNetworkCode());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('normalizedCarrier', $this->getNormalizedCarrier());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the errorCode property value. Reason or diagnostic code that explains the current outcome for this Leadping phone lookup carrier.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the mobileCountryCode property value. Mobile country code (MCC) reported by the carrier lookup.
     * @param string|null $value Value to set for the mobileCountryCode property.
    */
    public function setMobileCountryCode(?string $value): void {
        $this->mobileCountryCode = $value;
    }

    /**
     * Sets the mobileNetworkCode property value. Mobile network code (MNC) reported by the carrier lookup.
     * @param string|null $value Value to set for the mobileNetworkCode property.
    */
    public function setMobileNetworkCode(?string $value): void {
        $this->mobileNetworkCode = $value;
    }

    /**
     * Sets the name property value. Human-readable name of the phone lookup carrier.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the normalizedCarrier property value. Normalized carrier name used for consistent matching and reporting.
     * @param string|null $value Value to set for the normalizedCarrier property.
    */
    public function setNormalizedCarrier(?string $value): void {
        $this->normalizedCarrier = $value;
    }

    /**
     * Sets the type property value. An enumerator describing carrier types
     * @param PhoneLookupCarrier_type|null $value Value to set for the type property.
    */
    public function setType(?PhoneLookupCarrier_type $value): void {
        $this->type = $value;
    }

}
