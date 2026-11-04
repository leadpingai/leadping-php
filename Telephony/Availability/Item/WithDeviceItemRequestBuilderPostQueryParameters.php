<?php

namespace Leadping\OpenApiClient\Telephony\Availability\Item;

/**
 * Updates the busy state of a calling device for the authenticated user and returns whether the update succeeded.
*/
class WithDeviceItemRequestBuilderPostQueryParameters 
{
    /**
     * @var bool|null $busy Whether the device is currently busy with a call.
    */
    public ?bool $busy = null;
    
    /**
     * Instantiates a new WithDeviceItemRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $busy Whether the device is currently busy with a call.
    */
    public function __construct(?bool $busy = null) {
        $this->busy = $busy;
    }

}
