<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Returns one page of query results together with page-size, optional total-count, and opaque continuation-cursor metadata.
*/
class PagedResultOfLeadStatusChangeResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $continuationToken Opaque cursor for requesting the next page, or null when no additional page is available; clients must not parse or modify it.
    */
    private ?string $continuationToken = null;
    
    /**
     * @var array<LeadStatusChangeResponse>|null $items Items included in the current page, in the order determined by the query.
    */
    private ?array $items = null;
    
    /**
     * @var int|null $pageSize Effective page-size limit used for this response, which may differ from the requested size because of server defaults or limits.
    */
    private ?int $pageSize = null;
    
    /**
     * @var int|null $totalCount Total number of records matching the query across all pages, or null when counting was not requested or computed.
    */
    private ?int $totalCount = null;
    
    /**
     * Instantiates a new PagedResultOfLeadStatusChangeResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PagedResultOfLeadStatusChangeResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PagedResultOfLeadStatusChangeResponse {
        return new PagedResultOfLeadStatusChangeResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the continuationToken property value. Opaque cursor for requesting the next page, or null when no additional page is available; clients must not parse or modify it.
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
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([LeadStatusChangeResponse::class, 'createFromDiscriminatorValue'])),
            'pageSize' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the items property value. Items included in the current page, in the order determined by the query.
     * @return array<LeadStatusChangeResponse>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the pageSize property value. Effective page-size limit used for this response, which may differ from the requested size because of server defaults or limits.
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->pageSize;
    }

    /**
     * Gets the totalCount property value. Total number of records matching the query across all pages, or null when counting was not requested or computed.
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
        $writer->writeIntegerValue('pageSize', $this->getPageSize());
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
     * Sets the continuationToken property value. Opaque cursor for requesting the next page, or null when no additional page is available; clients must not parse or modify it.
     * @param string|null $value Value to set for the continuationToken property.
    */
    public function setContinuationToken(?string $value): void {
        $this->continuationToken = $value;
    }

    /**
     * Sets the items property value. Items included in the current page, in the order determined by the query.
     * @param array<LeadStatusChangeResponse>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the pageSize property value. Effective page-size limit used for this response, which may differ from the requested size because of server defaults or limits.
     * @param int|null $value Value to set for the pageSize property.
    */
    public function setPageSize(?int $value): void {
        $this->pageSize = $value;
    }

    /**
     * Sets the totalCount property value. Total number of records matching the query across all pages, or null when counting was not requested or computed.
     * @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value): void {
        $this->totalCount = $value;
    }

}
