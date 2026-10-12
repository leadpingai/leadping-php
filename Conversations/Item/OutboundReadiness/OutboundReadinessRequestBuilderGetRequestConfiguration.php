<?php

namespace Leadping\OpenApiClient\Conversations\Item\OutboundReadiness;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutboundReadinessRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OutboundReadinessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutboundReadinessRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutboundReadinessRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutboundReadinessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutboundReadinessRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OutboundReadinessRequestBuilderGetQueryParameters.
     * @param bool|null $voice Whether to check call readiness. When false, checks SMS readiness.
     * @return OutboundReadinessRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $voice = null): OutboundReadinessRequestBuilderGetQueryParameters {
        return new OutboundReadinessRequestBuilderGetQueryParameters($voice);
    }

}
