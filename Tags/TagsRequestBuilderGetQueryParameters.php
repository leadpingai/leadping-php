<?php

namespace Leadping\OpenApiClient\Tags;

/**
 * Lists tags for the current organization, optionally including archived tags, for lead segmentation, filters, and routing labels.
*/
class TagsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeArchived Whether to include tags that are no longer available for new assignments.
    */
    public ?bool $includeArchived = null;
    
    /**
     * Instantiates a new TagsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeArchived Whether to include tags that are no longer available for new assignments.
    */
    public function __construct(?bool $includeArchived = null) {
        $this->includeArchived = $includeArchived;
    }

}
