<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberWarmupCallStatus extends Enum {
    public const CREATED = "Created";
    public const SCHEDULED = "Scheduled";
    public const PLACING = "Placing";
    public const RINGING = "Ringing";
    public const ANSWERED = "Answered";
    public const CONNECTED = "Connected";
    public const COMPLETED = "Completed";
    public const FAILED = "Failed";
    public const CANCELED = "Canceled";
    public const SKIPPED = "Skipped";
    public const TIMED_OUT = "TimedOut";
}
