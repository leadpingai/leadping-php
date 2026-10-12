<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * States whether missing historical evidence can make reported counts incomplete.
*/
class AnalyticsCoverage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $completeFrom The completeFrom property
    */
    private ?DateTime $completeFrom = null;
    
    /**
     * @var string|null $detail The detail property
    */
    private ?string $detail = null;
    
    /**
     * @var bool|null $isPartial The isPartial property
    */
    private ?bool $isPartial = null;
    
    /**
     * Instantiates a new AnalyticsCoverage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsCoverage {
        return new AnalyticsCoverage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completeFrom property value. The completeFrom property
     * @return DateTime|null
    */
    public function getCompleteFrom(): ?DateTime {
        return $this->completeFrom;
    }

    /**
     * Gets the detail property value. The detail property
     * @return string|null
    */
    public function getDetail(): ?string {
        return $this->detail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completeFrom' => fn(ParseNode $n) => $o->setCompleteFrom($n->getDateTimeValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'isPartial' => fn(ParseNode $n) => $o->setIsPartial($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isPartial property value. The isPartial property
     * @return bool|null
    */
    public function getIsPartial(): ?bool {
        return $this->isPartial;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('completeFrom', $this->getCompleteFrom());
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeBooleanValue('isPartial', $this->getIsPartial());
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
     * Sets the completeFrom property value. The completeFrom property
     * @param DateTime|null $value Value to set for the completeFrom property.
    */
    public function setCompleteFrom(?DateTime $value): void {
        $this->completeFrom = $value;
    }

    /**
     * Sets the detail property value. The detail property
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the isPartial property value. The isPartial property
     * @param bool|null $value Value to set for the isPartial property.
    */
    public function setIsPartial(?bool $value): void {
        $this->isPartial = $value;
    }

}
