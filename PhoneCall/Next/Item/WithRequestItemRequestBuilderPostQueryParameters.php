<?php

namespace Leadping\OpenApiClient\PhoneCall\Next\Item;

/**
 * Starts the next eligible call in the rep's filtered inbox.
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
