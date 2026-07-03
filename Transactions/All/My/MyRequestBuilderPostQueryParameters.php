<?php

namespace Leadping\OpenApiClient\Transactions\All\My;

use DateTime;

/**
 * Lists current-user transactions with paging, sorting, and filters for wallet events, billing history, and reconciliation.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var DateTime|null $endAt 
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt 
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
    */
    public function __construct(?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
