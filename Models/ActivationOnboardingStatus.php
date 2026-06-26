<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivationOnboardingStatus extends Enum {
    public const DRAFT = "Draft";
    public const SUBMITTED = "Submitted";
    public const FAILED = "Failed";
}
