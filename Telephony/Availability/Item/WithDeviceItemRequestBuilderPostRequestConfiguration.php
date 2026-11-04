<?php

namespace Leadping\OpenApiClient\Telephony\Availability\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithDeviceItemRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithDeviceItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithDeviceItemRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithDeviceItemRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithDeviceItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithDeviceItemRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithDeviceItemRequestBuilderPostQueryParameters.
     * @param bool|null $busy Whether the device is currently busy with a call.
     * @return WithDeviceItemRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $busy = null): WithDeviceItemRequestBuilderPostQueryParameters {
        return new WithDeviceItemRequestBuilderPostQueryParameters($busy);
    }

}
