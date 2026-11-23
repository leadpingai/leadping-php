<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Active leads in the current organization, optionally limited to one assignee, as of the selection time.
*/
class AutomationLeadAudience implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $assignedToUserId The assignedToUserId property
    */
    private ?string $assignedToUserId = null;
    
    /**
     * @var int|null $count The count property
    */
    private ?int $count = null;
    
    /**
     * @var bool|null $includeDemo The includeDemo property
    */
    private ?bool $includeDemo = null;
    
    /**
     * @var string|null $organizationId The organizationId property
    */
    private ?string $organizationId = null;
    
    /**
     * @var DateTime|null $selectedAt The selectedAt property
    */
    private ?DateTime $selectedAt = null;
    
    /**
     * Instantiates a new AutomationLeadAudience and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationLeadAudience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationLeadAudience {
        return new AutomationLeadAudience();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedToUserId property value. The assignedToUserId property
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->assignedToUserId;
    }

    /**
     * Gets the count property value. The count property
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedToUserId' => fn(ParseNode $n) => $o->setAssignedToUserId($n->getStringValue()),
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'includeDemo' => fn(ParseNode $n) => $o->setIncludeDemo($n->getBooleanValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'selectedAt' => fn(ParseNode $n) => $o->setSelectedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the includeDemo property value. The includeDemo property
     * @return bool|null
    */
    public function getIncludeDemo(): ?bool {
        return $this->includeDemo;
    }

    /**
     * Gets the organizationId property value. The organizationId property
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the selectedAt property value. The selectedAt property
     * @return DateTime|null
    */
    public function getSelectedAt(): ?DateTime {
        return $this->selectedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedToUserId', $this->getAssignedToUserId());
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeBooleanValue('includeDemo', $this->getIncludeDemo());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeDateTimeValue('selectedAt', $this->getSelectedAt());
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
     * Sets the assignedToUserId property value. The assignedToUserId property
     * @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value): void {
        $this->assignedToUserId = $value;
    }

    /**
     * Sets the count property value. The count property
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->count = $value;
    }

    /**
     * Sets the includeDemo property value. The includeDemo property
     * @param bool|null $value Value to set for the includeDemo property.
    */
    public function setIncludeDemo(?bool $value): void {
        $this->includeDemo = $value;
    }

    /**
     * Sets the organizationId property value. The organizationId property
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the selectedAt property value. The selectedAt property
     * @param DateTime|null $value Value to set for the selectedAt property.
    */
    public function setSelectedAt(?DateTime $value): void {
        $this->selectedAt = $value;
    }

}
