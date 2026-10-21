<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConsentVerificationStatus extends Enum {
    public const VERIFIED = "Verified";
    public const UNVERIFIED = "Unverified";
    public const QUARANTINED = "Quarantined";
}
