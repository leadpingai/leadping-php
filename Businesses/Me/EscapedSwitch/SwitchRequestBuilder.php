<?php

namespace Leadping\OpenApiClient\Businesses\Me\EscapedSwitch;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\BusinessResponse;
use Leadping\OpenApiClient\Models\BusinessSwitchRequest;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /businesses/me/switch
*/
class SwitchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SwitchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/businesses/me/switch');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Switches the authenticated user's active business context so subsequent lead, billing, and communication requests target that business.
     * @param BusinessSwitchRequest $body Request schema for the Leadping API business switch request, including the fields clients can send.
     * @param SwitchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessResponse|null>
     * @throws Exception
    */
    public function post(BusinessSwitchRequest $body, ?SwitchRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Switches the authenticated user's active business context so subsequent lead, billing, and communication requests target that business.
     * @param BusinessSwitchRequest $body Request schema for the Leadping API business switch request, including the fields clients can send.
     * @param SwitchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BusinessSwitchRequest $body, ?SwitchRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SwitchRequestBuilder
    */
    public function withUrl(string $rawUrl): SwitchRequestBuilder {
        return new SwitchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
