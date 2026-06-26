<?php

namespace Leadping\OpenApiClient\Tags;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TagsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TagsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TagsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TagsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TagsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TagsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TagsRequestBuilderGetQueryParameters.
     * @param bool|null $includeArchived 
     * @return TagsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeArchived = null): TagsRequestBuilderGetQueryParameters {
        return new TagsRequestBuilderGetQueryParameters($includeArchived);
    }

}
