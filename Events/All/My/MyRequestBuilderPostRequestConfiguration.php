<?php

namespace Leadping\OpenApiClient\Events\All\My;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MyRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?MyRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MyRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters.
     * @param string|null $category 
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
     * @return MyRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $category = null, ?DateTime $endAt = null, ?DateTime $startAt = null): MyRequestBuilderPostQueryParameters {
        return new MyRequestBuilderPostQueryParameters($category, $endAt, $startAt);
    }

}
