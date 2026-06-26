<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneLookup_carrierType extends Enum {
    public const FIXED_LINE = "FixedLine";
    public const MOBILE = "Mobile";
    public const VOIP = "Voip";
    public const FIXED_LINE_OR_MOBILE = "FixedLineOrMobile";
    public const TOLL_FREE = "TollFree";
    public const PREMIUM_RATE = "PremiumRate";
    public const SHARED_COST = "SharedCost";
    public const PERSONAL_NUMBER = "PersonalNumber";
    public const PAGER = "Pager";
    public const UAN = "Uan";
    public const VOICEMAIL = "Voicemail";
    public const UNKNOWN = "Unknown";
}
