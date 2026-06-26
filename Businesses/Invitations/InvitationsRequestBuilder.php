<?php

namespace Leadping\OpenApiClient\Businesses\Invitations;

use Leadping\OpenApiClient\Businesses\Invitations\Accept\AcceptRequestBuilder;
use Leadping\OpenApiClient\Businesses\Invitations\Token\TokenRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /businesses/invitations
*/
class InvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The accept property
    */
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The token property
    */
    public function token(): TokenRequestBuilder {
        return new TokenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InvitationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/businesses/invitations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
