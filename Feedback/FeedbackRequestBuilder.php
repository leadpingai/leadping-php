<?php

namespace Leadping\OpenApiClient\Feedback;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Feedback\Admin\AdminRequestBuilder;
use Leadping\OpenApiClient\Models\FeedbackCreateRequest;
use Leadping\OpenApiClient\Models\FeedbackResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /feedback
*/
class FeedbackRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The admin property
    */
    public function admin(): AdminRequestBuilder {
        return new AdminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FeedbackRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feedback');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates product feedback for the current business, capturing category, message, and context for operator review.
     * @param FeedbackCreateRequest $body Request schema for the Leadping API feedback creation request, including the fields clients can send.
     * @param FeedbackRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FeedbackResponse|null>
     * @throws Exception
    */
    public function post(FeedbackCreateRequest $body, ?FeedbackRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FeedbackResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates product feedback for the current business, capturing category, message, and context for operator review.
     * @param FeedbackCreateRequest $body Request schema for the Leadping API feedback creation request, including the fields clients can send.
     * @param FeedbackRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FeedbackCreateRequest $body, ?FeedbackRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FeedbackRequestBuilder
    */
    public function withUrl(string $rawUrl): FeedbackRequestBuilder {
        return new FeedbackRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
