<?php

namespace Leadping\OpenApiClient\Events\Sms\Phone;

use Leadping\OpenApiClient\Events\Sms\Phone\Item\WithPhoneNumberItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events/sms/phone
*/
class PhoneRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.events.sms.phone.item collection
     * @param string $phoneNumber The phone number to search for.
     * @return WithPhoneNumberItemRequestBuilder
    */
    public function byPhoneNumber(string $phoneNumber): WithPhoneNumberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['phoneNumber'] = $phoneNumber;
        return new WithPhoneNumberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PhoneRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/sms/phone');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
