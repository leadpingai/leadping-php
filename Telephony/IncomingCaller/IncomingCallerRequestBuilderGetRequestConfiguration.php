<?php

namespace Leadping\OpenApiClient\Telephony\IncomingCaller;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IncomingCallerRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IncomingCallerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IncomingCallerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IncomingCallerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IncomingCallerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IncomingCallerRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IncomingCallerRequestBuilderGetQueryParameters.
     * @param string|null $phoneNumber The incoming caller's phone number to normalize and match against organization leads.
     * @return IncomingCallerRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $phoneNumber = null): IncomingCallerRequestBuilderGetQueryParameters {
        return new IncomingCallerRequestBuilderGetQueryParameters($phoneNumber);
    }

}
