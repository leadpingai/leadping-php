<?php

namespace Leadping\OpenApiClient\Events\Businesses;

use Leadping\OpenApiClient\Events\Businesses\Item\WithBusinessItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events/businesses
*/
class BusinessesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.events.businesses.item collection
     * @param string $businessId The business identifier.
     * @return WithBusinessItemRequestBuilder
    */
    public function byBusinessId(string $businessId): WithBusinessItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessId'] = $businessId;
        return new WithBusinessItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BusinessesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/businesses');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
