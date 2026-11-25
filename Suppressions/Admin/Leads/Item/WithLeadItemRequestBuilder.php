<?php

namespace Leadping\OpenApiClient\Suppressions\Admin\Leads\Item;

use Leadping\OpenApiClient\Suppressions\Admin\Leads\Item\Item\WithChannelItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /suppressions/admin/leads/{leadId}
*/
class WithLeadItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.suppressions.admin.leads.item.item collection
     * @param string $channel Unique identifier of the item
     * @return WithChannelItemRequestBuilder
    */
    public function byChannel(string $channel): WithChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel'] = $channel;
        return new WithChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithLeadItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/suppressions/admin/leads/{leadId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
