<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EventTableRow_trafficType extends Enum {
    public const REAL_LEAD = "RealLead";
    public const WARMUP = "Warmup";
    public const TEST = "Test";
    public const SYSTEM_INTERNAL = "SystemInternal";
    public const FAILED_ATTEMPT = "FailedAttempt";
}
