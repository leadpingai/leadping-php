<?php

namespace Leadping\OpenApiClient\Leads\Item;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Leads\Item\Archive\ArchiveRequestBuilder;
use Leadping\OpenApiClient\Leads\Item\Tags\TagsRequestBuilder;
use Leadping\OpenApiClient\Leads\Item\Unarchive\UnarchiveRequestBuilder;
use Leadping\OpenApiClient\Leads\Item\WorkflowStatus\WorkflowStatusRequestBuilder;
use Leadping\OpenApiClient\Models\LeadRequest;
use Leadping\OpenApiClient\Models\LeadResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads/{id}
*/
class LeadsItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The archive property
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tags property
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unarchive property
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The workflowStatus property
    */
    public function workflowStatus(): WorkflowStatusRequestBuilder {
        return new WorkflowStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new LeadsItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a lead from the current business when it should no longer appear in communication, routing, or event workflows.
     * @param LeadsItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?LeadsItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Returns one lead visible to the current user, including communication details, status, source, and follow-up context.
     * @param LeadsItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function get(?LeadsItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates lead details for the current business, keeping contact data, status, source, and follow-up context current.
     * @param LeadRequest $body Request schema for the Leadping API lead request, including the fields clients can send.
     * @param LeadsItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function put(LeadRequest $body, ?LeadsItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a lead from the current business when it should no longer appear in communication, routing, or event workflows.
     * @param LeadsItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?LeadsItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, text/plain;q=0.9");
        return $requestInfo;
    }

    /**
     * Returns one lead visible to the current user, including communication details, status, source, and follow-up context.
     * @param LeadsItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LeadsItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates lead details for the current business, keeping contact data, status, source, and follow-up context current.
     * @param LeadRequest $body Request schema for the Leadping API lead request, including the fields clients can send.
     * @param LeadsItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(LeadRequest $body, ?LeadsItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LeadsItemRequestBuilder
    */
    public function withUrl(string $rawUrl): LeadsItemRequestBuilder {
        return new LeadsItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
