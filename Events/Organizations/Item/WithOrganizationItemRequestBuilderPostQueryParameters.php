<?php

namespace Leadping\OpenApiClient\Events\Organizations\Item;

use DateTime;

/**
 * Lists event records for an organization with paging and filters so admins can review lead communication and automation events.
*/
class WithOrganizationItemRequestBuilderPostQueryParameters 
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
     * Instantiates a new WithOrganizationItemRequestBuilderPostQueryParameters and sets the default values.
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
    */
    public function __construct(?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
