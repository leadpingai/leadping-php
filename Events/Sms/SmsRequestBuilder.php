<?php

namespace Leadping\OpenApiClient\Events\Sms;

use Leadping\OpenApiClient\Events\Sms\All\AllRequestBuilder;
use Leadping\OpenApiClient\Events\Sms\Item\WithSmsEventItemRequestBuilder;
use Leadping\OpenApiClient\Events\Sms\Lead\LeadRequestBuilder;
use Leadping\OpenApiClient\Events\Sms\Phone\PhoneRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events/sms
*/
class SmsRequestBuilder extends BaseRequestBuilder 
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
     * Gets an item from the Leadping/OpenApiClient.events.sms.item collection
     * @param string $smsEventId The ID of the SMS event to retrieve.
     * @return WithSmsEventItemRequestBuilder
    */
    public function bySmsEventId(string $smsEventId): WithSmsEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['smsEventId'] = $smsEventId;
        return new WithSmsEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SmsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/sms');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
