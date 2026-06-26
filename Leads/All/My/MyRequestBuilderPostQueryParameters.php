<?php

namespace Leadping\OpenApiClient\Leads\All\My;

/**
 * Lists leads visible to the current user with paging, sorting, filters, tags, and archive status for pipeline review.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $archiveFilter 
    */
    public ?string $archiveFilter = null;
    
    /**
     * @var array<string>|null $tagIds 
    */
    public ?array $tagIds = null;
    
    /**
     * @var bool|null $tagMatchAll 
    */
    public ?bool $tagMatchAll = null;
    
    /**
     * @var bool|null $untagged 
    */
    public ?bool $untagged = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $archiveFilter 
     * @param array<string>|null $tagIds 
     * @param bool|null $tagMatchAll 
     * @param bool|null $untagged 
    */
    public function __construct(?string $archiveFilter = null, ?array $tagIds = null, ?bool $tagMatchAll = null, ?bool $untagged = null) {
        $this->archiveFilter = $archiveFilter;
        $this->tagIds = $tagIds;
        $this->tagMatchAll = $tagMatchAll;
        $this->untagged = $untagged;
    }

}
