<?php

namespace Leadping\OpenApiClient\Organizations\Me;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\OrganizationRequest;
use Leadping\OpenApiClient\Models\OrganizationResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Organizations\Me\EscapedSwitch\SwitchRequestBuilder;
use Leadping\OpenApiClient\Organizations\Me\Invitations\InvitationsRequestBuilder;
use Leadping\OpenApiClient\Organizations\Me\Members\MembersRequestBuilder;
use Leadping\OpenApiClient\Organizations\Me\OneZerodlc\OneZerodlcRequestBuilder;
use Leadping\OpenApiClient\Organizations\Me\Options\OptionsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /organizations/me
*/
class MeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The switch property
    */
    public function escapedSwitch(): SwitchRequestBuilder {
        return new SwitchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invitations property
    */
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The OneZerodlc property
    */
    public function oneZerodlc(): OneZerodlcRequestBuilder {
        return new OneZerodlcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The optionsPath property
    */
    public function optionsPath(): OptionsRequestBuilder {
        return new OptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/me');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the authenticated user's current organization profile, including account settings, billing context, and communication configuration.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationResponse|null>
     * @throws Exception
    */
    public function get(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates an organization account for the authenticated user, assigns them as its owner, and makes it their active organization context.
     * @param OrganizationRequest $body Defines the fields clients can send when working with organization profile.
     * @param MeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationResponse|null>
     * @throws Exception
    */
    public function post(OrganizationRequest $body, ?MeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates the authenticated user's current organization profile, including contact, settings, and communication configuration.
     * @param OrganizationRequest $body Defines the fields clients can send when working with organization profile.
     * @param MeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrganizationResponse|null>
     * @throws Exception
    */
    public function put(OrganizationRequest $body, ?MeRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OrganizationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the authenticated user's current organization profile, including account settings, billing context, and communication configuration.
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
     * Creates an organization account for the authenticated user, assigns them as its owner, and makes it their active organization context.
     * @param OrganizationRequest $body Defines the fields clients can send when working with organization profile.
     * @param MeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OrganizationRequest $body, ?MeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates the authenticated user's current organization profile, including contact, settings, and communication configuration.
     * @param OrganizationRequest $body Defines the fields clients can send when working with organization profile.
     * @param MeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(OrganizationRequest $body, ?MeRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
