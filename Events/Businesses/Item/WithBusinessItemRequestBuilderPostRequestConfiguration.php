<?php

namespace Leadping\OpenApiClient\Events\Businesses\Item;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithBusinessItemRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithBusinessItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithBusinessItemRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithBusinessItemRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithBusinessItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithBusinessItemRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithBusinessItemRequestBuilderPostQueryParameters.
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
     * @return WithBusinessItemRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?DateTime $endAt = null, ?DateTime $startAt = null): WithBusinessItemRequestBuilderPostQueryParameters {
        return new WithBusinessItemRequestBuilderPostQueryParameters($endAt, $startAt);
    }

}
