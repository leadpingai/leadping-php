<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class InternalPhoneNumberStatus extends Enum {
    public const UNREGISTERED = "Unregistered";
    public const PROVISIONING = "Provisioning";
    public const FAILED_PROVISIONING = "FailedProvisioning";
    public const ACTIVE = "Active";
    public const EXPIRED = "Expired";
    public const SUSPENDED = "Suspended";
    public const PENDING_RELEASE = "PendingRelease";
}
