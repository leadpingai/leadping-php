<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for automation action data.
*/
class AutomationAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this automation action.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether this automation action is active and allowed to run.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var int|null $order Sort order used to evaluate or display this automation action.
    */
    private ?int $order = null;
    
    /**
     * @var AutomationAction_settings|null $settings Key-value settings that configure how this automation action behaves.
    */
    private ?AutomationAction_settings $settings = null;
    
    /**
     * @var string|null $type Type classification used to route and interpret this automation action in the Leadping API.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new AutomationAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationAction {
        return new AutomationAction();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getIntegerValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([AutomationAction_settings::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this automation action.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEnabled property value. Indicates whether this automation action is active and allowed to run.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the order property value. Sort order used to evaluate or display this automation action.
     * @return int|null
    */
    public function getOrder(): ?int {
        return $this->order;
    }

    /**
     * Gets the settings property value. Key-value settings that configure how this automation action behaves.
     * @return AutomationAction_settings|null
    */
    public function getSettings(): ?AutomationAction_settings {
        return $this->settings;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this automation action in the Leadping API.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeIntegerValue('order', $this->getOrder());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the id property value. Unique Leadping identifier for this automation action.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether this automation action is active and allowed to run.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the order property value. Sort order used to evaluate or display this automation action.
     * @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value): void {
        $this->order = $value;
    }

    /**
     * Sets the settings property value. Key-value settings that configure how this automation action behaves.
     * @param AutomationAction_settings|null $value Value to set for the settings property.
    */
    public function setSettings(?AutomationAction_settings $value): void {
        $this->settings = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this automation action in the Leadping API.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
