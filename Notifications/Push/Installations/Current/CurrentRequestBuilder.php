<?php

namespace Leadping\OpenApiClient\Notifications\Push\Installations\Current;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\PushInstallationRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /notifications/push/installations/current
*/
class CurrentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CurrentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/notifications/push/installations/current');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Registers or refreshes the authenticated user's mobile push installation so Leadping can deliver account and workflow notifications to the device.
     * @param PushInstallationRequest $body Describes a mobile push installation. Identity and Azure tags are derived by the API.
     * @param CurrentRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<bool|null>
     * @throws Exception
    */
    public function put(PushInstallationRequest $body, ?CurrentRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<bool|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, 'bool', $errorMappings);
        return $result;
    }

    /**
     * Registers or refreshes the authenticated user's mobile push installation so Leadping can deliver account and workflow notifications to the device.
     * @param PushInstallationRequest $body Describes a mobile push installation. Identity and Azure tags are derived by the API.
     * @param CurrentRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(PushInstallationRequest $body, ?CurrentRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return CurrentRequestBuilder
    */
    public function withUrl(string $rawUrl): CurrentRequestBuilder {
        return new CurrentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
