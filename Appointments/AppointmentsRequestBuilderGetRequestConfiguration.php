<?php

namespace Leadping\OpenApiClient\Appointments;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppointmentsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppointmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppointmentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppointmentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppointmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppointmentsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppointmentsRequestBuilderGetQueryParameters.
     * @param bool|null $adminMode Whether to browse across organizations. Requires a platform administrator; due-only results remain limited to the current agent.
     * @param bool|null $dueOnly Whether to return only due, undismissed reminders assigned to the current agent.
     * @param bool|null $includeClosed Whether to include completed and cancelled appointments. Ignored when dueOnly is true.
     * @param string|null $leadId An optional lead identifier to filter appointments.
     * @return AppointmentsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $adminMode = null, ?bool $dueOnly = null, ?bool $includeClosed = null, ?string $leadId = null): AppointmentsRequestBuilderGetQueryParameters {
        return new AppointmentsRequestBuilderGetQueryParameters($adminMode, $dueOnly, $includeClosed, $leadId);
    }

}
