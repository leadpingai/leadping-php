<?php

namespace Leadping\OpenApiClient\Leads;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LeadsRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LeadsRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?LeadsRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LeadsRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LeadsRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LeadsRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LeadsRequestBuilderPostQueryParameters.
     * @param string|null $sourceKey The Leadping source key supplied as a query string parameter.
     * @return LeadsRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $sourceKey = null): LeadsRequestBuilderPostQueryParameters {
        return new LeadsRequestBuilderPostQueryParameters($sourceKey);
    }

}
