<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserDataExportStatuses extends Enum {
    public const PENDING = "Pending";
    public const PROCESSING = "Processing";
    public const COMPLETED = "Completed";
    public const FAILED = "Failed";
    public const EXPIRED = "Expired";
}
