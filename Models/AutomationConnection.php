<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A directed connection between two nodes in an automation graph.
*/
class AutomationConnection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id Unique identifier for this connection.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $sourceNodeId Graph node identifier where the connection begins.
    */
    private ?string $sourceNodeId = null;
    
    /**
     * @var string|null $targetNodeId Graph node identifier where the connection ends.
    */
    private ?string $targetNodeId = null;
    
    /**
     * Instantiates a new AutomationConnection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationConnection {
        return new AutomationConnection();
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
            'sourceNodeId' => fn(ParseNode $n) => $o->setSourceNodeId($n->getStringValue()),
            'targetNodeId' => fn(ParseNode $n) => $o->setTargetNodeId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier for this connection.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the sourceNodeId property value. Graph node identifier where the connection begins.
     * @return string|null
    */
    public function getSourceNodeId(): ?string {
        return $this->sourceNodeId;
    }

    /**
     * Gets the targetNodeId property value. Graph node identifier where the connection ends.
     * @return string|null
    */
    public function getTargetNodeId(): ?string {
        return $this->targetNodeId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('sourceNodeId', $this->getSourceNodeId());
        $writer->writeStringValue('targetNodeId', $this->getTargetNodeId());
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
     * Sets the id property value. Unique identifier for this connection.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the sourceNodeId property value. Graph node identifier where the connection begins.
     * @param string|null $value Value to set for the sourceNodeId property.
    */
    public function setSourceNodeId(?string $value): void {
        $this->sourceNodeId = $value;
    }

    /**
     * Sets the targetNodeId property value. Graph node identifier where the connection ends.
     * @param string|null $value Value to set for the targetNodeId property.
    */
    public function setTargetNodeId(?string $value): void {
        $this->targetNodeId = $value;
    }

}
