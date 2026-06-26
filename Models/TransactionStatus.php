<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TransactionStatus extends Enum {
    public const PENDING = "Pending";
    public const CONFIRMED = "Confirmed";
    public const FAILED = "Failed";
}
