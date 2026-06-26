<?php

namespace Leadping\OpenApiClient\Events\Leads;

use Leadping\OpenApiClient\Events\Leads\Item\WithLeadItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events/leads
*/
class LeadsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.events.leads.item collection
     * @param string $leadId The ID of the lead.
     * @return WithLeadItemRequestBuilder
    */
    public function byLeadId(string $leadId): WithLeadItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['leadId'] = $leadId;
        return new WithLeadItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LeadsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/leads');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
