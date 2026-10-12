<?php

namespace Leadping\OpenApiClient\Conversations\Item\OutboundReadiness;

/**
 * Checks outbound sender readiness for an accessible conversation without sending a message or placing a call.
*/
class OutboundReadinessRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $voice Whether to check call readiness. When false, checks SMS readiness.
    */
    public ?bool $voice = null;
    
    /**
     * Instantiates a new OutboundReadinessRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $voice Whether to check call readiness. When false, checks SMS readiness.
    */
    public function __construct(?bool $voice = null) {
        $this->voice = $voice;
    }

}
