<?php

namespace Leadping\OpenApiClient\PaymentMethods\Invoices\Item\PdfAccess;

/**
 * Creates a short-lived, secure URL that lets the current business view or download a private Stripe invoice PDF without exposing a permanent file link.
*/
class PdfAccessRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $download 
    */
    public ?bool $download = null;
    
    /**
     * Instantiates a new PdfAccessRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $download 
    */
    public function __construct(?bool $download = null) {
        $this->download = $download;
    }

}
