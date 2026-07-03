<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Outgoing\EscapedNew;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\OutgoingNumberSelectionRequest;
use Leadping\OpenApiClient\Models\OutgoingNumberSelectionResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-numbers/outgoing/new
*/
class NewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new NewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/outgoing/new');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Selects an outgoing phone number for a new outbound lead message using destination, source, and delivery eligibility rules.
     * @param OutgoingNumberSelectionRequest $body Request schema for the Leadping API outgoing number selection request, including the fields clients can send.
     * @param NewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutgoingNumberSelectionResponse|null>
     * @throws Exception
    */
    public function post(OutgoingNumberSelectionRequest $body, ?NewRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutgoingNumberSelectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Selects an outgoing phone number for a new outbound lead message using destination, source, and delivery eligibility rules.
     * @param OutgoingNumberSelectionRequest $body Request schema for the Leadping API outgoing number selection request, including the fields clients can send.
     * @param NewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OutgoingNumberSelectionRequest $body, ?NewRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return NewRequestBuilder
    */
    public function withUrl(string $rawUrl): NewRequestBuilder {
        return new NewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
