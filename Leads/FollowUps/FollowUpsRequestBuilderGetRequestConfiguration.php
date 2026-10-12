<?php

namespace Leadping\OpenApiClient\Leads\FollowUps;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FollowUpsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FollowUpsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FollowUpsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FollowUpsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FollowUpsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FollowUpsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FollowUpsRequestBuilderGetQueryParameters.
     * @param string|null $continuation The continuation token from a previous response, or null to retrieve the first page.
     * @param bool|null $includeUpcoming Whether to include future follow-ups. When false, returns only due and overdue follow-ups.
     * @return FollowUpsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $continuation = null, ?bool $includeUpcoming = null): FollowUpsRequestBuilderGetQueryParameters {
        return new FollowUpsRequestBuilderGetQueryParameters($continuation, $includeUpcoming);
    }

}
