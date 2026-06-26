<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessUserRole extends Enum {
    public const OWNER = "Owner";
    public const ADMIN = "Admin";
    public const AGENT = "Agent";
}
