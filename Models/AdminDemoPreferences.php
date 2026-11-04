<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Controls demo presentation for an individual platform admin.
*/
class AdminDemoPreferences implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $showDemoData The showDemoData property
    */
    private ?bool $showDemoData = null;
    
    /**
     * @var bool|null $showDemoMarkers The showDemoMarkers property
    */
    private ?bool $showDemoMarkers = null;
    
    /**
     * Instantiates a new AdminDemoPreferences and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminDemoPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminDemoPreferences {
        return new AdminDemoPreferences();
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
            'showDemoData' => fn(ParseNode $n) => $o->setShowDemoData($n->getBooleanValue()),
            'showDemoMarkers' => fn(ParseNode $n) => $o->setShowDemoMarkers($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the showDemoData property value. The showDemoData property
     * @return bool|null
    */
    public function getShowDemoData(): ?bool {
        return $this->showDemoData;
    }

    /**
     * Gets the showDemoMarkers property value. The showDemoMarkers property
     * @return bool|null
    */
    public function getShowDemoMarkers(): ?bool {
        return $this->showDemoMarkers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('showDemoData', $this->getShowDemoData());
        $writer->writeBooleanValue('showDemoMarkers', $this->getShowDemoMarkers());
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
     * Sets the showDemoData property value. The showDemoData property
     * @param bool|null $value Value to set for the showDemoData property.
    */
    public function setShowDemoData(?bool $value): void {
        $this->showDemoData = $value;
    }

    /**
     * Sets the showDemoMarkers property value. The showDemoMarkers property
     * @param bool|null $value Value to set for the showDemoMarkers property.
    */
    public function setShowDemoMarkers(?bool $value): void {
        $this->showDemoMarkers = $value;
    }

}
