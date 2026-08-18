<?php

namespace Leadping\OpenApiClient\Analytics\My;

use DateTime;

/**
 * Returns current-organization analytics for lead communication, including event volume, response metrics, and date-range filtering.
*/
class MyRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days Optional number of recent days to include when explicit timestamps are not supplied.
    */
    public ?int $days = null;
    
    /**
     * @var DateTime|null $endAt Optional exclusive end timestamp for the analytics period.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Optional inclusive start timestamp for the analytics period.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MyRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days Optional number of recent days to include when explicit timestamps are not supplied.
     * @param DateTime|null $endAt Optional exclusive end timestamp for the analytics period.
     * @param DateTime|null $startAt Optional inclusive start timestamp for the analytics period.
    */
    public function __construct(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->days = $days;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
