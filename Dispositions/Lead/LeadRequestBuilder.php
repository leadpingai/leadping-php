<?php

namespace Leadping\OpenApiClient\Dispositions\Lead;

use Leadping\OpenApiClient\Dispositions\Lead\Item\WithLeadItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /dispositions/lead
*/
class LeadRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.dispositions.lead.item collection
     * @param string $leadId The ID of the lead to get dispositions for.
     * @return WithLeadItemRequestBuilder
    */
    public function byLeadId(string $leadId): WithLeadItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['leadId'] = $leadId;
        return new WithLeadItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LeadRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dispositions/lead');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
