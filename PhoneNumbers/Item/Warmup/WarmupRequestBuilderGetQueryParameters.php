<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Item\Warmup;

use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Returns warmup status for a phone number, including readiness, limits, and recent events used for delivery pacing.
*/
class WarmupRequestBuilderGetQueryParameters 
{
    /**
     * @var Date|null $endDate The end date.
    */
    public ?Date $endDate = null;
    
    /**
     * @var Date|null $startDate The start date.
    */
    public ?Date $startDate = null;
    
    /**
     * @var int|null $windowDays The window days.
    */
    public ?int $windowDays = null;
    
    /**
     * Instantiates a new WarmupRequestBuilderGetQueryParameters and sets the default values.
     * @param Date|null $endDate The end date.
     * @param Date|null $startDate The start date.
     * @param int|null $windowDays The window days.
    */
    public function __construct(?Date $endDate = null, ?Date $startDate = null, ?int $windowDays = null) {
        $this->endDate = $endDate;
        $this->startDate = $startDate;
        $this->windowDays = $windowDays;
    }

}
