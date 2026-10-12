<?php

namespace Leadping\OpenApiClient\Conversations\Item\MarkRead;

/**
 * Clears unread state only at the observed event version. Returns false if the conversation changed or is inaccessible.
*/
class MarkReadRequestBuilderPostQueryParameters 
{
    /**
     * @var int|null $eventVersion The event version observed by the reader.
    */
    public ?int $eventVersion = null;
    
    /**
     * Instantiates a new MarkReadRequestBuilderPostQueryParameters and sets the default values.
     * @param int|null $eventVersion The event version observed by the reader.
    */
    public function __construct(?int $eventVersion = null) {
        $this->eventVersion = $eventVersion;
    }

}
