<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SmsWarmupActionType extends Enum {
    public const OUTBOUND_MESSAGE = "OutboundMessage";
    public const REPLY_MESSAGE = "ReplyMessage";
    public const HEALTH_CHECK = "HealthCheck";
    public const AUDIT = "Audit";
}
