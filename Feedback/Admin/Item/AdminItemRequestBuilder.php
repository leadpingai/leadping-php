<?php

namespace Leadping\OpenApiClient\Feedback\Admin\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\FeedbackAdminUpdateRequest;
use Leadping\OpenApiClient\Models\FeedbackResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /feedback/admin/{id}
*/
class AdminItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AdminItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feedback/admin/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns one feedback item for admin triage, including business context, submitted details, status, and review fields.
     * @param AdminItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FeedbackResponse|null>
     * @throws Exception
    */
    public function get(?AdminItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FeedbackResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates admin triage fields on a feedback item, such as status, priority, notes, or reviewed metadata.
     * @param FeedbackAdminUpdateRequest $body Request schema for the Leadping API feedback admin update request, including the fields clients can send.
     * @param AdminItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FeedbackResponse|null>
     * @throws Exception
    */
    public function put(FeedbackAdminUpdateRequest $body, ?AdminItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FeedbackResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns one feedback item for admin triage, including business context, submitted details, status, and review fields.
     * @param AdminItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdminItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates admin triage fields on a feedback item, such as status, priority, notes, or reviewed metadata.
     * @param FeedbackAdminUpdateRequest $body Request schema for the Leadping API feedback admin update request, including the fields clients can send.
     * @param AdminItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(FeedbackAdminUpdateRequest $body, ?AdminItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AdminItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AdminItemRequestBuilder {
        return new AdminItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
