<?php

namespace Leadping\OpenApiClient\Transactions\All\My;

use DateTime;

/**
 * Lists current-user transactions with paging, sorting, and filters for wallet events, billing history, and reconciliation.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var DateTime|null $endAt Optional exclusive end timestamp for transaction creation.
    */
    public ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Optional inclusive start timestamp for transaction creation.
    */
    public ?DateTime $startAt = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters and sets the default values.
     * @param DateTime|null $endAt Optional exclusive end timestamp for transaction creation.
     * @param DateTime|null $startAt Optional inclusive start timestamp for transaction creation.
    */
    public function __construct(?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
