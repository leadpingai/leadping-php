<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Records a social publication attempt. An attempt without a post ID must be reviewed before retrying.
*/
class BlogSocialPost implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $attemptedAt The attemptedAt property
    */
    private ?DateTime $attemptedAt = null;
    
    /**
     * @var string|null $error The error property
    */
    private ?string $error = null;
    
    /**
     * @var BlogSocialPlatform|null $platform The platform property
    */
    private ?BlogSocialPlatform $platform = null;
    
    /**
     * @var string|null $postId The postId property
    */
    private ?string $postId = null;
    
    /**
     * Instantiates a new BlogSocialPost and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlogSocialPost
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlogSocialPost {
        return new BlogSocialPost();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the attemptedAt property value. The attemptedAt property
     * @return DateTime|null
    */
    public function getAttemptedAt(): ?DateTime {
        return $this->attemptedAt;
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attemptedAt' => fn(ParseNode $n) => $o->setAttemptedAt($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(BlogSocialPlatform::class)),
            'postId' => fn(ParseNode $n) => $o->setPostId($n->getStringValue()),
        ];
    }

    /**
     * Gets the platform property value. The platform property
     * @return BlogSocialPlatform|null
    */
    public function getPlatform(): ?BlogSocialPlatform {
        return $this->platform;
    }

    /**
     * Gets the postId property value. The postId property
     * @return string|null
    */
    public function getPostId(): ?string {
        return $this->postId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('attemptedAt', $this->getAttemptedAt());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeStringValue('postId', $this->getPostId());
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
     * Sets the attemptedAt property value. The attemptedAt property
     * @param DateTime|null $value Value to set for the attemptedAt property.
    */
    public function setAttemptedAt(?DateTime $value): void {
        $this->attemptedAt = $value;
    }

    /**
     * Sets the error property value. The error property
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the platform property value. The platform property
     * @param BlogSocialPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?BlogSocialPlatform $value): void {
        $this->platform = $value;
    }

    /**
     * Sets the postId property value. The postId property
     * @param string|null $value Value to set for the postId property.
    */
    public function setPostId(?string $value): void {
        $this->postId = $value;
    }

}
