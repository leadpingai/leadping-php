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
     * @var bool|null $contactable Whether to include only conversations where calling is available.
    */
    public ?bool $contactable = null;
    
    /**
     * @var bool|null $priority Orders the full filtered inbox by the next action before paging.
    */
    public ?bool $priority = null;
    
    /**
     * @var bool|null $textingAvailable Whether to include only conversations where texting is available.
    */
    public ?bool $textingAvailable = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $archiveFilter Optional filter selecting active, archived, or all lead conversations.
     * @param bool|null $contactable Whether to include only conversations where calling is available.
     * @param bool|null $priority Orders the full filtered inbox by the next action before paging.
     * @param bool|null $textingAvailable Whether to include only conversations where texting is available.
    */
    public function __construct(?string $archiveFilter = null, ?bool $contactable = null, ?bool $priority = null, ?bool $textingAvailable = null) {
        $this->archiveFilter = $archiveFilter;
        $this->contactable = $contactable;
        $this->priority = $priority;
        $this->textingAvailable = $textingAvailable;
    }

}
