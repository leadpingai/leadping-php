<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Result schema for the Leadping API automation preview condition result returned by lookup and validation endpoints.
*/
class AutomationPreviewConditionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $conditionId Automation condition ID evaluated by this preview result.
    */
    private ?string $conditionId = null;
    
    /**
     * @var bool|null $passed Indicates whether this automation preview condition result passed the preview or validation check.
    */
    private ?bool $passed = null;
    
    /**
     * @var string|null $summary Short human-readable summary of this automation preview condition result for lists, timelines, and notifications.
    */
    private ?string $summary = null;
    
    /**
     * Instantiates a new AutomationPreviewConditionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationPreviewConditionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationPreviewConditionResult {
        return new AutomationPreviewConditionResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionId property value. Automation condition ID evaluated by this preview result.
     * @return string|null
    */
    public function getConditionId(): ?string {
        return $this->conditionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditionId' => fn(ParseNode $n) => $o->setConditionId($n->getStringValue()),
            'passed' => fn(ParseNode $n) => $o->setPassed($n->getBooleanValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
        ];
    }

    /**
     * Gets the passed property value. Indicates whether this automation preview condition result passed the preview or validation check.
     * @return bool|null
    */
    public function getPassed(): ?bool {
        return $this->passed;
    }

    /**
     * Gets the summary property value. Short human-readable summary of this automation preview condition result for lists, timelines, and notifications.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conditionId', $this->getConditionId());
        $writer->writeBooleanValue('passed', $this->getPassed());
        $writer->writeStringValue('summary', $this->getSummary());
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
     * Sets the conditionId property value. Automation condition ID evaluated by this preview result.
     * @param string|null $value Value to set for the conditionId property.
    */
    public function setConditionId(?string $value): void {
        $this->conditionId = $value;
    }

    /**
     * Sets the passed property value. Indicates whether this automation preview condition result passed the preview or validation check.
     * @param bool|null $value Value to set for the passed property.
    */
    public function setPassed(?bool $value): void {
        $this->passed = $value;
    }

    /**
     * Sets the summary property value. Short human-readable summary of this automation preview condition result for lists, timelines, and notifications.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
    }

}
