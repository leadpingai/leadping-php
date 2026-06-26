<?php

namespace Leadping\OpenApiClient\Usage\Summary\My;

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
     * @param DateTime|null $periodEnd The period end.
     * @param DateTime|null $periodStart The period start.
     * @return MyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?DateTime $periodEnd = null, ?DateTime $periodStart = null): MyRequestBuilderGetQueryParameters {
        return new MyRequestBuilderGetQueryParameters($periodEnd, $periodStart);
    }

}
