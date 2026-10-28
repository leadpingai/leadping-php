<?php

namespace Leadping\OpenApiClient\Outbound\Item;

use Leadping\OpenApiClient\Outbound\Item\Capacity\CapacityRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /outbound/{phoneNumberId}
*/
class WithPhoneNumberItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The capacity property
    */
    public function capacity(): CapacityRequestBuilder {
        return new CapacityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithPhoneNumberItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/outbound/{phoneNumberId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
