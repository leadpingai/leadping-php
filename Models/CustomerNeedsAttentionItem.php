<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerNeedsAttentionItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionHref The actionHref property
    */
    private ?string $actionHref = null;
    
    /**
     * @var string|null $actionText The actionText property
    */
    private ?string $actionText = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $detail The detail property
    */
    private ?string $detail = null;
    
    /**
     * @var string|null $severity The severity property
    */
    private ?string $severity = null;
    
    /**
     * @var string|null $title The title property
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
     * Gets the actionHref property value. The actionHref property
     * @return string|null
    */
    public function getActionHref(): ?string {
        return $this->actionHref;
    }

    /**
     * Gets the actionText property value. The actionText property
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
            'actionText' => fn(ParseNode $n) => $o->setActionText($n->getStringValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the severity property value. The severity property
     * @return string|null
    */
    public function getSeverity(): ?string {
        return $this->severity;
    }

    /**
     * Gets the title property value. The title property
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
     * Sets the actionHref property value. The actionHref property
     * @param string|null $value Value to set for the actionHref property.
    */
    public function setActionHref(?string $value): void {
        $this->actionHref = $value;
    }

    /**
     * Sets the actionText property value. The actionText property
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
     * Sets the detail property value. The detail property
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the severity property value. The severity property
     * @param string|null $value Value to set for the severity property.
    */
    public function setSeverity(?string $value): void {
        $this->severity = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
