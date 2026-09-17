<?php

namespace Leadping\OpenApiClient\Analytics\My\Export;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExportRequestBuilderGetQueryParameters.
     * @param int|null $days Optional number of days before endAt to include when startAt is not supplied. Defaults to 30 and is limited to 1 through 365.
     * @param DateTime|null $endAt Optional exclusive end timestamp for the analytics period. Defaults to the current UTC time.
     * @param DateTime|null $startAt Optional inclusive start timestamp for the analytics period.
     * @return ExportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null): ExportRequestBuilderGetQueryParameters {
        return new ExportRequestBuilderGetQueryParameters($days, $endAt, $startAt);
    }

}
