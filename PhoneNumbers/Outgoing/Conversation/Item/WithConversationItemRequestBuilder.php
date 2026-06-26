<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Outgoing\Conversation\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\OutgoingNumberSelectionRequest;
use Leadping\OpenApiClient\Models\OutgoingNumberSelectionResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\PhoneNumbers\Outgoing\Conversation\Item\Override\OverrideRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-numbers/outgoing/conversation/{conversationId}
*/
class WithConversationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The override property
    */
    public function override(): OverrideRequestBuilder {
        return new OverrideRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithConversationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/outgoing/conversation/{conversationId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Selects the outgoing phone number for an existing conversation, considering assignments, overrides, and delivery eligibility.
     * @param OutgoingNumberSelectionRequest $body Request schema for the Leadping API outgoing number selection request, including the fields clients can send.
     * @param WithConversationItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutgoingNumberSelectionResponse|null>
     * @throws Exception
    */
    public function post(OutgoingNumberSelectionRequest $body, ?WithConversationItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutgoingNumberSelectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Selects the outgoing phone number for an existing conversation, considering assignments, overrides, and delivery eligibility.
     * @param OutgoingNumberSelectionRequest $body Request schema for the Leadping API outgoing number selection request, including the fields clients can send.
     * @param WithConversationItemRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OutgoingNumberSelectionRequest $body, ?WithConversationItemRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithConversationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithConversationItemRequestBuilder {
        return new WithConversationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
