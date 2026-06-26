<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Response schema for the Leadping API automation preview response returned to authenticated clients.
*/
class AutomationPreviewResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<AutomationPreviewActionResult>|null $actionResults Action preview results showing what the automation would do.
    */
    private ?array $actionResults = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AutomationPreviewConditionResult>|null $conditionResults Condition evaluation results returned by the automation preview.
    */
    private ?array $conditionResults = null;
    
    /**
     * @var AutomationPreviewResponse_samplePayload|null $samplePayload Example payload clients can use to understand this automation preview response format.
    */
    private ?AutomationPreviewResponse_samplePayload $samplePayload = null;
    
    /**
     * @var string|null $triggerType Automation trigger type that starts the workflow.
    */
    private ?string $triggerType = null;
    
    /**
     * @var AutomationValidationResult|null $validation Validation result returned for the automation configuration.
    */
    private ?AutomationValidationResult $validation = null;
    
    /**
     * @var array<string>|null $warnings Warnings returned for this automation preview response that do not necessarily block processing.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new AutomationPreviewResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationPreviewResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationPreviewResponse {
        return new AutomationPreviewResponse();
    }

    /**
     * Gets the actionResults property value. Action preview results showing what the automation would do.
     * @return array<AutomationPreviewActionResult>|null
    */
    public function getActionResults(): ?array {
        return $this->actionResults;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionResults property value. Condition evaluation results returned by the automation preview.
     * @return array<AutomationPreviewConditionResult>|null
    */
    public function getConditionResults(): ?array {
        return $this->conditionResults;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionResults' => fn(ParseNode $n) => $o->setActionResults($n->getCollectionOfObjectValues([AutomationPreviewActionResult::class, 'createFromDiscriminatorValue'])),
            'conditionResults' => fn(ParseNode $n) => $o->setConditionResults($n->getCollectionOfObjectValues([AutomationPreviewConditionResult::class, 'createFromDiscriminatorValue'])),
            'samplePayload' => fn(ParseNode $n) => $o->setSamplePayload($n->getObjectValue([AutomationPreviewResponse_samplePayload::class, 'createFromDiscriminatorValue'])),
            'triggerType' => fn(ParseNode $n) => $o->setTriggerType($n->getStringValue()),
            'validation' => fn(ParseNode $n) => $o->setValidation($n->getObjectValue([AutomationValidationResult::class, 'createFromDiscriminatorValue'])),
            'warnings' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWarnings($val);
            },
        ];
    }

    /**
     * Gets the samplePayload property value. Example payload clients can use to understand this automation preview response format.
     * @return AutomationPreviewResponse_samplePayload|null
    */
    public function getSamplePayload(): ?AutomationPreviewResponse_samplePayload {
        return $this->samplePayload;
    }

    /**
     * Gets the triggerType property value. Automation trigger type that starts the workflow.
     * @return string|null
    */
    public function getTriggerType(): ?string {
        return $this->triggerType;
    }

    /**
     * Gets the validation property value. Validation result returned for the automation configuration.
     * @return AutomationValidationResult|null
    */
    public function getValidation(): ?AutomationValidationResult {
        return $this->validation;
    }

    /**
     * Gets the warnings property value. Warnings returned for this automation preview response that do not necessarily block processing.
     * @return array<string>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actionResults', $this->getActionResults());
        $writer->writeCollectionOfObjectValues('conditionResults', $this->getConditionResults());
        $writer->writeObjectValue('samplePayload', $this->getSamplePayload());
        $writer->writeStringValue('triggerType', $this->getTriggerType());
        $writer->writeObjectValue('validation', $this->getValidation());
        $writer->writeCollectionOfPrimitiveValues('warnings', $this->getWarnings());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionResults property value. Action preview results showing what the automation would do.
     * @param array<AutomationPreviewActionResult>|null $value Value to set for the actionResults property.
    */
    public function setActionResults(?array $value): void {
        $this->actionResults = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the conditionResults property value. Condition evaluation results returned by the automation preview.
     * @param array<AutomationPreviewConditionResult>|null $value Value to set for the conditionResults property.
    */
    public function setConditionResults(?array $value): void {
        $this->conditionResults = $value;
    }

    /**
     * Sets the samplePayload property value. Example payload clients can use to understand this automation preview response format.
     * @param AutomationPreviewResponse_samplePayload|null $value Value to set for the samplePayload property.
    */
    public function setSamplePayload(?AutomationPreviewResponse_samplePayload $value): void {
        $this->samplePayload = $value;
    }

    /**
     * Sets the triggerType property value. Automation trigger type that starts the workflow.
     * @param string|null $value Value to set for the triggerType property.
    */
    public function setTriggerType(?string $value): void {
        $this->triggerType = $value;
    }

    /**
     * Sets the validation property value. Validation result returned for the automation configuration.
     * @param AutomationValidationResult|null $value Value to set for the validation property.
    */
    public function setValidation(?AutomationValidationResult $value): void {
        $this->validation = $value;
    }

    /**
     * Sets the warnings property value. Warnings returned for this automation preview response that do not necessarily block processing.
     * @param array<string>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
