<?php

namespace Leadping\OpenApiClient\Conversations\My;

/**
 * Lists the current user's lead conversations with paging and sorting for inbox views, recent follow-up, and communication history.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $archiveFilter 
    */
    public ?string $archiveFilter = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $archiveFilter 
    */
    public function __construct(?string $archiveFilter = null) {
        $this->archiveFilter = $archiveFilter;
    }

}
