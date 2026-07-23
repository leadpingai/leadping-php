<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SmsReadinessState extends Enum {
    public const NOT_STARTED = "Not Started";
    public const IN_PROGRESS = "In Progress";
    public const PAUSED = "Paused";
    public const BLOCKED = "Blocked";
    public const READY = "Ready";
}
