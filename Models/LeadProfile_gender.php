<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadProfile_gender extends Enum {
    public const M = "M";
    public const F = "F";
    public const NON_BINARY = "NonBinary";
    public const PREFER_NOT_TO_SAY = "PreferNotToSay";
    public const OTHER = "Other";
}
