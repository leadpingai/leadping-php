<?php

namespace Leadping\OpenApiClient\Telephony\IncomingCaller;

/**
 * Finds a lead in the current organization by the caller's normalized primary phone number. Returns an empty lead identity when no matching lead exists.
*/
class IncomingCallerRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $phoneNumber The incoming caller's phone number to normalize and match against organization leads.
    */
    public ?string $phoneNumber = null;
    
    /**
     * Instantiates a new IncomingCallerRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $phoneNumber The incoming caller's phone number to normalize and match against organization leads.
    */
    public function __construct(?string $phoneNumber = null) {
        $this->phoneNumber = $phoneNumber;
    }

}
