<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadProfile_employmentType extends Enum {
    public const EMPLOYED = "Employed";
    public const PART_TIME = "PartTime";
    public const SELF_EMPLOYED = "SelfEmployed";
    public const CONTRACTOR = "Contractor";
    public const UNEMPLOYED = "Unemployed";
    public const RETIRED = "Retired";
    public const STUDENT = "Student";
    public const MILITARY = "Military";
    public const HOMEMAKER = "Homemaker";
    public const DISABLED = "Disabled";
    public const OTHER = "Other";
}
