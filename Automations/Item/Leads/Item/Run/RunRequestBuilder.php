<?php

namespace Leadping\OpenApiClient\Automations\Item\Leads\Item\Run;

use Leadping\OpenApiClient\Automations\Item\Leads\Item\Run\Item\WithRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /automations/{id}/leads/{leadId}/run
*/
class RunRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.automations.item.leads.item.run.item collection
     * @param string $requestId Unique identifier of the item
     * @return WithRequestItemRequestBuilder
    */
    public function byRequestId(string $requestId): WithRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['requestId'] = $requestId;
        return new WithRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RunRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/automations/{id}/leads/{leadId}/run');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
