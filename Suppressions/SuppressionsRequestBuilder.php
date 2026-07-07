<?php

namespace Leadping\OpenApiClient\Suppressions;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\SuppressionEntryRequest;
use Leadping\OpenApiClient\Models\SuppressionEntryResponse;
use Leadping\OpenApiClient\Suppressions\Check\CheckRequestBuilder;
use Leadping\OpenApiClient\Suppressions\Release\ReleaseRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /suppressions
*/
class SuppressionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The check property
    */
    public function check(): CheckRequestBuilder {
        return new CheckRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The release property
    */
    public function release(): ReleaseRequestBuilder {
        return new ReleaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SuppressionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/suppressions');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates or reactivates a Leadping suppression entry that blocks future outreach to a recipient across the selected communication channel.
     * @param SuppressionEntryRequest $body Request payload for suppression entry.
     * @param SuppressionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SuppressionEntryResponse|null>
     * @throws Exception
    */
    public function post(SuppressionEntryRequest $body, ?SuppressionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SuppressionEntryResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates or reactivates a Leadping suppression entry that blocks future outreach to a recipient across the selected communication channel.
     * @param SuppressionEntryRequest $body Request payload for suppression entry.
     * @param SuppressionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SuppressionEntryRequest $body, ?SuppressionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SuppressionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SuppressionsRequestBuilder {
        return new SuppressionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
