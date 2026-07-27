<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneLookup_lineType extends Enum {
    public const WIRELINE = "Wireline";
    public const WIRELESS = "Wireless";
    public const VO_WI_FI = "VoWiFi";
    public const VO_I_P = "VoIP";
    public const PRE_PAID_WIRELESS = "PrePaidWireless";
    public const UNKNOWN = "Unknown";
}
