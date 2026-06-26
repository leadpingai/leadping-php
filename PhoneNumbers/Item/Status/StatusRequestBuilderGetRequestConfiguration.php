<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Item\Status;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StatusRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StatusRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StatusRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StatusRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StatusRequestBuilderGetQueryParameters.
     * @param Date|null $endDate The end date.
     * @param Date|null $startDate The start date.
     * @param int|null $windowDays The window days.
     * @return StatusRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?Date $endDate = null, ?Date $startDate = null, ?int $windowDays = null): StatusRequestBuilderGetQueryParameters {
        return new StatusRequestBuilderGetQueryParameters($endDate, $startDate, $windowDays);
    }

}
