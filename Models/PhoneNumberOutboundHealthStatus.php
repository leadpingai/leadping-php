<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberOutboundHealthStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const NEW = "new";
    public const HEALTHY = "healthy";
    public const WARMUP = "warmup";
    public const LIMITED = "limited";
    public const COOLING_DOWN = "cooling_down";
    public const SUSPENDED = "suspended";
    public const DISABLED = "disabled";
}
