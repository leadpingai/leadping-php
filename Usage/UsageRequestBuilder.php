<?php

namespace Leadping\OpenApiClient\Usage;

use Leadping\OpenApiClient\Usage\All\AllRequestBuilder;
use Leadping\OpenApiClient\Usage\Summary\SummaryRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /usage
*/
class UsageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The summary property
    */
    public function summary(): SummaryRequestBuilder {
        return new SummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UsageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/usage');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
