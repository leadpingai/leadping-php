<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Item\Status;

use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Returns provider and Leadping status for a phone number, including messaging warmup, assignments, and verification state.
*/
class StatusRequestBuilderGetQueryParameters 
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
     * @var string|null $windowDays The window days.
    */
    public ?string $windowDays = null;
    
    /**
     * Instantiates a new StatusRequestBuilderGetQueryParameters and sets the default values.
     * @param Date|null $endDate The end date.
     * @param Date|null $startDate The start date.
     * @param string|null $windowDays The window days.
    */
    public function __construct(?Date $endDate = null, ?Date $startDate = null, ?string $windowDays = null) {
        $this->endDate = $endDate;
        $this->startDate = $startDate;
        $this->windowDays = $windowDays;
    }

}
