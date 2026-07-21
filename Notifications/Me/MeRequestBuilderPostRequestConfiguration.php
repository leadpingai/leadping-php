<?php

namespace Leadping\OpenApiClient\Notifications\Me;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MeRequestBuilderPostQueryParameters.
     * @param DateTime|null $endAt Exclusive end of the created date range.
     * @param DateTime|null $startAt Inclusive beginning of the created date range.
     * @return MeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?DateTime $endAt = null, ?DateTime $startAt = null): MeRequestBuilderPostQueryParameters {
        return new MeRequestBuilderPostQueryParameters($endAt, $startAt);
    }

}
