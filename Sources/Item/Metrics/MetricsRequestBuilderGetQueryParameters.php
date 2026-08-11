<?php

namespace Leadping\OpenApiClient\Sources\Item\Metrics;

use DateTime;

/**
 * Returns lead creation metrics for one organization intake source, including accepted, rejected, duplicate, validation, and recent activity counts for monitoring.
*/
class MetricsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $days Optional rolling day count when explicit dates are not provided.
    */
    public ?string $days = null;
    
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
     * @param string|null $days Optional rolling day count when explicit dates are not provided.
     * @param DateTime|null $endAt Optional end date/time for the metric range.
     * @param DateTime|null $startAt Optional start date/time for the metric range.
    */
    public function __construct(?string $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->days = $days;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
