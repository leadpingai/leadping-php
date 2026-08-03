<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TenDlcRegistrationStatus extends Enum {
    public const NOT_SUBMITTED = "NotSubmitted";
    public const PENDING = "Pending";
    public const APPROVED = "Approved";
    public const REJECTED = "Rejected";
    public const FAILED = "Failed";
}
