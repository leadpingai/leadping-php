<?php

namespace Leadping\OpenApiClient\Sources\Item\Metrics;

use DateTime;

/**
 * Returns lead creation metrics for one business intake source, including accepted, rejected, duplicate, validation, and recent activity counts for monitoring.
*/
class MetricsRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days Optional rolling day count when explicit dates are not provided.
    */
    public ?int $days = null;
    
    /**
     * @var DateTime|null $endAt Optional end date/time for the metric range.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Optional start date/time for the metric range.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MetricsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days Optional rolling day count when explicit dates are not provided.
     * @param DateTime|null $endAt Optional end date/time for the metric range.
     * @param DateTime|null $startAt Optional start date/time for the metric range.
    */
    public function __construct(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->days = $days;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
