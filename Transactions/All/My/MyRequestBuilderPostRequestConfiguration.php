<?php

namespace Leadping\OpenApiClient\Transactions\All\My;

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
     * @param DateTime|null $endAt Optional exclusive end timestamp for transaction creation.
     * @param DateTime|null $startAt Optional inclusive start timestamp for transaction creation.
     * @return MyRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?DateTime $endAt = null, ?DateTime $startAt = null): MyRequestBuilderPostQueryParameters {
        return new MyRequestBuilderPostQueryParameters($endAt, $startAt);
    }

}
