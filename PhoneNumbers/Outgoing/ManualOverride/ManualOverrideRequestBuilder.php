<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Outgoing\ManualOverride;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\OutgoingNumberManualOverrideRequest;
use Leadping\OpenApiClient\Models\OutgoingNumberSelectionResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-numbers/outgoing/manual-override
*/
class ManualOverrideRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManualOverrideRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/outgoing/manual-override');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Validates a manual outgoing-number override before use, checking ownership, destination, and delivery eligibility.
     * @param OutgoingNumberManualOverrideRequest $body Request schema for the Leadping API outgoing number manual override request, including the fields clients can send.
     * @param ManualOverrideRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutgoingNumberSelectionResponse|null>
     * @throws Exception
    */
    public function post(OutgoingNumberManualOverrideRequest $body, ?ManualOverrideRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutgoingNumberSelectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Validates a manual outgoing-number override before use, checking ownership, destination, and delivery eligibility.
     * @param OutgoingNumberManualOverrideRequest $body Request schema for the Leadping API outgoing number manual override request, including the fields clients can send.
     * @param ManualOverrideRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OutgoingNumberManualOverrideRequest $body, ?ManualOverrideRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManualOverrideRequestBuilder
    */
    public function withUrl(string $rawUrl): ManualOverrideRequestBuilder {
        return new ManualOverrideRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
