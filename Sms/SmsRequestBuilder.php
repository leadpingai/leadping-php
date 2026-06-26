<?php

namespace Leadping\OpenApiClient\Sms;

use Leadping\OpenApiClient\Sms\Item\WithSmsEventItemRequestBuilder;
use Leadping\OpenApiClient\Sms\Send\SendRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /sms
*/
class SmsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The send property
    */
    public function send(): SendRequestBuilder {
        return new SendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.sms.item collection
     * @param string $smsEventId The sms event identifier.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/sms');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
