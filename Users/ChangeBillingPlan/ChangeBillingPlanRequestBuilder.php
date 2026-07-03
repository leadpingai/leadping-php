<?php

namespace Leadping\OpenApiClient\Users\ChangeBillingPlan;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ChangeBillingPlanRequest;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\UserResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /users/change-billing-plan
*/
class ChangeBillingPlanRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ChangeBillingPlanRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/change-billing-plan');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Changes the current user's billing plan selection, updating account billing state and plan-specific capabilities.
     * @param ChangeBillingPlanRequest $body Request payload for change billing plan.
     * @param ChangeBillingPlanRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserResponse|null>
     * @throws Exception
    */
    public function put(ChangeBillingPlanRequest $body, ?ChangeBillingPlanRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Changes the current user's billing plan selection, updating account billing state and plan-specific capabilities.
     * @param ChangeBillingPlanRequest $body Request payload for change billing plan.
     * @param ChangeBillingPlanRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(ChangeBillingPlanRequest $body, ?ChangeBillingPlanRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return ChangeBillingPlanRequestBuilder
    */
    public function withUrl(string $rawUrl): ChangeBillingPlanRequestBuilder {
        return new ChangeBillingPlanRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
