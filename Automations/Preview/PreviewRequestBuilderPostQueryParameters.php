<?php

namespace Leadping\OpenApiClient\Automations\Preview;

/**
 * Previews automation execution for a sample lead, showing matched steps and messages without creating follow-up events.Set `validate_only` to return configuration validation without evaluating conditions or actions and without writing a test audit event.
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
