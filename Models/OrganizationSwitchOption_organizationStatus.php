<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OrganizationSwitchOption_organizationStatus extends Enum {
    public const SETTING_UP = "SettingUp";
    public const SETUP_COMPLETED = "SetupCompleted";
    public const ACTIVE = "Active";
}
