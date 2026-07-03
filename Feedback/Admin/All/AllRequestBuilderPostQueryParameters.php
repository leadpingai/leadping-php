<?php

namespace Leadping\OpenApiClient\Feedback\Admin\All;

use DateTime;

/**
 * Lists submitted feedback for admin triage with table search, paging, and sorting in the request body.
*/
class AllRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("Area")
     * @var string|null $area Product area or app section connected to this feedback admin query request.
    */
    public ?string $area = null;
    
    /**
     * @QueryParameter("BusinessId")
     * @var string|null $businessId Business ID used to filter feedback items for admin review.
    */
    public ?string $businessId = null;
    
    /**
     * @QueryParameter("ContinuationToken")
     * @var string|null $continuationToken Pagination token used to request the next page of Leadping API results.
    */
    public ?string $continuationToken = null;
    
    /**
     * @QueryParameter("CreatedEnd")
     * @var DateTime|null $createdEnd End of the created-at date range filter for Leadping API results.
    */
    public ?DateTime $createdEnd = null;
    
    /**
     * @QueryParameter("CreatedStart")
     * @var DateTime|null $createdStart Start of the created-at date range filter for Leadping API results.
    */
    public ?DateTime $createdStart = null;
    
    /**
     * @QueryParameter("PageSize")
     * @var int|null $pageSize Maximum number of results requested for this Leadping API page.
    */
    public ?int $pageSize = null;
    
    /**
     * @QueryParameter("Search")
     * @var string|null $search Search text used to filter Leadping API results.
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("Status")
     * @var string|null $status Current lifecycle status for this feedback admin query request in the Leadping API.
    */
    public ?string $status = null;
    
    /**
     * @QueryParameter("Type")
     * @var string|null $type Type classification used to route and interpret this feedback admin query request in the Leadping API.
    */
    public ?string $type = null;
    
    /**
     * Instantiates a new AllRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $area Product area or app section connected to this feedback admin query request.
     * @param string|null $businessId Business ID used to filter feedback items for admin review.
     * @param string|null $continuationToken Pagination token used to request the next page of Leadping API results.
     * @param DateTime|null $createdEnd End of the created-at date range filter for Leadping API results.
     * @param DateTime|null $createdStart Start of the created-at date range filter for Leadping API results.
     * @param int|null $pageSize Maximum number of results requested for this Leadping API page.
     * @param string|null $search Search text used to filter Leadping API results.
     * @param string|null $status Current lifecycle status for this feedback admin query request in the Leadping API.
     * @param string|null $type Type classification used to route and interpret this feedback admin query request in the Leadping API.
    */
    public function __construct(?string $area = null, ?string $businessId = null, ?string $continuationToken = null, ?DateTime $createdEnd = null, ?DateTime $createdStart = null, ?int $pageSize = null, ?string $search = null, ?string $status = null, ?string $type = null) {
        $this->area = $area;
        $this->businessId = $businessId;
        $this->continuationToken = $continuationToken;
        $this->createdEnd = $createdEnd;
        $this->createdStart = $createdStart;
        $this->pageSize = $pageSize;
        $this->search = $search;
        $this->status = $status;
        $this->type = $type;
    }

}
