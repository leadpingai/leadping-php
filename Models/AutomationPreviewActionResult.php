<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Result schema for the Leadping API automation preview action result returned by lookup and validation endpoints.
*/
class AutomationPreviewActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionId Automation action ID executed or evaluated by this automation preview action result.
    */
    private ?string $actionId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $renderedOutput Rendered preview output produced by this automation preview action result.
    */
    private ?string $renderedOutput = null;
    
    /**
     * @var string|null $summary Short human-readable summary of this automation preview action result for lists, timelines, and notifications.
    */
    private ?string $summary = null;
    
    /**
     * @var array<string>|null $warnings Warnings returned for this automation preview action result that do not necessarily block processing.
    */
    private ?array $warnings = null;
    
    /**
     * @var bool|null $wouldHaveSideEffect Indicates whether the automation preview would perform an external action if executed live.
    */
    private ?bool $wouldHaveSideEffect = null;
    
    /**
     * Instantiates a new AutomationPreviewActionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationPreviewActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationPreviewActionResult {
        return new AutomationPreviewActionResult();
    }

    /**
     * Gets the actionId property value. Automation action ID executed or evaluated by this automation preview action result.
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
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
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'renderedOutput' => fn(ParseNode $n) => $o->setRenderedOutput($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
            'warnings' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWarnings($val);
            },
            'wouldHaveSideEffect' => fn(ParseNode $n) => $o->setWouldHaveSideEffect($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the renderedOutput property value. Rendered preview output produced by this automation preview action result.
     * @return string|null
    */
    public function getRenderedOutput(): ?string {
        return $this->renderedOutput;
    }

    /**
     * Gets the summary property value. Short human-readable summary of this automation preview action result for lists, timelines, and notifications.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Gets the warnings property value. Warnings returned for this automation preview action result that do not necessarily block processing.
     * @return array<string>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Gets the wouldHaveSideEffect property value. Indicates whether the automation preview would perform an external action if executed live.
     * @return bool|null
    */
    public function getWouldHaveSideEffect(): ?bool {
        return $this->wouldHaveSideEffect;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeStringValue('renderedOutput', $this->getRenderedOutput());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeCollectionOfPrimitiveValues('warnings', $this->getWarnings());
        $writer->writeBooleanValue('wouldHaveSideEffect', $this->getWouldHaveSideEffect());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionId property value. Automation action ID executed or evaluated by this automation preview action result.
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->actionId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the renderedOutput property value. Rendered preview output produced by this automation preview action result.
     * @param string|null $value Value to set for the renderedOutput property.
    */
    public function setRenderedOutput(?string $value): void {
        $this->renderedOutput = $value;
    }

    /**
     * Sets the summary property value. Short human-readable summary of this automation preview action result for lists, timelines, and notifications.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
    }

    /**
     * Sets the warnings property value. Warnings returned for this automation preview action result that do not necessarily block processing.
     * @param array<string>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

    /**
     * Sets the wouldHaveSideEffect property value. Indicates whether the automation preview would perform an external action if executed live.
     * @param bool|null $value Value to set for the wouldHaveSideEffect property.
    */
    public function setWouldHaveSideEffect(?bool $value): void {
        $this->wouldHaveSideEffect = $value;
    }

}
