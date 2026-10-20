<?php

namespace Leadping\OpenApiClient\Leads\FollowUps;

/**
 * Returns a paginated list of current incomplete follow-ups with lead assignment and organization access enforced, with the option to include upcoming follow-ups.
*/
class FollowUpsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $continuation The continuation token from a previous response, or null to retrieve the first page.
    */
    public ?string $continuation = null;
    
    /**
     * @var bool|null $includeUpcoming Whether to include future follow-ups. When false, returns only due and overdue follow-ups.
    */
    public ?bool $includeUpcoming = null;
    
    /**
     * Instantiates a new FollowUpsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $continuation The continuation token from a previous response, or null to retrieve the first page.
     * @param bool|null $includeUpcoming Whether to include future follow-ups. When false, returns only due and overdue follow-ups.
    */
    public function __construct(?string $continuation = null, ?bool $includeUpcoming = null) {
        $this->continuation = $continuation;
        $this->includeUpcoming = $includeUpcoming;
    }

}
