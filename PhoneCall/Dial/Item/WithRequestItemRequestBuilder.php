<?php

namespace Leadping\OpenApiClient\PhoneCall\Dial\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ManualDialRequest;
use Leadping\OpenApiClient\Models\PhoneCallResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-call/dial/{requestId}
*/
class WithRequestItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithRequestItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-call/dial/{requestId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Calls a number with the browser phone. For a new number, the caller confirms permission for manual voice contact and a lead is created.
     * @param ManualDialRequest $body Requests a manual browser call to a number entered by the agent.
     * @param WithRequestItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PhoneCallResponse|null>
     * @throws Exception
    */
    public function post(ManualDialRequest $body, ?WithRequestItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PhoneCallResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Calls a number with the browser phone. For a new number, the caller confirms permission for manual voice contact and a lead is created.
     * @param ManualDialRequest $body Requests a manual browser call to a number entered by the agent.
     * @param WithRequestItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManualDialRequest $body, ?WithRequestItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "text/plain;q=0.9");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithRequestItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithRequestItemRequestBuilder {
        return new WithRequestItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
