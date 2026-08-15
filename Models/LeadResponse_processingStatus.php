<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadResponse_processingStatus extends Enum {
    public const VERIFYING = "Verifying";
    public const VALIDATING = "Validating";
    public const ENRICHING = "Enriching";
    public const READY = "Ready";
    public const INVALID = "Invalid";
    public const FAILED = "Failed";
}
