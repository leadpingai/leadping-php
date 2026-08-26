<?php

namespace Leadping\OpenApiClient\PhoneCall\Item\Transfer;

/**
 * The call operation validates ownership and current provider state before returning the updated Leadping call representation.
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
