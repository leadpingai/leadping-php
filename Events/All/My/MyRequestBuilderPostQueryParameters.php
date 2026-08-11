<?php

namespace Leadping\OpenApiClient\Events\All\My;

use DateTime;

/**
 * Lists event records visible to the current user with paging, sorting, and filters across lead, SMS, call, and automation events.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $category Optional event category used to narrow the results.
    */
    public ?string $category = null;
    
    /**
     * @var DateTime|null $endAt Optional exclusive end timestamp for event occurrence.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Optional inclusive start timestamp for event occurrence.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $category Optional event category used to narrow the results.
     * @param DateTime|null $endAt Optional exclusive end timestamp for event occurrence.
     * @param DateTime|null $startAt Optional inclusive start timestamp for event occurrence.
    */
    public function __construct(?string $category = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->category = $category;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
