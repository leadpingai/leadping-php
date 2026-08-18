<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Defines cursor pagination, sorting, search, exact-match filters, and range filters for a structured API query.
*/
class RequestDataOptions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $continuationToken Opaque cursor returned by the previous paged response; omit it when requesting the first page and do not parse or modify it.
    */
    private ?string $continuationToken = null;
    
    /**
     * @var array<ExactMatchFilter>|null $filters Exact-match conditions that require each named field to equal its supplied value.
    */
    private ?array $filters = null;
    
    /**
     * @var bool|null $includeCount Whether the response should include the total number of matching records; counting may increase query cost or latency.
    */
    private ?bool $includeCount = null;
    
    /**
     * @var array<OrderByOption>|null $orderBy Sort instructions applied in priority order, with the first entry acting as the primary sort.
    */
    private ?array $orderBy = null;
    
    /**
     * @var int|null $pageSize Maximum number of items requested for one page; the server may enforce a lower maximum or apply a default.
    */
    private ?int $pageSize = null;
    
    /**
     * @var array<RangeFilter>|null $rangeFilters Range conditions that constrain comparable fields with inclusive or exclusive lower and upper bounds.
    */
    private ?array $rangeFilters = null;
    
    /**
     * @var string|null $search Free-text search term applied to the configured SearchFields.
    */
    private ?string $search = null;
    
    /**
     * @var array<string>|null $searchFields Serializable string field names searched for Search; supported names are determined by the queried resource.
    */
    private ?array $searchFields = null;
    
    /**
     * Instantiates a new RequestDataOptions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestDataOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestDataOptions {
        return new RequestDataOptions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the continuationToken property value. Opaque cursor returned by the previous paged response; omit it when requesting the first page and do not parse or modify it.
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
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getCollectionOfObjectValues([ExactMatchFilter::class, 'createFromDiscriminatorValue'])),
            'includeCount' => fn(ParseNode $n) => $o->setIncludeCount($n->getBooleanValue()),
            'orderBy' => fn(ParseNode $n) => $o->setOrderBy($n->getCollectionOfObjectValues([OrderByOption::class, 'createFromDiscriminatorValue'])),
            'pageSize' => fn(ParseNode $n) => $o->setPageSize($n->getIntegerValue()),
            'rangeFilters' => fn(ParseNode $n) => $o->setRangeFilters($n->getCollectionOfObjectValues([RangeFilter::class, 'createFromDiscriminatorValue'])),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getStringValue()),
            'searchFields' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSearchFields($val);
            },
        ];
    }

    /**
     * Gets the filters property value. Exact-match conditions that require each named field to equal its supplied value.
     * @return array<ExactMatchFilter>|null
    */
    public function getFilters(): ?array {
        return $this->filters;
    }

    /**
     * Gets the includeCount property value. Whether the response should include the total number of matching records; counting may increase query cost or latency.
     * @return bool|null
    */
    public function getIncludeCount(): ?bool {
        return $this->includeCount;
    }

    /**
     * Gets the orderBy property value. Sort instructions applied in priority order, with the first entry acting as the primary sort.
     * @return array<OrderByOption>|null
    */
    public function getOrderBy(): ?array {
        return $this->orderBy;
    }

    /**
     * Gets the pageSize property value. Maximum number of items requested for one page; the server may enforce a lower maximum or apply a default.
     * @return int|null
    */
    public function getPageSize(): ?int {
        return $this->pageSize;
    }

    /**
     * Gets the rangeFilters property value. Range conditions that constrain comparable fields with inclusive or exclusive lower and upper bounds.
     * @return array<RangeFilter>|null
    */
    public function getRangeFilters(): ?array {
        return $this->rangeFilters;
    }

    /**
     * Gets the search property value. Free-text search term applied to the configured SearchFields.
     * @return string|null
    */
    public function getSearch(): ?string {
        return $this->search;
    }

    /**
     * Gets the searchFields property value. Serializable string field names searched for Search; supported names are determined by the queried resource.
     * @return array<string>|null
    */
    public function getSearchFields(): ?array {
        return $this->searchFields;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('continuationToken', $this->getContinuationToken());
        $writer->writeCollectionOfObjectValues('filters', $this->getFilters());
        $writer->writeBooleanValue('includeCount', $this->getIncludeCount());
        $writer->writeCollectionOfObjectValues('orderBy', $this->getOrderBy());
        $writer->writeIntegerValue('pageSize', $this->getPageSize());
        $writer->writeCollectionOfObjectValues('rangeFilters', $this->getRangeFilters());
        $writer->writeStringValue('search', $this->getSearch());
        $writer->writeCollectionOfPrimitiveValues('searchFields', $this->getSearchFields());
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
     * Sets the continuationToken property value. Opaque cursor returned by the previous paged response; omit it when requesting the first page and do not parse or modify it.
     * @param string|null $value Value to set for the continuationToken property.
    */
    public function setContinuationToken(?string $value): void {
        $this->continuationToken = $value;
    }

    /**
     * Sets the filters property value. Exact-match conditions that require each named field to equal its supplied value.
     * @param array<ExactMatchFilter>|null $value Value to set for the filters property.
    */
    public function setFilters(?array $value): void {
        $this->filters = $value;
    }

    /**
     * Sets the includeCount property value. Whether the response should include the total number of matching records; counting may increase query cost or latency.
     * @param bool|null $value Value to set for the includeCount property.
    */
    public function setIncludeCount(?bool $value): void {
        $this->includeCount = $value;
    }

    /**
     * Sets the orderBy property value. Sort instructions applied in priority order, with the first entry acting as the primary sort.
     * @param array<OrderByOption>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value): void {
        $this->orderBy = $value;
    }

    /**
     * Sets the pageSize property value. Maximum number of items requested for one page; the server may enforce a lower maximum or apply a default.
     * @param int|null $value Value to set for the pageSize property.
    */
    public function setPageSize(?int $value): void {
        $this->pageSize = $value;
    }

    /**
     * Sets the rangeFilters property value. Range conditions that constrain comparable fields with inclusive or exclusive lower and upper bounds.
     * @param array<RangeFilter>|null $value Value to set for the rangeFilters property.
    */
    public function setRangeFilters(?array $value): void {
        $this->rangeFilters = $value;
    }

    /**
     * Sets the search property value. Free-text search term applied to the configured SearchFields.
     * @param string|null $value Value to set for the search property.
    */
    public function setSearch(?string $value): void {
        $this->search = $value;
    }

    /**
     * Sets the searchFields property value. Serializable string field names searched for Search; supported names are determined by the queried resource.
     * @param array<string>|null $value Value to set for the searchFields property.
    */
    public function setSearchFields(?array $value): void {
        $this->searchFields = $value;
    }

}
