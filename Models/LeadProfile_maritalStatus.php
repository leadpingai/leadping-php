<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadProfile_maritalStatus extends Enum {
    public const MARRIED = "Married";
    public const SINGLE = "Single";
    public const WIDOW = "Widow";
    public const SEPARATED = "Separated";
    public const DIVORCED = "Divorced";
}
