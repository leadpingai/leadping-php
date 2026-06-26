<?php

namespace Leadping\OpenApiClient\Businesses\Invitations\Token;

use Leadping\OpenApiClient\Businesses\Invitations\Token\Item\WithTokenItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /businesses/invitations/token
*/
class TokenRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.businesses.invitations.token.item collection
     * @param string $token The invitation acceptance token.
     * @return WithTokenItemRequestBuilder
    */
    public function byToken(string $token): WithTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['token'] = $token;
        return new WithTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TokenRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/businesses/invitations/token');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
