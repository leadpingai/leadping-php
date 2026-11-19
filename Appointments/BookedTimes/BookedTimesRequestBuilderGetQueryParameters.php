<?php

namespace Leadping\OpenApiClient\Appointments\BookedTimes;

/**
 * Gets occupied appointment times for a lead's selected assignee.
*/
class BookedTimesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $appointmentId 
    */
    public ?string $appointmentId = null;
    
    /**
     * @var string|null $leadId 
    */
    public ?string $leadId = null;
    
    /**
     * @var string|null $ownerId 
    */
    public ?string $ownerId = null;
    
    /**
     * Instantiates a new BookedTimesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $appointmentId 
     * @param string|null $leadId 
     * @param string|null $ownerId 
    */
    public function __construct(?string $appointmentId = null, ?string $leadId = null, ?string $ownerId = null) {
        $this->appointmentId = $appointmentId;
        $this->leadId = $leadId;
        $this->ownerId = $ownerId;
    }

}
