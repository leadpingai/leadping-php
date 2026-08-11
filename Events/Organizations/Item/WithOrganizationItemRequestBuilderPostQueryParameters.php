<?php

namespace Leadping\OpenApiClient\Events\Organizations\Item;

use DateTime;

/**
 * Lists event records for an organization with paging and filters so admins can review lead communication and automation events.
*/
class WithOrganizationItemRequestBuilderPostQueryParameters 
{
    /**
     * @var DateTime|null $endAt Optional exclusive end timestamp for event occurrence.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Optional inclusive start timestamp for event occurrence.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new WithOrganizationItemRequestBuilderPostQueryParameters and sets the default values.
     * @param DateTime|null $endAt Optional exclusive end timestamp for event occurrence.
     * @param DateTime|null $startAt Optional inclusive start timestamp for event occurrence.
    */
    public function __construct(?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
