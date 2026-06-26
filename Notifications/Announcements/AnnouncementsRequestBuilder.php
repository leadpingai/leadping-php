<?php

namespace Leadping\OpenApiClient\Notifications\Announcements;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\PagedResultOfNotificationTableRow;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\RequestDataOptions;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /notifications/announcements
*/
class AnnouncementsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AnnouncementsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/notifications/announcements');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists announcement notifications for the current user with paging and filters for release notes, notices, and operational updates.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param AnnouncementsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PagedResultOfNotificationTableRow|null>
     * @throws Exception
    */
    public function post(RequestDataOptions $body, ?AnnouncementsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '500' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PagedResultOfNotificationTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists announcement notifications for the current user with paging and filters for release notes, notices, and operational updates.
     * @param RequestDataOptions $body Options for flexible, efficient, and explicit querying in Cosmos DB or similar repositories.
     * @param AnnouncementsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RequestDataOptions $body, ?AnnouncementsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AnnouncementsRequestBuilder
    */
    public function withUrl(string $rawUrl): AnnouncementsRequestBuilder {
        return new AnnouncementsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
