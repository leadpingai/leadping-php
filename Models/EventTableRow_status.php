<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EventTableRow_status extends Enum {
    public const PENDING = "Pending";
    public const IN_PROGRESS = "InProgress";
    public const COMPLETED = "Completed";
    public const CANCELLED = "Cancelled";
    public const SCHEDULED = "Scheduled";
    public const QUEUED = "Queued";
    public const SENDING = "Sending";
    public const SENT = "Sent";
    public const RECEIVED = "Received";
    public const DELIVERED = "Delivered";
    public const UNDELIVERABLE = "Undeliverable";
    public const OPTED_OUT = "Opted out";
    public const BLOCKED = "Blocked";
    public const INITIATED = "Initiated";
    public const RINGING = "Ringing";
    public const ACTIVE = "Active";
    public const ENDED = "Ended";
    public const MISSED = "Missed";
    public const VOICEMAIL = "Voicemail";
    public const FAILED = "Failed";
    public const CANCELED = "Canceled";
}
