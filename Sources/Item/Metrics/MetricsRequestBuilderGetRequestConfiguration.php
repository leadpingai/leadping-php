<?php

namespace Leadping\OpenApiClient\Sources\Item\Metrics;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MetricsRequestBuilderGetQueryParameters.
     * @param int|null $days Optional rolling day count when explicit dates are not provided.
     * @param DateTime|null $endAt Optional end date/time for the metric range.
     * @param DateTime|null $startAt Optional start date/time for the metric range.
     * @return MetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null): MetricsRequestBuilderGetQueryParameters {
        return new MetricsRequestBuilderGetQueryParameters($days, $endAt, $startAt);
    }

}
