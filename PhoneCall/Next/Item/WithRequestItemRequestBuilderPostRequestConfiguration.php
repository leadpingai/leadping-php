<?php

namespace Leadping\OpenApiClient\PhoneCall\Next\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithRequestItemRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithRequestItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithRequestItemRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithRequestItemRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithRequestItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithRequestItemRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithRequestItemRequestBuilderPostQueryParameters.
     * @param bool|null $texting 
     * @return WithRequestItemRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $texting = null): WithRequestItemRequestBuilderPostQueryParameters {
        return new WithRequestItemRequestBuilderPostQueryParameters($texting);
    }

}
