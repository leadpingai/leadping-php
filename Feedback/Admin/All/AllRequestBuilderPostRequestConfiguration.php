<?php

namespace Leadping\OpenApiClient\Feedback\Admin\All;

use DateTime;
use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllRequestBuilderPostQueryParameters.
     * @param string|null $area Product area or app section connected to this feedback admin query request.
     * @param string|null $businessId Business ID used to filter feedback items for admin review.
     * @param string|null $continuationToken Pagination token used to request the next page of Leadping API results.
     * @param DateTime|null $createdEnd End of the created-at date range filter for Leadping API results.
     * @param DateTime|null $createdStart Start of the created-at date range filter for Leadping API results.
     * @param int|null $pageSize Maximum number of results requested for this Leadping API page.
     * @param string|null $search Search text used to filter Leadping API results.
     * @param string|null $status Current lifecycle status for this feedback admin query request in the Leadping API.
     * @param string|null $type Type classification used to route and interpret this feedback admin query request in the Leadping API.
     * @return AllRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $area = null, ?string $businessId = null, ?string $continuationToken = null, ?DateTime $createdEnd = null, ?DateTime $createdStart = null, ?int $pageSize = null, ?string $search = null, ?string $status = null, ?string $type = null): AllRequestBuilderPostQueryParameters {
        return new AllRequestBuilderPostQueryParameters($area, $businessId, $continuationToken, $createdEnd, $createdStart, $pageSize, $search, $status, $type);
    }

}
