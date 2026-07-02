<?php

namespace Leadping\OpenApiClient\Leads;

/**
 * Creates a source-authenticated lead captured outside Leadping, starting follow-up, routing, and automation from structured lead data.
*/
class LeadsRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $sourceKey The Leadping source key supplied as a query string parameter, or omitted when supplied as Authorization: Bearer lp_src_...
    */
    public ?string $sourceKey = null;
    
    /**
     * Instantiates a new LeadsRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $sourceKey The Leadping source key supplied as a query string parameter, or omitted when supplied as Authorization: Bearer lp_src_...
    */
    public function __construct(?string $sourceKey = null) {
        $this->sourceKey = $sourceKey;
    }

}
