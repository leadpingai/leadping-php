<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Media attached to an SMS/MMS conversation event.
*/
class MessageMediaAttachment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $contentType MIME content type of the media attachment.
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $fileName Original file name of the media attachment, when available.
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $sha256 SHA-256 digest of the media content, when available.
    */
    private ?string $sha256 = null;
    
    /**
     * @var string|null $url URL from which the media attachment can be retrieved.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new MessageMediaAttachment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageMediaAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageMediaAttachment {
        return new MessageMediaAttachment();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the contentType property value. MIME content type of the media attachment.
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
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'sha256' => fn(ParseNode $n) => $o->setSha256($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. Original file name of the media attachment, when available.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the sha256 property value. SHA-256 digest of the media content, when available.
     * @return string|null
    */
    public function getSha256(): ?string {
        return $this->sha256;
    }

    /**
     * Gets the url property value. URL from which the media attachment can be retrieved.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('sha256', $this->getSha256());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the contentType property value. MIME content type of the media attachment.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the fileName property value. Original file name of the media attachment, when available.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the sha256 property value. SHA-256 digest of the media content, when available.
     * @param string|null $value Value to set for the sha256 property.
    */
    public function setSha256(?string $value): void {
        $this->sha256 = $value;
    }

    /**
     * Sets the url property value. URL from which the media attachment can be retrieved.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
