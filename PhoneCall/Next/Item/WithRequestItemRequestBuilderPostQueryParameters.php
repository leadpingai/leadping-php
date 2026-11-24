<?php

namespace Leadping\OpenApiClient\PhoneCall\Next\Item;

/**
 * Start the next eligible call from a rep’s Leadping inbox. Supply the inbox filters so the next call comes from the leads in the rep’s current view.
*/
class WithRequestItemRequestBuilderPostQueryParameters 
{
    /**
     * @var bool|null $texting 
    */
    public ?bool $texting = null;
    
    /**
     * Instantiates a new WithRequestItemRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $texting 
    */
    public function __construct(?bool $texting = null) {
        $this->texting = $texting;
    }

}
