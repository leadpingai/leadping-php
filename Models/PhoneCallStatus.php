<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneCallStatus extends Enum {
    public const SCHEDULED = "scheduled";
    public const QUEUED = "queued";
    public const INITIATED = "initiated";
    public const RINGING = "ringing";
    public const IN_PROGRESS = "in_progress";
    public const ACTIVE = "active";
    public const COMPLETED = "completed";
    public const ENDED = "ended";
    public const BUSY = "busy";
    public const NO_ANSWER = "no_answer";
    public const FAILED = "failed";
    public const CANCELED = "canceled";
    public const MISSED = "missed";
    public const TRANSFERRED = "transferred";
    public const VOICEMAIL = "voicemail";
    public const BLOCKED_BILLING = "blocked_billing";
    public const BLOCKED_PHONE_NUMBER_STATUS = "blocked_phone_number_status";
    public const BLOCKED_CONFIGURATION = "blocked_configuration";
    public const BLOCKED_PERMISSION = "blocked_permission";
    public const CONFIGURATION_REQUIRED = "configuration_required";
}
