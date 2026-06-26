<?php

namespace Leadping\OpenApiClient\Leads\Item\WorkflowStatus;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\AutomationWorkflowStatusResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads/{id}/workflow-status
*/
class WorkflowStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WorkflowStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads/{id}/workflow-status');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns automation workflow status for one lead, including active runs, paused state, and follow-up progress for the current business.
     * @param WorkflowStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutomationWorkflowStatusResponse|null>
     * @throws Exception
    */
    public function get(?WorkflowStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AutomationWorkflowStatusResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns automation workflow status for one lead, including active runs, paused state, and follow-up progress for the current business.
     * @param WorkflowStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkflowStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WorkflowStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkflowStatusRequestBuilder {
        return new WorkflowStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
