<?php

namespace Leadping\OpenApiClient\Tags;

/**
 * Lists tags for the current business, optionally including archived tags, for lead segmentation, filters, and routing labels.
*/
class TagsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeArchived 
    */
    public ?bool $includeArchived = null;
    
    /**
     * Instantiates a new TagsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeArchived 
    */
    public function __construct(?bool $includeArchived = null) {
        $this->includeArchived = $includeArchived;
    }

}
