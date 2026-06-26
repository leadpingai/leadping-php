<?php

namespace Leadping\OpenApiClient\Events;

use Leadping\OpenApiClient\Events\All\AllRequestBuilder;
use Leadping\OpenApiClient\Events\Businesses\BusinessesRequestBuilder;
use Leadping\OpenApiClient\Events\Calls\CallsRequestBuilder;
use Leadping\OpenApiClient\Events\Conversations\ConversationsRequestBuilder;
use Leadping\OpenApiClient\Events\Item\WithEventItemRequestBuilder;
use Leadping\OpenApiClient\Events\Leads\LeadsRequestBuilder;
use Leadping\OpenApiClient\Events\Sms\SmsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events
*/
class EventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The businesses property
    */
    public function businesses(): BusinessesRequestBuilder {
        return new BusinessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calls property
    */
    public function calls(): CallsRequestBuilder {
        return new CallsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conversations property
    */
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The leads property
    */
    public function leads(): LeadsRequestBuilder {
        return new LeadsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sms property
    */
    public function sms(): SmsRequestBuilder {
        return new SmsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.events.item collection
     * @param string $eventId The ID of the event.
     * @return WithEventItemRequestBuilder
    */
    public function byEventId(string $eventId): WithEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['eventId'] = $eventId;
        return new WithEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
