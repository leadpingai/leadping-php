<?php

namespace Leadping\OpenApiClient\Leads;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Leads\All\AllRequestBuilder;
use Leadping\OpenApiClient\Leads\Intake\IntakeRequestBuilder;
use Leadping\OpenApiClient\Leads\Item\LeadsItemRequestBuilder;
use Leadping\OpenApiClient\Models\LeadRequest;
use Leadping\OpenApiClient\Models\LeadResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads
*/
class LeadsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The intake property
    */
    public function intake(): IntakeRequestBuilder {
        return new IntakeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.leads.item collection
     * @param string $id The ID of the lead to retrieve.
     * @return LeadsItemRequestBuilder
    */
    public function byId(string $id): LeadsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new LeadsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LeadsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads{?sourceKey*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates a source-authenticated lead captured outside Leadping, starting follow-up, routing, and automation from structured lead data.
     * @param LeadRequest $body Request schema for the Leadping API lead request, including the fields clients can send.
     * @param LeadsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function post(LeadRequest $body, ?LeadsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a source-authenticated lead captured outside Leadping, starting follow-up, routing, and automation from structured lead data.
     * @param LeadRequest $body Request schema for the Leadping API lead request, including the fields clients can send.
     * @param LeadsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LeadRequest $body, ?LeadsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
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
