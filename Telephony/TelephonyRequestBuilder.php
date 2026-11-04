<?php

namespace Leadping\OpenApiClient\Telephony;

use Leadping\OpenApiClient\Telephony\Availability\AvailabilityRequestBuilder;
use Leadping\OpenApiClient\Telephony\IncomingCaller\IncomingCallerRequestBuilder;
use Leadping\OpenApiClient\Telephony\Login\LoginRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /telephony
*/
class TelephonyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The availability property
    */
    public function availability(): AvailabilityRequestBuilder {
        return new AvailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incomingCaller property
    */
    public function incomingCaller(): IncomingCallerRequestBuilder {
        return new IncomingCallerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The login property
    */
    public function login(): LoginRequestBuilder {
        return new LoginRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TelephonyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/telephony');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
