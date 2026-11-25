<?php

namespace Leadping\OpenApiClient\Automations\Item\Leads;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Automations\Item\Leads\Item\WithLeadItemRequestBuilder;
use Leadping\OpenApiClient\Models\IdNamePair;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /automations/{id}/leads
*/
class LeadsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.automations.item.leads.item collection
     * @param string $leadId Unique identifier of the item
     * @return WithLeadItemRequestBuilder
    */
    public function byLeadId(string $leadId): WithLeadItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['leadId'] = $leadId;
        return new WithLeadItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LeadsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/automations/{id}/leads');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists the leads currently enrolled in an automation that the caller can view.
     * @param LeadsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<IdNamePair>|null>
     * @throws Exception
    */
    public function get(?LeadsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [IdNamePair::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists the leads currently enrolled in an automation that the caller can view.
     * @param LeadsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LeadsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LeadsRequestBuilder
    */
    public function withUrl(string $rawUrl): LeadsRequestBuilder {
        return new LeadsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
