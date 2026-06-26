<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Item\Warmup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WarmupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WarmupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WarmupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WarmupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WarmupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WarmupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WarmupRequestBuilderGetQueryParameters.
     * @param Date|null $endDate The end date.
     * @param Date|null $startDate The start date.
     * @param int|null $windowDays The window days.
     * @return WarmupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?Date $endDate = null, ?Date $startDate = null, ?int $windowDays = null): WarmupRequestBuilderGetQueryParameters {
        return new WarmupRequestBuilderGetQueryParameters($endDate, $startDate, $windowDays);
    }

}
