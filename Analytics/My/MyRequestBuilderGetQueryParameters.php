<?php

namespace Leadping\OpenApiClient\Analytics\My;

use DateTime;

/**
 * Returns current-business analytics for lead communication, including event volume, response metrics, and date-range filtering.
*/
class MyRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days 
    */
    public ?int $days = null;
    
    /**
     * @var DateTime|null $endAt 
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt 
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MyRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days 
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
    */
    public function __construct(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->days = $days;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
