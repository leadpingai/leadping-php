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
     * @var string|null $authorName The authorName property
    */
    private ?string $authorName = null;
    
    /**
     * @var string|null $category The category property
    */
    private ?string $category = null;
    
    /**
     * @var string|null $content The content property
    */
    private ?string $content = null;
    
    /**
     * @var DateTime|null $contentUpdatedAt The contentUpdatedAt property
    */
    private ?DateTime $contentUpdatedAt = null;
    
    /**
     * @var string|null $coverImageAlt The coverImageAlt property
    */
    private ?string $coverImageAlt = null;
    
    /**
     * @var int|null $coverImageHeight The processed cover image height in pixels, when known.
    */
    private ?int $coverImageHeight = null;
    
    /**
     * @var string|null $coverImageUrl The coverImageUrl property
    */
    private ?string $coverImageUrl = null;
    
    /**
     * @var int|null $coverImageWidth The processed cover image width in pixels, when known.
    */
    private ?int $coverImageWidth = null;
    
    /**
     * @var DateTime|null $createdAt The createdAt property
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $excerpt The excerpt property
    */
    private ?string $excerpt = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $imageProcessingError The latest background image processing failure, when present.
    */
    private ?string $imageProcessingError = null;
    
    /**
     * @var bool|null $imagesProcessing Whether saved image references are awaiting Engine processing.
    */
    private ?bool $imagesProcessing = null;
    
    /**
     * @var bool|null $isFeatured The isFeatured property
    */
    private ?bool $isFeatured = null;
    
    /**
     * @var bool|null $isPublished The isPublished property
    */
    private ?bool $isPublished = null;
    
    /**
     * @var DateTime|null $lastPublishedAt The lastPublishedAt property
    */
    private ?DateTime $lastPublishedAt = null;
    
    /**
     * @var string|null $metaDescription The metaDescription property
    */
    private ?string $metaDescription = null;
    
    /**
     * @var DateTime|null $modifiedAt The modifiedAt property
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var DateTime|null $publishedAt The publishedAt property
    */
    private ?DateTime $publishedAt = null;
    
    /**
     * @var string|null $renderedHtml The renderedHtml property
    */
    private ?string $renderedHtml = null;
    
    /**
     * @var string|null $seoTitle The seoTitle property
    */
    private ?string $seoTitle = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var DateTime|null $unpublishedAt The unpublishedAt property
    */
    private ?DateTime $unpublishedAt = null;
    
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
     * Gets the authorName property value. The authorName property
     * @return string|null
    */
    public function getAuthorName(): ?string {
        return $this->authorName;
    }

    /**
     * Gets the category property value. The category property
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the content property value. The content property
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the contentUpdatedAt property value. The contentUpdatedAt property
     * @return DateTime|null
    */
    public function getContentUpdatedAt(): ?DateTime {
        return $this->contentUpdatedAt;
    }

    /**
     * Gets the coverImageAlt property value. The coverImageAlt property
     * @return string|null
    */
    public function getCoverImageAlt(): ?string {
        return $this->coverImageAlt;
    }

    /**
     * Gets the coverImageHeight property value. The processed cover image height in pixels, when known.
     * @return int|null
    */
    public function getCoverImageHeight(): ?int {
        return $this->coverImageHeight;
    }

    /**
     * Gets the coverImageUrl property value. The coverImageUrl property
     * @return string|null
    */
    public function getCoverImageUrl(): ?string {
        return $this->coverImageUrl;
    }

    /**
     * Gets the coverImageWidth property value. The processed cover image width in pixels, when known.
     * @return int|null
    */
    public function getCoverImageWidth(): ?int {
        return $this->coverImageWidth;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the excerpt property value. The excerpt property
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
            'contentUpdatedAt' => fn(ParseNode $n) => $o->setContentUpdatedAt($n->getDateTimeValue()),
            'coverImageAlt' => fn(ParseNode $n) => $o->setCoverImageAlt($n->getStringValue()),
            'coverImageHeight' => fn(ParseNode $n) => $o->setCoverImageHeight($n->getIntegerValue()),
            'coverImageUrl' => fn(ParseNode $n) => $o->setCoverImageUrl($n->getStringValue()),
            'coverImageWidth' => fn(ParseNode $n) => $o->setCoverImageWidth($n->getIntegerValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'excerpt' => fn(ParseNode $n) => $o->setExcerpt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'imageProcessingError' => fn(ParseNode $n) => $o->setImageProcessingError($n->getStringValue()),
            'imagesProcessing' => fn(ParseNode $n) => $o->setImagesProcessing($n->getBooleanValue()),
            'isFeatured' => fn(ParseNode $n) => $o->setIsFeatured($n->getBooleanValue()),
            'isPublished' => fn(ParseNode $n) => $o->setIsPublished($n->getBooleanValue()),
            'lastPublishedAt' => fn(ParseNode $n) => $o->setLastPublishedAt($n->getDateTimeValue()),
            'metaDescription' => fn(ParseNode $n) => $o->setMetaDescription($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'publishedAt' => fn(ParseNode $n) => $o->setPublishedAt($n->getDateTimeValue()),
            'renderedHtml' => fn(ParseNode $n) => $o->setRenderedHtml($n->getStringValue()),
            'seoTitle' => fn(ParseNode $n) => $o->setSeoTitle($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'unpublishedAt' => fn(ParseNode $n) => $o->setUnpublishedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the imageProcessingError property value. The latest background image processing failure, when present.
     * @return string|null
    */
    public function getImageProcessingError(): ?string {
        return $this->imageProcessingError;
    }

    /**
     * Gets the imagesProcessing property value. Whether saved image references are awaiting Engine processing.
     * @return bool|null
    */
    public function getImagesProcessing(): ?bool {
        return $this->imagesProcessing;
    }

    /**
     * Gets the isFeatured property value. The isFeatured property
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        return $this->isFeatured;
    }

    /**
     * Gets the isPublished property value. The isPublished property
     * @return bool|null
    */
    public function getIsPublished(): ?bool {
        return $this->isPublished;
    }

    /**
     * Gets the lastPublishedAt property value. The lastPublishedAt property
     * @return DateTime|null
    */
    public function getLastPublishedAt(): ?DateTime {
        return $this->lastPublishedAt;
    }

    /**
     * Gets the metaDescription property value. The metaDescription property
     * @return string|null
    */
    public function getMetaDescription(): ?string {
        return $this->metaDescription;
    }

    /**
     * Gets the modifiedAt property value. The modifiedAt property
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the publishedAt property value. The publishedAt property
     * @return DateTime|null
    */
    public function getPublishedAt(): ?DateTime {
        return $this->publishedAt;
    }

    /**
     * Gets the renderedHtml property value. The renderedHtml property
     * @return string|null
    */
    public function getRenderedHtml(): ?string {
        return $this->renderedHtml;
    }

    /**
     * Gets the seoTitle property value. The seoTitle property
     * @return string|null
    */
    public function getSeoTitle(): ?string {
        return $this->seoTitle;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the unpublishedAt property value. The unpublishedAt property
     * @return DateTime|null
    */
    public function getUnpublishedAt(): ?DateTime {
        return $this->unpublishedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authorName', $this->getAuthorName());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeDateTimeValue('contentUpdatedAt', $this->getContentUpdatedAt());
        $writer->writeStringValue('coverImageAlt', $this->getCoverImageAlt());
        $writer->writeIntegerValue('coverImageHeight', $this->getCoverImageHeight());
        $writer->writeStringValue('coverImageUrl', $this->getCoverImageUrl());
        $writer->writeIntegerValue('coverImageWidth', $this->getCoverImageWidth());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('excerpt', $this->getExcerpt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('imageProcessingError', $this->getImageProcessingError());
        $writer->writeBooleanValue('imagesProcessing', $this->getImagesProcessing());
        $writer->writeBooleanValue('isFeatured', $this->getIsFeatured());
        $writer->writeBooleanValue('isPublished', $this->getIsPublished());
        $writer->writeDateTimeValue('lastPublishedAt', $this->getLastPublishedAt());
        $writer->writeStringValue('metaDescription', $this->getMetaDescription());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeDateTimeValue('publishedAt', $this->getPublishedAt());
        $writer->writeStringValue('renderedHtml', $this->getRenderedHtml());
        $writer->writeStringValue('seoTitle', $this->getSeoTitle());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeDateTimeValue('unpublishedAt', $this->getUnpublishedAt());
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
     * Sets the authorName property value. The authorName property
     * @param string|null $value Value to set for the authorName property.
    */
    public function setAuthorName(?string $value): void {
        $this->authorName = $value;
    }

    /**
     * Sets the category property value. The category property
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the content property value. The content property
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the contentUpdatedAt property value. The contentUpdatedAt property
     * @param DateTime|null $value Value to set for the contentUpdatedAt property.
    */
    public function setContentUpdatedAt(?DateTime $value): void {
        $this->contentUpdatedAt = $value;
    }

    /**
     * Sets the coverImageAlt property value. The coverImageAlt property
     * @param string|null $value Value to set for the coverImageAlt property.
    */
    public function setCoverImageAlt(?string $value): void {
        $this->coverImageAlt = $value;
    }

    /**
     * Sets the coverImageHeight property value. The processed cover image height in pixels, when known.
     * @param int|null $value Value to set for the coverImageHeight property.
    */
    public function setCoverImageHeight(?int $value): void {
        $this->coverImageHeight = $value;
    }

    /**
     * Sets the coverImageUrl property value. The coverImageUrl property
     * @param string|null $value Value to set for the coverImageUrl property.
    */
    public function setCoverImageUrl(?string $value): void {
        $this->coverImageUrl = $value;
    }

    /**
     * Sets the coverImageWidth property value. The processed cover image width in pixels, when known.
     * @param int|null $value Value to set for the coverImageWidth property.
    */
    public function setCoverImageWidth(?int $value): void {
        $this->coverImageWidth = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the excerpt property value. The excerpt property
     * @param string|null $value Value to set for the excerpt property.
    */
    public function setExcerpt(?string $value): void {
        $this->excerpt = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the imageProcessingError property value. The latest background image processing failure, when present.
     * @param string|null $value Value to set for the imageProcessingError property.
    */
    public function setImageProcessingError(?string $value): void {
        $this->imageProcessingError = $value;
    }

    /**
     * Sets the imagesProcessing property value. Whether saved image references are awaiting Engine processing.
     * @param bool|null $value Value to set for the imagesProcessing property.
    */
    public function setImagesProcessing(?bool $value): void {
        $this->imagesProcessing = $value;
    }

    /**
     * Sets the isFeatured property value. The isFeatured property
     * @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value): void {
        $this->isFeatured = $value;
    }

    /**
     * Sets the isPublished property value. The isPublished property
     * @param bool|null $value Value to set for the isPublished property.
    */
    public function setIsPublished(?bool $value): void {
        $this->isPublished = $value;
    }

    /**
     * Sets the lastPublishedAt property value. The lastPublishedAt property
     * @param DateTime|null $value Value to set for the lastPublishedAt property.
    */
    public function setLastPublishedAt(?DateTime $value): void {
        $this->lastPublishedAt = $value;
    }

    /**
     * Sets the metaDescription property value. The metaDescription property
     * @param string|null $value Value to set for the metaDescription property.
    */
    public function setMetaDescription(?string $value): void {
        $this->metaDescription = $value;
    }

    /**
     * Sets the modifiedAt property value. The modifiedAt property
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the publishedAt property value. The publishedAt property
     * @param DateTime|null $value Value to set for the publishedAt property.
    */
    public function setPublishedAt(?DateTime $value): void {
        $this->publishedAt = $value;
    }

    /**
     * Sets the renderedHtml property value. The renderedHtml property
     * @param string|null $value Value to set for the renderedHtml property.
    */
    public function setRenderedHtml(?string $value): void {
        $this->renderedHtml = $value;
    }

    /**
     * Sets the seoTitle property value. The seoTitle property
     * @param string|null $value Value to set for the seoTitle property.
    */
    public function setSeoTitle(?string $value): void {
        $this->seoTitle = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the unpublishedAt property value. The unpublishedAt property
     * @param DateTime|null $value Value to set for the unpublishedAt property.
    */
    public function setUnpublishedAt(?DateTime $value): void {
        $this->unpublishedAt = $value;
    }

}
