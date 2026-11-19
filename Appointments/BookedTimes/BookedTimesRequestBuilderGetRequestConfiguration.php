<?php

namespace Leadping\OpenApiClient\Appointments\BookedTimes;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BookedTimesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BookedTimesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BookedTimesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BookedTimesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BookedTimesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BookedTimesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BookedTimesRequestBuilderGetQueryParameters.
     * @param string|null $appointmentId 
     * @param string|null $leadId 
     * @param string|null $ownerId 
     * @return BookedTimesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $appointmentId = null, ?string $leadId = null, ?string $ownerId = null): BookedTimesRequestBuilderGetQueryParameters {
        return new BookedTimesRequestBuilderGetQueryParameters($appointmentId, $leadId, $ownerId);
    }

}
