<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing disposition export data returned to callers.
*/
class DispositionExportResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $contentType The content type classification for this disposition export.
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $csv The csv value for this disposition export.
    */
    private ?string $csv = null;
    
    /**
     * @var string|null $fileName The file name value for this disposition export.
    */
    private ?string $fileName = null;
    
    /**
     * @var array<DispositionExportRow>|null $rows The rows included with this disposition export.
    */
    private ?array $rows = null;
    
    /**
     * Instantiates a new DispositionExportResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DispositionExportResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DispositionExportResponse {
        return new DispositionExportResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the contentType property value. The content type classification for this disposition export.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * Gets the csv property value. The csv value for this disposition export.
     * @return string|null
    */
    public function getCsv(): ?string {
        return $this->csv;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'csv' => fn(ParseNode $n) => $o->setCsv($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'rows' => fn(ParseNode $n) => $o->setRows($n->getCollectionOfObjectValues([DispositionExportRow::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fileName property value. The file name value for this disposition export.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the rows property value. The rows included with this disposition export.
     * @return array<DispositionExportRow>|null
    */
    public function getRows(): ?array {
        return $this->rows;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeStringValue('csv', $this->getCsv());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeCollectionOfObjectValues('rows', $this->getRows());
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
     * Sets the contentType property value. The content type classification for this disposition export.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the csv property value. The csv value for this disposition export.
     * @param string|null $value Value to set for the csv property.
    */
    public function setCsv(?string $value): void {
        $this->csv = $value;
    }

    /**
     * Sets the fileName property value. The file name value for this disposition export.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the rows property value. The rows included with this disposition export.
     * @param array<DispositionExportRow>|null $value Value to set for the rows property.
    */
    public function setRows(?array $value): void {
        $this->rows = $value;
    }

}
