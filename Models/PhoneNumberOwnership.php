<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PhoneNumberOwnership extends Enum {
    public const UNASSIGNED = "Unassigned";
    public const LEADPING = "Leadping";
    public const ORGANIZATION = "Organization";
}
