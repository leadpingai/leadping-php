<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnalyticsTrendPointOfint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $endAt The endAt property
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var DateTime|null $startAt The startAt property
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var int|null $value The value property
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new AnalyticsTrendPointOfint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsTrendPointOfint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsTrendPointOfint {
        return new AnalyticsTrendPointOfint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the endAt property value. The endAt property
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
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the startAt property value. The startAt property
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the value property value. The value property
     * @return int|null
    */
    public function getValue(): ?int {
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
        $writer->writeIntegerValue('value', $this->getValue());
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
     * Sets the endAt property value. The endAt property
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the startAt property value. The startAt property
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->value = $value;
    }

}
