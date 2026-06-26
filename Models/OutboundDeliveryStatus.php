<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OutboundDeliveryStatus extends Enum {
    public const PENDING = "pending";
    public const SCHEDULED = "scheduled";
    public const RESERVED = "reserved";
    public const SENDING = "sending";
    public const SENT = "sent";
    public const FAILED = "failed";
    public const SKIPPED = "skipped";
    public const BLOCKED = "blocked";
    public const CANCELLED = "cancelled";
}
