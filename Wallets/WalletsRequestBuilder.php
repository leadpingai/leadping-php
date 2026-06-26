<?php

namespace Leadping\OpenApiClient\Wallets;

use Leadping\OpenApiClient\Wallets\Item\WalletsItemRequestBuilder;
use Leadping\OpenApiClient\Wallets\Me\MeRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /wallets
*/
class WalletsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The me property
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.wallets.item collection
     * @param string $id The ID of the wallet to retrieve.
     * @return WalletsItemRequestBuilder
    */
    public function byId(string $id): WalletsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new WalletsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WalletsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/wallets');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
