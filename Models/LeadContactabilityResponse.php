<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Current call and text eligibility for a lead under the applicable contact rules.
*/
class LeadContactabilityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $canCall Whether the lead can currently be called after evaluating applicable contact hours, suppression, and consent rules.
    */
    private ?bool $canCall = null;
    
    /**
     * @var bool|null $canText Whether the lead can currently be texted after evaluating applicable contact hours, suppression, and consent rules.
    */
    private ?bool $canText = null;
    
    /**
     * Instantiates a new LeadContactabilityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadContactabilityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadContactabilityResponse {
        return new LeadContactabilityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the canCall property value. Whether the lead can currently be called after evaluating applicable contact hours, suppression, and consent rules.
     * @return bool|null
    */
    public function getCanCall(): ?bool {
        return $this->canCall;
    }

    /**
     * Gets the canText property value. Whether the lead can currently be texted after evaluating applicable contact hours, suppression, and consent rules.
     * @return bool|null
    */
    public function getCanText(): ?bool {
        return $this->canText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'canCall' => fn(ParseNode $n) => $o->setCanCall($n->getBooleanValue()),
            'canText' => fn(ParseNode $n) => $o->setCanText($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('canCall', $this->getCanCall());
        $writer->writeBooleanValue('canText', $this->getCanText());
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
     * Sets the canCall property value. Whether the lead can currently be called after evaluating applicable contact hours, suppression, and consent rules.
     * @param bool|null $value Value to set for the canCall property.
    */
    public function setCanCall(?bool $value): void {
        $this->canCall = $value;
    }

    /**
     * Sets the canText property value. Whether the lead can currently be texted after evaluating applicable contact hours, suppression, and consent rules.
     * @param bool|null $value Value to set for the canText property.
    */
    public function setCanText(?bool $value): void {
        $this->canText = $value;
    }

}
