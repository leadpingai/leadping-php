<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a blog article response.
*/
class BlogArticleResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $authorName Gets or sets the author name.
    */
    private ?string $authorName = null;
    
    /**
     * @var string|null $category Gets or sets the category.
    */
    private ?string $category = null;
    
    /**
     * @var string|null $content Gets or sets the content.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $coverImageUrl Gets or sets the cover image URL.
    */
    private ?string $coverImageUrl = null;
    
    /**
     * @var DateTime|null $createdAt Gets or sets the created at.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $excerpt Gets or sets the excerpt.
    */
    private ?string $excerpt = null;
    
    /**
     * @var string|null $id Gets or sets the ID.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isFeatured Gets or sets the is featured.
    */
    private ?bool $isFeatured = null;
    
    /**
     * @var bool|null $isPublished Gets or sets the is published.
    */
    private ?bool $isPublished = null;
    
    /**
     * @var DateTime|null $modifiedAt Gets or sets the modified at.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var DateTime|null $publishedAt Gets or sets the published at.
    */
    private ?DateTime $publishedAt = null;
    
    /**
     * @var string|null $slug Gets or sets the slug.
    */
    private ?string $slug = null;
    
    /**
     * @var string|null $title Gets or sets the title.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new BlogArticleResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlogArticleResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlogArticleResponse {
        return new BlogArticleResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the authorName property value. Gets or sets the author name.
     * @return string|null
    */
    public function getAuthorName(): ?string {
        return $this->authorName;
    }

    /**
     * Gets the category property value. Gets or sets the category.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the content property value. Gets or sets the content.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the coverImageUrl property value. Gets or sets the cover image URL.
     * @return string|null
    */
    public function getCoverImageUrl(): ?string {
        return $this->coverImageUrl;
    }

    /**
     * Gets the createdAt property value. Gets or sets the created at.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the excerpt property value. Gets or sets the excerpt.
     * @return string|null
    */
    public function getExcerpt(): ?string {
        return $this->excerpt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorName' => fn(ParseNode $n) => $o->setAuthorName($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'coverImageUrl' => fn(ParseNode $n) => $o->setCoverImageUrl($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'excerpt' => fn(ParseNode $n) => $o->setExcerpt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isFeatured' => fn(ParseNode $n) => $o->setIsFeatured($n->getBooleanValue()),
            'isPublished' => fn(ParseNode $n) => $o->setIsPublished($n->getBooleanValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'publishedAt' => fn(ParseNode $n) => $o->setPublishedAt($n->getDateTimeValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Gets or sets the ID.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isFeatured property value. Gets or sets the is featured.
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        return $this->isFeatured;
    }

    /**
     * Gets the isPublished property value. Gets or sets the is published.
     * @return bool|null
    */
    public function getIsPublished(): ?bool {
        return $this->isPublished;
    }

    /**
     * Gets the modifiedAt property value. Gets or sets the modified at.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the publishedAt property value. Gets or sets the published at.
     * @return DateTime|null
    */
    public function getPublishedAt(): ?DateTime {
        return $this->publishedAt;
    }

    /**
     * Gets the slug property value. Gets or sets the slug.
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the title property value. Gets or sets the title.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authorName', $this->getAuthorName());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('coverImageUrl', $this->getCoverImageUrl());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('excerpt', $this->getExcerpt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isFeatured', $this->getIsFeatured());
        $writer->writeBooleanValue('isPublished', $this->getIsPublished());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeDateTimeValue('publishedAt', $this->getPublishedAt());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the authorName property value. Gets or sets the author name.
     * @param string|null $value Value to set for the authorName property.
    */
    public function setAuthorName(?string $value): void {
        $this->authorName = $value;
    }

    /**
     * Sets the category property value. Gets or sets the category.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the content property value. Gets or sets the content.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the coverImageUrl property value. Gets or sets the cover image URL.
     * @param string|null $value Value to set for the coverImageUrl property.
    */
    public function setCoverImageUrl(?string $value): void {
        $this->coverImageUrl = $value;
    }

    /**
     * Sets the createdAt property value. Gets or sets the created at.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the excerpt property value. Gets or sets the excerpt.
     * @param string|null $value Value to set for the excerpt property.
    */
    public function setExcerpt(?string $value): void {
        $this->excerpt = $value;
    }

    /**
     * Sets the id property value. Gets or sets the ID.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isFeatured property value. Gets or sets the is featured.
     * @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value): void {
        $this->isFeatured = $value;
    }

    /**
     * Sets the isPublished property value. Gets or sets the is published.
     * @param bool|null $value Value to set for the isPublished property.
    */
    public function setIsPublished(?bool $value): void {
        $this->isPublished = $value;
    }

    /**
     * Sets the modifiedAt property value. Gets or sets the modified at.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the publishedAt property value. Gets or sets the published at.
     * @param DateTime|null $value Value to set for the publishedAt property.
    */
    public function setPublishedAt(?DateTime $value): void {
        $this->publishedAt = $value;
    }

    /**
     * Sets the slug property value. Gets or sets the slug.
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the title property value. Gets or sets the title.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
