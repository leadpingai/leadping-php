<?php

namespace Leadping\OpenApiClient\Automations\Preview;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PreviewRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PreviewRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?PreviewRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PreviewRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PreviewRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PreviewRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PreviewRequestBuilderPostQueryParameters.
     * @param bool|null $validate_only When true, validates the automation without evaluating actions or writing an audit event.
     * @return PreviewRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?bool $validate_only = null): PreviewRequestBuilderPostQueryParameters {
        return new PreviewRequestBuilderPostQueryParameters($validate_only);
    }

}
