<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BillingPlan extends Enum {
    public const ANNUAL = "Annual";
    public const MONTHLY = "Monthly";
}
