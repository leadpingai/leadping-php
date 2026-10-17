<?php

namespace Leadping\OpenApiClient\Conversations\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Conversations\Item\MarkHandled\MarkHandledRequestBuilder;
use Leadping\OpenApiClient\Conversations\Item\MarkRead\MarkReadRequestBuilder;
use Leadping\OpenApiClient\Conversations\Item\OutboundReadiness\OutboundReadinessRequestBuilder;
use Leadping\OpenApiClient\Models\ConversationResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /conversations/{id}
*/
class ConversationsItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The markHandled property
    */
    public function markHandled(): MarkHandledRequestBuilder {
        return new MarkHandledRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markRead property
    */
    public function markRead(): MarkReadRequestBuilder {
        return new MarkReadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outboundReadiness property
    */
    public function outboundReadiness(): OutboundReadinessRequestBuilder {
        return new OutboundReadinessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ConversationsItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/conversations/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns a conversation accessible to the current user, including its current event version for tracking inbox updates.
     * @param ConversationsItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConversationResponse|null>
     * @throws Exception
    */
    public function get(?ConversationsItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConversationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns a conversation accessible to the current user, including its current event version for tracking inbox updates.
     * @param ConversationsItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConversationsItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "text/plain;q=0.9");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ConversationsItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ConversationsItemRequestBuilder {
        return new ConversationsItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
