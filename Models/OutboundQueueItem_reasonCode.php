<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OutboundQueueItem_reasonCode extends Enum {
    public const ALLOWED = "allowed";
    public const NO_ELIGIBLE_PHONE_NUMBER = "no_eligible_phone_number";
    public const TEN_DLC_NOT_APPROVED = "ten_dlc_not_approved";
    public const PHONE_NUMBER_DAILY_LIMIT_REACHED = "phone_number_daily_limit_reached";
    public const PHONE_NUMBER_HOURLY_LIMIT_REACHED = "phone_number_hourly_limit_reached";
    public const PHONE_NUMBER_MINUTE_LIMIT_REACHED = "phone_number_minute_limit_reached";
    public const BUSINESS_DAILY_LIMIT_REACHED = "business_daily_limit_reached";
    public const BUSINESS_HOURLY_LIMIT_REACHED = "business_hourly_limit_reached";
    public const BUSINESS_MINUTE_LIMIT_REACHED = "business_minute_limit_reached";
    public const LEAD_DAILY_LIMIT_REACHED = "lead_daily_limit_reached";
    public const LEAD_HOURLY_LIMIT_REACHED = "lead_hourly_limit_reached";
    public const LEAD_RECENTLY_CONTACTED = "lead_recently_contacted";
    public const LEAD_ARCHIVED = "lead_archived";
    public const QUIET_HOURS = "quiet_hours";
    public const WALLET_INSUFFICIENT = "wallet_insufficient";
    public const CONTACT_OPTED_OUT = "contact_opted_out";
    public const IMPORTED_LEAD_REQUIRES_CONSENT = "imported_lead_requires_consent";
    public const AUTOMATION_BULK_IMPORT_DISABLED = "automation_bulk_import_disabled";
    public const NUMBER_COOLING_DOWN = "number_cooling_down";
    public const NUMBER_HEALTH_BLOCKED = "number_health_blocked";
    public const PROVIDER_FAILURE_BACKOFF = "provider_failure_backoff";
    public const CAMPAIGN_DAILY_LIMIT_REACHED = "campaign_daily_limit_reached";
    public const RESERVATION_UNAVAILABLE = "reservation_unavailable";
}
