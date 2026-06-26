<?php

namespace Leadping\OpenApiClient\Feedback\Admin;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Feedback\Admin\Item\AdminItemRequestBuilder;
use Leadping\OpenApiClient\Models\PagedResultOfFeedbackResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /feedback/admin
*/
class AdminRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.feedback.admin.item collection
     * @param string $id Unique identifier of the item
     * @return AdminItemRequestBuilder
    */
    public function byId(string $id): AdminItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new AdminItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AdminRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feedback/admin{?Area*,BusinessId*,ContinuationToken*,CreatedEnd*,CreatedStart*,PageSize*,Search*,Status*,Type*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists submitted feedback for admin triage with query filters, paging, status, and category review fields.
     * @param AdminRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PagedResultOfFeedbackResponse|null>
     * @throws Exception
    */
    public function get(?AdminRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PagedResultOfFeedbackResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Lists submitted feedback for admin triage with query filters, paging, status, and category review fields.
     * @param AdminRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdminRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AdminRequestBuilder
    */
    public function withUrl(string $rawUrl): AdminRequestBuilder {
        return new AdminRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
