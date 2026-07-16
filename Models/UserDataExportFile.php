<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserDataExportFile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $category Category classification for this Leadping user data export file.
    */
    private ?string $category = null;
    
    /**
     * @var string|null $contentType Media type of the generated file or response content.
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $fileName Human-readable file name associated with this Leadping user data export file.
    */
    private ?string $fileName = null;
    
    /**
     * @var int|null $rowCount Total number of row records represented by this Leadping user data export file.
    */
    private ?int $rowCount = null;
    
    /**
     * Instantiates a new UserDataExportFile and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserDataExportFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserDataExportFile {
        return new UserDataExportFile();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. Category classification for this Leadping user data export file.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the contentType property value. Media type of the generated file or response content.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'rowCount' => fn(ParseNode $n) => $o->setRowCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the fileName property value. Human-readable file name associated with this Leadping user data export file.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the rowCount property value. Total number of row records represented by this Leadping user data export file.
     * @return int|null
    */
    public function getRowCount(): ?int {
        return $this->rowCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeIntegerValue('rowCount', $this->getRowCount());
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
     * Sets the category property value. Category classification for this Leadping user data export file.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the contentType property value. Media type of the generated file or response content.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the fileName property value. Human-readable file name associated with this Leadping user data export file.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the rowCount property value. Total number of row records represented by this Leadping user data export file.
     * @param int|null $value Value to set for the rowCount property.
    */
    public function setRowCount(?int $value): void {
        $this->rowCount = $value;
    }

}
