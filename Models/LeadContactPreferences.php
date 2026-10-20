<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Preferred contact language, channel, and callback windows; does not grant consent.
*/
class LeadContactPreferences implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<LeadCallbackWindow>|null $callbackWindows Preferred callback windows in the contact time zone.
    */
    private ?array $callbackWindows = null;
    
    /**
     * @var LeadContactPreferences_channel|null $channel Supported LeadContactChannel values.
    */
    private ?LeadContactPreferences_channel $channel = null;
    
    /**
     * @var string|null $language Preferred BCP 47 language tag, such as en-US.
    */
    private ?string $language = null;
    
    /**
     * Instantiates a new LeadContactPreferences and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadContactPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadContactPreferences {
        return new LeadContactPreferences();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackWindows property value. Preferred callback windows in the contact time zone.
     * @return array<LeadCallbackWindow>|null
    */
    public function getCallbackWindows(): ?array {
        return $this->callbackWindows;
    }

    /**
     * Gets the channel property value. Supported LeadContactChannel values.
     * @return LeadContactPreferences_channel|null
    */
    public function getChannel(): ?LeadContactPreferences_channel {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callbackWindows' => fn(ParseNode $n) => $o->setCallbackWindows($n->getCollectionOfObjectValues([LeadCallbackWindow::class, 'createFromDiscriminatorValue'])),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(LeadContactPreferences_channel::class)),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
        ];
    }

    /**
     * Gets the language property value. Preferred BCP 47 language tag, such as en-US.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('callbackWindows', $this->getCallbackWindows());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeStringValue('language', $this->getLanguage());
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
     * Sets the callbackWindows property value. Preferred callback windows in the contact time zone.
     * @param array<LeadCallbackWindow>|null $value Value to set for the callbackWindows property.
    */
    public function setCallbackWindows(?array $value): void {
        $this->callbackWindows = $value;
    }

    /**
     * Sets the channel property value. Supported LeadContactChannel values.
     * @param LeadContactPreferences_channel|null $value Value to set for the channel property.
    */
    public function setChannel(?LeadContactPreferences_channel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the language property value. Preferred BCP 47 language tag, such as en-US.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->language = $value;
    }

}
