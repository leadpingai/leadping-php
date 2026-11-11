<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Current, visible follow-up work for a lead, independent of stale historical dates.
*/
class LeadFollowUpResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $leadId Identifier of the lead requiring follow-up.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadName Display name of the lead requiring follow-up.
    */
    private ?string $leadName = null;
    
    /**
     * @var CurrentLeadStatusSummary|null $status Summary schema for Leadping API current lead status change summary data used in dashboards and reports.
    */
    private ?CurrentLeadStatusSummary $status = null;
    
    /**
     * Instantiates a new LeadFollowUpResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadFollowUpResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadFollowUpResponse {
        return new LeadFollowUpResponse();
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
            'leadName' => fn(ParseNode $n) => $o->setLeadName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([CurrentLeadStatusSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the leadId property value. Identifier of the lead requiring follow-up.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadName property value. Display name of the lead requiring follow-up.
     * @return string|null
    */
    public function getLeadName(): ?string {
        return $this->leadName;
    }

    /**
     * Gets the status property value. Summary schema for Leadping API current lead status change summary data used in dashboards and reports.
     * @return CurrentLeadStatusSummary|null
    */
    public function getStatus(): ?CurrentLeadStatusSummary {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadName', $this->getLeadName());
        $writer->writeObjectValue('status', $this->getStatus());
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
     * Sets the leadId property value. Identifier of the lead requiring follow-up.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadName property value. Display name of the lead requiring follow-up.
     * @param string|null $value Value to set for the leadName property.
    */
    public function setLeadName(?string $value): void {
        $this->leadName = $value;
    }

    /**
     * Sets the status property value. Summary schema for Leadping API current lead status change summary data used in dashboards and reports.
     * @param CurrentLeadStatusSummary|null $value Value to set for the status property.
    */
    public function setStatus(?CurrentLeadStatusSummary $value): void {
        $this->status = $value;
    }

}
