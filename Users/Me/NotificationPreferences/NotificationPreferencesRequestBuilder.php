<?php

namespace Leadping\OpenApiClient\Users\Me\NotificationPreferences;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\UserNotificationPreferences;
use Leadping\OpenApiClient\Models\UserResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /users/me/notification-preferences
*/
class NotificationPreferencesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new NotificationPreferencesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/me/notification-preferences');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update notification channel and delivery preferences for the authenticated Leadping user through the API without submitting unrelated user profile fields.
     * @param UserNotificationPreferences $body Describes user notification preferences data used in Leadping API requests and responses.
     * @param NotificationPreferencesRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserResponse|null>
     * @throws Exception
    */
    public function put(UserNotificationPreferences $body, ?NotificationPreferencesRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '429' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update notification channel and delivery preferences for the authenticated Leadping user through the API without submitting unrelated user profile fields.
     * @param UserNotificationPreferences $body Describes user notification preferences data used in Leadping API requests and responses.
     * @param NotificationPreferencesRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UserNotificationPreferences $body, ?NotificationPreferencesRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return NotificationPreferencesRequestBuilder
    */
    public function withUrl(string $rawUrl): NotificationPreferencesRequestBuilder {
        return new NotificationPreferencesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
