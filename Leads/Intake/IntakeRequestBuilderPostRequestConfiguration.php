<?php

namespace Leadping\OpenApiClient\Leads\Intake;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntakeRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IntakeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntakeRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntakeRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntakeRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntakeRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntakeRequestBuilderPostQueryParameters.
     * @param string|null $sourceKey The Leadping source key supplied as a query string parameter.
     * @return IntakeRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $sourceKey = null): IntakeRequestBuilderPostQueryParameters {
        return new IntakeRequestBuilderPostQueryParameters($sourceKey);
    }

}
