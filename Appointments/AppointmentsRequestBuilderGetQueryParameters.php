<?php

namespace Leadping\OpenApiClient\Appointments;

/**
 * Returns appointments visible to the current user, with optional lead, reminder, and status filters.
*/
class AppointmentsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $adminMode Whether to browse across organizations. Requires a platform administrator; due-only results remain limited to the current agent.
    */
    public ?bool $adminMode = null;
    
    /**
     * @var bool|null $dueOnly Whether to return only due, undismissed reminders assigned to the current agent.
    */
    public ?bool $dueOnly = null;
    
    /**
     * @var bool|null $includeClosed Whether to include completed and cancelled appointments. Ignored when dueOnly is true.
    */
    public ?bool $includeClosed = null;
    
    /**
     * @var string|null $leadId An optional lead identifier to filter appointments.
    */
    public ?string $leadId = null;
    
    /**
     * Instantiates a new AppointmentsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $adminMode Whether to browse across organizations. Requires a platform administrator; due-only results remain limited to the current agent.
     * @param bool|null $dueOnly Whether to return only due, undismissed reminders assigned to the current agent.
     * @param bool|null $includeClosed Whether to include completed and cancelled appointments. Ignored when dueOnly is true.
     * @param string|null $leadId An optional lead identifier to filter appointments.
    */
    public function __construct(?bool $adminMode = null, ?bool $dueOnly = null, ?bool $includeClosed = null, ?string $leadId = null) {
        $this->adminMode = $adminMode;
        $this->dueOnly = $dueOnly;
        $this->includeClosed = $includeClosed;
        $this->leadId = $leadId;
    }

}
