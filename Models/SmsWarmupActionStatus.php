<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SmsWarmupActionStatus extends Enum {
    public const SCHEDULED = "Scheduled";
    public const SENDING = "Sending";
    public const SENT = "Sent";
    public const DELIVERED = "Delivered";
    public const RECEIVED = "Received";
    public const FAILED = "Failed";
    public const SKIPPED = "Skipped";
    public const PAUSED = "Paused";
    public const BLOCKED = "Blocked";
    public const CANCELLED = "Cancelled";
}
