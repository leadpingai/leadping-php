<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request payload for compliance update.
*/
class ComplianceUpdateRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ComplianceUpdateRequest_compliance|null $compliance The compliance value for this compliance update.
    */
    private ?ComplianceUpdateRequest_compliance $compliance = null;
    
    /**
     * @var string|null $source The source value for this compliance update.
    */
    private ?string $source = null;
    
    /**
     * Instantiates a new ComplianceUpdateRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceUpdateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceUpdateRequest {
        return new ComplianceUpdateRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the compliance property value. The compliance value for this compliance update.
     * @return ComplianceUpdateRequest_compliance|null
    */
    public function getCompliance(): ?ComplianceUpdateRequest_compliance {
        return $this->compliance;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compliance' => fn(ParseNode $n) => $o->setCompliance($n->getObjectValue([ComplianceUpdateRequest_compliance::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
        ];
    }

    /**
     * Gets the source property value. The source value for this compliance update.
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
        $writer->writeObjectValue('compliance', $this->getCompliance());
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
     * Sets the compliance property value. The compliance value for this compliance update.
     * @param ComplianceUpdateRequest_compliance|null $value Value to set for the compliance property.
    */
    public function setCompliance(?ComplianceUpdateRequest_compliance $value): void {
        $this->compliance = $value;
    }

    /**
     * Sets the source property value. The source value for this compliance update.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

}
