<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessResponse_setupStatus extends Enum {
    public const PERSONAL = "Personal";
    public const BUSINESS = "Business";
    public const DETAILS = "Details";
    public const COMPLIANCE = "Compliance";
    public const PHONE = "Phone";
    public const PLAN = "Plan";
    public const BILLING = "Billing";
    public const REVIEW = "Review";
    public const COMPLETE = "Complete";
}
