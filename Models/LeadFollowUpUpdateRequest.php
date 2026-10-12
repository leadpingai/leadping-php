<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Completes or reschedules exactly the follow-up version the operator viewed.
*/
class LeadFollowUpUpdateRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $dueAt The new time, or null to complete the follow-up.
    */
    private ?DateTime $dueAt = null;
    
    /**
     * @var int|null $expectedRevision The expectedRevision property
    */
    private ?int $expectedRevision = null;
    
    /**
     * @var string|null $expectedStatusId The expectedStatusId property
    */
    private ?string $expectedStatusId = null;
    
    /**
     * Instantiates a new LeadFollowUpUpdateRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadFollowUpUpdateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadFollowUpUpdateRequest {
        return new LeadFollowUpUpdateRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dueAt property value. The new time, or null to complete the follow-up.
     * @return DateTime|null
    */
    public function getDueAt(): ?DateTime {
        return $this->dueAt;
    }

    /**
     * Gets the expectedRevision property value. The expectedRevision property
     * @return int|null
    */
    public function getExpectedRevision(): ?int {
        return $this->expectedRevision;
    }

    /**
     * Gets the expectedStatusId property value. The expectedStatusId property
     * @return string|null
    */
    public function getExpectedStatusId(): ?string {
        return $this->expectedStatusId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dueAt' => fn(ParseNode $n) => $o->setDueAt($n->getDateTimeValue()),
            'expectedRevision' => fn(ParseNode $n) => $o->setExpectedRevision($n->getIntegerValue()),
            'expectedStatusId' => fn(ParseNode $n) => $o->setExpectedStatusId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('dueAt', $this->getDueAt());
        $writer->writeIntegerValue('expectedRevision', $this->getExpectedRevision());
        $writer->writeStringValue('expectedStatusId', $this->getExpectedStatusId());
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
     * Sets the dueAt property value. The new time, or null to complete the follow-up.
     * @param DateTime|null $value Value to set for the dueAt property.
    */
    public function setDueAt(?DateTime $value): void {
        $this->dueAt = $value;
    }

    /**
     * Sets the expectedRevision property value. The expectedRevision property
     * @param int|null $value Value to set for the expectedRevision property.
    */
    public function setExpectedRevision(?int $value): void {
        $this->expectedRevision = $value;
    }

    /**
     * Sets the expectedStatusId property value. The expectedStatusId property
     * @param string|null $value Value to set for the expectedStatusId property.
    */
    public function setExpectedStatusId(?string $value): void {
        $this->expectedStatusId = $value;
    }

}
