<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerLeadSourceBreakdown implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $leads The leads property
    */
    private ?int $leads = null;
    
    /**
     * @var float|null $percent The percent property
    */
    private ?float $percent = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * Instantiates a new CustomerLeadSourceBreakdown and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerLeadSourceBreakdown
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerLeadSourceBreakdown {
        return new CustomerLeadSourceBreakdown();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'leads' => fn(ParseNode $n) => $o->setLeads($n->getIntegerValue()),
            'percent' => fn(ParseNode $n) => $o->setPercent($n->getFloatValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
        ];
    }

    /**
     * Gets the leads property value. The leads property
     * @return int|null
    */
    public function getLeads(): ?int {
        return $this->leads;
    }

    /**
     * Gets the percent property value. The percent property
     * @return float|null
    */
    public function getPercent(): ?float {
        return $this->percent;
    }

    /**
     * Gets the source property value. The source property
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
        $writer->writeIntegerValue('leads', $this->getLeads());
        $writer->writeFloatValue('percent', $this->getPercent());
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
     * Sets the leads property value. The leads property
     * @param int|null $value Value to set for the leads property.
    */
    public function setLeads(?int $value): void {
        $this->leads = $value;
    }

    /**
     * Sets the percent property value. The percent property
     * @param float|null $value Value to set for the percent property.
    */
    public function setPercent(?float $value): void {
        $this->percent = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

}
