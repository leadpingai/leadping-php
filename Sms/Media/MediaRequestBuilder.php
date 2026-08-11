<?php

namespace Leadping\OpenApiClient\Sms\Media;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\MessageMediaAttachment;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /sms/media
*/
class MediaRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MediaRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sms/media');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Uploads and validates one media attachment, returning the metadata needed to include the asset in a subsequent Leadping MMS send.
     * @param MediaPostRequestBody $body The request body
     * @param MediaRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MessageMediaAttachment|null>
     * @throws Exception
    */
    public function post(MediaPostRequestBody $body, ?MediaRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MessageMediaAttachment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Uploads and validates one media attachment, returning the metadata needed to include the asset in a subsequent Leadping MMS send.
     * @param MediaPostRequestBody $body The request body
     * @param MediaRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MediaPostRequestBody $body, ?MediaRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "text/plain;q=0.9");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/x-www-form-urlencoded", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MediaRequestBuilder
    */
    public function withUrl(string $rawUrl): MediaRequestBuilder {
        return new MediaRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
