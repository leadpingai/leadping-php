<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UsageChannel extends Enum {
    public const SMS = "sms";
    public const MMS = "mms";
    public const EMAIL = "email";
    public const VOICE = "voice";
    public const PHONE_NUMBER = "phone_number";
    public const WARMUP = "warmup";
    public const WEBSITE = "website";
    public const DOMAIN = "domain";
    public const ONE_ZERODLC = "10dlc";
    public const CONNECTION = "connection";
    public const AUTOMATION = "automation";
}
