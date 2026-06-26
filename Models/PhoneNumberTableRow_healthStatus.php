<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberTableRow_healthStatus extends Enum {
    public const NOT_STARTED = "Not Started";
    public const WARMING = "Warming";
    public const HEALTHY = "Healthy";
    public const NEEDS_ATTENTION = "Needs Attention";
    public const PAUSED = "Paused";
    public const BLOCKED = "Blocked";
    public const READY = "Ready";
}
