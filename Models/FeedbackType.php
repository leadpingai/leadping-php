<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FeedbackType extends Enum {
    public const BUG = "bug";
    public const CONFUSING = "confusing";
    public const FEATURE_REQUEST = "feature_request";
    public const MISSING_CAPABILITY = "missing_capability";
    public const OTHER = "other";
}
