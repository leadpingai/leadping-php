<?php

namespace Leadping\OpenApiClient\Reports\Exports\Item\Download;

/**
 * Validates an export download token and redirects to the generated file when the current-user report is ready.
*/
class DownloadRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $token The short-lived download token issued for this export.
    */
    public ?string $token = null;
    
    /**
     * Instantiates a new DownloadRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $token The short-lived download token issued for this export.
    */
    public function __construct(?string $token = null) {
        $this->token = $token;
    }

}
