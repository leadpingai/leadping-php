<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessActivationState_domainSearchStage extends Enum {
    public const QUEUED = "Queued";
    public const ASKING_OPEN_AI = "AskingOpenAi";
    public const CHECKING_CLOUDFLARE = "CheckingCloudflare";
    public const RANKING = "Ranking";
    public const COMPLETE = "Complete";
    public const FAILED = "Failed";
}
