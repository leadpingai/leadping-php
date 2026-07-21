<?php

namespace Leadping\OpenApiClient\Businesses\Me;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Businesses\Me\EscapedSwitch\SwitchRequestBuilder;
use Leadping\OpenApiClient\Businesses\Me\Invitations\InvitationsRequestBuilder;
use Leadping\OpenApiClient\Businesses\Me\OneZerodlc\OneZerodlcRequestBuilder;
use Leadping\OpenApiClient\Businesses\Me\Options\OptionsRequestBuilder;
use Leadping\OpenApiClient\Businesses\Me\Users\UsersRequestBuilder;
use Leadping\OpenApiClient\Models\BusinessRequest;
use Leadping\OpenApiClient\Models\BusinessResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /businesses/me
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
     * The users property
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/businesses/me');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the authenticated user's current business profile, including account settings, billing context, and communication configuration.
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessResponse|null>
     * @throws Exception
    */
    public function get(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '404' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a business account for the authenticated user, assigns them as its owner, and makes it their active business context.
     * @param BusinessRequest $body Request schema for the Leadping API business profile request, including the fields clients can send.
     * @param MeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessResponse|null>
     * @throws Exception
    */
    public function post(BusinessRequest $body, ?MeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates the authenticated user's current business profile, including contact, settings, and communication configuration.
     * @param BusinessRequest $body Request schema for the Leadping API business profile request, including the fields clients can send.
     * @param MeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessResponse|null>
     * @throws Exception
    */
    public function put(BusinessRequest $body, ?MeRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the authenticated user's current business profile, including account settings, billing context, and communication configuration.
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
     * Creates a business account for the authenticated user, assigns them as its owner, and makes it their active business context.
     * @param BusinessRequest $body Request schema for the Leadping API business profile request, including the fields clients can send.
     * @param MeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BusinessRequest $body, ?MeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates the authenticated user's current business profile, including contact, settings, and communication configuration.
     * @param BusinessRequest $body Request schema for the Leadping API business profile request, including the fields clients can send.
     * @param MeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(BusinessRequest $body, ?MeRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
