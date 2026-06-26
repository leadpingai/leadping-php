<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OutboundDeliverySource extends Enum {
    public const MANUAL = "manual";
    public const AUTOMATION = "automation";
    public const CAMPAIGN = "campaign";
    public const IMPORT = "import";
    public const API = "api";
    public const SYSTEM_NOTIFICATION = "system_notification";
    public const WARMUP = "warmup";
    public const RETRY = "retry";
}
