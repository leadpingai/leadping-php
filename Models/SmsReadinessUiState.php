<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing SMS readiness UI state data used by Leadping API contracts.
*/
class SmsReadinessUiState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The human-readable description of this SMS readiness UI state.
    */
    private ?string $description = null;
    
    /**
     * @var SmsReadinessState|null $label The human-readable label shown for this SMS readiness UI state.
    */
    private ?SmsReadinessState $label = null;
    
    /**
     * @var string|null $tone The tone value for this SMS readiness UI state.
    */
    private ?string $tone = null;
    
    /**
     * Instantiates a new SmsReadinessUiState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsReadinessUiState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsReadinessUiState {
        return new SmsReadinessUiState();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The human-readable description of this SMS readiness UI state.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getEnumValue(SmsReadinessState::class)),
            'tone' => fn(ParseNode $n) => $o->setTone($n->getStringValue()),
        ];
    }

    /**
     * Gets the label property value. The human-readable label shown for this SMS readiness UI state.
     * @return SmsReadinessState|null
    */
    public function getLabel(): ?SmsReadinessState {
        return $this->label;
    }

    /**
     * Gets the tone property value. The tone value for this SMS readiness UI state.
     * @return string|null
    */
    public function getTone(): ?string {
        return $this->tone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('label', $this->getLabel());
        $writer->writeStringValue('tone', $this->getTone());
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
     * Sets the description property value. The human-readable description of this SMS readiness UI state.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the label property value. The human-readable label shown for this SMS readiness UI state.
     * @param SmsReadinessState|null $value Value to set for the label property.
    */
    public function setLabel(?SmsReadinessState $value): void {
        $this->label = $value;
    }

    /**
     * Sets the tone property value. The tone value for this SMS readiness UI state.
     * @param string|null $value Value to set for the tone property.
    */
    public function setTone(?string $value): void {
        $this->tone = $value;
    }

}
