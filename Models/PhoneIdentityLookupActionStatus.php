<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneIdentityLookupActionStatus extends Enum {
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
}
