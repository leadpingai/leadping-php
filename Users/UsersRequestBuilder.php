<?php

namespace Leadping\OpenApiClient\Users;

use Leadping\OpenApiClient\Users\ChangeBillingPlan\ChangeBillingPlanRequestBuilder;
use Leadping\OpenApiClient\Users\Compliance\ComplianceRequestBuilder;
use Leadping\OpenApiClient\Users\Me\MeRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /users
*/
class UsersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The changeBillingPlan property
    */
    public function changeBillingPlan(): ChangeBillingPlanRequestBuilder {
        return new ChangeBillingPlanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The compliance property
    */
    public function compliance(): ComplianceRequestBuilder {
        return new ComplianceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The me property
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UsersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
