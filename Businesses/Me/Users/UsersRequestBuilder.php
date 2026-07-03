<?php

namespace Leadping\OpenApiClient\Businesses\Me\Users;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Businesses\Me\Users\Item\WithUserItemRequestBuilder;
use Leadping\OpenApiClient\Models\BusinessUserRequest;
use Leadping\OpenApiClient\Models\BusinessUserResponse;
use Leadping\OpenApiClient\Models\BusinessUserTableRow;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /businesses/me/users
*/
class UsersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.businesses.me.users.item collection
     * @param string $userId The ID of the user whose current-business role is changing.
     * @return WithUserItemRequestBuilder
    */
    public function byUserId(string $userId): WithUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userId'] = $userId;
        return new WithUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UsersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/businesses/me/users');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists users assigned to the current business, including roles and membership details for access management.
     * @param UsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<BusinessUserTableRow>|null>
     * @throws Exception
    */
    public function get(?UsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [BusinessUserTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Adds an existing user to the current business with the requested role for shared lead communication and account access.
     * @param BusinessUserRequest $body Request schema for the Leadping API business user request, including the fields clients can send.
     * @param UsersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessUserResponse|null>
     * @throws Exception
    */
    public function post(BusinessUserRequest $body, ?UsersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessUserResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists users assigned to the current business, including roles and membership details for access management.
     * @param UsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Adds an existing user to the current business with the requested role for shared lead communication and account access.
     * @param BusinessUserRequest $body Request schema for the Leadping API business user request, including the fields clients can send.
     * @param UsersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BusinessUserRequest $body, ?UsersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UsersRequestBuilder
    */
    public function withUrl(string $rawUrl): UsersRequestBuilder {
        return new UsersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
