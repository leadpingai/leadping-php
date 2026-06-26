<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EventDetailResponse_status extends Enum {
    public const PENDING = "Pending";
    public const IN_PROGRESS = "InProgress";
    public const COMPLETED = "Completed";
    public const FAILED = "Failed";
    public const CANCELLED = "Cancelled";
}
