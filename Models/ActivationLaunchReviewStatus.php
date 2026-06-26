<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivationLaunchReviewStatus extends Enum {
    public const NOT_READY = "NotReady";
    public const PENDING = "Pending";
    public const APPROVED = "Approved";
    public const NOT_REQUIRED = "NotRequired";
    public const BLOCKED = "Blocked";
}
