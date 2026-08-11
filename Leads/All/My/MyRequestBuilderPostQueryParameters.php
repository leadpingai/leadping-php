<?php

namespace Leadping\OpenApiClient\Leads\All\My;

/**
 * Lists leads visible to the current user with paging, sorting, filters, tags, and archive status for pipeline review.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $archiveFilter Optional filter selecting active, archived, or all leads.
    */
    public ?string $archiveFilter = null;
    
    /**
     * @var array<string>|null $tagIds Optional tag identifiers used to filter the lead list.
    */
    public ?array $tagIds = null;
    
    /**
     * @var bool|null $tagMatchAll Whether a lead must contain every supplied tag instead of any supplied tag.
    */
    public ?bool $tagMatchAll = null;
    
    /**
     * @var bool|null $untagged Whether to include only leads that have no tags.
    */
    public ?bool $untagged = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $archiveFilter Optional filter selecting active, archived, or all leads.
     * @param array<string>|null $tagIds Optional tag identifiers used to filter the lead list.
     * @param bool|null $tagMatchAll Whether a lead must contain every supplied tag instead of any supplied tag.
     * @param bool|null $untagged Whether to include only leads that have no tags.
    */
    public function __construct(?string $archiveFilter = null, ?array $tagIds = null, ?bool $tagMatchAll = null, ?bool $untagged = null) {
        $this->archiveFilter = $archiveFilter;
        $this->tagIds = $tagIds;
        $this->tagMatchAll = $tagMatchAll;
        $this->untagged = $untagged;
    }

}
