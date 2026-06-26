<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberResponse_callWarmupState extends Enum {
    public const NOT_STARTED = "Not Started";
    public const NOT_ELIGIBLE = "Not Eligible";
    public const WARMING = "Warming";
    public const WARMED = "Warmed";
    public const PAUSED = "Paused";
    public const NEEDS_ATTENTION = "Needs Attention";
    public const BLOCKED = "Blocked";
}
