<?php

namespace Leadping\OpenApiClient\Reports\Exports;

use Leadping\OpenApiClient\Reports\Exports\Item\WithExportItemRequestBuilder;
use Leadping\OpenApiClient\Reports\Exports\My\MyRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /reports/exports
*/
class ExportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The my property
    */
    public function my(): MyRequestBuilder {
        return new MyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.reports.exports.item collection
     * @param string $exportId Unique identifier of the item
     * @return WithExportItemRequestBuilder
    */
    public function byExportId(string $exportId): WithExportItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['exportId'] = $exportId;
        return new WithExportItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/exports');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
