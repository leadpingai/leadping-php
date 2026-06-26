<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A generic container for paginated results returned to the client.
*/
class PagedResultOfCallEventTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $continuationToken Opaque storage continuation token. ‑ `null` → the current page was the last page.
    */
    private ?string $continuationToken = null;
    
    /**
     * @var array<CallEventTableRow>|null $items The subset of items returned for the current page.
    */
    private ?array $items = null;
    
    /**
     * @var int|null $pageSize The number of items returned per page in the response. This may reflect the client's requested page size, or a server-defined default or limit.
    */
    private ?int $pageSize = null;
    
    /**
     * Instantiates a new PagedResultOfCallEventTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PagedResultOfCallEventTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PagedResultOfCallEventTableRow {
        return new PagedResultOfCallEventTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the continuationToken property value. Opaque storage continuation token. ‑ `null` → the current page was the last page.
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
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([CallEventTableRow::class, 'createFromDiscriminatorValue'])),
            'pageSize' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the items property value. The subset of items returned for the current page.
     * @return array<CallEventTableRow>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the pageSize property value. The number of items returned per page in the response. This may reflect the client's requested page size, or a server-defined default or limit.
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->pageSize;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('continuationToken', $this->getContinuationToken());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeIntegerValue('pageSize', $this->getPageSize());
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
     * Sets the continuationToken property value. Opaque storage continuation token. ‑ `null` → the current page was the last page.
     * @param string|null $value Value to set for the continuationToken property.
    */
    public function setContinuationToken(?string $value): void {
        $this->continuationToken = $value;
    }

    /**
     * Sets the items property value. The subset of items returned for the current page.
     * @param array<CallEventTableRow>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the pageSize property value. The number of items returned per page in the response. This may reflect the client's requested page size, or a server-defined default or limit.
     * @param int|null $value Value to set for the pageSize property.
    */
    public function setPageSize(?int $value): void {
        $this->pageSize = $value;
    }

}
