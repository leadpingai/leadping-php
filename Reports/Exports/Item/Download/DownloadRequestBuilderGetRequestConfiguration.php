<?php

namespace Leadping\OpenApiClient\Reports\Exports\Item\Download;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DownloadRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DownloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DownloadRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DownloadRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DownloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DownloadRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DownloadRequestBuilderGetQueryParameters.
     * @param string|null $token 
     * @return DownloadRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $token = null): DownloadRequestBuilderGetQueryParameters {
        return new DownloadRequestBuilderGetQueryParameters($token);
    }

}
