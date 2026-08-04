<?php

namespace Leadping\OpenApiClient\Leads\Item\Status;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\LeadStatusChangeRequest;
use Leadping\OpenApiClient\Models\LeadStatusChangeResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads/{-id}/status
*/
class StatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new StatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads/{%2Did}/status');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Sets the lead's current structured status and records the change for audit, automation, and reporting.
     * @param LeadStatusChangeRequest $body Request model for creating or updating a lead status change.
     * @param StatusRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadStatusChangeResponse|null>
     * @throws Exception
    */
    public function put(LeadStatusChangeRequest $body, ?StatusRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadStatusChangeResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Sets the lead's current structured status and records the change for audit, automation, and reporting.
     * @param LeadStatusChangeRequest $body Request model for creating or updating a lead status change.
     * @param StatusRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(LeadStatusChangeRequest $body, ?StatusRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StatusRequestBuilder
    */
    public function withUrl(string $rawUrl): StatusRequestBuilder {
        return new StatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
