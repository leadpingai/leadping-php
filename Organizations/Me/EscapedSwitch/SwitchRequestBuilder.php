<?php

namespace Leadping\OpenApiClient\Organizations\Me\EscapedSwitch;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\OrganizationResponse;
use Leadping\OpenApiClient\Models\OrganizationSwitchRequest;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /organizations/me/switch
*/
class SwitchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SwitchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/me/switch');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Switches the authenticated user's active organization context so subsequent lead, billing, and communication requests target that organization.
     * @param OrganizationSwitchRequest $body Defines the fields clients can send when working with organization switch.
     * @param SwitchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationResponse|null>
     * @throws Exception
    */
    public function post(OrganizationSwitchRequest $body, ?SwitchRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Switches the authenticated user's active organization context so subsequent lead, billing, and communication requests target that organization.
     * @param OrganizationSwitchRequest $body Defines the fields clients can send when working with organization switch.
     * @param SwitchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OrganizationSwitchRequest $body, ?SwitchRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
