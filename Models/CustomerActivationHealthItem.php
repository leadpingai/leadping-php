<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerActivationHealthItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionHref The actionHref property
    */
    private ?string $actionHref = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $detail The detail property
    */
    private ?string $detail = null;
    
    /**
     * @var string|null $key The key property
    */
    private ?string $key = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new CustomerActivationHealthItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerActivationHealthItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerActivationHealthItem {
        return new CustomerActivationHealthItem();
    }

    /**
     * Gets the actionHref property value. The actionHref property
     * @return string|null
    */
    public function getActionHref(): ?string {
        return $this->actionHref;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. The detail property
     * @return string|null
    */
    public function getDetail(): ?string {
        return $this->detail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionHref' => fn(ParseNode $n) => $o->setActionHref($n->getStringValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The key property
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionHref', $this->getActionHref());
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionHref property value. The actionHref property
     * @param string|null $value Value to set for the actionHref property.
    */
    public function setActionHref(?string $value): void {
        $this->actionHref = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the detail property value. The detail property
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the key property value. The key property
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
