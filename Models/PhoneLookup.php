<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for phone lookup result data.
*/
class PhoneLookup implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneLookup_callerName|null $callerName Caller-name data returned by the provider.
    */
    private ?PhoneLookup_callerName $callerName = null;
    
    /**
     * @var PhoneLookup_carrier|null $carrier Complete carrier metadata reported for this phone number.
    */
    private ?PhoneLookup_carrier $carrier = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when the phone lookup record was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $fraud Fraud value returned by the provider, when available.
    */
    private ?string $fraud = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the saved phone lookup record.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isValid Indicates whether this phone lookup result passed validation.
    */
    private ?bool $isValid = null;
    
    /**
     * @var PhoneLookup_lineType|null $lineType An enumerator describing phone line types
    */
    private ?PhoneLookup_lineType $lineType = null;
    
    /**
     * @var PhoneLookup_location|null $location Geographic location metadata for the phone number, lead, or lookup result.
    */
    private ?PhoneLookup_location $location = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when the phone lookup record was last updated.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $nationalFormat Provider-formatted national phone number.
    */
    private ?string $nationalFormat = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone lookup result.
    */
    private ?string $number = null;
    
    /**
     * @var PhoneLookup_portability|null $portability Complete portability data returned by Telnyx.
    */
    private ?PhoneLookup_portability $portability = null;
    
    /**
     * @var string|null $recordType Provider record discriminator.
    */
    private ?string $recordType = null;
    
    /**
     * Instantiates a new PhoneLookup and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneLookup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneLookup {
        return new PhoneLookup();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callerName property value. Caller-name data returned by the provider.
     * @return PhoneLookup_callerName|null
    */
    public function getCallerName(): ?PhoneLookup_callerName {
        return $this->callerName;
    }

    /**
     * Gets the carrier property value. Complete carrier metadata reported for this phone number.
     * @return PhoneLookup_carrier|null
    */
    public function getCarrier(): ?PhoneLookup_carrier {
        return $this->carrier;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when the phone lookup record was created.
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
            'callerName' => fn(ParseNode $n) => $o->setCallerName($n->getObjectValue([PhoneLookup_callerName::class, 'createFromDiscriminatorValue'])),
            'carrier' => fn(ParseNode $n) => $o->setCarrier($n->getObjectValue([PhoneLookup_carrier::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'fraud' => fn(ParseNode $n) => $o->setFraud($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isValid' => fn(ParseNode $n) => $o->setIsValid($n->getBooleanValue()),
            'lineType' => fn(ParseNode $n) => $o->setLineType($n->getEnumValue(PhoneLookup_lineType::class)),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PhoneLookup_location::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'nationalFormat' => fn(ParseNode $n) => $o->setNationalFormat($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'portability' => fn(ParseNode $n) => $o->setPortability($n->getObjectValue([PhoneLookup_portability::class, 'createFromDiscriminatorValue'])),
            'recordType' => fn(ParseNode $n) => $o->setRecordType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fraud property value. Fraud value returned by the provider, when available.
     * @return string|null
    */
    public function getFraud(): ?string {
        return $this->fraud;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the saved phone lookup record.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isValid property value. Indicates whether this phone lookup result passed validation.
     * @return bool|null
    */
    public function getIsValid(): ?bool {
        return $this->isValid;
    }

    /**
     * Gets the lineType property value. An enumerator describing phone line types
     * @return PhoneLookup_lineType|null
    */
    public function getLineType(): ?PhoneLookup_lineType {
        return $this->lineType;
    }

    /**
     * Gets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @return PhoneLookup_location|null
    */
    public function getLocation(): ?PhoneLookup_location {
        return $this->location;
    }

    /**
     * Gets the modifiedAt property value. UTC timestamp when the phone lookup record was last updated.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the nationalFormat property value. Provider-formatted national phone number.
     * @return string|null
    */
    public function getNationalFormat(): ?string {
        return $this->nationalFormat;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone lookup result.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the portability property value. Complete portability data returned by Telnyx.
     * @return PhoneLookup_portability|null
    */
    public function getPortability(): ?PhoneLookup_portability {
        return $this->portability;
    }

    /**
     * Gets the recordType property value. Provider record discriminator.
     * @return string|null
    */
    public function getRecordType(): ?string {
        return $this->recordType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('callerName', $this->getCallerName());
        $writer->writeObjectValue('carrier', $this->getCarrier());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('fraud', $this->getFraud());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isValid', $this->getIsValid());
        $writer->writeEnumValue('lineType', $this->getLineType());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('nationalFormat', $this->getNationalFormat());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeObjectValue('portability', $this->getPortability());
        $writer->writeStringValue('recordType', $this->getRecordType());
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
     * Sets the callerName property value. Caller-name data returned by the provider.
     * @param PhoneLookup_callerName|null $value Value to set for the callerName property.
    */
    public function setCallerName(?PhoneLookup_callerName $value): void {
        $this->callerName = $value;
    }

    /**
     * Sets the carrier property value. Complete carrier metadata reported for this phone number.
     * @param PhoneLookup_carrier|null $value Value to set for the carrier property.
    */
    public function setCarrier(?PhoneLookup_carrier $value): void {
        $this->carrier = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when the phone lookup record was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the fraud property value. Fraud value returned by the provider, when available.
     * @param string|null $value Value to set for the fraud property.
    */
    public function setFraud(?string $value): void {
        $this->fraud = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the saved phone lookup record.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isValid property value. Indicates whether this phone lookup result passed validation.
     * @param bool|null $value Value to set for the isValid property.
    */
    public function setIsValid(?bool $value): void {
        $this->isValid = $value;
    }

    /**
     * Sets the lineType property value. An enumerator describing phone line types
     * @param PhoneLookup_lineType|null $value Value to set for the lineType property.
    */
    public function setLineType(?PhoneLookup_lineType $value): void {
        $this->lineType = $value;
    }

    /**
     * Sets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @param PhoneLookup_location|null $value Value to set for the location property.
    */
    public function setLocation(?PhoneLookup_location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the modifiedAt property value. UTC timestamp when the phone lookup record was last updated.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the nationalFormat property value. Provider-formatted national phone number.
     * @param string|null $value Value to set for the nationalFormat property.
    */
    public function setNationalFormat(?string $value): void {
        $this->nationalFormat = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone lookup result.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the portability property value. Complete portability data returned by Telnyx.
     * @param PhoneLookup_portability|null $value Value to set for the portability property.
    */
    public function setPortability(?PhoneLookup_portability $value): void {
        $this->portability = $value;
    }

    /**
     * Sets the recordType property value. Provider record discriminator.
     * @param string|null $value Value to set for the recordType property.
    */
    public function setRecordType(?string $value): void {
        $this->recordType = $value;
    }

}
