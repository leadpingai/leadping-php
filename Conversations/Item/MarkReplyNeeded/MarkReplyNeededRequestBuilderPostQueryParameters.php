<?php

namespace Leadping\OpenApiClient\Conversations\Item\MarkReplyNeeded;

/**
 * Sets the reply requirement only at the observed reply version. Returns false if the reply version changed or the conversation is inaccessible.
*/
class MarkReplyNeededRequestBuilderPostQueryParameters 
{
    /**
     * @var int|null $replyVersion The reply version observed by the caller. Must be non-negative.
    */
    public ?int $replyVersion = null;
    
    /**
     * Instantiates a new MarkReplyNeededRequestBuilderPostQueryParameters and sets the default values.
     * @param int|null $replyVersion The reply version observed by the caller. Must be non-negative.
    */
    public function __construct(?int $replyVersion = null) {
        $this->replyVersion = $replyVersion;
    }

}
