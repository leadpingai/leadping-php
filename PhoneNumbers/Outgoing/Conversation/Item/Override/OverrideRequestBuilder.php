<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Outgoing\Conversation\Item\Override;

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
 * Builds and executes requests for operations under /phone-numbers/outgoing/conversation/{conversationId}/override
*/
class OverrideRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new OverrideRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/outgoing/conversation/{conversationId}/override');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Clears a conversation's outgoing-number override so future lead messages return to automatic number selection.
     * @param OverrideRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutgoingNumberSelectionResponse|null>
     * @throws Exception
    */
    public function delete(?OverrideRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutgoingNumberSelectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Sets the outgoing phone number override for a conversation so future lead messages use the selected eligible number.
     * @param OutgoingNumberManualOverrideRequest $body Request schema for the Leadping API outgoing number manual override request, including the fields clients can send.
     * @param OverrideRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutgoingNumberSelectionResponse|null>
     * @throws Exception
    */
    public function post(OutgoingNumberManualOverrideRequest $body, ?OverrideRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutgoingNumberSelectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Clears a conversation's outgoing-number override so future lead messages return to automatic number selection.
     * @param OverrideRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OverrideRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Sets the outgoing phone number override for a conversation so future lead messages use the selected eligible number.
     * @param OutgoingNumberManualOverrideRequest $body Request schema for the Leadping API outgoing number manual override request, including the fields clients can send.
     * @param OverrideRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OutgoingNumberManualOverrideRequest $body, ?OverrideRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OverrideRequestBuilder
    */
    public function withUrl(string $rawUrl): OverrideRequestBuilder {
        return new OverrideRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
