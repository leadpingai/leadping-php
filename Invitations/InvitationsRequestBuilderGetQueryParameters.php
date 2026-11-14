<?php

namespace Leadping\OpenApiClient\Invitations;

/**
 * Get
*/
class InvitationsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $token 
    */
    public ?string $token = null;
    
    /**
     * Instantiates a new InvitationsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $token 
    */
    public function __construct(?string $token = null) {
        $this->token = $token;
    }

}
