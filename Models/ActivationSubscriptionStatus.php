<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivationSubscriptionStatus extends Enum {
    public const PENDING = "Pending";
    public const ACTIVE = "Active";
    public const FAILED = "Failed";
    public const CANCELED = "Canceled";
}
