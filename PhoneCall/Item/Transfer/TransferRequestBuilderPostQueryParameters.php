<?php

namespace Leadping\OpenApiClient\PhoneCall\Item\Transfer;

/**
 * Transfers an active Leadping phone call to a new phone number and returns the updated call record with status and routing details.
*/
class TransferRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $newPhoneNumber The phone number to transfer the call to.
    */
    public ?string $newPhoneNumber = null;
    
    /**
     * Instantiates a new TransferRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $newPhoneNumber The phone number to transfer the call to.
    */
    public function __construct(?string $newPhoneNumber = null) {
        $this->newPhoneNumber = $newPhoneNumber;
    }

}
