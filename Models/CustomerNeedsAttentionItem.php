<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents customer needs attention item data exposed by Leadping analytics.
*/
class CustomerNeedsAttentionItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionHref Relative URL for the recommended follow-up action.
    */
    private ?string $actionHref = null;
    
    /**
     * @var string|null $actionText Action text associated with this Leadping customer needs attention item.
    */
    private ?string $actionText = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $detail Human-readable detail for this Leadping customer needs attention item.
    */
    private ?string $detail = null;
    
    /**
     * @var string|null $severity Severity associated with this Leadping customer needs attention item.
    */
    private ?string $severity = null;
    
    /**
     * @var string|null $title Human-readable title for this Leadping customer needs attention item.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new CustomerNeedsAttentionItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerNeedsAttentionItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerNeedsAttentionItem {
        return new CustomerNeedsAttentionItem();
    }

    /**
     * Gets the actionHref property value. Relative URL for the recommended follow-up action.
     * @return string|null
    */
    public function getActionHref(): ?string {
        return $this->actionHref;
    }

    /**
     * Gets the actionText property value. Action text associated with this Leadping customer needs attention item.
     * @return string|null
    */
    public function getActionText(): ?string {
        return $this->actionText;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. Human-readable detail for this Leadping customer needs attention item.
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
            'actionText' => fn(ParseNode $n) => $o->setActionText($n->getStringValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the severity property value. Severity associated with this Leadping customer needs attention item.
     * @return string|null
    */
    public function getSeverity(): ?string {
        return $this->severity;
    }

    /**
     * Gets the title property value. Human-readable title for this Leadping customer needs attention item.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionHref', $this->getActionHref());
        $writer->writeStringValue('actionText', $this->getActionText());
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeStringValue('severity', $this->getSeverity());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionHref property value. Relative URL for the recommended follow-up action.
     * @param string|null $value Value to set for the actionHref property.
    */
    public function setActionHref(?string $value): void {
        $this->actionHref = $value;
    }

    /**
     * Sets the actionText property value. Action text associated with this Leadping customer needs attention item.
     * @param string|null $value Value to set for the actionText property.
    */
    public function setActionText(?string $value): void {
        $this->actionText = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the detail property value. Human-readable detail for this Leadping customer needs attention item.
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the severity property value. Severity associated with this Leadping customer needs attention item.
     * @param string|null $value Value to set for the severity property.
    */
    public function setSeverity(?string $value): void {
        $this->severity = $value;
    }

    /**
     * Sets the title property value. Human-readable title for this Leadping customer needs attention item.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
