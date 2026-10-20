<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadContactPreferences_channel extends Enum {
    public const EMAIL = "Email";
    public const PHONE = "Phone";
    public const SMS = "Sms";
}
