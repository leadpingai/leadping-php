<?php

namespace Leadping\OpenApiClient\Conversations\Item\MarkRead;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MarkReadRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MarkReadRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?MarkReadRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MarkReadRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MarkReadRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MarkReadRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MarkReadRequestBuilderPostQueryParameters.
     * @param int|null $eventVersion The event version observed by the reader.
     * @return MarkReadRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?int $eventVersion = null): MarkReadRequestBuilderPostQueryParameters {
        return new MarkReadRequestBuilderPostQueryParameters($eventVersion);
    }

}
