<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberEventRecord_state extends Enum {
    public const AVAILABLE = "Available";
    public const ASSIGNED = "Assigned";
    public const PENDING_VERIFICATION = "Pending verification";
    public const READY_FOR_S_M_S = "Ready for SMS";
    public const READY_FOR_VOICE = "Ready for voice";
    public const RESTRICTED = "Restricted";
    public const SUSPENDED = "Suspended";
    public const FAILED = "Failed";
    public const RELEASED = "Released";
    public const PENDING_RELEASE = "Pending release";
    public const WARMUP_ONLY = "Warmup-only";
    public const INTERNAL_TEST_ONLY = "Internal/test-only";
}
