<?php

namespace Leadping\OpenApiClient\Conversations\Lead;

use Leadping\OpenApiClient\Conversations\Lead\Item\WithLeadItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /conversations/lead
*/
class LeadRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.conversations.lead.item collection
     * @param string $leadId The lead ID to get conversations for.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/conversations/lead');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
