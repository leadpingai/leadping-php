<?php

namespace Leadping\OpenApiClient\Conversations\Item\MarkReplyNeeded;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MarkReplyNeededRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MarkReplyNeededRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?MarkReplyNeededRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MarkReplyNeededRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MarkReplyNeededRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MarkReplyNeededRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MarkReplyNeededRequestBuilderPostQueryParameters.
     * @param int|null $replyVersion The reply version observed by the caller. Must be non-negative.
     * @return MarkReplyNeededRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?int $replyVersion = null): MarkReplyNeededRequestBuilderPostQueryParameters {
        return new MarkReplyNeededRequestBuilderPostQueryParameters($replyVersion);
    }

}
