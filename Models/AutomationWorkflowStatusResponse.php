<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Automation workflow status collection for a lead.
*/
class AutomationWorkflowStatusResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $leadId The leadId property
    */
    private ?string $leadId = null;
    
    /**
     * @var array<AutomationWorkflowRunResponse>|null $runs The runs property
    */
    private ?array $runs = null;
    
    /**
     * Instantiates a new AutomationWorkflowStatusResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationWorkflowStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationWorkflowStatusResponse {
        return new AutomationWorkflowStatusResponse();
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
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'runs' => fn(ParseNode $n) => $o->setRuns($n->getCollectionOfObjectValues([AutomationWorkflowRunResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the leadId property value. The leadId property
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the runs property value. The runs property
     * @return array<AutomationWorkflowRunResponse>|null
    */
    public function getRuns(): ?array {
        return $this->runs;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeCollectionOfObjectValues('runs', $this->getRuns());
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
     * Sets the leadId property value. The leadId property
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the runs property value. The runs property
     * @param array<AutomationWorkflowRunResponse>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value): void {
        $this->runs = $value;
    }

}
