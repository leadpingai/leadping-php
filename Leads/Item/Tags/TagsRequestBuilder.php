<?php

namespace Leadping\OpenApiClient\Leads\Item\Tags;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Leads\Item\Tags\Item\WithTagItemRequestBuilder;
use Leadping\OpenApiClient\Models\LeadResponse;
use Leadping\OpenApiClient\Models\LeadTagsRequest;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads/{id}/tags
*/
class TagsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.leads.item.tags.item collection
     * @param string $tagId Unique identifier of the item
     * @return WithTagItemRequestBuilder
    */
    public function byTagId(string $tagId): WithTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tagId'] = $tagId;
        return new WithTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TagsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads/{id}/tags');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Adds one or more current-business tags to a lead so users can segment, filter, route, and review follow-up work.
     * @param LeadTagsRequest $body Request schema for the Leadping API lead tag update request, including the fields clients can send.
     * @param TagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function post(LeadTagsRequest $body, ?TagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Replaces all tags on a lead with the supplied current-business tags, keeping segmentation and routing labels in sync.
     * @param LeadTagsRequest $body Request schema for the Leadping API lead tag update request, including the fields clients can send.
     * @param TagsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function put(LeadTagsRequest $body, ?TagsRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Adds one or more current-business tags to a lead so users can segment, filter, route, and review follow-up work.
     * @param LeadTagsRequest $body Request schema for the Leadping API lead tag update request, including the fields clients can send.
     * @param TagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LeadTagsRequest $body, ?TagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Replaces all tags on a lead with the supplied current-business tags, keeping segmentation and routing labels in sync.
     * @param LeadTagsRequest $body Request schema for the Leadping API lead tag update request, including the fields clients can send.
     * @param TagsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(LeadTagsRequest $body, ?TagsRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TagsRequestBuilder
    */
    public function withUrl(string $rawUrl): TagsRequestBuilder {
        return new TagsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
