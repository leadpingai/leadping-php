<?php

namespace Leadping\OpenApiClient\PhoneNumbers;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PhoneNumberRequest;
use Leadping\OpenApiClient\Models\PhoneNumberResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\PhoneNumbers\All\AllRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\IsAvailableForPurchase\IsAvailableForPurchaseRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\Item\PhoneNumberItemRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\Outgoing\OutgoingRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\Search\SearchRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /phone-numbers
*/
class PhoneNumbersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The isAvailableForPurchase property
    */
    public function isAvailableForPurchase(): IsAvailableForPurchaseRequestBuilder {
        return new IsAvailableForPurchaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outgoing property
    */
    public function outgoing(): OutgoingRequestBuilder {
        return new OutgoingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The search property
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.phoneNumbers.item collection
     * @param string $phoneNumberId The phone number identifier.
     * @return PhoneNumberItemRequestBuilder
    */
    public function byPhoneNumberId(string $phoneNumberId): PhoneNumberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['phoneNumber%2Did'] = $phoneNumberId;
        return new PhoneNumberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PhoneNumbersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Purchases or creates a phone number for the current business so it can be assigned to messaging, calls, and lead follow-up.
     * @param PhoneNumberRequest $body Request schema for the Leadping API phone number update request, including the fields clients can send.
     * @param PhoneNumbersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PhoneNumberResponse|null>
     * @throws Exception
    */
    public function post(PhoneNumberRequest $body, ?PhoneNumbersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '500' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PhoneNumberResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Purchases or creates a phone number for the current business so it can be assigned to messaging, calls, and lead follow-up.
     * @param PhoneNumberRequest $body Request schema for the Leadping API phone number update request, including the fields clients can send.
     * @param PhoneNumbersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PhoneNumberRequest $body, ?PhoneNumbersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PhoneNumbersRequestBuilder
    */
    public function withUrl(string $rawUrl): PhoneNumbersRequestBuilder {
        return new PhoneNumbersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
