<?php

namespace Leadping\OpenApiClient\PaymentMethods\Invoices\Item;

use Leadping\OpenApiClient\PaymentMethods\Invoices\Item\PdfAccess\PdfAccessRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /payment-methods/invoices/{invoiceId}
*/
class WithInvoiceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The pdfAccess property
    */
    public function pdfAccess(): PdfAccessRequestBuilder {
        return new PdfAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithInvoiceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment-methods/invoices/{invoiceId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
