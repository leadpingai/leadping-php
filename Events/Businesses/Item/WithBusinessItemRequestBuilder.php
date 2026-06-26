<?php

namespace Leadping\OpenApiClient\Events\Businesses\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PagedResultOfEventTableRow;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\RequestDataOptions;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /events/businesses/{businessId}
*/
class WithBusinessItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithBusinessItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/businesses/{businessId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists event records for a business with paging and filters so admins can review lead communication and automation events.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param WithBusinessItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PagedResultOfEventTableRow|null>
     * @throws Exception
    */
    public function post(RequestDataOptions $body, ?WithBusinessItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PagedResultOfEventTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists event records for a business with paging and filters so admins can review lead communication and automation events.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param WithBusinessItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RequestDataOptions $body, ?WithBusinessItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithBusinessItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithBusinessItemRequestBuilder {
        return new WithBusinessItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
