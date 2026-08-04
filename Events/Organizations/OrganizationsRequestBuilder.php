<?php

namespace Leadping\OpenApiClient\Events\Organizations;

use Leadping\OpenApiClient\Events\Organizations\Item\WithOrganizationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /events/organizations
*/
class OrganizationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.events.organizations.item collection
     * @param string $organizationId The organization identifier.
     * @return WithOrganizationItemRequestBuilder
    */
    public function byOrganizationId(string $organizationId): WithOrganizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organizationId'] = $organizationId;
        return new WithOrganizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OrganizationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/events/organizations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
