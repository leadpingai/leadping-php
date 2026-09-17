<?php

namespace Leadping\OpenApiClient\Analytics\My\Export;

use DateTime;

/**
 * Downloads the current organization's analytics as a CSV file, using the same cohort, timestamps, and metric definitions as the analytics charts.
*/
class ExportRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $days Optional number of days before endAt to include when startAt is not supplied. Defaults to 30 and is limited to 1 through 365.
    */
    public ?int $days = null;
    
    /**
     * @var DateTime|null $endAt Optional exclusive end timestamp for the analytics period. Defaults to the current UTC time.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Optional inclusive start timestamp for the analytics period.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new ExportRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $days Optional number of days before endAt to include when startAt is not supplied. Defaults to 30 and is limited to 1 through 365.
     * @param DateTime|null $endAt Optional exclusive end timestamp for the analytics period. Defaults to the current UTC time.
     * @param DateTime|null $startAt Optional inclusive start timestamp for the analytics period.
    */
    public function __construct(?int $days = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->days = $days;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
