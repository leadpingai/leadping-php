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
     * @param bool|null $redirect Whether to redirect to the temporary file URL. Set to false to return the URL as JSON.
     * @param string|null $token The short-lived download token issued for this export.
     * @return DownloadRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $redirect = null, ?string $token = null): DownloadRequestBuilderGetQueryParameters {
        return new DownloadRequestBuilderGetQueryParameters($redirect, $token);
    }

}
