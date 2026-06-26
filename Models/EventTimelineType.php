<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EventTimelineType extends Enum {
    public const MESSAGE = "Message";
    public const SMS = "Sms";
    public const MMS = "Mms";
    public const CALL = "Call";
    public const VOICEMAIL = "Voicemail";
    public const NOTE = "Note";
    public const DISPOSITION = "Disposition";
    public const LEAD_CREATED = "LeadCreated";
    public const LEAD_UPDATED = "LeadUpdated";
    public const NOTIFICATION = "Notification";
    public const PAYMENT = "Payment";
    public const WARMUP = "Warmup";
}
