<?php

namespace Leadping\OpenApiClient\Leads\Item\StatusHistory;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Leads\Item\StatusHistory\Export\ExportRequestBuilder;
use Leadping\OpenApiClient\Models\LeadStatusChangeResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads/{-id}/status-history
*/
class StatusHistoryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The export property
    */
    public function export(): ExportRequestBuilder {
        return new ExportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new StatusHistoryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads/{%2Did}/status-history');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists lead status change outcome history for one lead, including prior outcomes, notes, follow-up context, timestamps, and actor details used for audit review.
     * @param StatusHistoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<LeadStatusChangeResponse>|null>
     * @throws Exception
    */
    public function get(?StatusHistoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [LeadStatusChangeResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists lead status change outcome history for one lead, including prior outcomes, notes, follow-up context, timestamps, and actor details used for audit review.
     * @param StatusHistoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?StatusHistoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return StatusHistoryRequestBuilder
    */
    public function withUrl(string $rawUrl): StatusHistoryRequestBuilder {
        return new StatusHistoryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
