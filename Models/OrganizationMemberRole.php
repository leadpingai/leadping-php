<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OrganizationMemberRole extends Enum {
    public const ACCOUNT_ADMIN = "Account Admin";
    public const OWNER = "Owner";
    public const ADMIN = "Admin";
    public const AGENT = "Agent";
}
