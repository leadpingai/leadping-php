<?php

namespace Leadping\OpenApiClient\Leads\Intake;

/**
 * Creates a source-authenticated lead from a flat intake payload, capturing contact fields, metadata, and automation-ready lead details.
*/
class IntakeRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $sourceKey The Leadping source key supplied as a query string parameter.
    */
    public ?string $sourceKey = null;
    
    /**
     * Instantiates a new IntakeRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $sourceKey The Leadping source key supplied as a query string parameter.
    */
    public function __construct(?string $sourceKey = null) {
        $this->sourceKey = $sourceKey;
    }

}
