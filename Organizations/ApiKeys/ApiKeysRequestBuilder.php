<?php

namespace Leadping\OpenApiClient\Organizations\ApiKeys;

use Leadping\OpenApiClient\Organizations\ApiKeys\Item\ApiKeysItemRequestBuilder;
use Leadping\OpenApiClient\Organizations\ApiKeys\My\MyRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /organizations/api-keys
*/
class ApiKeysRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The my property
    */
    public function my(): MyRequestBuilder {
        return new MyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.organizations.apiKeys.item collection
     * @param string $id Unique identifier of the item
     * @return ApiKeysItemRequestBuilder
    */
    public function byId(string $id): ApiKeysItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new ApiKeysItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApiKeysRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organizations/api-keys');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
