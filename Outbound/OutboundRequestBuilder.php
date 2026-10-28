<?php

namespace Leadping\OpenApiClient\Outbound;

use Leadping\OpenApiClient\Outbound\Item\WithPhoneNumberItemRequestBuilder;
use Leadping\OpenApiClient\Outbound\Overview\OverviewRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /outbound
*/
class OutboundRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The overview property
    */
    public function overview(): OverviewRequestBuilder {
        return new OverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.outbound.item collection
     * @param string $phoneNumberId The ID of the phone number whose outbound capacity should be retrieved.
     * @return WithPhoneNumberItemRequestBuilder
    */
    public function byPhoneNumberId(string $phoneNumberId): WithPhoneNumberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['phoneNumberId'] = $phoneNumberId;
        return new WithPhoneNumberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OutboundRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/outbound');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
