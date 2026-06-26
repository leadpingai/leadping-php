<?php

namespace Leadping\OpenApiClient\Reports\Exports\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\UserDataExportResponse;
use Leadping\OpenApiClient\Reports\Exports\Item\Download\DownloadRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /reports/exports/{exportId}
*/
class WithExportItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The download property
    */
    public function download(): DownloadRequestBuilder {
        return new DownloadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithExportItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/exports/{exportId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the status and metadata for one current-user data export, including readiness, expiration, and download availability.
     * @param WithExportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserDataExportResponse|null>
     * @throws Exception
    */
    public function get(?WithExportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UserDataExportResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns the status and metadata for one current-user data export, including readiness, expiration, and download availability.
     * @param WithExportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithExportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithExportItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithExportItemRequestBuilder {
        return new WithExportItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
