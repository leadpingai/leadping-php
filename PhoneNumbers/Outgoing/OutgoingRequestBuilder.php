<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Outgoing;

use Leadping\OpenApiClient\PhoneNumbers\Outgoing\Conversation\ConversationRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\Outgoing\EscapedNew\NewRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\Outgoing\ManualOverride\ManualOverrideRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /phone-numbers/outgoing
*/
class OutgoingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The conversation property
    */
    public function conversation(): ConversationRequestBuilder {
        return new ConversationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The new property
    */
    public function escapedNew(): NewRequestBuilder {
        return new NewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The manualOverride property
    */
    public function manualOverride(): ManualOverrideRequestBuilder {
        return new ManualOverrideRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OutgoingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/outgoing');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
