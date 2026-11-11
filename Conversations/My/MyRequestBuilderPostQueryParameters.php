<?php

namespace Leadping\OpenApiClient\Conversations\My;

/**
 * Lists the current user's lead conversations with paging and sorting for inbox views, recent follow-up, and communication history.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $archiveFilter Optional filter selecting active, archived, or all lead conversations.
    */
    public ?string $archiveFilter = null;
    
    /**
     * @var bool|null $contactable Whether to include only conversations with contactable leads.
    */
    public ?bool $contactable = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $archiveFilter Optional filter selecting active, archived, or all lead conversations.
     * @param bool|null $contactable Whether to include only conversations with contactable leads.
    */
    public function __construct(?string $archiveFilter = null, ?bool $contactable = null) {
        $this->archiveFilter = $archiveFilter;
        $this->contactable = $contactable;
    }

}
