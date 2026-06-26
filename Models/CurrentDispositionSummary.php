<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Summary schema for Leadping API current disposition summary data used in dashboards and reports.
*/
class CurrentDispositionSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CurrentDispositionSummary_category|null $category Controlled disposition categories used for reporting, automation, and analytics.
    */
    private ?CurrentDispositionSummary_category $category = null;
    
    /**
     * @var DateTime|null $changedAt UTC timestamp when the disposition last changed.
    */
    private ?DateTime $changedAt = null;
    
    /**
     * @var string|null $changedByAutomationId Automation ID that last changed the disposition.
    */
    private ?string $changedByAutomationId = null;
    
    /**
     * @var string|null $changedByUserId User ID of the person who last changed the disposition.
    */
    private ?string $changedByUserId = null;
    
    /**
     * @var string|null $displayName Human-readable display name shown for this current disposition summary.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this current disposition summary.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $outcome Current disposition outcome assigned to the lead.
    */
    private ?string $outcome = null;
    
    /**
     * @var CurrentDispositionSummary_source|null $source Known sources that can change a lead's current disposition.
    */
    private ?CurrentDispositionSummary_source $source = null;
    
    /**
     * Instantiates a new CurrentDispositionSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CurrentDispositionSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CurrentDispositionSummary {
        return new CurrentDispositionSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. Controlled disposition categories used for reporting, automation, and analytics.
     * @return CurrentDispositionSummary_category|null
    */
    public function getCategory(): ?CurrentDispositionSummary_category {
        return $this->category;
    }

    /**
     * Gets the changedAt property value. UTC timestamp when the disposition last changed.
     * @return DateTime|null
    */
    public function getChangedAt(): ?DateTime {
        return $this->changedAt;
    }

    /**
     * Gets the changedByAutomationId property value. Automation ID that last changed the disposition.
     * @return string|null
    */
    public function getChangedByAutomationId(): ?string {
        return $this->changedByAutomationId;
    }

    /**
     * Gets the changedByUserId property value. User ID of the person who last changed the disposition.
     * @return string|null
    */
    public function getChangedByUserId(): ?string {
        return $this->changedByUserId;
    }

    /**
     * Gets the displayName property value. Human-readable display name shown for this current disposition summary.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(CurrentDispositionSummary_category::class)),
            'changedAt' => fn(ParseNode $n) => $o->setChangedAt($n->getDateTimeValue()),
            'changedByAutomationId' => fn(ParseNode $n) => $o->setChangedByAutomationId($n->getStringValue()),
            'changedByUserId' => fn(ParseNode $n) => $o->setChangedByUserId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'outcome' => fn(ParseNode $n) => $o->setOutcome($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(CurrentDispositionSummary_source::class)),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this current disposition summary.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the outcome property value. Current disposition outcome assigned to the lead.
     * @return string|null
    */
    public function getOutcome(): ?string {
        return $this->outcome;
    }

    /**
     * Gets the source property value. Known sources that can change a lead's current disposition.
     * @return CurrentDispositionSummary_source|null
    */
    public function getSource(): ?CurrentDispositionSummary_source {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('changedAt', $this->getChangedAt());
        $writer->writeStringValue('changedByAutomationId', $this->getChangedByAutomationId());
        $writer->writeStringValue('changedByUserId', $this->getChangedByUserId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('outcome', $this->getOutcome());
        $writer->writeEnumValue('source', $this->getSource());
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
     * Sets the category property value. Controlled disposition categories used for reporting, automation, and analytics.
     * @param CurrentDispositionSummary_category|null $value Value to set for the category property.
    */
    public function setCategory(?CurrentDispositionSummary_category $value): void {
        $this->category = $value;
    }

    /**
     * Sets the changedAt property value. UTC timestamp when the disposition last changed.
     * @param DateTime|null $value Value to set for the changedAt property.
    */
    public function setChangedAt(?DateTime $value): void {
        $this->changedAt = $value;
    }

    /**
     * Sets the changedByAutomationId property value. Automation ID that last changed the disposition.
     * @param string|null $value Value to set for the changedByAutomationId property.
    */
    public function setChangedByAutomationId(?string $value): void {
        $this->changedByAutomationId = $value;
    }

    /**
     * Sets the changedByUserId property value. User ID of the person who last changed the disposition.
     * @param string|null $value Value to set for the changedByUserId property.
    */
    public function setChangedByUserId(?string $value): void {
        $this->changedByUserId = $value;
    }

    /**
     * Sets the displayName property value. Human-readable display name shown for this current disposition summary.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this current disposition summary.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the outcome property value. Current disposition outcome assigned to the lead.
     * @param string|null $value Value to set for the outcome property.
    */
    public function setOutcome(?string $value): void {
        $this->outcome = $value;
    }

    /**
     * Sets the source property value. Known sources that can change a lead's current disposition.
     * @param CurrentDispositionSummary_source|null $value Value to set for the source property.
    */
    public function setSource(?CurrentDispositionSummary_source $value): void {
        $this->source = $value;
    }

}
