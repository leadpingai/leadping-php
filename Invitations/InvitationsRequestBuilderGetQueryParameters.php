<?php

namespace Leadping\OpenApiClient\Invitations;

/**
 * List open, unexpired organization invitations for the signed-in recipient’s verified email address, or use an invitation token to look up one invite.
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
