<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EventTableRow_selectionReason extends Enum {
    public const STICKY_CONVERSATION = "StickyConversation";
    public const LEAD_ASSIGNED = "LeadAssigned";
    public const CAMPAIGN_OR_SOURCE = "CampaignOrSource";
    public const PREFERRED = "Preferred";
    public const LOCAL_AREA = "LocalArea";
    public const HEALTHY_POOL = "HealthyPool";
    public const FALLBACK_DEFAULT = "FallbackDefault";
    public const MANUAL_OVERRIDE = "ManualOverride";
}
