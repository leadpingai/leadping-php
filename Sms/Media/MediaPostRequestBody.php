<?php

namespace Leadping\OpenApiClient\Sms\Media;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $contentDisposition The ContentDisposition property
    */
    private ?string $contentDisposition = null;
    
    /**
     * @var string|null $contentType The ContentType property
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $fileName The FileName property
    */
    private ?string $fileName = null;
    
    /**
     * @var MediaPostRequestBody_Headers|null $headers The Headers property
    */
    private ?MediaPostRequestBody_Headers $headers = null;
    
    /**
     * @var int|null $length The Length property
    */
    private ?int $length = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new MediaPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaPostRequestBody {
        return new MediaPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ContentDisposition property value. The ContentDisposition property
     * @return string|null
    */
    public function getContentDisposition(): ?string {
        return $this->contentDisposition;
    }

    /**
     * Gets the ContentType property value. The ContentType property
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
            'ContentDisposition' => fn(ParseNode $n) => $o->setContentDisposition($n->getStringValue()),
            'ContentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'FileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'Headers' => fn(ParseNode $n) => $o->setHeaders($n->getObjectValue([MediaPostRequestBody_Headers::class, 'createFromDiscriminatorValue'])),
            'Length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the FileName property value. The FileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the Headers property value. The Headers property
     * @return MediaPostRequestBody_Headers|null
    */
    public function getHeaders(): ?MediaPostRequestBody_Headers {
        return $this->headers;
    }

    /**
     * Gets the Length property value. The Length property
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ContentDisposition', $this->getContentDisposition());
        $writer->writeStringValue('ContentType', $this->getContentType());
        $writer->writeStringValue('FileName', $this->getFileName());
        $writer->writeObjectValue('Headers', $this->getHeaders());
        $writer->writeIntegerValue('Length', $this->getLength());
        $writer->writeStringValue('Name', $this->getName());
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
     * Sets the ContentDisposition property value. The ContentDisposition property
     * @param string|null $value Value to set for the ContentDisposition property.
    */
    public function setContentDisposition(?string $value): void {
        $this->contentDisposition = $value;
    }

    /**
     * Sets the ContentType property value. The ContentType property
     * @param string|null $value Value to set for the ContentType property.
    */
    public function setContentType(?string $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the FileName property value. The FileName property
     * @param string|null $value Value to set for the FileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the Headers property value. The Headers property
     * @param MediaPostRequestBody_Headers|null $value Value to set for the Headers property.
    */
    public function setHeaders(?MediaPostRequestBody_Headers $value): void {
        $this->headers = $value;
    }

    /**
     * Sets the Length property value. The Length property
     * @param int|null $value Value to set for the Length property.
    */
    public function setLength(?int $value): void {
        $this->length = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
