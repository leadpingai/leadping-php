<?php

namespace Leadping\OpenApiClient\Analytics\My;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MyRequestBuilderGetQueryParameters.
     * @param int|null $days 
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
     * @return MyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null): MyRequestBuilderGetQueryParameters {
        return new MyRequestBuilderGetQueryParameters($days, $endAt, $startAt);
    }

}
