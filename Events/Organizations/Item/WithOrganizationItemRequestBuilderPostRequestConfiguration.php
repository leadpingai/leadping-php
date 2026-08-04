<?php

namespace Leadping\OpenApiClient\Events\Organizations\Item;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithOrganizationItemRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithOrganizationItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithOrganizationItemRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithOrganizationItemRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithOrganizationItemRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithOrganizationItemRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithOrganizationItemRequestBuilderPostQueryParameters.
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
     * @return WithOrganizationItemRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?DateTime $endAt = null, ?DateTime $startAt = null): WithOrganizationItemRequestBuilderPostQueryParameters {
        return new WithOrganizationItemRequestBuilderPostQueryParameters($endAt, $startAt);
    }

}
