<?php

namespace Leadping\OpenApiClient\Organizations\Invitations\Accept;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\AcceptOrganizationInvitationRequest;
use Leadping\OpenApiClient\Models\OrganizationInvitationResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /organizations/invitations/accept
*/
class AcceptRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AcceptRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/invitations/accept');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Accepts an organization invitation for the signed-in user, creating membership and setting organization access context.
     * @param AcceptOrganizationInvitationRequest $body Defines the input used for accept organization invitation.
     * @param AcceptRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationInvitationResponse|null>
     * @throws Exception
    */
    public function post(AcceptOrganizationInvitationRequest $body, ?AcceptRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationInvitationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Accepts an organization invitation for the signed-in user, creating membership and setting organization access context.
     * @param AcceptOrganizationInvitationRequest $body Defines the input used for accept organization invitation.
     * @param AcceptRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AcceptOrganizationInvitationRequest $body, ?AcceptRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AcceptRequestBuilder
    */
    public function withUrl(string $rawUrl): AcceptRequestBuilder {
        return new AcceptRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
