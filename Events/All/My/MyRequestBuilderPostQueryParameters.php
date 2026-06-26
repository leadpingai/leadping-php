<?php

namespace Leadping\OpenApiClient\Events\All\My;

use DateTime;

/**
 * Lists event records visible to the current user with paging, sorting, and filters across lead, SMS, call, and automation events.
*/
class MyRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $category 
    */
    public ?string $category = null;
    
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
     * @param string|null $category 
     * @param DateTime|null $endAt 
     * @param DateTime|null $startAt 
    */
    public function __construct(?string $category = null, ?DateTime $endAt = null, ?DateTime $startAt = null) {
        $this->category = $category;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
    }

}
