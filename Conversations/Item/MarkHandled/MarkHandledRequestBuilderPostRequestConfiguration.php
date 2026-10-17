<?php

namespace Leadping\OpenApiClient\Conversations\Item\MarkHandled;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MarkHandledRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MarkHandledRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?MarkHandledRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MarkHandledRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MarkHandledRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MarkHandledRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MarkHandledRequestBuilderPostQueryParameters.
     * @param int|null $replyVersion The customer reply version observed by the caller. Must be non-negative.
     * @return MarkHandledRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?int $replyVersion = null): MarkHandledRequestBuilderPostQueryParameters {
        return new MarkHandledRequestBuilderPostQueryParameters($replyVersion);
    }

}
