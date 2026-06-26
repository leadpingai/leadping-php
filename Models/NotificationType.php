<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationType extends Enum {
    public const GENERAL = "General";
    public const LEAD = "Lead";
    public const CALL = "Call";
    public const SMS = "Sms";
    public const BILLING = "Billing";
    public const SYSTEM = "System";
    public const SUCCESS = "Success";
    public const WARNING = "Warning";
    public const ERROR = "Error";
    public const INFO = "Info";
    public const ANNOUNCEMENT = "Announcement";
    public const ACTIVATION = "Activation";
}
