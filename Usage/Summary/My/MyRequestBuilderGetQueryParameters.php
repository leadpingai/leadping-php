<?php

namespace Leadping\OpenApiClient\Usage\Summary\My;

use DateTime;

/**
 * Returns current-business usage totals for the active billing period, including spend, limits, and event summary data.
*/
class MyRequestBuilderGetQueryParameters 
{
    /**
     * @var DateTime|null $periodEnd The period end.
    */
    public ?DateTime $periodEnd = null;
    
    /**
     * @var DateTime|null $periodStart The period start.
    */
    public ?DateTime $periodStart = null;
    
    /**
     * Instantiates a new MyRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $periodEnd The period end.
     * @param DateTime|null $periodStart The period start.
    */
    public function __construct(?DateTime $periodEnd = null, ?DateTime $periodStart = null) {
        $this->periodEnd = $periodEnd;
        $this->periodStart = $periodStart;
    }

}
