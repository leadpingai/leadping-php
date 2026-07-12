<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessTableRow_subscriptionStatus extends Enum {
    public const PENDING = "Pending";
    public const ACTIVE = "Active";
    public const OVERDUE = "Overdue";
    public const CANCELED = "Canceled";
}
