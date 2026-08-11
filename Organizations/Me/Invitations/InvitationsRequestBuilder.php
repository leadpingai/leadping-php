<?php

namespace Leadping\OpenApiClient\Organizations\Me\Invitations;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\OrganizationInvitationRequest;
use Leadping\OpenApiClient\Models\OrganizationInvitationResponse;
use Leadping\OpenApiClient\Models\OrganizationInvitationTableRow;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Organizations\Me\Invitations\Item\WithInvitationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /organizations/me/invitations
*/
class InvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.organizations.me.invitations.item collection
     * @param string $invitationId The ID of the current-organization invitation to revoke.
     * @return WithInvitationItemRequestBuilder
    */
    public function byInvitationId(string $invitationId): WithInvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invitationId'] = $invitationId;
        return new WithInvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InvitationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/me/invitations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists pending and historical invitations for the current organization, including recipient, role, status, and expiration.
     * @param InvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<OrganizationInvitationTableRow>|null>
     * @throws Exception
    */
    public function get(?InvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [OrganizationInvitationTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates an invitation for the current organization so another user can join with the requested role and account access.
     * @param OrganizationInvitationRequest $body Defines the input used for organization invitation.
     * @param InvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationInvitationResponse|null>
     * @throws Exception
    */
    public function post(OrganizationInvitationRequest $body, ?InvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationInvitationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists pending and historical invitations for the current organization, including recipient, role, status, and expiration.
     * @param InvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Creates an invitation for the current organization so another user can join with the requested role and account access.
     * @param OrganizationInvitationRequest $body Defines the input used for organization invitation.
     * @param InvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OrganizationInvitationRequest $body, ?InvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return InvitationsRequestBuilder
    */
    public function withUrl(string $rawUrl): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
