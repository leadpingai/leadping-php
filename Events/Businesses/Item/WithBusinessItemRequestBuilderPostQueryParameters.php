<?php

namespace Leadping\OpenApiClient\Events\Businesses\Item;

use DateTime;

/**
 * Lists event records for a business with paging and filters so admins can review lead communication and automation events.
*/
class WithBusinessItemRequestBuilderPostQueryParameters 
{
    /**
     * @var DateTime|null $endAt 
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt 
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new WithBusinessItemRequestBuilderPostQueryParameters and sets the default values.
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
    */
    public function __construct(?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
