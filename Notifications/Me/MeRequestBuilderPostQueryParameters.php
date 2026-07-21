<?php

namespace Leadping\OpenApiClient\Notifications\Me;

use DateTime;

/**
 * Lists current-user notifications with paging, sorting, and filters for operational alerts, announcements, and follow-up updates.
*/
class MeRequestBuilderPostQueryParameters 
{
    /**
     * @var DateTime|null $endAt Exclusive end of the created date range.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Inclusive beginning of the created date range.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MeRequestBuilderPostQueryParameters and sets the default values.
     * @param DateTime|null $endAt Exclusive end of the created date range.
     * @param DateTime|null $startAt Inclusive beginning of the created date range.
    */
    public function __construct(?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
