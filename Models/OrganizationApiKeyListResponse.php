<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A page of safe organization API-key previews.
*/
class OrganizationApiKeyListResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $continuationToken Opaque token for retrieving the next page, or null when this is the last page.
    */
    private ?string $continuationToken = null;
    
    /**
     * @var array<OrganizationApiKeyPreviewResponse>|null $items Safe API-key previews in the current page.
    */
    private ?array $items = null;
    
    /**
     * @var int|null $pageSize Number of API keys in the current page.
    */
    private ?int $pageSize = null;
    
    /**
     * @var int|null $totalCount Total number of API keys matching the request.
    */
    private ?int $totalCount = null;
    
    /**
     * Instantiates a new OrganizationApiKeyListResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationApiKeyListResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationApiKeyListResponse {
        return new OrganizationApiKeyListResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the continuationToken property value. Opaque token for retrieving the next page, or null when this is the last page.
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
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([OrganizationApiKeyPreviewResponse::class, 'createFromDiscriminatorValue'])),
            'pageSize' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the items property value. Safe API-key previews in the current page.
     * @return array<OrganizationApiKeyPreviewResponse>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the pageSize property value. Number of API keys in the current page.
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->pageSize;
    }

    /**
     * Gets the totalCount property value. Total number of API keys matching the request.
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
     * Sets the continuationToken property value. Opaque token for retrieving the next page, or null when this is the last page.
     * @param string|null $value Value to set for the continuationToken property.
    */
    public function setContinuationToken(?string $value): void {
        $this->continuationToken = $value;
    }

    /**
     * Sets the items property value. Safe API-key previews in the current page.
     * @param array<OrganizationApiKeyPreviewResponse>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the pageSize property value. Number of API keys in the current page.
     * @param int|null $value Value to set for the pageSize property.
    */
    public function setPageSize(?int $value): void {
        $this->pageSize = $value;
    }

    /**
     * Sets the totalCount property value. Total number of API keys matching the request.
     * @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value): void {
        $this->totalCount = $value;
    }

}
