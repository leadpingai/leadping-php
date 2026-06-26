<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API feedback admin update request, including the fields clients can send.
*/
class FeedbackAdminUpdateRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adminNote Internal admin note used to track feedback review or resolution.
    */
    private ?string $adminNote = null;
    
    /**
     * @var string|null $area Product area or app section connected to this feedback admin update request.
    */
    private ?string $area = null;
    
    /**
     * @var string|null $duplicateOfFeedbackItemId Feedback item ID that this item duplicates, when applicable.
    */
    private ?string $duplicateOfFeedbackItemId = null;
    
    /**
     * @var string|null $externalIssueUrl External issue tracker URL linked to this feedback item.
    */
    private ?string $externalIssueUrl = null;
    
    /**
     * @var FeedbackAdminUpdateRequest_status|null $status Defines admin triage statuses for durable product feedback.
    */
    private ?FeedbackAdminUpdateRequest_status $status = null;
    
    /**
     * @var FeedbackAdminUpdateRequest_type|null $type Defines the type of product feedback submitted from inside Leadping.
    */
    private ?FeedbackAdminUpdateRequest_type $type = null;
    
    /**
     * Instantiates a new FeedbackAdminUpdateRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackAdminUpdateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackAdminUpdateRequest {
        return new FeedbackAdminUpdateRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adminNote property value. Internal admin note used to track feedback review or resolution.
     * @return string|null
    */
    public function getAdminNote(): ?string {
        return $this->adminNote;
    }

    /**
     * Gets the area property value. Product area or app section connected to this feedback admin update request.
     * @return string|null
    */
    public function getArea(): ?string {
        return $this->area;
    }

    /**
     * Gets the duplicateOfFeedbackItemId property value. Feedback item ID that this item duplicates, when applicable.
     * @return string|null
    */
    public function getDuplicateOfFeedbackItemId(): ?string {
        return $this->duplicateOfFeedbackItemId;
    }

    /**
     * Gets the externalIssueUrl property value. External issue tracker URL linked to this feedback item.
     * @return string|null
    */
    public function getExternalIssueUrl(): ?string {
        return $this->externalIssueUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminNote' => fn(ParseNode $n) => $o->setAdminNote($n->getStringValue()),
            'area' => fn(ParseNode $n) => $o->setArea($n->getStringValue()),
            'duplicateOfFeedbackItemId' => fn(ParseNode $n) => $o->setDuplicateOfFeedbackItemId($n->getStringValue()),
            'externalIssueUrl' => fn(ParseNode $n) => $o->setExternalIssueUrl($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FeedbackAdminUpdateRequest_status::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(FeedbackAdminUpdateRequest_type::class)),
        ];
    }

    /**
     * Gets the status property value. Defines admin triage statuses for durable product feedback.
     * @return FeedbackAdminUpdateRequest_status|null
    */
    public function getStatus(): ?FeedbackAdminUpdateRequest_status {
        return $this->status;
    }

    /**
     * Gets the type property value. Defines the type of product feedback submitted from inside Leadping.
     * @return FeedbackAdminUpdateRequest_type|null
    */
    public function getType(): ?FeedbackAdminUpdateRequest_type {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adminNote', $this->getAdminNote());
        $writer->writeStringValue('area', $this->getArea());
        $writer->writeStringValue('duplicateOfFeedbackItemId', $this->getDuplicateOfFeedbackItemId());
        $writer->writeStringValue('externalIssueUrl', $this->getExternalIssueUrl());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the adminNote property value. Internal admin note used to track feedback review or resolution.
     * @param string|null $value Value to set for the adminNote property.
    */
    public function setAdminNote(?string $value): void {
        $this->adminNote = $value;
    }

    /**
     * Sets the area property value. Product area or app section connected to this feedback admin update request.
     * @param string|null $value Value to set for the area property.
    */
    public function setArea(?string $value): void {
        $this->area = $value;
    }

    /**
     * Sets the duplicateOfFeedbackItemId property value. Feedback item ID that this item duplicates, when applicable.
     * @param string|null $value Value to set for the duplicateOfFeedbackItemId property.
    */
    public function setDuplicateOfFeedbackItemId(?string $value): void {
        $this->duplicateOfFeedbackItemId = $value;
    }

    /**
     * Sets the externalIssueUrl property value. External issue tracker URL linked to this feedback item.
     * @param string|null $value Value to set for the externalIssueUrl property.
    */
    public function setExternalIssueUrl(?string $value): void {
        $this->externalIssueUrl = $value;
    }

    /**
     * Sets the status property value. Defines admin triage statuses for durable product feedback.
     * @param FeedbackAdminUpdateRequest_status|null $value Value to set for the status property.
    */
    public function setStatus(?FeedbackAdminUpdateRequest_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. Defines the type of product feedback submitted from inside Leadping.
     * @param FeedbackAdminUpdateRequest_type|null $value Value to set for the type property.
    */
    public function setType(?FeedbackAdminUpdateRequest_type $value): void {
        $this->type = $value;
    }

}
