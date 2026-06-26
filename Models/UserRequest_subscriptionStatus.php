<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserRequest_subscriptionStatus extends Enum {
    public const PENDING = "Pending";
    public const ACTIVE = "Active";
    public const OVERDUE = "Overdue";
    public const CANCELED = "Canceled";
}
