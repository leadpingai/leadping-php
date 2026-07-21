<?php

namespace Leadping\OpenApiClient\PaymentMethods\Invoices;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\StripeInvoiceResponse;
use Leadping\OpenApiClient\PaymentMethods\Invoices\Item\WithInvoiceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payment-methods/invoices
*/
class InvoicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.paymentMethods.invoices.item collection
     * @param string $invoiceId Unique identifier of the item
     * @return WithInvoiceItemRequestBuilder
    */
    public function byInvoiceId(string $invoiceId): WithInvoiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invoiceId'] = $invoiceId;
        return new WithInvoiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InvoicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment-methods/invoices');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the current business's Stripe invoices with their amounts, payment status, billing period, and hosted invoice details.
     * @param InvoicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<StripeInvoiceResponse>|null>
     * @throws Exception
    */
    public function get(?InvoicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [StripeInvoiceResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns the current business's Stripe invoices with their amounts, payment status, billing period, and hosted invoice details.
     * @param InvoicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InvoicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return InvoicesRequestBuilder
    */
    public function withUrl(string $rawUrl): InvoicesRequestBuilder {
        return new InvoicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
