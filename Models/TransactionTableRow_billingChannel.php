<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TransactionTableRow_billingChannel extends Enum {
    public const LEAD = "lead";
    public const SMS = "sms";
    public const MMS = "mms";
    public const EMAIL = "email";
    public const VOICE = "voice";
    public const PHONE_NUMBER = "phone_number";
    public const WARMUP = "warmup";
    public const WEBSITE = "website";
    public const OPENAI = "openai";
    public const DOMAIN = "domain";
    public const ONE_ZERODLC = "10dlc";
    public const CONNECTION = "connection";
    public const AUTOMATION = "automation";
}
