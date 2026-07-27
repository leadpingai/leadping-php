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
     * @var PhoneLookup_carrier|null $carrier Complete carrier metadata reported for this phone number.
    */
    private ?PhoneLookup_carrier $carrier = null;
    
    /**
     * @var DateTime|null $createdAt Gets or sets created at.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id Gets or sets id.
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
     * @var DateTime|null $modifiedAt Gets or sets modified at.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone lookup result.
    */
    private ?string $number = null;
    
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
     * Gets the carrier property value. Complete carrier metadata reported for this phone number.
     * @return PhoneLookup_carrier|null
    */
    public function getCarrier(): ?PhoneLookup_carrier {
        return $this->carrier;
    }

    /**
     * Gets the createdAt property value. Gets or sets created at.
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
            'carrier' => fn(ParseNode $n) => $o->setCarrier($n->getObjectValue([PhoneLookup_carrier::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isValid' => fn(ParseNode $n) => $o->setIsValid($n->getBooleanValue()),
            'lineType' => fn(ParseNode $n) => $o->setLineType($n->getEnumValue(PhoneLookup_lineType::class)),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PhoneLookup_location::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets id.
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
     * Gets the modifiedAt property value. Gets or sets modified at.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone lookup result.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('carrier', $this->getCarrier());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isValid', $this->getIsValid());
        $writer->writeEnumValue('lineType', $this->getLineType());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('number', $this->getNumber());
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
     * Sets the carrier property value. Complete carrier metadata reported for this phone number.
     * @param PhoneLookup_carrier|null $value Value to set for the carrier property.
    */
    public function setCarrier(?PhoneLookup_carrier $value): void {
        $this->carrier = $value;
    }

    /**
     * Sets the createdAt property value. Gets or sets created at.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. Gets or sets id.
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
     * Sets the modifiedAt property value. Gets or sets modified at.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone lookup result.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

}
