<?php

namespace Leadping\OpenApiClient\Dispositions;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Dispositions\Item\DispositionsItemRequestBuilder;
use Leadping\OpenApiClient\Dispositions\Lead\LeadRequestBuilder;
use Leadping\OpenApiClient\Models\DispositionRequest;
use Leadping\OpenApiClient\Models\DispositionResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /dispositions
*/
class DispositionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The lead property
    */
    public function lead(): LeadRequestBuilder {
        return new LeadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.dispositions.item collection
     * @param string $id The ID of the disposition.
     * @return DispositionsItemRequestBuilder
    */
    public function byId(string $id): DispositionsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new DispositionsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DispositionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dispositions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Sets a lead's current structured outcome while recording the disposition change in history for audit, automation, and reporting.
     * @param DispositionRequest $body Request model for creating or updating a disposition.
     * @param DispositionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DispositionResponse|null>
     * @throws Exception
    */
    public function post(DispositionRequest $body, ?DispositionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DispositionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Sets a lead's current structured outcome while recording the disposition change in history for audit, automation, and reporting.
     * @param DispositionRequest $body Request model for creating or updating a disposition.
     * @param DispositionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DispositionRequest $body, ?DispositionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DispositionsRequestBuilder
    */
    public function withUrl(string $rawUrl): DispositionsRequestBuilder {
        return new DispositionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
