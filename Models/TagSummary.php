<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Summary schema for Leadping API tag summary data used in dashboards and reports.
*/
class TagSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $color Hex color used to display this tag or status in Leadping clients.
    */
    private ?string $color = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this tag summary.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Display name for this tag summary in the Leadping API.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $normalizedName Normalized name used for case-insensitive tag matching and deduplication.
    */
    private ?string $normalizedName = null;
    
    /**
     * Instantiates a new TagSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TagSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TagSummary {
        return new TagSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the color property value. Hex color used to display this tag or status in Leadping clients.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'normalizedName' => fn(ParseNode $n) => $o->setNormalizedName($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this tag summary.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. Display name for this tag summary in the Leadping API.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the normalizedName property value. Normalized name used for case-insensitive tag matching and deduplication.
     * @return string|null
    */
    public function getNormalizedName(): ?string {
        return $this->normalizedName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('normalizedName', $this->getNormalizedName());
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
     * Sets the color property value. Hex color used to display this tag or status in Leadping clients.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->color = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this tag summary.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. Display name for this tag summary in the Leadping API.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the normalizedName property value. Normalized name used for case-insensitive tag matching and deduplication.
     * @param string|null $value Value to set for the normalizedName property.
    */
    public function setNormalizedName(?string $value): void {
        $this->normalizedName = $value;
    }

}
