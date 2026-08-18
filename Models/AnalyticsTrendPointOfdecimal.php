<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents analytics trend point data exposed by Leadping analytics.
*/
class AnalyticsTrendPointOfdecimal implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $endAt Date and time when this Leadping analytics trend point was end.
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var string|null $label Human-readable label for this Leadping analytics trend point.
    */
    private ?string $label = null;
    
    /**
     * @var DateTime|null $startAt Date and time when this Leadping analytics trend point was start.
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var float|null $value Value associated with this Leadping analytics trend point.
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new AnalyticsTrendPointOfdecimal and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsTrendPointOfdecimal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsTrendPointOfdecimal {
        return new AnalyticsTrendPointOfdecimal();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the endAt property value. Date and time when this Leadping analytics trend point was end.
     * @return DateTime|null
    */
    public function getEndAt(): ?DateTime {
        return $this->endAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endAt' => fn(ParseNode $n) => $o->setEndAt($n->getDateTimeValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ];
    }

    /**
     * Gets the label property value. Human-readable label for this Leadping analytics trend point.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the startAt property value. Date and time when this Leadping analytics trend point was start.
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the value property value. Value associated with this Leadping analytics trend point.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('endAt', $this->getEndAt());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeFloatValue('value', $this->getValue());
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
     * Sets the endAt property value. Date and time when this Leadping analytics trend point was end.
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the label property value. Human-readable label for this Leadping analytics trend point.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the startAt property value. Date and time when this Leadping analytics trend point was start.
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the value property value. Value associated with this Leadping analytics trend point.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->value = $value;
    }

}
