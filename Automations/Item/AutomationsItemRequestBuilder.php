<?php

namespace Leadping\OpenApiClient\Automations\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\AutomationRequest;
use Leadping\OpenApiClient\Models\AutomationResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /automations/{id}
*/
class AutomationsItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AutomationsItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/automations/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes an automation for the current business so it no longer schedules follow-up or routing work for captured leads.
     * @param AutomationsItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<bool|null>
     * @throws Exception
    */
    public function delete(?AutomationsItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<bool|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, 'bool', $errorMappings);
        return $result;
    }

    /**
     * Returns one automation for the current business, including trigger criteria, message steps, routing settings, and enabled state.
     * @param AutomationsItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutomationResponse|null>
     * @throws Exception
    */
    public function get(?AutomationsItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AutomationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates an automation for current-business leads, changing triggers, message steps, routing, or active follow-up settings.
     * @param AutomationRequest $body Request schema for the Leadping API automation configuration request, including the fields clients can send.
     * @param AutomationsItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutomationResponse|null>
     * @throws Exception
    */
    public function put(AutomationRequest $body, ?AutomationsItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AutomationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes an automation for the current business so it no longer schedules follow-up or routing work for captured leads.
     * @param AutomationsItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AutomationsItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns one automation for the current business, including trigger criteria, message steps, routing settings, and enabled state.
     * @param AutomationsItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AutomationsItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates an automation for current-business leads, changing triggers, message steps, routing, or active follow-up settings.
     * @param AutomationRequest $body Request schema for the Leadping API automation configuration request, including the fields clients can send.
     * @param AutomationsItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(AutomationRequest $body, ?AutomationsItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AutomationsItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AutomationsItemRequestBuilder {
        return new AutomationsItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
