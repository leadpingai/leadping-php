<?php

namespace Leadping\OpenApiClient\Automations\Preview;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\AutomationPreviewRequest;
use Leadping\OpenApiClient\Models\AutomationPreviewResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /automations/preview
*/
class PreviewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PreviewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/automations/preview');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Previews automation execution for a sample lead, showing matched steps and messages without creating follow-up events.
     * @param AutomationPreviewRequest $body Request schema for the Leadping API automation preview request, including the fields clients can send.
     * @param PreviewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutomationPreviewResponse|null>
     * @throws Exception
    */
    public function post(AutomationPreviewRequest $body, ?PreviewRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AutomationPreviewResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Previews automation execution for a sample lead, showing matched steps and messages without creating follow-up events.
     * @param AutomationPreviewRequest $body Request schema for the Leadping API automation preview request, including the fields clients can send.
     * @param PreviewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AutomationPreviewRequest $body, ?PreviewRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PreviewRequestBuilder
    */
    public function withUrl(string $rawUrl): PreviewRequestBuilder {
        return new PreviewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
