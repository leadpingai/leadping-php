<?php

namespace Leadping\OpenApiClient\PaymentMethods\Invoices\Item\PdfAccess;

/**
 * Creates a short-lived URL for viewing or downloading a private invoice PDF.
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
