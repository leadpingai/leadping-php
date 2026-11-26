<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SpendPeriod extends Enum {
    public const DAY = "day";
    public const WEEK = "week";
    public const MONTH = "month";
}
