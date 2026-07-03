<?php

namespace Leadping\OpenApiClient\PhoneCall;

use Leadping\OpenApiClient\PhoneCall\Initiate\InitiateRequestBuilder;
use Leadping\OpenApiClient\PhoneCall\Item\WithCallItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /phone-call
*/
class PhoneCallRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The initiate property
    */
    public function initiate(): InitiateRequestBuilder {
        return new InitiateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.phoneCall.item collection
     * @param string $callId The unique identifier of the call to end.
     * @return WithCallItemRequestBuilder
    */
    public function byCallId(string $callId): WithCallItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callId'] = $callId;
        return new WithCallItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PhoneCallRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-call');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
