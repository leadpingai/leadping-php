<?php

namespace Leadping\OpenApiClient\Events\Calls\Lead\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PagedResultOfCallEventTableRow;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\RequestDataOptions;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /events/calls/lead/{leadId}
*/
class WithLeadItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithLeadItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/calls/lead/{leadId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists call events for one lead with paging, helping users review call attempts, outcomes, and follow-up history.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param WithLeadItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PagedResultOfCallEventTableRow|null>
     * @throws Exception
    */
    public function post(RequestDataOptions $body, ?WithLeadItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PagedResultOfCallEventTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists call events for one lead with paging, helping users review call attempts, outcomes, and follow-up history.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param WithLeadItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RequestDataOptions $body, ?WithLeadItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithLeadItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithLeadItemRequestBuilder {
        return new WithLeadItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
