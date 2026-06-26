<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SendSmsRequest_outboundPriority extends Enum {
    public const CRITICAL_INTERNAL_NOTIFICATION = "critical_internal_notification";
    public const FRESH_INBOUND_LEAD_RESPONSE = "fresh_inbound_lead_response";
    public const MANUAL_USER_INITIATED = "manual_user_initiated";
    public const ACTIVE_CONVERSATION_REPLY = "active_conversation_reply";
    public const AUTOMATION_FOLLOW_UP = "automation_follow_up";
    public const CAMPAIGN_MESSAGE = "campaign_message";
    public const IMPORTED_LEAD_CAMPAIGN = "imported_lead_campaign";
    public const WARMUP = "warmup";
    public const RETRY = "retry";
}
