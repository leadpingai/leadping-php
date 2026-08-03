<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Number-portability and routing data returned by Telnyx.
*/
class PhoneLookupPortability implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $alternativeCarrierName Name of the carrier associated with the alternative service provider identifier.
    */
    private ?string $alternativeCarrierName = null;
    
    /**
     * @var string|null $alternativeCarrierType Carrier type associated with the alternative service provider identifier.
    */
    private ?string $alternativeCarrierType = null;
    
    /**
     * @var string|null $alternativeSpid Alternative service provider identifier reported for the number.
    */
    private ?string $alternativeSpid = null;
    
    /**
     * @var string|null $carrierName Name of the carrier currently serving the number.
    */
    private ?string $carrierName = null;
    
    /**
     * @var string|null $carrierType Type of carrier currently serving the number.
    */
    private ?string $carrierType = null;
    
    /**
     * @var string|null $city City reported by the portability lookup.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $lineType Provider-native line type reported by the portability lookup.
    */
    private ?string $lineType = null;
    
    /**
     * @var string|null $localRoutingNumber Local routing number used to route calls for the ported number.
    */
    private ?string $localRoutingNumber = null;
    
    /**
     * @var string|null $operatingCompanyNumber Operating company number associated with the phone number.
    */
    private ?string $operatingCompanyNumber = null;
    
    /**
     * @var string|null $portedDate Date on which the phone number was ported, as reported by the provider.
    */
    private ?string $portedDate = null;
    
    /**
     * @var string|null $portedStatus Current number-portability status reported by the provider.
    */
    private ?string $portedStatus = null;
    
    /**
     * @var string|null $spid Service provider identifier currently associated with the number.
    */
    private ?string $spid = null;
    
    /**
     * @var string|null $state State or region reported by the portability lookup.
    */
    private ?string $state = null;
    
    /**
     * Instantiates a new PhoneLookupPortability and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneLookupPortability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneLookupPortability {
        return new PhoneLookupPortability();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the alternativeCarrierName property value. Name of the carrier associated with the alternative service provider identifier.
     * @return string|null
    */
    public function getAlternativeCarrierName(): ?string {
        return $this->alternativeCarrierName;
    }

    /**
     * Gets the alternativeCarrierType property value. Carrier type associated with the alternative service provider identifier.
     * @return string|null
    */
    public function getAlternativeCarrierType(): ?string {
        return $this->alternativeCarrierType;
    }

    /**
     * Gets the alternativeSpid property value. Alternative service provider identifier reported for the number.
     * @return string|null
    */
    public function getAlternativeSpid(): ?string {
        return $this->alternativeSpid;
    }

    /**
     * Gets the carrierName property value. Name of the carrier currently serving the number.
     * @return string|null
    */
    public function getCarrierName(): ?string {
        return $this->carrierName;
    }

    /**
     * Gets the carrierType property value. Type of carrier currently serving the number.
     * @return string|null
    */
    public function getCarrierType(): ?string {
        return $this->carrierType;
    }

    /**
     * Gets the city property value. City reported by the portability lookup.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alternativeCarrierName' => fn(ParseNode $n) => $o->setAlternativeCarrierName($n->getStringValue()),
            'alternativeCarrierType' => fn(ParseNode $n) => $o->setAlternativeCarrierType($n->getStringValue()),
            'alternativeSpid' => fn(ParseNode $n) => $o->setAlternativeSpid($n->getStringValue()),
            'carrierName' => fn(ParseNode $n) => $o->setCarrierName($n->getStringValue()),
            'carrierType' => fn(ParseNode $n) => $o->setCarrierType($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'lineType' => fn(ParseNode $n) => $o->setLineType($n->getStringValue()),
            'localRoutingNumber' => fn(ParseNode $n) => $o->setLocalRoutingNumber($n->getStringValue()),
            'operatingCompanyNumber' => fn(ParseNode $n) => $o->setOperatingCompanyNumber($n->getStringValue()),
            'portedDate' => fn(ParseNode $n) => $o->setPortedDate($n->getStringValue()),
            'portedStatus' => fn(ParseNode $n) => $o->setPortedStatus($n->getStringValue()),
            'spid' => fn(ParseNode $n) => $o->setSpid($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the lineType property value. Provider-native line type reported by the portability lookup.
     * @return string|null
    */
    public function getLineType(): ?string {
        return $this->lineType;
    }

    /**
     * Gets the localRoutingNumber property value. Local routing number used to route calls for the ported number.
     * @return string|null
    */
    public function getLocalRoutingNumber(): ?string {
        return $this->localRoutingNumber;
    }

    /**
     * Gets the operatingCompanyNumber property value. Operating company number associated with the phone number.
     * @return string|null
    */
    public function getOperatingCompanyNumber(): ?string {
        return $this->operatingCompanyNumber;
    }

    /**
     * Gets the portedDate property value. Date on which the phone number was ported, as reported by the provider.
     * @return string|null
    */
    public function getPortedDate(): ?string {
        return $this->portedDate;
    }

    /**
     * Gets the portedStatus property value. Current number-portability status reported by the provider.
     * @return string|null
    */
    public function getPortedStatus(): ?string {
        return $this->portedStatus;
    }

    /**
     * Gets the spid property value. Service provider identifier currently associated with the number.
     * @return string|null
    */
    public function getSpid(): ?string {
        return $this->spid;
    }

    /**
     * Gets the state property value. State or region reported by the portability lookup.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alternativeCarrierName', $this->getAlternativeCarrierName());
        $writer->writeStringValue('alternativeCarrierType', $this->getAlternativeCarrierType());
        $writer->writeStringValue('alternativeSpid', $this->getAlternativeSpid());
        $writer->writeStringValue('carrierName', $this->getCarrierName());
        $writer->writeStringValue('carrierType', $this->getCarrierType());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('lineType', $this->getLineType());
        $writer->writeStringValue('localRoutingNumber', $this->getLocalRoutingNumber());
        $writer->writeStringValue('operatingCompanyNumber', $this->getOperatingCompanyNumber());
        $writer->writeStringValue('portedDate', $this->getPortedDate());
        $writer->writeStringValue('portedStatus', $this->getPortedStatus());
        $writer->writeStringValue('spid', $this->getSpid());
        $writer->writeStringValue('state', $this->getState());
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
     * Sets the alternativeCarrierName property value. Name of the carrier associated with the alternative service provider identifier.
     * @param string|null $value Value to set for the alternativeCarrierName property.
    */
    public function setAlternativeCarrierName(?string $value): void {
        $this->alternativeCarrierName = $value;
    }

    /**
     * Sets the alternativeCarrierType property value. Carrier type associated with the alternative service provider identifier.
     * @param string|null $value Value to set for the alternativeCarrierType property.
    */
    public function setAlternativeCarrierType(?string $value): void {
        $this->alternativeCarrierType = $value;
    }

    /**
     * Sets the alternativeSpid property value. Alternative service provider identifier reported for the number.
     * @param string|null $value Value to set for the alternativeSpid property.
    */
    public function setAlternativeSpid(?string $value): void {
        $this->alternativeSpid = $value;
    }

    /**
     * Sets the carrierName property value. Name of the carrier currently serving the number.
     * @param string|null $value Value to set for the carrierName property.
    */
    public function setCarrierName(?string $value): void {
        $this->carrierName = $value;
    }

    /**
     * Sets the carrierType property value. Type of carrier currently serving the number.
     * @param string|null $value Value to set for the carrierType property.
    */
    public function setCarrierType(?string $value): void {
        $this->carrierType = $value;
    }

    /**
     * Sets the city property value. City reported by the portability lookup.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the lineType property value. Provider-native line type reported by the portability lookup.
     * @param string|null $value Value to set for the lineType property.
    */
    public function setLineType(?string $value): void {
        $this->lineType = $value;
    }

    /**
     * Sets the localRoutingNumber property value. Local routing number used to route calls for the ported number.
     * @param string|null $value Value to set for the localRoutingNumber property.
    */
    public function setLocalRoutingNumber(?string $value): void {
        $this->localRoutingNumber = $value;
    }

    /**
     * Sets the operatingCompanyNumber property value. Operating company number associated with the phone number.
     * @param string|null $value Value to set for the operatingCompanyNumber property.
    */
    public function setOperatingCompanyNumber(?string $value): void {
        $this->operatingCompanyNumber = $value;
    }

    /**
     * Sets the portedDate property value. Date on which the phone number was ported, as reported by the provider.
     * @param string|null $value Value to set for the portedDate property.
    */
    public function setPortedDate(?string $value): void {
        $this->portedDate = $value;
    }

    /**
     * Sets the portedStatus property value. Current number-portability status reported by the provider.
     * @param string|null $value Value to set for the portedStatus property.
    */
    public function setPortedStatus(?string $value): void {
        $this->portedStatus = $value;
    }

    /**
     * Sets the spid property value. Service provider identifier currently associated with the number.
     * @param string|null $value Value to set for the spid property.
    */
    public function setSpid(?string $value): void {
        $this->spid = $value;
    }

    /**
     * Sets the state property value. State or region reported by the portability lookup.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

}
