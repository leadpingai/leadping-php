<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneIdentityLookupActionType extends Enum {
    public const VALIDATION = "validation";
    public const ENRICHMENT = "enrichment";
    public const UNWANTED_NUMBER_CHECK = "unwanted-number-check";
}
