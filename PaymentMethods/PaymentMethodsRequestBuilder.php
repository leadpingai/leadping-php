<?php

namespace Leadping\OpenApiClient\PaymentMethods;

use Leadping\OpenApiClient\PaymentMethods\Item\PaymentMethodsItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /payment-methods
*/
class PaymentMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.paymentMethods.item collection
     * @param string $id The ID of the payment method to retrieve.
     * @return PaymentMethodsItemRequestBuilder
    */
    public function byId(string $id): PaymentMethodsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new PaymentMethodsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PaymentMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment-methods');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
