<?php

namespace Leadping\OpenApiClient\Events\Calls;

use Leadping\OpenApiClient\Events\Calls\All\AllRequestBuilder;
use Leadping\OpenApiClient\Events\Calls\Item\WithCallEventItemRequestBuilder;
use Leadping\OpenApiClient\Events\Calls\Lead\LeadRequestBuilder;
use Leadping\OpenApiClient\Events\Calls\Phone\PhoneRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events/calls
*/
class CallsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lead property
    */
    public function lead(): LeadRequestBuilder {
        return new LeadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The phone property
    */
    public function phone(): PhoneRequestBuilder {
        return new PhoneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.events.calls.item collection
     * @param string $callEventId The ID of the call event to retrieve.
     * @return WithCallEventItemRequestBuilder
    */
    public function byCallEventId(string $callEventId): WithCallEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callEventId'] = $callEventId;
        return new WithCallEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CallsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/calls');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
