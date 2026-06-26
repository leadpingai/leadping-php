<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationPriority extends Enum {
    public const LOW = "Low";
    public const MEDIUM = "Medium";
    public const HIGH = "High";
    public const CRITICAL = "Critical";
}
