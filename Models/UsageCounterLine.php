<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing a named usage counter shown in usage summaries.
*/
class UsageCounterLine implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $adminOnly Whether this usage counter is only shown to admins.
    */
    private ?bool $adminOnly = null;
    
    /**
     * @var string|null $key The stable key for this usage counter.
    */
    private ?string $key = null;
    
    /**
     * @var string|null $label The human-readable label for this usage counter.
    */
    private ?string $label = null;
    
    /**
     * @var int|null $sortOrder The display order for this usage counter.
    */
    private ?int $sortOrder = null;
    
    /**
     * @var string|null $unit The unit label for this usage counter.
    */
    private ?string $unit = null;
    
    /**
     * @var float|null $value The numeric value for this usage counter.
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new UsageCounterLine and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageCounterLine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageCounterLine {
        return new UsageCounterLine();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adminOnly property value. Whether this usage counter is only shown to admins.
     * @return bool|null
    */
    public function getAdminOnly(): ?bool {
        return $this->adminOnly;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminOnly' => fn(ParseNode $n) => $o->setAdminOnly($n->getBooleanValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ];
    }

    /**
     * Gets the key property value. The stable key for this usage counter.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the label property value. The human-readable label for this usage counter.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the sortOrder property value. The display order for this usage counter.
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sortOrder;
    }

    /**
     * Gets the unit property value. The unit label for this usage counter.
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. The numeric value for this usage counter.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('adminOnly', $this->getAdminOnly());
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeIntegerValue('sortOrder', $this->getSortOrder());
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeFloatValue('value', $this->getValue());
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
     * Sets the adminOnly property value. Whether this usage counter is only shown to admins.
     * @param bool|null $value Value to set for the adminOnly property.
    */
    public function setAdminOnly(?bool $value): void {
        $this->adminOnly = $value;
    }

    /**
     * Sets the key property value. The stable key for this usage counter.
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

    /**
     * Sets the label property value. The human-readable label for this usage counter.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the sortOrder property value. The display order for this usage counter.
     * @param int|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?int $value): void {
        $this->sortOrder = $value;
    }

    /**
     * Sets the unit property value. The unit label for this usage counter.
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. The numeric value for this usage counter.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->value = $value;
    }

}
