<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WebsiteLifecycleStatus extends Enum {
    public const NOT_STARTED = "NotStarted";
    public const DOMAIN_SUGGESTIONS_PENDING = "DomainSuggestionsPending";
    public const DOMAIN_SELECTION_PENDING = "DomainSelectionPending";
    public const DOMAIN_PURCHASE_PENDING = "DomainPurchasePending";
    public const DOMAIN_PURCHASED = "DomainPurchased";
    public const WEBSITE_GENERATION_QUEUED = "WebsiteGenerationQueued";
    public const WEBSITE_GENERATING = "WebsiteGenerating";
    public const WEBSITE_DEPLOYMENT_QUEUED = "WebsiteDeploymentQueued";
    public const WEBSITE_DEPLOYING = "WebsiteDeploying";
    public const WEBSITE_LIVE = "WebsiteLive";
    public const WEBSITE_FAILED = "WebsiteFailed";
    public const MANUALLY_BYPASSED = "ManuallyBypassed";
}
