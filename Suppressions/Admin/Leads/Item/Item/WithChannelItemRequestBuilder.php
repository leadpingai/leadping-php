<?php

namespace Leadping\OpenApiClient\Suppressions\Admin\Leads\Item\Item;

use Leadping\OpenApiClient\Suppressions\Admin\Leads\Item\Item\Item\WithOptedInItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /suppressions/admin/leads/{leadId}/{channel}
*/
class WithChannelItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.suppressions.admin.leads.item.item.item collection
     * @param bool $optedIn Unique identifier of the item
     * @return WithOptedInItemRequestBuilder
    */
    public function byOptedIn(bool $optedIn): WithOptedInItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['optedIn'] = $optedIn;
        return new WithOptedInItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithChannelItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/suppressions/admin/leads/{leadId}/{channel}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
