<?php

namespace Leadping\OpenApiClient\Notifications\Push\Installations;

use Leadping\OpenApiClient\Notifications\Push\Installations\Current\CurrentRequestBuilder;
use Leadping\OpenApiClient\Notifications\Push\Installations\Item\WithInstallationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /notifications/push/installations
*/
class InstallationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The current property
    */
    public function current(): CurrentRequestBuilder {
        return new CurrentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.notifications.push.installations.item collection
     * @param string $installationId The stable mobile installation identifier to unregister.
     * @return WithInstallationItemRequestBuilder
    */
    public function byInstallationId(string $installationId): WithInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['installationId'] = $installationId;
        return new WithInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InstallationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/notifications/push/installations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
