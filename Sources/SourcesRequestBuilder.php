<?php

namespace Leadping\OpenApiClient\Sources;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\SourceRequest;
use Leadping\OpenApiClient\Models\SourceResponse;
use Leadping\OpenApiClient\Sources\All\AllRequestBuilder;
use Leadping\OpenApiClient\Sources\Item\SourcesItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /sources
*/
class SourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.sources.item collection
     * @param string $id The ID of the source to update.
     * @return SourcesItemRequestBuilder
    */
    public function byId(string $id): SourcesItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new SourcesItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sources');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates a lead source for the current business, storing intake credentials and routing context for captured external leads.
     * @param SourceRequest $body Request schema for the Leadping API lead source request, including the fields clients can send.
     * @param SourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SourceResponse|null>
     * @throws Exception
    */
    public function post(SourceRequest $body, ?SourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SourceResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a lead source for the current business, storing intake credentials and routing context for captured external leads.
     * @param SourceRequest $body Request schema for the Leadping API lead source request, including the fields clients can send.
     * @param SourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SourceRequest $body, ?SourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): SourcesRequestBuilder {
        return new SourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
