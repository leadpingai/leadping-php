<?php

namespace Leadping\OpenApiClient\Reports\Exports\Item\Download;

/**
 * Validates an export download token and redirects to the generated file when the current-user report is ready.
*/
class DownloadRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $redirect Whether to redirect to the temporary file URL. Set to false to return the URL as JSON.
    */
    public ?bool $redirect = null;
    
    /**
     * @var string|null $token The short-lived download token issued for this export.
    */
    public ?string $token = null;
    
    /**
     * Instantiates a new DownloadRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $redirect Whether to redirect to the temporary file URL. Set to false to return the URL as JSON.
     * @param string|null $token The short-lived download token issued for this export.
    */
    public function __construct(?bool $redirect = null, ?string $token = null) {
        $this->redirect = $redirect;
        $this->token = $token;
    }

}
