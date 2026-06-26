<?php

namespace Leadping\OpenApiClient\Events\Sms\All\My;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PagedResultOfSmsEventTableRow;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\RequestDataOptions;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /events/sms/all/my
*/
class MyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/sms/all/my');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists SMS events visible to the current user with paging, sorting, and filters for message history and follow-up review.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param MyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PagedResultOfSmsEventTableRow|null>
     * @throws Exception
    */
    public function post(RequestDataOptions $body, ?MyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PagedResultOfSmsEventTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists SMS events visible to the current user with paging, sorting, and filters for message history and follow-up review.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param MyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RequestDataOptions $body, ?MyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MyRequestBuilder
    */
    public function withUrl(string $rawUrl): MyRequestBuilder {
        return new MyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
