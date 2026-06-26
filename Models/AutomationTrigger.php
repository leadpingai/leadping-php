<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for automation trigger data.
*/
class AutomationTrigger implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $displayName Human-readable display name shown for this automation trigger.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this automation trigger.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether this automation trigger is active and allowed to run.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var AutomationTrigger_settings|null $settings Key-value settings that configure how this automation trigger behaves.
    */
    private ?AutomationTrigger_settings $settings = null;
    
    /**
     * @var string|null $type Type classification used to route and interpret this automation trigger in the Leadping API.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new AutomationTrigger and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationTrigger {
        return new AutomationTrigger();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Human-readable display name shown for this automation trigger.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([AutomationTrigger_settings::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this automation trigger.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEnabled property value. Indicates whether this automation trigger is active and allowed to run.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the settings property value. Key-value settings that configure how this automation trigger behaves.
     * @return AutomationTrigger_settings|null
    */
    public function getSettings(): ?AutomationTrigger_settings {
        return $this->settings;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this automation trigger in the Leadping API.
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
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
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
     * Sets the displayName property value. Human-readable display name shown for this automation trigger.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this automation trigger.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether this automation trigger is active and allowed to run.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the settings property value. Key-value settings that configure how this automation trigger behaves.
     * @param AutomationTrigger_settings|null $value Value to set for the settings property.
    */
    public function setSettings(?AutomationTrigger_settings $value): void {
        $this->settings = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this automation trigger in the Leadping API.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
