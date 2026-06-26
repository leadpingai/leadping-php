<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OutboundDeliveryChannel extends Enum {
    public const SMS = "sms";
    public const VOICE = "voice";
    public const EMAIL = "email";
    public const WEBHOOK = "webhook";
    public const INTERNAL_NOTIFICATION = "internal_notification";
}
