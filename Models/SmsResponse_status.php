<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SmsResponse_status extends Enum {
    public const DRAFT = "draft";
    public const SCHEDULED = "scheduled";
    public const QUEUED = "queued";
    public const SENDING = "sending";
    public const SENT = "sent";
    public const RECEIVED = "received";
    public const DELIVERED = "delivered";
    public const FAILED = "failed";
    public const UNDELIVERABLE = "undeliverable";
    public const OPTED_OUT = "opted_out";
    public const BLOCKED_COMPLIANCE = "blocked_compliance";
    public const BLOCKED_BILLING = "blocked_billing";
    public const BLOCKED_MISSING_CAMPAIGN = "blocked_missing_campaign";
    public const CANCELED = "canceled";
}
