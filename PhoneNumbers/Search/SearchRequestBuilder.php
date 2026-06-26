<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Search;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PhoneNumberSearchRequest;
use Leadping\OpenApiClient\Models\PhoneNumberSearchResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-numbers/search
*/
class SearchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SearchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/search');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Searches available phone numbers for purchase, applying country, area, and capability filters for lead communication setup.
     * @param PhoneNumberSearchRequest $body Request schema for the Leadping API phone number search request, including the fields clients can send.
     * @param SearchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PhoneNumberSearchResponse|null>
     * @throws Exception
    */
    public function post(PhoneNumberSearchRequest $body, ?SearchRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '500' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PhoneNumberSearchResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Searches available phone numbers for purchase, applying country, area, and capability filters for lead communication setup.
     * @param PhoneNumberSearchRequest $body Request schema for the Leadping API phone number search request, including the fields clients can send.
     * @param SearchRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PhoneNumberSearchRequest $body, ?SearchRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SearchRequestBuilder
    */
    public function withUrl(string $rawUrl): SearchRequestBuilder {
        return new SearchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
