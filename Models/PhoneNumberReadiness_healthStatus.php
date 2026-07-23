<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberReadiness_healthStatus extends Enum {
    public const NOT_EVALUATED = "Not Evaluated";
    public const EVALUATING = "Evaluating";
    public const HEALTHY = "Healthy";
    public const NEEDS_ATTENTION = "Needs Attention";
    public const BLOCKED = "Blocked";
}
