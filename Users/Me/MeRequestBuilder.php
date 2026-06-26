<?php

namespace Leadping\OpenApiClient\Users\Me;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\UserRequest;
use Leadping\OpenApiClient\Models\UserResponse;
use Leadping\OpenApiClient\Users\Me\LastLogin\LastLoginRequestBuilder;
use Leadping\OpenApiClient\Users\Me\Paymentmethod\PaymentmethodRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /users/me
*/
class MeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The lastLogin property
    */
    public function lastLogin(): LastLoginRequestBuilder {
        return new LastLoginRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentmethod property
    */
    public function paymentmethod(): PaymentmethodRequestBuilder {
        return new PaymentmethodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/me');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the current user's profile, roles, business context, billing state, and compliance settings for portal sessions.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserResponse|null>
     * @throws Exception
    */
    public function get(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates the current user's profile fields, contact details, preferences, or business context used across Leadping.
     * @param UserRequest $body Request schema for the Leadping API user profile request, including the fields clients can send.
     * @param MeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserResponse|null>
     * @throws Exception
    */
    public function put(UserRequest $body, ?MeRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the current user's profile, roles, business context, billing state, and compliance settings for portal sessions.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates the current user's profile fields, contact details, preferences, or business context used across Leadping.
     * @param UserRequest $body Request schema for the Leadping API user profile request, including the fields clients can send.
     * @param MeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UserRequest $body, ?MeRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MeRequestBuilder
    */
    public function withUrl(string $rawUrl): MeRequestBuilder {
        return new MeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
