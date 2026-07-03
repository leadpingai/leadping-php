<?php

namespace Leadping\OpenApiClient\PhoneCall\Item;

use Leadping\OpenApiClient\PhoneCall\Item\Hangup\HangupRequestBuilder;
use Leadping\OpenApiClient\PhoneCall\Item\Status\StatusRequestBuilder;
use Leadping\OpenApiClient\PhoneCall\Item\Transfer\TransferRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /phone-call/{callId}
*/
class WithCallItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The hangup property
    */
    public function hangup(): HangupRequestBuilder {
        return new HangupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The status property
    */
    public function status(): StatusRequestBuilder {
        return new StatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transfer property
    */
    public function transfer(): TransferRequestBuilder {
        return new TransferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCallItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-call/{callId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
