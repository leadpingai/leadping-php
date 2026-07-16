<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Date and time when this Leadping customer analytics summary was leads comparison.
*/
class AnalyticsComparison implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $current Metric value for the current reporting period.
    */
    private ?float $current = null;
    
    /**
     * @var string|null $direction Direction classification for this Leadping analytics comparison.
    */
    private ?string $direction = null;
    
    /**
     * @var float|null $previous Metric value for the preceding comparison period.
    */
    private ?float $previous = null;
    
    /**
     * Instantiates a new AnalyticsComparison and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsComparison
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsComparison {
        return new AnalyticsComparison();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the current property value. Metric value for the current reporting period.
     * @return float|null
    */
    public function getCurrent(): ?float {
        return $this->current;
    }

    /**
     * Gets the direction property value. Direction classification for this Leadping analytics comparison.
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'current' => fn(ParseNode $n) => $o->setCurrent($n->getFloatValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'previous' => fn(ParseNode $n) => $o->setPrevious($n->getFloatValue()),
        ];
    }

    /**
     * Gets the previous property value. Metric value for the preceding comparison period.
     * @return float|null
    */
    public function getPrevious(): ?float {
        return $this->previous;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('current', $this->getCurrent());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeFloatValue('previous', $this->getPrevious());
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
     * Sets the current property value. Metric value for the current reporting period.
     * @param float|null $value Value to set for the current property.
    */
    public function setCurrent(?float $value): void {
        $this->current = $value;
    }

    /**
     * Sets the direction property value. Direction classification for this Leadping analytics comparison.
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
    }

    /**
     * Sets the previous property value. Metric value for the preceding comparison period.
     * @param float|null $value Value to set for the previous property.
    */
    public function setPrevious(?float $value): void {
        $this->previous = $value;
    }

}
