<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberProviderLifecycleState extends Enum {
    public const UNKNOWN = "Unknown";
    public const REQUESTED = "Requested";
    public const PURCHASING = "Purchasing";
    public const PURCHASED = "Purchased";
    public const PROVISIONING = "Provisioning";
    public const ACTIVE = "Active";
    public const FAILED = "Failed";
    public const RELEASED = "Released";
    public const SUSPENDED = "Suspended";
}
