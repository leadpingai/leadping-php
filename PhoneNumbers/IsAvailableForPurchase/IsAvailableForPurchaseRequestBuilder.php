<?php

namespace Leadping\OpenApiClient\PhoneNumbers\IsAvailableForPurchase;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PhoneNumberAvailabilityRequest;
use Leadping\OpenApiClient\Models\PhoneNumberAvailabilityResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-numbers/is-available-for-purchase
*/
class IsAvailableForPurchaseRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new IsAvailableForPurchaseRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/is-available-for-purchase');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Checks whether a phone number can be purchased for the current business before creating or assigning it.
     * @param PhoneNumberAvailabilityRequest $body Request schema for checking phone number availability before purchase or assignment.
     * @param IsAvailableForPurchaseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PhoneNumberAvailabilityResponse|null>
     * @throws Exception
    */
    public function post(PhoneNumberAvailabilityRequest $body, ?IsAvailableForPurchaseRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '500' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PhoneNumberAvailabilityResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Checks whether a phone number can be purchased for the current business before creating or assigning it.
     * @param PhoneNumberAvailabilityRequest $body Request schema for checking phone number availability before purchase or assignment.
     * @param IsAvailableForPurchaseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PhoneNumberAvailabilityRequest $body, ?IsAvailableForPurchaseRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IsAvailableForPurchaseRequestBuilder
    */
    public function withUrl(string $rawUrl): IsAvailableForPurchaseRequestBuilder {
        return new IsAvailableForPurchaseRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
