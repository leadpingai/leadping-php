<?php

namespace Leadping\OpenApiClient\PaymentMethods\Invoices\Item\PdfAccess;

/**
 * Creates a short-lived, secure URL that lets the current organization view or download a private Stripe invoice PDF without exposing a permanent file link.
*/
class PdfAccessRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $download Whether the secure URL should download the PDF instead of displaying it inline.
    */
    public ?bool $download = null;
    
    /**
     * Instantiates a new PdfAccessRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $download Whether the secure URL should download the PDF instead of displaying it inline.
    */
    public function __construct(?bool $download = null) {
        $this->download = $download;
    }

}
