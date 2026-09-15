<?php

namespace Leadping\OpenApiClient\Automations\Preview;

/**
 * Preview matched automation steps and messages for a sample lead without creating follow-up events, or use validate_only to check the automation configuration.
*/
class PreviewRequestBuilderPostQueryParameters 
{
    /**
     * @QueryParameter("validate_only")
     * @var bool|null $validateOnly When true, validates the automation without evaluating actions or writing an audit event.
    */
    public ?bool $validateOnly = null;
    
    /**
     * Instantiates a new PreviewRequestBuilderPostQueryParameters and sets the default values.
     * @param bool|null $validate_only When true, validates the automation without evaluating actions or writing an audit event.
    */
    public function __construct(?bool $validate_only = null) {
        $this->validateOnly = $validate_only;
    }

}
