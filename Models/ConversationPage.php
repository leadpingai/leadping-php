<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A page of inbox conversations with optional action counts and refresh timing.
*/
class ConversationPage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $continuationToken The continuationToken property
    */
    private ?string $continuationToken = null;
    
    /**
     * @var array<ConversationResponse>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var int|null $needsReplyCount Visible unanswered conversations, capped at ReplyCountDisplayLimit + 1. Included on request.
    */
    private ?int $needsReplyCount = null;
    
    /**
     * @var int|null $pageSize The pageSize property
    */
    private ?int $pageSize = null;
    
    /**
     * @var string|null $refreshAfter Time remaining until a scheduled action or contact window could change this page, measured on the server.
    */
    private ?string $refreshAfter = null;
    
    /**
     * @var ConversationPage_selectedConversation|null $selectedConversation Describes conversation data returned by Leadping.
    */
    private ?ConversationPage_selectedConversation $selectedConversation = null;
    
    /**
     * @var int|null $totalCount The totalCount property
    */
    private ?int $totalCount = null;
    
    /**
     * Instantiates a new ConversationPage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationPage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationPage {
        return new ConversationPage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the continuationToken property value. The continuationToken property
     * @return string|null
    */
    public function getContinuationToken(): ?string {
        return $this->continuationToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'continuationToken' => fn(ParseNode $n) => $o->setContinuationToken($n->getStringValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([ConversationResponse::class, 'createFromDiscriminatorValue'])),
            'needsReplyCount' => fn(ParseNode $n) => $o->setNeedsReplyCount($n->getIntegerValue()),
            'pageSize' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
            'refreshAfter' => fn(ParseNode $n) => $o->setRefreshAfter($n->getStringValue()),
            'selectedConversation' => fn(ParseNode $n) => $o->setSelectedConversation($n->getObjectValue([ConversationPage_selectedConversation::class, 'createFromDiscriminatorValue'])),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<ConversationResponse>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the needsReplyCount property value. Visible unanswered conversations, capped at ReplyCountDisplayLimit + 1. Included on request.
     * @return int|null
    */
    public function getNeedsReplyCount(): ?int {
        return $this->needsReplyCount;
    }

    /**
     * Gets the pageSize property value. The pageSize property
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->pageSize;
    }

    /**
     * Gets the refreshAfter property value. Time remaining until a scheduled action or contact window could change this page, measured on the server.
     * @return string|null
    */
    public function getRefreshAfter(): ?string {
        return $this->refreshAfter;
    }

    /**
     * Gets the selectedConversation property value. Describes conversation data returned by Leadping.
     * @return ConversationPage_selectedConversation|null
    */
    public function getSelectedConversation(): ?ConversationPage_selectedConversation {
        return $this->selectedConversation;
    }

    /**
     * Gets the totalCount property value. The totalCount property
     * @return int|null
    */
    public function getTotalCount(): ?int {
        return $this->totalCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('continuationToken', $this->getContinuationToken());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeIntegerValue('needsReplyCount', $this->getNeedsReplyCount());
        $writer->writeIntegerValue('pageSize', $this->getPageSize());
        $writer->writeStringValue('refreshAfter', $this->getRefreshAfter());
        $writer->writeObjectValue('selectedConversation', $this->getSelectedConversation());
        $writer->writeIntegerValue('totalCount', $this->getTotalCount());
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
     * Sets the continuationToken property value. The continuationToken property
     * @param string|null $value Value to set for the continuationToken property.
    */
    public function setContinuationToken(?string $value): void {
        $this->continuationToken = $value;
    }

    /**
     * Sets the items property value. The items property
     * @param array<ConversationResponse>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the needsReplyCount property value. Visible unanswered conversations, capped at ReplyCountDisplayLimit + 1. Included on request.
     * @param int|null $value Value to set for the needsReplyCount property.
    */
    public function setNeedsReplyCount(?int $value): void {
        $this->needsReplyCount = $value;
    }

    /**
     * Sets the pageSize property value. The pageSize property
     * @param int|null $value Value to set for the pageSize property.
    */
    public function setPageSize(?int $value): void {
        $this->pageSize = $value;
    }

    /**
     * Sets the refreshAfter property value. Time remaining until a scheduled action or contact window could change this page, measured on the server.
     * @param string|null $value Value to set for the refreshAfter property.
    */
    public function setRefreshAfter(?string $value): void {
        $this->refreshAfter = $value;
    }

    /**
     * Sets the selectedConversation property value. Describes conversation data returned by Leadping.
     * @param ConversationPage_selectedConversation|null $value Value to set for the selectedConversation property.
    */
    public function setSelectedConversation(?ConversationPage_selectedConversation $value): void {
        $this->selectedConversation = $value;
    }

    /**
     * Sets the totalCount property value. The totalCount property
     * @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value): void {
        $this->totalCount = $value;
    }

}
